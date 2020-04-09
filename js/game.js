let words = ['Grundstücksverkehrsgenehmigungszuständigkeitsübertragungsverordnung','Rindfleischetikettierungsüberwachungsaufgabenübertragungsgesetz','Telekommunikationsüberwachungsverordnung'];
let word = words[Math.floor(Math.random() * words.length)];



let maxAmountOfTime = 60; //let = Variable
document.addEventListener("DOMContentLoaded",function () { //wenn alles geladen ist

    document.getElementById("startbutton").addEventListener("click",function () {
        setInterval(timer,1000);
    })
});



let timer = function zeit(){
    maxAmountOfTime--;
    if(maxAmountOfTime > 10){
        document.getElementById("countdown").innerHTML = "00:"+maxAmountOfTime;
    }else if (maxAmountOfTime<10 && maxAmountOfTime>=0){
        document.getElementById("countdown").style.color = "red";
        document.getElementById("countdown").innerHTML = "00:"+"0"+maxAmountOfTime;
    }else {
        timeTout();
    }
};


function timeTout() {
    clearInterval(timer);
}


function play(buchstabe){

    let answer = [];
    for(var i = 0; i< word.length; i++){

        if(buchstabe == word[i]){

            answer[i] = buchstabe;
            alert (answer);
        }

        checkIfComplete();
    }

}

function checkIfComplete() {
    let richtig = 0;
    let falsch = 0;
    for (let i = 0; i<word.length;i++){
        if(answer[i] == word[i]){
            richtig++;
        }else{
            document.getElementById("blume").src = "b_fehler1" + ".png";
            falsch++;

        }
    }
    if(richtig == word.length){
        alert("spiel fertig");
    }
}




// TODO: Richtige Variablen für Funktion verwenden
// Funktion für das Ende des Spiels (in etwa)
function gameFinished(userTime) {
    //keine Ahnung

    $.ajax({
        'url': 'game',
        'method': 'post',
        'data': {'action': 'saveScore', 'time': userTime},
        'success': function (receivedData) {
            if(receivedData.result) {
                //after save change url to scorebord
                location.href = 'highscore'; //Falsche Adresse bis jetzt
            }
        }
    });
}










