@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    
    <div class="col">
      <h5 class="mb-3 pb-3">Student List
        <a href="{{ url('students/add') }}" class="btn btn-primary float-end">
          <i class="fa fa-plus"></i>
          Add New
        </a>
      </h5>
     
      {{-- Import and Export --}}
      <form action="{{ route('students.import') }}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row">
          <div class="col-10">
            <input type="file" name="file" id="" class="w-100 form-control">
          </div>
          <div class="float-end col-2">
            <a href="{{ route('students.export') }}" class="btn btn-outline-dark">Export</a>
            <button class="form-input-group btn btn-outline-dark">Import</button>
          </div>
        </div>
      </form>
      <form action="{{ url('students/search') }}" method="get">
        {{ @csrf_field() }}
        <input type="text" name="query" placeholder="Search" class="rounded w-50 border-light btn-height">
        <button class="btn btn-outline-dark"><i class="fa fa-search"></i>
        </button>
        <h6 class="mt-3 text-info">Enter Start date and End date</h6>
        <div class="input-group mt-1">
          <input type="date" class="form-control" placeholder="Start Date" name="start_date">
          <span class="input-group-text">&</span>
          <input type="date" class="form-control" placeholder="End Date" name="end_date">
        </div>
        
      </form>
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Age</th>
            <th>Major Name</th>
            <th>Created At</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($students as $student)
          <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->address }}</td>
            <td>{{ $student->ph_no }}</td>
            <td>{{ $student->age }}</td>
            <td>{{ $student->major->name??$student->major_name}}</td>
            <td>{{ $student->created_at }}</td>
            <td class="d-flex">
              <a href="{{ url("students/edit/{$student->id}") }}" class="btn btn-primary btn-height me-1">
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
    
  </div>
</div>