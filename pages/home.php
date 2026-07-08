<div class="home-container">
    <section class="hero-section">
        <div class="hero-copy">
            <h1>Bienvenue sur AgendaOne</h1>
            <p>C’est un petit site pour organiser vos rendez-vous et garder votre semaine en ordre.</p>
            <p>Vous pouvez ajouter un événement et le retrouver plus tard sans trop de difficulté.</p>

            <div class="hero-actions">
                <a href="index.php?page=formulaire_evenement.php" class="home-btn primary">Ajouter un événement</a>
                <a href="index.php?page=login.php" class="home-btn secondary">Connexion</a>
            </div>
        </div>

        <div class="hero-card">
            <div class="calendar-card" id="calendarCard">
                <div class="calendar-header">
                    <img src="./images/Logo_App_Rdv_AgendaOne.png" alt="Logo AgendaOne" class="calendar-logo">
                </div>
                <div class="calendar-date" id="calendarDate"></div>
                <p class="calendar-caption">Un agenda simple pour la vie de tous les jours.</p>
            </div>
        </div>
    </section>

    <section class="home-features">
        <article class="feature-card">
            <h3>Planifier facilement</h3>
            <p>Ajoutez rapidement vos rendez-vous et gardez un suivi clair de vos obligations.</p>
        </article>

        <article class="feature-card">
            <h3>Voir votre agenda</h3>
            <p>Consultez votre planning d’un simple coup d’œil pour mieux organiser votre journée.</p>
        </article>

        <article class="feature-card">
            <h3>Rester organisé</h3>
            <p>Anticipez vos événements et évitez les oublis grâce à une interface pensée pour vous.</p>
        </article>
    </section>
</div>

<script>
    const monthNames = [
        'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin',
        'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'
    ];

    const now = new Date();
    document.getElementById('calendarDate').textContent = now.getDate() + ' ' + monthNames[now.getMonth()] + ' ' + now.getFullYear();
</script>