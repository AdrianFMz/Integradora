<?php
    include("Banners/header.php");
?>
    
<div class="container mb-4">

    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="imagenes/Logo2.png" alt="" width="72" height="72">
      <h2>Formulario de Pago</h2>
      <p class="lead">En este apartado llena los campos para realizar el pago y ser parte de nuestra comunidad premium</p>
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Articulo a Pagar
              </h6>
              <small class="text-muted">Suscripcion Premium Individual</small>
            </div>
            <span class="text-muted">$149</span>
          </li>

          <li class="list-group-item d-flex justify-content-between">
            <span>Total (MXN)</span>
            <strong>$149</strong>
          </li>
        </ul>


      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Datos Necesarios</h4>

        <!--------------------------------------FORMULARIO DEL PAGO --------------------------->
        <form class="needs-validation" action="login.php" novalidate="">
          <div class="row g-3">
            <div class="col-sm-4">
              <label for="firstName" class="form-label">Nombre/s</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
              <div class="invalid-feedback">
                El nombre es Requerido.
              </div>
            </div>

            <div class="col-sm-4">
              <label for="lastName" class="form-label">Apellido Paterno</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
              <div class="invalid-feedback">
                El apellido Paterno es Requerido.
              </div>
            </div>
            <div class="col-sm-4">
              <label for="lastName" class="form-label">Apellido Materno</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
              <div class="invalid-feedback">
              El apellido Materno es Requerido.
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Nombre de Usuario</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" id="username" placeholder="Username" required="">
              <div class="invalid-feedback">
              El Usuario es Requerido.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Correo Electronico <span class="text-muted">(Opcional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Direccion</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
              <div class="invalid-feedback">
                Porfavor Ingresa una direccion.
              </div>
            </div>

            <div class="col-md-5">
              <label for="country" class="form-label">Pais</label>
              <select class="form-select" id="country" required="">
                <option value="">Selecciona...</option>
                <option>Mexico</option>
              </select>
              <div class="invalid-feedback">
                Porfavor Selecciona un Pais.
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">Estado</label>
              <select class="form-select" id="state" required="">
                <option value="">Selecciona...</option>
                <option>Nuevo Leon</option>
              </select>
              <div class="invalid-feedback">
              Porfavor Selecciona un Estado.
              </div>
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">Codio Postal</label>
              <input type="text" class="form-control" id="zip" placeholder="" required="">
              <div class="invalid-feedback">
                El CP es Requerido.
              </div>
            </div>
          </div>

          <hr class="my-4">



          <h4 class="mb-3">Datos Bancarios</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked="" required="">
              <label class="form-check-label" for="credit">Tarjeta Credito</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required="">
              <label class="form-check-label" for="debit">Tarjeta Debito</label>
            </div>
          </div>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Nombre del responsable</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required="">
              <small class="text-muted">Full name as displayed on card</small>
              <div class="invalid-feedback">
                El nombre del responsable es Requerido.
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Numero de Tarjeta</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required="">
              <div class="invalid-feedback">
                El numero de la Tarjeta es Requerido.
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label">Fecha de Expiracion</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
              <div class="invalid-feedback">
                La fecha de Expiracion es Requerida.
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label">CVV</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
              <div class="invalid-feedback">
                El CVV es Requerido.
              </div>
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg"  type="submit">Proceder al Pago</button>
        </form>
      </div>
    </div>



<!---->
</div>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
//ccccccc





///////cccc
 </script>


<?php
    include("Banners/footer.php");
?>
    
  

