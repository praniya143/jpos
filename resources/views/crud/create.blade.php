@extends('header')
@section('content')
{!! Form::model($model, ['action' => $model->formElements['create']]) !!}
<div class="bargenerate mobiletopflow">
	<div class="formleft">
		<div class="formtwiceway">
			@foreach($model->formElements['fields'] as $name=>$element)
			<div>
				<div class="textboxdiv">
					{!! Form::label($name, $element['label']) !!}
					@switch($element['type'])
						@case('text')
							{!! Form::text($name, '', ['class' => 'textbox '.@$element['class']]) !!}
							@break;
						@case('password')
							{!! Form::password($name, ['class' => 'textbox '.@$element['class']]) !!}
							@break;
						@case('picklist')
							{!! Form::select($name, @$element['values'], null, ['class' => 'selectbox']) !!}
							@break;

					@endswitch
	                        </div>
			</div>
			@endforeach
		</div>
		{!! Form::submit('Create', ['class' => 'btn tertiary wide']) !!}
	</div>
</div>
{!! Form::close() !!}
@endsection
