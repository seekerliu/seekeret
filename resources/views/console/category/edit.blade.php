@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_title')
	Category
@endsection

@section('main-content')
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary">
				{!! Form::open(['action' => ['CategoryController@update', $category->id], 'method' => 'PUT', 'id' => 'submit-form']) !!}
				<div class="box-header with-border">
					<h3 class="box-title">Edit Category</h3>

					<div class="box-tools">

					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="form-group">
						<label>Name</label>
						{!! Form::text('name', $category->name, ['class' => 'form-control']) !!}
					</div>
					<div class="form-group">
						<label>Order</label>
						{!! Form::text('order', $category->order, ['class' => 'form-control']) !!}
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
