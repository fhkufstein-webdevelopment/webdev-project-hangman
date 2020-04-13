
var words = ['wort','hase', 'apfelbaum', 'baumhaus', 'birnenkuchen', 'albus', 'benzinmotor' ];
var word = words[Math.floor(Math.random() * words.length)];

let startButton;
let startTimer;
let maxAmountOfTime = 60;
let highscoreButton;
document.addEventListener("DOMContentLoaded",function () { //wenn alles geladen ist
    startButton = document.getElementById("startbutton");
    highscoreButton = document.getElementById("highscore");
    alphabetButtonStatus(true);
    startButton.addEventListener("click",function () {
        startTimer = setInterval(time,1000);
        alphabetButtonStatus(false);
        startAllItems();
    });
    highscoreButton.addEventListener("click", function(){
        gameFinished(maxAmountOfTime);
    })
});
let alphabet = "abcdefghijklmnopqrstuvwxyzäöü"
function alphabetButtonStatus(status) {
    for(let i = 0; i< alphabet.length;i++){
        let currentButton = "alphabet-"+alphabet[i]; //id
        document.getElementById(currentButton).disabled = status;
    }
}

function time(){
    maxAmountOfTime--;
    if(maxAmountOfTime > 10){
        document.getElementById("countdown").innerHTML = "00:"+maxAmountOfTime;
    }else if (maxAmountOfTime<10 && maxAmountOfTime>=0){
        document.getElementById("countdown").style.color = "red";
        document.getElementById("countdown").innerHTML = "00:"+"0"+maxAmountOfTime;
    }else if (maxAmountOfTime < 0) {
        gameComplete(false);
        maxAmountOfTime = 60;
        clearInterval(startTimer);

    }
};
function startAllItems() {
    startTimer;
    startButton.disabled = true;
}

function timeTout() {
    clearInterval(startTimer);
    startButton.disabled = true;
}


function checkIfComplete() {
    let richtig = 0;
    for (var i = 0; i<word.length;i++){
        if(answer[i] == word[i]){
            richtig++;
        }
    }
    if(richtig == word.length){
        gameComplete(true);
    }
}
let letterCount = 0;
let letterCountOld = 0;
let flowerStatus = 5;

var answer = [];
function play(letter){
    let letterToDisable = "alphabet-" + letter;
    document.getElementById(letterToDisable).disabled = true;

    for(var i = 0; i< word.length; i++){
        if(letter == word[i].toLowerCase()){
            answer[i] = letter;
            printWordsOut();
        }
        checkIfComplete();
    }
    if(letterCountOld<letterCount){
        letterCountOld = letterCount;
        switchFlower(1);
    }else {
        switchFlower(-1);
    }
}


function printWordsOut(){
    letterCount = 0;
    document.getElementById("ausgabe").innerHTML = "";
    for(let i = 0; i < answer.length;i++){
        if(answer[i] == null){
            document.getElementById("ausgabe").innerHTML += " ";
        }else{
            document.getElementById("ausgabe").innerHTML += answer[i];
            letterCount++;
        }
    }
}

function switchFlower(changes) {
    flowerStatus += changes;
    if(flowerStatus > 6){
        flowerStatus = 6;
    }else if(flowerStatus <= 0){
        gameComplete(false);
    }else{


        switch (flowerStatus) {
            case 6: {
                document.getElementById("blume").style.visibility = "hidden";
                document.getElementById("animation").style.visibility = "visible";
                document.getElementById("animation").src = "pics/logo.mp4";
                break
            }
            case 5: {
                document.getElementById("blume").style.visibility = "visible";
                document.getElementById("animation").style.visibility = "hidden";
                document.getElementById("blume").src = "pics/b_voll.png";
                break;
            }
            case 4:
                document.getElementById("blume").src = "pics/b_fehler1.png";
                break;
            case 3:
                document.getElementById("blume").src = "pics/b_fehler2.png";
                break;
            case 2:
                document.getElementById("blume").src = "pics/b_fehler3.png";
                break;
            case 1:
                document.getElementById("blume").src = "pics/b_fehler4.png";
                gameComplete(false);
                break;
        }
    }
}


function gameComplete(status, time) { // user und time für den highscore
    alphabetButtonStatus(true);
    startButton.disabled  = false;
    clearInterval(startTimer);
    if(status == true){
        alert("You won the Game");
    }else {
        alert("You lost the Game");
    }
    document.getElementById("startbutton").style.visibility = "hidden";
    document.getElementById("highscore").style.visibility = "visible";

    // Daten an den Highscore zu übergeben
    $.ajax({
        'url':    'game',
        'method': 'post',
        'data':    {'action': 'saveScore', 'time': time}, // zeit mit time ersetzt
        //'variablenname': phpMyAdmin-Spaltenname ? oder die funktion, weil wenn man es in diesen `` lässt und dann mit strg+b kommt man auf die Funktion..
        //und Savescore ist auch eine Funktion -> aber diese findet er nicht

        'success': function(receivedData) {
            if(receivedData.result) {
                //after save change url to scoreboard
                location.href = 'highscore';
            }
        }
    });
}
/* könnte man löschen
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
                location.href = '../html/highscore.html'; //Falsche Adresse bis jetzt
            }
        }
    });
} */










