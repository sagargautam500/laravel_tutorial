<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\Product;

class SellerController extends Controller
{
    //
 public function list(){
   // $sellers = Seller::all()
   // $sellers = Seller::with('products')->get();
$seller = Seller::with('products')->find(1);
return $seller;
 }


   public function product_list(){
    $products = Product::with('seller')->get();
    return $products;
}
}