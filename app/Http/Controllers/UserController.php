<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
class UserController extends Controller
{
    //
    public function job_list(){
        return view('job.list');
    }
    public function board_main(){
        return view('board.main');
    }
    public function board_paint(){
        return view('board.paint');
    }
    public function board_blast(){
        return view('board.blast');
    }
    public function board_add(){
        return view('board.paint_add');
    }
    public function employee_add(){
        $employees = '';
        if(User::all()){
            $employees = User::all();
        }

        return view('employee.add',compact('employees'));
    }
    public function employee_analytics(){
        return view('employee.analytics');
    }
    
    // crud

    public function create(Request $request){
        $data = $request->all();
unset($data['_token']);
$data['password'] = Hash::make($request->passeord);
        $obj = new User();

        $obj->create($data);
        return redirect(url('/employee/add'));
    }
    public function edit(Request $request){
        $data = $request->all();
        unset($data['_token']);
        User::where('id',$request->id)->update($data);
        return redirect(route('employee.add'));

    }
    public function destroy($id){
        User::where('id',$id)->delete();
        return redirect(route('employee.add'));
    }
    
}
