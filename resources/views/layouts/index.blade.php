<title>My Website</title>

<!-- Bootstrap 5 CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    html {
        scroll-behavior: smooth;
        
    }
</style>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">MyWebsite</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                <a class="nav-link" href="#about">About</a>
                <a class="nav-link" href="#contact">Contact</a>

            </ul>

        </div>
    </div>
</nav>

<!-- Home Section -->
<section id="home" class="bg-light py-5" style="margin-top:70px;">
    <div class="container text-center">
        @yield('HomeContent')
    </div>
    @yield('SecondContent')
    @yield('Test')
</section>

<!-- About Section -->
<section id="about" class="py-5">
    <div class="container">
        @yield('AboutContent')
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="bg-light py-5">
    <div class="container">
        @yield('content')
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center p-3">
    © 2026 MyWebsite | Built with Laravel & Bootstrap
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
