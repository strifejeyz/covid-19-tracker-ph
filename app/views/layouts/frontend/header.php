<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Coronavirus Tracker</title>
    <base href="/">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="description" name="Corona Virus Case Tracker">
    <meta content="author" name="Jeyz(Jesse) Strife">
    <meta property="og:description"
          content="Covid-19 Tracker provides real-time updates for necessary information about affected regions, Case details, checkpoints with maps, cases overview, in the Philippines."/>
    <meta property="og:image" content="http://www.coronavirus-tracker.tk/assets/img/fbscrape.jpeg"/>
    <meta property="og:url" content="http://www.coronavirus-tracker.tk"/>
    <meta property="og:type" content="website"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow+Condensed&display=swap">
    <link rel="stylesheet" href="/assets/css/animator.css">
    <link rel="stylesheet" href="/assets/css/sidebar.css">
    <link rel="stylesheet" href="/assets/css/global.css">
    {!@$css!}
</head>
<body>

<div class="map-overlay">
    <div id="map">
        <div class="map-header">
            <span class="float-left map-title">Lockdown on Road Whatever</span>
            <button class="float-right map-close" onclick="onCloseMap()">X</button>
            <div class="clearfix"></div>
        </div>
        <div class="map-body" id="map-interpolate">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur dolore doloribus harum, itaque nisi
            obcaecati veniam! Beatae deserunt dolor eveniet exercitationem, explicabo iste itaque modi nostrum quae quas
            quibusdam tenetur.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur dolore doloribus harum, itaque nisi
            obcaecati veniam! Beatae deserunt dolor eveniet exercitationem, explicabo iste itaque modi nostrum quae quas
            quibusdam tenetur.
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg fixed-top">
    <a class="navbar-brand" href="/">
        <img src="assets/img/covid-19.png" alt="Covid-19 Image">
        <span class="app">&nbsp; Coronavirus Tracker</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="nav navbar-nav mr-auto">
            <li class="nav-item animate-delay100 animate-moveFromRight">
                <a class="nav-link" href="/cases/philippines">
                    <span class="fa fa-list"></span>&nbsp;
                    Case History</a>
            </li>
            <li class="nav-item animate-delay300 animate-moveFromRight">
                <a class="nav-link" href="/checkpoints/metro-manila">
                    <span class="fa fa-map-marker"></span>&nbsp;
                    Checkpoints (Metro Manila)</a>
            </li>
            <li class="nav-item animate-delay500 animate-moveFromRight">
                <a class="nav-link" href="/self-check">
                    <span class="fa fa-stethoscope"></span>&nbsp;
                    Guidelines & Self-Check</a>
            </li>
        </ul>
    </div>
</nav>

<br>
<br>
<br>

<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <p class="title">Latest&nbsp;Updates</p>
        <hr>
        <ul class="list-group">
            <li class="list-group-item">
                <span class="badge badge-warning">{{$country_stats->total_cases}} </span> &nbsp;Total confirmed cases.
            </li>
            <li class="list-group-item">
                <span class="badge badge-danger">{{$country_stats->total_deaths}} </span> &nbsp;Confirmed deaths.
            </li>
            <li class="list-group-item">
                <span class="badge badge-success">{{$country_stats->total_recovered}} </span> &nbsp;Total of Recovered
            </li>
        </ul>

        <hr>

        <p class="title">Helpful Links</p>

        <ul class="list-group sidebar-nav">
            <a href="/cases/philippines" class="list-group-item">
                <i class="fa fa-caret-right"></i> Case History
            </a>
            <a href="/checkpoints/metro-manila" class="list-group-item">
                <i class="fa fa-caret-right"></i> Checkpoints
            </a>
            <a href="/self-check" class="list-group-item">
                <i class="fa fa-caret-right"></i> Guidelines & Self-Check
            </a>
        </ul>

        <hr>

        <p class="title">Covid-19 Hotlines</p>
        <ul class="hotlines">
            <li>1555 (PLDT, Smart, Sun, & TnT)</li>
            <li>(02) 894-26843 (894-COVID)</li>
        </ul>
    </div>

    <!-- Page Content -->
    <div id="page-content-wrapper">