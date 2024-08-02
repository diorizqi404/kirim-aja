<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\User;
use App\Models\FormData;
use App\Mail\FormDataStored;
use App\Mail\Thanks;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class FormDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('thanks');
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
    public function store(Request $request, $form_id)
    {
        $data = [
            'form_id' => $form_id,
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
            'ip_address' => $request->getClientIp(),
            'site' => $request->getHost(),
        ];

        FormData::create($data);
        $formName = Form::where('form_id', $form_id)->first()->name;
        $user_id = Form::where('form_id', $form_id)->first()->user_id;
        $userMail = User::where('id', $user_id)->first()->email;

        // EMAIL KE PEMILIK FORM
        Mail::to($userMail)->send(new FormDataStored($data, $formName));

        // EMAIL KE PENGISI FORM
        Mail::to($request->email)->send(new Thanks($data, $formName));

        return redirect(route('thanks'));
    }

    /**
     * Display the specified resource.
     */
    public function show(FormData $formData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FormData $formData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FormData $formData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FormData $formData)
    {
        //
    }
}
