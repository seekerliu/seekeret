@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_title')
	SEO
@endsection

@section('main-content')
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary">
				{!! Form::open(['action' => ['HomeController@updateSeo'], 'method'=>'PUT', 'id' => 'submit-form',  'files' => true]) !!}
				<div class="box-header with-border">
					<h3 class="box-title">Edit Settings</h3>

					<div class="box-tools">

					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					@foreach($settings as $key => $value)
					<div class="form-group">
						<label>{{$key}}</label>
						{!! Form::textarea($key, $value, ['class' => 'form-control', 'rows' => 5]) !!}
					</div>
					@endforeach
				</div>
				<!-- /.box-body -->
				<div class="box-footer clearfix">
					<a class="btn btn-primary btn-sm submit"><i class="fa fa-save"></i>Save</a>
				</div>
				<!-- /.box-footer -->
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection
