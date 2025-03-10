<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ActividadController extends Controller
{
    public function formulacuadratica($a, $b, $c)
    {
        $discriminante = pow($b, 2) - (4 * $a * $c);
        if ($discriminante > 0) {
            $raiz1 = (-$b + sqrt($discriminante)) / (2 * $a);
            $raiz2 = (-$b - sqrt($discriminante)) / (2 * $a);
            return "<h2> La solucion de la ecuación + es: " . $raiz1 . "<h2> La solucion de la ecuación - es: " . $raiz2;
        } elseif ($discriminante == 0) {
            $raiz = -$b / (2 * $a);
            return "<h2> La única raíz de la ecuación cuadrática es: " . $raiz;
        } else {
            return "<h2> La ecuación cuadrática no tiene raíces reales";
        }
    }
    


    public function NumPrimo($num){
        if ($num <= 1) return " <h2>El numero que has ingresado es $num"; 
        for ($i = 2; $i < $num; $i++) {
            if ($num % $i == 0){
                return "<h2> El numero $num no es primo"; 
            }
        }
        return "<h2> El numero $num es primo";
    }


    public function NumAmigos($num1, $num2) {
        function sumaDivisores($num) {
            $suma = 0;
            for ($i = 1; $i < $num; $i++) {
                if ($num % $i == 0) {
                    $suma += $i;
                }
            }
            return $suma;
        }
        if (sumaDivisores($num1) == $num2 && sumaDivisores($num2) == $num1) {
            return "<h2>Los numeros $num1 y $num2 son numeros amigos";
        } else {
            return "<h2>Los numeros $num1 y $num2 NO son numeros amigos";
        }
    }




}
