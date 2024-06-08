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
              <li><a href="about.php" class="nav-link px-2 text-white">Sobre Nosotros</a></li>
            </ul>
    
            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
              <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
            </form>
    
            <div class="text-end">
                <button id = "boton_modo" type="button" class="btn btn-warning" title="Pulsame"><i class="fa-solid fa-circle-half-stroke"></i></button>
              </div>
          </div>
        </div>
      </header>

    <nav></nav>
    <main>
        <!--Estilo para nada sacado de bootstrap-->
        <section class="h-100 gradient-form">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                  <div class="card rounded-3 text-black">
                    <div class="row g-0">
                      <div class="col-lg-6">
                        <div class="card-body p-md-5 mx-md-4">
          
                          <div class="text-center">
                            <img src="../Imagenes/Logo.png"
                              style="width: 185px;" alt="logo">
                            <h4 class="mt-1 mb-5 pb-1">Pocket Monster Dex</h4>
                          </div>
          
                          <form>
                            <p>Regístrate con tu cuenta</p>
          
                            <div class="form-outline mb-4">
                              <input type="email" id="form2Example11" class="form-control"
                              <label class="form-label" for="form2Example11">Nombre De Usuario</label>
                            </div>
          
                            <div class="form-outline mb-4">
                              <input type="password" id="form2Example22" class="form-control" />
                              <label class="form-label" for="form2Example22">Contraseña</label>
                            </div>
          
                            <div class="text-center pt-1 mb-5 pb-1">
                              <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button">Log
                                in</button>
                              <a class="text-muted" href="#!">¿Olvidaste tu contraseña?</a>
                            </div>
          
                            <div class="d-flex align-items-center justify-content-center pb-4">
                              <p class="mb-0 me-2"¿No tienes una cuenta?</p>
                              <button type="button" class="btn btn-outline-danger">Crea una nueva</button>
                            </div>
          
                          </form>
          
                        </div>
                      </div>
                      <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                        <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                            <h4 class="mb-4">Explora el fascinante mundo de los Pocket Monsters</h4>
                            <p class="small mb-0">Sumérgete en la aventura de capturar y entrenar a estos increíbles seres. Descubre sus habilidades únicas y desafía a otros entrenadores en tu camino hacia la maestría en el Pocket Monster Dex.</p>                            
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
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