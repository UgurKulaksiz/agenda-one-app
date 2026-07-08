<section class="agenda-dashboard">
    <div class="dashboard-header">
        <div>
            <p class="dashboard-eyebrow">Gestion</p>
            <h1 class="dashboard-title">Mon agenda</h1>
            <p class="dashboard-subtitle">Voici la liste de vos événements. Vous pouvez ajouter, modifier ou supprimer un rendez-vous.</p>
        </div>
        <div class="dashboard-actions">
            <a href="index.php?page=formulaire_evenement.php" class="btn btn-primary dashboard-btn">
                <i class="fa-solid fa-plus"></i> Ajouter un événement
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
                <p>Événements</p>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon green">
                <i class="fa-solid fa-clock"></i>
            </div>
            <div>
                <h3>2</h3>
                <p>À venir</p>
            </div>
        </div>
    </div>

    <div class="dashboard-panel">
        <div class="panel-header">
            <h2>Liste des événements</h2>
        </div>

        <div class="table-responsive">
            <table class="table dashboard-table">
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Début</th>
                        <th>Fin</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Réunion client</td>
                        <td>08/07/2026 14:30</td>
                        <td>08/07/2026 16:00</td>
                        <td>Présentation du projet</td>
                        <td>
                            <a href="#" class="agenda-action-link">Modifier</a>
                            <a href="#" class="agenda-action-link danger">Supprimer</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Formation</td>
                        <td>10/07/2026 09:00</td>
                        <td>10/07/2026 12:00</td>
                        <td>Formation sur l’outil</td>
                        <td>
                            <a href="#" class="agenda-action-link">Modifier</a>
                            <a href="#" class="agenda-action-link danger">Supprimer</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Démo produit</td>
                        <td>12/07/2026 10:00</td>
                        <td>12/07/2026 11:00</td>
                        <td>Démo avec un client</td>
                        <td>
                            <a href="#" class="agenda-action-link">Modifier</a>
                            <a href="#" class="agenda-action-link danger">Supprimer</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
