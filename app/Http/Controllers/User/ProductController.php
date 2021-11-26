<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    public function ViewProductLists(){

        $products = Product::orderBy('created_at', 'DESC')->get();

        return view('user.products.list', compact('products'));
    }

    public function ViewCreateProduct(){

        return view('user.products.create');
    }

    public function PostCreateProduct(Request $request){

        $rules = [
            'image' => 'required|image|mimes:jpg,png,jpeg|max:3072',
            'name' => 'required',
            'unit' => 'required',
            'price' => 'required',
        ];

        $messages = [
            'image.required' => 'Please select product image.',
            'image.image' => 'Please valid file.',
            'image.mimes' => 'Please select png,jpg,jpeg this type extension image.',
            'image.max' => 'Please select 3mb image.',
            
            'name.required' => 'Please enter product name.',
            
            'unit.required' => 'Please select unit.',
            
            'price.required' => 'Please enter product price.',
        ];

        $this->validate($request, $rules, $messages);

        // Move Image
        $productImageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images/product'), $productImageName);

        $requestData = [
            'image' => $productImageName,
            'name' => $request->name,
            'unit' => $request->unit,
            'price' => $request->price,
        ];

        Product::create($requestData);

        return redirect()->route('user.view.product.lists')->with('true', 'Product Create Successfully.');
    }
}
