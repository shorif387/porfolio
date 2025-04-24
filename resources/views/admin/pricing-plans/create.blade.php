@extends('layouts.admin')

@section('content')
    <h2>Create Pricing Plan</h2>

    <form method="POST" action="{{ route('pricing-plans.store') }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">Plan Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Features</label>
            <textarea name="features" class="form-control" rows="4" required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="number" name="price" class="form-control" step="0.01" required>
        </div>

        <button type="submit" class="btn btn-success">Create Plan</button>
    </form>
@endsection
