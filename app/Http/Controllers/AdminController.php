<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;

class AdminController extends Controller
{
// hidden match
    public function showHiddenMatch()
    {
        $hiddenMatches = Match::all()->where('public', Match::HIDDEN);
        return view('admin.hiddenMatch')->with('hiddenMatches', $hiddenMatches);
    }

    public function deleteHiddenMatch(Request $request)
    {
    	$id = $request->delete_id;
    	$deleteHiddenMatch = Match::find($id);
    	$deleteHiddenMatch->delete();
    	return redirect()->route('showHiddenMatch');
    }

    public function publicHiddenMatch(Request $request)
    {
    	$id= $request->public_id;
    	$publicMatch = Match::find($id);
    	$publicMatch->public = Match::PUB;
    	$publicMatch->save();
    	return redirect()->route('showHiddenMatch');
    }

    public function createNewMatch()
    {

    }


   
}
