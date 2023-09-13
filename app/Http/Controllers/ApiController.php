<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function get_home_data(){
        $totalEnrollment = User::where('enrolled', 1)->count();
        return response()->json([
            'enroll' => $totalEnrollment,
            'total_visited' => 10,
        ]);
    }
}
