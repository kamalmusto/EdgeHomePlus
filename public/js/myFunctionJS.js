function loadData(){
    var flameSensor = dyanmicRequest('GET','flame',1);
    var dhtSensor = dyanmicRequest('GET','dht',1);
    var doorSensor = dyanmicRequest('GET','door',2);
    flameSensor.onload = function () {
        if (flameSensor.status == 200) {
            let data = JSON.parse(flameSensor.response);
            if (data.type == 'flame') {document.getElementById('flame').innerText = data.value;
                if(data.value > 0) {
                    $('#alertFlameCard').removeClass('bg-info');
                    $('#alertFlameCard').addClass('bg-warning');
                    document.getElementById('statusFlameAlert').innerHTML = 'WARNING';
                }
            }
        }
    };
    dhtSensor.onload = function () {
        if (dhtSensor.status == 200) {
            let data = JSON.parse(dhtSensor.response);
            if (data.type == 'dht') { document.getElementById('temp').innerText = data.temp; document.getElementById('hum').innerText = data.hum;}
        }};
    doorSensor.onload = function () {
        if (doorSensor.status == 200) {
            let data = JSON.parse(doorSensor.response);
            if (data.type == 'door') {
                document.getElementById('door').innerText = data.value;
            }
        }};
}

/**
 * dyanmicRequest
 * @param {String} typeRequest
 * @param {String} typeDevice
 * @param {String} idDevice
 * @return {XMLHttpRequest}
 */
function dyanmicRequest(typeRequest,typeDevice,idDevice) {
    var req = new XMLHttpRequest();
    req.open(typeRequest,'http://localhost:8000/api/'+typeDevice+'/'+idDevice);
    req.send();
    return req;
}
function offLed(id) {
    var req = new XMLHttpRequest();
    req.open('PUT','http://localhost:8000/api/led/'+1);
    var data = {status:"on",is_active:1};
    req.send(data);

}
function onLed(id) {
    var req = new XMLHttpRequest();
    req.open('PUT','http://localhost:8000/api/led/'+1,false);
    var data = {status:"off",is_active:0};
    req.send(data);
}

