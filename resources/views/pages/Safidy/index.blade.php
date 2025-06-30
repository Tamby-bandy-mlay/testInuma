<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>LeadManager</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    html {
      scroll-behavior: smooth;
    }
    .fade-in {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 1s ease-out, transform 1s ease-out;
    }
    .fade-in.visible {
      opacity: 1;
      transform: translateY(0);
    }
  </style>
</head>
<body class="bg-black text-white font-sans tracking-wide">

  <!-- Header -->
 <!-- Header -->
<header class="fixed w-full top-0 left-0 z-50 bg-black bg-opacity-80 backdrop-blur-lg shadow-lg">
  <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
    <h1 class="text-3xl font-light">Lead</h1>

    <!-- Desktop nav -->
    <nav id="desktop-nav" class="space-x-6 text-sm uppercase tracking-widest hidden md:flex">
      <a href="#about" class="hover:underline">About Us</a>
      <a href="{{ route('login') }}" class="hover:underline">Login</a>
    </nav>

    <!-- Mobile menu button -->
    <button id="menu-btn" class="md:hidden focus:outline-none" aria-label="Toggle menu">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>
  </div>

  <!-- Mobile nav -->
  <nav id="mobile-menu" class="hidden flex-col bg-black bg-opacity-90 backdrop-blur-lg shadow-lg px-6 py-6 space-y-4 text-white uppercase tracking-widest text-center">
    <a href="#about" class="block hover:underline" onclick="toggleMenu()">About Us</a>
    <a href="#login" class="block hover:underline" onclick="toggleMenu()">Login</a>
  </nav>
</header>


  <!-- Hero -->
  <section id="hero" class="min-h-screen flex items-center justify-center px-6 text-center pt-32">
  <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-12">
    <!-- Texte -->
    <div class="md:w-1/2 space-y-8 text-left fade-in">
      <h2 class="text-5xl md:text-6xl font-extralight leading-tight">
        Gérez vos prospects<br><span class="font-bold">comme un pro</span>
      </h2>
      <p class="text-lg text-gray-400">
        Un tableau de bord intelligent pour capter, suivre et convertir vos leads avec style.
      </p>
      <a href="#pricing" class="inline-block mt-4 px-8 py-4 border border-white rounded-full text-sm uppercase tracking-widest hover:bg-white hover:text-black transition">
        Démarrer
      </a>
    </div>

    <!-- Images à droite -->
    <div class="md:w-1/2 flex gap-6 justify-center md:justify-end">
      <img src="{{ asset('assets/image/image1.png') }}" alt="Image 1" class="rounded-lg shadow-lg max-w-[45%] object-cover" />
      <img src="{{ asset('assets/image/image2.png') }}" alt="Image 2" class="rounded-lg shadow-lg max-w-[45%] object-cover" />
    </div>
  </div>
</section>

  <!-- Features -->
  <section id="features" class="py-32 px-6 max-w-6xl mx-auto space-y-24">
    <div class="grid md:grid-cols-3 gap-12 items-center">
      <div class="fade-in">
        <img src="{{ asset('assets/image/image1.png') }}" alt="Suivi intelligent" class="rounded-lg shadow-lg mb-6 w-full object-cover max-h-48" />
        <h3 class="text-xl font-light mb-4">Suivi intelligent</h3>
        <p class="text-gray-400">Gérez vos leads en temps réel avec une interface simple mais puissante.</p>
      </div>
      <div class="fade-in">
        <img src="{{ asset('assets/image/image2.png') }}" alt="Notifications ciblées" class="rounded-lg shadow-lg mb-6 w-full object-cover max-h-48" />
        <h3 class="text-xl font-light mb-4">Notifications ciblées</h3>
        <p class="text-gray-400">Recevez des alertes personnalisées pour chaque interaction importante.</p>
      </div>
      <div class="fade-in">
        <h3 class="text-xl font-light mb-4">Collaboration fluide</h3>
        <p class="text-gray-400">Travaillez en équipe sur le pipeline de conversion de manière fluide.</p>
      </div>
    </div>
  </section>

  <!-- Statistics -->
  <section id="statistics" class="bg-gray-900 py-32 px-6 text-center max-w-6xl mx-auto rounded-lg shadow-lg">
    <h3 class="text-4xl font-light mb-16 fade-in">Chiffres clés</h3>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-16">
      <div class="fade-in">
        <span class="block text-5xl font-bold">+1500</span>
        <span class="uppercase text-gray-400 tracking-widest">Leads gérés</span>
      </div>
      <div class="fade-in">
        <span class="block text-5xl font-bold">98%</span>
        <span class="uppercase text-gray-400 tracking-widest">Taux de conversion</span>
      </div>
      <div class="fade-in">
        <span class="block text-5xl font-bold">250+</span>
        <span class="uppercase text-gray-400 tracking-widest">Utilisateurs actifs</span>
      </div>
      <div class="fade-in">
        <span class="block text-5xl font-bold">24/7</span>
        <span class="uppercase text-gray-400 tracking-widest">Support client</span>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section id="testimonials" class="py-32 px-6 max-w-6xl mx-auto space-y-12">
    <h3 class="text-4xl font-light text-center fade-in mb-14">Ce que disent nos clients</h3>
    <div class="grid md:grid-cols-3 gap-12">
      <blockquote class="fade-in bg-gray-900 rounded-xl p-8 shadow-lg border border-gray-700">
        <img src="{{ asset('assets/image/image1.png') }}" alt="Alice M." class="w-16 h-16 rounded-full mx-auto mb-4 object-cover" />
        <p class="text-gray-300 italic mb-5">« LeadManager a révolutionné notre suivi client. Plus jamais un lead perdu ! »</p>
        <footer class="text-gray-400 font-light text-right">— Alice M.</footer>
      </blockquote>
      <blockquote class="fade-in bg-gray-900 rounded-xl p-8 shadow-lg border border-gray-700">
        <img src="{{ asset('assets/image/image2.png') }}" alt="Thomas D." class="w-16 h-16 rounded-full mx-auto mb-4 object-cover" />
        <p class="text-gray-300 italic mb-5">« Le système de notifications personnalisées est un vrai gain de temps pour mon équipe. »</p>
        <footer class="text-gray-400 font-light text-right">— Thomas D.</footer>
      </blockquote>
      <blockquote class="fade-in bg-gray-900 rounded-xl p-8 shadow-lg border border-gray-700">
        <p class="text-gray-300 italic mb-5">« Interface intuitive et support réactif, je recommande sans hésiter ! »</p>
        <footer class="text-gray-400 font-light text-right">— Sophie R.</footer>
      </blockquote>
    </div>
  </section>

  <!-- Pricing -->
  <section id="pricing" class="py-32 px-6 max-w-6xl mx-auto text-center space-y-12">
    <h3 class="text-4xl font-light fade-in">Tarifs simples et transparents</h3>
    <div class="grid md:grid-cols-3 gap-10">
      <div class="fade-in border border-white rounded-xl p-10 shadow-lg hover:shadow-2xl transition">
        <h4 class="text-2xl font-semibold mb-6">Basic</h4>
        <p class="text-gray-400 mb-6">Pour les petites équipes débutantes</p>
        <span class="text-5xl font-bold mb-6 block">€19<span class="text-sm font-light">/mois</span></span>
        <ul class="text-gray-400 mb-8 space-y-2">
          <li>Gestion de 100 leads</li>
          <li>Notifications email</li>
          <li>Support basique</li>
        </ul>
        <a href="#" class="inline-block px-8 py-3 border border-white rounded-full hover:bg-white hover:text-black transition">Commencer</a>
      </div>
      <div class="fade-in border border-white rounded-xl p-10 shadow-lg hover:shadow-2xl transition bg-white text-black">
        <h4 class="text-2xl font-semibold mb-6">Pro</h4>
        <p class="mb-6">Idéal pour les équipes en croissance</p>
        <span class="text-5xl font-bold mb-6 block">€49<span class="text-sm font-light">/mois</span></span>
        <ul class="mb-8 space-y-2">
          <li>Gestion illimitée des leads</li>
          <li>Notifications push et email</li>
          <li>Support prioritaire</li>
        </ul>
        <a href="#" class="inline-block px-8 py-3 border border-black rounded-full hover:bg-black hover:text-white transition">Commencer</a>
      </div>
      <div class="fade-in border border-white rounded-xl p-10 shadow-lg hover:shadow-2xl transition">
        <h4 class="text-2xl font-semibold mb-6">Entreprise</h4>
        <p class="text-gray-400 mb-6">Solutions sur mesure pour grandes équipes</p>
        <span class="text-5xl font-bold mb-6 block">Sur devis</span>
        <ul class="text-gray-400 mb-8 space-y-2">
          <li>Fonctionnalités avancées</li>
          <li>Intégrations CRM</li>
          <li>Support dédié</li>
        </ul>
        <a href="#" class="inline-block px-8 py-3 border border-white rounded-full hover:bg-white hover:text-black transition">Contactez-nous</a>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="py-32 px-6 max-w-4xl mx-auto text-center space-y-12">
    <h3 class="text-4xl font-light fade-in">Contactez-nous</h3>
    <p class="text-gray-400 fade-in max-w-xl mx-auto">Une question ? Besoin d’une démo personnalisée ? Envoyez-nous un message, on vous répond rapidement.</p>
    <form class="fade-in space-y-6 max-w-md mx-auto">
      <input type="text" placeholder="Votre nom" required class="w-full px-4 py-3 rounded bg-gray-900 border border-gray-700 focus:outline-none focus:ring-2 focus:ring-white" />
      <input type="email" placeholder="Votre email" required class="w-full px-4 py-3 rounded bg-gray-900 border border-gray-700 focus:outline-none focus:ring-2 focus:ring-white" />
      <textarea placeholder="Votre message" rows="5" required class="w-full px-4 py-3 rounded bg-gray-900 border border-gray-700 focus:outline-none focus:ring-2 focus:ring-white resize-none"></textarea>
      <button type="submit" class="px-8 py-3 border border-white rounded-full hover:bg-white hover:text-black transition uppercase tracking-widest font-semibold">Envoyer</button>
    </form>
  </section>

  <!-- Footer -->
  <footer class="py-12 text-center text-gray-500 text-sm border-t border-white border-opacity-10">
    &copy; 2025 LeadManager — Tous droits réservés
  </footer>

  <script>
    // Animation fade-in au scroll
    const faders = document.querySelectorAll('.fade-in');
    const appear = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        }
      });
    }, { threshold: 0.1 });
    faders.forEach(fade => appear.observe(fade));

    // Toggle menu mobile
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    function toggleMenu() {
      mobileMenu.classList.toggle('hidden');
    }

    menuBtn.addEventListener('click', toggleMenu);
  </script>

</body>
</html>
