<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use App\Http\Requests\productRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $products = Product::with('category')->get();
        // // This will eager load the 'category' relationship for each product

        // // You can now access the category for each product
        // foreach ($products as $product) {
        //     $categoryName = $product->category->name; // Assuming 'name' is a field in the 'Category' model
        //     // Other product details can be accessed as well
        // }

        // // Return the products to a view or as JSON, etc.
        // return view('products.index', ['products' => $products]);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(productRequest $request)
    {


          try {
            $product = new product();
            // $product->product_id = $request->product_id;
            $product->name = $request->name;
            $product->description = $request->description;
            $product->price = $request->price;
            // $product->stock_quantity = $request->stock_quantity;
            // $product->category_id = $request->category_id ;
            // $product->slug = $request->slug;
            // $product->sku = $request->sku ;
            $product->save();

            return redirect()->route('product.create', $product->id);

            return redirect()->route('product.index');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // product $product
        {
            $product = Product::find($id);

            if (!$product) {
                // Handle the case when the product doesn't exist, e.g., display an error message or redirect
                return redirect()->route('product.index')->with('error', 'Product not found');
            }

            return view('product.show', compact('product'));
        }


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        //
    }
}
