@extends('master')
@section('content')

    <button class="btn btn-warning">click on me</button>
    <div class="container custom-product">
        <div class="row">
            <div class="col-md-6 border-2">
             <img src="{{$product['gallery']}}" class="detail-img" alt="afa">

         </div>
         
         <div class="col-md-6">
            <a href="/"> <button class="btn -btn-primary"> Go baack</button></a>
        <h2>Name: {{$product['name']}}</h2>
        <h2>price: {{$product['price']}}</h2>
        <h2>Category: {{$product['category']}}</h2>
        <h4>Description: {{$product['description']}}</h2>
        <br><br>
        <form action="/addcart" method="POST">
        @csrf
        <input type="hidden" name="product_id" value="{{$product['id']}}">
        
            <button class="btn btn-success">Add to Card</button>

        </form>
        <br>
    <button class="btn btn-primary ">Buy now</button>
    </div>
        </div>
         
    </div>
 
@endsection