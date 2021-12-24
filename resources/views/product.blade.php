@extends('master')
@section('content')

    <button class="btn btn-warning">click on me</button>
    <div class="containers custom-product">
    
  <h2>Carousel Example</h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

     @foreach($products as $product)

 <div class="item {{$product['id']==1 ? 'active':''}}">
     <a href="detail/{{$product['id']}}">
         <img  src="{{$product['gallery']}}" alt="New Yorkss" style="width:100%; height:350px;">
        <div class="carousel-caption">
          <h3>{{$product['name']}}</h3>
          <p>{{$product['description']}}</p>
        </div>
     </a>
        
      </div>
     @endforeach
    
     
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


        </div>
        <div class="trending-product">
            <h1>trending products</h1>
              <div class="">

     @foreach($products as $product)

 <div class="trend-item">
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
    <!-- <script>
        alert('thllo');
    </script> -->

@endsection