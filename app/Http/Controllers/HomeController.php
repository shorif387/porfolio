<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\PricingPlan;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->take(6)->get(); // সর্বশেষ ৬টি প্রজেক্ট
        $pricingPlans = PricingPlan::all(); // সব প্রাইসিং প্ল্যান

        return view('home', compact('projects', 'pricingPlans'));
    }
}
