<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use App\Models\User;
use Livewire\Component;
use App\Models\Institute;

class AdminDashboardContent extends Component
{

    public function InstitutePercentage()
    {
        $institutes = Institute::all();
        $totalInstitutes = count($institutes);
        $now = Carbon::now();
        $endOfYear = Carbon::now()->endOfYear();

        $remainingInstitutes = $institutes->filter(function ($institute) use ($now, $endOfYear) {
            $startDate = Carbon::create($institute->startDate);
            return $startDate->greaterThanOrEqualTo($now) && $startDate->lessThanOrEqualTo($endOfYear);
        });

       return $remainingPercentage = round(($remainingInstitutes->count() / $totalInstitutes) * 100, 2);

    }

    public function render()
    {
        $latest = User::take(4)->orderBy('created_at', 'desc')->get();

        return view('livewire.admin.admin-dashboard-content', compact('latest'));
    }
}
