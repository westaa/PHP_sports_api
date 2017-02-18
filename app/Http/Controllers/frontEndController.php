<?php

namespace App\Http\Controllers;

use DB;
use App\frontEnd;
use App\sports_data;

class frontEndController extends Controller
  {
    public function getAllRecords () {
      return view('welcome', ['data' => sports_data::get()]);
    }
    public function getLeagueRecords ($league) {
      return view('leagueRecords', ['data' => sports_data::getLeagueRecords($league), 'teamName' => sports_data::getLeagueRecordsTeam($league), 'league' => $league]);
    }
    public function getSingleRecord ($id) {
      return view('teamData', ['ID' => $id, 'team' => sports_data::getTeamName($id), 'league' => sports_data::getLeague($id), 'record' => sports_data::getRecord($id)]);
    }
    public function deleteRecord ($id) {
      sports_data::where('id', $id)->delete();
      return view('welcome', ['data' => sports_data::get()]);
    }
    public function getTeamRecords () {
      return view('records', ['data'=> sports_data::pluck('record'), 'teamName' => sports_data::pluck('team') ,'greeting' => 'Team Records']);
    }
    public function editSingleRecord ($id) {
      sports_data::updateRecords($id, request('team'), request('league'), request('record'));
      return view('welcome', ['data' => sports_data::get()]);
    }
    public function postNewRecord () {
      sports_data::postRecord(request('team'), request('league'), request('record'));
      return view('welcome', ['data' => sports_data::get()]);
    }
}
