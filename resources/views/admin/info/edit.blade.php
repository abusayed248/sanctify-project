@extends('layouts.admin')

@section('title', 'Edit Info')
    
@section('admin_content')

<div id="layoutSidenav_content">
    <main>
        <div class="container px-4">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <h1 class="mt-4">Dashboard</h1>

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
            
                    <div class="card mb-4">
                        <div class="card-body">
                            <form action="{{ route('admin.site-info.update', $site_info->id) }}" method="POST">
                                @csrf

                              <div class="mb-3">
                                <label for="phn_number" class="form-label">Phone Number</label>
                                <input type="text" value="{{ $site_info->phn_number }}" required class="form-control" id="phn_number" name="phn_number">

                                @error('phn_number')
                                    <strong class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </strong>
                                @enderror
                              </div>

                              <div class="mb-3">
                                <label for="gmail" class="form-label">Gmail</label>
                                <input type="email" value="{{ $site_info->gmail }}" required class="form-control" id="gmail" name="gmail">

                                @error('gmail')
                                    <strong class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </strong>
                                @enderror
                              </div>

                              <div class="mb-3">
                                <label for="location" class="form-label">Location</label>
                                <input type="text" value="{{ $site_info->location }}" required class="form-control" id="location" name="location">

                                @error('location')
                                    <strong class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </strong>
                                @enderror
                              </div>
                              
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </main>
</div>

@endsection