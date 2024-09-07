<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(): View
    {
        validate_permission('dashboard.read');

        $user = Auth::user();
        $role = isset(auth()->user()->roles->pluck('name')[0]) ? auth()->user()->roles->pluck('name')[0] : '';

        //dd($role);


        switch ($role) {
            case 'administrator':
                return view('admin.dashboard.index');
            case 'traffic_manager':
                return view('admin.dashboard.traffic_manager');
            case 'city_planner':
                return view('admin.dashboard.city_planner');
            case 'law_enforcement':
                return view('admin.dashboard.law_enforcement');   
            default:
                return view('admin.dashboard.index');
        }        
    }
}
