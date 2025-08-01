<!DOCTYPE html>
<html lang="en">

<?php
include("assets/head.php");
?>

<body>

  <?php
  include("assets/nav.php");
  ?>

  <!-- Main container -->
  <div class="container-fluid d-flex flex-column align-items-center justify-content-center">
    <!-- Landing -->
    <header class="row mx-2 scroll-margin" style="min-height:85vh; width:90vw;">
      <div class="col-12 col-md-7 order-2 order-md-1 d-flex flex-column align-items-start justify-content-center pt-5">
        <h1 class="text-dark fw-bold display-3"> <span style="color:var(--primary);">AI</span> <br> Student Collective <br> <span style="color:var(--secondary);">Madrid</span></h1>
        <h6 class="lh-lg text-muted" data-en="UC3M Student Association Interested in AI.
        Gain in-demand skills, connect with industry, and become part of an international community." data-es="Asociación de Estudiantes de la UC3M interesados en la IA. Adquiere habilidades demandadas, conecta con la industria y forma parte de una comunidad internacional.">Asociación de Estudiantes de la UC3M interesados en la IA. Adquiere habilidades demandadas, conecta con la industria y forma parte de una comunidad internacional.</h6>
        <div class="mt-4 d-flex gap-2">
          <a href="#get-involved" style="background-color:var(--primary);" class="text-light btn px-4 fw-semibold" data-en="Get Involved!" data-es="¡Participa!">¡Participa!</a>
          <a href="#about" class="btn btn-outline-secondary px-4 fw-semibold" data-en="More ->" data-es="Más ->">
            Más -> <span class="ms-1">&rarr;</span>
          </a>
        </div>
      </div>
      <div class="col-12 col-md-5 order-1 order-md-2 d-flex flex-column align-items-center align-items-md-end justify-content-center ">
        <img style="width: 75%;" src="images/logos/SVG/Property 1=AISC Logo Color.svg" alt="Logotipo de la asociación AISC">
      </div>
    </header>

    <section class="scroll-margin" id="about">
      <div class="container py-4">
        <h2 class="text-center mb-4">
          <span style="color:var(--muted);" data-en="From AISC Madrid" data-es="Desde AISC Madrid">Desde AISC Madrid</span>
        </h2>
        <div class="row g-4">

          <!-- Card 1 -->
          <div class="col-md-4">
            <div class="card h-100 shadow-sm no-hover">
              <div class="card-body d-flex flex-column">
                <div class="mb-3 d-inline-flex align-items-center justify-content-center rounded text-white" style="width:50px; height:50px; background-color: var(--primary);">
                  <i class="fa-solid fa-brain fs-2"></i>
                </div>
                <h5 class="card-title" data-en="Engineering and Artificial Intelligence" data-es="Ingeniería e Inteligencia Artificial">Ingeniería e Inteligencia Artificial</h5>
                <p class="card-text" data-en="Student Association at University Carlos III of Madrid." data-es="Asociación de estudiantes en la Universidad Carlos III de Madrid.">
                  Asociación de estudiantes en la Universidad Carlos III de Madrid.
                </p>
              </div>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="col-md-4">
            <div class="card h-100 shadow-sm no-hover">
              <div class="card-body d-flex flex-column">
                <div class="mb-3 d-inline-flex align-items-center justify-content-center rounded text-white" style="width:50px; height:50px; background-color: var(--primary);">
                  <i class="bi bi-tools fs-2 "></i>
                </div>
                <h5 class="card-title" data-en="Workshops" data-es="Talleres">Talleres</h5>
                <p class="card-text" data-en="Demystify AI by acquiring practical skills demanded by the industry." data-es="Desmitifica la IA adquiriendo habilidades prácticas demandas por la industria.">
                  Desmitifica la IA adquiriendo habilidades prácticas demandas por la industria.
                </p>
              </div>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="col-md-4">
            <div class="card h-100 shadow-sm no-hover">
              <div class="card-body d-flex flex-column">
                <div class="mb-3 d-inline-flex align-items-center justify-content-center rounded text-white" style="width:50px; height:50px; background-color: var(--primary);">
                  <i class="bi bi-diagram-3 fs-2"></i>
                </div>
                <h5 class="card-title" data-en="Events and Connections" data-es="Eventos y Conexiones">Eventos y Conexiones</h5>
                <p class="card-text" data-en="Get closer to the job market with students and industry members." data-es="Acércate al mundo laboral de la mano de estudiantes y miembros del sector.">
                  Acércate al mundo laboral de la mano de estudiantes y miembros del sector.
                </p>
              </div>
            </div>
          </div>

          <!-- Card 4 -->
          <div class="col-md-4">
            <div class="card h-100 shadow-sm no-hover">
              <div class="card-body d-flex flex-column">
                <div class="mb-3 d-inline-flex align-items-center justify-content-center rounded text-white" style="width:50px; height:50px; background-color: var(--secondary);">
                  <i class="bi bi-people fs-2"></i>
                </div>
                <h5 class="card-title" data-en="Community" data-es="Comunidad">Comunidad</h5>
                <p class="card-text" data-en="Take the opportunity to meet other students and enjoy the university experience." data-es="Aprovecha para conocer a otros estudiantes y disfrutar de la experiencia universitaria.">
                  Aprovecha para conocer a otros estudiantes y disfrutar de la experiencia universitaria.
                </p>
              </div>
            </div>
          </div>

          <!-- Card 5 -->
          <div class="col-md-4">
            <div class="card h-100 shadow-sm no-hover">
              <div class="card-body d-flex flex-column">
                <div class="mb-3 d-inline-flex align-items-center justify-content-center rounded text-white" style="width:50px; height:50px; background-color: var(--secondary);">
                  <i class="bi bi-globe-americas fs-2"></i>
                </div>
                <h5 class="card-title" data-en="International Network" data-es="Red Internacional">Red Internacional</h5>
                <p class="card-text" data-en="Be part of the AI Student Collective community, founded at UC Davis, California, and expanded across the US." data-es="Forma parte de la comunidad AI Student Collective, fundada en UC Davis, California y expandida por Estados Unidos.">
                  Forma parte de la comunidad AI Student Collective, fundada en UC Davis, California y expandida por Estados Unidos.
                </p>
              </div>
            </div>
          </div>

          <!-- Card 6 -->
          <div class="col-md-4">
            <div class="card h-100 shadow-sm no-hover">
              <div class="card-body d-flex flex-column">
                <div class="mb-3 d-inline-flex align-items-center justify-content-center rounded text-white" style="width:50px; height:50px; background-color: var(--secondary);">
                  <i class="bi bi-rocket-takeoff fs-2"></i>
                </div>
                <h5 class="card-title" data-en="Welcome" data-es ="Bienvenid@">Bienvenid@</h5>
                <p class="card-text" data-en="Join us and enjoy the process!" data-es="¡Únete y disfruta del proceso!">
                  ¡Únete y disfruta del proceso!
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

<section class="section" id="team"> 
  <div class="container scroll-margin">
    <h2 class="text-center mb-4">
      <span style="color: var(--muted);" data-en="Meet the team" data-es="Conoce al equipo">Conoce al equipo</span>
    </h2>
    <div class="mt-5 row">

      <div class="col-sm-6 col-lg-3">
        <div class="team-box text-center">
          <div class="team-wrapper">
            <div class="team-member">
              <a href="https://www.linkedin.com/in/hugocentenosanz/" target="_blank">
                <img src="images/members/Hugo Centeno Sanz.png" alt="Hugo Centeno Sanz" class="img-fluid rounded">
              </a>
            </div>
          </div>
          <h5 class="mt-3" style="color: var(--background)">Hugo Centeno Sanz</h5>
          <p class="text-muted" data-en="President" data-es="Presidente">Presidente</p>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3">
        <div class="team-box text-center">
          <div class="team-wrapper">
            <div class="team-member">
              <a target="_blank">
                <img src="images/members/Alfonso Mayoral Montero.png" alt="Alfonso Mayoral Montero" class="img-fluid rounded">
              </a>
            </div>
          </div>
          <h5 class="mt-3" style="color: var(--background)">Alfonso Mayoral Montero</h5>
          <p class="text-muted" data-en="Vicepresident" data-es="Vicepresidente">Vicepresidente</p>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3">
        <div class="team-box text-center">
          <div class="team-wrapper">
            <div class="team-member">
              <a href="https://www.linkedin.com/in/lauren-gallego-ropero/" target="_blank">
                <img src="images/members/Lauren Gallego Ropero.png" alt="Lauren Gallego Ropero" class="img-fluid rounded">
              </a>
            </div>
          </div>
          <h5 class="mt-3" style="color: var(--background)">Lauren Gallego Ropero</h5>
          <p class="text-muted" data-en="Vicepresident" data-es="Vicepresidente">Vicepresidente</p>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3">
        <div class="team-box text-center">
          <div class="team-wrapper">
            <div class="team-member">
              <a href="https://www.linkedin.com/in/alejandrobarrosobueso/" target="_blank">
                <img src="images/members/Alejandro Barroso Bueso.png" alt="Alejandro Barroso Bueso" class="img-fluid rounded">
              </a>
            </div>
          </div>
          <h5 class="mt-3" style="color: var(--background)">Alejandro Barroso Bueso</h5>
          <p class="text-muted" data-en="Web Master" data-es="Administrador Web">Administrador Web</p>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="section scroll-margin w-100 px-3 px-md-5" id="events">
  <div class="container-fluid">
    <h2 class="text-center mb-4">
      <span style="color: var(--muted);" data-en="Events" data-es="Eventos">Eventos</span>
    </h2>
  <div class="event-btn-container">
    <button class="btn btn-primary event-btn fw-semibold event-filter-btn" data-en="Future Events" data-es="Eventos Futuros">Eventos Futuros</button>
    <button class="btn btn-primary event-btn fw-semibold event-filter-btn" data-en="Past Events" data-es="Eventos Pasados">Eventos Pasados</button>
  </div>

    <div class="row g-4" style="width:100%;">

       <!-- Event Structure -->
<!--       <div class="col-md-6 col-lg-4 event-past">
        <div class="card h-100 shadow-sm">
          <div class="card-body p-0">
            <div class="img-container">
              <img src="images/test/event1.jpeg" class="w-100" alt="...">
            </div>
            <div class="p-3">
              <h5 class="card-title mt-3 fw-bold">Título Evento</h5>
              <p class="card-text">Fecha y hora.</p>
              <p class="card-text">Ubicación.</p>
            </div>
          </div>
        </div>
      </div> -->
      
      <div class="col-md-6 col-lg-4 event-future">
        <a href="/events/evento.php" class="text-decoration-none text-reset">
          <div class="card h-100 w-100 shadow-sm">
            <div class="card-body p-0 position-relative">
              <div class="img-container">
                <img src="https://live.staticflickr.com/4562/37696404454_88e0ff976b.jpg" class="card-img-top" alt="Universidad Carlos III" style="object-fit: cover;">
              </div>
              <div class="p-3 pb-5">
                <h5 class="card-title mt-3 fw-bold" data-en="Welcome Day 2025-2026" data-es="Jornada de Bienvenida 2025-2026">
                  Jornada de Bienvenida 2025-2026
                </h5>
                <p class="card-text"><i class="fas fa-calendar me-2"></i><strong>8 de Septiembre de 2025</strong><br>10:00 a 17:00</p>
                <p class="card-text"><i class="fas fa-map-marker-alt me-2"></i><span>EPS Universidad Carlos III</span></p>
              </div>
              <div class="card-more-badge" data-en="More information" data-es="Saber más">Saber más</div>
            </div>
          </div>
        </a>
      </div>


      <!-- <div class="col-md-6 col-lg-4 event-future">
        <div class="card h-100 shadow-sm">
          <div class="card-body p-0">
            <div class="img-container">
              <img src="images/test/event3.jpeg" class="w-100" alt="...">
            </div>
            <div class="p-3">
              <h5 class="card-title mt-3 fw-bold">Título Evento</h5>
              <p class="card-text">Fecha y hora.</p>
              <p class="card-text">Ubicación.</p>
            </div>
            
          </div>
        </div>
      </div> -->
        
    </div>
    

</section>


 <section class="container-fluid mb-5 scroll-margin" id="get-involved">
      <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
          <div class=" border-0 form-card no-hover">
            <div id="form-error" class="card-body bg-muted p-4">
              <h4 class="display-4 text-center text-dark  mb-3" data-en="Don't miss a thing!" data-es="¡Mantente al tanto!">¡Mantente al tanto!</h4>
              <p class="text-muted text-center mb-4 form-subtext" data-en="Send your name and email to stay informed and join our AI community at UC3M." data-es="Envía tu nombre y correo electrónico para mantenerte informado y unirte a nuestra comunidad de IA en UC3M.">
                Envía tu nombre y correo electrónico para mantenerte informado y unirte a nuestra comunidad de IA en UC3M.
              </p>

              <form method="POST" action="processing/phpmailer.php" class="needs-validation" novalidate>
                <!-- Nombre -->
                <div class="mb-3">
                  <label for="name" class="form-label" data-en="Full name" data-es="Nombre completo">Nombre completo</label>
                  <input type="text" class="form-control form-input" id="name" name="name" data-es="Nombre y apellido(s)" data-en="Your name and surname" placeholder="Nombre y apellido(s)" required>
                  <div class="invalid-feedback" data-en="Please, introduce your name and surname." data-es="Por favor, introduce tu nombre y apellido(s).">Por favor, introduce tu nombre y apellido(s).</div>
                </div>

                <!-- Email -->
                <div class="mb-3">
                  <label for="email" class="form-label" data-en="E-mail" data-es="Correo electrónico">Correo electrónico</label>
                  <input type="email" class="form-control form-input" id="email" name="email" data-en="name@example.com" data-es="nombre@ejemplo.com" placeholder="nombre@ejemplo.com" required>
                  <div class="invalid-feedback" data-en="Please, introduce a valid e-mail" data-es="Por favor, introduce un correo válido.">Por favor, introduce un correo válido.</div>
                </div>

                <!-- Consentimiento -->
                <div class="form-check mb-3">
                  <input class="form-check-input" type="checkbox" id="consent" name="consent" required>
                  <label class="form-check-label form-text" for="consent" data-en="I consent to AISC Madrid storing my submitted data to contact me." data-es="Doy mi consentimiento para que AISC Madrid almacene mis datos enviados para contactarme.">
                    Doy mi consentimiento para que AISC Madrid almacene mis datos enviados para contactarme.
                  </label>
                  <div class="invalid-feedback" data-en="You must give permission to continue" data-es="Debes dar tu consentimiento para continuar. ">Debes dar tu consentimiento para continuar.</div>
                </div>

                <!-- Enviar -->
                <div class="d-grid">
                  <button type="submit" class="btn btn-primary form-btn fw-semibold" data-en="Send" data-es="Enviar">Enviar</button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </section>



  </div>


  <!-- Footer include -->
  <?php include('assets/footer.php'); ?>

  <!-- Bootstrap validation script -->
  <script src="js/index.js"></script>
  <script src="js/language.js"></script>
  


  <!-- Bootstrap Bundle JS (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>



</body>

</html>
