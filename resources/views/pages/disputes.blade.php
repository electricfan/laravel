@extends('master')

@section('header')
<title>MOT | disputes</title>
@stop

@section('plugin_styles')


@stop


@section('content')

<?php if($officername != "manager") : ?>
<div class="row extend clear bgwhite center disputeheader">
    <nav class="tabheader disputetabheader extend clear thehide">
        <a href="#colapprove" class="active_tab">Needs Approval</a>
        <a href="#colhistory">History</a>
    </nav>
    <div class="disputeheaderoptions extend">
        <button class="btn btn-default disputeoptionside tp ketchup" title="side"><i class="ion-arrow-swap"></i></button>
        <button class="btn btn-default disputeoptionfull tp ketchup" title="full"><i class="ion-arrow-resize"></i></button>
        <button class="btn btn-default disputeoptiontab tp ketchup" title="tab"><i class="ion-navicon"></i></button>
    </div>
</div>
<div class="row extend clear center" id="disputepage">

    <section class="col-lg-6 bgwhite extend" id="colapprove">
<div class="extend clear" style="height: 15px;"></div>
        <div class="extend clear"style="padding: 0px 15px;">
            <h1 class="disputeh1">Needs HR Approval</h1>
            <div class="disputesearch extend ">
                <div class="dropdown dispute_filter_by_departments filter_department">
                    <button class="btn btn-default dropdown-toggle xjk_department" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                      Filter by departments
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sales</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Legal</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Finance</a></li>
                    </ul>
                </div>
                <input type="text" class="disputesearchinput extend" placeholder="Search records here...">
            </div>
        </div>
        <div class="extend clear" style="height: 5px;"></div>
        <div class="table-responsive clear extend disputetbholder disputeapprove disputehistory">
        <table class="table table-hover">
            <thead>
                <tr> 
                    <th>dispute name</th>
                    <th>dispute REQUESTER</th>
                    <th>Date requested</th>
                    <th>DEPARTMENT</th>
                    <th>status</th>
                    <th>Approved date</th>
                    <th>Message</th>
                    <th>remarks</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Go to Brunei</td>
                    <td>Jason Bambenie</td>
                    <td>04/27/2015</td>
                    <td>Legal</td>
                    <td>Log-in</td>
                    <td>04/27/2015</td>
                    <td data-message="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vel vehicula ante, et ultrices nisi. Curabitur a pellentesque augue. Donec vitae porttitor mi, id fermentum tortor. Mauris convallis velit orci, et congue purus cursus sed. Etiam non tortor at odio ornare placerat in nec nibh. Duis enim lacus"><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td data-number="1"><a href="#" class="disputemodify thehide tp ketchup" title="Modify">Modify</a><div class="ruda" style="display: table; margin: 0 auto;"><a href="#" class="disputeoptions disputeapproved tp ketchup" title="Approve"><i class="ion-checkmark-circled"></i></a><a href="#" class="disputeoptions disputedecline tp ketchup" title="Reject"><i class="ion-minus-circled"></i></a></div></td>
                </tr>
                <tr>
                    <td>To Initao</td>
                    <td>Micheal Kill</td>
                    <td>04/24/2015</td>
                    <td>Sales</td>
                    <td>Log-in</td>
                    <td>04/27/2015</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td data-number="2"><a href="#" class="disputemodify thehide tp ketchup" title="Modify">Modify</a><div class="ruda" style="display: table; margin: 0 auto;"><a href="#" class="disputeoptions disputeapproved tp ketchup" title="Approve"><i class="ion-checkmark-circled"></i></a><a href="#" class="disputeoptions disputedecline tp ketchup" title="Reject"><i class="ion-minus-circled"></i></a></div></td>
                </tr>
                <tr>
                    <td>To Lugait</td>
                    <td>Tracy Mcgraddy</td>
                    <td>04/20/2015</td>
                    <td>Finance</td>
                    <td>Log-in</td>
                    <td>Today</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td data-number="3"><a href="#" class="disputemodify thehide tp ketchup" title="Modify">Modify</a><div class="ruda" style="display: table; margin: 0 auto;"><a href="#" class="disputeoptions disputeapproved tp ketchup" title="Approve"><i class="ion-checkmark-circled"></i></a><a href="#" class="disputeoptions disputedecline tp ketchup" title="Reject"><i class="ion-minus-circled"></i></a></div></td>
                </tr>
                <tr>
                    <td>Sa lugar na tayoy masaya</td>
                    <td>Walang Forever</td>
                    <td>04/17/2015</td>
                    <td>Legal</td>
                    <td>Log-in</td>
                    <td>Today</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td data-number="4"><a href="#" class="disputemodify thehide tp ketchup" title="Modify">Modify</a><div class="ruda" style="display: table; margin: 0 auto;"><a href="#" class="disputeoptions disputeapproved tp ketchup" title="Approve"><i class="ion-checkmark-circled"></i></a><a href="#" class="disputeoptions disputedecline tp ketchup" title="Reject"><i class="ion-minus-circled"></i></a></div></td>
                </tr>
                <tr>
                    <td>Sa lugar na tayoy masaya</td>
                    <td>Walang Forever</td>
                    <td>04/17/2015</td>
                    <td>Legal</td>
                    <td>Log-in</td>
                    <td>Yesterday</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td data-number="5"><a href="#" class="disputemodify thehide tp ketchup" title="Modify">Modify</a><div class="ruda" style="display: table; margin: 0 auto;"><a href="#" class="disputeoptions disputeapproved tp ketchup" title="Approve"><i class="ion-checkmark-circled"></i></a><a href="#" class="disputeoptions disputedecline tp ketchup" title="Reject"><i class="ion-minus-circled"></i></a></div></td>
                </tr>
                <tr>
                    <td>Sa lugar na tayoy masaya</td>
                    <td>Walang Forever</td>
                    <td>04/17/2015</td>
                    <td>Legal</td>
                    <td>Log-in</td>
                    <td>Yesterday</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td data-number="6"><a href="#" class="disputemodify thehide tp ketchup" title="Modify">Modify</a><div class="ruda" style="display: table; margin: 0 auto;"><a href="#" class="disputeoptions disputeapproved tp ketchup" title="Approve"><i class="ion-checkmark-circled"></i></a><a href="#" class="disputeoptions disputedecline tp ketchup" title="Reject"><i class="ion-minus-circled"></i></a></div></td>
                </tr>
                <tr>
                    <td>To Lugait</td>
                    <td>Tracy Mcgraddy</td>
                    <td>04/20/2015</td>
                    <td>Finance</td>
                    <td>Log-in</td>
                    <td>04/25/2015</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td data-number="7"><a href="#" class="disputemodify thehide tp ketchup" title="Modify">Modify</a><div class="ruda" style="display: table; margin: 0 auto;"><a href="#" class="disputeoptions disputeapproved tp ketchup" title="Approve"><i class="ion-checkmark-circled"></i></a><a href="#" class="disputeoptions disputedecline tp ketchup" title="Reject"><i class="ion-minus-circled"></i></a></div></td>
                </tr>
                <tr>
                    <td>To Lugait</td>
                    <td>Tracy Mcgraddy</td>
                    <td>04/20/2015</td>
                    <td>Finance</td>
                    <td>Log-in</td>
                    <td>04/25/2015</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td data-number="8"><a href="#" class="disputemodify thehide tp ketchup" title="Modify">Modify</a><div class="ruda" style="display: table; margin: 0 auto;"><a href="#" class="disputeoptions disputeapproved tp ketchup" title="Approve"><i class="ion-checkmark-circled"></i></a><a href="#" class="disputeoptions disputedecline tp ketchup" title="Reject"><i class="ion-minus-circled"></i></a></div></td>
                </tr>
                <tr>
                    <td>To Lugait</td>
                    <td>Tracy Mcgraddy</td>
                    <td>04/20/2015</td>
                    <td>Finance</td>
                    <td>Log-in</td>
                    <td>04/25/2015</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td data-number="9"><a href="#" class="disputemodify thehide tp ketchup" title="Modify">Modify</a><div class="ruda" style="display: table; margin: 0 auto;"><a href="#" class="disputeoptions disputeapproved tp ketchup" title="Approve"><i class="ion-checkmark-circled"></i></a><a href="#" class="disputeoptions disputedecline tp ketchup" title="Reject"><i class="ion-minus-circled"></i></a></div></td>
                </tr>
                <tr>
                    <td>To Lugait</td>
                    <td>Tracy Mcgraddy</td>
                    <td>04/20/2015</td>
                    <td>Finance</td>
                    <td>Log-in</td>
                    <td>04/25/2015</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td data-number="10"><a href="#" class="disputemodify thehide tp ketchup" title="Modify">Modify</a><div class="ruda" style="display: table; margin: 0 auto;"><a href="#" class="disputeoptions disputeapproved tp ketchup" title="Approve"><i class="ion-checkmark-circled"></i></a><a href="#" class="disputeoptions disputedecline tp ketchup" title="Reject"><i class="ion-minus-circled"></i></a></div></td>
                </tr>
            </tbody>
        </table>
        </div>
        </section>
    <section class="col-lg-6 bgwhite extend" id="colhistory">
        <div class="extend clear" style="height: 15px;"></div>
        <div class="extend clear">
            <h1 class="disputeh1">HISTORY</h1>
            <div class="disputesearch extend ">
                <div class="dropdown dispute_filter_by_departments filter_entry">
                    <button class="btn btn-default dropdown-toggle xjk_entry" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                      Filter Entries
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">10</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">25</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">50</a></li>
                    </ul>
                </div>
                 <div class="dropdown dispute_filter_by_departments filter_department">
                    <button class="btn btn-default dropdown-toggle xjk_department" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                      Filter by departments
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sales</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Legal</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Finance</a></li>
                    </ul>
                </div>
                <button class="btn btn-default tp ketchup delete_records_history" title="Delete records from history">
                    <i class="ion-trash-a"></i>
                </button>
                <input type="text" class="disputesearchinput extend" placeholder="Search records here...">
            </div>
        </div>
        <div class="extend clear" style="height: 5px;"></div>
        <div class="table-responsive clear extend disputetbholder disputehistory">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="thehide ckbox"><input type="checkbox" aria-label="..."></th>
                    <th>dispute name</th>
                    <th>dispute REQUESTER</th>
                    <th>Date requested</th>
                    <th>DEPARTMENT</th>
                    <th>status</th>
                    <th>Message</th>
                    <th>remarks</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>Go to Brunei</td>
                    <td>Jason Bambenie</td>
                    <td>04/27/2015</td>
                    <td>Legal</td>
                    <td>Log-in</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td><i class="pe-7s-check"></i>   Approved</td>
                </tr>
                <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>To Initao</td>
                    <td>Micheal Kill</td>
                    <td>04/24/2015</td>
                    <td>Sales</td>
                    <td>Log-in</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td><i class="pe-7s-check"></i>   Approved</td>
                </tr>
                <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>To Lugait</td>
                    <td>Tracy Mcgraddy</td>
                    <td>04/20/2015</td>
                    <td>Finance</td>
                    <td>Log-in</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td><i class="pe-7s-check"></i>   Approved</td>
                </tr>
                <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>Sa lugar na tayoy masaya</td>
                    <td>Walang Forever</td>
                    <td>04/17/2015</td>
                    <td>Legal</td>
                    <td>Log-in</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td><i class="pe-7s-check"></i>   Approved</td>
                </tr>
                <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>Sa lugar na tayoy masaya</td>
                    <td>Walang Forever</td>
                    <td>04/17/2015</td>
                    <td>Legal</td>
                    <td>Log-in</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td><i class="pe-7s-close-circle"></i>   Rejected</td>
                </tr>
                <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>Sa lugar na tayoy masaya</td>
                    <td>Walang Forever</td>
                    <td>04/17/2015</td>
                    <td>Legal</td>
                    <td>Log-in</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td><i class="pe-7s-close-circle"></i>   Rejected</td>
                </tr>
                <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>To Lugait</td>
                    <td>Tracy Mcgraddy</td>
                    <td>04/20/2015</td>
                    <td>Finance</td>
                    <td>Log-in</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td><i class="pe-7s-check"></i>   Approved</td>
                </tr>
                 <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>Sa lugar na tayoy masaya</td>
                    <td>Walang Forever</td>
                    <td>04/17/2015</td>
                    <td>Legal</td>
                    <td>Log-in</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td><i class="pe-7s-close-circle"></i>   Rejected</td>
                </tr>
                <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>Sa lugar na tayoy masaya</td>
                    <td>Walang Forever</td>
                    <td>04/17/2015</td>
                    <td>Legal</td>
                    <td>Log-in</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td><i class="pe-7s-close-circle"></i>   Rejected</td>
                </tr>
                <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>To Lugait</td>
                    <td>Tracy Mcgraddy</td>
                    <td>04/20/2015</td>
                    <td>Finance</td>
                    <td>Log-in</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td><i class="pe-7s-check"></i>   Approved</td>
                </tr>
                 <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>Sa lugar na tayoy masaya</td>
                    <td>Walang Forever</td>
                    <td>04/17/2015</td>
                    <td>Legal</td>
                    <td>Log-in</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td><i class="pe-7s-close-circle"></i>   Rejected</td>
                </tr>
                <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>Sa lugar na tayoy masaya</td>
                    <td>Walang Forever</td>
                    <td>04/17/2015</td>
                    <td>Legal</td>
                    <td>Log-in</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td><i class="pe-7s-close-circle"></i>   Rejected</td>
                </tr>
                <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>To Lugait</td>
                    <td>Tracy Mcgraddy</td>
                    <td>04/20/2015</td>
                    <td>Finance</td>
                    <td>Log-in</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td><i class="pe-7s-check"></i>   Approved</td>
                </tr>
                 <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>Sa lugar na tayoy masaya</td>
                    <td>Walang Forever</td>
                    <td>04/17/2015</td>
                    <td>Legal</td>
                    <td>Log-in</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td><i class="pe-7s-close-circle"></i>   Rejected</td>
                </tr>
                <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>Sa lugar na tayoy masaya</td>
                    <td>Walang Forever</td>
                    <td>04/17/2015</td>
                    <td>Legal</td>
                    <td>Log-in</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td><i class="pe-7s-close-circle"></i>   Rejected</td>
                </tr>
                <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>To Lugait</td>
                    <td>Tracy Mcgraddy</td>
                    <td>04/20/2015</td>
                    <td>Finance</td>
                    <td>Log-in</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td><i class="pe-7s-check"></i>   Approved</td>
                </tr>
            </tbody>
        </table>
        </div>
        <div class="table_pagination">
            <div class="table_pagination_idty" style="float: left;">
                Showing 1 to 13 of 33 entries
            </div>
            <nav class="navpagination">
                <ul class="pagination">
                  <li>
                    <a href="#" aria-label="Previous">
                        <span aria-hidden="true"><i class="pe-7s-angle-left"></i></span>
                    </a>
                  </li>
                  <li><a href="#">First</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">Last</a></li>
                  <li>
                    <a href="#" aria-label="Next">
                      <span aria-hidden="true"><i class="pe-7s-angle-right"></i></span>
                    </a>
                  </li>
                </ul>
              </nav>    
            </div>
    </section>
</div>

<?php else : ?>
<div class="row extend clear bgwhite center disputeheader">
    <nav class="tabheader disputetabheader extend clear thehide">
        <a href="#colapprove" class="active_tab">Needs Approval</a>
        <a href="#colhistory">History</a>
    </nav>
    <div class="disputeheaderoptions extend">
        <button class="btn btn-default disputeoptionside tp ketchup" title="side"><i class="ion-arrow-swap"></i></button>
        <button class="btn btn-default disputeoptionfull tp ketchup" title="full"><i class="ion-arrow-resize"></i></button>
        <button class="btn btn-default disputeoptiontab tp ketchup" title="tab"><i class="ion-navicon"></i></button>
    </div>
</div>
<div class="row extend clear center" id="disputepage">

    <section class="col-lg-6 bgwhite extend" id="colapprove">
        <div class="extend clear" style="height: 15px;"></div>
        <div class="extend clear">
            <h1 class="disputeh1">Needs Approval</h1>
            <div class="disputesearch extend ">
                 <div class="dropdown dispute_filter_by_departments filter_department">
                    <button class="btn btn-default dropdown-toggle xjk_department" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                      Filter by departments
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sales</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Legal</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Finance</a></li>
                    </ul>
                </div>
                <input type="text" class="disputesearchinput extend" placeholder="Search records here...">
            </div>
        </div>
        <div class="extend clear" style="height: 5px;"></div>
        <div class="table-responsive clear extend disputetbholder disputeapprove disputehistory">
        <table class="table table-hover">
            <thead>
                <tr> 
                    <th>dispute name</th>
                    <th>dispute REQUESTER</th>
                    <th>Date requested</th>
                    <th>DEPARTMENT</th>
                    <th>status</th>
                    <th>Message</th>
                    <th>remarks</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Go to Brunei</td>
                    <td>Jason Bambenie</td>
                    <td>04/27/2015</td>
                    <td>Legal</td>
                    <td>Log-in</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#" class="disputeoptions tp ketchup" title="Approve"><i class="ion-checkmark-circled"></i></a><a href="#" class="disputeoptions disputedecline tp ketchup" title="Reject"><i class="ion-minus-circled"></i></a></div></td>
                </tr>
                <tr>
                    <td>To Initao</td>
                    <td>Micheal Kill</td>
                    <td>04/24/2015</td>
                    <td>Sales</td>
                    <td>Log-in</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#" class="disputeoptions tp ketchup" title="Approve"><i class="ion-checkmark-circled"></i></a><a href="#" class="disputeoptions disputedecline tp ketchup" title="Reject"><i class="ion-minus-circled"></i></a></div></td>
                </tr>
                <tr>
                    <td>To Lugait</td>
                    <td>Tracy Mcgraddy</td>
                    <td>04/20/2015</td>
                    <td>Finance</td>
                    <td>Log-in</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#" class="disputeoptions tp ketchup" title="Approve"><i class="ion-checkmark-circled"></i></a><a href="#" class="disputeoptions disputedecline tp ketchup" title="Reject"><i class="ion-minus-circled"></i></a></div></td>
                </tr>
                <tr>
                    <td>Sa lugar na tayoy masaya</td>
                    <td>Walang Forever</td>
                    <td>04/17/2015</td>
                    <td>Legal</td>
                    <td>Log-in</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#" class="disputeoptions tp ketchup" title="Approve"><i class="ion-checkmark-circled"></i></a><a href="#" class="disputeoptions disputedecline tp ketchup" title="Reject"><i class="ion-minus-circled"></i></a></div></td>
                </tr>
                <tr>
                    <td>Sa lugar na tayoy masaya</td>
                    <td>Walang Forever</td>
                    <td>04/17/2015</td>
                    <td>Legal</td>
                    <td>Log-in</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#" class="disputeoptions tp ketchup" title="Approve"><i class="ion-checkmark-circled"></i></a><a href="#" class="disputeoptions disputedecline tp ketchup" title="Reject"><i class="ion-minus-circled"></i></a></div></td>
                </tr>
                <tr>
                    <td>Sa lugar na tayoy masaya</td>
                    <td>Walang Forever</td>
                    <td>04/17/2015</td>
                    <td>Legal</td>
                    <td>Log-in</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#" class="disputeoptions tp ketchup" title="Approve"><i class="ion-checkmark-circled"></i></a><a href="#" class="disputeoptions disputedecline tp ketchup" title="Reject"><i class="ion-minus-circled"></i></a></div></td>
                </tr>
                <tr>
                    <td>To Lugait</td>
                    <td>Tracy Mcgraddy</td>
                    <td>04/20/2015</td>
                    <td>Finance</td>
                    <td>Log-in</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#" class="disputeoptions tp ketchup" title="Approve"><i class="ion-checkmark-circled"></i></a><a href="#" class="disputeoptions disputedecline tp ketchup" title="Reject"><i class="ion-minus-circled"></i></a></div></td>
                </tr>
            </tbody>
        </table>
        </div>
    </section>
    <section class="col-lg-6 bgwhite extend" id="colhistory">
        <div class="extend clear" style="height: 15px;"></div>
        <div class="extend clear">
            <h1 class="disputeh1">HISTORY</h1>
            <div class="disputesearch extend ">
                 <div class="dropdown dispute_filter_by_departments filter_entry">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                      Filter Entries
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">10</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">25</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">50</a></li>
                    </ul>
                </div>
                 <div class="dropdown dispute_filter_by_departments filter_department">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                      Filter by departments
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sales</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Legal</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Finance</a></li>
                    </ul>
                </div>
                <button class="btn btn-default tp ketchup delete_records_history" title="Delete records from history">
                    <i class="ion-trash-a"></i>
                </button>
                <input type="text" class="disputesearchinput extend" placeholder="Search records here...">
            </div>
        </div>
        <div class="extend clear" style="height: 5px;"></div>
        <div class="table-responsive clear extend disputetbholder disputehistory">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="thehide ckbox"><input type="checkbox" aria-label="..."></th>
                    <th>dispute name</th>
                    <th>dispute REQUESTER</th>
                    <th>Date requested</th>
                    <th>DEPARTMENT</th>
                    <th>status</th>
                    <th>Message</th>
                    <th>remarks</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>Go to Brunei</td>
                    <td>Jason Bambenie</td>
                    <td>04/27/2015</td>
                    <td>Legal</td>
                    <td>Log-in</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td><i class="pe-7s-check"></i>   Approved</td>
                </tr>
                <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>To Initao</td>
                    <td>Micheal Kill</td>
                    <td>04/24/2015</td>
                    <td>Sales</td>
                    <td>Log-in</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td><i class="pe-7s-check"></i>   Approved</td>
                </tr>
                <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>To Lugait</td>
                    <td>Tracy Mcgraddy</td>
                    <td>04/20/2015</td>
                    <td>Finance</td>
                    <td>Log-in</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td><i class="pe-7s-check"></i>   Approved</td>
                </tr>
                <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>Sa lugar na tayoy masaya</td>
                    <td>Walang Forever</td>
                    <td>04/17/2015</td>
                    <td>Legal</td>
                    <td>Log-in</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td><i class="pe-7s-check"></i>   Approved</td>
                </tr>
                <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>Sa lugar na tayoy masaya</td>
                    <td>Walang Forever</td>
                    <td>04/17/2015</td>
                    <td>Legal</td>
                    <td>Log-in</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td><i class="pe-7s-close-circle"></i>   Rejected</td>
                </tr>
                <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>Sa lugar na tayoy masaya</td>
                    <td>Walang Forever</td>
                    <td>04/17/2015</td>
                    <td>Legal</td>
                    <td>Log-in</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td><i class="pe-7s-close-circle"></i>   Rejected</td>
                </tr>
                <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>To Lugait</td>
                    <td>Tracy Mcgraddy</td>
                    <td>04/20/2015</td>
                    <td>Finance</td>
                    <td>Log-in</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td><i class="pe-7s-check"></i>   Approved</td>
                </tr>
                 <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>Sa lugar na tayoy masaya</td>
                    <td>Walang Forever</td>
                    <td>04/17/2015</td>
                    <td>Legal</td>
                    <td>Log-in</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td><i class="pe-7s-close-circle"></i>   Rejected</td>
                </tr>
                <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>Sa lugar na tayoy masaya</td>
                    <td>Walang Forever</td>
                    <td>04/17/2015</td>
                    <td>Legal</td>
                    <td>Log-in</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td><i class="pe-7s-close-circle"></i>   Rejected</td>
                </tr>
                <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>To Lugait</td>
                    <td>Tracy Mcgraddy</td>
                    <td>04/20/2015</td>
                    <td>Finance</td>
                    <td>Log-in</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td><i class="pe-7s-check"></i>   Approved</td>
                </tr>
                 <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>Sa lugar na tayoy masaya</td>
                    <td>Walang Forever</td>
                    <td>04/17/2015</td>
                    <td>Legal</td>
                    <td>Log-in</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td><i class="pe-7s-close-circle"></i>   Rejected</td>
                </tr>
                <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>Sa lugar na tayoy masaya</td>
                    <td>Walang Forever</td>
                    <td>04/17/2015</td>
                    <td>Legal</td>
                    <td>Log-in</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td><i class="pe-7s-close-circle"></i>   Rejected</td>
                </tr>
                <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>To Lugait</td>
                    <td>Tracy Mcgraddy</td>
                    <td>04/20/2015</td>
                    <td>Finance</td>
                    <td>Log-in</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td><i class="pe-7s-check"></i>   Approved</td>
                </tr>
                 <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>Sa lugar na tayoy masaya</td>
                    <td>Walang Forever</td>
                    <td>04/17/2015</td>
                    <td>Legal</td>
                    <td>Log-in</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td><i class="pe-7s-close-circle"></i>   Rejected</td>
                </tr>
                <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>Sa lugar na tayoy masaya</td>
                    <td>Walang Forever</td>
                    <td>04/17/2015</td>
                    <td>Legal</td>
                    <td>Log-in</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td><i class="pe-7s-close-circle"></i>   Rejected</td>
                </tr>
                <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>To Lugait</td>
                    <td>Tracy Mcgraddy</td>
                    <td>04/20/2015</td>
                    <td>Finance</td>
                    <td>Log-in</td>
                    <td><div style="display: table; margin: 0 auto;"><a href="#disputemessage" class="disputebtn hvr-radial-out open-popup-link">Read Message</a></div></td>
                    <td><i class="pe-7s-check"></i>   Approved</td>
                </tr>
            </tbody>
        </table>
        </div>
        <div class="table_pagination">
            <div class="table_pagination_idty" style="float: left;">
                Showing 1 to 13 of 33 entries
            </div>
            <nav class="navpagination">
                <ul class="pagination">
                  <li>
                    <a href="#" aria-label="Previous">
                        <span aria-hidden="true"><i class="pe-7s-angle-left"></i></span>
                    </a>
                  </li>
                  <li><a href="#">First</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">Last</a></li>
                  <li>
                    <a href="#" aria-label="Next">
                      <span aria-hidden="true"><i class="pe-7s-angle-right"></i></span>
                    </a>
                  </li>
                </ul>
              </nav>    
            </div>
    </section>
</div>
<?php endif; ?>
@stop


@section('others')
<?php if (isset($officername)) : 
    if (($officername) === "manager") :
?>
<div id="disputeconfirm" class="white-popup mfp-hide" style="width: 280px;">
        <p>Are you sure you want to <span class="disputeconfirmmsg">Delete</span> the following record?</p>
        <div class="disputeconfirm_comment extend clear thehide">
            <textarea name="comment" placeholder="Write your comment here..."></textarea>
        </div>
        <div class="disputeconfirmbuttonholder">
            <button class="btn btn-default" data-identifier="manager" data-what="">Yes</button>
            <button class="btn btn-default">Cancel</button>
        </div>
</div>
<?php else: ?>
    <div id="disputeconfirm" class="white-popup mfp-hide" style="width: 280px;">
        <p>Are you sure you want to <span class="disputeconfirmmsg">Delete</span> the following record?</p>
        <div class="disputeconfirm_comment extend clear thehide">
            <textarea name="comment" placeholder="Write your comment here..."></textarea>
        </div>
        <div class="disputeconfirmbuttonholder">
            <button class="btn btn-default" data-identifier="roda" data-what="">Yes</button>
            <button class="btn btn-default">Cancel</button>
        </div>
    </div>
<?php endif; endif; ?>
<div id="disputemessage" class="white-popup mfp-hide">
        <div class="tph"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vel vehicula ante, et ultrices nisi. Curabitur a pellentesque augue. Donec vitae porttitor mi, id fermentum tortor. Mauris convallis velit orci, et congue purus cursus sed. Etiam non tortor at odio ornare placerat in nec nibh. Duis enim lacus</p>
</div>
<div id="disputemodify" class="white-popup mfp-hide">
    <form action="processor.php" method="post">
        <fieldset>
            <div class="form_input_wrapper extend clear">
                <label>Dispute name</label>
                <input type="text" class="extend clear" id="dispute_name" value="" />
            </div>
            <div class="form_input_wrapper extend clear">
                <label>Dispute requester</label>
                <input type="text" class="extend clear" id="dispute_requester" value="" />
            </div>
            <div class="form_input_wrapper extend clear">
                <label>Date requested</label>
                <input type="text" class="extend clear" id="date_requested" value="" />
            </div>
            <div class="form_input_wrapper extend clear">
                <label>Department</label>
                <input type="text" class="extend clear" id="dispute_department" value="" />
            </div>
            <div class="form_input_wrapper extend clear">
                <label>status</label>
                <input type="text" class="extend clear" id="dispute_status" value="" />
            </div>
            <div class="form_input_wrapper extend clear">
                <label>approved date</label>
                <input type="text" class="extend clear" id="approved_date" value="" />
            </div>
            <div class="form_input_wrapper extend clear">
                <label>message</label>
                <textarea class="extend clear" id="dispute_message"></textarea>
            </div>
        </fieldset>
        <button class="btn btn-default" data-attr="approve">Save</button>
        <button class="btn btn-default mclose">Cancel</button>
    </form>
    
</div>
</div>
@stop

@section('plugin_scripts')
<script type="text/javascript" src="/dist/js/dispute.js"></script>
@stop

