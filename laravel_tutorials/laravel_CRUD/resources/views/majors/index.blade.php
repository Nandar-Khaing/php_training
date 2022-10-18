@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col2"></div>
    <div class="col8">
      <h5 class="mb-3 pb-3">Major List
        <a href="{{ url('majors/add') }}" class="btn btn-primary float-end">
          <i class="fa fa-plus"></i>
          Add New
        </a>
      </h5>
      
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>Major Name</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($majors as $major)
          <tr>
            <td>{{ $major->id }}</td> 
            <td>{{ $major->name }}</td>
            <td class="d-flex">
              <a href="{{ url("majors/edit/{$major->id}") }}" class="btn btn-primary me-3 btn-height">
                <i class="fa fa-edit"></i>
                Edit</a>
                <form action="{{ url("majors/delete/{$major->id}") }}" method="post">
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