<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Match;
use Validator;

class HiddenMatchController extends Controller
{
    // list hidden match
    public function showHiddenMatch()
    {
        $hiddenMatches = Match::all()->where('public', Match::HIDDEN);
        return view('admin.hiddenMatch')->with('hiddenMatches', $hiddenMatches);
    }

    //delete a match
    public function deleteHiddenMatch(Request $request)
    {
        $id = $request->delete_id;
        $deleteHiddenMatch = Match::find($id);
        $deleteHiddenMatch->delete();
        return redirect()->route('showHiddenMatch');
    }

    //public a match
    public function publicHiddenMatch(Request $request)
    {
        $id= $request->public_id;
        $publicMatch = Match::find($id);
        $publicMatch->public = Match::PUB;
        $publicMatch->save();
        return redirect()->route('showHiddenMatch');
    }

    // create a match
    public function showCreateForm()
    {
        return view('admin.createMatch');
    }

    public function createNewMatch(Request $request)
    {
        $messages = [
           
            
        ];
        $validator = Validator::make($request->all(), [
            'homeName'  => 'required|different:awayName',
            'awayName'  => 'required|different:homeName',
            'homeRate'  => 'required|numeric',
            'awayRate'  => 'required|numeric',
            'drawRate'  => 'required|numeric',
            'startingMatchTime' => 'required|before:finishingMatchTime|after:closingBetTime|after:'.date('Y-m-d H:i:s'),
            'finishingMatchTime'    => 'required|after:startingMatchTime|after:'.date('Y-m-d H:i:s'),
            'closingBetTime'    =>'required|before:startingMatchTime|after:'.date('Y-m-d H:i:s'),

        ], $messages);

        if ($validator->fails()) {
            return redirect()->route('showCreateForm')
                    ->withErrors($validator)
                    ->withInput();
        } else {
            // Lưu thông tin vào database, phần này sẽ giới thiệu ở bài về database
            $match = new Match;
            $match->home_team_name = $request->input('homeName');
            $match->away_team_name = $request->input('awayName');
            $match->home_rate = $request->input('homeRate');
            $match->draw_rate = $request->input('drawRate');
            $match->away_rate = $request->input('awayRate');
            $match->starting_time = $request->input('startingMatchTime');
            $match->finishing_time = $request->input('finishingMatchTime');
            $match->closing_bet = $request->input('closingBetTime');
            $match->save();

            return redirect()->route('showHiddenMatch')
                    ->with('message', 'Đăng ký thành công.');
        }
    }

    //edit a match
    public function showEditForm($edit_id)
    {   $id = $edit_id;
        $editMatch = Match::find($id);
        return view('admin.editMatch')->with('editMatch', $editMatch);
    }

     public function editMatch(Request $request,$id)
    {
        $messages = [
           
            
        ];
        $validator = Validator::make($request->all(), [
            'homeName'  => 'required|different:awayName',
            'awayName'  => 'required|different:homeName',
            'homeRate'  => 'required|numeric',
            'awayRate'  => 'required|numeric',
            'drawRate'  => 'required|numeric',
            'startingMatchTime' => 'required|before:finishingMatchTime|after:closingBetTime|after:'.date('Y-m-d H:i:s'),
            'finishingMatchTime'    => 'required|after:startingMatchTime|after:'.date('Y-m-d H:i:s'),
            'closingBetTime'    =>'required|before:startingMatchTime|after:'.date('Y-m-d H:i:s'),

        ], $messages);

        if ($validator->fails()) {
            return redirect()->route('showEditForm',$id)
                    ->withErrors($validator)
                    ->withInput();
        } else {
            // Lưu thông tin vào database, phần này sẽ giới thiệu ở bài về database
            $match = Match::find($id);
            $match->home_team_name = $request->input('homeName');
            $match->away_team_name = $request->input('awayName');
            $match->home_rate = $request->input('homeRate');
            $match->draw_rate = $request->input('drawRate');
            $match->away_rate = $request->input('awayRate');
            $match->starting_time = $request->input('startingMatchTime');
            $match->finishing_time = $request->input('finishingMatchTime');
            $match->closing_bet = $request->input('closingBetTime');
            $match->save();

            return redirect()->route('showHiddenMatch')
                    ->with('message', 'Edit Success!!!');
        }
    }

    

}
