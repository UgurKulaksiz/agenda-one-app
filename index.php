<?php require_once './lang.php'; ?>

<!DOCTYPE html>
<html lang="<?php echo $lang === 'en' ? 'en' : 'fr'; ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleMenu.css">
    <link rel="stylesheet" href="css/style_admin.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="icon" type="image/x-icon" href="./images/Logo_App_Rdv_AgendaOne_2.png">

    <title>AgendaOne</title>
</head>

<body>
    <header class="menu">
        <?php
        if (file_exists("./menu.php")) {
            include("./menu.php");
        }
        ?>
    </header>

    <main class="wrapper">
        <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'home.php';
        $_SESSION['page'] = $page;

        $path = './pages/' . $page;
        if (file_exists($path)) {
            include $path;
        } else {
            include './error.php';
        }
        ?>
    </main>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-center">
                <p>&copy; <span id="currentYear"></span> AgendaOne. <?php echo $texts['footer']; ?></p>
            </div>

            <div class="footer-right">
                <div class="language-switcher">
                    <select class="language-select" onchange="changeLanguage(this.value)">
                        <option value="fr" <?php echo $lang === 'fr' ? 'selected' : ''; ?>>FR</option>
                        <option value="en" <?php echo $lang === 'en' ? 'selected' : ''; ?>>EN</option>
                    </select>
                </div>
            </div>
    </footer>

</body>

</html>

<script>
    // Affiche l'année en cours dans le pied de page
    document.getElementById('currentYear').textContent = new Date().getFullYear();

    // Fonction pour changer la langue
    function changeLanguage(lang) {
        const params = new URLSearchParams(location.search); // Récupère les paramètres de l'URL
        params.set('lang', lang); // Met à jour le paramètre 'lang' avec la nouvelle valeur
        location.href = location.pathname + '?' + params.toString(); // Redirige vers la même page avec le nouveau paramètre de langue
    }
</script>