@extends('templates.master')

@section('title')
	User Generator
@stop

@section('jumbotron')
	<p>user placeholder</p>
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