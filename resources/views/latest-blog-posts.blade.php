    <!--work-shop-->
    <section id="work-shop" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Our Blog</h2>
            <p>Check our latest posts</p>
            <hr class="bottom-line">
          </div>
          @if(count($posts) > 0)
           @foreach($posts as $b) 
          <div class="col-md-6 col-sm-6">
            <div class="service-box text-center">
              <div class="icon-box">          
             <?php $u = url('blog')."/".$b['url']; ?>     
          	<center><a href = "{{$u}}"><img src="{{$b['pic']}}" class="img-responsive"></a></center>
              </div>
              <div class="icon-text">
              	
                <h4 class="ser-text"><a href = "{{$u}}">{{$b['title']}}</a></h4>
                 {{$b['date']}} | {{count($b['comments'])}} Comments
              </div>
            </div>
          </div>
          @endforeach
              @else
              <span class="text-info text-center">No blog posts.</span>
              @endif
        </div>
      </div>
    </section>
    <!--/ work-shop-->