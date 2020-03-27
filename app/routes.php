<?php

use App\Service\CoronaVirusService as CronJob;


get('/self-check', 'SelfCheckController@index');
get('/cases/:str', 'CasesPhilippinesController@index');
get('/checkpoints/metro-manila', 'CheckpointsController@index');
get('/cache-coronavirus-data', function () {
    $job = new CronJob();
    $job->cronJob("GET", $job->API['stats_by_country'] . "philippines");
    $job->cronJob("GET", $job->API['history_by_country'] . "philippines");
    $job->cronJob("GET", $job->API['manila_checkpoints']);
    $job->cronJob("GET", $job->API['cases_philippines']);
    $job->cronJob("GET", $job->API['world_curr_stats']);
});