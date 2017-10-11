    <!--Courses-->
    <section id ="courses" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Gallery</h2>
            <p>A view of what we have to offer you, should you choose to trust us with gaining admission this year!</p>
            <hr class="bottom-line">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
              <img src="{{asset('img/slt.jpg')}}" class="img-responsive">
              <figcaption>
                  <h3>Science and Lab Technology</h3>
                  <p>Gain admission into Science and Lab Technology department in federal polytechnics cheap and fast!</p>
              </figcaption>
              <a href="#"></a>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
              <img src="{{asset('img/csc.jpg')}}" class="img-responsive">
              <figcaption>
                  <h3>Computer Science</h3>
                  <p>Gain admission into Computer Sciencd department in federal polytechnics cheap and fast!</p>
              </figcaption>
              <a href="#"></a>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
              <img src="{{asset('img/local-govt.png')}}" class="img-responsive">
              <figcaption>
                  <h3>Gallery</h3>
                  <p>A view of what you have to gain, should you choose to trust us with securing your admission into school.</p>
              </figcaption>
              <a href="#"></a>
            </figure>
          </div>
          @for($i = 1; $i < 20; $i++)
            @if($i == 6)
            @else
          <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
            	<?php $n = asset("img")."/gallery".$i.".jpg";?>
              <img src="{{$n}}" class="img-responsive">
              <figcaption>
                  <h3>Gallery</h3>
                  <p>A view of what you have to gain, should you choose to trust us with securing your admission into school.</p>
              </figcaption>
              <a href="#"></a>
            </figure>
          </div>
          @endif
          @endfor
        </div>
      </div>
    </section>
    <!--/ Courses-->