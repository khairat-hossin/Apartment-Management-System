<?php

namespace App\Http\Controllers;
use App\Models\VoterInfo;
use App\Models\FlatInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\post;
use App\Http\Requests;
use App\Http\Response;
use DateTime;

class VoterInfoController extends Controller
{
    public function index(){
    	$voters= VoterInfo::paginate(8);
    	return view('voter-information/index', compact('voters'));
    }

        public function create(){
            $flats= FlatInformation::all();
        return view('voter-information.create', compact('flats'));
    }

    public function store(Request $request){
        $voters = new VoterInfo();
        $voters->voter_id= $request->voter_id;
        $voters->first_name= $request->first_name;
        $voters->mid_name= $request->mid_name;
        $voters->last_name= $request->last_name;
        $voters->flat_no= $request->flat_no;
        $voters->relationship= $request->relationship;
        $voters->n_id= $request->n_id;
        $temp= str_replace('/', '-',$request->birthDate);
        $date = new DateTime($temp);
        $voters->dob=  $date->format('Y-m-d H:i:s');
        $voters->address= $request->address;
        $voters->phone= $request->phone;
        $voters->email= $request->email;
        $path = $request->file('picture')->store('avatars');
        $voters->picture= $path;
        $voters->save();
        $voters = VoterInfo::paginate(5); 
        return view('voter-information.index', compact('voters'))->with('success','Member updated successfully');
    }
    public function edit($id)
    {
        $voter = VoterInfo::find($id);
        // Redirect to department list if updating department wasn't existed
        if ($voter == null) {
            return redirect()->intended('/voter-information');
        }

        return view('voter-information.edit', ['voter' => $voter]);
    }


   public function update(Request $request, $id)
    {
        $owner_info = VoterInfo::findOrFail($id);
       // $this->validateInput($request);
        $temp= str_replace('/', '-',$request->dob);
        $date = new DateTime($temp);
        $input = [
        	'voter_id'=>$request['voter_id'],
            'first_name'=> $request['first_name'],
            'mid_name' => $request['mid_name'],
            'last_name'=> $request['last_name'],
            'flat_no' => $request['flat_no'],
            'relationship'=> $request['relationship'],
            'n_id' => $request['n_id'],
            'dob' => $request['date'],
            'address' => $request['address'],
            'phone' => $request['phone'],
            'email' => $request['email']

        ];
        if ($request->file('picture')) {
            $path = $request->file('picture')->store('avatars');
            $input['picture'] = $path;
        }
        VoterInfo::where('id', $id)
            ->update($input);
        return redirect()->intended('voter-information');
    }






    public function show($id){
    	$voters = VoterInfo::find($id);
        // Redirect to department list if updating department wasn't existed
        if ($voters == null) {
            return redirect()->intended('/voter-information');
        }
        return view('voter-information.show', ['voters' => $voters]);
    }
    public function destroy($id)
    {
        VoterInfo::where('id', $id)->delete();
         return redirect()->intended('voter-information')->with('success','Member updated successfully');;
    }
}
