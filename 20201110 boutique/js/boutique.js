var menu = [
    ["Produits", "#", "", "fa-code"], // 0 [0,1,2]
    ["Panier", "#", "", "fa-shopping-cart"], // 1 [0,1,2]
    ["Service", "service.html", "", "fa-concierge-bell"], // 2 [0,1,2]
    ["Contact", "#", "onclick=\"ouvrirFenetre('#contact');\"", "fa-comment-alt"], // 3 [0,1,2]
    ["Connexion", "#", "onclick=\"ouvrirFenetre('#login');\"", "fa-user-circle"], // 3 [0,1,2]
    ["Incription", "#", "onclick=\"ouvrirFenetre('#inscription');\"", "fa-user-circle"] // 3 [0,1,2]
];


var tabTest = [1, 2, 5, 8, "hello", ["Produits", "Panier", [45465, 4, 4, [4, 5], 45]], 1, 0, 4, 5];

var service = {
    nom: "vente",
    photo: "https://picsum.photos/500/201",
    description: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis ipsum quae facere dolorum laborum at et necessitatibus voluptatum sed laudantium voluptas praesentium eius nesciunt, natus maiores corporis debitis adipisci ducimus."
};

if (document.querySelector("#service") != null) {

    document.querySelector("#nomService").innerHTML = service.nom;
    document.querySelector("#imgService").src = service.photo;
    document.querySelector("#descriptionService").innerHTML = service.description;
}


var services = [{
        nom: "Vente",
        photo: "https://picsum.photos/500/201",
        description: "Lorem ipsum dolor sit amet consectetur adipisicing elit."
    }, {
        nom: "Location ",
        photo: "https://picsum.photos/500/200",
        description: "Lorem ipsum dolor sit amet consectetur adipisicing elit. "
    },
    {
        nom: "Maintenances",
        photo: "https://picsum.photos/500/202",
        description: "Lorem ipsum dolor sit amet consectetur adipisicing elit."
    }
];

if (document.querySelector("#services") != null) {
    for (let i = 0; i < services.length; i++) {
        document.querySelector("#services").innerHTML += "<h2>" + services[i].nom + "</h2><img src='" + services[i].photo + "'> <p>" + services[i].description + "</p>";
    }
}
/*
var menu = ["Produits", "Panier"];
var menuLink =["#produits", "#panier"]
*/
if (document.querySelector("#menu") != null) {
    for (i = 0; i < menu.length; i++) {
        //   document.querySelector("#menu").innerHTML += "<li><a href='#produits'>Produits</a></li>";
        document.querySelector("#menu").innerHTML += '<li><a href="' + menu[i][1] + '" ' + menu[i][2] + '><i class="fas ' + menu[i][3] + '"></i> ' + menu[i][0] + '</a></li>';
    }
}



if (document.querySelector("#ville") != null) {
    var villes = ["paris", "marseille", "lille", "lyon"];
    for (i = 0; i < villes.length; i++) {
        document.querySelector("#ville").innerHTML += '<option value="' + i + '">' + villes[i] + '</option > ';
    }
}

var total = 0;

var produits = [
    ["Audi Q5", "https://picsum.photos/200/100", 2500], // 0 [0,1,2]
    ["Renault Clio", "https://picsum.photos/200/103", 500], // 1 [0,1,2]
    ["DS 7", "https://picsum.photos/200/102", 4500], // 2 [0,1,2]
    ["peugeot 206", "https://picsum.photos/200/101", 2500], // 3 [0,1,2]
    ["peugeot 3008", "https://picsum.photos/200/99", 2800], // 3 [0,1,2]
    ["Renault R9", "https://picsum.photos/200/97", 400], // 3 [0,1,2]
];


if (document.querySelector("#produits") != null) {
    for (i = 0; i < produits.length; i++) {

        document.querySelector("#produits").innerHTML += "<article ><img src='" + produits[i][1] + "' title='" + produits[i][0] + "' ><p>" + produits[i][0] + "<p><h2> " + produits[i][2] + "€</h2><button onclick='ajoutPanier(" + i + ");'>Ajouter au panier</button></article>";
    }
}


function ajoutPanier(position) {
    total += produits[position][2];
    document.querySelector("#panierProduit").innerHTML += "<div ><img src='" + produits[position][1] + "' style=' width: 50px;' > " + produits[position][0] + " : " + produits[position][2] + " €</div>";
    document.querySelector("#total").innerHTML = "Total : " + total + " €";

}

function payer() {
    var confirmation = document.querySelector("#confirmation");
    confirmation.style.display = "block";
    confirmation.innerHTML = document.querySelector("#panierProduit").innerHTML + "<hr>";
    confirmation.innerHTML += document.querySelector("#total").innerHTML;
    confirmation.innerHTML += '<br><button onclick="annuler(\'#confirmation\');">Annuler</button> <button onclick="validerPanier();">Valider</button>'
}

function validerPanier() {
    document.querySelector("#panierProduit").innerHTML = "";
    document.querySelector("#total").innerHTML = "";
    document.querySelector("#confirmation").style.display = "none";
}



function annuler(cible) {
    document.querySelector(cible).style.display = "none";
    return false;
}

function ouvrirFenetre(cible) {
    document.querySelector(cible).style.display = "block";

}