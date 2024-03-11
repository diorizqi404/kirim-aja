<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\Models\Form;
use App\Models\FormData;
use App\Models\Token;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Form::where('user_id', Auth::user()->id)->paginate(10);
        $formDataCounts = [];

        foreach ($user as $form) {
            $formDataCounts[$form->form_id] = FormData::where('form_id', $form->form_id)->count();
        }
        $userLogged = Auth::user();
        return view('home', compact('user', 'userLogged', 'formDataCounts'));
    }

    public function storeForm(Request $request)
    {
        $user_id = Auth()->user()->id;
        $request->validate([
            'name' => [
                'required',
                Rule::unique('forms')->where(function ($query) use ($user_id) {
                    return $query->where('user_id', $user_id);
                })
            ],
            'form_description' => 'required',
        ], [
            'name.required' => 'The name field is required.',
            'name.unique' => 'The name has already been taken.',
            'form_description.required' => 'The form description field is required.',
        
        ]);

        $data = [
            'user_id' => Auth()->user()->id,
            'form_id' => Str::random(8),
            'name' => $request->name,
            'form_description' => $request->form_description,
        ];
        Form::create($data);

        return redirect(route('home'))->with('success', 'Form created successfully');
    }
}
