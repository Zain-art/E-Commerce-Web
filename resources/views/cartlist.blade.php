@extends('master')
@section('content')

   
    <div class="container custom-product">
        <div class="row">

        
  <div class="col-sm-10">
       <div class="trending-product">
            <h1>Cart List Products</h1>
              <div class="">

     @foreach($products as $product)

 <div class=" row search-item cart-list-style">
<div class="col-sm-3 " style="margin-bottom: 10px;">
    <a href="detail/{{$product->id}}">
     <img class="trend-img" src="{{$product->gallery}}" alt="New Yorkss" style="width:100%; ">
        <!-- <div class="">
          <h3>{{$product->name}}</h3>
          <p>{{$product->description}}</p>
        </div> -->
 </a>
</div>
<div class="col-sm-3">
    <a href="detail/{{$product->id}}">
     <!-- <img class="trend-img" src="{{$product->gallery}}" alt="New Yorkss" style="width:100%; "> -->
        <div class="">
          <h3>{{$product->name}}</h3>
          <p>{{$product->description}}</p>
        </div>
 </a>
</div><div class="col-sm-3">
    <a href="detail/{{$product->id}}">
     <!-- <img class="trend-img" src="{{$product->gallery}}" alt="New Yorkss" style="width:100%; "> -->
        <div class="remove-btn" >
         <a href="removecart/{{$product->cart_id}}" class="btn btn-danger">Remove to Cart</a>
        </div>
 </a>
</div>
        
      </div>
     @endforeach
    
     
  
    </div>
        </div>
      

  </div>
       </div>
    </div>
    <!-- <script>
        alert('thllo');
    </script> -->

@endsection