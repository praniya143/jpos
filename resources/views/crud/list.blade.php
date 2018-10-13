@extends('header')
@section('content')
<div class="tablewide">
	<div class="tablehead six">
		@foreach($model->formElements['fields'] as $fieldName=>$element)
			@if(@$element['list'] === false)
				@continue
			@endif
			<div>{{ $element['label'] }}</div>
		@endforeach
		<div>Edit</div>
	</div>
	<div class="tablecontent six">
		@foreach($model->all() as $data)
			@foreach($model->formElements['fields'] as $fieldName=>$element)	
				@if(@$element['list'] === false)
				        @continue
	                        @endif
				<div data-title="{{ $element['label']}}">{{ $data[$fieldName]}}</div>
			@endforeach	
			<div>
				<a href="{{ URL::route($model->formElements['edit'], $data[$model->formElements['identifier']]) }}">Edit</a>
			</div>
		@endforeach
	</div>
</div>


@endsection
