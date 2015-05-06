@extends('master')

@section('header')
<title>MOT | Dashboard</title>
@stop

@section('plugin_styles')
<!-- iCheck -->
<link href="/plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />

<!-- jvectormap -->
<link href="/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
<!-- Daterange picker -->
<link href="/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
<!-- bootstrap wysihtml5 - text editor -->
<link href="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
<script src="/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
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
<div id="updates">
    <div class="row sortable center extend clear">
        <div class="col-md-3 extend bgwhite updatebox">
            <div class="updatebox_header extend clear">
                <div class="updatebox_header_icon"><i class="ion-android-notifications"></i></div>
                <h1 class="updatebox_header_h1">Recent Updates</h1>
            </div>
            <div class="updatebox_content_wrapper extend clear">
                <div class="updatebox_content_container extend clear tp ketchup" title="Posted today">
                    <div class="updatebox_content_icon"><i class="ion-ios-checkmark-outline"></i></div>
                    <div class="updatebox_content">
                        This is the sample of recent updates contents
                    </div>
                </div>
                <div class="updatebox_content_container extend clear tp ketchup" title="Posted today">
                    <div class="updatebox_content_icon"><i class="ion-ios-checkmark-outline"></i></div>
                    <div class="updatebox_content">
                        This is the sample of recent updates contents
                    </div>
                </div>
                <div class="updatebox_content_container extend clear tp ketchup" title="Posted today">
                    <div class="updatebox_content_icon"><i class="ion-ios-checkmark-outline"></i></div>
                    <div class="updatebox_content">
                        This is the sample of recent updates contents
                    </div>
                </div>
                <div class="updatebox_content_container extend clear tp ketchup" title="Posted today">
                    <div class="updatebox_content_icon"><i class="ion-ios-checkmark-outline"></i></div>
                    <div class="updatebox_content">
                        This is the sample of recent updates contents
                    </div>
                </div>
                <div class="updatebox_content_container extend clear tp ketchup" title="Posted today">
                    <div class="updatebox_content_icon"><i class="ion-ios-checkmark-outline"></i></div>
                    <div class="updatebox_content">
                        This is the sample of recent updates contents
                    </div>
                </div>
                <div class="updatebox_content_container extend clear tp ketchup" title="Posted today">
                    <div class="updatebox_content_icon"><i class="ion-ios-checkmark-outline"></i></div>
                    <div class="updatebox_content">
                        This is the sample of recent updates contents
                    </div>
                </div>
                <div class="updatebox_content_container extend clear tp ketchup" title="Posted today">
                    <div class="updatebox_content_icon"><i class="ion-ios-checkmark-outline"></i></div>
                    <div class="updatebox_content">
                        This is the sample of recent updates contents
                    </div>
                </div>
            </div>
        </div> <!-- end of the update box -->
        <div class="col-md-3 extend bgwhite updatebox">
            <div class="updatebox_header extend clear">
                <div class="updatebox_header_icon"><i class="ion-android-notifications"></i></div>
                <h1 class="updatebox_header_h1">Management Updates</h1>
            </div>
            <div class="updatebox_content_wrapper extend clear">
                <div class="updatebox_content_container extend clear tp ketchup" title="Posted today">
                    <div class="updatebox_management_poster extend clear"><span class="ion-android-contact"></span><span>MARKETING</span></div>
                    <div class="updatebox_management_content extend clear">
                        This is the sample of management updates contents
                    </div>
                </div>
                <div class="updatebox_content_container extend clear tp ketchup" title="Posted today">
                    <div class="updatebox_management_poster extend clear"><span class="ion-android-contact"></span><span>FINANCE</span></div>
                    <div class="updatebox_management_content extend clear">
                        This is the sample of management updates contents
                    </div>
                </div>
                <div class="updatebox_content_container extend clear tp ketchup" title="Posted today">
                    <div class="updatebox_management_poster extend clear"><span class="ion-android-contact"></span><span>LEGAL</span></div>
                    <div class="updatebox_management_content extend clear">
                        This is the sample of management updates contents
                    </div>
                </div>
                <div class="updatebox_content_container extend clear tp ketchup" title="Posted today">
                    <div class="updatebox_management_poster extend clear"><span class="ion-android-contact"></span><span>FINANCE</span></div>
                    <div class="updatebox_management_content extend clear">
                        This is the sample of management updates contents
                    </div>
                </div>
                <div class="updatebox_content_container extend clear tp ketchup" title="Posted today">
                    <div class="updatebox_management_poster extend clear"><span class="ion-android-contact"></span><span>HR</span></div>
                    <div class="updatebox_management_content extend clear">
                        This is the sample of management updates contents
                    </div>
                </div>
                <div class="updatebox_content_container extend clear tp ketchup" title="Posted today">
                    <div class="updatebox_management_poster extend clear"><span class="ion-android-contact"></span><span>HR</span></div>
                    <div class="updatebox_management_content extend clear">
                        This is the sample of management updates contents
                    </div>
                </div>
                <div class="updatebox_content_container extend clear tp ketchup" title="Posted today">
                    <div class="updatebox_management_poster extend clear"><span class="ion-android-contact"></span><span>FINANCE</span></div>
                    <div class="updatebox_management_content extend clear">
                        This is the sample of management updates contents
                    </div>
                </div>
            </div>
        </div> <!-- end of the update box -->
        <div class="col-md-3 extend bgwhite updatebox">
            <div class="updatebox_header extend clear tp ketchup" title="Posted today">
                <div class="updatebox_header_icon"><i class="ion-android-notifications"></i></div>
                <h1 class="updatebox_header_h1">HR updates</h1>
            </div>
            <div class="updatebox_content_wrapper extend clear">
                <div class="updatebox_content_container extend clear tp ketchup" title="Posted today">
                    <div class="updatebox_content_icon"><i class="ion-ios-star"></i></div>
                    <div class="updatebox_content">
                        This is the sample of HR updates contents
                    </div>
                </div>
                <div class="updatebox_content_container tp ketchup" title="Posted today">
                    <div class="updatebox_content_icon"><i class="ion-more"></i></div>
                    <div class="updatebox_content">
                        This is the sample of HR updates contents
                    </div>
                </div>
                <div class="updatebox_content_container extend clear tp ketchup" title="Posted today">
                    <div class="updatebox_content_icon"><i class="ion-ios-star"></i></div>
                    <div class="updatebox_content">
                        This is the sample of HR updates contents
                    </div>
                </div>
                <div class="updatebox_content_container extend clear tp ketchup" title="Posted today">
                    <div class="updatebox_content_icon"><i class="ion-alert-circled"></i></div>
                    <div class="updatebox_content">
                        This is the sample of HR updates contents
                    </div>
                </div>
                <div class="updatebox_content_container extend clear tp ketchup" title="Posted today">
                    <div class="updatebox_content_icon"><i class="ion-plus-circled"></i></div>
                    <div class="updatebox_content">
                        This is the sample of HR updates contents
                    </div>
                </div>
                <div class="updatebox_content_container extend clear tp ketchup" title="Posted today">
                    <div class="updatebox_content_icon"><i class="ion-alert-circled"></i></div>
                    <div class="updatebox_content">
                        This is the sample of HR updates contents
                    </div>
                </div>
                <div class="updatebox_content_container extend clear tp ketchup" title="Posted today">
                    <div class="updatebox_content_icon"><i class="ion-plus-circled"></i></div>
                    <div class="updatebox_content">
                        This is the sample of HR updates contents
                    </div>
                </div>
            </div>
        </div> <!-- end of the update box -->
        <div class="col-md-3 extend bgwhite updatebox">
            <div class="updatebox_header extend clear">
                <div class="updatebox_header_icon"><i class="ion-android-notifications"></i></div>
                <h1 class="updatebox_header_h1">Personal Updates</h1>
            </div>
            <div class="updatebox_content_wrapper extend clear">
                <div class="updatebox_content_container extend clear">
                    <div class="updatebox_content_icon"><i class="ion-checkmark-circled"></i></div>
                    <div class="updatebox_content">
                        This is the sample of personal updates contents
                    </div>
                </div>
                <div class="updatebox_content_container">
                    <div class="updatebox_content_icon"><i class="ion-checkmark-circled"></i></div>
                    <div class="updatebox_content">
                        This is the sample of personal updates contents
                    </div>
                </div>
                <div class="updatebox_content_container extend clear">
                    <div class="updatebox_content_icon"><i class="ion-checkmark-circled"></i></div>
                    <div class="updatebox_content">
                        This is the sample of personal updates contents
                    </div>
                </div>
                <div class="updatebox_content_container extend clear">
                    <div class="updatebox_content_icon"><i class="ion-checkmark-circled"></i></div>
                    <div class="updatebox_content">
                        This is the sample of personal updates contents
                    </div>
                </div>
                <div class="updatebox_content_container extend clear">
                    <div class="updatebox_content_icon"><i class="ion-checkmark-circled"></i></div>
                    <div class="updatebox_content">
                        This is the sample of personal updates contents
                    </div>
                </div>
                <div class="updatebox_content_container extend clear">
                    <div class="updatebox_content_icon"><i class="ion-checkmark-circled"></i></div>
                    <div class="updatebox_content">
                        This is the sample of personal updates contents
                    </div>
                </div>
                <div class="updatebox_content_container extend clear">
                    <div class="updatebox_content_icon"><i class="ion-checkmark-circled"></i></div>
                    <div class="updatebox_content">
                        This is the sample of personal updates contents
                    </div>
                </div>
            </div>
        </div> <!-- end of the update box -->
    </div>
</div>
@stop

@section('others')

@stop

@section('plugin_scripts')
<!-- main script -->
<script src="/dist/js/main.js" type="text/javascript"></script>

@stop