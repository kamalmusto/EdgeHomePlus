$(document).ready(function () {

    }
);
function onLed(node,id) {
    alert('You clicked');
    $.ajax({
        url: "http://localhost:8000/api/led/"+id,
        // The data to send (will be converted to a query string)

        data:{
            "status":"on",
            "is_active":1
        },
        // Whether this is a POST or GET request
        type: "PUT",

        // The type of data we expect back
        dataType : "json",
    })
    // Code to run if the request succeeds (is done);
    // The response is passed to the function
        .done(function( json,node ) {
           node.siblings('.st').text(json.value);
           console.log(json);
        })
        // Code to run if the request fails; the raw request and
        // status codes are passed to the function
        .fail(function( xhr, status, errorThrown ) {
            alert( "Sorry, there was a problem!" );
            console.log( "Error: " + errorThrown );
            console.log( "Status: " + status );
            console.dir( xhr );
        })
        // Code to run regardless of success or failure;
        .always(function( xhr, status ) {
            alert( "The request is complete!" );
            console.log( "Status: " + status );

        });
}
