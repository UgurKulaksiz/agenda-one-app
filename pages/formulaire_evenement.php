<div class="event-container">
    <div class="content-container">
        <div class="event-content">
            <form action="" method="post" id="eventForm" class="event-form">
                <h2 class="event-title">Ajoutez un événement dans votre agenda</h2>

                <div class="event-input-container">
                    <label class="event-label" for="title_event">Titre <span class="required-mark">*</span> :</label>
                    <input class="event-input" type="text" name="title_event" id="title_event" placeholder="Titre de l'événement"
                        required />
                </div>

                <div class="event-input-container">
                    <label class="event-label" for="start_date">Début <span class="required-mark">*</span> :</label>
                    <input class="event-input" type="datetime-local" name="start_date" id="start_date" required />
                </div>

                <div class="event-input-container">
                    <label class="event-label" for="end_date">Fin <span class="required-mark">*</span> :</label>
                    <input class="event-input" type="datetime-local" name="end_date" id="end_date" required />
                </div>

                <div class="event-input-container">
                    <label class="event-label" for="description_event">Description :</label>
                    <textarea class="event-input event-textarea" name="description_event" id="description_event" placeholder="Description de l'événement (optionnel)"></textarea>
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