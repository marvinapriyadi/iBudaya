<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\UploadRequest;
use App\Product;
use App\ProductsPhoto;

class UploadController extends Controller {
    
    
    public function uploadForm()
    {
        return view('uploadFile');
    }
 
    public function uploadSubmit(UploadRequest $request)
    {
        $product = Product::create($request->all());
        $image = $request->image;
        $filename = $image->store('image');
        ProductsPhoto::create([
                'product_id' => $product->id,
                'filename' => $filename
            ]);
        
        return 'Upload successful!';
    }
}