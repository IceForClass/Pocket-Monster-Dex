<?php include "../include/paginas.inc.php";

headHTML();

?>



<body id="body">
    <header class="p-3 bg-dark text-white">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <img src="../Imagenes/Logo.png" width="100" height="100" role="img">
    
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="../index.php" class="nav-link px-2 text-white">Home</a></li>
              <li><a href="estrategias.php" class="nav-link px-2 text-white">Estrategias</a></li>
              <li><a href="mapa.php" class="nav-link px-2 text-white">Mapa</a></li>
              <li><a href="#" class="nav-link px-2 text-secondary">Sobre Nosotros</a></li>
            </ul>
    
            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
              <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
            </form>
    
            <div class="text-end">
              <a href="login.php" class="btn btn-outline-light me-2">Login</a>
              <button id = "boton_modo" type="button" class="btn btn-warning" title="Pulsame"><i class="fa-solid fa-circle-half-stroke"></i></button>
            </div>
          </div>
        </div>
      </header>

    <nav></nav>
    <main>
      <section class="text-center">
        <h1>Sobre Nosotros</h1>
        <hr>
      </section>
      <section>
        <div class="text-center mb-3">
          <h2> Texto</h2>
        <img src="../Imagenes/trainers.jpeg" alt="Trainers">
      </div>
      </section>
        <aside>
        </aside>
    </main>

    <footer class="text-center bg-light">
      <!-- Grid container -->
      <div class="container">
        <!-- Section: Social media -->
        <section>
          <!-- Facebook -->
          <a
            data-mdb-ripple-init
            class="btn btn-link btn-floating btn-lg text-body m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-facebook-f"></i
          ></a>
    
          <!-- Twitter -->
          <a
            data-mdb-ripple-init
            class="btn btn-link btn-floating btn-lg text-body m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-twitter"></i
          ></a>
    
          <!-- Google -->
          <a
            data-mdb-ripple-init
            class="btn btn-link btn-floating btn-lg text-body m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-google"></i
          ></a>
    
          <!-- Instagram -->
          <a
            data-mdb-ripple-init
            class="btn btn-link btn-floating btn-lg text-body m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-instagram"></i
          ></a>
    
          <!-- Linkedin -->
          <a
            data-mdb-ripple-init
            class="btn btn-link btn-floating btn-lg text-body m-1"
            href="#!"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-linkedin"></i
          ></a>
          <!-- Github -->
          <a
            data-mdb-ripple-init
            class="btn btn-link btn-floating btn-lg text-body m-1"
            href="https://github.com/IceForClass/Pocket-Monster-Dex"
            role="button"
            data-mdb-ripple-color="dark"
            ><i class="fab fa-github"></i
          ></a>
        </section>
        <!-- Section: Social media -->
      </div>
    </footer>
    <script src="../js/archivo.js"></script>
</body>
</html>