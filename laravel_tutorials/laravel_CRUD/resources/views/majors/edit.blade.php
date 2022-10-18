@extends('layouts.app')
 
@section('content')
<div class="container">
 <div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">
    <h5>Update Major</h5>
    <form action="{{ url("majors/edit/{$major->id}") }}" method="post">
      {{ @csrf_field() }}
      <div class="form-group mt-3">
        <label for="id"  class="form-label">ID</label>
        <input type="text" class="form-control" disabled name="name" value="{{ $major->id }}">
      </div>
      <div class="form-group mt-3">
        <label for="name"  class="form-label">Name</label>
        <input type="text" class="form-control" name="name" value="{{ $major->name }}">
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