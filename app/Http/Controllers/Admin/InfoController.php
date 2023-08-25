<?php

namespace App\Http\Controllers\Admin;

use App\Models\SiteInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class InfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $site_info = SiteInfo::first();
        return view('admin.info.edit', compact('site_info'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SiteInfo $site_info)
    {
        $validate = Validator::make($request->all(), [
            'phn_number' => 'required|numeric',
            'gmail' => 'required|email',
            'location' => 'required',
        ]);

        if($validate->fails()){
          return back()->withErrors($validate->errors())->withInput();
        }

        \DB::beginTransaction();
        $site_info->update($request->all());
        \DB::commit();
        return redirect()->back()->with('success', 'Info updated successfully');
        try {
            
        } catch (\Throwable $e) {
            report($e);
            \DB::rollback();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    
}
