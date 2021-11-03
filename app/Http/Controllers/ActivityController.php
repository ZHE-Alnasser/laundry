<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function orderActivities()
    {
        $users = User::all();

        return view('activities/order-activities');
    }

    public function show($modelName)
    {
        return view('activities.show', compact('modelName'));
    }
}
