<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //    $students=\App\Student::all();
    //    return view('index',compact('students'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    }
    public function create()
    {
        return view('91375/student');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //trial 1
        // $this->validate($request, [
        //     'std_no'=>'required',
        //     'fullname'=>'required',
        //     'DOBirth'=>'required',
        //     'address'=>'required',
        //     ]);
       
        
        //trial 2 $student= new \App\Student;
        $student->std_no=$request->get('std_no');
        $student->fullname=$request->get('fullname');
        $student->DOBirth=$request->get('DOBirth');
        $student->address=$request->get('address');

        $student->save();

        return redirect('students')->with('success','A new student has been added!');
        // $std_no = $request->input('std_no');
        // $fullname = $request->input('fullname');
        // $DOBirth = $request->input('DOBirth');
        // $address = $request->input('address');

        // $data = array('std_no' =>$std_no , 'fullname' =>$fullname , 'DOBirth' =>$DOBirth , 'address' =>$address);

        // DB::table('students')->insert($data);
        // echo "Success";

          
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
