<?php
 
namespace App\Http\Controllers;
 
use Exception;
use Illuminate\Http\Request;
 
class HomeController extends Controller
{
    public function index()
    {
        $num1 = 2;
        $num2 = 5;
        logger()->debug('Aqui é um log antes da soma!');

        $soma = $num2 + $num1;

        logger()->info('A soma é: ', compact('soma'));

        logger()->alert('Alerta!');
        return 'Teste';
    }

    public function soma($num1,$num2)
    {
        $soma = $num1 + $num2;
        logger()->info('Soma feita');

        return $soma;
    }

    public function sub($num1, $num2)
    {
        logger()->debug('Sub feita', ['num1' => $num1, 'num2' => $num2, 'sub' => $num1 - $num2]);
        return 'Teste';
    }

    public function div($num1, $num2)
    {
        if($num2 == 0)
        {
           return logger()->error('Divisor zero!');
        }
        else
        {
           return logger()->info('Div feita');
        }
    }

    public function mult($num1, $num2)
    {
        if($num1 <= 0 || $num2 <= 0)
        {
            return logger()->warning('Negativo');
        }
    }
 
}
