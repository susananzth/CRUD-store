<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Price;
use App\Models\Size;
use App\Models\Color;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Gate::denies('product_index')) {
            return redirect()->route('home')
                ->with('message', 'No cuenta con los permisos necesarios para ejecutar la acción.')
                ->with('alert_class', 'danger');
        } else {
            $products = Product::with('prices')->with('sizes')->get();
            return view('products.index', compact('products'));
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $products = Product::with('prices')->with('sizes')->get();
        return view('store.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Gate::denies('product_add')) {
            return redirect()->route('products.index')
                ->with('message', 'No cuenta con los permisos necesarios para ejecutar la acción.')
                ->with('alert_class', 'danger');
        } else {
            $data['prices'] = Price::all();
            $data['sizes'] = Size::all();
            $data['colors'] = Color::all();
            return view('products.create', $data);
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
        $data['product'] = $product;
        $data['sizes'] = Size::all();
        return view('store.show', $data);
    }
}
