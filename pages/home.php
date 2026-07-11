<?php require_once './lang.php'; ?>

<div class="home-container">
    <section class="hero-section">
        <div class="hero-copy">
            <h1><?php echo $texts['welcome_title']; ?></h1>
            <p><?php echo $texts['welcome_text1']; ?></p>
            <p><?php echo $texts['welcome_text2']; ?></p>

            <div class="hero-actions">
                <a href="index.php?page=formulaire_evenement.php&amp;lang=<?php echo $lang; ?>" class="home-btn primary"><?php echo $texts['button_create']; ?></a>
                <a href="index.php?page=login.php&amp;lang=<?php echo $lang; ?>" class="home-btn secondary"><?php echo $texts['button_login']; ?></a>
            </div>
        </div>

        <div class="hero-card">
            <div class="calendar-card" id="calendarCard">
                <div class="calendar-header">
                    <img src="./images/Logo_App_Rdv_AgendaOne.png" alt="AgendaOne" class="calendar-logo">
                </div>
                <div class="calendar-date" id="calendarDate"></div>
                <p class="calendar-caption"><?php echo $texts['welcome_text2']; ?></p>
            </div>
        </div>
    </section>

    <section class="home-features">
        <article class="feature-card">
            <h3><?php echo $texts['feature1_title']; ?></h3>
            <p><?php echo $texts['feature1_text']; ?></p>
        </article>

        <article class="feature-card">
            <h3><?php echo $texts['feature2_title']; ?></h3>
            <p><?php echo $texts['feature2_text']; ?></p>
        </article>

        <article class="feature-card">
            <h3><?php echo $texts['feature3_title']; ?></h3>
            <p><?php echo $texts['feature3_text']; ?></p>
        </article>
    </section>
</div>

<script>
    const monthNames = <?php echo json_encode($texts['months']); ?>;

    const now = new Date();
    document.getElementById('calendarDate').textContent = now.getDate() + ' ' + monthNames[now.getMonth()] + ' ' + now.getFullYear();
</script>