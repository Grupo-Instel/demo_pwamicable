@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Registro de Cliente</h3>
                </div>
                <div class="panel-body">
                <form method="POST" action="{{ route('addCustomer') }}">
                        @csrf
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nombre" placeholder="Nombre *" value="" required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control"  name="telefono" placeholder="Telefono *" value="" required />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="ciudad" placeholder="Localidad/ Ciudad *" value="" required />
                                </div>           
                                <div class="form-group">
                                    <input type="text" class="form-control" name="documentoIdentidad" placeholder="Documento de identidad*" value="" required />
                                </div> 
                            </div>
    
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="apellido" placeholder="Apellido *" value=""  required/>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="correo" placeholder="Correo electronico *" value=""  required/>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="pais" required>
                                        <option class="hidden"  selected disabled>Seleccione su pa??s</option>
                                        <option value=???AF??? >Afganist??n</option>
                                        <option value=???AL??? >Albania</option>
                                        <option value=???DZ??? >Argelia</option>
                                        <option value=???AS??? >Samoa Americana</option>
                                        <option value=???AD??? >Andorra</option>
                                        <option value=???AO??? >Angola</option>
                                        <option value=???AI??? >Anguilla</option>
                                        <option value=???AQ??? >Ant??rtida</option>
                                        <option value=???AG??? >Antigua y Barbuda</option>
                                        <option value=???AR??? >Argentina</option>
                                        <option value=???AM??? >Armenia</option>
                                        <option value=???AW??? >Aruba</option>
                                        <option value=???AU??? >Australia</option>
                                        <option value=???AT??? >Austria</option>
                                        <option value=???AZ??? >Azerbaiy??n</option>
                                        <option value=???BS??? >Bahamas</option>
                                        <option value=???BH??? >Bahrein</option>
                                        <option value=???BD??? >Bangladesh</option>
                                        <option value=???BB??? >Barbados</option>
                                        <option value=???BY??? >Bielorrusia</option>
                                        <option value=???BE??? >B??lgica</option>
                                        <option value=???BZ??? >Belice</option>
                                        <option value=???BJ??? >Benin</option>
                                        <option value=???BM??? >Bermudas</option>
                                        <option value=???BT??? >But??n</option>
                                        <option value=???BO??? >Bolivia</option>
                                        <option value=???BA??? >Bosnia y Herzegovina</option>
                                        <option value=???BW??? >Botswana</option>
                                        <option value=???BV??? >Isla Bouvet</option>
                                        <option value=???BR??? >Brasil</option>
                                        <option value=???IO??? >Territorios brit??nicos del oc??ano ??ndico</option>
                                        <option value=???BN??? >Brunei</option>
                                        <option value=???BG??? >Bulgaria</option>
                                        <option value=???BF??? >Burkina Faso</option>
                                        <option value=???BI??? >Burundi</option>
                                        <option value=???KH??? >Camboya</option>
                                        <option value=???CM??? >Camer??n</option>
                                        <option value=???CA??? >Canad??</option>
                                        <option value=???CV??? >Cabo Verde</option>
                                        <option value=???KY??? >Islas Caim??n</option>
                                        <option value=???CF??? >Rep??blica Centroafricana</option>
                                        <option value=???TD??? >Chad</option>
                                        <option value=???CL??? >Chile</option>
                                        <option value=???CN??? >China</option>
                                        <option value=???CX??? >Isla de Christmas</option>
                                        <option value=???CC??? >Islas de Cocos o Keeling</option>
                                        <option value=???CO??? >Colombia</option>
                                        <option value=???KM??? >Comores</option>
                                        <option value=???CG??? >Congo</option>
                                        <option value=???CD??? >Congo, Rep??blica Democr??tica del</option>
                                        <option value=???CK??? >Islas Cook</option>
                                        <option value=???CR??? >Costa Rica</option>
                                        <option value=???CI??? >Costa de Marf??l</option>
                                        <option value=???HR??? >Croacia (Hrvatska)</option>
                                        <option value=???CU??? >Cuba</option>
                                        <option value=???CY??? >Chipre</option>
                                        <option value=???CZ??? >Rep??blica Checa</option>
                                        <option value=???DK??? >Dinamarca</option>
                                        <option value=???DJ??? >Djibouti</option>
                                        <option value=???DM??? >Dominica</option>
                                        <option value=???DO??? >Rep??blica Dominicana</option>
                                        <option value=???TP??? >Timor Oriental</option>
                                        <option value=???EC??? >Ecuador</option>
                                        <option value=???EG??? >Egipto</option>
                                        <option value=???SV??? selected >El Salvador</option>
                                        <option value=???GQ??? >Guinea Ecuatorial</option>
                                        <option value=???ER??? >Eritrea</option>
                                        <option value=???EE??? >Estonia</option>
                                        <option value=???ET??? >Etiop??a</option>
                                        <option value=???FK??? >Islas Malvinas</option>
                                        <option value=???FO??? >Islas Faroe</option>
                                        <option value=???FJ??? >Fiji</option>
                                        <option value=???FI??? >Finlandia</option>
                                        <option value=???FR??? >Francia</option>
                                        <option value=???GF??? >Guayana Francesa</option>
                                        <option value=???PF??? >Polinesia Francesa</option>
                                        <option value=???TF??? >Territorios franceses del Sur</option>
                                        <option value=???GA??? >Gab??n</option>
                                        <option value=???GM??? >Gambia</option>
                                        <option value=???GE??? >Georgia</option>
                                        <option value=???DE??? >Alemania</option>
                                        <option value=???GH??? >Ghana</option>
                                        <option value=???GI??? >Gibraltar</option>
                                        <option value=???GR??? >Grecia</option>
                                        <option value=???GL??? >Groenlandia</option>
                                        <option value=???GD??? >Granada</option>
                                        <option value=???GP??? >Guadalupe</option>
                                        <option value=???GU??? >Guam</option>
                                        <option value=???GT??? >Guatemala</option>
                                        <option value=???GN??? >Guinea</option>
                                        <option value=???GW??? >Guinea-Bissau</option>
                                        <option value=???GY??? >Guayana</option>
                                        <option value=???HT??? >Hait??</option>
                                        <option value=???HM??? >Islas Heard y McDonald</option>
                                        <option value=???HN???  >Honduras</option>
                                        <option value=???HK??? >Hong Kong</option>
                                        <option value=???HU??? >Hungr??a</option>
                                        <option value=???IS??? >Islandia</option>
                                        <option value=???IN??? >India</option>
                                        <option value=???ID??? >Indonesia</option>
                                        <option value=???IR??? >Ir??n</option>
                                        <option value=???IQ??? >Irak</option>
                                        <option value=???IE??? >Irlanda</option>
                                        <option value=???IL??? >Israel</option>
                                        <option value=???IT??? >Italia</option>
                                        <option value=???JM??? >Jamaica</option>
                                        <option value=???JP??? >Jap??n</option>
                                        <option value=???JO??? >Jordania</option>
                                        <option value=???KZ??? >Kazajist??n</option>
                                        <option value=???KE??? >Kenia</option>
                                        <option value=???KI??? >Kiribati</option>
                                        <option value=???KR??? >Corea</option>
                                        <option value=???KP??? >Corea del Norte</option>
                                        <option value=???KW??? >Kuwait</option>
                                        <option value=???KG??? >Kirguizist??n</option>
                                        <option value=???LA??? >Laos</option>
                                        <option value=???LV??? >Letonia</option>
                                        <option value=???LB??? >L??bano</option>
                                        <option value=???LS??? >Lesotho</option>
                                        <option value=???LR??? >Liberia</option>
                                        <option value=???LY??? >Libia</option>
                                        <option value=???LI??? >Liechtenstein</option>
                                        <option value=???LT??? >Lituania</option>
                                        <option value=???LU??? >Luxemburgo</option>
                                        <option value=???MO??? >Macao</option>
                                        <option value=???MG??? >Madagascar</option>
                                        <option value=???MW??? >Malawi</option>
                                        <option value=???MY??? >Malasia</option>
                                        <option value=???MV??? >Maldivas</option>
                                        <option value=???ML??? >Mal??</option>
                                        <option value=???MT??? >Malta</option>
                                        <option value=???MH??? >Islas Marshall</option>
                                        <option value=???MQ??? >Martinica</option>
                                        <option value=???MR??? >Mauritania</option>
                                        <option value=???MU??? >Mauricio</option>
                                        <option value=???YT??? >Mayotte</option>
                                        <option value=???MX??? >M??xico</option>
                                        <option value=???FM??? >Micronesia</option>
                                        <option value=???MD??? >Moldavia</option>
                                        <option value=???MC??? >M??naco</option>
                                        <option value=???MN??? >Mongolia</option>
                                        <option value=???MS??? >Montserrat</option>
                                        <option value=???MA??? >Marruecos</option>
                                        <option value=???MZ??? >Mozambique</option>
                                        <option value=???MM??? >Birmania</option>
                                        <option value=???NA??? >Namibia</option>
                                        <option value=???NR??? >Nauru</option>
                                        <option value=???NP??? >Nepal</option>
                                        <option value=???AN??? >Antillas Holandesas</option>
                                        <option value=???NL??? >Pa??ses Bajos</option>
                                        <option value=???NC??? >Nueva Caledonia</option>
                                        <option value=???NZ??? >Nueva Zelanda</option>
                                        <option value=???NI??? >Nicaragua</option>
                                        <option value=???NE??? >N??ger</option>
                                        <option value=???NG??? >Nigeria</option>
                                        <option value=???NU??? >Niue</option>
                                        <option value=???NF??? >Norfolk</option>
                                        <option value=???MP??? >Islas Marianas del Norte</option>
                                        <option value=???NO??? >Noruega</option>
                                        <option value=???OM??? >Om??n</option>
                                        <option value=???PK??? >Paquist??n</option>
                                        <option value=???PW??? >Islas Palau</option>
                                        <option value=???PA??? >Panam??</option>
                                        <option value=???PG??? >Pap??a Nueva Guinea</option>
                                        <option value=???PY??? >Paraguay</option>
                                        <option value=???PE??? >Per??</option>
                                        <option value=???PH??? >Filipinas</option>
                                        <option value=???PN??? >Pitcairn</option>
                                        <option value=???PL??? >Polonia</option>
                                        <option value=???PT??? >Portugal</option>
                                        <option value=???PR??? >Puerto Rico</option>
                                        <option value=???QA??? >Qatar</option>
                                        <option value=???RE??? >Reuni??n</option>
                                        <option value=???RO??? >Rumania</option>
                                        <option value=???RU??? >Rusia</option>
                                        <option value=???RW??? >Ruanda</option>
                                        <option value=???SH??? >Santa Helena</option>
                                        <option value=???KN??? >Saint Kitts y Nevis</option>
                                        <option value=???LC??? >Santa Luc??a</option>
                                        <option value=???PM??? >St. Pierre y Miquelon</option>
                                        <option value=???VC??? >San Vicente y Granadinas</option>
                                        <option value=???WS??? >Samoa</option>
                                        <option value=???SM??? >San Marino</option>
                                        <option value=???ST??? >Santo Tom?? y Pr??ncipe</option>
                                        <option value=???SA??? >Arabia Saud??</option>
                                        <option value=???SN??? >Senegal</option>
                                        <option value=???SC??? >Seychelles</option>
                                        <option value=???SL??? >Sierra Leona</option>
                                        <option value=???SG??? >Singapur</option>
                                        <option value=???SK??? >Rep??blica Eslovaca</option>
                                        <option value=???SI??? >Eslovenia</option>
                                        <option value=???SB??? >Islas Salom??n</option>
                                        <option value=???SO??? >Somalia</option>
                                        <option value=???ZA??? >Rep??blica de Sud??frica</option>
                                        <option value=???ES??? >Espa??a</option>
                                        <option value=???LK??? >Sri Lanka</option>
                                        <option value=???SD??? >Sud??n</option>
                                        <option value=???SR??? >Surinam</option>
                                        <option value=???SJ??? >Islas Svalbard y Jan Mayen</option>
                                        <option value=???SZ??? >Suazilandia</option>
                                        <option value=???SE??? >Suecia</option>
                                        <option value=???CH??? >Suiza</option>
                                        <option value=???SY??? >Siria</option>
                                        <option value=???TW??? >Taiw??n</option>
                                        <option value=???TJ??? >Tayikist??n</option>
                                        <option value=???TZ??? >Tanzania</option>
                                        <option value=???TH??? >Tailandia</option>
                                        <option value=???TG??? >Togo</option>
                                        <option value=???TK??? >Islas Tokelau</option>
                                        <option value=???TO??? >Tonga</option>
                                        <option value=???TT??? >Trinidad y Tobago</option>
                                        <option value=???TN??? >T??nez</option>
                                        <option value=???TR??? >Turqu??a</option>
                                        <option value=???TM??? >Turkmenist??n</option>
                                        <option value=???TC??? >Islas Turks y Caicos</option>
                                        <option value=???TV??? >Tuvalu</option>
                                        <option value=???UG??? >Uganda</option>
                                        <option value=???UA??? >Ucrania</option>
                                        <option value=???AE??? >Emiratos ??rabes Unidos</option>
                                        <option value=???UK??? >Reino Unido</option>
                                        <option value=???US??? >Estados Unidos</option>
                                        <option value=???UM??? >Islas menores de Estados Unidos</option>
                                        <option value=???UY??? >Uruguay</option>
                                        <option value=???UZ??? >Uzbekist??n</option>
                                        <option value=???VU??? >Vanuatu</option>
                                        <option value=???VA??? >Ciudad del Vaticano (Santa Sede)</option>
                                        <option value=???VE??? >Venezuela</option>
                                        <option value=???VN??? >Vietnam</option>
                                        <option value=???VG??? >Islas V??rgenes (Reino Unido)</option>
                                        <option value=???VI??? >Islas V??rgenes (EE.UU.)</option>
                                        <option value=???WF??? >Islas Wallis y Futuna</option>
                                        <option value=???YE??? >Yemen</option>
                                        <option value=???YU??? >Yugoslavia</option>
                                        <option value=???ZM??? >Zambia</option>
                                        <option value=???ZW??? >Zimbabue</option>
                                    
                                    </select>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control" name="paquete" required>
                                        <option class="hidden"  selected disabled>Seleccione tipo de paquete</option>
                                        <option value="basico">Basico</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-md-offset-1" style="margin-left:150px">
                                <input type="submit" class="btnRegister"  value="Registrarse"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
        
    </div>
</div>

@endsection

