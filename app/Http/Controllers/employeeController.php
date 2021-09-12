<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class employeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('insert');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)  // this function gets data from views/employee/insert.blade.php
    {
      $employee=new employee;    // instance of employee class
        $employee->emp_name=$request->get('name');    //data from insert.blade.php goes to database
        $employee->emp_pos=$request->get('position');
        $employee->save();        //data gets injected through save function
            echo "<h1><center>Data send successfully.....</center></h1>";
        //    echo "  <a href="/views/show.blade.php" class="btn btn-success">show data</a>"
        //or    return view('show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(employee $employee)  //
    {
        $emp=employee::all();   // object emp shows all data fetched
        return view('show',['emp'=>$emp]); // this gets send in the for each loop key'emp'
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(employee $employee,$id)
    {
      $employee=employee::find($id);
      return('edit',['employee'=>$employee]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employee $employee,$id)
    {
      $emp  =employee::find($id);
      $emp->emp_name=$request->get('name');  // request emp_name from db table and stores in variabe
      $emp->emp_pos=$request->get('position');// request emp_pos from db table and stores in variabe
      $emp->save();
      return redirect('show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(employee $employee,$id)
    {
      $post=employee::find($id); // find() will search for the passed id and save that
     $post->delete();
     return redirect('show');  // the changes will be shown after deletion of column
    }
}
