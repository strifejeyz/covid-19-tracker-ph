@extend('layouts/frontend')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <p class="title">Case History as of ({{substr($country_stats->record_date, 0, 10)}})</p>
                    <table class="table bg-black cases-stats">
                        <tr>
                            <td>Total Cases</td>
                            <td><span class="badge badge-warning">{{$country_stats->total_cases}}</span></td>
                            <th>Deaths</th>
                            <td><span class="badge badge-danger">{{$country_stats->total_deaths}}</span></td>
                            <th>Recovered</th>
                            <td><span class="badge badge-success">{{$country_stats->total_recovered}}</span></td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <p class="title legend-title">Legend</p>
                    <table class="table bg-black legend">
                        <tr>
                            <th>Admitted</th>
                            <td>
                                <div class="lame-warning legend-box"></div>
                            </td>
                            <th>Deaths</th>
                            <td>
                                <div class="lame-danger legend-box"></div>
                            </td>
                            <th>Recovered</th>
                            <td>
                                <div class="lame-success legend-box"></div>
                            </td>
                            <th>No Data</th>
                            <td>
                                <div class="legend-box border"></div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="table-responsive cases-table-wrapper">
                <table class="table" id="cases" style="width: 100%">
                    <thead>
                    <tr>
                        <td>Case#</td>
                        <td>Date</td>
                        <td>Age</td>
                        <td>Gender</td>
                        <td>Nationality</td>
                        <td class="hospital">Hospital</td>
                        <td>Travel&nbsp;History</td>
                        <td>Status</td>
                    </tr>
                    </thead>
                    <tbody style="padding: 0">
                    {foreach $cases_philippines as $case}

                    {if $case->status=='Died'}
                        <?php $badge = "danger"; ?>
                    {elseif $case->status=='Recovered'}
                     <?php $badge = "success"; ?>
                    {elseif $case->status=='Admitted'}
                        <?php $badge = "warning"; ?>
                    {else}
                        <?php $badge = "default"; ?>
                    {endif}

                    {if $case->nationality=='American'}
                     <?php $country = "us" ?>
                    {elseif $case->nationality=='Chinese'}
                     <?php $country = "cn" ?>
                    {elseif $case->nationality=='Filipino'}
                    <?php $country = "ph" ?>
                    {elseif $case->nationality=='Indian'}
                        <?php $country = "in" ?>
                    {elseif $case->nationality=='Taiwanese'}
                     <?php $country = "tw" ?>
                    {else}
                        <?php $country = "PH" ?>
                    {endif}

                    <tr>
                        <td>{{$case->case_no}}</td>
                        <td style="min-width:120px;">{{$case->date}}</td>
                        <td>{{$case->age}}</td>
                        <td>{{$case->gender}}</td>
                        <td>

                            <img src="https://www.countryflags.io/{{$country}}/flat/32.png" width="25">&nbsp;{{$case->nationality}}
                        </td>
                        <td class="hospital">{{$case->hospital_admitted_to}}</td>
                        <td>{{$case->had_recent_travel_history_abroad}}</td>
                        <td class="status">

                            <span class="badge badge-{{$badge}} rounded">
                              {{$case->status}}
                            </span>
                        </td>
                    </tr>
                    {endforeach}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
    table#cases tbody tr td {
        padding: 3px;
    }


</style>

@stop()