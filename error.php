<?php require_once './lang.php'; ?>

<section class="error-page">
    <div class="error-card">
        <h1><?php echo $texts['error_title']; ?></h1>
        <p><?php echo $texts['error_message']; ?></p>
        <a href="index.php?page=home.php&amp;lang=<?php echo $lang; ?>"><?php echo $texts['error_back_home']; ?></a>
    </div>
</section>