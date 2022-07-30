<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Requests;
use App\Committee;
use App\VoterInfo;
use App\OwnerInfo;
use App\FlatInformation;

class CommitteeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

	public function index(){
		$com= Committee::paginate(8);
		return view('managingcommittee.index', compact('com'));
	}


	public function create(){
		$voters= VoterInfo::all();
		$owners= OwnerInfo::all();
        $flats = FlatInformation::all();
		return view('managingcommittee.create', ['voters' => $voters , 'owners' => $owners, 'flats' => $flats]);
	}
	public function store(Request $request){
		$newMember= new Committee();
		$newMember->name= $request->name;
        $newMember->designation= $request->designation;
        $newMember->flat_no= $request->flat_no;
        $newMember->voter_id= $request->voter_id;
        $newMember->mobile_no= $request->mobile_no;
        $newMember->email_id= $request->email_id;
        $newMember->present_add= $request->present_add;
        $path = $request->file('picture')->store('avatars');
        $newMember->picture= $path;
        $newMember->save();
        $com = Committee::all();
        return view('managingcommittee.index', ['com' => $com]);
	}
    public function destroy($id){
        Committee::where('id', $id)->delete();
         return redirect()->intended('/managingcommittee');

    }
}
