<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

//cuse Illuminate\Support\Facades\Request;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Response;

use RealRashid\SweetAlert\Facades\Alert;




class ProvisionamientoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    } 

    
    public function showform()
    {
     
        return view('backend.provisionamiento.provpixel');
    }


     public function addCustomer(Request $request)
     {   
        //Declaracion de variables
        $incoming = $request->all();
        $create_info['nombreCompleto'] = $incoming['nombre'] . ' ' . $incoming['apellido'] ;
        $create_info['telefono'] = $incoming['telefono'];
        $create_info['correo'] = $incoming['correo'];
        $create_info['ciudad'] = $incoming['ciudad'];
        $create_info['pais'] = $incoming['pais'];
        $create_info['docIdentidad'] = $incoming['documentoIdentidad'];
        $create_info['paquete'] = $incoming['paquete'];

        
        //Informacion del paquete con su respectivo codigo
        switch ($create_info['paquete']) {
            case "basico":
                $mago_package_id = 1;

                break;
            default:
                $mago_package_id = 1;
    
        } //fin sw

        
        //MAGO
        try{
            //paso 1: Validacion de clientes

            //1.1 Hacer llamada  a la api para verificar la existencia del cliente
            $cliente = new \GuzzleHttp\Client();
            $response = $cliente->request('POST','https://micable.instel.site:4433/api/public/customer/'. $create_info['correo'] .'?apikey=68feea3e78a75b18182fd81faf322f7c');
           
            //alert()->info('Cuenta no creada','El cliente ya existe');
            toast('Cuenta no creada, el usuario ya existe','info');
            return redirect()->route('formProv');

           } catch (RequestException $e){
                // To catch exactly error 400 use 
                if ($e->hasResponse()){
                    if ($e->getResponse()->getStatusCode() >='400' && $e->getResponse()->getStatusCode() <'500' ) {
                            //Paso 2.1  Creacion de usuario en mago
                            try {
                                $response = $cliente->request('POST','https://micable.instel.site:4433/api/public/customer?apikey=68feea3e78a75b18182fd81faf322f7c'
                                    ,['json' => [
                                        "firstname" => $incoming['nombre'] ,
                                        "lastname" => $incoming['apellido'],
                                        "email"  =>  $create_info['correo'],
                                        "city" =>  $create_info['ciudad'],
                                        "country" => $create_info['pais'] ,
                                        "telephone" => $create_info['telefono'],
                                        "product_id" => $create_info['paquete'],
                                        "password" => $create_info['docIdentidad'],
                                        "username" => $create_info['correo'],
                                        "show_adult" => "0"
                                        ]   //fin json 
                                     ]//fin body
                                );

                                //Paso 2.2  agregando paquete
                                $transactionId = Str::random(25);
                               
                                $response = $cliente->request('POST','https://micable.instel.site:4433/api/public/subscription?apikey=68feea3e78a75b18182fd81faf322f7c'
                                ,['json' =>
                                         [
                                        "username" => $create_info['correo'],
                                        "product_id" => $mago_package_id,
                                        "type" => "subscr",
                                        "transaction_id" => $transactionId
                                        ]//fin json
                                    ]//fin body
                                ); //fin response

                                
                                //Retornar usuario creado con exito
                                //alert()->success('Creación cuentas Pixel','Cliente creado exitosamente',false);
                                toast('Cliente creado exitosamente','success');
                                return redirect()->route('formProv');


                            } catch (Exception $e) {

                                //todo tipo error
                               // alert()->error('Cuenta no creada','Ha ocurrido un error.');
                               toast('Cuenta no creada, ha ocurrido un error','error');
                                return redirect()->route('formProv');
                             }catch (RequestException $e) {

                                //errores 400 y 500
                                //alert()->error('Cuenta no creada','Ha ocurrido un error: '.$e->getResponse()->getStatusCode() );
                               toast('Cuenta no creada, ha ocurrido un error'.$e ,'error');
                                return redirect()->route('formProv');
                             }//catch 2
                    } //fin if valida rango de errores
                } //if que valida si hay una respuesta
           } //fin catch si usuario no existe

    } //fin funcion  addCustomer
} 
