<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\OwnerInfo;
use App\Models\FlatInformation;
use App\Models\post;
use App\Http\Requests;
use App\Http\Response;
use DateTime;

class OwnerInformatiionController extends Controller{
	public function __construct()
    {
        $this->middleware('auth');
    }

	public function index(){
       // $addroom = Department::paginate(5);

       // return view('apartment-mgmt/addroom/index', ['addroom' => $departments])
        //$owner_info= OwnerInfo::all()->paginate(5);
        //$owner_info= OwnerInfo::where()->paginate(5);
        //$cout= $owner_info->count();
        $owner_info = OwnerInfo::paginate(8); 
        return view('owner-information.index', compact('owner_info'));
	}

    public function create(){
        $flats= FlatInformation::all();
        return view('owner-information.create', compact('flats'));
    }

	public function store(Request $request){
       // if($this->validateInput($request) ==true){
        $owners = new OwnerInfo();
        $owners->first_name= $request->first_name;
        $owners->mid_name= $request->mid_name;
        $owners->last_name= $request->last_name;
        $owners->flat_no= $request->flat_no;
        $owners->car_park= $request->car_park;
        $owners->mobile_no= $request->mobile_no;
        $owners->n_id= $request->n_id;
        //$temp= str_replace('/', '-',$request->birthDate);
        $date = new DateTime($request->birthDate);
        $owners->date_of_birth=  $date->format('Y-m-d');
        $owners->present_add= $request->present_add;
        $owners->parmanent_add= $request->parmanent_add;
        $owners->emergency_contact= $request->emergency_contact;
        $path = $request->file('picture')->store('avatars');
        $owners->picture= $path;
        $owners->save();
        $owner_info = OwnerInfo::paginate(5); 
        return view('owner-information.index', compact('owner_info'));
            
}
    public function show($id){
    	$owner_info = OwnerInfo::find($id);
        // Redirect to department list if updating department wasn't existed
        if ($owner_info == null) {
            return redirect()->intended('/owner-information');
        }
        return view('owner-information.show', ['owner_info' => $owner_info]);
    }

    public function edit($id)
    {
        $owner_info = OwnerInfo::find($id);
        $flats= FlatInformation::find($id);
        // Redirect to department list if updating department wasn't existed
        if ($owner_info == null) {
            return redirect()->intended('/owner-information');
        }
        $temp= str_replace('-', '/',$owner_info->date_of_birth);
        $owner_info->date_of_birth=$temp;
        return view('owner-information.edit', ['owner_info' => $owner_info, 'flats' => $flats]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $owner_info = OwnerInfo::findOrFail($id);
       // $this->validateInput($request);
        $temp= str_replace('/', '-',$request->birthDate);
        $date = new DateTime($temp);
        $input = [
            'first_name'=> $request['first_name'],
            'mid_name' => $request['mid_name'],
            'last_name'=> $request['last_name'],
            'flat_no' => $request['flat_no'],
            'car_park'=> $request['car_park'],
            'mobile_no' => $request['mobile_no'],
            'n_id' => $request['n_id'],
            'date_of_birth' => $date,
            'present_add' => $request['present_add'],
            'parmanent_add' => $request['parmanent_add'],
            'emergency_contact' => $request['emergency_contact'],

        ];
        if ($request->file('picture')) {
            $path = $request->file('picture')->store('avatars');
            $input['picture'] = $path;
        }
        OwnerInfo::where('id', $id)
            ->update($input);
        return redirect()->intended('owner-information');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OwnerInfo::where('id', $id)->delete();
         return redirect()->intended('owner-information')->with('success','Member updated successfully');;
    }

   /*private function validateInput(Request $request){
        $this->validate($request, [
            'first_name'=> 'required|max:20',
            'mid_name' => 'required|max:50',
            'last_name'=> 'required|max:20',
            'flat_no' => 'required|max:4294967295',
            'car_park'=> 'required|integer|max:4294967295',
            'mobile_no' => 'required|integer|max:4294967295',
            'email_id' => 'required|email|max:50',
            'n_id' => 'required|integer|max:4294967295',
            'date_of_birth' => 'required',
            'present_add' => 'required|max:250',
            'parmanent_add' => 'required|max:250',
            'emergency_contact' => 'required|max:250',
            'picture' => 'image|mimes:jpg,png'
        ] );
    }*/

}