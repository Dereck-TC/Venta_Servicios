<!DOCTYPE html>
<html>

<head>
  <title></title>
  <link rel="stylesheet" href="../assets/css/login.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

  <section class="vh-100 gradient-custom">
    <div class="container py-6 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <form class="mb-md-5 mt-md-4 pb-5" method="post">
                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>

                <p class="text-white-50 mb-5">Por favor ingresa tu usuario y clave!</p>

                <div class="form-outline form-white mb-4">
                  <input type="email" id="email" class="form-control form-control-lg" placeholder="Correo Electronico" />
                  <label class="form-label" for="email"></label>
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="password" id="password" class="form-control form-control-lg" placeholder="Clave" />
                  <label class="form-label" for="password"></label>
                </div>

                <button class="btn btn-outline-light btn-lg px-5" type="submit" id='btnLogin'>Ingresar</button>

                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                  <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                  <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                  <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                </div>

                <div>
                  <br>
                  <p class="mb-0">&iquest; No tienes cuenta &iquest; <a href="#!" class="text-white-50 fw-bold">Registrarme</a></p>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="../assets/js/login.js"></script>
</body>

</html>