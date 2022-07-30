<?php

namespace App\Http\Controllers;
//use App\employees_db;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\FlatInfo;
use App\Models\Post;
use App\Http\Requests;
use App\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Models\Parking;
//use App\Http\Request;

/**
* 
*/


class ApartmentController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

	public function index(){
        $apartments = FlatInfo::paginate(8);
        return view('apartment-mgmt/index', compact('apartments'));
	}
	 public function create()
    {
        $flats=  FlatInfo::all();
        return view('apartment-mgmt.create', compact('flats'));
    }

        public function store(Request $request)
    {
        //$this->validate($request);
         $new_flat= new FlatInfo();

        $new_flat->flat_no = $request['flat_no'];
        $new_flat->flat_size = $request['flat_size'];
        $new_flat->car_park = $request['car_park'];
        $new_flat->note = $request['note'];
        $new_flat->save();

        return redirect()->intended('apartment-mgmt');
    }
      public function show($id)
    {
        $apartments = FlatInfo::find($id);
        // Redirect to department list if updating department wasn't existed
        if ($apartments == null) {
            return redirect()->intended('/apartment-mgmt');
        }
        return view('apartment-mgmt.show', ['apartments' => $apartments]);
    }
    public function edit($id)
    {
        $apartments = FlatInfo::find($id);
        // Redirect to department list if updating department wasn't existed
        if ($apartments == null) {
            return redirect()->intended('/apartment-mgmt');
        }

        return view('apartment-mgmt/edit', ['apartments' => $apartments]);
    }

    public function update(Request $request, $id)
    {
        $apartments = FlatInfo::findOrFail($id);
        //$this->validateInput($request);
        $input = [
            'flat_no' => $request['flat_no'],
            'flat_size' => $request['flat_size'],
            'car_park' => $request['car_park'],
            'note' => $request['note']
        ];
        FlatInfo::where('id', $id)->update($input);
        
        return redirect()->intended('apartment-mgmt');
    }
       public function destroy($id)
    {
        FlatInfo::where('id', $id)->delete();
         return redirect()->intended('apartment-mgmt');
    }
    private function validateInput($request) {
        $this->validate($request, [
        'flat_size' => 'required|max:10!number',
        'note' => 'required|max:250!text'
    ]);
    }


}