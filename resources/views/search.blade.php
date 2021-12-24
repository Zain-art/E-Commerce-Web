@extends('master')
@section('content')

    <button class="btn btn-warning">click on me</button>
    <div class="container custom-product">
        <div class="row">

        
            <div class="col-sm-4">
                <a href="#">Filter</a>
            </div>
  <div class="col-sm-4">
       <div class="trending-product">
            <h1>trending Search products</h1>
              <div class="">

     @foreach($products as $product)

 <div class="search-item">
 <a href="detail/{{$product['id']}}">
     <img class="trend-img" src="{{$product['gallery']}}" alt="New Yorkss" style="width:100%; ">
        <div class="">
          <h3>{{$product['name']}}</h3>
          <p>{{$product['description']}}</p>
        </div>
 </a>
        
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