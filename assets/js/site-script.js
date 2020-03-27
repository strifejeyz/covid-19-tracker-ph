let data = {}
let counter = 0;


onVirusCheck = (element) => {
    counter = 0;

    if (element.name == "selfCheckInput1") {
        data.selfCheckInput1 = element.value;
    }
    if (element.name == "selfCheckInput2") {
        data.selfCheckInput2 = element.value;
    }
    if (element.name == "selfCheckInput3") {
        data.selfCheckInput3 = element.value;
    }
    if (element.name == "selfCheckInput4") {
        data.selfCheckInput4 = element.value;
    }
    if (element.name == "selfCheckInput5") {
        data.selfCheckInput5 = element.value;
    }
    if (element.name == "selfCheckInput6") {
        data.selfCheckInput6 = element.value;
    }
    console.log(data);

    if ((Object.keys(data).length) >= 6) {
        $('#examine_button').removeAttr('disabled');
    }
}


onExamine = () => {
    if ((Object.keys(data).length) == 6) {
        if (data.selfCheckInput1 == 'yes') {
            counter++;
        }

        if (data.selfCheckInput2 == 'yes') {
            counter++;
        }

        if (data.selfCheckInput3 == 'yes') {
            counter++;
        }

        if (data.selfCheckInput4 == 'yes') {
            counter++;
        }

        if (data.selfCheckInput5 == 'yes') {
            counter++;
        }

        if (data.selfCheckInput6 == 'yes') {
            counter++;
        }

        if (counter <= 1) {
            $('#result').html(`
                <div class='alert alert-warning'>
                    Make sure to continuously asses yourself, work on boosting your immune system.
                    Prevention is still better than cure(because we don't have a cure yet). If unsure, consult a medical provider
                    or local authority.
                </div>
            `);
        } else if (counter <= 3) {
            $("#result").html("" +
                `<div class='alert alert-warning'>
                Looks like you have mild symptoms.
                <ul>
                    <li>rest and sleep</li>                
                    <li>keep warm</li>                
                    <li>drink plenty of liquids</li>                
                    <li>use a room humidifier or take a hot shower to help ease a sore throat and cough</li>                
                    <li>Contact your medical provider for suggestions</li>
                </ul>
                </div>
            `);
        } else if (counter <= 6) {
            $("#result").html(`
                <div class="alert alert-danger">
                Looks like you have symptoms.
                    <ul>
                        <li>rest and sleep</li>                
                        <li>keep warm</li>                
                        <li>drink plenty of liquids</li>                
                        <li>use a room humidifier or take a hot shower to help ease a sore throat and cough</li>                
                        <li>Contact your medical provider for suggestions</li>
                    </ul>
                    If you develop a <b>fever</b>, <b>cough</b>, and have <b>difficulty breathing</b>, promptly seek medical care. 
                    Call in advance and tell your health provider/local authorities of any recent travel or recent contact with travelers.
                </div>
            `);
        }
    }
}



function counterAnimate(element, value) {
    var element = $(element);

    $({value: 0}).stop(true).animate({value: value}, {
        duration : 3600,
        easing: "easeOutExpo",
        step: function () {
            var percentageVal = Math.ceil(this.value);
            element.text(percentageVal);
        }
    }).promise().done(function () {
        element.text(value);
    });
}