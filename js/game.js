let words = ['grundstücksverkehrsgenehmigungszuständigkeitsübertragungsverordnung','rindfleischetikettierungsüberwachungsaufgabenübertragungsgesetz','telekommunikationsüberwachungsverordnung'];
let word = words[Math.floor(Math.random() * words.length)];



let maxAmountOfTime = 60;
document.addEventListener("DOMContentLoaded",function () { //wenn alles geladen ist

    document.getElementById("startbutton").addEventListener("click",function () {
        setInterval(timer,1000);
    })

    document.getElementById("wort").style

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


let fehler = 0;
let answer = [];

function play(buchstabe){

    for(var i = 0; i< word.length; i++){

        if(buchstabe == word[i]){

            answer[i] = buchstabe;
            document.getElementById("ausgabe").innerHTML = answer;

            if(fehler != 0){
                fehler--;
            }else if(document.getElementById("blume").src == "../pics/b_voll.png"){
                document.getElementById("animation").style.visibility = "visible";
                document.getElementById("blume").style.visibility = "hidden";
            }
            document.getElementById("blume").src = "../pics/b_fehler" + fehler + ".png";
        }else{
            fehler++;
            document.getElementById("blume").src = "../pics/b_fehler" + fehler + ".png";
        }

        checkIfComplete();
    }

}

function checkIfComplete() {
    let richtig = 0;
    for (let i = 0; i<word.length;i++){
        if(answer[i] == word[i]){
            richtig++;
        }
    }
    if(richtig == word.length){
        alert("spiel fertig");
        timeTout();
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










