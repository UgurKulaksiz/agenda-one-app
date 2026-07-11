<?php require_once './lang.php'; ?>

<nav>
    <ul>
        <div class="menuCenter">
            <li><a href="index.php?page=home.php&amp;lang=<?php echo $lang; ?>">
                    <p><?php echo $texts['home']; ?></p>
                </a></li>
            <li><a href="index.php?page=formulaire_evenement.php&amp;lang=<?php echo $lang; ?>">
                    <p><?php echo $texts['create_event']; ?></p>
                </a></li>
            <li><a href="index.php?page=mon_agenda.php&amp;lang=<?php echo $lang; ?>">
                    <p><?php echo $texts['agenda']; ?></p>
                </a></li>
            <li><a href="index.php?page=login.php&amp;lang=<?php echo $lang; ?>">
                    <p><?php echo $texts['login']; ?></p>
                </a></li>
        </div>
    </ul>
</nav>