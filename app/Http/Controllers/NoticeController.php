<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Post;
use Illuminate\Support\Facades\Redirect;
use App\Notice;
/**
* 
*/
class NoticeController extends Controller
{
	
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index(){


		$notices= Notice::paginate(10);
		return view('notice.index', compact('notices'));

	}
	public function addnotice(){
		return view('notice.addnotice');
	}
	public function store(Request $request){
		if($request->hasFile('file')){

			
			$type= $request->file->getClientOriginalExtension();
			$filename= $request->file->getClientOriginalName();
			$size= $request->file->getClientSize();
			$path= storage_path(). '/files/';

			$notice= new Notice();
			$notice->title= $request->title;
			$date=date("Y-m-d H:i:s",strtotime($request->date));
			$notice->date= $date;
			$notice->file_name= $filename;
			$notice->file_type= $type;
			$notice->file_size= $size;
			$notice->download=$filename;

			$uniqueFileName = uniqid() . $filename;
        	$notice->file=  $uniqueFileName;

        	$notice->save();
        	$request->file->move ( $path , $uniqueFileName);
			$notices= Notice::paginate(10);
		return view('notice.index', compact('notices'));
		}
		else
			return redirect()->intended()->with('no file selected');
	}
	public function download($id){
		$notice= Notice::find($id);
		$path= storage_path().'/files';

		return \Response::download( $path .'/'. $notice->file );
		$notices= Notice::paginate(10);
		return view('notice.index', compact('notices'));

	}
	
}







?>