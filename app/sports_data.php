<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sports_data extends Model
{
    public $timestamps = false;
    protected function getSingleRecord ($id) {
      return sports_data::where('id', $id)->get();
    }
    protected function getLeagueRecords ($league) {
      return sports_data::where('league', $league)->pluck('record');
    }
    protected function getLeagueRecordsTeam ($league) {
      return sports_data::where('league', $league)->pluck('team');
    }
    protected function getTeamName ($id) {
      return sports_data::where('id', $id)->value('team');
    }
    protected function getLeague ($id) {
      return sports_data::where('id', $id)->value('league');
    }
    protected function getRecord ($id) {
      return sports_data::where('id', $id)->value('record');
    }
    protected function updateRecords ($id, $team, $league, $record) {
      sports_data::where('id', $id)->update(['team' => $team, 'league'=> $league, 'record' => $record]);
    }
    protected function postRecord ($team, $league, $record) {
      sports_data::insert(
        ['team' => $team, 'league' => $league, 'record' => $record]
    );
    }
}
