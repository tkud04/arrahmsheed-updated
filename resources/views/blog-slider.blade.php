        <section class="module bg-dark-60 blog-page-header" data-background="{{$sp['pic']}}">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
              	<?php $u = url('blog')."/".$sp['url']; ?>     
                <h2 class="module-title font-alt"><a href = "{{$u}}">{{$sp['title']}}</a></h2>
                <div class="module-subtitle font-serif">{{$sp['short_text']}}</div>
              </div>
            </div>
          </div>
        </section>