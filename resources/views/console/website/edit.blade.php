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
			<div class="box box-primary">
				{!! Form::open(['action' => ['WebsiteController@update', $website->id], 'method'=>'PUT', 'id' => 'submit-form',  'files' => true]) !!}
				<div class="box-header with-border">
					<h3 class="box-title">Edit Website</h3>

					<div class="box-tools">

					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="form-group">
						<label>Category</label>
						{!! Form::select('category_id', $categories, $website->category_id, ['class' => 'form-control', 'placeholder' => 'Pick a Category...']) !!}
					</div>

					<div class="form-group">
						<label>Name</label>
						{!! Form::text('name', $website->name, ['class' => 'form-control']) !!}
					</div>

					<div class="form-group">
						<label>Link</label>
						{!! Form::text('link', $website->link, ['class' => 'form-control']) !!}
					</div>

					<div class="form-group">
						<label>File input</label>
						@if(!empty($website->logo))
						<p><img src="{{$website->logo}}" /></p>
						@endif
						{!! Form::file('logo') !!}
						<p class="help-block">Logo size: 20x20px.</p>
					</div>

					<div class="form-group">
						<label>Order</label>
						{!! Form::text('order', $website->order, ['class' => 'form-control']) !!}
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
