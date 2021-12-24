<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\cart;
use Session;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    function index(){
        $data= Product::all();
        return view('product',['products'=>$data]);
    }
    function detail($id )
{

$data= Product::find($id);
return view('detail',['product'=>$data]);
}
function search(Request $request){
    $querysearch=Product::where('name','like','%'.$request->input('query').'%')->get();
    return view('search',['products'=>$querysearch]);
    // return view('')
}
  function  addToCart(Request $request){
if($request->session()->has('user')){
    $cart=new cart;
    $cart->user_id=$request->session()->get('user')['id'];
    $cart->product_id=$request->product_id;
    $cart->save();
    return redirect('/');
}else{
    return redirect('/login');
}
}
function cartlist(){
    $userid=Session::get('user')['id'];
  $data=  DB::table('cart')->join('products','cart.product_id','products.id')
    ->select('products.*','cart.id as cart_id')
->where('cart.user_id',$userid)->get();
   return view('cartlist',['products'=>$data]);
}
function removeCart($id){
cart::destroy($id);
echo $id;

return redirect('cartlist');
}
}
