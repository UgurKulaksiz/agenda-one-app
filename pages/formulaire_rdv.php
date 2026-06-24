<h1>Ajouter un rendez-vous dans mon agenda</h1>
<form action="" method="post">
    <label for="name">Nom :</label>
    <input type="text" id="name" name="nom" placeholder="Votre nom" required />

    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" placeholder="Votre prénom" required />

    <label for="email">Email :</label>
    <input type="email" id="email" name="mail" placeholder="Votre adresse email" required />

    <label for="date">Date du rendez-vous :</label>
    <input type="date" id="date" name="date" required />

    <label for="time">Heure du rendez-vous :</label>
    <input type="time" id="time" name="heure" required />

    <button type="submit" name="envoyer">Prendre rendez-vous</button>
</form>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const form = document.querySelector("form");
    })
</script>