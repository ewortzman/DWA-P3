@extends('templates.master')

@section('title')
	Lorem Ipsum Generator
@stop

@section('jumbotron')
	<p>lorem placeholder</p>
@stop

@section('script')
<script type="text/javascript">
	$(document).ready(function(){
		$('#nav_user').removeClass('active');
		$('#nav_lorem').addClass('active');
		$('#nav_about').removeClass('active');
	});
</script>
@stop