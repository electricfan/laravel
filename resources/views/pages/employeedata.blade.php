<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

@extends('master')

@section('header')
<title>MOT | Employee</title>
@stop


@section('content')
    <div class="row selectbranch" style="clear: both; float: none;">
            <!-- Split button -->
            <div class="btn-group">
              <button type="button" class="btn btn-default">Select Branch</button>
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Corporate</a></li>
                <li><a href="#">Iligan</a></li>
                <li><a href="#">Lugait</a></li>
                <li><a href="#">Initao</a></li>
                <li><a href="#">Maigo</a></li>
                <li><a href="#">El-Salvador</a></li>
                <!-- <li class="divider"></li>
                <li><a href="#">Separated link</a></li> -->
              </ul>
            </div>
            <div class="btn-group">
              <button type="button" class="btn btn-default">Sort Alphabetically</button>
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">A</a></li>
                <li><a href="#">B</a></li>
                <li><a href="#">C</a></li>
                <li><a href="#">D</a></li>
                <li><a href="#">E</a></li>
                <li><a href="#">F</a></li>
                <li><a href="#">G</a></li>
                <li><a href="#">H</a></li>
                <li><a href="#">I</a></li>
                <li><a href="#">J</a></li>
                <li><a href="#">K</a></li>
                <li><a href="#">L</a></li>
                <li><a href="#">M</a></li>
                <li><a href="#">N</a></li>
                <li><a href="#">O</a></li>
                <li><a href="#">P</a></li>
                <li><a href="#">Q</a></li>
                <li><a href="#">R</a></li>
                <li><a href="#">S</a></li>
                <li><a href="#">T</a></li>
                <li><a href="#">U</a></li>
                <li><a href="#">V</a></li>
                <li><a href="#">W</a></li>
                <li><a href="#">X</a></li>
                <li><a href="#">Y</a></li>
                <li><a href="#">Z</a></li>
                <!-- <li class="divider"></li>
                <li><a href="#">Separated link</a></li> -->
              </ul>
            </div>
            <div class="input-group">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                </span>
                <input type="text" class="form-control" placeholder="Search here...">
            </div><!-- /input-group -->
            
    </div>
    <div class="row profdata" style="clear: both; float: none;">
        <div class="col-sm-6 col-md-2">
            <div class="thumbnail">
              <div class="pic">
                <img src="/dist/img/user.jpg" alt="user" class="img-circle">
                <div class="piccaption thehide">
                    <h3>Dodong Juliver</h3>
                    <p>UI/UX, Front-End Developer</p>
                </div>
              </div>
              <div class="caption">
                <h3>Dodong Juliver</h3>
                <p>UI/UX, Front-End Developer</p>
              </div>
              <div class="captiondata thehide">
                <div class="cdwrapper">
                    <span><b>Job Title: </b></span><span>UI/UX, Front-End Developer</span>
                </div>
                <div class="cdwrapper">
                    <span><b>Department: </b></span><span>ICT</span>
                </div>
                  <div class="cdwrapper">
                      <span><b>Employee Number: </b></span><span>12345</span>
                </div>
                <div class="cdwrapper">
                    <span><b>Date Hired: </b></span><span>02/05/2015</span>
                </div>
                <div class="cdwrapper">
                    <span><b>Work Email: </b></span><span>myemail@email.com</span>
                </div>
              </div>
            </div>    
        </div>
        <div class="col-sm-6 col-md-2">
            <div class="thumbnail">
              <div class="pic">
                <img src="/dist/img/user1-128x128.jpg" alt="user" class="img-circle">
                <div class="piccaption thehide">
                    <h3>Walang Forever</h3>
                    <p>System Developer</p>
                </div>
              </div>
              <div class="caption">
                <h3>Walang Forever</h3>
                <p>System Developer</p>
              </div>
                <div class="captiondata thehide">
                <div class="cdwrapper">
                    <span><b>Job Title: </b></span><span>System Developer</span>
                </div>
                <div class="cdwrapper">
                    <span><b>Department: </b></span><span>ICT</span>
                </div>
                  <div class="cdwrapper">
                      <span><b>Employee Number: </b></span><span>12345</span>
                </div>
                <div class="cdwrapper">
                    <span><b>Date Hired: </b></span><span>02/05/2015</span>
                </div>
                <div class="cdwrapper">
                    <span><b>Work Email: </b></span><span>myemail@email.com</span>
                </div>
              </div>
            </div>    
        </div>
        <div class="col-sm-6 col-md-2">
            <div class="thumbnail">
              <div class="pic">
                <img src="/dist/img/user8-128x128.jpg" alt="user" class="img-circle">
                <div class="piccaption thehide">
                    <h3>Ricky Cagayan</h3>
                <p>Finance Officer</p>
                </div>
              </div>
              <div class="caption">
                <h3>Ricky Cagayan</h3>
                <p>Finance Officer</p>
              </div>
                <div class="captiondata thehide">
                <div class="cdwrapper">
                    <span><b>Job Title: </b></span><span>Finance Officer</span>
                </div>
                <div class="cdwrapper">
                    <span><b>Department: </b></span><span>Finance</span>
                </div>
                  <div class="cdwrapper">
                      <span><b>Employee Number: </b></span><span>12345</span>
                </div>
                <div class="cdwrapper">
                    <span><b>Date Hired: </b></span><span>02/05/2015</span>
                </div>
                <div class="cdwrapper">
                    <span><b>Work Email: </b></span><span>myemail@email.com</span>
                </div>
              </div>
            </div>    
        </div>
        <div class="col-sm-6 col-md-2">
            <div class="thumbnail">
              <div class="pic">
                <img src="/dist/img/user7-128x128.jpg" alt="user" class="img-circle">
                <div class="piccaption thehide">
                    <h3>Joy Todaworld</h3>
                    <p>Human Resource</p>
                </div>
              </div>
              <div class="caption">
                <h3>Joy Todaworld</h3>
                <p>Human Resource</p>
              </div>
                <div class="captiondata thehide">
                <div class="cdwrapper">
                    <span><b>Job Title: </b></span><span>Human Resource</span>
                </div>
                <div class="cdwrapper">
                    <span><b>Department: </b></span><span>HR</span>
                </div>
                  <div class="cdwrapper">
                      <span><b>Employee Number: </b></span><span>12345</span>
                </div>
                <div class="cdwrapper">
                    <span><b>Date Hired: </b></span><span>02/05/2015</span>
                </div>
                <div class="cdwrapper">
                    <span><b>Work Email: </b></span><span>myemail@email.com</span>
                </div>
              </div>
            </div>    
        </div>
         <div class="col-sm-6 col-md-2">
            <div class="thumbnail">
              <div class="pic">
                <img src="/dist/img/user4-128x128.jpg" alt="user" class="img-circle">
                <div class="piccaption thehide">
                    <h3>Linda Escobila</h3>
                    <p>Credit Officer</p>
                </div>
              </div>
              <div class="caption">
                <h3>Linda Escobila</h3>
                <p>Credit Officer</p>
              </div>
                 <div class="captiondata thehide">
                <div class="cdwrapper">
                    <span><b>Job Title: </b></span><span>Credit Officer</span>
                </div>
                <div class="cdwrapper">
                    <span><b>Department: </b></span><span>CO</span>
                </div>
                  <div class="cdwrapper">
                      <span><b>Employee Number: </b></span><span>12345</span>
                </div>
                <div class="cdwrapper">
                    <span><b>Date Hired: </b></span><span>02/05/2015</span>
                </div>
                <div class="cdwrapper">
                    <span><b>Work Email: </b></span><span>myemail@email.com</span>
                </div>
              </div>
            </div>    
        </div>
        <div class="col-sm-6 col-md-2">
            <div class="thumbnail">
              <div class="pic">
                <img src="/dist/img/user5-128x128.jpg" alt="user" class="img-circle">
                <div class="piccaption thehide">
                    <h3>Modyako Co</h3>
                <p>DB Analysis</p>
                </div>
              </div>
              <div class="caption">
                <h3>Modyako Co</h3>
                <p>DB Analysis</p>
              </div>
               <div class="captiondata thehide">
                <div class="cdwrapper">
                    <span><b>Job Title: </b></span><span>DB Analysis</span>
                </div>
                <div class="cdwrapper">
                    <span><b>Department: </b></span><span>ICT</span>
                </div>
                  <div class="cdwrapper">
                      <span><b>Employee Number: </b></span><span>12345</span>
                </div>
                <div class="cdwrapper">
                    <span><b>Date Hired: </b></span><span>02/05/2015</span>
                </div>
                <div class="cdwrapper">
                    <span><b>Work Email: </b></span><span>myemail@email.com</span>
                </div>
              </div>
            </div>    
        </div>
        <div class="col-sm-6 col-md-2">
            <div class="thumbnail">
                <div class="pic">
                    <img src="/dist/img/user4-128x128.jpg" alt="user" class="img-circle">
                    <div class="piccaption thehide">
                        <h3>Gray Homein</h3>
                        <p>PHP Programmer</p>
                    </div>
                </div>
              <div class="caption">
                <h3>Gray Homein</h3>
                <p>PHP Programmer</p>
              </div>
              <div class="captiondata thehide">
                <div class="cdwrapper">
                    <span><b>Job Title: </b></span><span>Programmer</span>
                </div>
                <div class="cdwrapper">
                    <span><b>Department: </b></span><span>ICT</span>
                </div>
                  <div class="cdwrapper">
                      <span><b>Employee Number: </b></span><span>12345</span>
                </div>
                <div class="cdwrapper">
                    <span><b>Date Hired: </b></span><span>02/05/2015</span>
                </div>
                <div class="cdwrapper">
                    <span><b>Work Email: </b></span><span>myemail@email.com</span>
                </div>
              </div>
            </div>    
        </div>
        <div class="col-sm-6 col-md-2">
            <div class="thumbnail">
              <div class="pic">
                <img src="/dist/img/user3-128x128.jpg" alt="user" class="img-circle">
                <div class="piccaption thehide">
                    <h3>Jason Lyenel</h3>
                    <p>JSP Developer</p>
                </div>
              </div>
              <div class="caption">
                <h3>Jason Lyenel</h3>
                <p>JSP Developer</p>
              </div>
              <div class="captiondata thehide">
                <div class="cdwrapper">
                    <span><b>Job Title: </b></span><span>Programmer</span>
                </div>
                <div class="cdwrapper">
                    <span><b>Department: </b></span><span>ICT</span>
                </div>
                  <div class="cdwrapper">
                      <span><b>Employee Number: </b></span><span>12345</span>
                </div>
                <div class="cdwrapper">
                    <span><b>Date Hired: </b></span><span>02/05/2015</span>
                </div>
                <div class="cdwrapper">
                    <span><b>Work Email: </b></span><span>myemail@email.com</span>
                </div>
              </div>
            </div>    
        </div>
    </div>

@stop

@section('others')
<!-- popup personal profile -->
        <div id="pdpopup" class="draggable">
            <div class="closebtn"><i class="pe-7s-close"></i></div>
            <section class="dodongleft">
                <div class="pcontentboxheader">
                    <img src="/dist/img/user.jpg" class="userimg2 animated slideInDown" />
                    <div class="userinfo animated fadeIn" style="clear: both; float: none; width: 100%;">
                        <h1>Dodong Juliver</h1>
                        <h2>UI/UX, Front End Developer</h2>
                        <div class="identity">
                            <div class="identityid" style="text-align: center;">
                                <i class="fa fa-user"></i><span> ID number: 01-0113</span>
                            </div>
			</div>
                       <br/>
                    </div>
                </div>
		<nav class="tabmenu animated zoomIn">
                    <a href="#pd" class="active_tab"><h1>Personal Details</h1></a>
                    <a href="#cd"><h1>Contact Details</h1></a>
                    <a href="#jd"><h1>Job details</h1></a>
                    <a href="#nok"><h1>Next of KIN</h1></a>
                </nav>
            </section>
            <section class="dodongright">
                <div class="pcontentboxinfo animated slideInRight">
                    <div id="pd" class="infotabcontent activeinfo">
						<h1>PERSONAL DETAILS</h1>
						<div class="scrollable">
							<table border="0" cellpadding="0" cellspacing="0">
							   <tr>
								   <td class="tdheader">Company Id</td><td>12345678</td>
							   </tr>
							   <tr>
								   <td class="tdheader">Surname</td><td>A.</td>
							   </tr>
							   <tr>
								   <td class="tdheader">First Name</td><td>Juliver</td>
							   </tr>
							   <tr>
								   <td class="tdheader">Middle Name</td><td>Alcantara</td>
							   </tr>
							   <tr>
								   <td class="tdheader">Other Name/Nick Name</td><td>Hakuna Makata</td>
							   </tr>
							   <tr>
								   <td class="tdheader">Gender</td><td>Male</td>
							   </tr>
							   <tr>
								   <td class="tdheader">Date of Birth</td><td>Oct. 5, 1992</td>
							   </tr>
							   <tr>
								   <td class="tdheader">Martial Status</td><td>Married with myself</td>
							   </tr>
							   <tr>
								   <td class="tdheader">Nationality</td><td>Filipino</td>
							   </tr>
							   <tr>
								   <td class="tdheader">Ethnicity</td><td>Asian</td>
							   </tr>
							   <tr>
								   <td class="tdheader">SSS</td><td>Not specified</td>
							   </tr>
							   <tr>
								   <td class="tdheader">PHIC</td><td>Not specified</td>
							   </tr>
							   <tr>
								   <td class="tdheader">PAG-IBIG</td><td>Not specified</td>
							   </tr>
							   <tr>
								   <td class="tdheader">TIN</td><td>Not specified</td>
							   </tr>
						   </table>
					   </div>
                    </div>
                    <div id="cd" class="infotabcontent">
					<h1>CONTACT DETAILS</h1>
					<div class="scrollable">
                        <table border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td class="tdheader">Address</td><td>Prk. 9 Tambacan Iligan, Philippines</td>
                            </tr>
                            <tr>
                                <td class="tdheader">Town/City</td><td>Iligan City</td>
                            </tr>
                            <tr>
                                <td class="tdheader">Post Code/Zip Code</td><td>9200</td>
                            </tr>
                            <tr>
                                <td class="tdheader">Country</td><td>Philippines</td>
                            </tr>
                            <tr>
                                <td class="tdheader">Home Telephone</td><td>222-3856</td>
                            </tr>
                            <tr>
                                <td class="tdheader">Personal Mobile</td><td>+639362023473</td>
                            </tr>
                            <tr>
                                <td class="tdheader">Personal Email</td><td>juliver.galleto@megamitch.com</td>
                            </tr>
                        </table>
					</div>
                    </div>
                    <div id="jd" class="infotabcontent">
					<h1>JOB DETAILS</h1>
					<div class="scrollable">
                        <table border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td class="tdheader">Department</td><td>ICT</td>
                            </tr>
                            <tr>
                                <td class="tdheader">Job Title</td><td>UI/UX, Front End Developer</td>
                            </tr>
                            <tr>
                                <td class="tdheader">Job Location</td><td>5th flr. Abalus Blg.</td>
                            </tr>
                            <tr>
                                <td class="tdheader">Hired Date</td><td>2015-02-05</td>
                            </tr>
                            <tr>
                                <td class="tdheader">Work Email</td><td>juliver.galleto@megamitch.com</td>
                            </tr>
                        </table>
					</div>
                    </div>
                    <div id="nok" class="infotabcontent">
					<h1>NEXT OF KIN</h1>
					<div class="scrollable">
                        <table border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td class="tdheader">Name</td><td>Virginia Galleto</td>
                            </tr>
                            <tr>
                                <td class="tdheader">Address</td><td>Prk. 9 Tambacan Iligan City</td>
                            </tr>
                            <tr>
                                <td class="tdheader">Relationship</td><td>Mother</td>
                            </tr>
                            <tr>
                                <td class="tdheader">Home Telephone</td><td>Not specified</td>
                            </tr>
                            <tr>
                                <td class="tdheader">Work Telephone</td><td>Not Specified</td>
                            </tr>
                            <tr>
                                <td class="tdheader">Mobile Telephone</td><td>Not Specified</td>
                            </tr>
                            <tr>
                                <td class="tdheader">Email</td><td>Not Specified</td>
                            </tr>
                        </table>
		</div>
                    </div>
                </div>
            </section>
        </div>
@stop

@section('plugin_scripts')
<script type="text/javascript" src="/dist/js/employeedata.js" ></script>
@stop