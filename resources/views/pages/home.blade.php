<img src="{{ asset('images/benin.jpg') }} " alt = "benin">
@extends('layouts/base')



@section('body_content')
  Bienvenue au Benin . Il est {{ date('h:i') }} .
@endsection

@section('link_content')
  <a href="{{route('about_path')}}" >A propos de nous</a>
@endsection