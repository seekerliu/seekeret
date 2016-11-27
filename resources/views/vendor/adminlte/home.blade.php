@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_title')
	Console
@endsection

@section('main-content')
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Frequently Used Websites</h3>

					<div class="box-tools">

					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body no-padding">
					<table class="table">
						<tbody>
							<tr>
								<th style="width: 10px">ID</th>
								<th style="width: 120px">Name</th>
								<th>Link</th>
								<th style="width: 40px">Logo</th>
								<th style="width: 40px">Action</th>
							</tr>
							<tr>
								<td>1</td>
								<td>Sina</td>
								<td><a href="http://sina.com">http://sina.com</a></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- /.box-body -->
				<div class="box-footer clearfix">
					<ul class="pagination pagination-sm no-margin pull-right">
						<li><a href="#">«</a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">»</a></li>
					</ul>
				</div>
				<!-- /.box-footer -->
			</div>
		</div>
	</div>
@endsection
