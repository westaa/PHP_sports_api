<?php

namespace App\Http\Controllers;

use App\api;
use DB;
use App\sports_data;

class apiController extends Controller
    {
      public function getLeagueRecords ($league) {
      return sports_data::getLeagueRecords($league);
      }
      public function getSingleRecord ($id) {
        return sports_data::getSingleRecord($id);
      }
      public function deleteRecord ($id) {
        $team = sports_data::where('id', $id)->pluck('team');
        sports_data::where('id', $id)->delete();
        return 'deleted '.$team;
      }
      protected function getTeamRecords () {
        return sports_data::get();
      }
      public function editSingleRecord ($id) {
        sports_data::updateRecords($id, request('team'), request('league'), request('record'));
        return sports_data::where('id', $id)->get();
      }
      public function postNewRecord () {
        $id = sports_data::insertGetId(
          ['team' => request('team'), 'league' => request('league'), 'record' => request('record')]
        );
        return sports_data::getSingleRecord($id);
  }
}
