<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    //
    public function index(Request $request)
    {
        $teams=Team::all();
        return view('admin.team.index',compact('teams'));
    }
    public function store(Request $request)
    {
       
        $team=Team::updateOrCreate(['id'=>$request->id],['name'=>$request->name,'designation'=>$request->designation,'category'=>$request->category]);
        if ( $request->has( 'profile' ) ) {
            $filename = date( 'ymdhis' ) . '_' . $request->profile->getClientOriginalName();
            Storage::disk( 'uploads_team' )->put( $filename, file_get_contents( $request->profile->getRealPath() ) );
            Team::where('id',$team->id)->update(['profile'=>$filename]);
        }
        return redirect()->back();
    }
    public function destroy(Request $request)
    {
        Team::whereId($request->id)->delete();
        
        return response()->json('Member Deleted');
    }
}
