@extends('layouts.admin')

@section('content')
    <h2>Pricing Plan Details</h2>

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{ $pricingPlan->name }}</h4>
            <p><strong>Features:</strong></p>
            <p>{{ $pricingPlan->features }}</p>
            <p><strong>Price:</strong> ${{ number_format($pricingPlan->price, 2) }}</p>
        </div>
    </div>

    <a href="{{ route('pricing-plans.index') }}" class="btn btn-secondary mt-3">Back</a>
@endsection
