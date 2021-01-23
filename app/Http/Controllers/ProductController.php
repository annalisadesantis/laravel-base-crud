<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'products' => Product::all()
        ];

        return view('products.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // restituisco la view del form
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // salvo i dati del form in $data
        $data = $request->all();
        // creo una nuova variabile di istanza dentro Product
        $product = new Product();
        // riempio i campi automaticamente
        $product->fill($data);
        // salvo i dati e li invio al DB
        $product->save();

        // faccio sempre una redirect verso un rotta get
        return redirect()->route('products.index')->withSuccess('Salvataggio avvenuto correttamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // cerca il prodotto se non viene inserito il giusto url mi da null
        $product = Product::find($id);
        // null è uguale a falso e non entra nel if e fa abort
        // se invece trova il prodotto, $product è true e allora entra nella if e mi restiturisce la view giusta
        if ($product) {
            $data = [
                'product' => $product
            ];
            return view('products.show', $data);
        }
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        if ($product) {
            $data = [
                'product' => $product
            ];
            return view('products.edit', $data);
        }
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->all();

        $product->update($data);

        return redirect()->route('products.show', ['product' => $product->id])->withSuccess('Modifica avvenuta correttamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->withSuccess('Cancellazione avvenuta correttamente');
    }
}
