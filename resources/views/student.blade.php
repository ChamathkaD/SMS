@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header" style="background-color: #495057">
                        <h3 class="card-title text-light">All student</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Index</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Gender</th>
                                <th>Birthday</th>
                                <th>Mobile</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($student as $student)
                                <tr>
                                    <th>{{ $student->index }}</th>
                                    <th>{{ $student->firstname }}</th>
                                    <th>{{ $student->lastname }}</th>
                                    <th>{{ $student->gender }}</th>
                                    <th>{{ $student->birthday }}</th>
                                    <th>{{ $student->mobile }}</th>
                                    <th>{{ $student->address }}</th>
                                    <th>
                                        <a href="#" class="btn btn-danger">
                                            <i class="fas fa-trash mr-2"></i>
                                            Delete
                                        </a>
                                        <a href="#" class="btn btn-secondary">
                                            <i class="fas fa-edit mr-2"></i>
                                            Edit
                                        </a>

                                    </th>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
