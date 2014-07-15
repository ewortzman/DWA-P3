@extends('templates.master')

@section('title')
	About the Author
@stop

@section('jumbotron')
<br>
<img src="images/Sox Game.jpg" width="200px" />
<h2>Ethan A.B. Wortzman</h2>

<br>

<div id="accordion" class="panel-group">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">In 2+ sentences describe who you are and what you do.</a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse">
            <div class="panel-body">
                <p>I graduated from the <a href="http://www.umass.edu/">University of Massachusetts</a> in 2011 and began pursuing a career in software development.  For 2 years I worked in Virginia for <a href="http://www.mitre.org/">a government contractor</a> before leaving to pursue a position more in line with my goals.</p>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Why are you taking this course?</a>
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse">
            <div class="panel-body">
                <p>I am taking this course because I have had only a short foray into web development.  I want to continue to add new skills to my repertoire and web development is something I have enjoyed immensely in the few chances I have had to do it.</p>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">What previous experience do you have with HTML/CSS?</a>
            </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse">
            <div class="panel-body">
                <p>I have done a small amount of work in HTML and CSS, but all my previous work has been very basic.  I have written some basic websites, and have some academic experience with the Python-based web framework <a href="https://www.djangoproject.com/">Django.</a></p>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">What previous experience do you have with programming?</a>
            </h4>
        </div>
        <div id="collapseFour" class="panel-collapse collapse">
            <div class="panel-body">
                <p>I have a degree in Computer Science with a focus in Software Engineering from the University of Massachusetts Amherst. I have extensive programming experience in object-oriented languages. My work has primarily been in Java and Python, though I have worked in C/C++, C#, and PHP.</p>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Have you worked with PHP before? If so, to what extent?</a>
            </h4>
        </div>
        <div id="collapseFive" class="panel-collapse collapse">
            <div class="panel-body">
                <p>I taught myself PHP in 2010 while working an internship for <a href="http://www.perfectstormmedia.com/">an online marketing company</a> in London. This internship was my very first experience with any kind of web development (this is also where I learned HTML and JavaScript).  Since that 4 month internship, I've used PHP very little</p>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Are you working on a Mac, PC, or some other platform?</a>
            </h4>
        </div>
        <div id="collapseSix" class="panel-collapse collapse">
            <div class="panel-body">
               <p>My preferred platform for development is Linux.  For this course, I will be working in <a href="http://www.linuxmint.com/">Linux Mint 16.</a> 
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">Anything else we should know?</a>
            </h4>
        </div>
        <div id="collapseSeven" class="panel-collapse collapse">
            <div class="panel-body">
                <p>Hobbies of mine include bicycling, rock climbing, playing trombone, and video games.</p>
            </div>
        </div>
    </div>
</div>






















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
