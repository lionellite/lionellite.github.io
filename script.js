const list = document.querySelectorAll('.list');
function activeLink(){
    list.forEach((item)=>
    item.classList.remove('active'));
    this.classList.add('active');
}
list.forEach((item) =>
item.addEventListener('click',activeLink));

// Récupère l'élément HTML où tu veux afficher le contenu
contenuElement = document.getElementById('contenu');

// Fonction pour charger le contenu depuis le fichier texte
function chargerContenu(url) {
  fetch(url)
    .then(response => response.text())
    .then(data => {
      // Met à jour le contenu de l'élément HTML
      contenuElement.innerHTML = data;
    })
    .catch(error => {
      console.error('Erreur :', error);
    });
}

/*function chargerContenuplus(url) {
  fetch(url)
    .then(response => response.text())
    .then(data => {
      var temp = document.createElement("div");
      temp.innerHTML = data;

      while (temp.firstChild) {
        contenuElement.appendChild(temp.firstChild);
      }
      // Met à jour le contenu de l'élément HTML
      //contenuElement.insertAdjacentHTML("beforeend", data);
    })
    .catch(error => {
      console.error('Erreur :', error);
    });
}*/

// Écouteur d'événement pour le clic sur le lien
const Profile = document.getElementById('Profile');
Profile.addEventListener('click', function(event) {
  event.preventDefault(); // Empêche le comportement par défaut du lien
  url = this.getAttribute("href"); // Récupère l'URL du fichier texte

chargerContenu(url); // Charge le contenu depuis le fichier texte

  
});

  const Message = document.getElementById('Message');
Message.addEventListener('click', function(event) {
  event.preventDefault(); // Empêche le comportement par défaut du lien
  url = this.getAttribute("href"); // Récupère l'URL du fichier texte
chargerContenu(url); // Charge le contenu depuis le fichier texte

});
  const Photos = document.getElementById('Photos');
Photos.addEventListener('click', function(event) {
  event.preventDefault(); // Empêche le comportement par défaut du lien
  url = this.getAttribute("href"); // Récupère l'URL du fichier texte

chargerContenu(url); // Charge le contenu depuis le fichier texte

});
  const Services = document.getElementById('Services');
Services.addEventListener('click', function(event) {
  event.preventDefault(); // Empêche le comportement par défaut du lien
  url = this.getAttribute("href"); // Récupère l'URL du fichier texte

chargerContenu(url); // Charge le contenu depuis le fichier texte

});

