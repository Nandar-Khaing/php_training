@extends('layouts.app')
 
@section('content')
<div class="container">
 <div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">
    <h5>Update Student</h5>
    <form action="{{ url("students/edit/{$student->id}") }}" method="post">
      {{ @csrf_field() }}
      <div class="form-group mt-3">
        <label for="name"  class="form-label">Name</label>
        <input type="text" class="form-control" name="name" value="{{ $student->name }}">
      </div>
      <div class="form-group mt-3">
        <label for="email"  class="form-label">Email</label>
        <input type="email" class="form-control" name="email" value="{{ $student->email }}">
      </div>
      <div class="form-group mt-3">
        <label for="address"  class="form-label">Address</label>
        <input type="text" class="form-control" name="address" value="{{ $student->address}}">
      </div>
      <div class="form-group mt-3">
        <label for="ph_no"  class="form-label">Phone</label>
        <input type="tel" class="form-control" name="ph_no" value="{{ $student->ph_no }}">
      </div>
      <div class="form-group mt-3">
        <label for="age"  class="form-label">Age</label>
        <input type="number" class="form-control" name="age" value="{{ $student->age }}">
      </div>
      <div class="form-group mt-3">
        <label for="major_id"  class="form-label">MajorId</label>
        <input type="number" class="form-control" name="major_id" value="{{ $student->major_id }}">
      </div>
      <div class="mt-3">
        <button type="submit" class="btn btn-primary">Edit</button>
      </div>
    </form>
  </div>
  <div class="col-md-3"></div>
 </div>
</div>
@endsection