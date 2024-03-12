<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    private $product;
    public function __construct()
    {
        $this->product = new Product();
    }
    public function productList()
    {
        //商品情報を取得する
        $productList = $this->product->getProductList();
        return view('product.list', compact('productList'));
    }

    public function productShow()
    {
        return view('product.show');
    }
}
