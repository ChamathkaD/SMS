@extends('layouts.app')

@section('content')
  {{--  <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <div class="card mt-5">
                    <div class="card-body">


                        <div class="row">
                            <div class="col-9 mr-2">
                                <img src="{{ asset('img/woman.png') }}" alt="" width="96">
                                <div class="row">
                                    <div class="col-9 mr-2">

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>--}}

 <div class="container">
     <div class="row d-flex justify-content-center">
         <div class="col-6">
             <div class="card border-dark ml-2 " style="max-width: 540px; margin-top: 160px">
                 <div class="row no-gutters">
                     <div class="col-md-4">
                         <img src="{{ asset('img/woman.png') }}" class="card-img mt-2" alt="...">
                     </div>
                     <div class="col-md-8">
                         <div class="card-body">
                             <h3 class="-text-width font-weight-bold">My Profile</h3>
                             <br>
                             <h4 class="card-title">
                                 <i class="fas fa-user mr-2"></i>
                                 {{ \Illuminate\Support\Facades\Auth::user()->name }}</h4>

                             <h4 class="card-title">
                                 <i class="fas fa-envelope mr-2"></i>
                                 {{ \Illuminate\Support\Facades\Auth::user()->email }}</h4>

                             <p class="card-text"><small class="text-muted">
                                     <i class="fas fa-clock mr-2"></i>
                                     {{\Illuminate\Support\Facades\Auth::user()->created_at->toDayDateTimeString()}}</small></p>



                         </div>

                     </div>

                    </div>
                 <hr>
                 <div>
                     <div class="text-center mt-1 mr-2 mb-3">
                         <a href="{{ route('profile.edit') }}" class="btn btn-dark">
                             <i class="far fa-edit"></i>
                             Edit Profile</a>
                         <a href="#" class="btn btn-dark">
                             <i class="fas fa-trash mr-2"></i>
                             Delete Profile</a>
                         <a href="{{ route('password.change') }}" class="btn btn-dark">
                             <i class="fas fa-lock"></i>
                             Change Password</a>
                     </div>
                 </div>

             </div>

         </div>
     </div>
 </div>
@endsection
