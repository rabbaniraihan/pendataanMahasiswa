@extends('layouts.app')

@section('content')
<h2>Edit Mahasiswa</h2>

<form action="{{ route('student.update', $student->id) }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name :</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}">
    </div>
    
    <div class="mb-3">
        <label for="nim" class="form-label">NIM :</label>
        <input type="text" class="form-control" id="nim" name="nim" value="{{ $student->nim }}">
    </div>
    
    <div class="mb-3">
        <label for="address" class="form-label">Address :</label>
        <input type="text" class="form-control" id="address" name="address" value="{{ $student->address }}">
    </div>
    
    <div class="mb-3">
        <label for="email" class="form-label">Email :</label>
        <input type="text" class="form-control" id="email" name="email" value="{{ $student->email }}">
    </div>
    
    <div class="mb-3">
        <label for="gender" class="form-label">Gender :</label>
        <input type="text" class="form-control" id="gender" name="gender" value="{{ $student->gender }}">
    </div>
    
    <div class="mb-3">
        <label for="date_of_birth" class="form-label">Date of Birth :</label>
        <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="{{ $student->date_of_birth }}">
    </div>
    <button type="submit" class="btn btn-success">Edit</button>
</form>
@endsection