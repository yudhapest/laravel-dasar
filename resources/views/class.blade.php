@extends('layouts.app')

@section('title', 'Class')

@section('content')

<h4>Class</h4>
@if (!$classList->isEmpty())
<table class="table table-bordered table-hover border-primary">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Student</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($classList as $class)
        <tr>
            <td>{{ $loop->iteration}}</td>
            <td>{{ $class->name }}</td>
            <td>
                @if ($class->students->isEmpty())
                <p>Tidak ada siswa dalam kelas ini.</p>
                @else
                @foreach ($class->students as $student)
                <li>{{ $student->name }}</li>
                @endforeach
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<p class="text-center">Tidak ada kelas yang tersedia.</p>
@endif

@endsection