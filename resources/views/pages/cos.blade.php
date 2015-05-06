@extends('master')

@section('header')
<title>MOT | Credit Officer Status</title>
@stop

@section('plugin_styles')
<!-- datatables -->
 <link rel="stylesheet" type="text/css" href="/plugins/datatables/extensions/TableTools/css/dataTables.tableTools.min.css" />
 <link rel="stylesheet" type="text/css" href="/plugins/datatables/extensions/FixedHeader/css/dataTables.fixedHeader.min.css" />
@stop

@section('content')

<div class="row cosdata">
    <div class="cosdataheader extend">
        <div class="cosdataheader_title extend">
            <h1 class="extend"><i class="fa fa-users"></i><span>Credit Officers Status</span></h1>
            <p>Client monitoring for Grace Period, Arrears, Active and Future Clients</p>
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
                <li><a href="#" data-link="Micheal Jordan">Micheal Jordan</a></li>
                <li><a href="#" data-link="bill-gates">Bill Gates</a></li>
                <li><a href="#" data-link="steve-jobs">Steve Jobs</a></li>
                <!-- <li class="divider"></li>
                <li><a href="#">Separated link</a></li> -->
              </ul>
            </div>
            <button class="btn btn-default gobtn jjx" data-link="{{ url('/') }}" data-idty="cos">Go</button>
        </div>
    </div>
    <div class="cosdatacontent">
        <div class="col-md-2 cosbox green">
            <div class="cosbox_header longshadow extend">81</div>
			<div class="cosbox_content extend">
			No. of Clients<br/>
			in Active / Arrears
			</div>
        </div>
        <div class="col-md-2 cosbox green">
            <div class="cosbox_header longshadow extend">43</div>
			<div class="cosbox_content extend">
			No. of Active / Good<br/>
			Standing Clients
			</div>
        </div>
        <div class="col-md-2 cosbox green">
            <div class="cosbox_header longshadow extend">3</div>
			<div class="cosbox_content extend">
			No. of /<br/>
			Future Clients
			</div>
        </div>
        <div id="tad" class="col-md-2 cosbox cosbox_has_dp">
            <div class="cosbox_notify tp ketchup" title="Click to view">2</div>
            <div class="cosbox_header verylongshadow extend cosbox_multi" style="padding: 5px 0px 13px 0px; background: none;">Total<br/>Amount Due</div>  
        </div>
        
        <div id="gp" class="col-md-2 cosbox cosbox_has_dp">
            <div class="cosbox_notify tp ketchup" title="Click to view">8</div>
            <div class="cosbox_header verylongshadow extend cosbox_multi" style="padding: 5px 0px 13px 0px; background: none;">Clients In<br/>GP</div>  
        </div>
        <div id="cia" class="col-md-2 cosbox cosbox_has_dp">
            <div class="cosbox_notify tp ketchup" title="Click to view">7</div>
            <div class="cosbox_header verylongshadow extend cosbox_multi" style="padding: 5px 0px 13px 0px; background: none;">Clients In<br/>Arears</div>  
        </div>
        
		<div class="col-md-2 cosbox green">
			<div class="cosbox_header longshadow extend">501,650.36</div>
			<div class="cosbox_content extend">
				Total Loan Balance<br/>
				in Arrears
			</div>
                </div>

	
		<div class="col-md-2 cosbox green">
			<div class="cosbox_header longshadow extend">33</div>
			<div class="cosbox_content extend">
				No. of Clients<br/>in Arrears
			</div>
            </div>
		
    </div>
    <div style="height: 20px; clear: both;" class="extend"></div>
    <div class="cosdata_table extend accordion">
        <div class="cosdata_table_header accordion_header">
            <h1><span class="tp ketchup" title="Click to view"><i class="pe-7s-angle-down"></i></span><span>CLIENTS IN GRACE PERIOD</span></h1>
            <div class="cos_data_table_header_right">
              <div class="cosdata_table_search extend jjx">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search here...">
                </div><!-- /input-group -->
             </div>
             <button class="btn btn-default cosdata_searchbtn jjx tp ketchup" title="Click to search"><i class="fa fa-search"></i></button>
             <div class="dropdown jjx tp ketchup" title="Download options">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                      <i class="fa fa-download"></i>
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dropdownMenu1">
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">COPY</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">PDF</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CSV</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">EXCEL</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">PRINT</a></li>
                    </ul>
              </div>
              <div class="btn-group jjx filterentries tp ketchup" title="Click to filter">
              <button type="button" class="btn btn-default">Filter Entries</button>
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">10</a></li>
                <li><a href="#">20</a></li>
                <li><a href="#">30</a></li>
                <li><a href="#">40</a></li>
                <li><a href="#">50</a></li>
                <li><a href="#">60</a></li>
                <!-- <li class="divider"></li>
                <li><a href="#">Separated link</a></li> -->
              </ul>
            </div>
            </div>
        </div>
        <div class="cosdata_table_content accordion_content">
            <table cellpadding="0" cellspacing="0">
                <thead>
                    <tr style="border: none;">
                        <th>Name</th>
                        <th>Credit Officer</th>
                        <th>home phone</th>
                        <th>mobile phone</th>
                        <th>loan amount</th>
                        <th>loan id</th>
                        <th>address</th>
                        <th>in grace period</th>
                        <th>disbursement date</th>
                        <th>amount due</th>
                    </tr>
                </thead>
                    <tbody>
                        <tr>
                            <td>LEONCIA ACTUB ZERNA</td>
                            <td>ALYSSA CHARM MANUGAS</td>
                            <td></td>
                            <td>09054535534</td>
                            <td>40,000.00</td>
                            <td>HIVK963</td>
                            <td>ZONE 2A PINEAPPLE ST. BRGY DELCARMEN ILIGAN LANAO DEL NORTE 9200 PHILIPPINES</td>
                            <td>5</td>
                            <td>July 17, 2014</td>
                            <td>3,780.55</td>
                        </tr>
                        <tr>
                            <td>LEONCIA ACTUB ZERNA</td>
                            <td>ALYSSA CHARM MANUGAS</td>
                            <td></td>
                            <td>09054535534</td>
                            <td>40,000.00</td>
                            <td>HIVK963</td>
                            <td>ZONE 2A PINEAPPLE ST. BRGY DELCARMEN ILIGAN LANAO DEL NORTE 9200 PHILIPPINES</td>
                            <td>5</td>
                            <td>July 17, 2014</td>
                            <td>3,780.55</td>
                        </tr>
                        <tr>
                            <td>LEONCIA ACTUB ZERNA</td>
                            <td>ALYSSA CHARM MANUGAS</td>
                            <td></td>
                            <td>09054535534</td>
                            <td>40,000.00</td>
                            <td>HIVK963</td>
                            <td>ZONE 2A PINEAPPLE ST. BRGY DELCARMEN ILIGAN LANAO DEL NORTE 9200 PHILIPPINES</td>
                            <td>5</td>
                            <td>July 17, 2014</td>
                            <td>3,780.55</td>
                        </tr>
                        <tr style="border: none">
                            <td>LEONCIA ACTUB ZERNA</td>
                            <td>ALYSSA CHARM MANUGAS</td>
                            <td></td>
                            <td>09054535534</td>
                            <td>40,000.00</td>
                            <td>HIVK963</td>
                            <td>ZONE 2A PINEAPPLE ST. BRGY DELCARMEN ILIGAN LANAO DEL NORTE 9200 PHILIPPINES</td>
                            <td>5</td>
                            <td>July 17, 2014</td>
                            <td>3,780.55</td>
                        </tr>
                    </tbody>
            </table>
            <div class="table_pagination">
            <div class="table_pagination_idty">
                Showing 1 to 10 of 33 entries
            </div>
            <nav>
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
        </div>
    </div>
    <div style="height: 20px; clear: both;" class="extend"></div>
    <div class="cosdata_table extend accordion">
        <div class="cosdata_table_header accordion_header">
            <h1><span class="tp ketchup" title="Click to view"><i class="pe-7s-angle-down"></i></span><span>CLIENTS IN ARREARS</span></h1>
           <div class="cos_data_table_header_right">
              <div class="cosdata_table_search extend jjx">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search here...">
                </div><!-- /input-group -->
             </div>
             <button class="btn btn-default cosdata_searchbtn jjx tp ketchup" title="Click to search"><i class="fa fa-search"></i></button>
             <div class="dropdown jjx tp ketchup" title="Download options">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                      <i class="fa fa-download"></i>
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dropdownMenu1">
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">COPY</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">PDF</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CSV</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">EXCEL</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">PRINT</a></li>
                    </ul>
              </div>
              <div class="btn-group jjx filterentries tp ketchup" title="Click to filter">
              <button type="button" class="btn btn-default">Filter Entries</button>
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">10</a></li>
                <li><a href="#">20</a></li>
                <li><a href="#">30</a></li>
                <li><a href="#">40</a></li>
                <li><a href="#">50</a></li>
                <li><a href="#">60</a></li>
                <!-- <li class="divider"></li>
                <li><a href="#">Separated link</a></li> -->
              </ul>
            </div>
            </div>
        </div>
        <div class="cosdata_table_content accordion_content">
            <table cellpadding="0" cellspacing="0">
                <thead>
                    <tr style="border: none;">
                        <th>Name</th>
                        <th>Credit Officer</th>
                        <th>home phone</th>
                        <th>mobile phone</th>
                        <th>loan amount</th>
                        <th>loan id</th>
                        <th>address</th>
                        <th>in grace period</th>
                        <th>disbursement date</th>
                        <th>amount due</th>
                    </tr>
                </thead>
                    <tbody>
                        <tr>
                            <td>LEONCIA ACTUB ZERNA</td>
                            <td>ALYSSA CHARM MANUGAS</td>
                            <td></td>
                            <td>09054535534</td>
                            <td>40,000.00</td>
                            <td>HIVK963</td>
                            <td>ZONE 2A PINEAPPLE ST. BRGY DELCARMEN ILIGAN LANAO DEL NORTE 9200 PHILIPPINES</td>
                            <td>5</td>
                            <td>July 17, 2014</td>
                            <td>3,780.55</td>
                        </tr>
                        <tr>
                            <td>LEONCIA ACTUB ZERNA</td>
                            <td>ALYSSA CHARM MANUGAS</td>
                            <td></td>
                            <td>09054535534</td>
                            <td>40,000.00</td>
                            <td>HIVK963</td>
                            <td>ZONE 2A PINEAPPLE ST. BRGY DELCARMEN ILIGAN LANAO DEL NORTE 9200 PHILIPPINES</td>
                            <td>5</td>
                            <td>July 17, 2014</td>
                            <td>3,780.55</td>
                        </tr>
                        <tr>
                            <td>LEONCIA ACTUB ZERNA</td>
                            <td>ALYSSA CHARM MANUGAS</td>
                            <td></td>
                            <td>09054535534</td>
                            <td>40,000.00</td>
                            <td>HIVK963</td>
                            <td>ZONE 2A PINEAPPLE ST. BRGY DELCARMEN ILIGAN LANAO DEL NORTE 9200 PHILIPPINES</td>
                            <td>5</td>
                            <td>July 17, 2014</td>
                            <td>3,780.55</td>
                        </tr>
                        <tr style="border: none">
                            <td>LEONCIA ACTUB ZERNA</td>
                            <td>ALYSSA CHARM MANUGAS</td>
                            <td></td>
                            <td>09054535534</td>
                            <td>40,000.00</td>
                            <td>HIVK963</td>
                            <td>ZONE 2A PINEAPPLE ST. BRGY DELCARMEN ILIGAN LANAO DEL NORTE 9200 PHILIPPINES</td>
                            <td>5</td>
                            <td>July 17, 2014</td>
                            <td>3,780.55</td>
                        </tr>
                    </tbody>
            </table>
            <div class="table_pagination">
            <div class="table_pagination_idty">
                Showing 1 to 10 of 33 entries
            </div>
            <nav>
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
        </div>
    </div>
    <div style="height: 20px; clear: both;" class="extend"></div>
    <div class="cosdata_table extend accordion">
        <div class="cosdata_table_header accordion_header">
            <h1><span class="tp ketchup" title="Click to view"><i class="pe-7s-angle-down"></i></span><span>ACTIVE / GOOD STANDING CLIENTS</span></h1>
           <div class="cos_data_table_header_right">
              <div class="cosdata_table_search extend jjx">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search here...">
                </div><!-- /input-group -->
             </div>
             <button class="btn btn-default cosdata_searchbtn jjx tp ketchup" title="Click to search"><i class="fa fa-search"></i></button>
             <div class="dropdown jjx tp ketchup" title="Download options">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                      <i class="fa fa-download"></i>
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dropdownMenu1">
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">COPY</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">PDF</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CSV</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">EXCEL</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">PRINT</a></li>
                    </ul>
              </div>
              <div class="btn-group jjx filterentries tp ketchup" title="Click to filter">
              <button type="button" class="btn btn-default">Filter Entries</button>
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">10</a></li>
                <li><a href="#">20</a></li>
                <li><a href="#">30</a></li>
                <li><a href="#">40</a></li>
                <li><a href="#">50</a></li>
                <li><a href="#">60</a></li>
                <!-- <li class="divider"></li>
                <li><a href="#">Separated link</a></li> -->
              </ul>
            </div>
            </div>
        </div>
        <div class="cosdata_table_content accordion_content">
            <table cellpadding="0" cellspacing="0">
                <thead>
                    <tr style="border: none;">
                        <th>Name</th>
                        <th>Credit Officer</th>
                        <th>home phone</th>
                        <th>mobile phone</th>
                        <th>loan amount</th>
                        <th>loan id</th>
                        <th>address</th>
                        <th>in grace period</th>
                        <th>disbursement date</th>
                        <th>amount due</th>
                    </tr>
                </thead>
                    <tbody>
                        <tr>
                            <td>LEONCIA ACTUB ZERNA</td>
                            <td>ALYSSA CHARM MANUGAS</td>
                            <td></td>
                            <td>09054535534</td>
                            <td>40,000.00</td>
                            <td>HIVK963</td>
                            <td>ZONE 2A PINEAPPLE ST. BRGY DELCARMEN ILIGAN LANAO DEL NORTE 9200 PHILIPPINES</td>
                            <td>5</td>
                            <td>July 17, 2014</td>
                            <td>3,780.55</td>
                        </tr>
                        <tr>
                            <td>LEONCIA ACTUB ZERNA</td>
                            <td>ALYSSA CHARM MANUGAS</td>
                            <td></td>
                            <td>09054535534</td>
                            <td>40,000.00</td>
                            <td>HIVK963</td>
                            <td>ZONE 2A PINEAPPLE ST. BRGY DELCARMEN ILIGAN LANAO DEL NORTE 9200 PHILIPPINES</td>
                            <td>5</td>
                            <td>July 17, 2014</td>
                            <td>3,780.55</td>
                        </tr>
                        <tr>
                            <td>LEONCIA ACTUB ZERNA</td>
                            <td>ALYSSA CHARM MANUGAS</td>
                            <td></td>
                            <td>09054535534</td>
                            <td>40,000.00</td>
                            <td>HIVK963</td>
                            <td>ZONE 2A PINEAPPLE ST. BRGY DELCARMEN ILIGAN LANAO DEL NORTE 9200 PHILIPPINES</td>
                            <td>5</td>
                            <td>July 17, 2014</td>
                            <td>3,780.55</td>
                        </tr>
                        <tr style="border: none">
                            <td>LEONCIA ACTUB ZERNA</td>
                            <td>ALYSSA CHARM MANUGAS</td>
                            <td></td>
                            <td>09054535534</td>
                            <td>40,000.00</td>
                            <td>HIVK963</td>
                            <td>ZONE 2A PINEAPPLE ST. BRGY DELCARMEN ILIGAN LANAO DEL NORTE 9200 PHILIPPINES</td>
                            <td>5</td>
                            <td>July 17, 2014</td>
                            <td>3,780.55</td>
                        </tr>
                    </tbody>
            </table>
            <div class="table_pagination">
            <div class="table_pagination_idty">
                Showing 1 to 10 of 33 entries
            </div>
            <nav>
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
        </div>
    </div>
    <div style="height: 20px; clear: both;" class="extend"></div>
    <div class="cosdata_table extend accordion" id="fctable">
        <div class="cosdata_table_header accordion_header">
            <h1><span class="tp ketchup" title="Click to view"><i class="pe-7s-angle-down"></i></span><span>FUTURE CLIENTS</span></h1>
           <div class="cos_data_table_header_right">
              <div class="cosdata_table_search extend jjx">
                <div class="input-group">
                    <input type="text" class="form-control datatables_search" placeholder="Search here...">
                </div><!-- /input-group -->
             </div>
             <button class="btn btn-default cosdata_searchbtn jjx tp ketchup" title="Click to search"><i class="fa fa-search"></i></button>
             <div class="dropdown jjx tp ketchup" title="Download options">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                      <i class="fa fa-download"></i>
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right downloadoptions" role="menu" aria-labelledby="dropdownMenu1">
                      <li role="presentation"><a class="tbcopy" role="menuitem" tabindex="-1" href="#">COPY</a></li>
                      <li role="presentation"><a class="tbpdf" role="menuitem" tabindex="-1" href="#">PDF</a></li>
                      <li role="presentation"><a class="csv" role="menuitem" tabindex="-1" href="#">CSV</a></li>
                      <li role="presentation"><a class="tbexcel" role="menuitem" tabindex="-1" href="#">EXCEL</a></li>
                      <li role="presentation"><a class="tbprint" role="menuitem" tabindex="-1" href="#">PRINT</a></li>
                    </ul>
              </div>
              <div class="btn-group jjx filterentries tp ketchup" title="Click to filter">
              <button type="button" class="btn perent  btn-default">Filter Entries</button>
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu datafilteroptions" role="menu">
                <li><a href="#">10</a></li>
                <li><a href="#">25</a></li>
                <li><a href="#">50</a></li>
                <li><a href="#">100</a></li>
                <!-- <li class="divider"></li>
                <li><a href="#">Separated link</a></li> -->
              </ul>
            </div>
            </div>
        </div>
        <div class="cosdata_table_content accordion_content">
            <table cellpadding="0" cellspacing="0" class="datatables" id="tbtest">
                <thead>
                    <tr style="border: none;">
                        <th>Name</th>
                        <th>Credit Officer</th>
                        <th>home phone</th>
                        <th>mobile phone</th>
                        <th>loan amount</th>
                        <th>loan id</th>
                        <th>address</th>
                        <th>in grace period</th>
                        <th>disbursement date</th>
                        <th>amount due</th>
                    </tr>
                </thead>
                    <tbody>
                        <tr>
                            <td>LEONCIA ACTUB ZERNA</td>
                            <td>ALYSSA CHARM MANUGAS</td>
                            <td></td>
                            <td>09054535534</td>
                            <td>40,000.00</td>
                            <td>HIVK963</td>
                            <td>ZONE 2A PINEAPPLE ST. BRGY DELCARMEN ILIGAN LANAO DEL NORTE 9200 PHILIPPINES</td>
                            <td>5</td>
                            <td>July 17, 2014</td>
                            <td>3,780.55</td>
                        </tr>
                        <tr>
                            <td>Chris Brown</td>
                            <td>ALYSSA CHARM MANUGAS</td>
                            <td></td>
                            <td>09054535534</td>
                            <td>40,000.00</td>
                            <td>HIVK963</td>
                            <td>ZONE 2A PINEAPPLE ST. BRGY DELCARMEN ILIGAN LANAO DEL NORTE 9200 PHILIPPINES</td>
                            <td>5</td>
                            <td>July 17, 2014</td>
                            <td>3,780.55</td>
                        </tr>
                        <tr>
                            <td>Big Dragon</td>
                            <td>ALYSSA CHARM MANUGAS</td>
                            <td></td>
                            <td>09054535534</td>
                            <td>40,000.00</td>
                            <td>HIVK963</td>
                            <td>ZONE 2A PINEAPPLE ST. BRGY DELCARMEN ILIGAN LANAO DEL NORTE 9200 PHILIPPINES</td>
                            <td>5</td>
                            <td>July 17, 2014</td>
                            <td>3,780.55</td>
                        </tr>
                        <tr style="border: none">
                            <td>Make Love</td>
                            <td>ALYSSA CHARM MANUGAS</td>
                            <td></td>
                            <td>09054535534</td>
                            <td>40,000.00</td>
                            <td>HIVK963</td>
                            <td>ZONE 2A PINEAPPLE ST. BRGY DELCARMEN ILIGAN LANAO DEL NORTE 9200 PHILIPPINES</td>
                            <td>5</td>
                            <td>July 17, 2014</td>
                            <td>3,780.55</td>
                        </tr>
                        <tr style="border: none">
                            <td>Walang Forever</td>
                            <td>ALYSSA CHARM MANUGAS</td>
                            <td></td>
                            <td>09054535534</td>
                            <td>40,000.00</td>
                            <td>HIVK963</td>
                            <td>ZONE 2A PINEAPPLE ST. BRGY DELCARMEN ILIGAN LANAO DEL NORTE 9200 PHILIPPINES</td>
                            <td>5</td>
                            <td>July 17, 2014</td>
                            <td>3,780.55</td>
                        </tr>
                        <tr style="border: none">
                            <td>The Rak</td>
                            <td>ALYSSA CHARM MANUGAS</td>
                            <td></td>
                            <td>09054535534</td>
                            <td>40,000.00</td>
                            <td>HIVK963</td>
                            <td>ZONE 2A PINEAPPLE ST. BRGY DELCARMEN ILIGAN LANAO DEL NORTE 9200 PHILIPPINES</td>
                            <td>5</td>
                            <td>July 17, 2014</td>
                            <td>3,780.55</td>
                        </tr>
                        <tr style="border: none">
                            <td>John Smith</td>
                            <td>ALYSSA CHARM MANUGAS</td>
                            <td></td>
                            <td>09054535534</td>
                            <td>40,000.00</td>
                            <td>HIVK963</td>
                            <td>ZONE 2A PINEAPPLE ST. BRGY DELCARMEN ILIGAN LANAO DEL NORTE 9200 PHILIPPINES</td>
                            <td>5</td>
                            <td>July 17, 2014</td>
                            <td>3,780.55</td>
                        </tr>
                        <tr style="border: none">
                            <td>Kyrie Irving</td>
                            <td>ALYSSA CHARM MANUGAS</td>
                            <td></td>
                            <td>09054535534</td>
                            <td>40,000.00</td>
                            <td>HIVK963</td>
                            <td>ZONE 2A PINEAPPLE ST. BRGY DELCARMEN ILIGAN LANAO DEL NORTE 9200 PHILIPPINES</td>
                            <td>5</td>
                            <td>July 17, 2014</td>
                            <td>3,780.55</td>
                        </tr>
                        <tr style="border: none">
                            <td>Allen Iverson</td>
                            <td>ALYSSA CHARM MANUGAS</td>
                            <td></td>
                            <td>09054535534</td>
                            <td>40,000.00</td>
                            <td>HIVK963</td>
                            <td>ZONE 2A PINEAPPLE ST. BRGY DELCARMEN ILIGAN LANAO DEL NORTE 9200 PHILIPPINES</td>
                            <td>5</td>
                            <td>July 17, 2014</td>
                            <td>3,780.55</td>
                        </tr>
                        <tr style="border: none">
                            <td>Jason Lason</td>
                            <td>ALYSSA CHARM MANUGAS</td>
                            <td></td>
                            <td>09054535534</td>
                            <td>40,000.00</td>
                            <td>HIVK963</td>
                            <td>ZONE 2A PINEAPPLE ST. BRGY DELCARMEN ILIGAN LANAO DEL NORTE 9200 PHILIPPINES</td>
                            <td>5</td>
                            <td>July 17, 2014</td>
                            <td>3,780.55</td>
                        </tr>
                        <tr style="border: none">
                            <td>Lebron James</td>
                            <td>ALYSSA CHARM MANUGAS</td>
                            <td></td>
                            <td>09054535534</td>
                            <td>40,000.00</td>
                            <td>HIVK963</td>
                            <td>ZONE 2A PINEAPPLE ST. BRGY DELCARMEN ILIGAN LANAO DEL NORTE 9200 PHILIPPINES</td>
                            <td>5</td>
                            <td>July 17, 2014</td>
                            <td>3,780.55</td>
                        </tr>
                        <tr style="border: none">
                            <td>The Barbieryan</td>
                            <td>ALYSSA CHARM MANUGAS</td>
                            <td></td>
                            <td>09054535534</td>
                            <td>40,000.00</td>
                            <td>HIVK963</td>
                            <td>ZONE 2A PINEAPPLE ST. BRGY DELCARMEN ILIGAN LANAO DEL NORTE 9200 PHILIPPINES</td>
                            <td>5</td>
                            <td>July 17, 2014</td>
                            <td>3,780.55</td>
                        </tr>
                        <tr style="border: none">
                            <td>Jacob Hakob</td>
                            <td>ALYSSA CHARM MANUGAS</td>
                            <td></td>
                            <td>09054535534</td>
                            <td>40,000.00</td>
                            <td>HIVK963</td>
                            <td>ZONE 2A PINEAPPLE ST. BRGY DELCARMEN ILIGAN LANAO DEL NORTE 9200 PHILIPPINES</td>
                            <td>5</td>
                            <td>July 17, 2014</td>
                            <td>3,780.55</td>
                        </tr>
                        <tr style="border: none">
                            <td>Santa Close</td>
                            <td>ALYSSA CHARM MANUGAS</td>
                            <td></td>
                            <td>09054535534</td>
                            <td>40,000.00</td>
                            <td>HIVK963</td>
                            <td>ZONE 2A PINEAPPLE ST. BRGY DELCARMEN ILIGAN LANAO DEL NORTE 9200 PHILIPPINES</td>
                            <td>5</td>
                            <td>July 17, 2014</td>
                            <td>3,780.55</td>
                        </tr>
                    </tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

@stop

@section('others')
<div id="cosbox_dp_tad" class="cosbox_dp thehide extend">
                <table>
                    <tr>
                        <td>In grace period</td><td>13,067.43</td>
                    </tr>
                    <tr>
                        <td>In arears</td><td>137,591.88</td>
                    </tr>
                   
                </table>
</div>
<div id="cosbox_dp_gp" class="thehide cosbox_dp extend">
                <table>
                    <tr>
                        <td>No of clients</td><td>5</td>
                    </tr>
                    <tr>
                        <td>GP 1</td><td>0</td>
                    </tr>
                    <tr>
                        <td>GP 2</td><td>1</td>
                    </tr>
                    <tr>
                        <td>GP 3</td><td>0</td>
                    </tr>
                    <tr>
                        <td>GP 4</td><td>3</td>
                    </tr>
                    <tr>
                        <td>GP 5</td><td>0</td>
                    </tr>
                    <tr>
                        <td>GP 6</td><td>1</td>
                    </tr>
                    <tr>
                        <td>GP 7</td><td>0</td>
                    </tr>
                </table>
</div>
<div id="cosbox_dp_cia" class="thehide cosbox_dp extend">
                <table>
                    <tr>
                        <td>No. of Clients in Arrears</td><td>1988</td>
                    </tr>
                    <tr>
                        <td>Clients in Arrears <= 7</td><td>137</td>
                    </tr>
                    <tr>
                        <td>Clients in Arrears > 7</td><td>231</td>
                    </tr>
                    <tr>
                        <td>Clients in Arrears > 30</td><td>242</td>
                    </tr>
                    <tr>
                        <td>Clients in Arrears > 60</td><td>179</td>
                    </tr>
                    <tr>
                        <td>Clients in Arrears > 90</td><td>284</td>
                    </tr>
                    <tr>
                        <td>Clients in Arrears > 150</td><td>915</td>
                    </tr>
                </table>
</div>

@stop

@section('plugin_scripts')
<!-- datatables -->
<script type="text/javascript" src="/plugins/datatables/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
<script type="text/javascript" src="/plugins/datatables/extensions/FixedHeader/js/dataTables.fixedHeader.min.js"></script>
<script type="text/javascript" src="/dist/js/cos.js" ></script>
@stop