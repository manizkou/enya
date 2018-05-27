@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-xs-12" id="namos">
				<!-- <h1>Welcome to Laravel</h1>
				<p>This is Laravel Application "Larvel From Scratch" Youtube Series</p> -->
				<h1>Welcome 
					<span v-if="cName==''">@{{sName}}</span>
					<span v-if="cName!=''">@{{cName}}</span>
				</h1>
				<p>Are you new around here?</p>
				<!-- <form fname="" id="" method="post"> -->
					<label for="strangerName">Hey dude let's know eachother. Let's start by name..</label>
					<input type="text" v-model="cName" name="strangerName" id="strangerName">
				<!-- </form> -->
			</div>
		</div>
	</div>
@endsection
