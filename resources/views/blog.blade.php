@extends('blog-layout') 

@section('title', "Blog")

@section("content") 
@include('blog-slider')
@include('blog-content')
@stop