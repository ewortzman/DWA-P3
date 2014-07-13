@extends('templates.master')

@section('jumbotron')
	<p>Homepage Placeholder</p>
@stop

@section('script')
<script type="text/javascript">
	$(document).ready(function(){
		$('#nav_user').removeClass('active');
		$('#nav_lorem').removeClass('active');
	});
</script>
@stop