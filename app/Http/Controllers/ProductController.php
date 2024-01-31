<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page_title'] = 'List Products';
        $data['products'] = Product::get();

        return view('backend.product.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['page_title'] = 'Create product';

        return view('backend.product.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'prod_id' => 'required',
            'prod_name' => 'required',
            'price' => 'min:1|required',
            'image' => 'required|mimes:png,jpg,jpeg'
        ]);
        try {
            $product = new Product();
            $product->product_id = $request->prod_id;
            $product->product_name = $request->prod_name;
            $product->price = $request->price;

            // Image
            $documentPath = public_path('product/image/');

            $document = $request->file('image');
            $documentName = Str::random(20) . '.' . $document->getClientOriginalExtension();
            // check duplicate name
            $i = 1;
            while (file_exists($documentPath . $documentName)) {
                $documentName = Str::random(20) . '.' . $document->getClientOriginalExtension();
                $i++;
            }
            $document->move($documentPath, $documentName);

            $product->image = $documentName;
            $product->perusahaan_id = Auth::user()->perusahaan_id;
            $product->save();

            return redirect()->route('backend.product.index')->with('success', 'Product Added Successfully!');
        } catch (\Throwable $th) {
            return redirect()->route('backend.product.index')->with('failed', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $data['product'] = $product;

        return view('backend.product.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'prod_id' => 'required',
            'prod_name' => 'required',
            'price' => 'min:1|required',
            'image' => 'nullable|mimes:png,jpg,jpeg'
        ]);
        try {
            $product->product_id = $request->prod_id;
            $product->product_name = $request->prod_name;
            $product->price = $request->price;

            // Image
            $documentPath = public_path('product/image/');

            if ($request->file('image')) {
                $document = $request->file('image');
                $documentName = Str::random(20) . '.' . $document->getClientOriginalExtension();
                // check duplicate name
                $i = 1;
                while (file_exists($documentPath . $documentName)) {
                    $documentName = Str::random(20) . '.' . $document->getClientOriginalExtension();
                    $i++;
                }
                $document->move($documentPath, $documentName);
    
                $product->image = $documentName;
            }
            $product->perusahaan_id = Auth::user()->perusahaan_id;
            $product->save();

            return redirect()->route('backend.product.index')->with('success', 'Product Edited Successfully!');
        } catch (\Throwable $th) {
            return redirect()->route('backend.product.index')->with('failed', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        try {
            Product::destroy($product->id);
            Session::flash('success', 'Product Successfully Deleted!');

            return response()->json([
                'success' => true,
                'message' => 'Product successfully deleted',
            ], 200);
        } catch (\Throwable $th) {
            Session::flash('failed', $th->getMessage());

            return response()->json([
                'success' => false,
                'message' => $th->getMessage(),
            ], 200);
        }
    }
}
