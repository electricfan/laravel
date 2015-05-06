@extends('master')

@section('header')
<title>MOT | Profile</title>
@stop


@section('content')
 <!-- Small boxes (Stat box) -->
<div class="row" style="clear: both; float: none;">
    <div class="row" id="profile">
        <div class="profheader">
            <div class="userimg"><img src="/dist/img/user.jpg"></div>
            <div class="userinfo">
                <h1>Dodong Juliver</h1>
                <h2>UI/UX, Front End Developer</h2>
                <div class="identity">
                    <div class="identityid">
                        <i class="fa fa-user"></i><span style="margin-left: 7px;"> ID number: 01-0113</span>
                    </div>
                    <br/>
                    <a href="#" class="btninfo clear extend"><i class="fa fa-user-plus"></i>  Personal Info</a>
                </div>
            </div>
            <div class="profinfoboxcontainer col-lg-4">
                <a href="#" class="tp ketchup profinfobox" title="Prk. 9 Tambacan, Iligan City"><span class="fa fa-map-marker"></span><br/><span>Address</span></a>
                <a href="#" class="tp ketchup profinfobox" title="09362023473"><span class="fa fa-mobile"></span><br/><span>Phone</span></a>
                <a href="#" class="profinfobox" title=""><span class="fa fa-building-o"></span><br/><span>TIN</span></a>
                <a href="#" class="profinfobox" title=""><span class="fa fa-building-o"></span><br/><span>PAG-IBIG</span></a>
                <a href="#" class="tp ketchup profinfobox" title="juliver.galleto@gmail.com"><span class="fa fa-envelope"></span><br/><span>email</span></a>
                <a href="#" class="tp ketchup profinfobox" title="08-1865728-9"><span class="fa fa-building-o"></span><br/><span>SSS</span></a>
                <a href="#" class="tp ketchup profinfobox" title="A"><span class="fa fa-heart"></span><br/><span>blood type</span></a>
                <a href="#" class="tp ketchup profinfobox" title="01-0113"><span class="fa fa-user"></span><br/><span>ID</span></a>
                <a href="#" class="tp ketchup profinfobox" title="julivergalleto"><span class="fa fa-skype"></span><br/><span>skype</span></a>
                <a href="#" class="tp ketchup profinfobox" title="15-050292177-2"><span class="fa fa-building-o"></span><br/><span>Philhealth</span></a>
                <a href="#" class="tp ketchup profinfobox" title="2015-02-05"><span class="fa fa-star"></span><br/><span>Date Hired</span></a>
            </div>
        </div>
        <div id="profcontent">
            <div class="tab" id="proftab">
                <div class="tabheader">
                    <a href="#tab1" class="active_tab">ATTENDANCE</a>
                    <a href="#tab2">OB</a>
                    <a href="#tab3">LEAVE</a>
                    <button class="btn btn-default oboptionfull tp ketchup" style="padding-top: 9px; padding-bottom: 3px;" title="full"><i class="ion-arrow-resize"></i></button>
                    <button class="btn btn-default oboptionside tp ketchup" style="padding-top: 9px; padding-bottom: 3px;" title="side"><i class="ion-arrow-swap"></i></button>
                </div>
                <div class="extend clear" style="height: 15px;"></div>
                <div class="tabcontent">
                    <div id="tab1" class="tabcontenttab animated fadeIn active">
                        <section class="col-lg-6">
                            <h1 class="srh1"><i class="ion-clipboard"></i><span style="margin-left: 7px;">SUMMARY REPORT</span></h1>
                                <!-- <h2><i class="pe-7s-date"></i><span style="margin-left: 7px;">From: 3/25/2015 To: 4/9/2015</span></h2> -->
                                <div class="srsr extend clear">
                                    <div class="dropdown dpd" style="float: left;">
                                    <button class="btn btn-default dropdown-toggle tp ketchup" title="Custom Date" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                        <i class="pe-7s-date"></i>
                                      <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-left dd" role="menu" aria-labelledby="dropdownMenu1">
                                        <li role="presentation">
                                            <div class="bfh-datepicker tp ketchup" data-icon="pe-7s-date" title="From what date"></div>
                                        </li>
                                        <li role="presentation">
                                            <div class="bfh-datepicker tp ketchup" data-icon="pe-7s-date" title="To what date?"></div>
                                        </li>
                                        <li role="presentation">
                                            <button class="btn btn-default">Search Now!</button>
                                        </li>
                                       
                                    </ul>
                                  </div>
                                  <div class="dp" style="float: right;">
                                        <a href="#" class="tp ketchup" title="Recent Records"><i class="fa fa-chevron-left"></i></a><span>02/10/2014 - 01/07/2015</span><a href="#" class="tp ketchup" title="Next Records"><i class="fa fa-chevron-right"></i></a>
                                  </div>
                                </div>
                            <div class="sr">
                                <table class="ui small striped table">
                                <thead>
                                <tr>
                                  <th>WORK DATE</th>
                                  <th>DAY</th>
                                  <th>TYPE</th>
                                  <th>ACTUAL TIME</th>
                                  <th>LATE IN</th>
                                  <th>UNDER TIME</th>
                                  <th>BREAK</th>
                                  <th>REMARKS</th>
                                </tr>
                                <tbody>
                                <tr>
                                  <td>03/25/2015</td>
                                  <td>TUE</td>
                                  <td>OB</td>
                                  <td class="at">
                                   8:54 - 8:54
                                  </td>
                                  <td>LATE IN</td>
                                  <td></td>
                                  <td></td>
                                  <td><a href="#test-popup" class="open-popup-link disputee hvr-radial-out" data-popup="editdispute" data-effect="mfp-zoom-in">Dispute</a></td>
                                </tr>
                                <tr class="holiday-yellow">
                                      <td>03/25/2015</td>
                                      <td>WED</td>
                                      <td>LOGGED</td>
                                      <td class="at">
                                         8:54 - 8:54
                                      </td>
                                      <td>LATE IN</td>
                                      <td></td>
                                      <td></td>
                                      <td><i class="fa fa-bell"></i><span>Holiday</span></td>
                                    </tr>
                                <tr>
                                  <td>03/25/2015</td>
                                  <td>WED</td>
                                  <td>LOGGED</td>
                                  <td class="at">
                                     8:54 - 8:54
                                  </td>
                                  <td>LATE IN</td>
                                  <td></td>
                                  <td></td>
                                  <td><a href="#test-popup" class="open-popup-link disputee hvr-radial-out" data-popup="editdispute" data-effect="mfp-zoom-in">Dispute</a></td>
                                   </tr>
                                    <tr>
                                      <td>03/25/2015</td>
                                      <td>WED</td>
                                      <td>LOGGED</td>
                                      <td class="at">
                                         8:54 - 8:54
                                      </td>
                                      <td>LATE IN</td>
                                      <td></td>
                                      <td></td>
                                      <td><a href="#test-popup" class="open-popup-link disputee hvr-radial-out" data-popup="editdispute" data-effect="mfp-zoom-in">Dispute</a></td>
                                    </tr>
                                    <tr class="holiday-red">
                                      <td>03/25/2015</td>
                                      <td>WED</td>
                                      <td>LOGGED</td>
                                      <td class="at">
                                         8:54 - 8:54
                                      </td>
                                      <td>LATE IN</td>
                                      <td></td>
                                      <td></td>
                                      <td><i class="fa fa-bell"></i><span>Holiday</span></td>
                                    </tr>
                                    <tr class="holiday-red">
                                      <td>03/25/2015</td>
                                      <td>WED</td>
                                      <td>LOGGED</td>
                                      <td class="at">
                                         8:54 - 8:54
                                      </td>
                                      <td>LATE IN</td>
                                      <td></td>
                                      <td></td>
                                      <td><i class="fa fa-bell"></i><span>Holiday</span></td>
                                    </tr>
                                    <tr class="holiday-red">
                                      <td>03/25/2015</td>
                                      <td>WED</td>
                                      <td>LOGGED</td>
                                      <td class="at">
                                         8:54 - 8:54
                                      </td>
                                      <td>LATE IN</td>
                                      <td></td>
                                      <td></td>
                                      <td><i class="fa fa-bell"></i><span>Holiday</span></td>
                                    </tr>
                                <tr>
                                  <td>03/25/2015</td>
                                  <td>WED</td>
                                  <td>LOGGED</td>
                                  <td class="at">
                                     8:54 - 8:54
                                  </td>
                                  <td>LATE IN</td>
                                  <td></td>
                                  <td></td>
                                  <td><a href="#test-popup" class="open-popup-link disputee hvr-radial-out" data-popup="editdispute" data-effect="mfp-zoom-in">Dispute</a></td>
                                   </tr>
                              </table>
                    </div>
                            <div class="srbottom extend">
                                <div class="srtotal">
                                    <div>Total: 320</div><div>Currently Showing 8 over 320</div>
                                </div>
                                 <div class="srpagenation">
                                     <a href="#" class="tp ketchup" title="Prev"><i class="pe-7s-angle-left"></i></a>
                                     <span>Page 1</span>
                                     <a href="#" class="tp ketchup" title="Next"><i class="pe-7s-angle-right"></i></a>
                                </div>
                            </div>
                    </section>
                     <section class="col-lg-6">
                            <div class="md" style="padding-top: 7px;">
                                <h1><i class="ion-clipboard"></i><span style="margin-left: 7px;">DISPUTE REPORT</span></h1>
                                <a href="#test-popup" class="manual_dispute open-popup-link btn btn-default" style="display: table; text-transform: uppercase;" data-effect="mfp-zoom-in"><i class="ion-ios-plus" style="margin-right: 7px; float: left;"></i>Manual Dispute</a>
                            </div>
                            <div class="datatable extend clear">
                                <div id="theheader1" class="tbheader extend">
                                   <a href="#" class="ds extend">Current Dispute <span class="badge">5</span></a>
                                </div>
                                <div class="tblimiter" id="tblimiter1">
                                <table>
                                <thead>
                                <tr>
                                  <th>WORK DATE</th>
                                  <th>DAY</th>
                                  <th>TYPE</th>
                                  <th>ACTUAL TIME</th>
                                  <th>LATE IN</th>
                                  <th>UNDER TIME</th>
                                  <th>BREAK</th>
                                  <th>STATUS</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                  <td>03/25/2015</td>
                                  <td>WED</td>
                                  <td>LOGGED</td>
                                  <td class="at">
                                   8:54 - 8:54
                                  </td>
                                  <td>LATE IN</td>
                                  <td></td>
                                  <td></td>
                                  <td class="pending"><i class="pe-7s-info"></i>   Pending</td>
                                </tr>
                                <tr>
                                  <td>03/25/2015</td>
                                  <td>THU</td>
                                  <td>OB</td>
                                  <td class="at">
                                     8:54 - 8:54
                                  </td>
                                  <td>LATE IN</td>
                                  <td></td>
                                  <td></td>
                                  <td class="pending"><i class="pe-7s-info"></i>   Pending</td>
                                </tr>
                                <tr>
                                  <td>03/25/2015</td>
                                  <td>WED</td>
                                  <td>LOGGED</td>
                                  <td class="at">
                                     8:54 - 8:54
                                  </td>
                                  <td>LATE IN</td>
                                  <td></td>
                                  <td></td>
                                  <td class="pending"><i class="pe-7s-info"></i>   Pending</td>
                                </tr>
                                <tr>
                                  <td>03/25/2015</td>
                                  <td>WED</td>
                                  <td>LOGGED</td>
                                  <td class="at">
                                     8:54 - 8:54
                                  </td>
                                  <td>LATE IN</td>
                                  <td></td>
                                  <td></td>
                                  <td class="pending"><i class="pe-7s-info"></i>   Pending</td>
                                </tr>
                                <tr>
                                  <td>03/25/2015</td>
                                  <td>WED</td>
                                  <td>LOGGED</td>
                                  <td class="at">
                                     8:54 - 8:54
                                  </td>
                                  <td>LATE IN</td>
                                  <td></td>
                                  <td></td>
                                  <td class="pending"><i class="pe-7s-info"></i>   Pending</td>
                                </tr>
                                </tbody>
                              </table>
                            </div>
                                <div id="theheader2" class="tbheader extend">
                                   <a href="#" class="ds extend">History Dispute <span class="badge">7</span></a>
                                    <div class="tbheaderpagenation extend">
                                        <a href="#" class="tp ketchup" title="Prev"><i class="pe-7s-angle-left"></i></a>
                                        <span>Page 1</span>
                                        <a href="#" class="tp ketchup" title="Next"><i class="pe-7s-angle-right"></i></a>
                                    </div>
                                </div>
                                <div class="tblimiter" id="tblimiter2">
                                    <table>
                                    <thead>
                                    <tr>
                                      <th>WORK DATE</th>
                                      <th>DAY</th>
                                      <th>TYPE</th>
                                      <th>ACTUAL TIME</th>
                                      <th>LATE IN</th>
                                      <th>UNDER TIME</th>
                                      <th>BREAK</th>
                                      <th>STATUS</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                      <td>03/25/2015</td>
                                      <td>WED</td>
                                      <td>LOGGED</td>
                                      <td class="at">
                                         8:54 - 8:54
                                      </td>
                                      <td>LATE IN</td>
                                      <td></td>
                                      <td></td>
                                      <td class="approved"><i class="pe-7s-check"></i>   Approved</td>
                                    </tr>
                                    <tr>
                                      <td>03/25/2015</td>
                                      <td>WED</td>
                                      <td>LOGGED</td>
                                      <td class="at">
                                          8:54 - 8:54
                                      </td>
                                      <td>LATE IN</td>
                                      <td></td>
                                      <td></td>
                                      <td class="approved"><i class="pe-7s-check"></i>   Approved</td>
                                    </tr>
                                    <tr>
                                      <td>03/25/2015</td>
                                      <td>WED</td>
                                      <td>LOGGED</td>
                                      <td class="at">
                                          8:54 - 8:54
                                      </td>
                                      <td>LATE IN</td>
                                      <td></td>
                                      <td></td>
                                      <td class="rejected"><i class="pe-7s-close-circle"></i>   Rejected</td>
                                    </tr>
                                    <tr>
                                      <td>03/25/2015</td>
                                      <td>WED</td>
                                      <td>LOGGED</td>
                                      <td class="at">
                                          8:54 - 8:54
                                      </td>
                                      <td>LATE IN</td>
                                      <td></td>
                                      <td></td>
                                      <td class="approved"><i class="pe-7s-check"></i>   Approved</td>
                                    </tr>
                                    <tr>
                                      <td>03/25/2015</td>
                                      <td>WED</td>
                                      <td>LOGGED</td>
                                      <td class="at">
                                          8:54 - 8:54
                                      </td>
                                      <td>LATE IN</td>
                                      <td></td>
                                      <td></td>
                                      <td class="rejected"><i class="pe-7s-close-circle"></i>   Rejected</td>
                                    </tr>
                                    <tr>
                                      <td>03/25/2015</td>
                                      <td>WED</td>
                                      <td>LOGGED</td>
                                      <td class="at">
                                          8:54 - 8:54
                                      </td>
                                      <td>LATE IN</td>
                                      <td></td>
                                      <td></td>
                                      <td class="approved"><i class="pe-7s-check"></i>   Approved</td>
                                    </tr>
                                    <tr>
                                      <td>03/25/2015</td>
                                      <td>WED</td>
                                      <td>LOGGED</td>
                                      <td class="at">
                                          8:54 - 8:54
                                      </td>
                                      <td>LATE IN</td>
                                      <td></td>
                                      <td></td>
                                      <td class="rejected"><i class="pe-7s-close-circle"></i>   Rejected</td>
                                    </tr>
                                    </tbody>
                                  </table>
                              </div>
                    </div>
                    </section>
                    </div>
                    <div id="tab2" class="tabcontenttab animated fadeIn">
                            <div class="md">
                                <h1><i class="ion-clipboard"></i><span style="margin-left: 7px;">OB REPORT</span></h1>
                                <div class="mdbts">
                                    <div class="dropdown filter_status">
                                    <button class="btn btn-default dropdown-toggle xjk_department" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                      Filter by status
                                      <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Approved</a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Rejected</a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Pending</a></li>
                                    </ul>
                                    </div>
                                    <div class="dropdown filter_entry">
                                        <button class="btn btn-default dropdown-toggle xjk_department" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                          Filter entry
                                          <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">10</a></li>
                                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">25</a></li>
                                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">50</a></li>
                                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">100</a></li>
                                        </ul>
                                    </div>
                                        <a href="#test-popup" class="ob_request open-popup-link btn btn-default" style="display: table; text-transform: uppercase;" data-popup="obrequest" data-effect="mfp-zoom-in"><i class="ion-ios-plus" style="margin-right: 7px; float: left;"></i>OB request</a>
                                    </div>
                                </div>
                        <div class="extend clear" style="height: 15px;"></div>
                            <div class="datatable extend clear">
                                <div class="tblimiterr" id="tblimiter1">
                                <table>
                                <thead>
                                <tr>
                                  <th>WORK DATE</th>
                                  <th>DAY</th>
                                  <th>TYPE</th>
                                  <th>ACTUAL TIME</th>
                                  <th>LATE IN</th>
                                  <th>UNDER TIME</th>
                                  <th>BREAK</th>
                                  <th>STATUS</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                  <td>03/25/2015</td>
                                  <td>WED</td>
                                  <td>LOGGED</td>
                                  <td class="at">
                                   8:54 - 8:54
                                  </td>
                                  <td>LATE IN</td>
                                  <td></td>
                                  <td></td>
                                  <td class="pending"><i class="pe-7s-info"></i>   Pending</td>
                                </tr>
                                <tr>
                                  <td>03/25/2015</td>
                                  <td>THU</td>
                                  <td>OB</td>
                                  <td class="at">
                                     8:54 - 8:54
                                  </td>
                                  <td>LATE IN</td>
                                  <td></td>
                                  <td></td>
                                  <td class="pending"><i class="pe-7s-info"></i>   Pending</td>
                                </tr>
                                <tr>
                                  <td>03/25/2015</td>
                                  <td>WED</td>
                                  <td>LOGGED</td>
                                  <td class="at">
                                     8:54 - 8:54
                                  </td>
                                  <td>LATE IN</td>
                                  <td></td>
                                  <td></td>
                                  <td class="pending"><i class="pe-7s-info"></i>   Pending</td>
                                </tr>
                                <tr>
                                  <td>03/25/2015</td>
                                  <td>WED</td>
                                  <td>LOGGED</td>
                                  <td class="at">
                                     8:54 - 8:54
                                  </td>
                                  <td>LATE IN</td>
                                  <td></td>
                                  <td></td>
                                  <td class="pending"><i class="pe-7s-info"></i>   Pending</td>
                                </tr>
                                <tr>
                                  <td>03/25/2015</td>
                                  <td>WED</td>
                                  <td>LOGGED</td>
                                  <td class="at">
                                     8:54 - 8:54
                                  </td>
                                  <td>LATE IN</td>
                                  <td></td>
                                  <td></td>
                                  <td class="pending"><i class="pe-7s-info"></i>   Pending</td>
                                </tr>
                                    <tr>
                                      <td>03/25/2015</td>
                                      <td>WED</td>
                                      <td>LOGGED</td>
                                      <td class="at">
                                         8:54 - 8:54
                                      </td>
                                      <td>LATE IN</td>
                                      <td></td>
                                      <td></td>
                                      <td class="approved"><i class="pe-7s-check"></i>   Approved</td>
                                    </tr>
                                    <tr>
                                      <td>03/25/2015</td>
                                      <td>WED</td>
                                      <td>LOGGED</td>
                                      <td class="at">
                                          8:54 - 8:54
                                      </td>
                                      <td>LATE IN</td>
                                      <td></td>
                                      <td></td>
                                      <td class="approved"><i class="pe-7s-check"></i>   Approved</td>
                                    </tr>
                                    <tr>
                                      <td>03/25/2015</td>
                                      <td>WED</td>
                                      <td>LOGGED</td>
                                      <td class="at">
                                          8:54 - 8:54
                                      </td>
                                      <td>LATE IN</td>
                                      <td></td>
                                      <td></td>
                                      <td class="rejected"><i class="pe-7s-close-circle"></i>   Rejected</td>
                                    </tr>
                                    <tr>
                                      <td>03/25/2015</td>
                                      <td>WED</td>
                                      <td>LOGGED</td>
                                      <td class="at">
                                          8:54 - 8:54
                                      </td>
                                      <td>LATE IN</td>
                                      <td></td>
                                      <td></td>
                                      <td class="approved"><i class="pe-7s-check"></i>   Approved</td>
                                    </tr>
                                    <tr>
                                      <td>03/25/2015</td>
                                      <td>WED</td>
                                      <td>LOGGED</td>
                                      <td class="at">
                                          8:54 - 8:54
                                      </td>
                                      <td>LATE IN</td>
                                      <td></td>
                                      <td></td>
                                      <td class="approved"><i class="pe-7s-check"></i>   Approved</td>
                                    </tr>
                                    <tr>
                                      <td>03/25/2015</td>
                                      <td>WED</td>
                                      <td>LOGGED</td>
                                      <td class="at">
                                          8:54 - 8:54
                                      </td>
                                      <td>LATE IN</td>
                                      <td></td>
                                      <td></td>
                                      <td class="rejected"><i class="pe-7s-close-circle"></i>   Rejected</td>
                                    </tr>
                                    <tr>
                                      <td>03/25/2015</td>
                                      <td>WED</td>
                                      <td>LOGGED</td>
                                      <td class="at">
                                          8:54 - 8:54
                                      </td>
                                      <td>LATE IN</td>
                                      <td></td>
                                      <td></td>
                                      <td class="rejected"><i class="pe-7s-close-circle"></i>   Rejected</td>
                                    </tr>
                                    </tbody>
                                  </table>
                              </div> <!-- end tblimiter -->
                    </div> <!-- end datatable -->
                    <!-- =========================================================== -->
                    </div>
                    <div id="tab3" class="tabcontenttab animated fadeIn">
                        <p>Tab 3. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
Aliquam iaculis ligula euismod eros iaculis, ut porttitor
augue interdum. Fusce tincidunt quis velit ac facilisis.
Donec ut tellus id nunc luctus hendrerit sit amet ac orci.
Maecenas id nisl pretium, pretium sapien a, posuere erat.</p>
                    </div>
                </div>
            </div> <!-- #proftab -->
        </div> <!-- #profcontent -->
    </div> <!-- #profile -->
</div><!-- /.row -->
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
<!-- popup jquery -->
    <div id="test-popup" class="white-popup mfp-with-anim mfp-hide">
        <div class="tph"></div>
        <form class="dispute">
            <fieldset>
                <div class="input-group nputholder">
                    <span class="input-group-addon"><i class="pe-7s-date"></i></span>
                    <input type="text" class="form-control" placeholder="Work Date" aria-describedby="basic-addon1" name="workdate">
                </div>
                <div class="input-group nputholder">
                    <select name="day" aria-describedby="basic-addon1" class="form-control">
                        <option value="" disabled selected>Select day</option>
                        <option value="MON">Monday</option>
                        <option value="TUE">Tuesday</option>
                        <option value="WED">Wednesday</option>
                        <option value="THU">Thursday</option>
                        <option value="FRI">Friday</option>
                        <option value="SAT">Saturday</option>
                        <option value="SUN">Sunday</option>
                    </select>
                    <select name="type" aria-describedby="basic-addon1" class="form-control">
                        <option value="" disabled selected>Select type</option>
                        <option value="LOGGED">LOGGED</option>
                        <option value="OB">OB</option>
                    </select>
                </div>
                <!--bfh-timepicker -->
               <div class="input-group nputholder " data-mode="12h">
                    <span class="input-group-addon"><i class="pe-7s-clock"></i></span>
                    <input type="text" class="form-control" placeholder="Actual time" aria-describedby="basic-addon1" name="time">
                </div>
                <div class="input-group nputholder">
                    <span class="input-group-addon"><i class="pe-7s-repeat"></i></span>
                    <input type="text" class="form-control" placeholder="Late In" aria-describedby="basic-addon1" name="latein">
                </div>
                <div class="input-group nputholder">
                    <span class="input-group-addon"><i class="pe-7s-timer"></i></span>
                    <input type="text" class="form-control" placeholder="Under time" aria-describedby="basic-addon1" name="undertime">
                </div>
                <div class="input-group nputholder">
                    <span class="input-group-addon"><i class="pe-7s-wristwatch"></i></span>
                    <input type="text" class="form-control" placeholder="Break" aria-describedby="basic-addon1" name="break">
                </div>
                <div class="input-group nputholder" style="width: 100%;">
                    <textarea name="reasons" placeholder="Reasons"></textarea>
                </div>
                <div class="input-group nputholder" style="width: 100%;">
                    <textarea name="reasons" placeholder="Output and effect"></textarea>
                </div>
            </fieldset>
            <div class="input-group nputholder">
            <button class="btn btn-default" type="button">Save Dispute</button>
            <button class="btn btn-default btncancel" type="button" style="background: #f2f2f2;">Cancel</button>
            </div>
        </form>
    </div>
@stop

@section('plugin_scripts')
<script src="/dist/js/profile.js" type="text/javascript"></script>
@stop