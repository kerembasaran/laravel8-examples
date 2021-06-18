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
                    <a href="#" class="btn btn-danger" id="deleteAllSelectedRecord">Delete Selected</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table id="employeesTable" class="table">
                <thead>
                <tr>
                    <th><input type="checkbox" id="chkCheckAll"></th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($employees as $employee)
                    <tr id="eid{{$employee->id}}">
                        <td>
                            <input type="checkbox" name="ide" class="checkBoxClass" value="{{$employee->id}}">
                        </td>
                        <td>{{$employee->firstname}}</td>
                        <td>{{$employee->lastname}}</td>
                        <td>{{$employee->email}}</td>
                        <td>{{$employee->phone}}</td>
                        <td>
                            <a href="javascript:void(0)" onclick="editStudent({{$employee->id}})" class="btn btn-info">Edit</a>
                            <a href="javascript:void(0)" onclick="deleteEmployee({{$employee->id}})" class="btn btn-danger">Delete</a>
                        </td>
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

    <!-- Edit Employee Modal -->
    <div class="modal fade" id="editEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Employee</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editEmployeeForm">
                        @csrf
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                            <label for="firstname">First Name</label>
                            <input type="text" class="form-control" id="firstname2">
                        </div>
                        <div class="form-group">
                            <label for="lastname">Last Name</label>
                            <input type="text" class="form-control" id="lastname2">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email2">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone2">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Employee Modal -->

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
    <script>
        function editStudent(id) {
            $.get('/using-ajax/employee/' + id, function (employee) {
                $('#id').val(employee.id);
                $('#firstname2').val(employee.firstname);
                $('#lastname2').val(employee.lastname);
                $('#email2').val(employee.email);
                $('#phone2').val(employee.phone);
                $('#editEmployeeModal').modal('toggle');
            });
        }

        $('#editEmployeeForm').submit(function (e) {
            e.preventDefault();
            let id = $('#id').val();
            let firstname = $('#firstname2').val();
            let lastname = $('#lastname2').val();
            let email = $('#email2').val();
            let phone = $('#phone2').val();
            let _token = $('input[name=_token]').val();

            $.ajax({
                url: '{{ route('employees.update') }}',
                type: 'PUT',
                data: {
                    id: id,
                    firstname: firstname,
                    lastname: lastname,
                    email: email,
                    phone: phone,
                    _token: _token
                },
                success: function (response) {
                    $('#eid' + response.id + ' td:nth-child(1)').text(response.firstname);
                    $('#eid' + response.id + ' td:nth-child(2)').text(response.lastname);
                    $('#eid' + response.id + ' td:nth-child(3)').text(response.email);
                    $('#eid' + response.id + ' td:nth-child(4)').text(response.phone);
                    $('#editEmployeeModal').modal('toggle');
                    $('#editEmployeeForm')[0].reset();
                }
            });
        });
    </script>
    <script>
        function deleteEmployee(id) {
            if (confirm('Do you realy wat to delete this record?')) {
                $.ajax({
                    url: '/using-ajax/delete-employee/' + id,
                    type: 'DELETE',
                    data: {
                        _token: $('input[name=_token]').val()
                    },
                    success: function (response) {
                        $('#eid' + id).remove();
                    }
                });
            }
        }
    </script>
    <script>
        $(function (e) {
            $('#chkCheckAll').click(function () {
                $('.checkBoxClass').prop('checked', $(this).prop('checked'));
            });
            $('#deleteAllSelectedRecord').click(function (e) {
                e.preventDefault();
                var allide = [];

                $('input:checkbox[name=ide]:checked').each(function () {
                    allide.push($(this).val());
                });

                $.ajax({
                    url: '{{ route('employees.delete.selected') }}',
                    type: 'DELETE',
                    data: {
                        _token: $('input[name=_token]').val(),
                        ide: allide
                    },
                    success: function (response) {
                        $.each(allide, function (key, val) {
                            $('#eid' + val).remove();
                        });
                    }
                });
            });
        });
    </script>
@endsection
