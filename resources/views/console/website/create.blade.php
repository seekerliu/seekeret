@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_title')
	Website
@endsection

@section('main-content')
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-success">
				{!! Form::open(['action' => ['WebsiteController@store'], 'id' => 'submit-form', 'files' => true]) !!}
				<div class="box-header with-border">
					<h3 class="box-title">Add New Website</h3>

					<div class="box-tools">

					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="form-group">
						<label>Category</label>
						{!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Pick a Category...']) !!}
					</div>

					<div class="form-group">
						<label>Name</label>
						{!! Form::text('name', '', ['class' => 'form-control']) !!}
					</div>

					<div class="form-group">
						<label>Link</label>
						{!! Form::text('link', '', ['class' => 'form-control']) !!}
					</div>

					<div class="form-group">
						<label>File input</label>
						{!! Form::file('logo') !!}
						<p class="help-block">Logo size: 20x20px.</p>
					</div>

					<div class="form-group">
						<label>Order</label>
						{!! Form::text('order', 0, ['class' => 'form-control']) !!}
					</div>
				</div>
				<!-- /.box-body -->
				<div class="box-footer clearfix">
					<a class="btn btn-primary btn-sm submit"><i class="fa fa-save"></i>Save</a>
					<a class="btn btn-default btn-sm cancel"><i class="fa fa-remove"></i>Cancel</a>
				</div>
				<!-- /.box-footer -->
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection
