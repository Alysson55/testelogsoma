<?php
 
namespace App\Http\Controllers;
 
use Exception;
use Illuminate\Http\Request;
 
class HomeController extends Controller
{
    public function soma($num1, $num2){
        $total = $num1 +$num2;
        logger()->info('Soma feita');
        return $total; 
    }

 
}
