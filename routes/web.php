<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//primera ruta
Route::get('hola', function() {
    echo "hola 24";
});

//ruta de arreglos
Route::get('arreglo', function() {
    $estudiantes = [
        "CA" => 1,
        "JO" => "Josè",
        "AN" => "Ana"
    ];

    //Recorrer arreglo
    foreach($estudiantes as $e){
        echo $e. "<hr/>";
    }

    //agregar elemneto en PHP
    $estudiantes["CR"]= "Cristian";
    var_dump($estudiantes);
    
    /*MOSTRAR COMO FUNCIONA 
     echo "<pre>"; 
    var_dump($estudiantes);
    echo "</pre>";*/
});

//ruta de un arreglo dentro de otro  
Route::get('paises', function(){
    //arreglo de paises
    $paises=[
        "Colombia" => [
            "capital" => "Bogotà",
            "moneda" => "Peso",
            "poblaciòn" => 51,

            "ciudades" =>[
                "Medellìn",
                "Cali",
                "Barranquilla"
            ]
         ],

        "Peru" => [
            "capital" => "Lima",
            "moneda" => "Sol",
            "poblaciòn" => 32,

            "ciudades" =>[
                "Arequipa",
                "Trujillo",
            ]
        ],
        "Paraguay" => [
            "capital" => "Asunciòn",
            "moneda" => "Guaranì",
            "poblaciòn" => 7,

            "ciudades" =>[
                "Luque"
            ]
        ],
        "Ecuador" => [
            "capital" => "Quito",
            "moneda" => "USD",
            "poblaciòn" => 17
        ],
        "Chile" => [
            "capital" => "Santiago",
            "moneda" => "Peso",
            "poblaciòn" => 19
        ]
    ];

    //mostrar vista
    return view('paises')->with("paises",  $paises);

    //anàlizar la variable paises - varias dimensiones
    echo "<pre>";
    var_dump($paises);
    echo"</pre>";

    
});