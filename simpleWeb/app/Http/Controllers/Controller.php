<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Model\humans;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests; 
    public function view(){
        $firstname=$_GET['name'];
        $password=$_GET['password'];
        $people= humans::where('first_name',$firstname)->where('password',$password)->get(); 
        if (count($people)){
            $result=humans::all();
            return view('home',compact('result'));
            
        }else{
            return view('login');
        }
        }
    public function login(){
        return view('login');
    }            
    public function goHome(){
        $result=humans::all();
        return view('home',compact('result'));
    }
    public function insertInfo(Request $request){
        $request->validate([
        'first_name'=>'required',
        'middle_name'=>'required',
        'last_name'=>'required',
        'email'=>'required|email'
        ]);
        $human=new humans([
        'first_name'=>$request->get('first_name'),
        'middle_name'=>$request->get('middle_name'),
        'last_name'=>$request->get('last_name'),
        'age'=>$request->get('age'),
        'address'=>$request->get('address')
        ]);
        $human->save();
        $result=humans::all();
        return view('home',compact('result'));
        
        }
        public function deleteInfo($id){
         
            DB::delete('delete from humans where id = ?',[$id]);
            return redirect()->route('goHome');
        }

        public function updateInfo($id){
            // $request->validate([
            // 'first_name'=>'required',
            // 'middle_name'=>'required',
            // 'last_name'=>'required',
            // 'email'=>'required|email'
            // ]);
            $result = humans::find($id);
             return view('update',compact('result'));
            
            }
}

