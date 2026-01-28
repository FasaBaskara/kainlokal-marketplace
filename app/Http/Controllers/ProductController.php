<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->sort;
        $search = $request->search;
        $products = Product::query();
        $products->orderByRaw("stock = 0 ASC");

        if ($search) {
            $products->where("name", "like", "%" . $search . "%");
        }

        if ($sort == "price_low") {
            $products->orderBy("price", "asc");
        } elseif ($sort == "price_high") {
            $products->orderBy("price", "desc");
        } elseif ($sort == "newest") {
            $products->orderBy("created_at", "desc");
        } elseif ($sort == "stock") {
            $products->orderBy("stock", "desc");
        } else {
            $products->orderBy("id", "asc");
        }

        return view("catalogue", [
            "products" => $products->get(),
            "sort" => $sort,
            "search" => $search
        ]);
    }


    public function show($id)
    {
        $product = Product::findOrFail($id);

        $relatedProducts = Product::where('id', '!=', $product->id)
            ->inRandomOrder()
            ->limit(2)
            ->get();

        return view('product-detail', compact('product', 'relatedProducts'));
    }
}
