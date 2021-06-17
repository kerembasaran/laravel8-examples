@extends('layouts.app')

@section('title')
    Employees
@endsection
@section('css')

@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-6 text-left">
                    Employees
                </div>
                <div class="col-6 text-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Add New Employee
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table id="employeesTable" class="table">
                <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
                </thead>
                <tbody>
                @foreach($employees as $employee)
                    <tr>
                        <td>{{$employee->firstname}}</td>
                        <td>{{$employee->lastname}}</td>
                        <td>{{$employee->email}}</td>
                        <td>{{$employee->phone}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Employee</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="employeeForm">
                        @csrf
                        <div class="form-group">
                            <label for="firstname">First Name</label>
                            <input type="text" class="form-control" id="firstname">
                        </div>
                        <div class="form-group">
                            <label for="lastname">Last Name</label>
                            <input type="text" class="form-control" id="lastname">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script>
        $('#employeeForm').submit(function (e) {
            e.preventDefault();

            let firstname = $('#firstname').val();
            let lastname = $('#lastname').val();
            let email = $('#email').val();
            let phone = $('#phone').val();
            let _token = $('input[name=_token]').val();
            $.ajax({
                url: '{{ route('employees.add') }}',
                type: 'POST',
                data: {
                    firstname: firstname,
                    lastname: lastname,
                    email: email,
                    phone: phone,
                    _token: _token
                },
                success: function (response) {
                    if (response) {
                        $('#employeesTable tbody').prepend('<tr><td>' + response.firstname + '</td><td>' + response.lastname + '</td><td>' + response.email + '</td><td>' + response.phone + '</td></tr>');
                        $('#employeeForm')[0].reset();
                        $('#exampleModal').modal('hide');
                    }
                },
                error: function () {

                }
            });
        });
    </script>
@endsection
