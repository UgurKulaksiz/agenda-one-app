<div class="event-container">
    <div class="content-container">
        <div class="event-content">
            <form action="" method="post" id="eventForm" class="event-form">
                <h2 class="event-title">Ajoutez un événement dans votre agenda</h2>
                <div class="event-input-container">
                    <input class="event-input" type="text" name="lastName" id="last_name" placeholder="Nom"
                        required />
                </div>
                <div class="event-input-container">
                    <input class="event-input" type="text" name="firstName" id="first_name" placeholder="Prénom"
                        required />
                </div>
                <div class="event-input-container">
                    <input class="event-input" type="text" name="title_event" id="title_event" placeholder="Titre de l'événement"
                        required />
                </div>
                <div class="event-input-container">
                    <input class="event-input" type="date" name="date_event" id="date_event"
                        placeholder="Date du rendez-vous" required />
                </div>
                <div class="event-input-container">
                    <input class="event-input" type="time" name="time_event" id="time_event"
                        placeholder="Heure du rendez-vous" required />
                </div>

                <button class="button event-submit" type="submit" name="submit_sign-up">
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
        const form = document.querySelector("event-form");
    })
</script>