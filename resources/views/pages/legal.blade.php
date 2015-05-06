@extends('master')

@section('header')
<title>MOT | Sales</title>
@stop


@section('boxes')
 <!-- Small boxes (Stat box) -->
          <div class="row extend clear bgwhite center" style="margin-bottom: 10px;">
            <!-- boxes -->
			<div class="boxess">
				<div class="boxx circleone red" style="background-image: url(/dist/img/person.png); background-position: center center; background-repeat: no-repeat; background-size: 100px 100px;">
					<h3>819</h3>
					<p>Client in Arrears</p>
				</div>
				<div class="boxx circleone red" style="background-image: url(/dist/img/book.png); background-position: center center; background-repeat: no-repeat; background-size: 100px 100px;">
					<h3>1,167</h3>
					<p>Client in Legal</p>
				</div>
				<div class="boxx circletwo yellow" style="background-image: url(/dist/img/person2.png); background-position: center center; background-repeat: no-repeat; background-size: 100px 81px;">
					<h3>173</h3>
					<p>Client in Grace Period</p>
				</div>
				<div class="boxx circletwo yellow" style="background-image: url(/dist/img/exclamation.png); background-position: center center; background-repeat: no-repeat; background-size: 88px 88px;">
					<h3>11, 390, 558</h3>
					<p>Value at Risk</p>
				</div>
				<div class="boxx circletwo yellow" style="background-image: url(/dist/img/exclamation.png); background-position: center center; background-repeat: no-repeat; background-size: 88px 88px;">
					<h3>32.02%</h3>
					<p>Ratio in Arrears &lt; 230%</p>
				</div>
				<div class="boxx circlethree green" style="background-image: url(/dist/img/person3.png); background-position: center center; background-repeat: no-repeat; background-size: 111px 85px;">
					<h3>1,556</h3>
					<p>Good Standing Clients</p>
				</div>
				<div class="boxx circlethree green" style="background-image: url(/dist/img/exclamation.png); background-position: center center; background-repeat: no-repeat; background-size: 88px 88px;">
					<h3>5, 405, 077</h3>
					<p>VAR &gt; 30</p>
				</div>
				<div class="boxx circlethree green" style="background-image: url(/dist/img/exclamation.png); background-position: center center; background-repeat: no-repeat; background-size: 88px 88px;">
					<h3>6.92%</h3>
					<p>PAR &gt; 30</p>
				</div>
				<div class="boxx circlethree green" style="background-image: url(/dist/img/exclamation.png); background-position: center center; background-repeat: no-repeat; background-size: 88px 88px;">
					<h3>1, 069, 437</h3>
					<p>VAR &gt; 90</p>
				</div>
				<div class="boxx circlefour skyblue" style="background-image: url(/dist/img/heart.png); background-position: center center; background-repeat: no-repeat; background-size: 100px 100px;">
					<h3>32.02%</h3>
					<p>Ration in Arrears &lt; 230%</p>
				</div>
				<div class="boxx circlefive blue" style="background-image: url(/dist/img/flag.png); background-position: center center; background-repeat: no-repeat; background-size: 100px 100px;">
					<h3>86</h3>
					<p>Future Clients</p>
				</div>	
			</div>	<!-- end of the boxes -->
          </div><!-- /.row -->
@stop
          
@section('content')
    <div class="row" id="injoker">
            
              <h1>Legal Content here...</h1>
			
    </div><!-- /.row (main row) -->
@stop
          
@section('others')

@stop

@section('plugin_scripts')
<script src="/dist/js/default.js" type="text/javascript"></script>
@stop