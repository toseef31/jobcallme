<option value="">@lang('home.Subcategory')</option>
@foreach($result as $res)
<option value="{{ $res->subCategoryId }}">@lang('home.'.$res->subName)</option>

@endforeach