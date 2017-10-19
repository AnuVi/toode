<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use DB;
use App\Product;

class PagesController extends Controller
{
    
    public function getWelcome(){

    	$products = Product::latest()->get();
        

		return view('pages.welcome', compact('products'));
	}

	// show one product
	public function show($id){

    	 $product = Product::find($id);
         //if no product
         if(count($product)==null){
               
                 return view('pages.no', compact('product'));
         } else {

	       return view('pages.show', compact('product'));
        }
	}

	
	//add product

	public function create(){

        return view('pages.create', compact('product'));
    
	}


	public function store(){
       
        $this->validate(request(),[
            'name' => 'required|min:3',
            'price' => 'required|between:0,100000.99',
            'description' => 'required|min:3'
        ]);
         
        
        Product::create(request(['name','price','description']));
        return redirect('/');
    	
	}

   // update product

    public function edit(Product $product){
       
       
         return view('pages.edit', compact('product'));

    }

    public function update(Request $request, Product $product){

        
        $this->validate($request,[
            'name' => 'required|min:3',
            'price' => 'required|between:0,100000.99',
            'description' => 'required|min:3'
        ]);
         $product->update($request->all());

         $name = $request->input('name');
        
        if($request->ajax())
           
            return response()->json(['status' => "success",
            'msg' => 'Toode muudetud! ',
             'val' => $name]);
        else
            return back();
        
      
    }


	//delete product

	public function delete(Request $request){
             
		     $product = Product::find($request->id);
             
			 $product->delete();

			return response()->json(['return' => 1]);
	}
	
}
