
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-7">
                <div class="card mt-5">
                    <div class="card-body">

                            <h3 class="card-title">Edit My Profile</h3>

                            @if(session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <i class="fas fa-check-circle mr-2"></i>
                                    {!! session()->get('success') !!}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif



                        <form action="#" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Change Name</label>
                                <input
                                type="text"
                                name="name"
                                id="name"
                                class="form-control @error('name') is-invalid @enderror"
                                value="{{\Illuminate\Support\Facades\Auth::user()->name}}"
                                >
                                @error('name')
                                <small class="invalid-feedback">
                                    {{ $message }}
                                </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Change Email</label>
                                <input
                                type="email"
                                name="email"
                                id="email"
                                class="form-control @error('email') is-invalid @enderror"
                                value="{{\Illuminate\Support\Facades\Auth::user()->email}}"
                                >
                                @error('email')
                                <small class="invalid-feedback">
                                    {{ $message }}
                                </small>
                                @enderror

                            </div>
                            <div class="text-right">

                                <a href="{{ route('profile') }}" class="btn-link text-decoration-none">Cancel</a>
                                <button class="btn btn-dark ml-2 ">
                                    Update My Profile
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
