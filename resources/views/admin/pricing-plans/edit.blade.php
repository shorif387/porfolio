
@extends('layouts.admin')

@section('content')
    <h2>Edit Pricing Plan</h2>

    <form method="POST" action="{{ route('pricing-plans.update', $pricingPlan->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Plan Name</label>
            <input type="text" name="name" class="form-control" value="{{ $pricingPlan->name }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Features</label>
            <textarea name="features" class="form-control" rows="4" required>{{ $pricingPlan->features }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="number" name="price" class="form-control" value="{{ $pricingPlan->price }}" step="0.01" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Plan</button>
    </form>
@endsection
