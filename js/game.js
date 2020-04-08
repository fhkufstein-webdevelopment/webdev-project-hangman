var words = ['Grundstücksverkehrsgenehmigungszuständigkeitsübertragungsverordnung','Rindfleischetikettierungsüberwachungsaufgabenübertragungsgesetz','Telekommunikationsüberwachungsverordnung'];
var word = words[Math.floor(Math.random() * words.length)];

if(document.getElementById("startbutton").innerHTML("onclick")){
    gamestarten();
    zeit();
    play();
}

function abc () {
    gamestarten();
    zeit();
    play();
}
function gamestarten(){

    document.getElementById(wort).innerHTML = alert(word);
    document.getElementById("countdown").innerHTML = zeit();
}

function zeit(){
    var minuten = 1;
    var sekunden = 59;
    minuten--;
    sekunden--;

    if(minuten == 0)document.getElementById("countdown").innerHTML = "00:"+sekunden;
    else if(sekunden<10){
        document.getElementById("countdown").innerHTML = "00:0"+sekunden;
        document.getElementById("countdown").style.color = red;
    }
}

function play(){
    var answer = [];
    for(var i = 0; i< word.length; i++){
        answer[i] = ""; //einzelne buchstaben in array speichern
    }

    var letters = word.length;

    while (letters > 0) {
        alert(answer.join(" "));

        var guess = prompt("Rate einen Buchstaben"); //Eingabefeld
        if (guess == null) {
            break;
        } else if (guess.length !== 1) {
            alert("Bitte gib einen einzelnen Buchstaben ein oder klicke auf den Button.");
        } else {
            for (var j = 0; j < word.length; j++) {
                if (word[j] === guess) {
                    answer[j] = guess;
                    letters--;
                    document.getElementById("rightsound").play();
                }else{
                    document.getElementById("failsound").play();
                }
            }
        }

        alert(answer.join(" "));
        alert("Gratuliere das Wort lautet " + word);
    }



}

// Balken richtig falsch






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









