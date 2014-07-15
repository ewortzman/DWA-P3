@extends('templates.master')

@section('jumbotron')
	<p>
	This application allows the user to generate random text or random user information.  Please use the navbar above to navigate.
	</p>
@stop

@section('script')
<script type="text/javascript">
	$(document).ready(function(){
		$('#nav_user').removeClass('active');
		$('#nav_lorem').removeClass('active');
	});
</script>
@stop