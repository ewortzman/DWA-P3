@extends('templates.master')

@section('title')
	User Generator
@stop

@section('jumbotron')
	<h2>Random User Generator</h2>
	<form class="form-horizontal" role="form" id="options" action="/user" method="post">
		<fieldset>
			<legend>Options</legend>
			<div class="form-group">
				<label for="num" class="col-sm-2 control-label"># of Users</label>
				<div class="col-sm-4">
					<input type="number" min="1" max="25" class="form-control" name="num" id="num" placeholder="Users" {{ isset($data) ? "value=".$data["num"] : "" }} required>
				</div>
			</div>
			<div class="form-group">
				<label for="gender" class="col-sm-2 control-label">Gender</label>
				<div class="col-sm-4">
					<select class="form-control" id="gender" name="gender">
						<option value="" {{ isset($data) && $data['gender']!="" ? "" : "selected" }}>Random</option>
						<option value="male" {{ isset($data) && $data['gender']=="male" ? "selected" : "" }}>Male</option>
						<option value="female" {{ isset($data) && $data['gender']=="female" ? "selected" : "" }}>Female</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Misc</label>
				<div class="col-sm-4">
					<label><input type="checkbox" name="options[]" value="username" checked disabled> Username</label><br>
					<label><input type="checkbox" name="options[]" value="title" {{ isset($options) && in_array('title', $options) ? "checked" : "" }}> Title</label>
					<label><input type="checkbox" name="options[]" value="first" {{ isset($options) && in_array('first', $options) ? "checked" : "" }}> First Name</label>
					<label><input type="checkbox" name="options[]" value="last" {{ isset($options) && in_array('last', $options) ? "checked" : "" }}> Last Name</label><br>
					<label><input type="checkbox" name="options[]" value="address" {{ isset($options) && in_array('address', $options) ? "checked" : "" }}> Address</label>
					<label><input type="checkbox" name="options[]" value="city" {{ isset($options) && in_array('city', $options) ? "checked" : "" }}> City</label>
					<label><input type="checkbox" name="options[]" value="state" {{ isset($options) && in_array('state', $options) ? "checked" : "" }}> State</label>
					<label><input type="checkbox" name="options[]" value="zip" {{ isset($options) && in_array('zip', $options) ? "checked" : "" }}> ZIP</label><br>
					<label><input type="checkbox" name="options[]" value="email" {{ isset($options) && in_array('email', $options) ? "checked" : "" }}> Email</label>
					<label><input type="checkbox" name="options[]" value="phone" {{ isset($options) && in_array('phone', $options) ? "checked" : "" }}> Phone</label><br>
				</div>
			</div>
			<button type="submit" class="btn btn-default">
				Generate <span class="glyphicon glyphicon-circle-arrow-right"></span>				
			</button>
		</fieldset>
	</form>

	@if (Request::isMethod('post'))
		@foreach ($users as $user)
		<div class="row" style="padding-top:20px;">
			<div class="col-sm-1"></div>
			<div class="col-sm-1">
				<strong>Username</strong>
			</div>
			<div class="col-sm-4">
				{{ $user['uname'] }}
			</div>
		</div>
		@if (isset($user['name']))
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-1">
					<strong>Name</strong>
				</div>
				<div class="col-sm-4">
					{{ $user['name'] }}
				</div>
			</div>
		@endif
		@if (isset($user['address']))
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-1">
					<strong>Address</strong>
				</div>
				<div class="col-sm-4">
					{{ $user['address'] }}
				</div>
			</div>
		@endif
		@if (isset($user['location']))
			<div class="row">
				<div class="col-sm-2"></div>
				<div class="col-sm-4">
					{{ $user['location'] }}
				</div>
			</div>
		@endif
		@if (isset($user['email']))
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-1">
					<strong>Email</strong>
				</div>
				<div class="col-sm-4">
					{{ $user['email'] }}
				</div>
			</div>
		@endif
		@if (isset($user['phone']))
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-1">
					<strong>Phone</strong>
				</div>
				<div class="col-sm-4">
					{{ $user['phone'] }}
				</div>
			</div>
		@endif
		@endforeach
	@endif
@stop

@section('script')
<script type="text/javascript">
	$(document).ready(function(){
		$('#nav_user').addClass('active');
		$('#nav_lorem').removeClass('active');
		$('#nav_about').removeClass('active');
	});
</script>
@stop