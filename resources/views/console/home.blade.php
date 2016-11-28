@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_title')
	Console
@endsection

@section('main-content')
	<div class="row">
		<div class="col-xs-6">
			<!-- small box -->
			<div class="small-box bg-aqua">
				<div class="inner">
					<h3>{{$count['website']}}</h3>

					<p>Websites</p>
				</div>
				<div class="icon">
					<i class="fa fa-chrome"></i>
				</div>
				<a href="/console/websites" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>

		<div class="col-xs-6">
			<!-- small box -->
			<div class="small-box bg-green">
				<div class="inner">
					<h3>{{$count['category']}}</h3>

					<p>Categories</p>
				</div>
				<div class="icon">
					<i class="fa fa-pie-chart"></i>
				</div>
				<a href="/console/categories" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
	</div>
@endsection
