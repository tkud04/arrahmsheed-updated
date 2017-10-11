<!--------- Input errors -------------->
                    @if (count($errors) > 0)
                          @include('input-errors', ["errors" => $errors])
                     @endif

    @if (Session::has('apply-status') && Session::get('apply-status') == "success")
					    <div class="alert alert-success alert-dismissible" role="alert" style="margin-top: 60px; !important">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
							<p><strong>Application successful!</strong> Please check your email to complete your application.</p><br><br>
						</div>
	@elseif (Session::has('contact-status') && Session::get('contact-status') == "success")
	<div class="alert alert-success alert-dismissible" role="alert" style="margin-top: 60px; !important">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
							<p><strong>Message received!</strong> We will get back to you shortly.</p><br><br>
						</div>
	@endif
   <!--Banner-->
    <div class="banner">
      <div class="bg-color">
        <div class="container">
          <div class="row">
            <div class="banner-text text-center">
              <div class="text-border">
                <h2 class="text-dec">Trust & Quality</h2>
              </div>
              <div class="intro-para text-center quote">
                <p class="big-text">Learning Today . . . Leading Tomorrow.</p>
                <p class="small-text">Arrahmsheed Solutions was created to help prospective students secure admission into federal tertiary institutions in Nigeria. </p>
                <a href="#login" class="btn get-quote" data-target="#login" data-toggle="modal">APPLY NOW</a>
              </div>
              <a href="#feature" class="mouse-hover"><div class="mouse"></div></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Banner-->