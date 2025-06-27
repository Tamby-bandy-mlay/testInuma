<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>testInuma</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col min-h-screen bg-gradient-to-b from-white via-indigo-50 to-indigo-100 text-gray-700 font-sans">

  <!-- Header -->
  <header class="sticky top-0 bg-white bg-opacity-90 backdrop-blur-sm shadow-md z-50">
    <div class="container mx-auto flex justify-between items-center px-8 py-5">
      <div class="flex items-center space-x-4">
        <!-- Image/logo -->
        <img src="{{ asset('assets/image/tache.png') }}" alt="Logo TaskMaster" class="w-12 h-12 object-contain" />
        <div>
          <h1 class="text-3xl font-light tracking-wide text-indigo-700">TestInuma</h1>
          <p class="text-indigo-500 text-sm -mt-1">Inuma Lorem ipsum dolor sit.</p>
        </div>
      </div>
      <nav class="space-x-8 text-indigo-600 font-medium text-lg hidden md:flex">
        <a href="#" class="hover:text-indigo-900 transition">Accueil</a>
        <a href="#" class="hover:text-indigo-900 transition">Tâches</a>
        <a href="#" class="hover:text-indigo-900 transition">À propos</a>
        <a href="#" class="hover:text-indigo-900 transition">Contact</a>
      </nav>
      <!-- Mobile menu button -->
      <button id="menu-btn" class="md:hidden focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>
    </div>
    <!-- Mobile nav -->
    <nav id="mobile-menu" class="hidden md:hidden bg-white bg-opacity-90 backdrop-blur-sm shadow-md px-8 py-4 space-y-4 text-indigo-600 font-medium text-lg">
      <a href="#" class="block hover:text-indigo-900 transition">Accueil</a>
      <a href="#" class="block hover:text-indigo-900 transition">Tâches</a>
      <a href="#" class="block hover:text-indigo-900 transition">À propos</a>
      <a href="#" class="block hover:text-indigo-900 transition">Contact</a>
    </nav>
  </header>

  <!-- Main Content -->
  <main class="flex-grow container mx-auto px-4 md:px-8 py-16 max-w-6xl">

    <!-- Intro Section -->
    <section class="mb-20 flex flex-col md:flex-row items-center gap-10 max-w-5xl mx-auto px-4">
      <!-- Texte -->
      <div class="md:w-1/2 text-center md:text-left">
        <h2 class="text-4xl md:text-5xl font-extralight mb-6 leading-tight text-indigo-900">
          Simplifiez votre quotidien,<br />gérez vos tâches sans effort
        </h2>
        <p class="text-lg md:text-xl text-indigo-700/80 mb-10 max-w-xl mx-auto md:mx-0">
          TaskMaster vous aide à organiser vos projets et prioriser vos tâches grâce à une interface intuitive et un design épuré.
        </p>
        <a href="#" class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 md:py-4 px-10 md:px-14 rounded-full shadow-lg transition">
          Commencer maintenant
        </a>
      </div>

      <!-- Image -->
      <div class="md:w-1/2 flex justify-center md:justify-end">
        <img src="{{ asset('assets/image/tache.png') }}" alt="Illustration tâches" class="max-w-full h-auto rounded-lg shadow-lg" />
      </div>
    </section>

    <!-- Fonctionnalités clés -->
    <section class="mb-24 px-4">
      <h3 class="text-4xl font-light text-center text-indigo-800 mb-14">Fonctionnalités principales</h3>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-12 max-w-5xl mx-auto">
        <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition">
          <div class="text-indigo-500 mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 5h6M9 12h6M9 19h6M4 7h.01M4 14h.01M4 21h.01" />
            </svg>
          </div>
          <h4 class="text-2xl font-light mb-3 text-center text-indigo-700">Gestion simplifiée</h4>
          <p class="text-center text-indigo-600/90 leading-relaxed">Créez, modifiez et supprimez vos tâches en toute simplicité.</p>
        </div>

        <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition">
          <div class="text-indigo-500 mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3M3 11h18M5 21h14a2 2 0 002-2v-7H3v7a2 2 0 002 2z" />
            </svg>
          </div>
          <h4 class="text-2xl font-light mb-3 text-center text-indigo-700">Rappels intelligents</h4>
          <p class="text-center text-indigo-600/90 leading-relaxed">Ne ratez jamais une échéance grâce à des notifications précises.</p>
        </div>

        <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition">
          <div class="text-indigo-500 mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87M7 7a4 4 0 11-8 0 4 4 0 018 0zm10 0a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
          </div>
          <h4 class="text-2xl font-light mb-3 text-center text-indigo-700">Collaboration facile</h4>
          <p class="text-center text-indigo-600/90 leading-relaxed">Partagez vos listes et travaillez en équipe efficacement.</p>
        </div>
      </div>
    </section>

    <!-- Avantages -->
    <section class="mb-24 bg-indigo-100 rounded-3xl py-14 px-10 max-w-4xl mx-auto shadow-md">
      <h3 class="text-3xl font-light text-indigo-900 text-center mb-10">Pourquoi TaskMaster ?</h3>
      <ul class="max-w-xl mx-auto list-inside list-disc space-y-6 text-indigo-800 text-lg leading-relaxed">
        <li>Interface épurée et ultra intuitive</li>
        <li>Synchronisation fluide sur tous vos appareils</li>
        <li>Protection avancée de vos données personnelles</li>
        <li>Assistance client réactive 7j/7</li>
      </ul>
    </section>

    <!-- Témoignages -->
    <section class="mb-24 max-w-6xl mx-auto px-6">
      <h3 class="text-4xl font-light text-indigo-900 text-center mb-14">Ce que disent nos utilisateurs</h3>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
        <blockquote class="bg-white rounded-2xl p-8 shadow-lg border border-indigo-200">
          <p class="text-indigo-700 italic mb-5">« TaskMaster a totalement changé ma manière d’organiser mes journées. Simple, rapide et efficace ! »</p>
          <footer class="text-indigo-600 font-light text-right">— Claire D.</footer>
        </blockquote>

        <blockquote class="bg-white rounded-2xl p-8 shadow-lg border border-indigo-200">
          <p class="text-indigo-700 italic mb-5">« Les rappels sont précis et m’aident à ne jamais oublier mes rendez-vous importants. »</p>
          <footer class="text-indigo-600 font-light text-right">— Julien M.</footer>
        </blockquote>

        <blockquote class="bg-white rounded-2xl p-8 shadow-lg border border-indigo-200">
          <p class="text-indigo-700 italic mb-5">« Partager mes listes avec l’équipe a augmenté notre productivité de façon impressionnante. »</p>
          <footer class="text-indigo-600 font-light text-right">— Sophie L.</footer>
        </blockquote>
      </div>
    </section>

    <!-- Call to Action -->
    <section class="text-center mb-20 max-w-3xl mx-auto px-4">
      <h2 class="text-4xl font-extralight text-indigo-900 mb-8">Vous êtes prêt à maîtriser vos tâches ?</h2>
      <a href="#" class="inline-block bg-indigo-700 text-white px-12 py-5 rounded-full text-xl font-semibold shadow-lg hover:bg-indigo-800 transition">
        Lancez-vous dès aujourd’hui
      </a>
    </section>

  </main>

  <!-- Footer -->
  <footer class="bg-indigo-900 text-indigo-300 py-8 mt-auto">
    <div class="container mx-auto px-8 text-center text-sm font-light tracking-widest">
      &copy; 2025 TaskMaster. Tous droits réservés.
    </div>
  </footer>

  <script>
    // Toggle mobile menu
    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('mobile-menu');
    btn.addEventListener('click', () => {
      menu.classList.toggle('hidden');
    });
  </script>

</body>
</html>
