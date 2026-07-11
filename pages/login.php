<?php require_once './lang.php'; ?>

<div class="login-container">
    <div class="content-container">
        <div class="login-content">
            <form action="" method="post" id="loginForm" class="login-form">
                <h1 class="login-title"><?php echo $texts['login_title']; ?></h1>
                <div class="login-input-container">
                    <i class="login-icon fa-solid fa-envelope"></i>
                    <input class="login-input" type="email" name="email_client" id="email_connexion"
                        placeholder="<?php echo $texts['login_email']; ?>" required />
                </div>
                <div class="login-input-container">
                    <i class="login-icon fas fa-lock"></i>
                    <input class="login-input" type="password" name="password" id="password_connexion"
                        placeholder="<?php echo $texts['login_password']; ?>" required />
                    <i class="fas fa-eye" onclick="showPassword(this)"></i>
                </div>

                <button class="button login-submit" type="submit" name="submit_login">
                    <span class="button_text"><?php echo $texts['login_submit']; ?></span>
                    <i class="button_icon fas fa-chevron-right"></i>
                </button>
                <a class="button sign-up" href="index.php?page=sign_up.php&amp;lang=<?php echo $lang; ?>">
                    <p><?php echo $texts['signup_prompt']; ?>
                        <span class="button_text"><?php echo $texts['signup_button']; ?></span>
                    </p>
                    <i class="button_icon fas fa-chevron-right"></i>
                </a>
            </form>
        </div>
    </div>
</div>

<script>
    /* BOUTON POUR AFFICHER/MASQUER LE MOT DE PASSE */
    function showPassword(icon) {
        const passwordInput = document.getElementById('password_connexion');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    }
</script>