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
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">All Categories</h3>

					<div class="box-tools">
						<a href="/console/categories/create" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>Add New</a>
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body no-padding">
					<form id="delete-form" action="" method="POST" style="display: none;">
						<input type="hidden" name="_method" value="DELETE" />
						{{ csrf_field() }}
					</form>
					<table class="table">
						<tbody>
							<tr>
								<th style="width: 10px">ID</th>
								<th>Name</th>
								<th>Websites</th>
								<th>Order</th>
								<th>Action</th>
							</tr>
							@foreach($categories as $category)
							<tr>
								<td>{{$category->id}}</td>
								<td>{{$category->name}}</td>
								<td><a href="/console/categories/{{$category->id}}/websites"><span class="badge bg-blue">{{$category->websites->count()}}</span></a></td>
								<td>{{$category->order}}</td>
								<td>
									<a href="/console/categories/{{$category->id}}/edit" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i>Edit</a>
									<a href="/console/categories/{{$category->id}}" class="btn btn-danger btn-xs delete"><i class="fa fa-remove"></i>Remove</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<!-- /.box-body -->
				<div class="box-footer clearfix">
					{{$categories->links()}}
				</div>
				<!-- /.box-footer -->
			</div>
		</div>
	</div>
@endsection
