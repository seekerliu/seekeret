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
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">All Websites</h3>

					<div class="box-tools">
						<a href="/console/websites/create" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>Add New</a>
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
								<th>Link</th>
								<th>Logo</th>
								<th>Order</th>
								<th>Category</th>
								<th style="width: 200px">Action</th>
							</tr>
							@foreach($websites as $website)
							<tr>
								<td>{{$website->id}}</td>
								<td>{{$website->name}}</td>
								<td>{{$website->link}}</td>
								<td>@if(!empty($website->logo))<img class="website-logo" src="{{$website->logo}}" />@endif</td>
								<td>{{$website->order}}</td>
								<td><a href="/console/categories/{{$website->category->id}}/websites"><span class="badge bg-blue">{{$website->category->name}}</span></a></td>
								<td>
									<a href="/console/websites/{{$website->id}}/edit" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i>Edit</a>
									<a href="/console/websites/{{$website->id}}" class="btn btn-danger btn-xs delete"><i class="fa fa-remove"></i>Remove</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<!-- /.box-body -->
				<div class="box-footer clearfix">
					{{$websites->links()}}
				</div>
				<!-- /.box-footer -->
			</div>
		</div>
	</div>
@endsection
