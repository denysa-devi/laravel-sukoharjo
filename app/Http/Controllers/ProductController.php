<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class ProductController extends Controller
{
    public function index()
    {
        $products= Product::all();
        return view('index', compact('products'));
    }

    public function createProduct()
    {
        return view('tambah_produk');
    }

    public function storeProduct()
    {
        product::create([
            'name' => request()->name,
            'slug' => Str::slug(request()->name),
            'description' => request()->description,
            'price' => request()->price,
        ]);
        return redirect('/');
    }
    public function edit($productID)
    {
        $product = Product::find($productID);
        return view('edit_produk', compact('product'));
    }
    public function update($productID)
    {
        $product = Product::find($productID);
        $product->update([
            'name' => request()->name,
            'slug' => Str::slug(request()->name),
            'description' => request()->description,
            'price' => request()->price,
        ]);
        return redirect('/');
    }
    public function delete($productID)
    {
      product::destroy($productID);
      return redirect("/");
    }
}
