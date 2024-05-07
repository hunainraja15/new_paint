@extends('layouts.app')

@section('body')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">

            </div>

            <form class="card mt-5 form" action="{{ url('employee/create') }}" method="post">
                @csrf
                
                <input type="hidden" name="id" class="id">
                <div class="card-header">
                    New Employee
                </div>
                <div class="card-body">
                    <div class="row ">

                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label">First Name</label>
                                <input type="text" name="name" class="form-control name"
                                    placeholder="Enter Your First Name">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" placeholder="Enter Your Last Name">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control email" placeholder="example@gmail.com">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control password"
                                    placeholder="Enter Your New Password">
                            </div>
                        </div>


                    </div>
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary m-4">Submit</button>
                </div>
            </form>

            <div class="card mt-5">
                <div class="card-header">
                    Employee List
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table  mb-0 text-center">
                            <thead>
                                <tr>
                                    <th><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-hash">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M5 9l14 0" />
                                            <path d="M5 15l14 0" />
                                            <path d="M11 4l-4 16" />
                                            <path d="M17 4l-4 16" />
                                        </svg></th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $key => $employee)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $employee->name }}</td>
                                        <td>{{ $employee->email }}</td>
                                        <td>
                                            <button data-id="{{ $employee->id }}" data-name="{{ $employee->name }}" data-email="{{ $employee->email }}" data-password="{{ $employee->password }}" class="btn btn-primary edit">
                                                <svg class="m-auto" xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-pencil">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                                                    <path d="M13.5 6.5l4 4" />
                                                </svg>
                                            </button>
                                            <a href="{{url('employ/delete/'.$employee->id)}}" class="btn btn-danger">
                                                <svg class="m-auto" xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-trash-x">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path d="M4 7h16" />
                                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                    <path d="M10 12l4 4m0 -4l-4 4" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    
    <script>
        $('.edit').click(function() {
            var id = $(this).attr('data-id');
            var name = $(this).attr('data-name');
            var email = $(this).attr('data-email');
            var password = $(this).attr('data-password');

            $('.name').val(name)
            $('.email').val(email)
           var pass = $('.password').val(password)
           $('.id').val(id)
           

            var form = $('.form').attr({'action': "{{url('employee/edit')}}"});
            var form = $('.password').attr({'type': "text"});
            
        })
    </script>
@endsection
