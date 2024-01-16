<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
      
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

       
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>

<section class="vh-100 d-flex justify-content-center align-items-center" style="background-color:#4B0082;">
  <div class="container-fluid h-custom">
    <div class="row justify-content-center"> 
      <div class="col col-xl-10 col-yl-12">
        <div class="card " style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-9 col-lg-6 col-xl-5 d-flex align-items-center">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                class="img-fluid mx-auto d-block" alt="Sample image" style="max-height: 300px; width: auto;">
            </div>
            <div class="col-md-8 col-lg-6 d-flex align-items">
              <div class="card-body p-3 p-lg-4 text-black">
                
              <form action="{{route('login')}}" method="post">
                    @csrf
                    <h5 class="fw-normal mb-3 pb-3 text-center" style="letter-spacing: 3px;">Iniciar sesión</h5>

                    <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example17">Correo Electrónico</label>
                    <input type="email" name="email" id="form2Example17" class="form-control form-control-lg" placeholder="Ingrese su correo electrónico" />
                    </div>

                    <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example27">Contraseña</label>
                    <input type="password" name="password" id="form2Example27" class="form-control form-control-lg" placeholder="Ingrese su contraseña" />
                    </div>

                    <div class="pt-1 mb-4">
                    <button class="col-12 btn btn-dark btn-lg btn-block" type="submit">Iniciar sesión</button>
                    </div>

                   
                    <p class="mb-5 pb-lg-2" style="color: #393f81;">¿No tiene una cuenta? <a href="{{route('register')}}" style="color: #393f81;">Crear cuenta</a></p>
                    

                </form>

                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
