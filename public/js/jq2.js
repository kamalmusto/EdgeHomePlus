$(document).ready(function () {
    $('html').niceScroll();
    $(document).on('click','a[data-role=onLed]',function () {
     var id = $(this).data('id');
     var roomName = $('#'+id).children('td[data-target=roomName]').text();
     var ledStatus = $('#'+id).children('td[data-target=ledStatus]');
     var is_active = 1;
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
         success: function (response) {
             $('#'+id).children('td[data-target=ledStatus]').text(response.status);
             $('#'+id).children('td[data-target=ledStatus]').addClass('badge badge-success');
             console.log(response);
         }
       });
   });
    $(document).on('click','a[data-role=offLed]',function () {
        var id = $(this).data('id');
        $.ajax({
            url: "http://localhost:8000/api/led/"+id,
            // The data to send (will be converted to a query string)
            data:{
                "status":"off",
                "is_active":0
            },
            // Whether this is a POST or GET request
            type: "PUT",
            // The type of data we expect back
            dataType : "json",
            success: function (response) {
                console.log(response);
                $('#'+id).children('td[data-target=ledStatus]').text(response.status);
            }
        });
    });
    $.ajax({
        url:'http://localhost:8000/api/flame/1',
        type:'GET',
        datatype:'JSON',
        success:function (response) {
            if (response.type == 'flame') {document.getElementById('flame').innerText = response.value;
                if(response.value > 90) {
                    $('#alertFlameCard').removeClass('bg-info');
                    $('#alertFlameCard').addClass('bg-warning');
                    document.getElementById('statusFlameAlert').innerHTML = 'Warning';
                }
                else {
                    $('#alertFlameCard').removeClass('bg-warning');
                    $('#alertFlameCard').addClass('bg-info');
                    document.getElementById('statusFlameAlert').innerHTML = 'Good';
                }
            }
        }

    });
    $.ajax({
        url:'http://localhost:8000/api/dht/1',
        type:'GET',
        datatype:'JSON',
        success:function (response) {
                if (response.type == 'dht') { document.getElementById('temp').innerText = response.temp; document.getElementById('hum').innerText = response.hum;}
                if(response.temp > 22 || response.hum > 40) {

                    document.getElementById('venSystem').innerText = "ON";
                }
                else {
                    document.getElementById('venSystem').innerText= "OFF";
                }
        }
    });
});
