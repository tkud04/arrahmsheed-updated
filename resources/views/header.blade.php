<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - Arrahmsheed Solutions</title>
    <meta name="description" content="Get Admission Into Federal Polytechnic Cheap and Fast! ">
    <meta name="keywords" content="admission, federal polytechnic Kaura namoda, federal college of education gusau, cheap and fast admission without jamb">
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/imagehover.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link href="{{asset('lib/jquery-datatable/media/css/dataTables.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
     <link href="{{asset('lib/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('lib/datatables-responsive/css/datatables.responsive.css')}}" rel="stylesheet" type="text/css" media="screen"/>
  </head>
  <body>
    <!--Navigation bar-->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{url('/')}}">Arrahm<span>sheed</span></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#feature">About Us</a></li>
          <li><a href="#organisations">Guarantee</a></li>
          <li><a href="#testimonial">Requirements</a></li>          
          <li><a href="#courses">Gallery</a></li>
          <li class="btn-trial"><a href="#" data-target="#login" data-toggle="modal">Apply</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        </div>
      </div>
    </nav>
    <!--/ Navigation bar-->
    <!--Modal box-->
    <div class="modal fade" id="login" role="dialog">
      <div class="modal-dialog modal-sm">
      
        <!-- Modal content no 1-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title text-center form-title">Get Admission</h4>
          </div>
          <div class="modal-body padtrbl">

            <div class="login-box-body">
              <p class="login-box-msg">Get Admission Cheap and Fast Guaranteed!</p>
              <div class="alert alert-info" id="response">All fields marked * are required<br><strong>All documents must be scanned i.e. in image format</strong></div>
              <div class="form-group">
                <form name="" id="loginForm" method="post" enctype="multipart/form-data" action="{{url('apply')}}">
                	<input type="hidden" id = "token" name="_token" value="{{ csrf_token() }}">
                 <div class="form-group has-feedback"> <!----- username -------------->
                 		<label>Full Name*</label>
                      <input class="form-control" placeholder="Full Name"  id="name" name="name" type="text" autocomplete="off" value="{{old('name')}}"/> 
            <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span><!---Alredy exists  ! -->
                      <span class="glyphicon glyphicon-user form-control-feedback"></span>
                  </div>
                  <div class="form-group has-feedback"><!----- password -------------->
                  	<label>Phone Number*</label>
                      <input class="form-control" placeholder="Phone Number"  id="phone" name="phone" type="text" autocomplete="off" value="{{old('phone')}}"/> 
            <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span><!---Alredy exists  ! -->
                      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  </div>                  
                  <div class="form-group has-feedback"><!----- password -------------->
                  	<label>Email address*</label>
                       <input class="form-control" placeholder="Email address"  id="email" name="email"  type="email" autocomplete="off" value="{{old('email')}}"/> 
            <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span><!---Alredy exists  ! -->
                      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  </div>                  
                  <div class="form-group has-feedback"><!----- password -------------->
                  	<label>O-level Certificate*</label>
                      <input class="form-control"  id="o-level" name="o-level" type="file"/>
            <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span><!---Alredy exists  ! -->
                      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  </div>
                  <div class="form-group has-feedback"><!----- password -------------->
                  	<label>Birth Certificate*</label>
                      <input class="form-control"  id="birth-cert" name="birth-cert" type="file"/>
            <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span><!---Alredy exists  ! -->
                      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  </div>
                  <div class="form-group has-feedback"><!----- password -------------->
                  	<label>Local Govt. Identification OR Court Affidavit*</label>
                      <input class="form-control"  id="lg-id" name="lg-id"  type="file"/>
            <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span><!---Alredy exists  ! -->
                      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  </div>
                  <div class="form-group has-feedback"><!----- password -------------->
                  	<label>Passport*</label>
                      <input class="form-control"  id="passport" name="passport"  type="file"/>
            <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span><!---Alredy exists  ! -->
                      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  </div>
                  <div class="form-group has-feedback"><!----- password -------------->
                  	<label>Testimonial</label>
                      <input class="form-control"  id="tmonial" name="tmonial" type="file"/>
            <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span><!---Alredy exists  ! -->
                      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  </div>
                  <div class="form-group has-feedback"><!----- password -------------->
                  	<label>Medical Certificate of Fitness*</label>
                      <input class="form-control"  id="med-cert" name="med-cert" type="file"/>
            <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span><!---Alredy exists  ! -->
                      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  </div>                  
                  <div class="row">
     
                      <div class="col-xs-12">
                          <button type="submit" class="btn btn-green btn-block btn-flat">Submit</button>
                      </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!--/ Modal box-->