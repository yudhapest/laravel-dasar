@extends('layouts.app')

@section('title', 'Extracurricular')

@section('content')

<section>
    <h4>Extracurricular</h4>
    @if (!$extracurricularList->isEmpty())
    <table class="table table-bordered table-hover border-primary">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Student</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($extracurricularList as $extra)
            <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{ $extra->name }}</td>
                <td>
                    @foreach ($extra->students as $student )
                    <li>{{ $student->name }}</li>
                    @endforeach
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p class="text-center">Tidak ada Extracurricular yang tersedia.</p>
    @endif
</section>
@endsection