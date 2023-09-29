@extends('layouts.admin')

@section('title', 'Blog Edit')
    
@section('admin_content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="row mt-4 mb-4">
                        <div class="col-xl-6">
                            <h1>Blog Update</h1>
                        </div>
                        <div class="col-xl-6">
                            <div class="text-end">
                                <a href="{{ route('admin.blog.index') }}" class="btn btn-success px-4 py-2 rounded-pill">Back</a>
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
                            <form action="{{ route('admin.blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                              <div class="mb-3">
                                <label for="title" class="form-label">Title <strong class="text-danger">*</strong></label>
                                <input type="text" value="{{ $blog->title }}" name="title" class="form-control" id="title" placeholder="Title...">

                                @error('title')
                                    <strong class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </strong>
                                @enderror
                              </div>

                              <div class="row mb-3">
                                  <div class="col-xl-6">
                                    <label for="backend_tech" class="form-label">Backend Technology <strong class="text-danger">*</strong></label>
                                    <input type="text" value="{{ $blog->backend_tech }}" name="backend_tech" class="form-control" id="backend_tech" placeholder="Backend Technology...">

                                    @error('backend_tech')
                                        <strong class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </strong>
                                    @enderror
                                  </div>

                                  <div class="col-xl-6">
                                    <label for="frontend_tech" class="form-label">Frontend Technology <strong class="text-danger">*</strong></label>
                                    <input type="text" value="{{ $blog->frontend_tech }}" name="frontend_tech" class="form-control" id="frontend_tech" placeholder="Frontend Technology...">

                                    @error('frontend_tech')
                                        <strong class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </strong>
                                    @enderror
                                  </div>
                              </div>

                              <div class="row mb-3">
                                  <div class="col-xl-4">
                                    <label class="form-label">Existing Thumbanail</label>
                                    <img src="{{ asset($blog->thumbnail) }}" height="100" width="200" alt="">
                                  </div>

                                  <div class="col-xl-8">
                                    <label for="thumbnail" class="form-label">Thumbnail <strong class="text-danger">*</strong></label>
                                    <input type="file" name="thumbnail" accept="image/*" class="form-control dropify" id="thumbnail">
                                    <input type="hidden" name="old_thumbnail" value="{{ $blog->thumbnail }}">

                                    @error('title')
                                        <strong class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </strong>
                                    @enderror
                                  </div>
                              </div>

                              <div class="mb-3">
                                <label for="description" class="form-label">Description <strong class="text-danger">*</strong></label>
                                <textarea name="description" id="description" cols="15" rows="5" class="form-control" placeholder="Description...">{{ $blog->description }}</textarea>

                                @error('description')
                                    <strong class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </strong>
                                @enderror
                              </div>

                              <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-control" name="status" id="status">
                                    <option {{ $blog->status == 0?'selected':'' }} value="0">Inactive</option>
                                    <option {{ $blog->status == 1?'selected':'' }} value="1">Active</option>
                                </select>
                              </div>

                              <button type="submit" class="btn btn-success px-4 py-2 rounded-pill">Update</button>
                            </form>
                        </div>
                    </div>                    
                </div>
            </div>
            
        </div>
    </main>
</div>

@endsection

@push('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<script type="text/javascript">
    $('.dropify').dropify();
</script>
@endpush