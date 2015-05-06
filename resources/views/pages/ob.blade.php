@extends('master')

@section('header')
<title>MOT | OB</title>
@stop

@section('plugin_styles')


@stop


@section('content')

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
            <h1 class="disputeh1">Needs Your Approval</h1>
            <div class="disputesearch extend ">
                <div class="dropdown dispute_filter_by_departments filter_department">
                <input type="text" class="disputesearchinput extend" placeholder="Search records here...">
            </div>
        </div>
        <div class="extend clear" style="height: 5px;"></div>
        <div class="table-responsive clear extend disputetbholder disputeapprove disputehistory">
        <table class="table table-hover">
            <thead>
                <tr> 
                    <th>OB name</th>
                    <th>OB REQUESTER</th>
                    <th>Date requested</th>
                    <th>status</th>
                    <th>Approved date</th>
                    <th>comments</th>
                    <th>remarks</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Go to Brunei</td>
                    <td>Jason Bambenie</td>
                    <td>04/27/2015</td>                    
                    <td>Log-in</td>
                    <td>04/27/2015</td>
                    <td>This is a sample comment and mayweather wins</td>
                    <td data-number="1"><a href="#" class="disputemodify thehide tp ketchup" title="Modify">Modify</a><div class="ruda" style="display: table; margin: 0 auto;"><a href="#" class="disputeoptions disputeapproved tp ketchup" title="Approve"><i class="ion-checkmark-circled"></i></a><a href="#" class="disputeoptions disputedecline tp ketchup" title="Reject"><i class="ion-minus-circled"></i></a></div></td>
                </tr>
                <tr>
                    <td>To Initao</td>
                    <td>Micheal Kill</td>
                    <td>04/24/2015</td>
                    <td>Log-in</td>
                    <td>04/27/2015</td>
                    <td>This is a sample comment and mayweather wins</td>
                    <td data-number="2"><a href="#" class="disputemodify thehide tp ketchup" title="Modify">Modify</a><div class="ruda" style="display: table; margin: 0 auto;"><a href="#" class="disputeoptions disputeapproved tp ketchup" title="Approve"><i class="ion-checkmark-circled"></i></a><a href="#" class="disputeoptions disputedecline tp ketchup" title="Reject"><i class="ion-minus-circled"></i></a></div></td>
                </tr>
                <tr>
                    <td>To Lugait</td>
                    <td>Tracy Mcgraddy</td>
                    <td>04/20/2015</td>
                    <td>Log-in</td>
                    <td>Today</td>
                    <td>This is a sample comment and mayweather wins</td>
                    <td data-number="3"><a href="#" class="disputemodify thehide tp ketchup" title="Modify">Modify</a><div class="ruda" style="display: table; margin: 0 auto;"><a href="#" class="disputeoptions disputeapproved tp ketchup" title="Approve"><i class="ion-checkmark-circled"></i></a><a href="#" class="disputeoptions disputedecline tp ketchup" title="Reject"><i class="ion-minus-circled"></i></a></div></td>
                </tr>
                <tr>
                    <td>Sa lugar na tayoy masaya</td>
                    <td>Walang Forever</td>
                    <td>04/17/2015</td>
                    <td>Log-in</td>
                    <td>Today</td>
                    <td>This is a sample comment and mayweather wins</td>
                    <td data-number="4"><a href="#" class="disputemodify thehide tp ketchup" title="Modify">Modify</a><div class="ruda" style="display: table; margin: 0 auto;"><a href="#" class="disputeoptions disputeapproved tp ketchup" title="Approve"><i class="ion-checkmark-circled"></i></a><a href="#" class="disputeoptions disputedecline tp ketchup" title="Reject"><i class="ion-minus-circled"></i></a></div></td>
                </tr>
                <tr>
                    <td>Sa lugar na tayoy masaya</td>
                    <td>Walang Forever</td>
                    <td>04/17/2015</td>
                    <td>Log-in</td>
                    <td>Yesterday</td>
                    <td>This is a sample comment and mayweather wins</td>
                    <td data-number="5"><a href="#" class="disputemodify thehide tp ketchup" title="Modify">Modify</a><div class="ruda" style="display: table; margin: 0 auto;"><a href="#" class="disputeoptions disputeapproved tp ketchup" title="Approve"><i class="ion-checkmark-circled"></i></a><a href="#" class="disputeoptions disputedecline tp ketchup" title="Reject"><i class="ion-minus-circled"></i></a></div></td>
                </tr>
                <tr>
                    <td>Sa lugar na tayoy masaya</td>
                    <td>Walang Forever</td>
                    <td>04/17/2015</td>
                    <td>Log-in</td>
                    <td>Yesterday</td>
                    <td>This is a sample comment and mayweather wins</td>
                    <td data-number="6"><a href="#" class="disputemodify thehide tp ketchup" title="Modify">Modify</a><div class="ruda" style="display: table; margin: 0 auto;"><a href="#" class="disputeoptions disputeapproved tp ketchup" title="Approve"><i class="ion-checkmark-circled"></i></a><a href="#" class="disputeoptions disputedecline tp ketchup" title="Reject"><i class="ion-minus-circled"></i></a></div></td>
                </tr>
                <tr>
                    <td>To Lugait</td>
                    <td>Tracy Mcgraddy</td>
                    <td>04/20/2015</td>
                    <td>Log-in</td>
                    <td>04/25/2015</td>
                    <td>This is a sample comment and mayweather wins</td>
                    <td data-number="7"><a href="#" class="disputemodify thehide tp ketchup" title="Modify">Modify</a><div class="ruda" style="display: table; margin: 0 auto;"><a href="#" class="disputeoptions disputeapproved tp ketchup" title="Approve"><i class="ion-checkmark-circled"></i></a><a href="#" class="disputeoptions disputedecline tp ketchup" title="Reject"><i class="ion-minus-circled"></i></a></div></td>
                </tr>
                <tr>
                    <td>To Lugait</td>
                    <td>Tracy Mcgraddy</td>
                    <td>04/20/2015</td>
                    <td>Log-in</td>
                    <td>04/25/2015</td>
                    <td>This is a sample comment and mayweather wins</td>
                    <td data-number="8"><a href="#" class="disputemodify thehide tp ketchup" title="Modify">Modify</a><div class="ruda" style="display: table; margin: 0 auto;"><a href="#" class="disputeoptions disputeapproved tp ketchup" title="Approve"><i class="ion-checkmark-circled"></i></a><a href="#" class="disputeoptions disputedecline tp ketchup" title="Reject"><i class="ion-minus-circled"></i></a></div></td>
                </tr>
                <tr>
                    <td>To Lugait</td>
                    <td>Tracy Mcgraddy</td>
                    <td>04/20/2015</td>
                    <td>Log-in</td>
                    <td>04/25/2015</td>
                    <td>This is a sample comment and mayweather wins</td>
                    <td data-number="9"><a href="#" class="disputemodify thehide tp ketchup" title="Modify">Modify</a><div class="ruda" style="display: table; margin: 0 auto;"><a href="#" class="disputeoptions disputeapproved tp ketchup" title="Approve"><i class="ion-checkmark-circled"></i></a><a href="#" class="disputeoptions disputedecline tp ketchup" title="Reject"><i class="ion-minus-circled"></i></a></div></td>
                </tr>
                <tr>
                    <td>To Lugait</td>
                    <td>Tracy Mcgraddy</td>
                    <td>04/20/2015</td>
                    <td>Log-in</td>
                    <td>04/25/2015</td>
                    <td>This is a sample comment and mayweather wins</td>
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
                    <th>OB name</th>
                    <th>OB REQUESTER</th>
                    <th>Date requested</th>
                    <th>status</th>
                    <th>Comments</th>
                    <th>remarks</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>Go to Brunei</td>
                    <td>Jason Bambenie</td>
                    <td>04/27/2015</td>
                    <td>Log-in</td>
                    <td>This is a sample comment and mayweather wins</td>
                    <td><i class="pe-7s-check"></i>   Approved</td>
                </tr>
                <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>To Initao</td>
                    <td>Micheal Kill</td>
                    <td>04/24/2015</td>
                    <td>Log-in</td>
                    <td>This is a sample comment and mayweather wins</td>
                    <td><i class="pe-7s-check"></i>   Approved</td>
                </tr>
                <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>To Lugait</td>
                    <td>Tracy Mcgraddy</td>
                    <td>04/20/2015</td>
                    <td>Log-in</td>
                    <td>This is a sample comment and mayweather wins</td>
                    <td><i class="pe-7s-check"></i>   Approved</td>
                </tr>
                <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>Sa lugar na tayoy masaya</td>
                    <td>Walang Forever</td>
                    <td>04/17/2015</td>
                    <td>Log-in</td>
                    <td>This is a sample comment and mayweather wins</td>
                    <td><i class="pe-7s-check"></i>   Approved</td>
                </tr>
                <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>Sa lugar na tayoy masaya</td>
                    <td>Walang Forever</td>
                    <td>04/17/2015</td>
                    <td>Log-in</td>
                    <td>This is a sample comment and mayweather wins</td>
                    <td><i class="pe-7s-close-circle"></i>   Rejected</td>
                </tr>
                <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>Sa lugar na tayoy masaya</td>
                    <td>Walang Forever</td>
                    <td>04/17/2015</td>
                    <td>Log-in</td>
                    <td>This is a sample comment and mayweather wins</td>
                    <td><i class="pe-7s-close-circle"></i>   Rejected</td>
                </tr>
                <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>To Lugait</td>
                    <td>Tracy Mcgraddy</td>
                    <td>04/20/2015</td>
                    <td>Log-in</td>
                    <td>This is a sample comment and mayweather wins</td>
                    <td><i class="pe-7s-check"></i>   Approved</td>
                </tr>
                 <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>Sa lugar na tayoy masaya</td>
                    <td>Walang Forever</td>
                    <td>04/17/2015</td>
                    <td>Log-in</td>
                    <td>This is a sample comment and mayweather wins</td>
                    <td><i class="pe-7s-close-circle"></i>   Rejected</td>
                </tr>
                <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>Sa lugar na tayoy masaya</td>
                    <td>Walang Forever</td>
                    <td>04/17/2015</td>
                    <td>Log-in</td>
                    <td>This is a sample comment and mayweather wins</td>
                    <td><i class="pe-7s-close-circle"></i>   Rejected</td>
                </tr>
                <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>To Lugait</td>
                    <td>Tracy Mcgraddy</td>
                    <td>04/20/2015</td>
                    <td>Log-in</td>
                    <td>This is a sample comment and mayweather wins</td>
                    <td><i class="pe-7s-check"></i>   Approved</td>
                </tr>
                 <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>Sa lugar na tayoy masaya</td>
                    <td>Walang Forever</td>
                    <td>04/17/2015</td>
                    <td>Log-in</td>
                    <td>This is a sample comment and mayweather wins</td>
                    <td><i class="pe-7s-close-circle"></i>   Rejected</td>
                </tr>
                <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>Sa lugar na tayoy masaya</td>
                    <td>Walang Forever</td>
                    <td>04/17/2015</td>
                    <td>Log-in</td>
                    <td>This is a sample comment and mayweather wins</td>
                    <td><i class="pe-7s-close-circle"></i>   Rejected</td>
                </tr>
                <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>To Lugait</td>
                    <td>Tracy Mcgraddy</td>
                    <td>04/20/2015</td>
                    <td>Log-in</td>
                    <td>This is a sample comment and mayweather wins</td>
                    <td><i class="pe-7s-check"></i>   Approved</td>
                </tr>
                 <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>Sa lugar na tayoy masaya</td>
                    <td>Walang Forever</td>
                    <td>04/17/2015</td>
                    <td>Log-in</td>
                    <td>This is a sample comment and mayweather wins</td>
                    <td><i class="pe-7s-close-circle"></i>   Rejected</td>
                </tr>
                <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>Sa lugar na tayoy masaya</td>
                    <td>Walang Forever</td>
                    <td>04/17/2015</td>
                    <td>Log-in</td>
                    <td>This is a sample comment and mayweather wins</td>
                    <td><i class="pe-7s-close-circle"></i>   Rejected</td>
                </tr>
                <tr>
                    <td class="thehide ckbox"><input type="checkbox" aria-label="..."></td>
                    <td>To Lugait</td>
                    <td>Tracy Mcgraddy</td>
                    <td>04/20/2015</td>
                    <td>Log-in</td>
                    <td>This is a sample comment and mayweather wins</td>
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

@stop


@section('others')
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
<div id="disputemodify" class="white-popup mfp-hide">
    <form action="processor.php" method="post">
        <fieldset>
            <div class="form_input_wrapper extend clear">
                <label>OB name</label>
                <input type="text" class="extend clear" id="dispute_name" value="" />
            </div>
            <div class="form_input_wrapper extend clear">
                <label>OB requester</label>
                <input type="text" class="extend clear" id="dispute_requester" value="" />
            </div>
            <div class="form_input_wrapper extend clear">
                <label>Date requested</label>
                <input type="text" class="extend clear" id="date_requested" value="" />
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
                <label>Comments</label>
                <textarea class="extend clear" id="dispute_message"></textarea>
            </div>
        </fieldset>
        <button class="btn btn-default" data-attr="approve">Save</button>
        <button class="btn btn-default mclose">Cancel</button>
    </form>
    
</div>
@stop

@section('plugin_scripts')
<script type="text/javascript" src="/dist/js/ob.js"></script>
@stop

