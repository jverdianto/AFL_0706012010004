@extends('layout/mainlayout')

@section('title','Home')

@section('main_content')

<style>
    h3, h4{text-align: center;}
</style>   

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="https://assorted.downloads.oppo.com/static/archives/images/dd/Smartphones/Find%20X2/homepage-banner-2560x1056.png" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="https://assorted.downloads.oppo.com/static/archives/images/dd/Smartphones/A92/A92-white-top%20banner-PC.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="https://assorted.downloads.oppo.com/static/archives/images/ke/OPPO%20A57/Find%20X/OPPO%20F9/Pc%20Website%20Banner%20(2560x1056)(1).jpg" alt="New york" style="width:100%;">
      </div>
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

  <br><br>

  <h3>Contact Me?</h3><br>
  <h4>Email : jverdianto@student.ciputra.ac.id</h4>

@endsection