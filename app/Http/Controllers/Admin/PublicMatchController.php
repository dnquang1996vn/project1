<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Match;
use Validator;

class PublicMatchController extends Controller
{
    // list public match
    public function showPublicMatch()
    {
        $publicMatches = Match::all()->where('public','<>',Match::HIDDEN);
        return view('admin.publicMatch')->with('publicMatches',$publicMatches);
    }

    // delete public match
    public function deletePublicMatch(Request $request)
    {
        $id = $request->delete_id;
        $deletePublicMatch = Match::find($id);
        $deletePublicMatch->delete();
        return redirect()->route('showPublicMatch');
    }

    // update score
    public function showUpdateForm($id)
    {
        $updateMatch = Match::find($id);
        return view('admin.updateScore')->with('updateMatch',$updateMatch);
    }

    public function updateScore(Request $request,$id)
    {   
        $match =  Match::find($id);
        $match->home_score = $request->homeScore;
        $match->away_score = $request->awayScore;
        $match->public = Match::UPDATED;
        $match->save();
        return redirect()->route('showPublicMatch')
                    ->with('message', 'Edit Success!!!');
    }
}
