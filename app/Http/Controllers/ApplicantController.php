<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $applicants = Applicant::all();
        // return view('applicant.index',compact('applicants'));
        $applicants = Applicant::get();
        return view('applicant',compact('applicants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addRecord()
    {
        return view('add-record');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeRecord(Request $request)
    {
       
        $data = $request->all();
        Applicant::create($data);
        return redirect('applicant');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $applicants = Applicant::find($id);
        // return view('applicants.show')->with('applicants', $applicants);   
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function editRecord($id)
    {
        $data=Applicant::where('id','=',$id)->first();
        return view('edit-record' ,compact('data'));
        // $data = Applicant::find($id);
        // return view('applicants.edit')->with('applicants', $applicant);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateRecord(Request $request, $id)
    {
        $request->validate([
            'gender'=>'required'
        ]);
        $applicants = Applicant::find($id);
        $data = $request->all();
        $applicants->update($data);
        return redirect('applicant');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteRecord($id)
    {
        // Applicant::where('id','=',$id)->delete();

        Applicant::destroy($id);
        return redirect('applicant');
    }
}
