var request;
$("#dataform").submit(function(event){

    if (request) {
        request.abort();
    }
    var $form = $(this);
    var $inputs = $form.find("input, select, button, textarea");
    var serializedData = $form.serialize();
    request = $.ajax({
        url: "https://script.google.com/macros/s/AKfycbwsO0ph98mIC32fX3Q1uWSXn0Y3qR80dzbi4sCTJd1ZXc_ra6HB/exec",
        // url: "https://script.google.com/macros/s/AKfycbxbSlf1F3teZDihR2QIuGBKWELIZ4APk8sEE5Vg7L-Mq8VM06e6/exec",
        type: "post",
        data: serializedData
    });
    request.done(function (response, textStatus, jqXHR){      
    window.open('registered.html','_self',false);
    });

    request.fail(function (jqXHR, textStatus, errorThrown){
        document.getElementById("demo1").style.display = "none";
    });
    event.preventDefault();
});
// http://bit.ly/DAA-IF19-DATA
