var words = ['Grundstücksverkehrsgenehmigungszuständigkeitsübertragungsverordnung','Rindfleischetikettierungsüberwachungsaufgabenübertragungsgesetz','Telekommunikationsüberwachungsverordnung'];
var word = words[Math.floor(Math.random() * words.length)];



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

    var answer = [];
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
    for (var i = 0; i<word.length;i++){
        if(answer[i] == word[i]){
            richtig++;
        }
    }
    if(richtig == word.length){
        alert("spiel fertig");
    }
}


/*function play(buchstabe){

    var answer = [];
    for(var i = 0; i< word.length; i++){
        answer[i] = ""; //einzelne buchstaben in array speichern
    }

    var letters = word.length;

    while (letters > 0) {
        document.getElementById("ausgabe").innerHTML = answer.join(" ");

        var guess = buchstabe ;
        if (guess == null) {
            break;
        } else if (guess.length !== 1) {
            document.getElementById("ausgabe").innerHTML = "Bitte gib einen einzelnen Buchstaben ein oder klicke auf den Button.";
        } else {
            for (var j = 0; j < word.length; j++) {
                if (word[j] === guess) {
                    answer[j] = guess;
                    letters--;
                    document.getElementById("rightsound").play();
                }else{
                    document.getElementById("failsound").play();
                    document.getElementById("blume").src = "webdev-project-hangman/pics/b_fehler1" +".png";
                }
            }
        }


    }
    document.getElementById("ausgabe").innerHTML = answer.join(" ");
    document.getElementById("Gratuliere! Das Wort lautet " + word);


}*/


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

//Läuft unser Spiel auf der Seite game mit einem GameController?









