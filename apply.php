<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dealflow</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/stylesheet.css">
</head>

<body>

    <header role="header" class="header  header--light">

      <?php include("includes/ident.php"); ?>
      <?php include("includes/menu.php"); ?>

    </header>

    <main>


      <section class="hero  hero--portfolio  hero--deals">
      	<div class="hero__content">
          <div class="wrapper">
            <div class="col-8--lg  col-offset-2--lg">

              <h1>
                Skaff finansiering
              </h1>
              <p>
                 Nå ut til ressurssterke folk, som ikke bare tilfører penger, men som også vil investere energi i selskapet som styremedlemmer og rådgivere.
              </p>
            </div>

          </div>

      	</div>
      </section>


      <section class="section  product">

          <div class="wrapper">



            <div class="col-8--md  col-offset-2--md  col-6--lg  col-offset-3--lg">
              <div class="product__content">

                <h2>Søknadsskjema</h2>
                <br />

              <div class="form__half">

                <div class="form-field">
                  <label for="id-Surname" class="form-field__label">Fornavn</label>
                  <input id="id-Surname" type="text" name="Surname">
                </div>
              </div><div class="form__half  form__half--last">

                <div class="form-field">
                  <label for="id-Lastname" class="form-field__label">Etternavn</label>
                  <input id="id-Lastname" type="text" name="Lastname">
                </div>
              </div>

                <div class="form__half"><div class="form-field">
                  <label for="id-Mail" class="form-field__label">Epost-addresse</label>
                  <input id="id-Mail" type="email" name="Mail">
                </div>
              </div><div class="form__half  form__half--last">

                <div class="form-field">
                  <label for="id-Phone" class="form-field__label">Telefonnummer</label>
                  <input id="id-Phone" type="text" name="Phone">
                </div>
              </div>

                <div class="form-field">
                  <label for="id-Companyname" class="form-field__label">Selskapsnavn</label>
                  <input id="id-Companyname" type="text" name="Companyname">
                </div>

                <div class="form-field">
                  <label for="id-Companydescription" class="form-field__label">Beskrivelse av selskap (fase, produkter, kunder etc)</label>
                  <textarea id="id-Companydescription" style="min-height: 200px;"></textarea>
                </div>

                <div class="form-field">
                  <label for="id-Companyfunding" class="form-field__label">Hvor mye penger ønsker du å hente? Og hva skal pengene brukes til?</label>
                  <textarea id="id-Companyfunding" style="min-height: 200px;"></textarea>
                </div>

                <p>
                  Vi vil kontakte deg om din søknad ila. 2-4 arbeidsdager.
                </p>


                <br />
                <button type="submit" class="button   button--big  button--primary">Send søknad</button>


            </div>
          </div>



        </div>

      </section>
      <?php include("includes/footer.php"); ?>
      <?php include("includes/dialogs.php"); ?>

    </main>

    <script src="js/jquery.min.js"></script>
    <script src="js/fastclick.js"></script>
    <script src="js/main.js"></script>


</body>

</html>
