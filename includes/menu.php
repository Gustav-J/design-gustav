<a href="#" class="header__menu-trigger"><img src="images/icons/menu.svg" class="icon  svg" />Menu</a>

<a href="#" class="header__notifications-trigger"><img src="images/icons/bell.svg" class="svg  icon  icon--small" /><span class="notifications__number">3</span></a>


<?php if (isset($_GET['loggedin'])) { ?>

<nav class="header__menu">
    <ul class="menu-main">
      <li class="menu-main__item">
        <a href="index.php" class="menu-main__link">Hjem</a>
      </li>

      <li class="menu-main__item">
        <a href="#" class="menu-main__link  t-dialog--register">Investeringer</a>
      </li>
      <li class="menu-main__item">
        <a href="portfolio.php" class="menu-main__link">Min portefølje</a>
      </li>
      <li class="menu-main__item">
        <div class="dropdown-menu">
          <a href="#" class="menu-main__link  t-dropdown-menu"><img src="images/icons/bell.svg" class="svg  icon  icon--small  icon--marg-right" /><span class="notifications__number">3</span></a>
          <div class="dropdown-menu__content">
            <a href="my_profile.php" class="dropdown-menu__link">Alarm 1</a>
            <a href="documents.php" class="dropdown-menu__link">Alarm 2</a>
            <a href="loggedout.php" class="dropdown-menu__link">Alarm 3</a>
          </div>
        </div>
      </li>
      <li class="menu-main__item">
        <div class="dropdown-menu">
          <a href="#" class="menu-main__link  t-dropdown-menu"><img src="images/icons/user.svg" class="svg  icon  icon--small  icon--marg-right" />Ola Nordmann</a>

          <div class="dropdown-menu__content">
            <a href="my_profile.php" class="dropdown-menu__link">Innstillinger</a>
            <a href="loggedout.php" class="dropdown-menu__link">Logg ut</a>
          </div>

        </div>
      </li>

    </ul>
  </nav>
<?php } else { ?>
  <nav class="header__menu">
    <ul class="menu-main">
      <li class="menu-main__item">
        <a href="index.php" class="menu-main__link">Hjem</a>
      </li>
      <li class="menu-main__item">
        <a href="#" class="menu-main__link  t-dialog--register">Investeringer</a>
      </li>
      <li class="menu-main__item">
        <a href="apply.php" class="menu-main__link">Hente penger</a>
      </li>
      <li class="menu-main__item">
        <a href="#" class="button  button--outline-w  t-dialog--register">Registrer deg</a>
      </li>
      <li class="menu-main__item">
        <a href="#" class="button  button--outline-w  t-dialog--login">Logg inn</a>
      </li>
    </ul>
  </nav>
<?php } ?>
