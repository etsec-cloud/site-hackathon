var el = document.getElementById("section1");
console.log(el.offsetHeight);

window.onscroll = function() {
  myFunction();
};

function myFunction() {
  if (
    document.body.scrollTop > el.offsetHeight ||
    document.documentElement.scrollTop > el.offsetHeight
  ) {
    document.getElementById("navbar").classList.add("bgColorBlack");
  } else if (
    document.body.scrollTop < el.offsetHeight ||
    document.documentElement.scrollTop < el.offsetHeight
  ) {
    document.getElementById("navbar").classList.remove("bgColorBlack");
  }
}


const cI1 = document.getElementById('cI1');
const cI2 = document.getElementById('cI2');
const cI3 = document.getElementById('cI3');
const cI4 = document.getElementById('cI4');
const cI5 = document.getElementById('cI5');
const cI6 = document.getElementById('cI6');
const cI7 = document.getElementById('cI7');
const cI8 = document.getElementById('cI8');
const cI9 = document.getElementById('cI9');

const description1 = 'Lors de cette semaine inter axe j’ai eu l’opportunité de travailler sur la stratégie de communication sur les différents réseaux sociaux que nous avons choisis pour promouvoir notre projet. J’ai également participé à l\'élaboration de la stratégie d’acquisition. D’autre part j’ai participé au développement des différents réseaux sociaux notamment sur Twitch avec le lancement d’un live. ';
const description2 = "J’ai travaillé comme graphiste pour le projet Plantsters mais aussi en tant que chargé de la communication de marque ! \n\nJ’ai réalisé le logo du projet et plusieurs déclinaisons de celui-ci. J’ai complété l’identité de la marque avec tous les indispensables d’une charte graphique. <br/> \n\nJ’ai également réalisé et décliné différents visuels pour les réseaux sociaux ainsi que pour le packaging du produit. <br/>  J’ai créé les premières interfaces de l’application et communiqué sur le réseau social Instagram. \n\nPour réaliser ces éléments j’ai utilisé Première Pro, Illustrator, Photoshop et After Effect.";
const description3 = 'En tant que développeur web, j’ai conseillé l’équipe sur la faisabilité des idées de l’équipe.\nMes missions sur ce projet ont été l’intégration des maquettes réalisées sur adobe XD.\n\nUn formulaire d’envoie de mail et la mise en ligne du site de présentation de notre projet, ainsi que l’incrustation 3D des modèles dans notre prototype.\n\nPour ce faire j’ai utilisé les langages HTML\/CSS\/JS pour la partie front du site. Le PHP pour l’envoie de l’email et la librairie three.js pour l’intégration du modèle 3D.\nPour le futur de l’application, j’aimerai mieux développer les incrustations des modèles 3D qui sont les mascottes de notre application. \n';
const description4 = 'Les missions que l’on m’a confié était de trouver et de développer le concept de notre projet. Après avoir réalisé cela, j’étais chargé d’étudier le marché afin de savoir s’il était possible qu’une telle application ait une impacte sur le grand publique. Pour finir, j’ai du mettre en place une stratégie d’acquisition afin de créer une première communauté sur le jeu.\n';
const description5 = 'Sur le projet Planster, j\'ai eu comme missions de concevoir la mascotte 3D, ainsi que différents visuels 3D. J\'ai principalement axé mon travail sur nos petits personnages en évolution, puis sur divers animations utilisées pour la communication du projet.';
const description6 = 'Les missions qui m’ont été confiées sont la mise en place et le compte-rendu d’interviews, la  création de documents de gamification et l’ajout d’images à caractère humoristique afin d’alimenter les réseaux sociaux.\n\nJ’ai contribué à la phase de réflexion globale sur le jeu en apportant mes connaissance et en proposant des piste de développement pour l’expérience in-app. Boucle de gameplay, équilibrage et expérience du joueur ont été focus pour cette semaine de hackathon. \n\nPour le développement du prototype j’ai accompagné les développeur pour coordonner le projet tech et proposer des correction d’interface pour améliorer l’expérience utilisateur.\nunication du projet.';
const description7 = 'Mes missions étaient de faire la maquette du site de présentation de la marque ainsi que d\'implémenter un model 3d sur une page web. Pour cela il a fallu faire une recherche de projet déjà existant afin d’identifier comment l’incrustation 3d avait été faite. Ensuite une fois le processus trouvé je me suis coordonnées avec Domitille afin d\'exporter son modèle 3d au bon format.\nJ\'ai aussi implémenter la récupération du mail en Php natif \n';
const description8 = 'Les missions sur lesquelles j’ai travaillé sont : créer les réseaux sociaux Linkedin, Instagram et Facebook en créant le mail, les mots de passe et en incorporant les photo de profil. J’ai aussi participé à la création de divers éléments graphiques du packaging sur photoshop.\n\nAu niveau du management nous avons décidé le matin de participer à des jeux de groupes pour nous détendre et consolider la cohésion d’équipe.\n';
const description9 = 'Pour ce projet , j\'ai travaillé en tant que développeur et webdesigner. \n\nEn fait toutes les idées que nous avions existaient déjà.  Le deuxième jours , j\'ai réalisé les wireframes deskop et mobile du site que nous allions créer en utilisant Adobe XD. Le troisième jours ,  j\'ai revu les wireframes que j\'avais fait car nous avion changer d\'idée pour la structure du site (On a opté pour un site One Page). \n Le quatrième jour j\'ai développé une section du site. \n\nComme technologie j\'ai utilisé du Html\/css , Javascript , Bootstrap et Jquery. J\'ai développé un slider affichant tous les participants aux projets.\n';



cI1.onclick =  function() {
  $("#persoDescription").html(description1);
  $("#descriptionName").html("Aurelien Bardou");
}

cI2.onclick =  function() {
  $("#persoDescription").html(description2);
  $("#descriptionName").html("Ambre Rolland");
}

cI3.onclick =  function() {
  $("#persoDescription").html(description3);
  $("#descriptionName").html("Etienne Secondini");
}

cI4.onclick =  function() {
  $("#persoDescription").html(description4);
  $("#descriptionName").html("Ryad TAKDJOUT ");
}

cI5.onclick =  function() {
  $("#persoDescription").html(description5);
  $("#descriptionName").html("Domitille Guichard");
  
}

cI6.onclick =  function() {
  $("#persoDescription").html(description6);
  $("#descriptionName").html("Julien Dor");
  
}

cI7.onclick =  function() {
  $("#persoDescription").html(description7);
  $("#descriptionName").html("Paul Santamaria");
  
}

cI8.onclick =  function() {
  $("#persoDescription").html(description8);
  $("#descriptionName").html("Alexandre Luneau");
  
}

cI9.onclick =  function() {
  $("#persoDescription").html(description9);
  $("#descriptionName").html("Marvin Mensah");
  
}

// $("#persoDescription").html("Hello World");
