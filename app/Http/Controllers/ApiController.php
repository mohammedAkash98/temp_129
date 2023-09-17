<?php

namespace App\Http\Controllers;

use App\Models\ActivitySheet;
use App\Models\HomeContent;
use App\Models\Other;
use App\Models\Svcc;
use App\Models\Team;
use App\Models\User;
use App\Models\Webinar;

class ApiController extends Controller
{
    public function get_home_data()
    {
        $totalEnrollment = User::where('enrolled', 1)->count();
        return response()->json([
            'enroll' => $totalEnrollment,
            'total_visited' => 10,
        ]);
    }

    public function get_home_contents()
    {
        $homeContents = HomeContent::all();
        $responseData = $homeContents->map(function ($content) {
            return [
                'name' => $content->name,
                'description' => $content->description,
            ];
        });

        return response()->json($responseData);
    }

    public function get_webinars()
    {
        $webinars = Webinar::all();
        $responseData = $webinars->map(function ($webinar) {
            return [

                'name' => $webinar->name,
                'image' => $webinar->image,
                'description' => $webinar->description,
                'date' => $webinar->date,
                'time' => $webinar->time,
                'location' => $webinar->location,
            ];
        });

        return response()->json($responseData);
    }
    public function get_teams()
    {
        $teams = Team::all();
        $responseData = $teams->map(function ($team) {
            return [
                'name' => $team->name,
                'image' => $team->image,
                'designation' => $team->designation,
                'facebook_url' => $team->facebook_url,
                'twitter_url' => $team->twitter_url,
                'instagram_url' => $team->instagram_url,
            ];
        });

        return response()->json($responseData);
    }

    public function get_svccs()
    {
        $svccs = Svcc::all();
        $responseData = $svccs->map(function ($svcc) {
            return [
                'name' => $svcc->name,
                'image' => $svcc->image,
            ];
        });

        return response()->json($responseData);
    }

    public function get_activity_sheets()
    {
        $activity_sheets = ActivitySheet::all();
        $responseData = $activity_sheets->map(function ($activity_sheet) {
            return [
                'name' => $activity_sheet->name,
                'pdf' => $activity_sheet->pdf,
            ];
        });

        return response()->json($responseData);
    }
    public function get_others()
    {
        $others = Other::all();
        $responseData = $others->map(function ($other) {
            return [
                'name' => $other->name,
                'description' => $other->description,
                'image' => $other->image,
                'url' => $other->url,
            ];
        });

        return response()->json($responseData);
    }
}
