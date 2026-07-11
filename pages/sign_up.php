<?php require_once './lang.php'; ?>

<div class="login-container">
    <div class="content-container">
        <div class="login-content">
            <form action="" method="post" id="loginForm" class="login-form">
                <h1 class="login-title"><?php echo $texts['signup_title']; ?></h1>
                <div class="login-input-container">
                    <input class="login-input" type="text" name="lastName" id="last_name"
                        placeholder="<?php echo $texts['signup_last_name']; ?>" required />
                </div>
                  <div class="login-input-container">
                    <input class="login-input" type="text" name="firstName" id="first_name"
                        placeholder="<?php echo $texts['signup_first_name']; ?>" required />
                </div>
                <div class="login-input-container">
                    <i class="login-icon fa-solid fa-envelope"></i>
                    <input class="login-input" type="email" name="email" id="email_connexion"
                        placeholder="<?php echo $texts['login_email']; ?>" required />
                </div>
                <div class="login-input-container">
                    <i class="login-icon fas fa-lock"></i>
                    <input class="login-input" type="password" name="password" id="password_connexion"
                        placeholder="<?php echo $texts['login_password']; ?>" required />
                    <i class="fas fa-eye" onclick="showPassword(this)"></i>
                </div>

                <button class="button login-submit" type="submit" name="submit_sign-up">
                    <span class="button_text"><?php echo $texts['signup_submit']; ?></span>
                    <i class="button_icon fas fa-chevron-right"></i>
                </button>
                 <button class="button reset-submit" type="reset" name="submit_sign-up">
                    <span class="button_text"><?php echo $texts['signup_cancel']; ?></span>
                </button>
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
            icon.classList.remove('fa-ey-slash');
            icon.classList.add('fa-eye');
        }
    }
</script>