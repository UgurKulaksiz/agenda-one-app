<?php require_once './lang.php'; ?>

<section class="agenda-dashboard">
    <div class="dashboard-header">
        <div>
            <p class="dashboard-eyebrow"><?php echo $texts['agenda_management']; ?></p>
            <h1 class="dashboard-title"><?php echo $texts['agenda_title']; ?></h1>
            <p class="dashboard-subtitle"><?php echo $texts['agenda_subtitle']; ?></p>
        </div>
        <div class="dashboard-actions">
            <a href="index.php?page=formulaire_evenement.php&amp;lang=<?php echo $lang; ?>" class="btn btn-primary dashboard-btn">
                <i class="fa-solid fa-plus"></i> <?php echo $texts['agenda_add_event']; ?>
            </a>
        </div>
    </div>

    <div class="dashboard-stats">
        <div class="stat-card">
            <div class="stat-icon blue">
                <i class="fa-solid fa-calendar-days"></i>
            </div>
            <div>
                <h3>3</h3>
                <p><?php echo $texts['agenda_events']; ?></p>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon green">
                <i class="fa-solid fa-clock"></i>
            </div>
            <div>
                <h3>2</h3>
                <p><?php echo $texts['agenda_upcoming']; ?></p>
            </div>
        </div>
    </div>

    <div class="dashboard-panel">
        <div class="panel-header">
            <h1><?php echo $texts['agenda_list_title']; ?></h1>
        </div>

        <div class="table-responsive">
            <table class="table dashboard-table">
                <thead>
                    <tr>
                        <th><?php echo $texts['agenda_table_title']; ?></th>
                        <th><?php echo $texts['agenda_table_start']; ?></th>
                        <th><?php echo $texts['agenda_table_end']; ?></th>
                        <th><?php echo $texts['agenda_table_description']; ?></th>
                        <th><?php echo $texts['agenda_table_status']; ?></th>
                        <th><?php echo $texts['agenda_table_actions']; ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Réunion client</td>
                        <td>08/07/2026 14:30</td>
                        <td>08/07/2026 16:00</td>
                        <td>Présentation du projet</td>
                        <td>
                            <select class="status-select status-1">
                                <option value="1" selected><?php echo $texts['agenda_status_upcoming']; ?></option>
                                <option value="2"><?php echo $texts['agenda_status_in_progress']; ?></option>
                                <option value="3"><?php echo $texts['agenda_status_done']; ?></option>
                                <option value="4"><?php echo $texts['agenda_status_cancelled']; ?></option>
                            </select>
                        </td>
                        <td>
                            <a href="#" class="agenda-action-link" title="<?php echo $texts['agenda_action_edit']; ?>">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                            <a href="#" class="agenda-action-link danger" title="<?php echo $texts['agenda_action_delete']; ?>">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Formation</td>
                        <td>10/07/2026 09:00</td>
                        <td>10/07/2026 12:00</td>
                        <td>Formation sur l’outil</td>
                         <td>
                            <select class="status-select status-1">
                                <option value="1" selected><?php echo $texts['agenda_status_upcoming']; ?></option>
                                <option value="2"><?php echo $texts['agenda_status_in_progress']; ?></option>
                                <option value="3"><?php echo $texts['agenda_status_done']; ?></option>
                                <option value="4"><?php echo $texts['agenda_status_cancelled']; ?></option>
                            </select>
                        </td>
                        <td>
                            <a href="#" class="agenda-action-link" title="<?php echo $texts['agenda_action_edit']; ?>">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                            <a href="#" class="agenda-action-link danger" title="<?php echo $texts['agenda_action_delete']; ?>">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Démo produit</td>
                        <td>12/07/2026 10:00</td>
                        <td>12/07/2026 11:00</td>
                        <td>Démo avec un client</td>
                         <td>
                            <select class="status-select status-1">
                                <option value="1" selected><?php echo $texts['agenda_status_upcoming']; ?></option>
                                <option value="2"><?php echo $texts['agenda_status_in_progress']; ?></option>
                                <option value="3"><?php echo $texts['agenda_status_done']; ?></option>
                                <option value="4"><?php echo $texts['agenda_status_cancelled']; ?></option>
                            </select>
                        </td>
                        <td>
                            <a href="#" class="agenda-action-link" title="<?php echo $texts['agenda_action_edit']; ?>">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                            <a href="#" class="agenda-action-link danger" title="<?php echo $texts['agenda_action_delete']; ?>">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const statusSelects = document.querySelectorAll(".status-select");

        statusSelects.forEach(s => {
            s.addEventListener("change", function () {
                // Supprime les anciennes classes de statut
                this.className = "status-select";
                // Ajoute la classe correspondant à la nouvelle valeur choisie
                this.classList.add("status-" + this.value);
            })
        });
    });
</script>