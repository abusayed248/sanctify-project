<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Mail\ClientMail;
use App\Models\SiteInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

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
        $blogs = Blog::query()->where('status', '=', 1)->latest()->paginate(3);
        return view('index', compact('site_info', 'blogs'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $details = [
                'client_name' => $request->name,
                'client_email' => $request->email,
                'client_message' => $request->message,
            ];

            Mail::to('abusayed.dev2023@gmail.com')->send(new ClientMail($details));
            DB::commit();
            notify()->success('Message sent successfully', '');
            return redirect()->back();
        } catch (\Throwable $e) {
            report($e);
            \DB::rollback();
            notify()->error($e->getMessage(), '');
            return redirect()->back();
        }
    }

    public function blogDetails(Blog $blog)
    {
        $site_info = SiteInfo::first();
        $blog->where('status', '=', 1)->firstOrFail();
        return view('blog_details', compact('blog', 'site_info'));
    }
}
