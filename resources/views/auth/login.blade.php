<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login - LeadManager</title>
  <style>
    /* Reset minimal */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Arial', sans-serif;
    }

    body, html {
      height: 100%;
      background: linear-gradient(135deg, #111111, #222222);
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
      overflow-x: hidden;
    }

    /* Conteneur principal - flex horizontal en desktop */
    .main-container {
      display: flex;
      max-width: 900px;
      width: 100%;
      background: #1a1a1a;
      border-radius: 12px;
      box-shadow: 0 0 30px rgba(0,0,0,0.8);
      overflow: hidden;
    }

    /* Texte animé à gauche */
    .left-text {
      flex: 1;
      padding: 60px 40px;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 4rem;
      font-weight: 800;
      line-height: 1.1;
      text-align: center;
      color: #fff;
      background: linear-gradient(135deg, #444, #222);
      animation: fadeMoveUp 1.2s ease forwards;
      user-select: none;
    }

    @keyframes fadeMoveUp {
      0% {
        opacity: 0;
        transform: translateY(40px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Formulaire à droite */
    .login-container {
      flex: 1;
      padding: 60px 50px;
    }

    .login-container h2 {
      margin-bottom: 40px;
      font-weight: 300;
      font-size: 2.8rem;
      text-align: center;
      color: #eee;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 30px;
    }

    label {
      font-size: 1.1rem;
      margin-bottom: 8px;
      color: #bbb;
    }

    input[type="email"],
    input[type="password"] {
      padding: 18px 20px;
      border-radius: 10px;
      border: none;
      background: #333;
      color: white;
      font-size: 1.3rem;
      transition: background 0.3s ease;
    }

    input[type="email"]:focus,
    input[type="password"]:focus {
      background: #444;
      outline: none;
    }

    button {
      background: #fff;
      color: #111;
      font-weight: 700;
      padding: 20px;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      text-transform: uppercase;
      letter-spacing: 3px;
      font-size: 1.4rem;
      transition: background 0.3s ease, color 0.3s ease;
    }

    button:hover {
      background: #444;
      color: #fff;
    }

    .signup-text {
      margin-top: 30px;
      text-align: center;
      font-size: 1.1rem;
      color: #bbb;
    }

    .signup-text a {
      color: #fff;
      text-decoration: underline;
      cursor: pointer;
    }

    .signup-text a:hover {
      color: #ddd;
    }

    /* Responsive mobile */
    @media (max-width: 720px) {
      .main-container {
        flex-direction: column;
        max-width: 100%;
        border-radius: 0;
        box-shadow: none;
      }

      .left-text {
        font-size: 3rem;
        padding: 40px 20px;
      }

      .login-container {
        padding: 40px 30px;
      }

      .login-container h2 {
        font-size: 2.2rem;
      }

      label {
        font-size: 1rem;
      }

      input[type="email"],
      input[type="password"] {
        font-size: 1.1rem;
        padding: 14px 16px;
      }

      button {
        font-size: 1.2rem;
        padding: 16px;
      }

      .signup-text {
        font-size: 0.95rem;
      }
    }
  </style>
</head>
<body>
  <div class="main-container">
    <div class="left-text">Connectez-vous</div>
    <div class="login-container">
      <form action="{{ route('login.post') }}" method="POST" novalidate autocomplete="off" id="loginForm">
    @csrf

    <label for="email">Adresse email</label>
    <input type="email" id="email" name="email" required placeholder="exemple@domaine.com" autocomplete="email" />

    <label for="password">Mot de passe</label>
    <input type="password" id="password" name="password" required placeholder="Votre mot de passe" autocomplete="new-password" />

    <button type="submit">Se connecter</button>
</form>

    </div>
  </div>

  <script>
    // Validation simple et nettoyage de base
    const form = document.getElementById('loginForm');
    form.addEventListener('submit', function(e) {
      const email = form.email.value.trim();
      const password = form.password.value.trim();

      if (!email || !password) {
        alert('Merci de remplir tous les champs.');
        e.preventDefault();
        return;
      }

      // Nettoyage simple (exemple)
      form.email.value = email.replace(/[<>"]/g, '');
      form.password.value = password.replace(/[<>"]/g, '');
    });
  </script>
</body>
</html>
