<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\SiteInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $site_info = SiteInfo::first();
        return view('index', compact('site_info'));
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'client_name' => 'required',
            'company' => 'required',
            'client_phn_number' => 'required|numeric',
            'client_email' => 'required|email',
            'client_message' => 'required',
        ]);

        if($validate->fails()){
          return back()->withErrors($validate->errors())->withInput();
        }

        \DB::beginTransaction();
        Contact::create($request->all());
        \DB::commit();
        return redirect()->back()->with('success', 'Message sent successfully');
        try {
            
        } catch (\Throwable $e) {
            report($e);
            \DB::rollback();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
