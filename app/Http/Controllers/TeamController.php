<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    //
    public function index()
    {
        $team_category=Team::select('category')->groupBy('category')->get();
        $team=array();
        foreach($team_category as $category){
            $team[$category->category]=Team::where('category',$category->category)->get();
        }
        return view('team',compact('team'));
    }
}
