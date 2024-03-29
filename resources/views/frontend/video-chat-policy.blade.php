@extends('frontend.layouts.app')

@section('title', 'Video & Chat Policy')

@section('content')
<section id="company-box">
    <div class="container">
        <div class="col-md-{{ $record->featuredImage != '' ? '8' : '12' }} company-box-left">
            @if(app()->getLocale() == "kr")
        {!! $record->pageData !!}
		@else
        {!! $record->pageData2 !!}
			@endif	
        </div>
        @if($record->featuredImage != '')
            <div class="col-md-4 hidden-sm hidden-xs">
                <div class="company-box-right">
                    <img src="{{ url('featured-photos/'.$record->featuredImage) }}" alt="" width="100%">
                </div>
            </div>
        @endif
    </div>
</section>
@endsection
@section('page-footer')
<script type="text/javascript">
</script>
@endsection