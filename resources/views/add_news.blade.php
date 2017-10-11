@extends('blog-layout') 

@section('title', "Blog")

@section("content") 

<br><br>
@if (Session::has('add-news-status') && Session::get('add-news-status') == "success")
	<div class="alert alert-success alert-dismissible" role="alert" style="margin-top: 60px; !important">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
							<p><strong>Blog post added!</strong> </p><br><br>
						</div>
	@endif
<section id="get-in-touch">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Add News</h2>
                <p class="text-center wow fadeInDown">Pass messages to members of FundsForLife. </p>
            </div>
            
            <div class="row">
                       
            <div class="col-sm-12">
            	<!--------- Input errors -------------->
                    @if (count($errors) > 0)
                          @include('input-errors', ['errors'=>$errors])
                     @endif
            
            <form action="{{url('add-news')}}" method="post" name="contact-form" id="main-contact-form">
            	<input type="hidden" name="_token" value="{{ csrf_token() }}">         
                                <div class="form-group">
                                       	<input type="text" name="title" placeholder="Blog title" class="form-control" value ="{{old('title')}}" required>
                                </div>
                                <div class="form-group">
                                       	<input type="text" name="url" placeholder="Blog URL" class="form-control" value ="{{old('url')}}" required>
                                </div>                                
                                <div class="form-group">
                                    <textarea required name="content" placeholder="News goes here, make it as long as you need!" rows="8" value ="{{old('content')}}" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <textarea required name="short_text" placeholder="short text goes here" rows="8" value ="{{old('short_text')}}" class="form-control"></textarea>
                                </div>
                                <button class="btn btn-primary" type="submit">SUBMIT </button>
                            </form>
            </div>
            
            
            </div>
            
            
        </div>
    </section><!--/#get-in-touch-->

@stop