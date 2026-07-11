<?php require_once './lang.php'; ?>

<div class="event-container">
    <div class="content-container">
        <div class="event-content">
            <form action="" method="post" id="eventForm" class="event-form">
                <h1 class="event-title"><?php echo $texts['event_title']; ?></h1>

                <div class="event-input-container">
                    <label class="event-label" for="title_event"><?php echo $texts['event_title_label']; ?> <span class="required-mark">*</span> :</label>
                    <input class="event-input" type="text" name="title_event" id="title_event" placeholder="<?php echo $texts['event_title_placeholder']; ?>"
                        required />
                </div>

                <div class="event-input-container">
                    <label class="event-label" for="start_date"><?php echo $texts['event_start_label']; ?> <span class="required-mark">*</span> :</label>
                    <input class="event-input" type="datetime-local" name="start_date" id="start_date" required />
                </div>

                <div class="event-input-container">
                    <label class="event-label" for="end_date"><?php echo $texts['event_end_label']; ?> <span class="required-mark">*</span> :</label>
                    <input class="event-input" type="datetime-local" name="end_date" id="end_date" required />
                </div>

                <div class="event-input-container">
                    <label class="event-label" for="description_event"><?php echo $texts['event_description_label']; ?> :</label>
                    <textarea class="event-input event-textarea" name="description_event" id="description_event" placeholder="<?php echo $texts['event_description_placeholder']; ?>"></textarea>
                </div>

                <button class="button event-submit" type="submit" name="submit_sign-up">
                    <span class="button_text"><?php echo $texts['event_submit']; ?></span>
                    <i class="button_icon fas fa-chevron-right"></i>
                </button>
                <button class="button reset-submit" type="reset" name="submit_sign-up">
                    <span class="button_text"><?php echo $texts['event_cancel']; ?></span>
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