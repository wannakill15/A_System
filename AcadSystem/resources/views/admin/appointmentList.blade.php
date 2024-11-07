@extends('layout.app')

@section('title', 'Appointment List')

@section('content')

<div class="container">
    <h1>Appointment List</h1>

    <div style="float:right">
        <a href="/appointments/create" class="btn btn-primary">Create New Appointment</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Appointment Date</th>
                <th scope="col">Start Time</th>
                <th scope="col">End Time</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $appoinments = App\Models\Appoinment::all();
            @endphp
            @foreach($appoinments as $appoinment)
            <tr>
                <td>{{ $appoinment->id }}</td>
                <td>{{ $appoinment->name }}</td>
                <td>{{ $appoinment->title }}</td>
                <td>{{ $appoinment->description }}</td>
                <td>{{ $appoinment->appointment_date }}</td>
                <td>{{ $appoinment->start_time }}</td>
                <td>{{ $appoinment->end_time }}</td>
                <td>
                    <a href="/admin/appointment/edit/{{ $appoinment->id }}" class="btn btn-primary">Edit</a>
                    <a href="{{route('/appointments/delete{$appoinment->id}')}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection