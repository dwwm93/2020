$("article#infos>section:first-child").text("Je remplis ma section.");

const urlChuckNorris = "https://api.icndb.com/jokes/random";
const urlPokemon = "https://pokeapi.co/api/v2/pokemon/";

// https://api.jquery.com/load/

/**
 * Affiche dans la balise pre>p un chuck norris fact
 */
function afficheChuck_old() {
  $("article#infos>section>p").load(urlChuckNorris);
}

/**
 * Affiche les caractéristiques du pokemon demandé !
 *
 * @param {string} pokemon
 */
function affichePokemon_old(pokemon) {
  const url = urlPokemon + pokemon; // https://pokeapi.co/api/v2/pokemon/pikachu si pokemon = 'pikachu'
  $("article#infos>section>p").load(url);
}

function affiche(texte) {
  $("article#infos>section>p").text(texte);
}

function afficheJoke(resultat) {
  console.log(resultat);
  affiche(resultat.value.joke);
  $("article#infos>section:first-child").text(resultat.type);
  $("article#infos").css("background-color", "#ccc");
}

/**
 * Fonction pour montrer que le $.get rend la main avant la fin
 * de la récupération des données.
 */
function asyncTest() {
  let res = $.get("https://www.google.com:81");
  res.responseText === undefined
    ? console.log("réponse vide pour l'instant")
    : console.log("réponse reçue !");
  res.fail((r) => console.log(r, "la réponse - echec - est bien reçue !"));
}

function afficheChuck() {
  $.get(urlChuckNorris).done(afficheJoke);
  /**
   * identique à
   * $.get(urlChuckNorris).done(function (resultat) { affiche(resultat.value.joke); ..... });
   *
   */
}

/**
 *
 * @param {string} pokemon Nom du pokemon à afficher
 */
function affichePokemon(pokemon) {
  let url = urlPokemon + pokemon;
  $.get(url).done(function (resultat) {
    console.log(resultat);
    // Dans la console on voit que "resultat" est de la forme suivante :
    /**
     * 
     * {…}
        abilities: Array [ {…}, {…} ]
        base_experience: 112
        forms: Array [ {…} ]
        game_indices: Array(20) [ {…}, {…}, {…}, … ]
        height: 4
        held_items: Array [ {…}, {…} ]
        id: 25
        is_default: true
        location_area_encounters: "https://pokeapi.co/api/v2/pokemon/25/encounters"
        moves: Array(81) [ {…}, {…}, {…}, … ]
        name: "pikachu"
        order: 35
        species: Object { name: "pikachu", url: "https://pokeapi.co/api/v2/pokemon-species/25/" }
        sprites: Object { back_default: "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/back/25.png", back_female: "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/back/female/25.png", back_shiny: "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/back/shiny/25.png", … }
        stats: Array(6) [ {…}, {…}, {…}, … ]
        types: Array [ {…} ]
        weight: 60
     */
    $("article#infos>section>p").text(resultat.name);
    $("article#infos>section>p").append(
      "<img src='" + resultat.sprites.front_shiny + "'>"
    );
  });
}

/**
 * EVENTS AVEC $(this) !!
 *
 * Faire une fonction sans le $(this) , qui va donc modifier tous les éléments !
 *
 * En profiter pour apprendre les fonctions anonymes !
 */
$("p").on("click", function () {
  $(this).css("background-color", "light-blue");
});

/**
 * Je me prépare à recevoir des événements "click" sur la colonne des noms des pokemons
 *
 */
$("article#tableau>table td.nom").on("click", function () {
  // Je récupère l'élément cliqué de javascript
  let caseCliquee = this;
  // je le transforme en jquery pour pouvoir utiliser les méthodes "faciles"
  let caseJquery = $(caseCliquee);
  // je récupère le contenu de ma case, c'est à dire le nom du pokemon
  let pokemon = caseJquery.text();

  // avec le nom je construis l'url
  let url = urlPokemon + pokemon;
  // puis je vais récupérer les infos avec AJAX !
  $.get(url)
    .done(function (data) {
      // Quand les infos sont récupérées, cette fonction anonyme est appelée
      // et jquery lui passe le résultat de la requete, qui se retrouve stocké
      // dans la variable "data".
      // On peut donc en extraire des infos :
      let poids = data.weight;
      let img = data.sprites.front_default;

      // Puis je cherche à les afficher dans les colonnes adjacentes :
      let colonnes = caseJquery.siblings("td");
      // Je transforme chaque colonne reçue en JQuery pour pouvoir utiliser les méthodes
      // et je les remplis avec les infos.
      // NB: il y a  plein d'autres manières de faire, aussi bonnes voire meilleures que celle ci !
      $(colonnes[0]).html("<img src='" + img + "' />");
      $(colonnes[1]).text(poids);
    })
    .fail(function (data) {
      // Si la requete échoue, c'est cette fonction anonyme là qui va être utilisée par jquery,
      // et pas celle de ".done"
      console.log(data);
      // J'affiche l'erreur dans la case à côté :
      caseJquery
        .next()
        .html("<span style='color: red;'> " + data.responseText + " </span>");
    });
});
