<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;
use App\mot_users;

class mot extends Controller {
    
        protected $url;
        public function __construct(UrlGenerator $url)
	{
		$this->middleware('auth');
                $this->url = $url;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
        //replace dashes with spaces functions
        private function replace_dashes($string) {
            return str_replace("-", " ", $string);
            
        }
        //index page, dashboard page
	public function index()
	{   
            $data = mot_users::all();
            $breadcrumbs = '<li class="active"><a href="' . $this->url->to('/') . '">Dashboard</a></li>';
            $showpagefilter = "yes";
            return view('pages.home', compact('breadcrumbs', 'showpagefilter', 'data')); 
	}
        //profile page
        public function profile()
        {
            $breadcrumbs = '<li>Profile</li><li class="active"><a href="' . $this->url->to('/profile') . '">Dodong Juliver</a></li>';
            return view('pages.profile', compact('breadcrumbs'));
        }
        //employee data page
        public function employee_data(){
           $breadcrumbs = '<li class="active"><a href="' . $this->url->to('/') . '/employee-data">Employee Data</a></li>';
           $activelink = "employeedata";
           return view('pages.employeedata', compact('breadcrumbs', 'activelink'));
        }
        //updates page
        public function updates(){
           $breadcrumbs = '<li>Pages</li><li class="active"><a href="' . $this->url->to('/') . '/updates">Updates</a></li>';
           $activelink = "updates";
           $showpagefilter = "yes";
           return view('pages.home', compact('breadcrumbs', 'activelink', 'showpagefilter'));
        }
        //sales page
        public function sales(){
           $breadcrumbs = '<li>Pages</li><li class="active"><a href="' . $this->url->to('/') . '/updates">Sales</a></li>';
           $activelink = "sales";
           $showpagefilter = "yes";
           $showdatafilter = "yes";
           return view('pages.sales', compact('breadcrumbs', 'activelink', 'showpagefilter', 'showdatafilter'));
        }
        //finance page
        public function finance(){
           $breadcrumbs = '<li>Pages</li><li class="active"><a href="' . $this->url->to('/') . '/finance">Finance</a></li>';
           $activelink = "finance";
           $showpagefilter = "yes";
           $showdatafilter = "yes";
           return view('pages.finance', compact('breadcrumbs', 'activelink', 'showpagefilter', 'showdatafilter'));
        }
        //legal page
        public function legal(){
           $breadcrumbs = '<li>Pages</li><li class="active"><a href="' . $this->url->to('/') . '/legal">Legal</a></li>';
           $activelink = "legal";
           $showpagefilter = "yes";
           $showdatafilter = "yes";
           return view('pages.legal', compact('breadcrumbs', 'activelink', 'showpagefilter', 'showdatafilter'));
        }
        //credit officer status page
        public function cos($branchname, $name){
               $branchnamee = $this->replace_dashes($branchname);
               $branchnamee = ucwords($branchnamee);
               $namee = $this->replace_dashes($name);
               $namee = ucwords($namee);
               $breadcrumbs = '<li class="active"><a href="' . $this->url->to('/') . '/credit-officer-status/' . $branchname . '/' . $name . '">Credit Officer Status</a></li> ';
               return view('pages.cos', compact('breadcrumbs', 'namee', 'branchname', 'branchnamee', 'name'));
        }
        //branch company KPI page
        public function bckpi($branchname){
               $branchnamee = $this->replace_dashes($branchname);
               $branchnamee = ucwords($branchnamee);
               $breadcrumbs = '<li class="active"><a href="' . $this->url->to('/') . '/branch_company_kpi/' . $branchname . '">' . $branchnamee . '</a></li>';
               return view('pages.bckpi', compact('breadcrumbs', 'branchnamee'));
        }
        //credit officer sales KPI page
        public function coskpi($branchname, $name){
               $branchnamee = $this->replace_dashes($branchname);
               $branchnamee = ucwords($branchname);
               $namee = $this->replace_dashes($name);
               $namee = ucwords($namee);
               $breadcrumbs = '<li class="active"><a href="' . $this->url->to('/') . '/credit-officer-sales-kpi/' . $branchname . '/' . $name . '">Credit Officer Sales KPI</a></li> ';
               return view('pages.coskpi', compact('breadcrumbs', 'namee', 'branchname', 'branchnamee', 'name'));
        }
        //disputes page
        public function disputes($name){
               $breadcrumbs = '<li><a href="' . $this->url->to('/') . '/disputes">Disputes</a></li>';
               $officername = $name;
               return view('pages.disputes', compact('breadcrumbs', 'officername'));
        }
        //OB page
        public function ob($name){
               $breadcrumbs = '<li><a href="' . $this->url->to('/') . '/ob">OB</a></li>';
               $officername = $name;
               return view('pages.ob', compact('breadcrumbs', 'officername'));
        }
        //client total due page
        public function ctd(){
               $breadcrumbs = '<li><a href="' . $this->url->to('/') . '/client-total-due">Client total due</a></li>';
               $branchnamee = "Corporate";
               $namee = "Dwayne Johnson";
               return view('pages.ctd', compact('breadcrumbs', 'branchnamee', 'namee'));
        }

}
