<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    private $view_path = 'admin.product';

    public function index()
    {
        $products = Product::get();
        return view($this->view_path.'.index',compact('products'));
    }

    public function create()
    {
        return view($this->view_path.'.add');
    }

    public function store(Request $request)
    {
        if ($image = $this->imageUpload($request,'image')){

            $arr = $request->all();
            $arr['image'] = $image;
            unset($arr['_token']);

            Product::create($arr);
        }

        return redirect()->back();
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view($this->view_path.'.edit',compact('product'));
    }

    public function update(Request $request,$id)
    {
        $product = Product::find($id);

        $arr = $request->all();
        if ($request->hasFile('image')) {
            $this->deleteImage('image',$product->image);
            $arr['image'] = $this->imageUpload($request,'image');
        }

        unset($arr['_token']);

        $product->update($arr);

        return redirect()->back();

    }

    public function destroy($id)
    {
        $product = Product::find($id);

            $this->deleteImage('image',$product->image);

            $product->delete();

            return redirect()->back();

    }






    public function imageUpload(Request $request,$imageName)
    {
        if ($request->hasFile($imageName)) {

            $image = $request->file($imageName);
            $fileName = rand(0000, 9999) . '_' . $image->getClientOriginalName();
            $image->move($this->folderName($imageName), $fileName);
            return $fileName;

        } else {
            return null;
        }
    }

    public function folderName($imageName)
    {
        $folderName = $imageName;
        return public_path() . DIRECTORY_SEPARATOR . 'image' . DIRECTORY_SEPARATOR . $folderName . DIRECTORY_SEPARATOR;
    }

    public function deleteImage($imageName,$file_name)
    {
        if (file_exists($this->folderName($imageName) . $file_name) && $file_name != null) {
            unlink($this->folderName($imageName) . $file_name);
        }
    }


}
