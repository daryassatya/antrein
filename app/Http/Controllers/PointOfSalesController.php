<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PointOfSalesController extends Controller
{
    public function index()
    {
        $data['title'] = 'Point of Sales';
        $data['products'] = Product::orderBy('product_id', 'asc')->paginate(6);
        return view('backend.pos.index',$data);
    }
}
