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
                'client_name' => $request->client_name,
                'client_email' => $request->client_email,
                'client_message' => $request->client_message,
            ];

            Mail::to('sanctifysoft@gmail.com')->send(new ClientMail($details));
            DB::commit();
            return response()->json(['status' => true, 'message' => 'Message sent successfully']);
        } catch (\Throwable $e) {
            report($e);
            \DB::rollback();
            return response()->json(['status' => false, 'error' => $e->getMessage()]);
        }
    }

    public function blogDetails(Blog $blog)
    {
        $site_info = SiteInfo::first();
        $blog->where('status', '=', 1)->firstOrFail();
        return view('blog_details', compact('blog', 'site_info'));
    }
}
