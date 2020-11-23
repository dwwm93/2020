function envoyer() {

    var nom = document.forms["contactForm"]["nom"].value;
    var prenom = document.forms["contactForm"]["prenom"].value;
    var email = document.forms["contactForm"]["email"].value;
    var tel = document.forms["contactForm"]["tel"].value;
    var message = document.forms["contactForm"]["message"].value;

    if (nom == '' || prenom == '' || email == '' || tel == '' || message == '') {
        alert("Merci de remplir le formulaire correctement");
    } else {
        alert("message envoyé");

        //alert(nom + " " + prenom + " " + tel);
    }
}


function connexion() {
    var monId = "test";
    var monMDP = "1234";
    var identifiant = document.forms["connexionForm"]["identifiant"].value;
    var mdp = document.forms["connexionForm"]["mdp"].value;

    if (identifiant == monId && mdp == monMDP) {
        alert("Connexion OK");
    } else {
        alert("identifiant ou mdp incorrect!");

    }
}


function validateForm(formName) {
    var r = false;
    var formulaire = document.forms[formName];
    var nom = formulaire['nom'].value;
    var prenom = formulaire['prenom'].value;
    var adresse = formulaire['adresse'].value;
    var cp = formulaire['cp'].value;
    var laVille = formulaire['ville'].value;
    //var tel = (formulaire['tel'] != undefined) ? formulaire['tel'].value : true;
    var dateNaisance = formulaire['dateNaisance'].value;
    var tel = formulaire['tel'].value;
    var email = formulaire['email'].value;
    var mdp = formulaire['mdp'].value;
    var mdpConfirm = formulaire['mdpConfirm'].value;

    //alert(laVille);
    // alert(ville[laVille]);

    if (!verifAutre(nom)) {
        alert("Merci de remplir le nom");
    } else if (!verifAutre(prenom)) {
        alert("Merci de remplir le prénom");
    } else if (!verifAdresse(adresse)) {
        alert("Merci de remplir l'adresse");
    } else if (!verifCP(cp)) {
        alert("Merci de remplir le CP");
    } else if (laVille == "") {
        alert("Merci de remplir choisir une ville");
    } else if (!verifDate(dateNaisance)) {
        alert("Merci de remplir la date de naissance correctement");
    } else if (!verifTel(tel)) {
        alert("Merci de remplir le tel correctement");
    } else if (!verifEmail(email)) {
        alert("Merci de remplir le mail correctement");
    } else if (!verifMdp(mdp, mdpConfirm)) {
        r = false;
    } else {
        alert("message envoyé");
        r = true;
    }
    return r;
}



function verifMdp(mdp, mdpConfirm) {
    if (mdp.length < 6) {
        alert("mdp trop court.");
        return false;
    } else if (mdp != mdpConfirm) {
        alert("mdp est diferent du mdp confirm.");
        return false;
    } else {
        return true;
    }
}

function verifEmail(email) {
    var resultat = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(email);
    return resultat;
}


function verifTel(tel) {
    var resultat = /^0[1-9]{1,1}[0-9]{8,8}$/.test(tel);
    return resultat;
}

function verifDate(valeur) {
    if (valeur != '') {
        var resultat = /^[0-9]{4,4}-[0-9]{2,2}-[0-9]{2,2}$/.test(valeur);
        //var resultat = /^[0-9]{2,2}\/[0-9]{2,2}\/[0-9]{4,4}$/.test(valeur);
        return resultat; // true ou false
    } else {
        return true;
    }
}

function verifAutre(valeur) {
    var resultat = /^[a-zA-Z -'êëéèà]+$/.test(valeur);
    return resultat;
}

function verifAdresse(valeur) {
    var resultat = /^[a-zA-Z0-9, -'êëéèà]+$/.test(valeur);
    return resultat;
}

function verifCP(valeur) {
    var resultat = /^[0-9]{5,5}$/.test(valeur);
    return resultat;
}