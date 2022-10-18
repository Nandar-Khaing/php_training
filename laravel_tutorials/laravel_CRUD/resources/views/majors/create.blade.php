@extends('layouts.app')
 
@section('content')
<div class="container">
 <div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">
    <h5>Create Major</h5>
    <form action="{{ url('majors/create') }}" method="post">
      {{ @csrf_field() }}
      <div class="form-group mt-3">
        <label for="name"  class="form-label">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter Major Name">
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