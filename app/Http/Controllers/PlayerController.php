<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
{

    /************************************Funcion play********************************/
    /*
    public function play(Request $request)
    {
        $auth=session('BeenetSession');

        if (is_null($auth ))
        { 
            return redirect('/');
        }

        $categories = session('categories');
        $channels = session('channels');

        return view('site.pages.player', compact('channels','categories'));
    }
    */
    /**********************************************************************************/

    public function getPlayer(){

        $auth=session('BeenetSession');

        if (is_null($auth ))
        { 
            return redirect('/');
        }

        $categories = session('categories');
        $channels = session('channels');
        
        $lista = null;
        $idCategoria = null;

        return view('site.pages.player', compact('lista','channels','categories','idCategoria'));      

    }
    
    public function filterCategory(Request $request){
        $data = $request->all();
        
        $idCategoria = $data['select-category'];
        $lastStream = $data['lastStream'];
        $lista = '';

        
        return view('site.pages.player',compact('lista','lastStream','idCategoria'));

    }
    
    
}
