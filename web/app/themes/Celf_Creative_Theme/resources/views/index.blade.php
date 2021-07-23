@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="page-header">

<nav class="navbar navbar-expand-md">
    <div class="navbar-collapse w-100">
        <a class="nav-link mr-auto" href="#Twenty">Twenty</a>
    </div>
    <div class="navbar-collapse w-100">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <a class="nav-link mr-auto" href="#Link1">Link 1</a>
            </li>
            <li class="nav-item">
            <a class="nav-link mr-auto" href="#Link2">Link 2</a>
            </li>
            <li class="nav-item">
            <a class="nav-link mr-auto" href="#Link3">Link 3</a>
            </li>
        </ul>
    </div>

</div>

<img src="/resources/views/banner.jpg" class="img-fluid">

  <div class="container-fluid">
  test text here
  </div>


  {!! get_the_posts_navigation() !!}
@endsection
