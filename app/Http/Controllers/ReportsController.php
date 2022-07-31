<?php

namespace App\Http\Controllers;
use App\Models\Bill;
use App\Models\VoterInfo;
use App\Models\FlatInformation;
use App\Models\Months;
use App\Models\Years;
use App\Models\Expence;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use DateTime;

class ReportsController extends Controller
{
    public function index(){
    	$months= Months::all();
    	$years= Years::all();
        $bills= Bill::all();
    	return view('reports.index', ['years' => $years, 'months' => $months, 'bills' => $bills]);
    }


    public function search( Request $request){

        $months= Months::all();
        $years= Years::all();
        $expences= Expence::all();

        $type= (int)$request->report_type;
        if($type ==1){
        $from_month= (int)$request->from_month;
        $from_year= (int)$request->from_year;
        $to_month= (int)$request->to_month;
        $to_year= (int)$request->to_year;

        // $from_year= DB::table('years')->where('id', $from_year)->value('year');
        // $to_year= DB::table('years')->where('id', $to_year)->value('year');

        // converting input month and year to date
        //to year
        $str_date_to= $to_year."-".$to_month."-01";
        $date_to = new DateTime($str_date_to);
        $date_to = $date_to->format('Y-m-d');
        //from year
        $str_date_from= $from_year."-".$from_month."-01";
        $date_from = new DateTime($str_date_from);
        $date_from = $date_from->format('Y-m-d');



        $start_month= DB::table('months')->where('id', $from_month)->value('month_name');
        $end_month= DB::table('months')->where('id', $to_month)->value('month_name');
        //query
        $bills= DB::table('billing_info') 
                ->whereBetween('date_for_query', [ $date_from, $date_to ])
                ->get();

        $successTxt = "Report From $start_month $from_year to $end_month $to_year";

    	return view('reports.search', ['bills' => $bills,'type' => $type, 'successTxt'=> $successTxt ]);
    }
    else{
        $from_month= (int)$request->from_month;
        $from_year= (int)$request->from_year;
        $to_month= (int)$request->to_month;
        $to_year= (int)$request->to_year;

        // $from_year= DB::table('years')->where('id', $from_year)->value('year');
        // $to_year= DB::table('years')->where('id', $to_year)->value('year');

        // converting input month and year to date
        //to year
        $str_date_to= $to_year."-".$to_month."-01";
        $date_to = new DateTime($str_date_to);
        $date_to = $date_to->format('Y-m-d');
        //from year
        $str_date_from= $from_year."-".$from_month."-01";
        $date_from = new DateTime($str_date_from);
        $date_from = $date_from->format('Y-m-d');

        //query
        $expences= DB::table('expences')
                //->select('*') 
                ->whereBetween('exp_date', [ $date_from, $date_to ]) 
                ->get();

        $start_month= DB::table('months')->where('id', $from_month)->value('month_name');
        $end_month= DB::table('months')->where('id', $to_month)->value('month_name');
        $successTxt = "Report From $start_month $from_year to $end_month $to_year";
        
        return view('reports.search', ['expences' => $expences,'type' => $type, 'successTxt'=> $successTxt ]);
    }

    }
}
