<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Support\Facades\DB;
use App\Bill;
use App\Months;;
use App\Years;
use App\Employee;
use App\FlatInformation;
use Illuminate\Http\Request;
use PDF;
use DateTime;

class BillController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $bills= Bill::paginate(8);
    	return view('billmanagement/index', ['bills' => $bills]);
    }
    public function create(){
    	$bills= Bill::all();
    	$flats= FlatInformation::all();
    	$months= Months::all();
    	$employees=Employee::all();
    	$years= Years::all();
    	return view('billmanagement/create',['bills'=>$bills, 'flats'=>$flats, 'months'=> $months, 'employees' => $employees, 'years'=> $years]);
    }


    public function monthlybill(){
        $bills= Bill::all();
        $flats= FlatInformation::all();
        $months= Months::all();
        $employees = Employee::select(
                DB::raw("CONCAT(firstname,' ',lastname) AS name"), 'id')
                ->pluck('name', 'id');

        $years= Years::all();
        return view('billmanagement/monthlybill',['bills'=>$bills, 'flats'=>$flats, 'months'=> $months, 'employees' => $employees, 'years'=> $years]);
    }


    public function store(Request $request)
    {
        $bill= new Bill();
        $flat_no = (int)$request->flat_no;
        $flat_no= DB::table('flat_info')->where('id', $flat_no)->value('flat_no');
        $bill->flat_no= $flat_no;
        $bill->pay_date= date('Y-m-d', strtotime($request->pay_date));
        $billing_month = (int)$request->billing_month;
        $billing_month= DB::table('months')->where('id', $billing_month)->value('month_name');
        $billing_year = (int)$request->billing_year;
        // $billing_year= DB::table('years')->where('id', $billing_year)->value('year');

        $date_for_query= $billing_year."-".$billing_month."-01";
        $date_to = new DateTime($date_for_query);
        $date_to = $date_to->format('Y-m-d H:i:s');
        $bill->billing_month= $billing_month;
        $bill->billing_year= $billing_year;
        $bill->service_charge= $request->service_charge;
        $bill->mosjid_bill= $request->mosjid_bill;
        $bill->com_space_service_charge= $request->com_space_service_charge;
        $bill->community_charge= $request->community_charge;
        $bill->emergency_fund= $request->emergency_fund;
        $bill->developmet_fund= $request->developmet_fund;
        $bill->lift_charge= $request->lift_charge;
        $bill->others= $request->others;
        $bill->total_amount= $request->total_amount;
        $bill->paid_by= $request->paid_by;
        $bill->received_by= $request->received_by;
        $bill->date_for_query= $date_to;
        $bill->save();
        return redirect()->intended('/billmanagement');
       
    }
    private function createQueryInput($keys, $request) {
        $queryInput = [];
        for($i = 0; $i < sizeof($keys); $i++) {
            $key = $keys[$i];
            $queryInput[$key] = $request[$key];
        }

        return $queryInput;
    }
      public function destroy($id)
    {
        Bill::where('id', $id)->delete();
         return redirect()->intended('billmanagement');
    }

    public function downloadPDF($id){

        $bills= DB::table('billing_info')
            ->select("billing_info.*", DB::raw("CONCAT(employees.firstname, ' ', employees.lastname) AS receiver_name"))
            ->rightJoin('employees', 'employees.id', '=', 'billing_info.received_by')
            ->first();
            
        $pdf= PDF::loadView('billmanagement.pdf', compact('bills')); 
        return view('billmanagement.pdf', compact('bills'));
    }
    /*
    public function pdf()
    {
        $bills= Bill::find($id);
        $pdf= PDF::loadView('pdf', compact('bills'));
        return $pdf->download('invoice.pdf');
    } */
}
