<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class CatalogController extends Controller

{





    public function getShow($id)
    {
        $arrayPeliculas= Movie::findOrFail($id);

        return view('catalog.show', array("pelicula"=> $arrayPeliculas));
    }
    public function getIndex()
    {
        $arrayPeliculas= Movie::all();
        return view('catalog.index' , array("pelicula"=> $arrayPeliculas));
    }
    public function getCreate()
    {
        return view('catalog.create');
    }
    public function getEdit($id)
    {
        $arrayPeliculas= Movie::findOrFail($id);

        return view('catalog.edit' , array('id'=>$arrayPeliculas));
    }
    public function postDevolver($id){
        $pelicula= Movie::findOrFail($id);

        if ($pelicula->rented == 0){
            $pelicula->rented = 1;
        }else{
            $pelicula->rented = 0;
        }
        $pelicula->save();

        header('Location: http://127.0.0.1:8000/catalog/show/'.$pelicula->id);
        exit();
    }
}
