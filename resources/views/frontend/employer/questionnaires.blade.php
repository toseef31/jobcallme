		@extends('frontend.layouts.app')

		@section('title', 'Evaluation Forms')

		@section('content')
		<section id="company-box">
			<div class="container">
			<div class="row">
				<div class="col-md-12">
				 <section class="resume-box" id="academic">
                        <a class="btn btn-primary r-add-btn" onclick="addAcademic()"><i class="fa fa-plus"></i> </a>
                        <h4> @lang('home.Test/Questionnaires')</h4>
                        <?php //print_r($resume); ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Questionnaire</th>
                                    <th>Type</th>
                                    <th>Submitted in</th>
                                    <th>Late Submission</th>
                                    <th>Shuffle</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($questionaires as $question)
                                <tr>
                                    <td>{{ $question->title }}</td>
                                    <td>{{ $question->type }}</td>
                                    <td>{{ $question->submission_date }}</td>
                                    <td>{{ $question->accept_late_submission }}</td>
                                    <td>{{ $question->shuffle_questions }}</td>
                                    <td><a href="{{ url('account/employer/questionnaires/edit/'.$question->ques_id) }}"><i class="fa fa-edit"></i></a> <span><i class="fa fa-remove"></i></span></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- <ul class="resume-details">
                            @if(count($resume['academic']) > 0)
                                @foreach($resume['academic'] as $resumeId => $academic)
                                    <li id="resume-{{ $resumeId }}">
                                        <div class="col-md-12">
                                            <span class="pull-right li-option">
                                                <a href="javascript:;" title="Edit" onclick="getAcademic('{{ $resumeId }}')">
                                                    <i class="fa fa-pencil"></i>
                                                </a>&nbsp;
                                                <a href="javascript:;" title="Delete" onclick="deleteElement('{{ $resumeId }}')">
                                                    <i class="fa fa-trash"></i>
                                                </a>&nbsp;
                                            </span>
                                            <p class="rd-date">{!! date('M, Y',strtotime($academic->completionDate)) !!}</p>
                                            <p class="rd-title">{!! $academic->degree !!}</p>
                                            <p class="rd-organization">{!! $academic->institution !!}</p>
                                            <p class="rd-location">{!! JobCallMe::cityName($academic->city).' ,'.JobCallMe::countryName($academic->country)!!}</p>
                                            <p class="rd-grade">Grade/GPA : {!! $academic->grade !!}</p>
                                        </div>
                                    </li>
                                @endforeach
                            @endif
                        </ul> -->
                    </section>
                    <section class="resume-box" id="academic-edit" style="display: none;">
                        <h4><i class="fa fa-book r-icon bg-primary"></i>  <c>@lang('home.AddQuestionnaire')asdasd</c></h4>
                        <form method="post" action="{{ url('account/employer/questionnaires/new') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" name="title" class="form-control" id="title">
                          </div>
                          <div class="form-group">
                            <label for="type">Type:</label>
                            <select class="form-control" id="type" name="type">
                                <option>Select type</option>
                                <option>Test</option>
                                <option>Questionnaires</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="days">Submission Days:</label>
                            <input type="number" name="submission_date" class="form-control" id="days">
                          </div>
                          <div class="checkbox">
                            <label><input name="late_submission" value="Yes" type="checkbox"> Accept Late Submission</label>
                          </div>
                          <div class="checkbox">
                            <label><input name="shuffle_question" value="Yes" type="checkbox"> Shuffle Questions</label>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 text-right">&nbsp;</label>
                            <div class="col-md-6">
                                <button class="btn btn-primary" type="submit">@lang('home.save')</button>
                                <button class="btn btn-default" type="button" onclick="$('#academic').fadeIn();$('#academic-edit').hide();$('html, body').animate({scrollTop:$('#academic').position().top}, 700);">Cancel</button>
                            </div>
                          </div>
                        </form>
                    </section>
                    <!--Academic Section End-->

				</div>
		
		
				 
			</div>
		</section>
		@endsection
		@section('page-footer')
		<script type="text/javascript">
		
function addAcademic(){
    $('.form-academic input').val('');
    $('#academic-edit h4 c').text('@lang('home.AddQuestionnaire')');
    $('#academic').hide();
    $('#academic-edit').fadeIn();
}
$('form.form-academic').submit(function(e){
    $('.form-academic input[name="_token"]').val(pageToken);
    $('.form-academic button[name="save"]').prop('disabled',true);
    $('.form-academic .error-group').hide();
    $.ajax({
        type: 'post',
        data: $('.form-academic').serialize(),
        url: "{{ url('account/jobseeker/resume/academic/save') }}",
        success: function(response){
            if($.trim(response) != '1'){
                $('.form-academic .error-group').show();
                $('.form-academic .error-group .col-md-6 .alert-danger').html('<ul><li>'+response+'</li></ul>');
                $('html, body').animate({scrollTop:$('#academic-edit').position().top}, 1000);
                $('.form-academic button[name="save"]').prop('disabled',false);
            }else{
                window.location.href = "{{ url('account/jobseeker/resume') }}";
            }
            Pace.stop;
        },
        error: function(data){
            var errors = data.responseJSON;
            var vErrors = '';
            $.each(errors, function(i,k){
                vErrors += '<li>'+k+'</li>';
            })
            $('.form-academic .error-group').show();
            $('.form-academic .error-group .col-md-6 .alert-danger').html('<ul>'+vErrors+'</ul>');
            $('.form-academic button[name="save"]').prop('disabled',false);
            Pace.stop;
            $('html, body').animate({scrollTop:$('#academic-edit').position().top}, 1000);
        }
    })
    e.preventDefault();
})
function getAcademic(resumeId){
    $.ajax({
        url: "{{ url('account/jobseeker/resume/get') }}/"+resumeId,
        success: function(response){
            var obj = $.parseJSON(response);
            $('.form-academic input[name="resumeId"]').val(resumeId);
            $('.form-academic select[name="degreeLevel"]').val(obj.degreeLevel).trigger('change');
            $('.form-academic input[name="degree"]').val(obj.degree);
            $('.form-academic input[name="completionDate"]').val(obj.completionDate);
            $('.form-academic input[name="grade"]').val(obj.grade);
            $('.form-academic input[name="institution"]').val(obj.institution);
            $('.form-academic select[name="country"]').val(obj.country).trigger('change');
			$('.form-academic select[name="state"]').val(obj.state).trigger('change');
			$('.form-academic select[name="city"]').val(obj.city).trigger('change');
            $('.form-academic textarea[name="details"]').val(obj.details);
            $('#academic-edit h4 c').text('Edit Academics');
            $('#academic').hide();
            $('#academic-edit').fadeIn();
        }
    })
}
function deleteElement(resumeId){
    if(confirm('Are you sure to delete this?')){
        $.ajax({
            url: "{{ url('account/jobseeker/resume/delete') }}/"+resumeId,
            success: function(response){
                $('#resume-'+resumeId).remove();
            }
        })
    }
}
		</script>
		@endsection