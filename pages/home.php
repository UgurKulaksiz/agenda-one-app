<div class="home-container">
    <div class="home-title">
        <h1>Bienvenue sur AgendaOne</h1>
        <p>Planifiez vos événements facilement et rapidement.</p>
    </div>

    <div class="calendar-container">
        <div class="calendar-card" id="calendarCard">
            <div class="calendar-header">
                <img src="./images/Logo_App_Rdv_AgendaOne.png" alt="Logo AgendaOne" class="calendar-logo">
            </div>
            <div class="calendar-date" id="calendarDate"></div>
        </div>

        <div class="calendar-rdv-link">
            <p><a href="index.php?page=formulaire_evenement.php">Planifier un événement</a></p>
        </div>
    </div>
</div>

<script>
    const monthNames = [
        'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin',
        'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'
    ];

    const now = new Date();
    document.getElementById('calendarDate').textContent = now.getDate() + ' ' + monthNames[now.getMonth()] + ' ' + now.getFullYear();
</script>