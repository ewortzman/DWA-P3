@extends('templates.master')

@section('jumbotron')
	<p>About Placeholder</p>
@stop

@section('script')
<script type="text/javascript">
	$(document).ready(function(){
		$('#nav_user').removeClass('active');
		$('#nav_lorem').removeClass('active');
		$('#nav_about').addClass('active');
	});
</script>
@stop
