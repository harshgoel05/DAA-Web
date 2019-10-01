var request;
$("#dataform").submit(function(event){

    if (request) {
        request.abort();
    }
    var $form = $(this);
    var $inputs = $form.find("input, select, button, textarea");
    var serializedData = $form.serialize();
    // $inputs.prop("disabled", true);

    // Fire off the request to /form.php
    request = $.ajax({
        url: "https://script.google.com/macros/s/AKfycbwsO0ph98mIC32fX3Q1uWSXn0Y3qR80dzbi4sCTJd1ZXc_ra6HB/exec",
        type: "post",
        data: serializedData
    });

    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        // Log a message to the console
        // console.log("Hooray, it worked!");
        // console.log(response);
        // console.log(textStatus);
        // console.log(jqXHR);
        
    window.open('registered.html','_self',false);
    });

    // Callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown){
        // Log the error to the console
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });
    event.preventDefault();
});
// http://bit.ly/DAA-IF19-DATA