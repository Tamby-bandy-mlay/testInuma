<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dashboard Directeur - LeadManager</title>
  <style>
    /* Reset et font */
   :root {
  --bg-dark: #0e0e0e;
  --sidebar-dark: #121212;
  --card-dark: #1a1a1a;
  --text-light: #ffffff;
  --text-muted: #aaaaaa;
  --primary: #3b82f6;
  --primary-hover: #2563eb;
  --success: #10b981;
  --warning: #f59e0b;
  --danger: #ef4444;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
body, html {
  height: 100%;
  background: var(--bg-dark);
  overflow-x: hidden;
  color: var(--text-light);
}

/* Sidebar */
.sidebar {
  position: fixed;
  left: 0;
  top: 0;
  width: 260px;
  height: 100vh;
  background: var(--sidebar-dark);
  display: flex;
  flex-direction: column;
  padding: 30px 20px;
  z-index: 100;
  transition: width 0.3s ease;
}
.sidebar h1 {
  font-size: 1.5rem;
  font-weight: 600;
  color: var(--text-light);
  margin-bottom: 40px;
  padding-bottom: 15px;
  border-bottom: 1px solid rgba(255,255,255,0.1);
}
.sidebar nav a {
  color: var(--text-muted);
  text-decoration: none;
  padding: 12px 15px;
  font-size: 1rem;
  border-radius: 6px;
  margin-bottom: 8px;
  display: flex;
  align-items: center;
  gap: 12px;
  transition: all 0.3s ease;
  font-weight: 500;
}
.sidebar nav a:hover,
.sidebar nav a.active {
  background: var(--primary);
  color: var(--text-light);
}
.sidebar nav a svg {
  fill: currentColor;
  width: 18px;
  height: 18px;
}

/* Main content */
.main-content {
  margin-left: 260px;
  padding: 40px;
  min-height: 100vh;
  background: var(--bg-dark);
  transition: margin-left 0.3s ease;
}

/* Header */
.page-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 30px;
}
.page-title {
  font-size: 1.8rem;
  font-weight: 600;
  color: var(--text-light);
}
.user-profile {
  display: flex;
  align-items: center;
  gap: 15px;
}
.user-avatar {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: var(--primary);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--text-light);
  font-weight: 600;
}

/* Stats Grid */
.stats-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
  gap: 20px;
  margin-bottom: 40px;
}
.stat-card {
  background: var(--card-dark);
  border-radius: 10px;
  padding: 25px;
  display: flex;
  flex-direction: column;
  transition: 0.3s ease;
}
.stat-card:hover {
  background: #222;
}
.stat-card-title {
  font-size: 0.9rem;
  color: var(--text-muted);
  text-transform: uppercase;
}
.stat-card-value {
  font-size: 2.2rem;
  font-weight: 700;
  color: var(--text-light);
}
.stat-card-change {
  font-size: 0.85rem;
  margin-top: 8px;
  color: var(--success);
}
.stat-card-change.negative {
  color: var(--danger);
}

/* Table */
.table-container {
  background: var(--card-dark);
  border-radius: 10px;
  padding: 25px;
  margin-bottom: 40px;
  overflow-x: auto;
}
table {
  width: 100%;
  border-collapse: collapse;
  font-size: 0.95rem;
}
thead tr {
  background: var(--primary);
  color: var(--text-light);
}
th, td {
  padding: 12px 15px;
  border-bottom: 1px solid #2c2c2c;
}
tbody tr:hover {
  background: #1e1e1e;
}
.status-badge {
  padding: 5px 10px;
  border-radius: 20px;
  font-size: 0.8rem;
}
.status-pending {
  background: rgba(245, 158, 11, 0.1);
  color: var(--warning);
}
.status-converted {
  background: rgba(16, 185, 129, 0.1);
  color: var(--success);
}

/* Boutons */
.btn {
  padding: 8px 15px;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  font-weight: 500;
  font-size: 0.9rem;
  display: inline-flex;
  align-items: center;
  gap: 5px;
}
.btn-primary {
  background: var(--primary);
  color: var(--text-light);
}
.btn-primary:hover {
  background: var(--primary-hover);
}
.btn-outline {
  background: transparent;
  border: 1px solid var(--text-muted);
  color: var(--text-muted);
}
.btn-outline:hover {
  border-color: var(--text-light);
  color: var(--text-light);
}

/* Graphiques */
.charts-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
  gap: 20px;
  margin-bottom: 40px;
}
.chart-card {
  background: var(--card-dark);
  border-radius: 10px;
  padding: 25px;
  color: var(--text-light);
}
.chart-title {
  font-size: 1.1rem;
  font-weight: 600;
}

/* Commentaires */
.comments-container {
  background: var(--card-dark);
  border-radius: 10px;
  padding: 25px;
}
.comment-item {
  display: flex;
  gap: 15px;
  padding: 15px 0;
  border-bottom: 1px solid #2c2c2c;
}
.comment-avatar {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: var(--primary);
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
}
.comment-author {
  font-weight: 600;
  color: var(--text-light);
}
.comment-date {
  font-size: 0.85rem;
  color: var(--text-muted);
}
.comment-text {
  color: var(--text-muted);
  line-height: 1.5;
}

/* Footer */
footer {
  margin-left: 260px;
  text-align: center;
  padding: 20px;
  color: var(--text-muted);
  font-size: 0.9rem;
  background: var(--sidebar-dark);
  border-top: 1px solid #2c2c2c;
}

/* Responsive */
@media (max-width: 992px) {
  .sidebar {
    width: 80px;
    padding: 20px 10px;
    align-items: center;
  }
  .sidebar h1 {
    font-size: 1.2rem;
    text-align: center;
  }
  .sidebar nav a {
    justify-content: center;
  }
  .main-content {
    margin-left: 80px;
    padding: 30px 20px;
  }
  footer {
    margin-left: 80px;
  }
}
@media (max-width: 768px) {
  .stats-grid {
    grid-template-columns: 1fr 1fr;
  }
  .charts-container {
    grid-template-columns: 1fr;
  }
}
@media (max-width: 576px) {
  .stats-grid {
    grid-template-columns: 1fr;
  }
  .page-header {
    flex-direction: column;
    align-items: flex-start;
    gap: 15px;
  }
}

  </style>
</head>
<body>

  <aside class="sidebar" role="navigation" aria-label="Menu principal">
    <h1>LeadManager</h1>
    <nav>
      <a href="#" class="active" aria-current="page" tabindex="0">
        <svg viewBox="0 0 24 24"><path d="M3 13h8V3H3v10zm10 8h8v-6h-8v6zm0-8h8V3h-8v10zm-10 8h8v-6H3v6z"/></svg>
        <span>Dashboard</span>
      </a>
      <a href="#" tabindex="0">
        <svg viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4S14.21 4 12 4 8 5.79 8 8s1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
        <span>Leads</span>
      </a>
      <a href="#" tabindex="0">
        <svg viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14l7-3 7 3V5c0-1.1-.9-2-2-2z"/></svg>
        <span>Rapports</span>
      </a>
      <a href="#" tabindex="0">
        <svg viewBox="0 0 24 24"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5s-3 1.34-3 3 1.34 3 3 3zM8 11c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm8 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
        <span>Équipe</span>
      </a>
      <a href="#" tabindex="0">
        <svg viewBox="0 0 24 24"><path d="M19.14 12.94c.04-.31.06-.63.06-.94s-.02-.63-.06-.94l2.03-1.58c.18-.14.23-.41.11-.61l-1.91-3.32a.503.503 0 00-.6-.22l-2.39.96a7.028 7.028 0 00-1.63-.94l-.36-2.54A.495.495 0 0014 3h-4c-.26 0-.48.19-.5.45l-.36 2.54c-.6.25-1.17.58-1.69.98l-2.39-.96a.495.495 0 00-.6.22L3.72 9.47c-.12.2-.07.47.11.61l2.03 1.58c-.04.31-.06.63-.06.94s.02.63.06.94L3.83 15.47a.492.492 0 00-.11.61l1.91 3.32c.14.24.45.34.7.22l2.39-.96c.5.4 1.06.73 1.63.94l.36 2.54c.02.26.24.45.5.45h4c.26 0 .48-.19.5-.45l.36-2.54c.6-.25 1.17-.58 1.69-.98l2.39.96c.25.11.56.02.7-.22l1.91-3.32a.503.503 0 00-.11-.61l-2.03-1.58zM12 15.5c-1.93 0-3.5-1.57-3.5-3.5S10.07 8.5 12 8.5s3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5z"/></svg>
        <span>Paramètres</span>
      </a>
      <a href="#" tabindex="0" style="margin-top: auto;">
        <svg viewBox="0 0 24 24"><path d="M16 13v-2H7V7l-5 5 5 5v-4zM20 19h-8v-2h8v-6h-8v-2h8c1.1 0 2 .9 2 2v6c0 1.1-.9 2-2 2z"/></svg>
        <span>Déconnexion</span>
      </a>
    </nav>
  </aside>

  <main class="main-content" role="main" aria-label="Contenu principal">
    <div class="page-header">
      <h1 class="page-title">Tableau de bord</h1>
      <div class="user-profile">
        <div class="user-avatar">JD</div>
      </div>
    </div>

    <div class="stats-grid">
      <div class="stat-card">
        <div class="stat-card-header">
          <span class="stat-card-title">Leads totaux</span>
          <div class="stat-card-icon" style="background: #3498db;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
          </div>
        </div>
        <div class="stat-card-value">1,342</div>
        <div class="stat-card-change">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
          +12.5% vs mois dernier
        </div>
      </div>

      <div class="stat-card">
        <div class="stat-card-header">
          <span class="stat-card-title">Leads convertis</span>
          <div class="stat-card-icon" style="background: #2ecc71;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
          </div>
        </div>
        <div class="stat-card-value">532</div>
        <div class="stat-card-change">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
          +8.3% vs mois dernier
        </div>
      </div>

      <div class="stat-card">
        <div class="stat-card-header">
          <span class="stat-card-title">Taux de conversion</span>
          <div class="stat-card-icon" style="background: #9b59b6;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="20" x2="12" y2="10"></line><line x1="18" y1="20" x2="18" y2="4"></line><line x1="6" y1="20" x2="6" y2="16"></line></svg>
          </div>
        </div>
        <div class="stat-card-value">23%</div>
        <div class="stat-card-change negative">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline points="17 18 23 18 23 12"></polyline></svg>
          -1.2% vs mois dernier
        </div>
      </div>

      <div class="stat-card">
        <div class="stat-card-header">
          <span class="stat-card-title">CA estimé</span>
          <div class="stat-card-icon" style="background: #f39c12;">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
          </div>
        </div>
        <div class="stat-card-value">124.5k€</div>
        <div class="stat-card-change">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
          +18.7% vs mois dernier
        </div>
      </div>
    </div>

    <div class="table-container">
      <div class="table-header">
        <h2 class="table-title">Derniers leads</h2>
        <button class="btn btn-primary btn-sm">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
          Ajouter un lead
        </button>
      </div>
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Statut</th>
            <th>Date</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>#1001</td>
            <td>Jean Dupont</td>
            <td>jean.dupont@email.com</td>
            <td>06 12 34 56 78</td>
            <td><span class="status-badge status-pending">En attente</span></td>
            <td>2025-06-15</td>
            <td>
              <button class="btn btn-primary btn-sm">Voir</button>
              <button class="btn btn-outline btn-sm">Modifier</button>
            </td>
          </tr>
          <tr>
            <td>#1002</td>
            <td>Marie Curie</td>
            <td>marie.curie@email.com</td>
            <td>06 98 76 54 32</td>
            <td><span class="status-badge status-converted">Converti</span></td>
            <td>2025-06-10</td>
            <td>
              <button class="btn btn-primary btn-sm">Voir</button>
              <button class="btn btn-outline btn-sm">Modifier</button>
            </td>
          </tr>
          <tr>
            <td>#1003</td>
            <td>Paul Martin</td>
            <td>paul.martin@email.com</td>
            <td>07 55 44 33 22</td>
            <td><span class="status-badge status-pending">En attente</span></td>
            <td>2025-06-08</td>
            <td>
              <button class="btn btn-primary btn-sm">Voir</button>
              <button class="btn btn-outline btn-sm">Modifier</button>
            </td>
          </tr>
          <tr>
            <td>#1004</td>
            <td>Sophie Lambert</td>
            <td>sophie.lambert@email.com</td>
            <td>06 11 22 33 44</td>
            <td><span class="status-badge status-converted">Converti</span></td>
            <td>2025-06-05</td>
            <td>
              <button class="btn btn-primary btn-sm">Voir</button>
              <button class="btn btn-outline btn-sm">Modifier</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="charts-container">
      <div class="chart-card">
        <div class="chart-header">
          <h2 class="chart-title">Évolution des leads</h2>
          <select class="btn btn-outline btn-sm">
            <option>30 derniers jours</option>
            <option>3 derniers mois</option>
            <option>12 derniers mois</option>
          </select>
        </div>
        <div class="chart-placeholder">
          Graphique d'évolution des leads
        </div>
      </div>
      <div class="chart-card">
        <div class="chart-header">
          <h2 class="chart-title">Sources des leads</h2>
          <select class="btn btn-outline btn-sm">
            <option>Par campagne</option>
            <option>Par canal</option>
            <option>Par région</option>
          </select>
        </div>
        <div class="chart-placeholder">
          Graphique des sources de leads
        </div>
      </div>
    </div>

    <div class="comments-container">
      <h2 class="table-title">Derniers commentaires</h2>
      <div class="comment-item">
        <div class="comment-avatar">JD</div>
        <div class="comment-content">
          <div class="comment-header">
            <span class="comment-author">Jean Dupont</span>
            <span class="comment-date">2025-06-15 14:32</span>
          </div>
          <p class="comment-text">Très intéressé par notre solution Entreprise. A demandé une démonstration complète pour son équipe technique.</p>
        </div>
      </div>
      <div class="comment-item">
        <div class="comment-avatar">MC</div>
        <div class="comment-content">
          <div class="comment-header">
            <span class="comment-author">Marie Curie</span>
            <span class="comment-date">2025-06-10 11:15</span>
          </div>
          <p class="comment-text">A signé le contrat pour l'offre Premium. Démarrage prévu le 1er juillet.</p>
        </div>
      </div>
      <div class="comment-item">
        <div class="comment-avatar">PM</div>
        <div class="comment-content">
          <div class="comment-header">
            <span class="comment-author">Paul Martin</span>
            <span class="comment-date">2025-06-08 16:45</span>
          </div>
          <p class="comment-text">Demande des informations complémentaires sur l'intégration avec leur CRM actuel.</p>
        </div>
      </div>
    </div>

  </main>

  <footer>
    © 2025 LeadManager. Tous droits réservés. | Version 2.4.1
  </footer>

</body>
</html>
