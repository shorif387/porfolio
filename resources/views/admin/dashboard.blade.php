@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Admin Dashboard</h1>

        <div class="row my-4">
            <div class="col-md-6">
                <div class="card p-3 shadow-sm">
                    <h4>Total Projects</h4>
                    <p></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-3 shadow-sm">
                    <h4>Total Pricing Plans</h4>
                    <p></p>
                </div>
            </div>
        </div>

        <div class="row my-4">
            <div class="col-md-6">
                <h5>Latest Projects</h5>
                <ul
                </ul>
            </div>
            <div class="col-md-6">
                <h5>Latest Pricing Plans</h5>
                <ul>
                    
                </ul>
            </div>
        </div>
    </div>
@endsection
