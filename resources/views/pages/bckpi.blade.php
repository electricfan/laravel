@extends('master')

@section('header')
<title>MOT | Branch Company KPI</title>
@stop

@section('plugin_styles')
<!-- Morris chart -->
<link href="/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
<script src="/plugins/morris/raphael.min.js"></script>
<script src="/plugins/morris/morris.min.js" type="text/javascript"></script>
@stop

@section('content')
<div class="row cosdata">
    <div class="cosdataheader extend">
        <div class="cosdataheader_title extend">
            <h1 class="extend" style="padding-top: 10px;"><i class="fa fa-users"></i><span>BRANCH / COMPANY KPI</span></h1>
        </div>
        
        <div class="cosdataheader_idty daselect">
            <div class="btn-group jjx">
              <button type="button" class="btn btn-default sb">Select Branch</button>
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>
           
              <ul class="cosbranch dropdown-menu" role="menu">
                <li><a href="#" data-link="corporate">Corporate</a></li>
                <li><a href="#" data-link="iligan">Iligan</a></li>
                <li><a href="#" data-link="lugait">Lugait</a></li>
                <li><a href="#" data-link="initao">Initao</a></li>
                <li><a href="#" data-link="maigo">Maigo</a></li>
                <li><a href="#" data-link="el-salvador">El-Salvador</a></li>
              </ul>
            </div>
            <button class="btn btn-default gobtn jjx" data-link="{{ url('/') }}" data-idty="bckpi">Go</button>
        </div>
    </div>
    <div class="cosdatacontent">
        <table class="bckpi_table extend" border="0" cellpadding="0" cellspacing="0">
            <thead>
            <tr>
                <th>Branch</th>
                <th>LOAN </th>
                <th>Loans Good Standing	Loans in </th>
                <th>Loans in Arrears</th>
                <th class="yellow">RATIO LOANS / ARREARS</th>
                <th>Gross Loans Portfolio</th>
                <th>Average Laon Balance</th>
                <th>Average Loan Disbursed </th>
                <th>Ratio Gross Loan/ Disbursed</th>
                <th>Project Loan Interest Earnings</th>
                <th>VAR</th>
                <th>VAR > 7 Days</th>
                <th>VAR > 30 Days</th>
                <th>VAR > 90 Days</th>
                <th>PAR</th>
                <th class="green">PAR > 7 Days</th>
                <th class="green">PAR > 30 Days</th>
                <th class="green">PAR > 90 Days</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>ILIGAN BRANCH</td>
                    <td>1,229</td>
                    <td>886</td>
                    <td>343</td>
                    <td class="yellow">27.91%</td>
                    <td>24,816,553</td>
                    <td>20,192</td>
                    <td>34,763,407</td>
                    <td>28,286</td>
                    <td>71.39%</td>
                    <td>7,748,039</td>
                    <td>5,109,440.46</td>
                    <td>3,711,294</td>
                    <td>2,201,837</td>
                    <td>669,346</td>
                    <td class="green">14.95%</td>
                    <td class="green">8.87%</td>
                    <td class="green">2.70%</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div style="height: 20px; clear: both;" class="extend"></div>
    <div class="cosdata_table extend accordion">
        <div class="row sortable">
            <!-- Left col -->
            <section class="col-lg-6">
              <!-- Custom tabs (Charts with tabs)-->
              <div class="nav-tabs-custom" style="border: none; box-shadow: none !important;">
                <!-- Tabs within a box -->
                <ul class="nav nav-tabs pull-right" style="border: none;">
                   <!-- <li><a href="#sales-chart" data-toggle="tab">Donut</a></li> -->
                  <li class="pull-left header"><i class="fa fa-inbox"></i> ILIGAN BRANCH</li>
                </ul>
                <div class="tab-content no-padding" style="border: none !important;">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
                   <!-- <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>-->
                </div>
              </div><!-- /.nav-tabs-custom -->
			
            </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-6">
              <div class="icidenticator extend">
                  <div class="col-md-4 yellow">
                      <div class="icheader"><h1>27.91%</h1></div>
                      <div class="iccontent">Ratio in Arrears < 20%</div>
                  </div>
                  <div class="col-md-4 blue">
                      <div class="icheader"><h1>71.39%</h1></div>
                      <div class="iccontent">Ratio Loans/Disbursed</div>
                  </div>
                  <div class="col-md-4 tp ketchup green" title="PAR > 7 Days:&nbsp;&nbsp;14.95%<br/>PAR > 30 Days:&nbsp;&nbsp;8.87%<br/>PAR > 90 Days:&nbsp;&nbsp;2.70%">
                      <div class="icheader_single">3</div>
                      <div class="iccontent_single">PAR</div>
                  </div>
                 
              </div>
              <div class="ictablelegend">
                  <table>
                      <thead>
                        <tr>
                             <th>LEGEND</th>
                             <th class="red">BAD</th>
                             <th class="yellow">DANGER</th>
                             <th class="green">GOOD</th>
                        </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>Ratio in Arrears</td>
                              <td class="red">40%</td>
                              <td class="yellow">20%</td>
                              <td class="green"><= 20%</td>
                          </tr>
                          <tr>
                              <td>PAR > 7 Days</td>
                              <td class="red">> 40%</td>
                              <td class="yellow">> 20%</td>
                              <td class="green"><= 20%</td>
                          </tr>
                          <tr>
                              <td>PAR > 30 Days</td>
                              <td class="red">> 20%</td>
                              <td class="yellow">> 10%</td>
                              <td class="green"><= 10%</td>
                          </tr>
                          <tr>
                              <td>PAR > 90 Days</td>
                              <td class="red">> 10%</td>
                              <td class="yellow">> 5%</td>
                              <td class="green"><= 5%</td>
                          </tr>
                      </tbody>
                  </table>
              </div>
            </section><!-- right col -->
			
          </div><!-- /.row (main row) -->
    </div>
</div>

@stop


@section('others')

@stop


@section('plugin_scripts')
<script src="/dist/js/sales.js" type="text/javascript"></script> 
@stop