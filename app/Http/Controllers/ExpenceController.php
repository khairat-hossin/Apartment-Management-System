<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Expence;
use App\Models\Employee;
use App\Models\Committee;
use App\Models\post;
use App\Http\Requests;
use App\Http\Response;
use DateTime;
use PDF;

class ExpenceController extends Controller
{
    public function index(){
    	$exp_list= Expence::paginate(8);
    	return view('expences/index', compact('exp_list'));
    }
    public function create(){
        $employees= Employee::all();
        $committee= Committee::all();
    	return view('expences.create', ['employees' => $employees, 'committee' => $committee]);
    }
    public function store(Request $request){
        $exp_by= (int)$request->expence_receiver;
        $exp_auth_by= (int)$request->expence_auth;
        $exp_by= DB::table('employees')->where('id', $exp_by)->value('firstname');
        $exp_auth_by= DB::table('commitees')->where('id', $exp_auth_by)->value('name');
        $expence = new Expence();
       /* $temp= str_replace('/', '-',$request->exp_date);
        $date = new DateTime($temp);
        $expence->exp_date=  $date->format('Y-m-d H:i:s');*/
        $expence->exp_date= date('Y-m-d', strtotime($request->pay_date));
        $expence->exp_amount= $request->exp_amount;
        $expence->exp_details= $request->exp_details;
        $expence->exp_by= $exp_by;
        $expence->exp_auth_by= $exp_auth_by;
        $expence->save();
        $exp_list = Expence::paginate(5); 
        return view('expences.index', compact('exp_list'));
    }
    public function downloadPDF($id){

        $expence= Expence::find($id);
            
        $pdf= PDF::loadView('expences.pdf', compact('expence')); 
        return view('expences.pdf', compact('expence'));
    }
    public function destroy($id){
        Expence::where('id', $id)->delete();
         return redirect()->intended('/expences');
    }
}
