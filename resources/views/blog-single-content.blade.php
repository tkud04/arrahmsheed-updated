        <section class="module-small">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
              	
              	<!--------- Input errors -------------->
                    @if (count($errors) > 0)
                          @include('input-errors', ['errors'=>$errors])
                     @endif
                     
                     @if (Session::has('add-comment-status') && Session::get('add-comment-status') == "success")
	<div class="alert alert-success alert-dismissible" role="alert" style="margin-top: 60px; !important">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
							<p><strong>Comment added!</strong> </p><br><br>
						</div>
	@endif
              
              	@if($b == null)
                   <div class="alert alert-success alert-dismissible" role="alert" style="margin-top: 60px; !important">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
							<p><strong>Blog post not found!</strong> </p><br><br>
						</div>
                 @else
                <div class="post">
                  <div class="post-thumbnail"><img src="{{$p}}" alt="Blog Featured Image"/></div>
                  <div class="post-header font-alt">
                    <h1 class="post-title">{{$b->title}}</h1>
                    <div class="post-meta">By&nbsp;<a href="#">Arrahmsheed</a>| {{$d}} | {{count($comments)}} Comments
                    </div>
                  </div>
                  <div class="post-entry">
                    {!! $b->content !!}
                  </div>
                </div>
                <div class="comments">
                  <h4 class="comment-title font-alt">There are {{count($comments)}} comments</h4>
                  @if(count($comments) > 0)
                  @foreach($comments as $c) 
                  <div class="comment clearfix">
                    <div class="comment-avatar"><i class="fa fa-user fa-2x"></i></div>
                    <div class="comment-content clearfix">
                      <div class="comment-author font-alt"><a href="#">{{$c['name']}}</a></div>
                      <div class="comment-body">
                        <p>{{$c['comment']}}</p>
                      </div>
                      <div class="comment-meta font-alt">{{$c['date']}}
                      </div>
                    </div>
                  </div>
                  @endforeach
                  @else
                    <span class="text-primary text-center">No comments</span>
                  @endif
                </div>
                <div class="comment-form">
                  <h4 class="comment-form-title font-alt">Add your comment</h4>
                  <form action="{{url('add-comment')}}" method="post" >
                  	<input type="hidden" name="_token" value="{{ csrf_token() }}">         
                  	<input type="hidden" name="post_id" value="{{ $b->id}}">         
                    <div class="form-group">
                      <label class="sr-only" for="name">Name</label>
                      <input class="form-control" id="name" type="text" name="name" placeholder="Name"/>
                    </div>
                    <div class="form-group">
                      <label class="sr-only" for="email">Email address</label>
                      <input class="form-control" id="email" type="text" name="email" placeholder="E-mail"/>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" id="comment" name="comment" rows="4" placeholder="Comment"></textarea>
                    </div>
                    <button class="btn btn-round btn-d" type="submit">Post comment</button>
                  </form>
                </div>
                @endif
              </div>
            </div>
          </div>
        </section>