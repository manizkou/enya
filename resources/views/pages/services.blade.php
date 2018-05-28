@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>{{$title}}</h1>
				{{-- <p>This is Service page</p> --}}
				@if(count($services)>0)
				<ul>	
					@foreach ($services as $service)

						<li>{{$service}}</li>

					@endforeach
				</ul>
				@endif
			</div>
		</div>
	</div>
@endsection
