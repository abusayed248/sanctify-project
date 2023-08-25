@extends('layouts.admin')

@section('title', 'Client Reply Message')
    
@section('admin_content')

<div id="layoutSidenav_content">
    <main>
        <div class="container px-4">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <h1 class="mt-4">Reply Message</h1>

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
                            <form action="{{ route('admin.client.message.reply', $contact->id) }}" method="POST">
                                @csrf

                              <div class="mb-3">
                                <label for="client_email" class="form-label">Client Email</label>
                                <input type="email" value="{{ $contact->client_email }}" readonly class="form-control" id="client_email" name="client_email">
                              </div>

                              <div class="mb-3">
                                <label for="client_message" class="form-label">Client Message</label>
                                <textarea readonly name="client_message" id="client_message" cols="30" rows="10" class="form-control">{{ $contact->client_message }}</textarea>
                              </div>

                              <div class="mb-3">
                                <label for="reply_msg" class="form-label">Reply Message</label>
                                <textarea placeholder="Type your message***" name="reply_msg" id="reply_msg" cols="30" rows="10" class="form-control"></textarea>

                                @error('reply_msg')
                                    <strong class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </strong>
                                @enderror
                              </div>
                              
                              <button type="submit" class="btn btn-primary">Reply</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </main>
</div>

@endsection