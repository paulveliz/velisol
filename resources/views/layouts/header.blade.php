<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top top-nav-collapse">
    <!-- Image Logo -->
<a class="navbar-brand" href="/"><img src="{{ asset("images/logo.png")}}" alt="alternative"></a>
    <!-- Mobile Menu Toggle Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-awesome fas fa-bars"></span>
        <span class="navbar-toggler-awesome fas fa-times"></span>
    </button>
    <!-- end of mobile menu toggle button -->

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link page-scroll" href="/">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="/servicios">Servicios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="/productos">Nuestros productos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="/servicios">Clientes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="/precios">Precios</a>
            </li>
            <!-- Dropdown Menu -->          
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle page-scroll" href="/nosotros" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Nosotros</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/terminos"><span class="item-text">Terminos & Condiciones</span></a>
                    <div class="dropdown-items-divide-hr"></div>
                    <a class="dropdown-item" href="/terminos"><span class="item-text">Politicas de privacidad</span></a>
                </div>
            </li>
            <!-- end of dropdown menu -->

            <li class="nav-item">
                <a class="nav-link page-scroll" href="/contactar">Contactar</a>
            </li>
        </ul>
        <span class="nav-item social-icons">
            <span class="fa-stack">
                <a href="https://www.facebook.com/velizsolutions">
                    <i class="fas fa-circle fa-stack-2x facebook"></i>
                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                </a>
            </span>
            <span class="fa-stack">
                <a href="https://twitter.com/velisol2">
                    <i class="fas fa-circle fa-stack-2x twitter"></i>
                    <i class="fab fa-twitter fa-stack-1x"></i>
                </a>
            </span>
        </span>
    </div>
</nav> <!-- end of navbar -->
<!-- end of navigation -->