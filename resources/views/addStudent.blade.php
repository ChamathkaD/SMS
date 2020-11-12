@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

               <div class="card mt-5 border-dark mb-2" >
                   <div class="card-header" style="background-color: #495057">
                       <div class="card-title">
                           <h3 class="text-light">Add New Student</h3>
                       </div>

                      @if(session()->has('success'))
                           <div class="alert alert-success alert-dismissible fade show" role="alert">
                               <i class="fas fa-check-circle mr-2"></i>
                               {!! session()->get('success') !!}
                               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                               </button>
                           </div>
                       @endif


                   </div>
                   <div class="card-body">
                       <form action="{{ route('student.store') }}" method="post" >

                           @csrf

                           <div class="form-group">
                               <label for="index">Index</label>
                               <input type="text"
                                      name="index"
                                      id="index"
                                      class="form-control @error('index') is-invalid @enderror"

                                      placeholder="Index">

                               @error('index')
                               <small class="invalid-feedback">
                                   <i class="fas fa-exclamation-circle"></i>
                                   {{ $message }}
                               </small>
                               @enderror
                           </div>

                           <div class="form-group">
                               <label for="firstname">First Name</label>
                               <input type="text"
                                      name = "firstname"
                                      id="lastname"
                                      class="form-control @error('firstname') is-invalid @enderror"
                                      placeholder="First Name"
                               >
                               @error('firstname')
                               <small class="invalid-feedback">
                                   <i class="fas fa-exclamation-circle"></i>
                                   {{$message}}
                               </small>
                               @enderror
                           </div>

                           <div class="form-group">
                               <label for="lastname">Last name</label>
                               <input type="text"
                                      name="lastname"
                                      id="lastname"
                                      class="form-control  @error('lastname') is-invalid @enderror"
                                      placeholder="Last Name">
                               @error('lastname')
                               <small class="invalid-feedback">
                                   <i class="fas fa-exclamation-circle"></i>
                                   {{$message}}
                               </small>
                               @enderror
                           </div>

                           <div class="form-group">
                               <label for="gender">Gender</label>
                               <select name="gender" id="gender" class="custom-select @error('gender') is-invalid @enderror" >
                                   <option selected disabled>Chose...</option>
                                   <option value="male">Male</option>
                                   <option value="female">Female</option>
                               </select>
                               @error('gender')
                               <small class="invalid-feedback">
                                   <i class="fas fa-exclamation-circle"></i>
                                   {{ $message }}
                               </small>
                               @enderror
                           </div>

                           <div class="form-group">
                               <label for="birthday">Birthday</label>
                               <input type="date"
                                      name="birthday"
                                      id="birthday"
                                      class="form-control @error('birthday') is-invalid @enderror"
                                      placeholder="Birthday" >

                               @error('birthday')
                               <small class="invalid-feedback">
                                   <i class="fas fa-exclamation-circle"></i>
                                   {{ $message }}
                               </small>
                               @enderror
                           </div>

                           <div class="form-group">
                               <label for="mobile">Mobile</label>
                               <input type="text"
                                      name="mobile"
                                      id="mobile"
                                      class="form-control @error('mobile') is-invalid @enderror"
                                      placeholder="Mobile">
                               @error('mobile')
                               <small class="invalid-feedback">
                                   <i class="fas fa-exclamation-circle"></i>
                                   {{ $message }}
                               </small>
                               @enderror
                           </div>

                           <div class="form-group">
                               <label for="address">Address</label>
                               <textarea name="address"
                                         id="address"
                                         cols="5"
                                         rows="5"
                                         class="form-control @error('address') is-invalid @enderror"
                                         placeholder="Address"></textarea>
                               @error('address')
                               <small class="invalid-feedback">
                                   <i class="fas fa-exclamation-circle"></i>
                                   {{ $message }}
                               </small>
                               @enderror
                           </div>


                           <input type="submit" value="Add student" class="btn btn-dark">
                       </form>
                   </div>
               </div>

            </div>
        </div>
    </div>
@endsection
