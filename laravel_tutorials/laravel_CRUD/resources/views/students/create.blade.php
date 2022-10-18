@extends('layouts.app')
 
@section('content')
<div class="container">
 <div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">
    <h5>Create Student</h5>
    <form action="{{ url('students/create') }}" method="post">
      {{ @csrf_field() }}
      <div class="form-group mt-3">
        <label for="name"  class="form-label">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter Student's Name">
      </div>
      <div class="form-group mt-3">
        <label for="email"  class="form-label">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Enter Student's Email">
      </div>
      <div class="form-group mt-3">
        <label for="address"  class="form-label">Address</label>
        <input type="text" class="form-control" name="address" placeholder="Enter Student's Address">
      </div>
      <div class="form-group mt-3">
        <label for="ph_no"  class="form-label">Phone</label>
        <input type="tel" class="form-control" name="ph_no" placeholder="Enter Student's Phone Number">
      </div>
      <div class="form-group mt-3">
        <label for="age"  class="form-label">Age</label>
        <input type="number" class="form-control" name="age" placeholder="Enter Student's Age">
      </div>
      <div class="form-group mt-3">
        <label for="major-id"  class="form-label">MajorId</label>
        <input type="number" class="form-control" name="major_id" placeholder="Enter Major Id">
      </div>
      <div class="mt-3">
        <button type="submit" class="btn btn-primary">Create</button>
      </div>
    </form>
  </div>
  <div class="col-md-3"></div>
 </div>
</div>
@endsection