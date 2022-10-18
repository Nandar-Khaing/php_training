@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col2"></div>
    <div class="col8">
      <h5 class="mb-3 pb-3">Student List
        <a href="{{ url('students/add') }}" class="btn btn-primary float-end">
          <i class="fa fa-plus"></i>
          Add New
        </a>
      </h5>
      
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Age</th>
            <th>Major Name</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($students as $student)
          <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->address }}</td>
            <td>{{ $student->ph_no }}</td>
            <td>{{ $student->age }}</td>
            <td>{{ $student->major->name??''}}</td>
            <td class="d-flex">
              <a href="{{ url("students/edit/{$student->id}") }}" class="btn btn-primary btn-height me-3">
                <i class="fa fa-edit"></i>
                Edit</a>
                <form action="{{ url("students/delete/{$student->id}") }}" method="post">
                  {{ method_field('delete') }}
                  {{ @csrf_field() }}
                <button type="submit" class="btn btn-danger btn-height">
                  <i class="fa fa-trash"></i>
                  Delete</button>
                </form>
            </td>
          </tr>   
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="col2"></div>
  </div>
</div>