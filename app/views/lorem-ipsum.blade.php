@extends('templates.master')

@section('title')
	Lorem Ipsum Generator
@stop

@section('jumbotron')
	<h2>Lorem Ipsum Generator</h2>
	<form class="form-horizontal" role="form" id="options" action="/lorem" method="post">
		<fieldset>
			<legend>Options</legend>
			<div class="form-group">
				<label class="col-sm-2 control-label"># of Paragraphs</label>
				<div class="col-sm-2">
					<input type="number" min="1" max="25" class="form-control" name="p_min" id="p_min" placeholder="Minimum" {{ isset($data) ? "value=".$data["p_min"] : "" }} required>
				</div>
				<div class="col-sm-2">
					<input type="number" min="1" max="25" class="form-control" name="p_max" id="p_max" placeholder="Maximum" {{ isset($data) ? "value=".$data["p_max"] : "" }} required>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label"># of Sentences</label>
				<div class="col-sm-2">
					<input type="number" min="1" max="25" class="form-control" name="s_min" id="s_min" placeholder="Minimum" {{ isset($data) ? "value=".$data["s_min"] : "" }} required>
				</div>
				<div class="col-sm-2">
					<input type="number" min="1" max="25" class="form-control" name="s_max" id="s_max" placeholder="Maximum" {{ isset($data) ? "value=".$data["s_max"] : "" }} required>
				</div>
			</div>
			<button type="submit" class="btn btn-default">
				Generate <span class="glyphicon glyphicon-circle-arrow-right"></span>				
			</button>
		</fieldset>
	</form>

	@if (Request::isMethod('post'))
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
				@foreach ($paragraphs as $par)
					<p>{{ $par }}</p>
				@endforeach
	
		</div>
		<div class="col-sm-1"></div>
	</div>
	@endif
	@stop

@section('script')
<script type="text/javascript">
	$(document).ready(function(){
		$('#nav_user').removeClass('active');
		$('#nav_lorem').addClass('active');
		$('#nav_about').removeClass('active');
	});

	$('#p_min').change(function(){
		$('#p_max').attr('min', $('#p_min').val());
	});

	$('#p_max').change(function(){
		$('#p_min').attr('max', $('#p_max').val());
	});

	$('#s_min').change(function(){
		$('#s_max').attr('min', $('#s_min').val());
	});

	$('#s_max').change(function(){
		$('#s_min').attr('max', $('#s_max').val());
	});
</script>
@stop