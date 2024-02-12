<?php

namespace App\Http\Controllers;

use App\Models\Queue;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PointOfSalesController extends Controller
{
    public function index()
    {
        $data['title'] = 'Point of Sales';
        $data['queues'] = Queue::where('perusahaan_id', Auth::user()->perusahaan_id)->get();
        $data['products'] = Product::orderBy('product_id', 'asc')->paginate(6);
        return view('backend.pos.index',$data);
    }
}
