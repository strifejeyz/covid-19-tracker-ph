@extend('layouts/frontend')

<div class="container-fluid">
    <p class="title">
        <span class="fa fa-stethoscope"></span>
        Self-Check and Guidelines
    </p>

    <div class="row">
        <div class="col-md-6">
            <div class="page nobg nothingness">
                <div class="page-body">
                    <div class="page-content" id="self-check">
                        <p class="page-title">Guidelines & Self-Check</p>
                        <hr>
                        There’s currently <b>NO VACCINE</b> to prevent coronavirus disease (COVID-19).
                        You can protect yourself and help prevent spreading the virus to others if you:

                        <br>
                        <b>Do</b>
                        <ul>
                            <li>Wash your hands regularly for 20 seconds, with soap and water or alcohol-based hand
                                rub
                            </li>
                            <li>Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or
                                sneeze
                            </li>
                            <li>Avoid close contact (1 meter or 3 feet) with people who are unwell</li>
                            <li>Stay home and self-isolate from others in the household if you feel unwell</li>
                        </ul>

                        <b>Don't</b>
                        <ul>
                            <li>Touch your eyes, nose, or mouth if your hands are not clean</li>
                        </ul>


                        <hr>


                        <p class="page-title">Consider doing a self-check below</p>
                        <br>
                        <div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Are you having a fever?</h5>
                                </div>
                                <div class="col-md-6">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input onclick="onVirusCheck(this)" value="yes" type="radio" id="selfCheckInput1" name="selfCheckInput1"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="selfCheckInput1">YES</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input onclick="onVirusCheck(this)" value="no" type="radio" id="selfCheckInput2" name="selfCheckInput1"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="selfCheckInput2">NO</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Do you have dry cough?</h5>
                                </div>
                                <div class="col-md-6">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input onclick="onVirusCheck(this)" value="yes" type="radio" id="selfCheckInput3" name="selfCheckInput2"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="selfCheckInput3">YES</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input onclick="onVirusCheck(this)" value="no" type="radio" id="selfCheckInput4" name="selfCheckInput2"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="selfCheckInput4">NO</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Do you feel exhausted/tired?</h5>
                                </div>
                                <div class="col-md-6">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input onclick="onVirusCheck(this)" value="yes" type="radio" id="selfCheckInput5" name="selfCheckInput3"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="selfCheckInput5">YES</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input onclick="onVirusCheck(this)" value="no" type="radio" id="selfCheckInput6" name="selfCheckInput3"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="selfCheckInput6">NO</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Heavy/Difficulty in breathing?</h5>
                                </div>
                                <div class="col-md-6">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input onclick="onVirusCheck(this)" value="yes" type="radio" id="selfCheckInput7" name="selfCheckInput4"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="selfCheckInput7">YES</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input onclick="onVirusCheck(this)" value="no" type="radio" id="selfCheckInput8" name="selfCheckInput4"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="selfCheckInput8">NO</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Do you have a Soar Throat?</h5>
                                </div>
                                <div class="col-md-6">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input onclick="onVirusCheck(this)" value="yes" type="radio" id="selfCheckInput9" name="selfCheckInput5"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="selfCheckInput9">YES</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input onclick="onVirusCheck(this)" value="no" type="radio" id="selfCheckInput10" name="selfCheckInput5"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="selfCheckInput10">NO</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Aches and Pains?</h5>
                                </div>
                                <div class="col-md-6">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input onclick="onVirusCheck(this)" value="yes" type="radio" id="selfCheckInput11" name="selfCheckInput6"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="selfCheckInput11">YES</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input onclick="onVirusCheck(this)" value="no" type="radio" id="selfCheckInput12" name="selfCheckInput6"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="selfCheckInput12">NO</label>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <span id="result" class="expand"></span>

                            <div class="row">
                                <div class="col-sm-12 col-sm-12 col-md-6 offset-md-3 offset-sm-0">
                                    <button onclick="onExamine()" disabled class="btn btn-primary btn-lg expand" id="examine_button">Complete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="page">
                <div class="page-body">
                    <p class="page-title">About Corona Virus</p>
                    <p class="page-content">
                        About
                        Coronavirus disease (COVID-19) is an infectious disease caused by a new virus.
                        The disease causes respiratory illness (like the flu) with symptoms such as a cough, fever, and
                        in more
                        severe cases, difficulty breathing. You can protect yourself by washing your hands frequently,
                        avoiding
                        touching your face, and avoiding close contact (1 meter or 3 feet) with people who are unwell.
                    </p>


                    <p class="page-title">HOW IT SPREADS</p>
                    <p class="page-content">
                        Coronavirus disease spreads primarily through contact with an infected person when they cough or
                        sneeze.
                        It also spreads when a person touches a surface or object that has the virus on it, then touches
                        their
                        eyes, nose, or mouth.
                    </p>


                    <div class="row">
                        <div class="col-md-6">
                            <p class="page-title">Symptoms</p>
                            <p class="page-content">
                                People may be sick with the virus for 1 to 14 days before developing symptoms. The most
                                common symptoms
                                of coronavirus disease (COVID-19) are fever, tiredness, and dry cough. Most people
                                (about 80%) recover
                                from the disease without needing special treatment.
                                More rarely, the disease can be serious and even fatal. Older people, and people with
                                other medical
                                conditions (such as asthma, diabetes, or heart disease), may be more vulnerable to
                                becoming severely
                                ill.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <div class="page-content">
                                <p class="page-title">People may experience:</p>
                                <ul>
                                    <li>Cough</li>
                                    <li>Fever</li>
                                    <li>Tiredness</li>
                                    <li>Difficulty breathing (severe cases)</li>
                                </ul>

                                <hr>

                                For informational purposes only. Consult your local medical authority for advice.
                                <br>
                                <br>
                                <b>Source: <a href="https://who.int" target="_blank">World Health Organization</a></b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop()