<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    function ourTeam()
    {
        $teams = [];

        for ($i = 0; $i < 10; ++$i) {
            $teams[] = [
                'name' => "TeamMember" . ($i + 1),
                'id' => $i + 1,
                'dob' => date('dU')
            ];
        }

        return view('home.our-team')
            ->with('page_title', "Our Team")
            ->with('teams', $teams);
    }
}
