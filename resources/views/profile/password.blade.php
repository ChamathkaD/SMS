@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <div class="card  mt-5 border-dark mb-3">
                    <div class="card-body">
                        <h3 class="card-title font-weight-bold">

                            Change Password</h3>
                        <hr>


                        @if(session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fas fa-check-circle mr-2"></i>
                                {!! session()->get('success') !!}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif




                        @if($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                @foreach($errors->all() as $error)
                                    <i class="fas fa-exclamation-circle mr-2"></i>
                                    {{ $error }}
                                    <br>
                                @endforeach

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <form action="{{ route('update.password') }}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="current_password">Current Password</label>
                                <input
                                    class="form-control"
                                    name="current_password"
                                    id="current_password"
                                    type="password"
                                    placeholder="current password"
                                >
                            </div>

                            <div class="form-group">
                                <label for="password">Enter your new Password</label>
                                <input
                                    class="form-control"
                                    name="password"
                                    id="password"
                                    type="password"
                                    placeholder="Enter Your New Password"
                                >
                            </div>

                            <div class="form-group">
                                <label for="password_confirmation">Re enter your new Password </label>
                                <input
                                    class="form-control"
                                    name="password_confirmation"
                                    id="password_confirmation"
                                    type="password"
                                    placeholder="Re Enter Your New Password"
                                >
                            </div>
                            <div class="text-right">
                                <a href="{{ route('profile') }}" class="btn btn-link text-decoration-none">Cancel</a>
                                <input type="submit" value="Change Password" class="btn btn-dark">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
