<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\DB;
use App\Fees;


class FeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('91375/fees');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validates the form, all fields are required
        
        $this->validate($request, [
            'std_no'=>'required',
            'fullname'=>'required',
            'DOPay'=>'required',
            'amount'=>'required',
            ]);

        
        $fee= new \App\Fees;
        
        $fee->std_no=$request->get('std_no');
        $fee->fullname=$request->get('fullname');
        $fee->DOPay=$request->get('DOPay');
        $fee->amount=$request->get('amount');

        $fee->save();

        return redirect('fees')->with('success','Fee payment has been recorded!');
        echo 'Fee payment has been recorded!';
    }
    
    //search for a single record
    
    public function searchRecord()
    {
        $q = Input::get ('search_id');
        $user = Fees:: where('std_no','LIKE','%'.$q.'%')->get();
        if(count($user)>0)
            return view('91375.search')->withDetails($user)->withQuery($q);
            else return view('91375.home')->withMessage('No record found. Please try again');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //  $fees= Fee::all();
        // foreach($fees as $fee){
        //  return view('91375.totalfees')->withDetails($fee);
        //     else return view('91375.home')->withMessage('No records found. Please try again');
   
        // }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
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
