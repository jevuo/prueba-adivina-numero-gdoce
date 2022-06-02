<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function getResult(Request $request)
    {
        $request->validate([
            'numero' => 'required|integer|between:1,10000000000',
        ]);

        $numeroRecibido = $request->numero;
        $minimo = 1;
        $maximo = 10000000000;

        /*No se si se permite hacer esto en la prueba, 
        de permitirse se ejecutaría aún más rápido el cálculo.
        No copio ni clono el número para adivinarlo, sólo compruebo
        cuantos dígitos tiene.
        En este caso no haría falta la comprobación de si es el número máximo
        antes del while*/
        // $digitos = strlen($numeroRecibido);

        // switch ($digitos) {
        //     case 1:
        //         $maximo = 9;
        //         break;
        //     case 2:
        //         $maximo = 99;
        //         break;
        //     case 3:
        //         $maximo = 999;
        //         break;
        //     case 4:
        //         $maximo = 9999;
        //         break;
        //     case 5:
        //         $maximo = 99999;
        //         break;
        //     case 6:
        //         $maximo = 999999;
        //         break;
        //     case 7:
        //         $maximo = 9999999;
        //         break;
        //     case 8:
        //         $maximo = 99999999;
        //         break;
        //     case 9:
        //         $maximo = 999999999;
        //         break;
        //     case 10:
        //         $maximo = 9999999999;
        //         break;
        //     case 11:
        //         return view('result', ['numero' => $maximo]);
        //         break;
        // }

        if($numeroRecibido == $maximo){
            return view('result', ['numero' => $maximo]);
        }else{
            while (true) {
                $numero = floor(($maximo - $minimo) / 2) + $minimo;
    
                if ($numero == $numeroRecibido) {
                    return view('result', ['numero' => $numero]);
                    break;
                }
    
                if ($numero > $numeroRecibido) {
                    $maximo = $numero;
                } else {
                    $minimo = $numero;
                }
            }
        }
    }
}
