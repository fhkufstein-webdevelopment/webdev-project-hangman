var words = ['Grundstücksverkehrsgenehmigungszuständigkeitsübertragungsverordnung','Rindfleischetikettierungsüberwachungsaufgabenübertragungsgesetz','Telekommunikationsüberwachungsverordnung'];

function zufallszahl(min, max) {
    return Math.random() * (max - min) + min;
}

words[zufallszahl(0 , words.length - 1)];