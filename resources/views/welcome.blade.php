@extends('layouts.index')

@section('HomeContent')
<h1>This is Home Page</h1>
<p>Lorem ipsum dolor sit amet...</p>
@endsection

@section('SecondContent')
<h4>Image Container</h4>
<p>Lorem ipsum dolor sit amet...</p>
@endsection

@section('Test')
<h4>Testimonial Page</h4>
<p>Lorem ipsum dolor sit amet...</p>
@endsection

@section('AboutContent')
@include('partials.about')
@endsection

@section('content')
@include('partials.contact')
@endsection
