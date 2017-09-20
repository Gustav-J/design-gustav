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

      <section class="hero  hero--product" style="background-image: url('images/content/tribe_header2.jpg'); background-position: top center;">
      	<div class="hero__content  hero__content--bottom">
          <div class="wrapper">
            <div class="col-12--lg">
              <ul class="card__tags  card__tags--inline">
                  <li class="card__tags-tag">
                    <a href="#" class="card__tags-tag__link  card__tags-tag__link--outline-w">IT</a>
                  </li>
                  <li class="card__tags-tag">
                    <a href="#" class="card__tags-tag__link  card__tags-tag__link--outline-w">Fintech</a>
                  </li>
                </ul>

              <h1 class="product__title">
                Tribe forsikring
              </h1>

            </div>

          </div>

      	</div>
      </section>





      <section class="section  product">
        <div class="product-nav">

          <nav class="tabs__wrapper">

            <ul class="tabs">
                <li class="tabs__item">
                  <a href="#" class="tabs__link  tabs__link--current">Oversikt</a>
                </li><?php if (isset($_GET['loggedin'])) { ?><li class="tabs__item"><a href="#" class="tabs__link">Om selskapet</a></li><?php } else { ?><li class="tabs__item"><a href="#" class="tabs__link  tabs__link--disabled  t-dialog--register"><img src="images/icons/lock.svg" class="svg  icon  icon--small  icon--marg-right" />Om selskapet</a></li><?php } ?><?php if (isset($_GET['loggedin'])) { ?><li class="tabs__item"><a href="#" class="tabs__link">Team og investering</a></li><?php } else { ?><li class="tabs__item"><a href="#" class="tabs__link  tabs__link--disabled  t-dialog--register"><img src="images/icons/lock.svg" class="svg  icon  icon--small  icon--marg-right" />Team og investering</a></li><?php } ?><?php if (isset($_GET['loggedin'])) { ?><li class="tabs__item"><a href="#" class="tabs__link">KPIer og prognoser</a></li><?php } else { ?><li class="tabs__item"><a href="#" class="tabs__link  tabs__link--disabled  t-dialog--register"><img src="images/icons/lock.svg" class="svg  icon  icon--small  icon--marg-right" />KPIer og prognoser</a></li><?php } ?><?php if (isset($_GET['loggedin'])) { ?><li class="tabs__item"><a href="#" class="tabs__link">Analyse og diskusjon</a></li><?php } else { ?><li class="tabs__item"><a href="#" class="tabs__link  tabs__link--disabled  t-dialog--register"><img src="images/icons/lock.svg" class="svg  icon  icon--small  icon--marg-right" />Analyse og diskusjon</a></li><?php } ?>

            </ul>

          </nav>
        </div>

          <div class="wrapper">


            <div class="col-8--lg">
              <div class="product__content  <?php if (isset($_GET['loggedin'])) { ?><?php } else { ?> product__content--locked <?php } ?>">

              <div class="product__video">
                <iframe frameborder="0" width="100%" src="https://www.youtube.com/embed/O_OqkDB_Kuw?showinfo=0&amp;controls=0&amp;loop=1&amp;iv_load_policy=3&amp;rel=0"></iframe>
              </div>

              <h2>This is Tribe</h2>
              <p>
                Tribe is a Facebook meets insurance. It is a new insurance concept, where customers receive a discount if they make groups of responsible friends. This creates the potential for viral spread, while damage cost is kept down and we can provide lower prices than the traditional companies.
              </p>
              <p>
                Investment case study are summarized below
              </p>
              <ul class="list  list--bullets">
                <li>
                  The insurance industry is profitable
                </li>
                <li>
                  We have a unique product
                </li>
                <li>
                  We have a fantastic team and supporters
                </li>
                <li>
                  Business case with big upside and little downside
                </li>
                <li>
                  We have IT and product in place, but are looking for funding for proof-of-concept in Norway
                </li>
                <li>
                  Good interest, but we want to have a "smart capital" / mutual match
                </li>
              </ul>

  <?php if (isset($_GET['loggedin'])) { ?>

  <?php } else { ?>
    <div class="card  card--outline  card--locked">
      <div class="card__content">
      <h3 class="card__title">Vil du ha mer informasjon om Tribe forsikring?</h3>

      <p>
        <a href="#" class="button  t-dialog--register">Registrer deg som investor</a>
      </p>
    </div>
  </div>
  <br clear="all" />

  <?php } ?>


              </div>


            </div>

            <div class="col-4--lg">
              <div class="card-container">

              <div class="card  card--light">

                <div class="card__content">
                  <div class="card__status-bar">
                    <div class="card__status-bar__sofar" style="width: 55%;"></div>
                    <div class="card__status-bar__sofar  card__status-bar__sofar--next" style="left: 55%; width: 15%;"><span class="card__status-bar__tooltip">1 232 232 kr</span></div>
                  </div>
                  <ul>
                    <li class="card__item">
                      <h4 class="card__item-title">Til salgs</h4>
                      <p class="card__item-description">
                        <img src="images/icons/pie.svg" class="icon" /> 5%
                      </p>
                    </li>
                    <li class="card__item">
                      <h4 class="card__item-title">Tid igjen</h4>
                      <p class="card__item-description">
                        <img src="images/icons/time.svg" class="icon" /> Fulltegnet
                      </p>
                    </li>
                    <li class="card__item">
                      <h4 class="card__item-title">Selskapsverdi</h4>
                      <p class="card__item-description">
                        <img src="images/icons/price.svg" class="icon" /> 2 mill
                      </p>
                    </li>
                    <li class="card__item">
                      <h4 class="card__item-title">Mål (pr investering)</h4>
                      <p class="card__item-description">
                        <img src="images/icons/value.svg" class="icon" /> fra 50 k
                      </p>
                    </li>
                  </ul>
                </div>
                <div class="card__footer">
                  <a href="product.php" class="button  button--block  button--primary  t-dialog--register">Invester nå</a>
                </div>
              </div>


              <div class="card  card--light">
                <div class="card__content">
                  <h3 class="card__item-description">
                    <img src="images/icons/pie.svg" class="icon" /> Notable investors
                  </h3>


                  <div class="card__item  card__item--full">
                    <p class="card__item-description--large">
                      20%
                    </p>
                  </div>


                  <p>
                    Rocket Finance holds 20% of the shares and is a majority stakeholder. They hold a position on the board and drive marketing and talent acquisition.
                  </p>
                </div>
              </div>


              <div class="card  card--light">
                <div class="card__content">
                  <h3 class="card__item-description">
                    <img src="images/icons/users.svg" class="icon" /> Customers
                  </h3>

                  <div class="card__item  card__item--full">
                    <p class="card__item-description--large">
                      6 214
                      <span class="card__item-meta">
                        <span>5% <img src="images/icons/trending-up.svg" class="svg  icon  icon--positive" /></span>
                        <!--<span><img src="images/icons/trending-down.svg" class="icon  icon--positive" /> 2%</span>-->
                      </span>
                    </p>
                  </div>

                  <p>
                    5000% annual growth in 3 years of operation across 5 cities.
                  </p>
                </div>
              </div>

              <div class="card  card--light">
                <div class="card__content">
                  <h3 class="card__item-description">
                    <img src="images/icons/percent.svg" class="icon" /> Title
                  </h3>

                  <p>
                    Description
                  </p>
                </div>
              </div>
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
