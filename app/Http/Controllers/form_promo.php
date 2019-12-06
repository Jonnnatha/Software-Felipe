<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Entities\oferta;

class form_promo extends Controller
{
  public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(10);
        return view('products.index',['products' => $products]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {

      $extesion=$request->img->extension();
      $namefile="{$extesion}";
      $oferta = new oferta;

            $oferta->nome = $request->nome;
            $oferta->valor_inicial = $request->valor1;
            $oferta->valor_promocao = $request->valor2;
            $oferta->valor_final = $request->valor_final;
            $oferta->analogia = $request->analogia;
$oferta->img =$namefile;
            $oferta->notes = $request->desc;
            $oferta->save();
              return view('dashboard.menu');
    }

    public function show()
    {
      $oferta = oferta::get();
return view('dashboard.tabela', compact('oferta'));

    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit',compact('product'));
    }

    public function update(Request $request, $id)
    {
        $oferta = oferta::findOrFail($id);
        $oferta->nome = $request->nome;
        $oferta->valor_inicial = $request->valor1;
        $oferta->valor_promocao = $request->valor2;
        $oferta->valor_final ="11";
        $oferta->analogia = $request->analogia;
        $oferta->img = '1';
        $oferta->notes = $request->desc;
        $oferta->save();
      return view('dashboard.menu');
    }

    public function destroy($id)
    {
        $product = oferta::findOrFail($id);
        $product->delete();
        $oferta = oferta::get();
  return view('dashboard.tabela', compact('oferta'));
    }
}
