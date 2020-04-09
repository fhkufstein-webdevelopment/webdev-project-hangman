
var words = ['wort','hase'];
var word = words[Math.floor(Math.random() * words.length)];

let startButton;
let startTimer;
let maxAmountOfTime = 60;
document.addEventListener("DOMContentLoaded",function () { //wenn alles geladen ist
    startButton = document.getElementById("startbutton");
    startButton.addEventListener("click",function () {
        startTimer = setInterval(time,1000);
        startAllItems();
    });
});

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
}

function timeTout() {
    clearInterval(startTimer);
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
let answer = [];
function play(letter){
    for(var i = 0; i< word.length; i++){
        if(letter == word[i].toLowerCase()){
            answer[i] = letter;
            printWordsOut();
        }
        checkIfComplete();
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

function gameComplete(status) {
    clearInterval(startTimer);
    if(status == true){
        alert("You won the Game");
    }else {
        alert("You lost the Game");
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
                location.href = '../html/highscore.html'; //Falsche Adresse bis jetzt
            }
        }
    });
}

//Läuft unser Spiel auf der Seite game mit einem GameController?









