<?php


namespace App\Http\Controllers;


use App\Models\OrdemPagamento;
use App\Negocio\GetNet\CheckoutIframe;
use App\User;

class HomeController extends Controller
{    
    public function index()
    {
        return view('index');
    }
}