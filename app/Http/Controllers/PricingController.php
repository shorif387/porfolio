<?php

// app/Http/Controllers/PricingPlanController.php

namespace App\Http\Controllers;

use App\Models\PricingPlan;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index()
    {
        $pricingPlans = PricingPlan::all();
        return view('admin.pricing-plans.index', compact('pricingPlans'));
    }

    public function create()
    {
        return view('admin.pricing-plans.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'features' => 'required|string',
            'price' => 'required|numeric',
        ]);

        PricingPlan::create($request->all());

        return redirect()->route('pricing-plans.index');
    }

    public function show(PricingPlan $pricingPlan)
    {
        return view('admin.pricing-plans.show', compact('pricingPlan'));
    }

    public function edit(PricingPlan $pricingPlan)
    {
        return view('admin.pricing-plans.edit', compact('pricingPlan'));
    }

    public function update(Request $request, PricingPlan $pricingPlan)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'features' => 'required|string',
            'price' => 'required|numeric',
        ]);

        $pricingPlan->update($request->all());

        return redirect()->route('pricing-plans.index');
    }

    public function destroy(PricingPlan $pricingPlan)
    {
        $pricingPlan->delete();

        return redirect()->route('pricing-plans.index');
    }
}
