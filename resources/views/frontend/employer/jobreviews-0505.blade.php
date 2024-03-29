@extends('frontend.layouts.app')

@section('title', 'Job Reviews')

@section('content')
<section id="company-box">
	<div class="container">
		<div class="row">
		<div class="col-md-12">
			<div class="header">
				@lang('home.Reviews related to job')
			</div>
			<div class="body">
				<table class="table">
					<thead>
						<tr>
							<th width="70px">@lang('home.Applicants')</th>
							<th>@lang('home.Review')</th>
							<th>@lang('home.Review Date')</th>
							<th width="50px">@lang('home.Action')</th>
						</tr>
					</thead>
					<tbody>
						@foreach($data as $review)
						<tr>
							<td><a href="{{ url('account/employer/application/candidate/'.$review->userId).'?jobId='.$review->job_id }}">{{$review->firstName." ".$review->lastName}}</a></td>
							<td>{{ substr($review->comment,0,100) }}</td>
							<td>@if(app()->getLocale() == "kr")
											{{ date('Y-m-d h:i',strtotime($review->comment_date)) }}
										@else      
											{{ date('d M Y h:i',strtotime($review->comment_date)) }}
										@endif</td>
							<td><a href="javascript:;" onclick="editreview(this,{{$review->comment_id}},'{{ $review->comment}}')" data-toggle="tooltip" data-original-title="@lang('home.Edit')"><i class="fa fa-edit pointer"></i></a> <a href="javascript:;"  onclick="delreview(this,{{$review->comment_id}})" data-toggle="tooltip" data-original-title="@lang('home.Delete')"><i class="fa fa-remove pointer"></i></a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>		
		</div>
	</div>
</section>
<div id="reviewModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">@lang('home.Edit employment Review')</h4>
      </div>
      <div class="modal-body">
      	<form id="reviewform">
      		<input type="hidden" name="id" id="review_id">
      		<textarea name="review" id="review" rows="5" class="form-control"></textarea><br>
        	<button class="btn btn-primary" type="button" id="update-btn">@lang('home.Update')</button>
      	</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">@lang('home.Close')</button>
      </div>
    </div>

  </div>
</div>
@endsection
@section('page-footer')
<script type="text/javascript">
function delreview(current,id){
	$.ajax({
		url:jsUrl()+"/delete/record",
		type:"post",
		data:{table:"comments",field:"comment_id",id:id,_token:"{{csrf_token()}}"},
		success:function(res){
			if(res == 1){
				$(current).closest('tr').remove();
			}else{
				alert("error");
			}
		}
	});
}
function editreview(current,id,comment){
	$('#review').val($.trim(comment));
	$('#review_id').val($.trim(id));
	$('#reviewModal').modal('show');
}
$('#update-btn').click(function(){
	var id = $('#review_id').val();
	var review = $('#review').val();
	$.ajax({
		url:jsUrl()+"/update/record",
		type:"post",
		data:{table:'comments',field:'comment_id',id:id,data:{comment:review},_token:"{{csrf_token()}}"},
		success:function(res){
			if(res == 1){
				location.reload(true);
			}else{
				alert('error');
			}
		}
	})
})


$(document).ready(function(){
    $('button[data-toggle="tooltip"],a[data-toggle="tooltip"]').tooltip();
    
})

</script>
@endsection