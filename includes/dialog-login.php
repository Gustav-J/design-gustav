<div class="dialog  dialog--xlarge  dialog--login  align--center" style="display: none;">
  <a href="#" class="dialog__close  t-close-dialog">Lukk</a>

  <div class="dialog__header">
    <h2 class="h1">Logg inn</h2>

    <p>
      Har du ikke noe konto? <a href="#">Registrer deg</a>
    </p>
    <!--<p>
      <label class="label  label--button"><input type="radio" name="register-type" checked />Som investor</label>
      <label class="label  label--button"><input type="radio" name="register-type" />Som selskap</label>
    </p>-->
  </div>

    <div class="dialog__content  align--left">

    <div class="form-split">

      <div class="col-6--lg">
        <div class="form-split__half">

          <h3 class="form-field__title">
            Logg inn med
          </h3>

          <div class="button-toolbar">
            <a href="#" class="button  button--block  button--facebook"><img src="images/icons/facebook.svg" class="icon  icon--marg-right" />Facebook</a>
            <a href="#" class="button  button--block  button--google"><img src="images/icons/google.svg" class="icon  icon--marg-right" />Google</a>
          </div>
        </div>
      </div>

      <div class="col-6--lg">
      <div class="form-split__half">

        <form action="portfolio.php?loggedin" method="post">

        <div class="form-field">
          <label for="id-Mail2" class="form-field__label">Brukernavn (din e-post)</label>
          <input id="id-Mail2" type="email" name="Mail">
        </div>

        <div class="form-field">
          <label for="id-Password2" class="form-field__label">Passord</label>
          <input id="id-Password2" type="password" name="Password">
        </div>

        <button type="submit" class="button   button--block  button--dark">Logg inn</button>
      </div>
    </form>

    </div>
  </div>

  </div>


</div>
