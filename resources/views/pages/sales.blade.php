@extends('master')

@section('header')
<title>MOT | Sales</title>
@stop

@section('plugin_styles')
<!-- Morris chart -->
<link href="/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
<script src="/plugins/morris/raphael.min.js"></script>
<script src="/plugins/morris/morris.min.js" type="text/javascript"></script>
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
<!-- Main row -->
          <div class="row sortable">
            <!-- Left col -->
            <section class="col-lg-6">
              <!-- Custom tabs (Charts with tabs)-->
              <div class="nav-tabs-custom">
                <!-- Tabs within a box -->
                <ul class="nav nav-tabs pull-right">
                  <li class="active"><a href="#revenue-chart" data-toggle="tab">Portfolio</a></li>
                  <li><a href="#revenue-chart" data-toggle="tab">PAR</a></li>
                  <li><a href="#revenue-chart" data-toggle="tab">VAR</a></li>
                   <!-- <li><a href="#sales-chart" data-toggle="tab">Donut</a></li> -->
                  <li class="pull-left header"><i class="fa fa-inbox"></i> MMCI</li>
                </ul>
                <div class="tab-content no-padding">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
                   <!-- <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>-->
                </div>
              </div><!-- /.nav-tabs-custom -->
			
            </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-6">
              
              <!-- Custom tabs (Charts with tabs)-->
              <div class="nav-tabs-custom">
                <!-- Tabs within a box -->
                <ul class="nav nav-tabs pull-right">
                  <li class="active"><a href="#revenue-chart" data-toggle="tab">Iligan</a></li>
                  <li><a href="#revenue-chart" data-toggle="tab">Lugait</a></li>
                  <li><a href="#revenue-chart" data-toggle="tab">Initao</a></li>
                  <li class="pull-left header"><i class="fa fa-inbox"></i> MMCI</li>
                </ul>
                <div class="tab-content no-padding">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart2" style="position: relative; height: 300px;"></div>
                  
                </div>
              </div><!-- /.nav-tabs-custom -->

              <!-- solid sales graph -->
              <div class="box box-solid bg-teal-gradient">

            </section><!-- right col -->
			
          </div><!-- /.row (main row) -->
@stop
          
@section('others')

@stop

@section('plugin_scripts')
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/dist/js/sales.js" type="text/javascript"></script> 
@stop