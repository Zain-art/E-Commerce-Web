<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Cpmmerce Project</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js"> -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" ></script>
    <script src="jquery/jquery.min.js"></script>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
    <!-- <button class=" btn btn-danger">btn dangger</button>
    <button class=" btn btn-primary">btn dangger</button>
    -->
</body>
 <script>
        $(document).ready(function(){
            $("button").click(function(){
                alert('click button on it');
            });
        });
    </script>
    <style>
        .custom-login{
            width: 700px;
            background: #BEC4C6;
            height: 350px;
            padding-top: 100px;
            border-radius: 10px;
            line-height: 40px;
        }
        .trend-img{
            height: 370px;
            
        }
        .trend-item{
            float:left;
            width: 20%;
        }
        .trending-product{
            margin: 20px;
        }
        .detail-img{
            height: 400px;
        }
        .cart-list-style{
            border-bottom: 2px solid grey;
            margin-bottom: 15px;
            padding: 20px;
        }
        .remove-btn{
            margin-top: 20px;
        }

    </style>
</html>