@extend('layouts/frontend')


<div class="container-fluid">
    <p class="title c"><img src="/assets/img/phflag.png" height="45">PHILIPPINES &nbsp; &nbsp; &nbsp;</p>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="panel">
                <div class="panel-header">Total # of Infected</div>
                <div class="panel-body panel-warning" id="counter_infected"><!--this is populated by js--></div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="panel">
                <div class="panel-header">Deaths</div>
                <div class="panel-body panel-danger" id="counter_deaths"><!--this is populated by js--></div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="panel">
                <div class="panel-header">Recoveries</div>
                <div class="panel-body panel-success" id="counter_recoveries"><!--this is populated by js--></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <br>
            <p class="title c"><img src="/assets/img/world.png" height="45"> WORLDWIDE &nbsp; &nbsp; &nbsp; &nbsp;  </p>
            <div class="panel">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="animate-delay100 animate-moveFromRight">
                                <p class="panel-subtitle">Cases</p>
                                {{$world_stats->total_cases}}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="animate-delay400 animate-moveFromRight">
                                <p class="panel-subtitle">Deaths</p>
                                {{$world_stats->total_deaths}}
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="animate-delay700 animate-moveFromRight">
                                <p class="panel-subtitle">Recovered</p>
                                {{$world_stats->total_recovered}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <p class="title c">Coronavirus Overview</p>
    <hr>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4">
           <div class="page animate-delay300 animate-fade-in">
               <p class="page-title">DO THE FIVE!</p>
               <ol class="float-left">
                   <li><span class="text-danger">HANDS</span> Wash them often</li>
                   <li><span class="text-danger">ELBOW</span> Cough into it</li>
                   <li><span class="text-danger">FACE</span> Don't touch it</li>
                   <li><span class="text-danger">SPACE</span> Keep safe distance</li>
                   <li><span class="text-danger">HOMES</span> tay if you can</li>
               </ol>
               <img src="/assets/img/five.gif" class="five-image float-right" width="120">
               <div class="clearfix"></div>
               <p>
                   <b>NOTE:</b> Always wear a mask whenever you go out and follow social distancing at all cost.
                   This is the best we can do help prevent the virus from spreading.
               </p>
               <p>Source: <a href="https://who.int" target="_blank">World Health Organization</a></p>
           </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="page animate-delay500 animate-fade-in">
                <p class="page-title">Symptoms</p>
                <div class="page-content">
                    People may be sick with the virus for 1 to 14 days before developing symptoms. The most common symptoms
                    of coronavirus disease (COVID-19) are fever, tiredness, and dry cough. Most people (about 80%)
                    recover from the disease without needing special treatment. More rarely, the disease can be serious
                    and even fatal.
                    <br>
                    <br>
                    Older people, and people with other medical conditions (such as asthma, diabetes, or heart disease), may be
                    more vulnerable to becoming severely ill.
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="page animate-delay700 animate-fade-in">
                <div class="page-title">Treatments</div>
                <div class="page-content">
                    If you have mild symptoms, stay at home until you’ve recovered. You can relieve your symptoms if you:
                    rest and sleep
                    keep warm
                    drink plenty of liquids
                    use a room humidifier or take a hot shower to help ease a sore throat and cough
                </div>
                <br>
                <div class="page-title">Medical Treatments</div>
                <div class="page-content">
                    If you develop a fever, cough, and have difficulty breathing, promptly seek medical care. Call in
                    advance and tell your health provider of any recent travel or recent contact with travelers.
                </div>
            </div>
        </div>
    </div>


</div>

<script>
    window.onload = function () {
        counterAnimate('#counter_infected', "{{$country_stats->total_cases}}");
        counterAnimate('#counter_deaths', "{{$country_stats->total_deaths}}");
        counterAnimate('#counter_recoveries', "{{$country_stats->total_recovered}}");
    }
</script>


@stop()