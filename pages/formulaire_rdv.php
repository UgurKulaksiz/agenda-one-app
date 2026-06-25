<div class="appointment-container">
    <div class="content-container">
        <div class="appointment-content">
            <form action="" method="post" id="appointmentForm" class="appointment-form">
                <h2 class="appointment-title">Ajouter un rendez-vous dans votre agenda</h2>
                <div class="appointment-input-container">
                    <input class="appointment-input" type="text" name="lastName" id="last_name" placeholder="Nom"
                        required />
                </div>
                <div class="appointment-input-container">
                    <input class="appointment-input" type="text" name="firstName" id="first_name" placeholder="Prénom"
                        required />
                </div>
                <div class="appointment-input-container">
                    <input class="appointment-input" type="text" name="title_appointment" id="title_appointment" placeholder="Titre du rendez-vous"
                        required />
                </div>
                <div class="appointment-input-container">
                    <input class="appointment-input" type="date" name="date_appointment" id="date_appointment"
                        placeholder="Date du rendez-vous" required />
                </div>
                <div class="appointment-input-container">
                    <input class="appointment-input" type="time" name="time_appointment" id="time_appointment"
                        placeholder="Heure du rendez-vous" required />
                </div>

                <button class="button appointment-submit" type="submit" name="submit_sign-up">
                    <span class="button_text">Ajouter à l'agenda</span>
                    <i class="button_icon fas fa-chevron-right"></i>
                </button>
                <button class="button reset-submit" type="reset" name="submit_sign-up">
                    <span class="button_text">Annuler</span>
                </button>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const form = document.querySelector("appointment-form");
    })
</script>