@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb"> 
				<li><a href="{{url('/home')}}">Dashboard</a></li>
				<li class="active">Pengarang</li>
			</ul>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">Pengarang</h2>
				</div>

				<div class="panel-body">
				<p><a href="{{route('authors.create')}}" class="btn btn-primary">Tambah</a></p>
					{!! $html->table(['class'=>'table-striped']) !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('scripts')
{!! $html->scripts() !!}
@endsection