<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employee;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function employee()
    {
        return view('employee.employee');
    }
    public function search(Request $request){

$employee=User::where('name','LIKE', '%' .$request->employee . '%')->get();

       $output= '<div class="table100-head">
        <table>
            <thead>
                <tr class="row100 head">
                    <th class="cell100 column1">Name</th>
                    <th class="cell100 column5">Select</th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="table100-body js-pscroll">
        <table>
            <tbody id="employee_list">
                
            ';

    foreach($employee as $data){

             $output .='  <tr class="row100 body">
					<td class="cell100 column1">'. $data->name.'</td>
					
					<td class="cell100 column5"><button style=" color:white  ; outline: none !important;border: none; width: 100px;background: #c3a8a8; height: 50px;">
                    <a id="form" value="'.$data->id.'"> Select</a>
                    </button></td>
			  </tr> ';
              
            }
        $output.='</tbody>
                  </table>
          </div> ';
            return $output;
    }

    public function save_employee(Request $request){
        $validatedData =   $this->validate($request, [
            'email' => 'required|unique:employees',
        ]);
        $user = Employee::create($request->all());
        return redirect()->route('employee_list');
    }

public function employee_list(){
    $employee_list = Employee::all();
    return view('employee.employee_list',compact('employee_list'));
}


public function remove($id){
    Employee::where('id',$id)->delete();
    return back();
}


public function load_data(){
    $employee=Employee::all();
       $output= '<div class="table100-head">
        <table>
            <thead>
                <tr class="row100 head">
                    <th class="cell100 column1">Name</th>
                    <th class="cell100 column1">Email</th>
                    <th class="cell100 column1">phone</th>


                    <th class="cell100 column5">Select</th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="table100-body js-pscroll">
        <table>
            <tbody id="employee_list">     
            ';

    foreach($employee as $data){
             $output .='  <tr class="row100 body">
					<td class="cell100 column1">'. $data->name.'</td>		
					<td class="cell100 column1">'. $data->email.'</td>	
					<td class="cell100 column1">'. $data->phone.'</td>			


					<td class="cell100 column5">              
                    <button style=" color:white  ; outline: none !important;border: none; width: 100px;background: #c3a8a8; height: 50px;">
                    <a id="del_data" value="'.$data->id.'"> Delete</a>
                    </button>      
                    </td>
			  </tr> ';
              
            }

        $output.='</tbody>
                  </table>
          </div> ';
            return $output;
}

public function del_data(Request $request){
Employee::where('id',$request->id)->delete();
return 'sss';
}

}