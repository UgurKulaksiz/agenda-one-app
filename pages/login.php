<div class="login-container">
    <div class="content-container">
        <div class="content">
            <form action="" method="post" id="loginForm">
                <h2 class="login-title">Connectez-vous</h2>
                <div>
                    <i></i>
                    <input class="login-input" type="email" name="email_client" id="email_connexion" 
                    placeholder="E-mail" required />
                </div>
                <div>
                    <i></i>
                    <input class="login-input" type="password" name="password" id="password_connexion"
                    placeholder="Mot de passe" required />
                    <i class="fas fa-eye" onclick="showPassword(this)"></i>
                </div>

                <button class="button login-submit" type="submit" name="submit_login">
                    <span class="button_text">Se connecter</span>
                    <i class="button_icon fas fa-chevron-right"></i>
                </button>
                <button class="button sign-up" type="submit" name="submit_login">
                    <p>Pas encore de compte ?
                        <span class="button_text"><a href="index.php?page=sign_up.php">S'inscrire</a></span>
                    </p>
                    <i class="button_icon fas fa-chevron-right"></i>
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