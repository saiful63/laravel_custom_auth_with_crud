<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidationRequest as Vrequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Session;
use App\Requests\ValidationRequest;



class ProductController extends Controller
{
    protected $product;

    public function __construct(Product $product){
     $this->product = $product;
    }

    public function ShowData(){
     $show_product = $this->product->paginate(3);
     return view('show-data',compact('show_product'));
    }

    public function InsertionInterface(){
     return view('insert-data');
    }

    public function StoreData(Vrequest $request){


      $this->product->create([
        'name'=>$request->name,
        'price'=>$request->price,
      ]);

      Session::flash('msg','Data Added Successfully');
      return redirect('home');
    }


    public function EditData($id){
     $specific_id = $this->product->find($id);
     return view('edit-data',compact('specific_id'));

    }

    public function UpdateData(Request $request,$id){
     $id_data_to_update = $this->product->find($id);

     $validate_field = [
        'name' => 'required|max:10',
        'price'=> 'required'
      ];

    $this->validate($request,$validate_field);

    $id_data_to_update->update([
        'name' => $request->name,
        'price'=> $request->price
      ]);

      Session::flash('msg','Data Updated Successfully');
      return redirect('/');
    }

    public function DeleteData($id){
     $id_data_to_delete = $this->product->find($id);
     $id_data_to_delete->delete();

     Session::flash('msg','Data Daleted Successfully');
     return redirect('/');
    }
}
