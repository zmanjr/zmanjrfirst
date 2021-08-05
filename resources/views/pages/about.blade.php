@extends('layouts/base')

<img src="{{ asset('images/cr7.jpg') }} " alt = "cr7">

@section('body_content')
 Cette page est a propos de nous
@endsection

@section('link_content')
  <a href="{{route('home_path')}}" >Revenir a la page de base</a>
@endsection