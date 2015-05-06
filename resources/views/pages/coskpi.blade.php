@extends('master')

@section('header')
<title>MOT | Credit Officer Sales KPI</title>
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
            <h1 class="extend" style="padding-top: 10px;"><i class="fa fa-users"></i><span>Credit Officer Sales KPI</span></h1>
        </div>
        
        <div class="cosdataheader_idty daselect">
            <div class="btn-group jjx">
              <button type="button" class="btn btn-default sb">Branch: {{ $branchnamee }}</button>
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
                <!-- <li class="divider"></li>
                <li><a href="#">Separated link</a></li> -->
              </ul>
            </div>
             <div class="btn-group jjx">
              <button type="button" class="btn btn-default so" data-link="{{ url('/') }}">Officer: {{ $namee }}</button>
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <ul class="cosname dropdown-menu" role="menu">
                <li><a href="#" data-link="dwayne-johnson">Dwayne Johnson</a></li>
                <li><a href="#" data-link="allen-iverson">Allen Iverson</a></li>
                <li><a href="#" data-link="lebron-james">Lebron James</a></li>
                <li><a href="#" data-link="micheal-jordan">Micheal Jordan</a></li>
                <li><a href="#" data-link="bill-gates">Bill Gates</a></li>
                <li><a href="#" data-link="steve-jobs">Steve Jobs</a></li>
                <!-- <li class="divider"></li>
                <li><a href="#">Separated link</a></li> -->
              </ul>
            </div>
            <button class="btn btn-default gobtn jjx" data-link="{{ url('/') }}" data-idty="coskpi">Go</button>
        </div>
    </div>
    <div id="coskpi_box_main_wrapper" class="row extend clear">
        <div class="coskpi_box_wrapper extend">
            <h1 Class="coskpi_box_h1">PORTFOLIO</h1>
            <div class="extend">
                <div class="coskpi_box blue hvr-float-shadow">
                   <h1 class="coskpi_box_header extend clear">81</h1>
                   <div class="coskpi_box_content extend clear">TOTAL</div>
                </div>
                <div class="coskpi_box blue hvr-float-shadow">
                   <h1 class="coskpi_box_header extend clear">50</h1>
                   <div class="coskpi_box_content extend clear">Good Standing</div>
                </div>
                <div class="coskpi_box green hvr-float-shadow">
                   <h1 class="coskpi_box_header extend clear">3</h1>
                   <div class="coskpi_box_content extend clear">Arrears</div>
                   <h1 class="coskpi_box_header extend clear">KPI 1</h1>
                </div>
                <div class="coskpi_box yellow hvr-float-shadow">
                   <h1 class="coskpi_box_header extend clear">38.27%</h1>
                   <div class="coskpi_box_content extend clear">Ratio in Arrears</div>
                   <h1 class="coskpi_box_header extend clear">KPI 2</h1>
                </div>
            </div>
        </div>
        <div class="coskpi_box_wrapper extend">
            <h1 Class="coskpi_box_h1">SALES</h1>
            <div class="extend">
                <div class="coskpi_box blue hvr-float-shadow">
                   <h1 class="coskpi_box_header extend clear">438,782</h1>
                   <div class="coskpi_box_content extend clear">Interest Receivable</div>
                </div>
                <div class="coskpi_box blue hvr-float-shadow">
                   <h1 class="coskpi_box_header extend clear">318,932</h1>
                   <div class="coskpi_box_content extend clear">VAR 7 Days</div>
                </div>
                <div class="coskpi_box green hvr-float-shadow">
                   <h1 class="coskpi_box_header extend clear">1.38</h1>
                   <div class="coskpi_box_content extend clear">Revenue > VAR 7</div>
                   <h1 class="coskpi_box_header extend clear">KPI 3</h1>
                </div>
            </div>
        </div>
        <div class="coskpi_box_wrapper extend">
            <h1 Class="coskpi_box_h1">PRINCIPAL AT RISK</h1>
            <div class="extend">
                <div class="coskpi_box green hvr-float-shadow">
                   <h1 class="coskpi_box_header extend clear">20.93%</h1>
                   <div class="coskpi_box_content extend clear">PAR 7 Days</div>
                   <h1 class="coskpi_box_header extend clear">KPI 4</h1>
                </div>
                <div class="coskpi_box green hvr-float-shadow">
                   <h1 class="coskpi_box_header extend clear">10.15%</h1>
                   <div class="coskpi_box_content extend clear">PAR 30 Days</div>
                   <h1 class="coskpi_box_header extend clear">KPI 5</h1>
                </div>
                <div class="coskpi_box green hvr-float-shadow">
                   <h1 class="coskpi_box_header extend clear">1.13%</h1>
                   <div class="coskpi_box_content extend clear">PAR 90 Days</div>
                   <h1 class="coskpi_box_header extend clear">KPI 6</h1>
                </div>
            </div>
        </div>
        <div class="coskpi_box_wrapper extend">
            <img src="/dist/img/user.jpg" />
            <h1>Juliver Galleto</h1>
        </div>
    </div>
    <div style="height: 20px; clear: both;" class="extend"></div>
    <div class="cosdata_table extend accordion">
        <div class="row sortable">
            <!-- Left col -->
            <section class="col-lg-8">
              <!-- Custom tabs (Charts with tabs)-->
              <div class="nav-tabs-custom" style="border: none; box-shadow: none !important;">
                <!-- Tabs within a box -->
                <ul class="nav nav-tabs pull-right ctab" style="border: none;">
                  <li class="active ctabli"><a href="#revenue-chart" class="hvr-radial-out" data-toggle="tab">Portfolio</a></li>
                  <li class="ctabli"><a href="#revenue-chart" class="hvr-radial-out" data-toggle="tab">Sales</a></li>
                  <li class="ctabli"><a href="#revenue-chart" class="hvr-radial-out" data-toggle="tab">KPI 2</a></li>
                  <li class="ctabli"><a href="#revenue-chart" class="hvr-radial-out" data-toggle="tab">KPI 3</a></li>
                  <li class="ctabli"><a href="#revenue-chart" class="hvr-radial-out" data-toggle="tab">KPI 4</a></li>
                  <li class="ctabli"><a href="#revenue-chart" class="hvr-radial-out" data-toggle="tab">KPI 5</a></li>
                  <li class="ctabli"><a href="#revenue-chart" class="hvr-radial-out" data-toggle="tab">KPI 6</a></li>
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
            <section class="col-lg-4">
              <div class="coskpitablelegend">
                  <table>
                      <thead>
                      <th><span class="tp ketchup" title="Click to view"><i class="pe-7s-angle-down"></i></span><span>Category Credit Officer Bases on Portfolio</span></th>
                        <th class="tblack">Starter</th>
                      </thead>
                      <tbody class="thehide">
                          <tr>
                              <td>Total Disbursed</td>
                              <td class="tblack">2,191,988.67</td>
                          </tr>
                          <tr>
                              <td>Average Loan Disbursed</td>
                              <td class="tblack">27,061.59</td>
                          </tr>
                          <tr>
                              <td>Gross Loan portfolio</td>
                              <td class="tblack">1,523,004.02</td>
                          </tr>
                          <tr>
                              <td>Average Laon Balance</td>
                              <td class="tblack">18,802.52</td>
                          </tr>
                          <tr>
                              <td>Ratio Gross Loan / Disbursed</td>
                              <td class="tblack">69.48%</td>
                          </tr>
                      </tbody>
                  </table>
                  <table>
                      <thead>
                      <th><span class="tp ketchup" title="Click to view"><i class="pe-7s-angle-down"></i></span><span>Recency Portfolio</span></th>
                        <th class="tblack">Old</th>
                      </thead>
                      <tbody class="thehide">
                          <tr>
                              <td>LOANS IN GOOD STANDING</td>
                              <td class="tblack">51</td>
                          </tr>
                          <tr>
                              <td>LOANS IN ARREARS</td>
                              <td class="tblack">30</td>
                          </tr>
                          <tr>
                              <td>PORTFOLIO</td>
                              <td class="tblack">81</td>
                          </tr>
                      </tbody>
                  </table>
                  <table>
                      <thead>
                      <th><span class="tp ketchup" title="Click to view"><i class="pe-7s-angle-down"></i></span><span>TARGET 1: MAX 60 ARREARS</span></th>
                        <th class="yellow">80</th>
                        <th class="yellow">60</th>
                        <th class="green">0</th>
                      </thead>
                      <tbody class="thehide">
                          <tr>
                              <td>LOANS IN ARREARS / PORTFOLIO</td>
                              <td class="yellow"></td>
                              <td class="yellow"></td>
                              <td class="green">0</td>
                          </tr>
                      </tbody>
                  </table>
                  <table>
                      <thead>
                      <th><span class="tp ketchup" title="Click to view"><i class="pe-7s-angle-down"></i></span><span>TARGET 2: < 30% PORTFOLIO</span></th>
                        <th class="yellow">30%</th>
                        <th class="yellow">40%</th>
                        <th class="deepyellow">-7.04%</th>
                      </thead>
                      <tbody class="thehide">
                          <tr>
                              <td>VALUE AT RISK (VAR > 7 Days)</td>
                              <td class="yellow"></td>
                              <td class="yellow"></td>
                              <td class="deepyellow">337,027.46</td>
                          </tr>
                          <tr>
                              <td>REVENUE: INTEREST RECEIVABLE</td>
                              <td class="yellow"></td>
                              <td class="yellow"></td>
                              <td class="deepyellow">438,213.79</td>
                          </tr>
                      </tbody>
                  </table>
                  <table>
                      <thead>
                      <th><span class="tp ketchup" title="Click to view"><i class="pe-7s-angle-down"></i></span><span>TARGET 3: < 30% PORTFOLIO</span></th>
                        <th class="yellow">30%</th>
                        <th class="yellow">40%</th>
                        <th class="green">1.30</th>
                      </thead>
                      <tbody class="thehide">
                          <tr>
                              <td>PERCENTAGE AT RISK (PAR > 7 Days)</td>
                              <td class="yellow"></td>
                              <td class="yellow"></td>
                              <td class="green">22.13%</td>
                          </tr>
                      </tbody>
                  </table>
                  <table>
                      <thead>
                      <th><span class="tp ketchup" title="Click to view"><i class="pe-7s-angle-down"></i></span><span>TARGET 4: < 30% PORTFOLIO </span></th>
                        <th class="yellow">30%</th>
                        <th class="yellow">40%</th>
                        <th class="green">7.87%</th>
                      </thead>
                      <tbody class="thehide">
                          <tr>
                              <td>VAR > 30 Days</td>
                              <td class="yellow"></td>
                              <td class="yellow"></td>
                              <td class="green">147,035.66</td>
                          </tr>
                          <tr>
                              <td>PAR > 30 Days</td>
                              <td class="yellow"></td>
                              <td class="yellow"></td>
                              <td class="green">9.65%</td>
                          </tr>
                      </tbody>
                  </table>
                  <table>
                      <thead>
                      <th><span class="tp ketchup" title="Click to view"><i class="pe-7s-angle-down"></i></span><span>TARGET 5: < 15% PORTFOLIO</span></th>
                        <th class="yellow">15%</th>
                        <th class="yellow">20%</th>
                        <th class="green">5.35%</th>
                      </thead>
                      <tbody class="thehide">
                          <tr>
                              <td>VAR > 90 Days</td>
                              <td class="yellow"></td>
                              <td class="yellow"></td>
                              <td class="green">17,271.48</td>
                          </tr>
                          <tr>
                              <td>PAR > 90 Days</td>
                              <td class="yellow"></td>
                              <td class="yellow"></td>
                              <td class="green">1.13%</td>
                          </tr>
                      </tbody>
                  </table>
                  <table>
                      <thead>
                      <th>TARGET 5: < 7.5% PORTFOLIO </th>
                        <th class="yellow">7.5%</th>
                        <th class="yellow">10%</th>
                        <th class="green">6.37%</th>
                      </thead>
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
<script src="/dist/js/coskpi.js" type="text/javascript"></script>
<script src="/dist/js/sales.js" type="text/javascript"></script>
@stop