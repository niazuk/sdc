<?php

namespace App\Http\Controllers;

use App\SubmitDebtForm;
use Request;

class SubmitDebtFormController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact = [];
        $contact = Request::all();    
        SubmitDebtForm::create(Request::all());
        return redirect()->action('HomeController@mail', $contact);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubmitDebtForm  $submitDebtForm
     * @return \Illuminate\Http\Response
     */
    public function show(SubmitDebtForm $submitDebtForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubmitDebtForm  $submitDebtForm
     * @return \Illuminate\Http\Response
     */
    public function edit(SubmitDebtForm $submitDebtForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubmitDebtForm  $submitDebtForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubmitDebtForm $submitDebtForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubmitDebtForm  $submitDebtForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubmitDebtForm $submitDebtForm)
    {
        //
    }
}
