<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('admin.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $validate = Validator::make($request->all(), [
                'title' => 'required|unique:blogs',
                'backend_tech' => 'required',
                'frontend_tech' => 'required',
                'description' => 'required',
                'thumbnail' => 'required|image',
            ]);
            if($validate->fails()){
              return back()->withErrors($validate->errors())->withInput();
            }

            $blog = Blog::create($request->all());

            $thumbnail = $request->file('thumbnail');
            $slug = Str::slug($request->title, '-');


            if($thumbnail){
                $extension = $thumbnail->getClientOriginalExtension();
                $fileNameToStore = $slug.'_'.time().'.'.$extension; // Filename to store
                $destinationPath = 'files/blogs';
                $thumbnail->move(public_path($destinationPath), $fileNameToStore);
                $blog->thumbnail = 'files/blogs/'.$fileNameToStore;
            }
            $blog->save();
            notify()->success('Blog stored successfully', '');
            DB::commit();
            return redirect()->route('admin.blog.index');
            
        } catch (\Throwable $e) {
            report($e);
            DB::rollback();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('admin.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        DB::beginTransaction();
        try {
            $validate = Validator::make($request->all(), [
                'title' => 'required',
                'backend_tech' => 'required',
                'frontend_tech' => 'required',
                'description' => 'required',
                'thumbnail' => 'nullable|image',
            ]);
            if($validate->fails()){
              return back()->withErrors($validate->errors())->withInput();
            }

            $blog->update($request->all());

            $thumbnail = $request->file('thumbnail');
            $slug = Str::slug($request->title, '-');
            if($thumbnail){
                if ($request->old_thumbnail) {
                    unlink($request->old_thumbnail);
                }

                $extension = $thumbnail->getClientOriginalExtension();
                $fileNameToStore = $slug.'_'.time().'.'.$extension; // Filename to store
                $destinationPath = 'files/blogs';
                $thumbnail->move(public_path($destinationPath), $fileNameToStore);
                $blog->thumbnail = 'files/blogs/'.$fileNameToStore;
            }

            $blog->save();
            notify()->success('Blog updated successfully', '');
            DB::commit();
            return redirect()->back();
            
        } catch (\Throwable $e) {
            report($e);
            DB::rollback();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        DB::beginTransaction();
        try {
            if ($blog->thumbnail) {
                unlink($blog->thumbnail);
            }
            $blog->delete();
            notify()->success('Blog deleted successfully', '');

            DB::commit();
            return redirect()->back();
        } catch (\Throwable $e) {
            report($e);
            DB::rollback();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
