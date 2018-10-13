@extends('header')
@section('content')
{{ Form::model($model, array('route' => array($model->formElements['update'], $id ))) }}
<input type="hidden" name="_method" value="PUT">
<div class="bargenerate mobiletopflow">
	<div class="formleft">
		<div class="formtwiceway">
			@foreach($model->formElements['fields'] as $name=>$element)
			@if(in_array($name, $model->formElements['edit_hide']))
				@continue
			@endif
			<div>
				<div class="textboxdiv">
					{!! Form::label($name, $element['label']) !!}
					@switch($element['type'])
						@case('text')
							{!! Form::text($name, @$element['value'], ['class' => 'textbox '.@$element['class']]) !!}
							@break;
						@case('password')
							{!! Form::password($name, ['class' => 'textbox '.@$element['class']]) !!}
							@break;
						@case('picklist')
							{!! Form::select($name, @$element['values'], @$element['value'], ['class' => 'selectbox']) !!}
							@break;

					@endswitch
	                        </div>
			</div>
			@endforeach
		</div>
		{!! Form::submit('Update', ['class' => 'btn tertiary wide']) !!}
	</div>
</div>
{!! Form::close() !!}
@endsection
