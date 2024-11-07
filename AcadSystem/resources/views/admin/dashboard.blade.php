@extends('layout.app')
@section('title', 'Dashboard')

@section('content')
    <h1>Overview</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Appointments</h5>
                        @php
                            $appointments = App\Models\Appoinment::all();
                        @endphp
                        <ul>
                            <p>Total Appointments: {{ $appointments->count() }}</p>
                        </ul>
                    </div>  
                </div>
            </div>
        </div>
    </div>
@endsection
