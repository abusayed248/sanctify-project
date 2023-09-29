@extends('layouts.admin')

@section('title', 'All Blogs')
    
@section('admin_content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="row mt-4 mb-4">
                <div class="col-xl-6">
                    <h1>Blog</h1>
                </div>
                <div class="col-xl-6">
                    <div class="text-end">
                        <a href="{{ route('admin.blog.create') }}" class="btn btn-success px-4 py-2 rounded-pill">Add+</a>
                    </div>
                </div>
            </div>
            
            <div class="card mb-4">

                 @if(Session::has('error'))
                <div class="row">
                    <div class="col-xl-12">
                        <div class="alert alert-danger mt-4" role="alert">
                          {{ Session::get('error') }}
                        </div>
                    </div>
                </div>
                @endif

                @if(Session::has('success'))
                <div class="row">
                    <div class="col-xl-12">
                        <div class="alert alert-success mt-4" role="alert">
                          {{ Session::get('success') }}
                        </div>
                    </div>
                </div>
                @endif
                    
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Thumbnail</th>
                                <th>Title</th>
                                <th>Backend</th>
                                <th>Frontend</th>
                                <th>Created Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($blogs as $key => $blog)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td><img src="{{ asset($blog->thumbnail) }}" height="40" width="60" alt=""></td>
                                <td>{{ $blog->title }}</td>
                                <td>{{ $blog->backend_tech }}</td>
                                <td>{{ $blog->frontend_tech }}</td>
                                <td>{{ $blog->created_at->diffForHumans() }}</td>
                                <td>
                                    @if($blog->status == 0)
                                    <span class="badge bg-danger">Inactive</span>
                                    @else
                                    <span class="badge bg-success">Active</span>
                                    @endif
                                </td>
                                <td colspan="2">
                                    <a href="{{ route('admin.blog.edit', $blog->id) }}" class="btn btn-sm btn-success p-2">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <form class="d-inline p-2" method="post" action="{{route('admin.blog.destroy', $blog->id)}}">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                           @endforeach
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>

@endsection