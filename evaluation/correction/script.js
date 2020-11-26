/* If you're feeling fancy you can add interactivity 
    to your site with Javascript */

var eleves = [
  {
    prenom: "Naïma",
    nom: "BOUHARIRA",
    tel: "0606060606",
    email: "email@gmail.com",
    description: "élève futur développeur de génie",
    competences: [["PHP", 2], ["CSS", 3], ["JS", 1]],
    photo: "img/photo1.jpg",
    cv: "cv/cv.pdf"
  },

  {
    prenom: "Yorguën",
    nom: "DORLIPO",
    tel: "0606060606",
    email: "email@gmail.com",
    description: "élève futur développeur de génie",
    competences: [["PHP", 2], ["CSS", 3], ["JS", 1]],
    photo: "img/photo1.jpg",
    cv: "cv/cv.pdf"
  },

  {
    prenom: "Kurtys",
    nom: "ELOÏSE",
    tel: "0606060606",
    email: "email@gmail.com",
    description: "élève futur développeur de génie",
    competences: [["PHP", 2], ["CSS", 3], ["JS", 2]],
    photo: "img/photo1.jpg",
    cv: "cv/cv.pdf"
  },

  {
    prenom: "Philippe-Ilya",
    nom: "GARCES",
    tel: "0606060606",
    email: "email@gmail.com",
    description: "élève futur développeur de génie",
    competences: [["PHP", 2], ["CSS", 3], ["JS", 1]],
    photo: "img/photo1.jpg",
    cv: "cv/cv.pdf"
  },

  {
    prenom: "Habib Mohammed",
    nom: "KAMRUZZAMAN",
    tel: "0606060606",
    email: "email@gmail.com",
    description: "élève futur développeur de génie",
    competences: [["PHP", 2], ["CSS", 3], ["JS", 1]],
    photo: "img/photo1.jpg",
    cv: "cv/cv.pdf"
  },
  {
    prenom: "Rakthak",
    nom: "KIM",
    tel: "0606060606",
    email: "email@gmail.com",
    description: "élève futur développeur de génie",
    competences: [["PHP", 2], ["CSS", 3], ["JS", 1]],
    photo: "img/photo1.jpg",
    cv: "cv/cv.pdf"
  },
  {
    prenom: "Jérémy",
    nom: "LAISNÉ",
    tel: "0606060606",
    email: "email@gmail.com",
    description: "élève futur développeur de génie",
    competences: [["PHP", 2], ["CSS", 3], ["JS", 1]],
    photo: "img/photo1.jpg",
    cv: "cv/cv.pdf"
  },
  {
    prenom: "Jean-Christophe",
    nom: "LAMY",
    tel: "0606060606",
    email: "email@gmail.com",
    description: "élève futur développeur de génie",
    competences: [["PHP", 2], ["CSS", 3], ["JS", 1]],
    photo: "img/photo1.jpg",
    cv: "cv/cv.pdf"
  },
  {
    prenom: "Abdeslam",
    nom: "LOUAANABI",
    tel: "0606060606",
    email: "email@gmail.com",
    description: "élève futur développeur de génie",
    competences: [["PHP", 2], ["CSS", 3], ["JS", 1]],
    photo: "img/photo1.jpg",
    cv: "cv/cv.pdf"
  },
  {
    prenom: "Lucas",
    nom: "MORLÉ",
    tel: "0606060606",
    email: "email@gmail.com",
    description: "élève futur développeur de génie",
    competences: [["PHP", 2], ["CSS", 3], ["JS", 1]],
    photo: "img/photo1.jpg",
    cv: "cv/cv.pdf"
  },
  {
    prenom: "Rachid",
    nom: "OUMHELLA",
    tel: "0606060606",
    email: "email@gmail.com",
    description: "élève futur développeur de génie",
    competences: [["PHP", 2], ["CSS", 3], ["JS", 1]],
    photo: "img/photo1.jpg",
    cv: "cv/cv.pdf"
  },
  {
    prenom: "Jessica",
    nom: "PERINCIOLO",
    tel: "0606060606",
    email: "email@gmail.com",
    description: "élève futur développeur de génie",
    competences: [["PHP", 2], ["CSS", 3], ["JS", 1]],
    photo: "img/photo1.jpg",
    cv: "cv/cv.pdf"
  },
  {
    prenom: "Demba",
    nom: "SIDIBÉ",
    tel: "0606060606",
    email: "email@gmail.com",
    description: "élève futur développeur de génie",
    competences: [["PHP", 2], ["CSS", 3], ["JS", 1]],
    photo: "img/photo1.jpg",
    cv: "cv/cv.pdf"
  },

  {
    prenom: "Sabrina",
    nom: "TABONI",
    tel: "0606060606",
    email: "email@gmail.com",
    description: "élève futur développeur de génie",
    competences: [["PHP", 2], ["CSS", 3], ["JS", 1]],
    photo: "img/photo1.jpg",
    cv: "cv/cv.pdf"
  },

  {
    prenom: "Vithurshan",
    nom: "VIGNESWARAN",
    tel: "0606060606",
    email: "email@gmail.com",
    description: "élève futur développeur de génie",
    competences: [["PHP", 2], ["CSS", 3], ["JS", 1]],
    photo: "img/photo1.jpg",
    cv: "cv/cv.pdf"
  },

  {
    prenom: "Raouf",
    nom: "YAHIA CHERIF",
    tel: "0606060606",
    email: "email@gmail.com",
    description: "élève futur développeur de génie",
    competences: [["PHP", 2], ["CSS", 3], ["JS", 1]],
    photo: "img/photo1.jpg",
    cv: "cv/cv.pdf"
  }
];


/**
 * Créé un "article" html pour un élève donné.
 *
 * @param {Object} eleve Eleve pour lequel je souhaite générer un "article"
 * @return {string} Code html de l'article
 */
function genereArticle(eleve, i){
    return "<article>" +
          '<section class="photo">' +
            '<img src="https://i.pravatar.cc/100" />' +
          "</section>" +
          '<section class="infos">' +
            "<h2>" +
              eleve.nom.toUpperCase() + " " + eleve.prenom +
            "</h2>" +
            "<button onclick='afficheFicheInfos(" + i + ")'>Voir</button>" +
          "</section>" +
          '<section class="actions">' +
            "<button onclick='afficheFicheInfos(" + i + ")'>Voir</button>" +
          "</section></article>"
}

/**
 * Affiche les blocs des élèves
 *
 * @param {Array} eleves Tableau d'objets élèves
 */
function afficheEleves(eleves){
  var section = document.querySelector('section#eleves');
  
  section.innerHTML = "";
  
  for (var i = 0; i < eleves.length; i++){
    var eleve = eleves[i];
    var article = genereArticle(eleve, i);
    section.innerHTML += article;
  }
  
}

afficheEleves(eleves)

/**
 * Génerer le HTML des compétences pour l'élève donné
 *
 * @param {Object} eleve Eleve dont on veut afficher les compétences
 */
function genereCompetences(eleve){
  var comp = eleve.competences;
  var html = '';
  
  for (var i = 0; i < comp.length; i++){
    // <li> PHP <span class="etoiles"> <i class="fas fa-star" /> </span> </li>
    html += "<li> " + comp[i][0] + "<span class=\"etoiles\"> ";
    
    // On une note comp[i][1] dans la compétence
    for( var j = 0; j < comp[i][1]; j++){
      html += '<i class="fas fa-star"></i>';
    }
    for( var j = 0; j < 5 - comp[i][1]; j++){
      html += '<i class="far fa-star"></i>';
    }
    
    html += " </span> </li>"
  }
  
  return html;
}

/**
 * Génère la fiche d'infos d'un élève donné
 * 
 * @param {Object} eleve Élève dont on veut afficher les infos
 * @return {string} Code HTML pour la fiche info d'un élève
 */
function genereFicheInfos(eleve){
  var fiche = '<section class="infos">' +
            "<ul>" +
              "<li>" + eleve.nom + "</li>" +
              "<li>" + eleve.prenom + "</li>" +
              "<li>" + eleve.tel + "</li>" +
              "<li>" + eleve.email + "</li>" +
            "</ul>" +
           "<p>" + eleve.description  + "</p>" +
            "<ul>" +
              genereCompetences(eleve) +
            "</ul>" +
          "</section>" +
          '<section class="photo"><img src="https://i.pravatar.cc/200" />' +
            '<a href="'+ eleve.cv + '">Lien vers le cv</a>' +
          '</section>';
  
  return fiche;
}

/**
 * Afficher la fiche concernant l'élève donné.
 *
 * @param {Object} eleve Eleve à inspecter
 */
function afficheFicheInfosEleve(eleve){
  var fiche = genereFicheInfos(eleve);
  
  var divFicheInfos = document.querySelector('div#modal > article.fiche > div:first-of-type');
  divFicheInfos.innerHTML = fiche;
  
  var modal = document.querySelector('div#modal');
  modal.style["display"]= "flex";
  
  document.querySelector('div.overlay-gris').style.display = "flex";
  
}

/**
 * Fonction qui encapsule l'affichage d'un élève à partir de sa position dans la liste eleves
 *
 * @param {number} i Index de l'élève dans la liste eleves
 */
function afficheFicheInfos(i){
  afficheFicheInfosEleve(eleves[i]);
}

//afficheFicheInfos(eleves[2])

/**
 * Cache la modal contenant les infos élèves.
 */
function cacheModal(event){
  event.preventDefault();
  document.querySelector('div#modal').style.display = 'none';
  document.querySelector('div.overlay-gris').style.display = "none";
}

/**
 * Affiche le menu
 */
function afficheMenu(){
  var menuItems = document.querySelectorAll('nav>ul>li.big');
  var newMenu = document.querySelector('nav>div.menu-small');
  var newMenuUl = document.querySelector('nav>div.menu-small > ul');
  
  if (newMenu.classList.contains('open')){
    newMenuUl.innerHTML = "";
    newMenu.classList.remove('open');
  }
  else {
    for (var i = 0; i < menuItems.length; i++){
      newMenuUl.innerHTML += menuItems[i].outerHTML;
    }

    newMenu.classList.add("open");
  }
  
}

