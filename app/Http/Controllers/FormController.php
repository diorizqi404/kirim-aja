<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\FormData;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct()
     {
         $this->middleware('auth');
     }

    public function index($form_id)
    {
        $domain = $_SERVER['HTTP_HOST'];
        $form = Form::where('form_id', $form_id)->first();
        if ($form_id){
            $form_data = FormData::where('form_id', $form_id)->paginate(10);
        }else {
            return redirect()->back()->with('error', 'Form not found');
        }
        return view('form', compact('form_data', 'domain', 'form'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $formData = FormData::where('id', $id)->first();
        if ($formData){
            $formData->delete();
            return redirect()->back()->with('success', 'Form deleted successfully');
        }else {
            return redirect()->back()->with('error', 'Form not found');
        }
    }
}
