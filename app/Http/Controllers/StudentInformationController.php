<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students  = DB::table('students')->get();
        return view('home', ['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        DB::table('students')->insert([
            "name"=>$request->name,
            "subject"=>$request->subject,
            "marks"=>$request->marks,
        ]);
        return redirect(route("home"))->with("message", "Student Added");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = DB::table("students")->find($id);
        return view('edit', ['student'=>$students]);

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
        DB::table('students')->where('id', $id)->update([
            "name"=>$request->name,
            "subject"=>$request->subject,
            "marks"=>$request->marks,
        ]);
        return redirect(route('home'))->with("message", "Student Update Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("students")->where("id", $id)->delete();
        return redirect(route('home'))->with("message", "Student Deleted Successfully");
    }
}
