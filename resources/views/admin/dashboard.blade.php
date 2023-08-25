@extends('layouts.admin')

@section('title', 'Sanctifysoft Dashboard')
    
@section('admin_content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Primary Card</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">Warning Card</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">Success Card</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">Danger Card</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card mb-4">
                <div class="card-header">
                    Client Messages
                </div>

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
                                <th>Client Name</th>
                                <th>Company Name</th>
                                <th>Client Email</th>
                                <th>Client Number</th>
                                <th>Message Delivery Time</th>
                                <th>Message Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contacts as $key => $contact)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $contact->client_name }}</td>
                                <td>{{ $contact->company }}</td>
                                <td>{{ $contact->client_email }}</td>
                                <td>{{ $contact->client_phn_number }}</td>
                                <td>{{ $contact->created_at->diffForHumans(); }}</td>
                                <td>
                                    @if($contact->status == 0)
                                    <span class="badge bg-secondary">Pending</span>
                                    @else
                                    <span class="badge bg-success">Replied</span>
                                    @endif
                                </td>
                                <td colspan="2">
                                    <a href="{{ route('admin.reply.message', $contact->id) }}" class="btn btn-sm btn-secondary">
                                        <i class="fa fa-reply"></i>
                                    </a>
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