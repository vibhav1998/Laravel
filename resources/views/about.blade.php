@extends('template')

@section('title','About Us')

@section('content')

@include('layouts.app')

<h2 class="mb-3 text-center font-weight-400">About Us</h2>
<div class="container-fluid p-0">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://source.unsplash.com/1400x400/?nature" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://source.unsplash.com/1400x400/?technology" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://source.unsplash.com/1400x400/?water" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container-fluid pd-10">
<h4 class="m-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, obcaecati. Velit quibusdam dolore saepe eos aspernatur reprehenderit ex laudantium. Harum laborum tempore nemo architecto quas totam fugit illo, quidem nostrum sunt vel illum ducimus quo cumque nisi delectus obcaecati saepe atque laudantium? Aspernatur modi repellendus rem doloribus. Beatae, soluta laudantium nihil, labore culpa consequuntur veritatis, ipsum accusantium totam cupiditate magnam.</h3>
</div>
</div>

@endsection