@extends('layouts.app')

@section('title', 'Student')

@section('content')

<h4>Student</h4>
<table class="table border-primary table-hover table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>NIS</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Class</th>
            <th>Extracurricular</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($studentList as $student)
        <tr>
            <td>{{ $loop->iteration}}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->nis }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->phone }}</td>
            <td>{{ $student->class->name }}</td>
            <td>
                @if ($student->extracurriculars->isEmpty())
                <p>Tidak mengikuti Extracurricular.</p>
                @else
                @foreach ($student->extracurriculars as $extracurricular)
                <li>{{ $extracurricular->name }}</li>
                @endforeach
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection