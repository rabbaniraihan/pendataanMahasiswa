@extends('layouts.app')

@section('content')
<h2 class="float-start">Data Mahasiswa</h2>
    <a type="button" class="btn btn-success mb-2 float-end" href="{{ route('student.create') }}">Add Mahasiswa</a>
<table class="table">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>NIM</th>
            <th>Address</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->nim }}</td>
            <td>{{ $student->address }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->gender }}</td>
            <td>{{ $student->date_of_birth }}</td>
            <td>
                <a type="button" class="btn btn-primary" href="{{ route('student.edit', $student->id) }}">Edit</a>
                <a type="button" class="btn btn-danger" href="{{ route('student.delete', $student->id) }}">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection