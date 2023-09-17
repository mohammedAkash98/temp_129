<?php

namespace App\Http\Controllers;

use App\Models\ActivitySheet;
use App\Models\Svcc;

class ResourceController extends Controller
{
    public function svcc_index()
    {
        $svccs = Svcc::paginate(15);


        return view('frontend.svcc.svcc-frontend-index', compact('svccs'));
    }
    public function activity_sheet_index()
    {
        $sl = !is_null(\request()->page) ? (\request()->page - 1) * 20 : 0;
        $activity_sheets = ActivitySheet::paginate(20);
        return view('frontend.svcc.activity_sheet-frontend-index', compact('sl', 'activity_sheets'));
    }
}
