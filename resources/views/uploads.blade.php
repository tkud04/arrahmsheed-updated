@include("header")
<section>
<div class="container-fluid container-fixed-lg bg-white">
 
<div class="panel panel-transparent">
<div class="panel-heading">
<div class="panel-title">Uploads
</div>
<div class="pull-right">
<div class="col-xs-12">
<input type="text" id="search-table" class="form-control pull-right" placeholder="Search">
</div>
</div>
<div class="clearfix"></div>
</div>
<div class="panel-body">
<table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
<thead>
<tr>
<th>SN</th>
<th>Name</th>
<th>Email</th>
<th>O-Level</th>
<th>Birth Cert</th>
<th>LG ID</th>
<th>Testimonial</th>
<th>Passport</th>
<th>Medical Cert</th>
</tr>
</thead>
<tbody>
<tr>
@if(count($uploads) > 0)
@foreach($uploads as $u) 
<td>{{$u['id']}}</td>
<td>{{$u['full_name']}}</td>
<td>{{$u['email']}}</td>
<td><img src ="{{$u['o_level']}}" alt="" class="img-responsive"</td>
<td><img src ="{{$u['birth_cert']}}" alt="" class="img-responsive"</td>
<td><img src ="{{$u['lg_id']}}" alt="" class="img-responsive"</td>
<td><img src ="{{$u['testimonial']}}" alt="" class="img-responsive"</td>
<td><img src ="{{$u['passport']}}" alt="" class="img-responsive"</td>
<td><img src ="{{$u['med_cert']}}" alt="" class="img-responsive"</td>
@endforeach
@endif
</tr>
</tbody>
</table>
</div>
</div>
 
</div>
 
 
</div>
 
</div>
</section>
@include("footer")
@include("html-footer")