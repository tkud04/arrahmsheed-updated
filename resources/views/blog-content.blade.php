        <section class="module">
          <div class="container">
            <div class="row multi-columns-row post-columns">
            	@if(count($posts) > 0)
               @foreach($posts as $b) 
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="post">
                  <div class="post-thumbnail"><a href="#"><img src="{{$b['pic']}}" alt="Blog-post Thumbnail"/></a></div>
                  <div class="post-header font-alt">
                    <h2 class="post-title"><a href="#">{{$b['title']}}</a></h2>
                    <div class="post-meta">By&nbsp;<a href="#">Arrahmsheed</a>| {{$b['date']}} | {{count($b['comments'])}} Comments
                    </div>
                  </div>
                  <div class="post-entry">
                    <p>{{$b['short_text']}}..</p>
                  </div>
                  <?php $u = url('blog')."/".$b['url']; ?>
                  <div class="post-more"><a class="more-link" href="{{$u}}">Read more</a></div>
                </div>
              </div>
              @endforeach
              @else
              <span class="text-info text-center">No blog posts.</span>
              @endif
            </div>
            <div class="pagination font-alt"><a href="#"><i class="fa fa-angle-left"></i></a><a class="active" href="#">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="#"><i class="fa fa-angle-right"></i></a></div>
          </div>
        </section>