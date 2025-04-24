@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h2>Pricing Plans</h2>
        <a href="{{ route('pricing-plans.create') }}" class="btn btn-primary">+ Add New Plan</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Features</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pricingPlans as $plan)
                <tr>
                    <td>{{ $plan->name }}</td>
                    <td>{{ $plan->features }}</td>
                    <td>${{ number_format($plan->price, 2) }}</td>
                    <td>
                        <a href="{{ route('pricing-plans.show', $plan->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('pricing-plans.edit', $plan->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('pricing-plans.destroy', $plan->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
