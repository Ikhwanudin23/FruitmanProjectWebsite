<?php

namespace App\Http\Controllers\BackOffice;

use App\Seller;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SellerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $datas = Seller::all('pages.sellerlist', compact('datas'));
    }

}
