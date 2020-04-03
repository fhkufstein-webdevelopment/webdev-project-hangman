var words = ['Grundstücksverkehrsgenehmigungszuständigkeitsübertragungsverordnung','Rindfleischetikettierungsüberwachungsaufgabenübertragungsgesetz','Telekommunikationsüberwachungsverordnung'];


function zufallszahl(min, max) {
    return Math.random() * (max - min) + min;
}


if(document.getElementById("startbutton").innerHTML("onclick")){
    gamestarten();
}


function gamestarten(){
    words[zufallszahl(0 , words.length - 1)];
    document.getElementById(wort).innerHTML = print(words);
    doument.getElementById("countdown").innerHTML = zeit();
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
    var buchstabe;
    if(buchstabe = indexOf.words){
        document.getElementById("rightsound").play();
    }else{
        document.getElementById("failsound").play();
    }
}

//wie handhaben mit buchstaben?

//Balken richtig/falsch

//einbinden in html