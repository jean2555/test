<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EduHome - Education Is About Academic Excellence</title>

    <!-- 
    - favicon
  -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml" />

    <!-- 
    - custom css link
  -->
    <link rel="stylesheet" href="./assets/css/style.css" />

    <!-- 
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />

    <!-- 
    - preload images
  -->
    <link rel="preload" as="image" href="./assets/images/hero-banner.png" />
    <link
      rel="preload"
      as="image"
      href="./assets/images/hero-abs-1.png"
      media="min-width(768px)"
    />
    <link
      rel="preload"
      as="image"
      href="./assets/images/hero-abs-2.png"
      media="min-width(768px)"
    />
  </head>

  <body id="top">
    <!-- 
    - #HEADER
  -->

    <header class="header" data-header>
      <div class="container">
        <h1>
          <a href="#" class="logo">International Hope Group</a>
        </h1>

        <nav class="navbar" data-navbar>
          <div class="navbar-top">
            <a href="#" class="logo">International hope Group</a>

            <button
              class="nav-close-btn"
              aria-label="Close menu"
              data-nav-toggler
            >
              <ion-icon name="close-outline"></ion-icon>
            </button>
          </div>

          <ul class="navbar-list">
            <li class="navbar-item">
              <a href="./index.php" class="navbar-link" data-nav-toggler
                >Accueil</a
              >
            </li>

            <li class="navbar-item">
              <a href="#about" class="navbar-link" data-nav-toggler>A propos</a>
            </li>

            <li class="navbar-item">
              <a href="#courses" class="navbar-link" data-nav-toggler
                >Service</a
              >
            </li>

            <li class="navbar-item">
              <a href="#cta" class="navbar-link" data-nav-toggler
                >Contact</a
              >
            </li>
          </ul>
        </nav>

        <div class="header-actions">
          <button
            class="header-action-btn"
            aria-label="Open search"
            data-search-toggler
          >
            <ion-icon name="search-outline"></ion-icon>
          </button>

          <a href="./log/log.php" class="header-action-btn login-btn">
            <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

            <span class="span">Se connecter / S'inscrire</span>
          </a>

          <button
            class="header-action-btn nav-open-btn"
            aria-label="Open menu"
            data-nav-toggler
          >
            <ion-icon name="menu-outline"></ion-icon>
          </button>
        </div>

        <div class="overlay" data-nav-toggler data-overlay></div>
      </div>
    </header>

    <!-- 
    - #SEARCH BOX
  -->

    <div class="search-container" data-search-box>
      <div class="container">
        <button
          class="search-close-btn"
          aria-label="Close search"
          data-search-toggler
        >
          <ion-icon name="close-outline"></ion-icon>
        </button>

        <div class="search-wrapper">
          <input
            type="search"
            name="search"
            placeholder="Rechercher..."
            aria-label="Search"
            class="search-field"
          />

          <button class="search-submit" aria-label="Submit" data-search-toggler>
            <ion-icon name="search-outline"></ion-icon>
          </button>
        </div>
      </div>
    </div>

    <main>
      <article>
        <!-- 
        - #HERO
      -->

        <section
          class="hero"
          id="home"
          aria-label="hero"
          style="background-image: url('./assets/images/hero-bg.jpg')"
        >
          <div class="container">
            <div class="hero-content">
              <p class="section-subtitle">
                Nous vous accompagnons dans vos projets
              </p>

              <h2 class="h1 hero-title">International Hope Group</h2>

              <p class="hero-text">
                Nous assistons nos clients dans la r??alisation de leurs projets
                aussi bien pour l???entr??e dans l???universit?? de leur r??ve, que
                dans la conqu??te de nouveaux march??s et travaillons jour apr??s
                jour ?? leur garantir la facilit?? du processus et fiabilit?? des
                transactions.
              </p>

              <a
                href="https://calendly.com/internationalhopegroup/prise-de-rendez-vous"
                class="btn btn-primary"
              >
                <span class="span">Prendre rendez vous</span>

                <ion-icon
                  name="arrow-forward-outline"
                  aria-hidden="true"
                ></ion-icon>
              </a>
            </div>

            <figure class="hero-banner">
              <img
                src="./assets/images/hero-banner.png"
                width="500"
                height="500"
                loading="lazy"
                alt="hero image"
                class="w-100"
              />

              <img
                src="./assets/images/hero-abs-1.png"
                width="318"
                height="352"
                loading="lazy"
                aria-hidden="true"
                class="abs-img abs-img-1"
              />

              <img
                src="./assets/images/hero-abs-2.png"
                width="160"
                height="160"
                loading="lazy"
                aria-hidden="true"
                class="abs-img abs-img-2"
              />
            </figure>
          </div>
        </section>

        <!-- 
        - #CATEGORY
      -->

        <section class="section category" aria-label="category">
          <div class="container">
            <p class="section-subtitle">Nos domaines d'expertise</p>

            <h2 class="h2 section-title">
              Des prestations adapt??es ?? vos besoins
            </h2>

            <ul class="grid-list">
              <li>
                <div class="category-card">
                  <div class="card-icon">
                    <ion-icon name="briefcase-outline"></ion-icon>
                  </div>

                  <div>
                    <h3 class="h3 card-title">
                      <a href="#">Le conseil d'orientation</a>
                    </h3>

                    <span class="card-meta"
                      >quels fili??res apr??s mes ??tude ?</span
                    >
                  </div>
                </div>
              </li>

              <li>
                <div class="category-card">
                  <div class="card-icon">
                    <ion-icon name="file-tray-full-outline"></ion-icon>
                  </div>

                  <div>
                    <h3 class="h3 card-title">
                      <a href="#">Le choix de l'universit??</a>
                    </h3>

                    <span class="card-meta"
                      >Classe pr??paratoire, D.U.T ou L.M.D ?</span
                    >
                  </div>
                </div>
              </li>

              <li>
                <div class="category-card">
                  <div class="card-icon">
                    <ion-icon name="color-palette-outline"></ion-icon>
                  </div>

                  <div>
                    <h3 class="h3 card-title">
                      <a href="#">L'assistance pour dossier de candidature</a>
                    </h3>

                    <span class="card-meta"
                      >De l'aide avec vos dossiers administratifs</span
                    >
                  </div>
                </div>
              </li>

              <li>
                <div class="category-card">
                  <div class="card-icon">
                    <ion-icon name="layers-outline"></ion-icon>
                  </div>

                  <div>
                    <h3 class="h3 card-title">
                      <a href="#">Pr??paration au test d'admission</a>
                    </h3>

                    <span class="card-meta"
                      >Coacher par des professionnels pour r??ussir
                      <i class="fab fa-volume-slash"></i> tests
                    </span>
                  </div>
                </div>
              </li>

              <li>
                <div class="category-card">
                  <div class="card-icon">
                    <ion-icon name="laptop-outline"></ion-icon>
                  </div>

                  <div>
                    <h3 class="h3 card-title">
                      <a href="#">L'assistance voyage</a>
                    </h3>

                    <span class="card-meta"
                      >Voyagez l'esprit tranquil, on s'occupe de tout</span
                    >
                  </div>
                </div>
              </li>

              <li>
                <div class="category-card">
                  <div class="card-icon">
                    <ion-icon name="thumbs-up-outline"></ion-icon>
                  </div>

                  <div>
                    <h3 class="h3 card-title">
                      <a href="#">Assistance voyage</a>
                    </h3>

                    <span class="card-meta"
                      >De votre d??part jusqu'?? votre arriv??e</span
                    >
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </section>

        <!-- 
        - #ABOUT
      -->

        <section class="section about" id="about" aria-label="about">
          <div class="container">
            <figure class="about-banner">
              <img
                src="./assets/images/about-banner.jpg"
                width="450"
                height="590"
                loading="lazy"
                alt="about banner"
                class="w-100 about-img"
              />

              <img
                src="./assets/images/about-abs-1.jpg"
                width="188"
                height="242"
                loading="lazy"
                aria-hidden="true"
                class="abs-img abs-img-1"
              />

              <img
                src="./assets/images/about-abs-2.jpg"
                width="150"
                height="200"
                loading="lazy"
                aria-hidden="true"
                class="abs-img abs-img-2"
              />
            </figure>

            <div class="about-content">
              <p class="section-subtitle">Qui sommes nous ?</p>

              <h2 class="h2 section-title">
                Le meilleur des services pour la meilleure client??le
              </h2>

              <ul class="about-list">
                <li class="about-item">
                  <div class="item-icon item-icon-1">
                    <img
                      src="./assets/images/about-icon-1.png"
                      width="30"
                      height="30"
                      loading="lazy"
                      aria-hidden="true"
                    />
                  </div>

                  <div>
                    <h3 class="h3 item-title">
                      Assistance pour ??tudes au Maroc,USA ...
                    </h3>

                    <p class="item-text">
                      Pour vos ??tudes au Maroc, au Canada et aux USA, nous vous
                      accompagnons dans toutes vos d??marches en partant du choix
                      des fili??res ?? votre int??gration apr??s votre arriv??e dans
                      le pays de votre choix.
                    </p>
                  </div>
                </li>

                <li class="about-item">
                  <div class="item-icon item-icon-2">
                    <img
                      src="./assets/images/about-icon-2.png"
                      width="30"
                      height="30"
                      loading="lazy"
                      aria-hidden="true"
                    />
                  </div>

                  <div>
                    <h3 class="h3 item-title">
                      Conseil des entreprises ?? l???exportation
                    </h3>

                    <p class="item-text">
                      International Hope Group vous accompagne dans votre projet
                      de conqu??te des march??s internationaux tels que ceux des
                      Etats Unis, du Maroc et du Canada.
                    </p>
                  </div>
                </li>

                <li class="about-item">
                  <div class="item-icon item-icon-3">
                    <img
                      src="./assets/images/about-icon-3.png"
                      width="30"
                      height="30"
                      loading="lazy"
                      aria-hidden="true"
                    />
                  </div>

                  <div>
                    <h3 class="h3 item-title">Tourisme m??dical</h3>

                    <p class="item-text">
                      B??n??ficiez de soin dans les meilleurs hopitaux du monde
                      gr??ce ?? notre accompagement lors de vos d??placements.
                    </p>
                  </div>
                </li>
              </ul>

              <a
                href="https://calendly.com/internationalhopegroup/prise-de-rendez-vous"
                class="btn btn-primary"
              >
                <span class="span">Chat conseiller</span>

                <ion-icon
                  name="arrow-forward-outline"
                  aria-hidden="true"
                ></ion-icon>
              </a>
            </div>
          </div>
        </section>

        <!-- 
        - #COURSE
      -->

        <section
          class="section course"
          id="courses"
          aria-label="course"
          style="background-image: url('./assets/images/course-bg.jpg')"
        >
          <div class="container">
            <p class="section-subtitle">Nos Services</p>

            <h2 class="h2 section-title">Recommandez pour vous</h2>

            <ul class="grid-list">
              <li>
                <div class="course-card">
                  <figure class="card-banner">
                    <img
                      src="./assets/images/course-1.jpg"
                      width="370"
                      height="270"
                      loading="lazy"
                      alt="Competitive Strategy law for all students"
                      class="img-cover"
                    />
                  </figure>

                  <div class="card-actions">
                    <button
                      class="whishlist-btn"
                      aria-label="Add to whishlist"
                      data-whish-btn
                    >
                      <ion-icon name="heart"></ion-icon>
                    </button>
                  </div>

                  <div class="card-content">
                    <ul class="card-meta-list">
                      <li class="card-meta-item">
                        <ion-icon
                          name="reader-outline"
                          aria-hidden="true"
                        ></ion-icon>

                        <span class="card-meta-text"></span>
                      </li>

                      <li class="card-meta-item">
                        <ion-icon
                          name="time-outline"
                          aria-hidden="true"
                        ></ion-icon>

                        <time datetime="PT18H15M44S" class="card-meta-text"
                          >2mn</time
                        >
                      </li>
                    </ul>

                    <h3 class="h3">
                      <a href="#" class="card-title"
                        >L???analyse et la conqu??te du march??
                      </a>
                    </h3>

                    <div class="card-footer">
                      <div class="card-meta-item">
                        <ion-icon
                          name="people-outline"
                          aria-hidden="true"
                        ></ion-icon>

                        <span class="card-meta-text">Certifi??</span>
                      </div>
                    </div>
                  </div>
                </div>
              </li>

              <li>
                <div class="course-card">
                  <figure class="card-banner">
                    <img
                      src="./assets/images/course-2.jpg"
                      width="370"
                      height="270"
                      loading="lazy"
                      alt="Machine Learning A-Z: Hands-On Python and java"
                      class="img-cover"
                    />
                  </figure>

                  <div class="card-actions">
                    <button
                      class="whishlist-btn"
                      aria-label="Add to whishlist"
                      data-whish-btn
                    >
                      <ion-icon name="heart"></ion-icon>
                    </button>
                  </div>

                  <div class="card-content">
                    <ul class="card-meta-list">
                      <li class="card-meta-item">
                        <ion-icon
                          name="reader-outline"
                          aria-hidden="true"
                        ></ion-icon>

                        <span class="card-meta-text"></span>
                      </li>

                      <li class="card-meta-item">
                        <ion-icon
                          name="time-outline"
                          aria-hidden="true"
                        ></ion-icon>

                        <time
                          datetime="PT18H15M44S"
                          class="card-meta-text"
                        ></time>
                      </li>
                    </ul>

                    <h3 class="h3">
                      <a href="#" class="card-title"
                        >Le d??veloppement des ventes
                      </a>
                    </h3>

                    <div class="rating-wrapper">
                      <span class="rating-text"></span>
                    </div>

                    <div class="card-footer">
                      <div class="card-meta-item">
                        <ion-icon
                          name="people-outline"
                          aria-hidden="true"
                        ></ion-icon>

                        <span class="card-meta-text">Certifi??</span>
                      </div>
                    </div>
                  </div>
                </div>
              </li>

              <li>
                <div class="course-card">
                  <figure class="card-banner">
                    <img
                      src="./assets/images/course-3.jpg"
                      width="370"
                      height="270"
                      loading="lazy"
                      alt="Achieving Advanced in Insights with Big"
                      class="img-cover"
                    />
                  </figure>

                  <div class="card-actions">
                    <button
                      class="whishlist-btn"
                      aria-label="Add to whishlist"
                      data-whish-btn
                    >
                      <ion-icon name="heart"></ion-icon>
                    </button>
                  </div>

                  <div class="card-content">
                    <ul class="card-meta-list">
                      <li class="card-meta-item">
                        <ion-icon
                          name="reader-outline"
                          aria-hidden="true"
                        ></ion-icon>

                        <span class="card-meta-text"></span>
                      </li>

                      <li class="card-meta-item">
                        <ion-icon
                          name="time-outline"
                          aria-hidden="true"
                        ></ion-icon>

                        <time
                          datetime="PT18H15M44S"
                          class="card-meta-text"
                        ></time>
                      </li>
                    </ul>

                    <h3 class="h3">
                      <a href="#" class="card-title"
                        >S??jour et bain linguistique</a
                      >
                    </h3>

                    <div class="rating-wrapper">
                      <span class="rating-text"></span>
                    </div>

                    <div class="card-footer">
                      <div class="card-meta-item">
                        <ion-icon
                          name="people-outline"
                          aria-hidden="true"
                        ></ion-icon>

                        <span class="card-meta-text">Certifi??</span>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>

            <a href="./service.html" class="btn btn-primary">
              <span class="span">D??couvrir plus</span>

              <ion-icon
                name="arrow-forward-outline"
                aria-hidden="true"
              ></ion-icon>
            </a>
          </div>
        </section>

        <!-- 
        - #CTA
      -->

        <section
          class="section cta"
          id="cta"
          aria-label="workshop"
          style="background-image: url('./assets/images/cta-bg.png')"
        >
          <div class="container">
            <figure class="cta-banner">
              <img
                src="./assets/images/cta-banner.jpg"
                width="580"
                height="380"
                loading="lazy"
                alt="cta banner"
                class="img-cover"
              />
            </figure>

            <div class="cta-content">
              <h2 class="h2 section-title">
                Passez un appel avec notre support
              </h2>

              <p class="section-text">
                Un support ?? votre ??coute 24/24, ?? l'??coute de vos besoins. Pour
                information suppl??mentaire n'h??sitez ?? consulter notre section.
              </p>

              <a
                href="./contact.html"
                class="btn btn-secondary"
              >
                <span class="span">Ou nous trouver ?</span>

                <ion-icon
                  name="arrow-forward-outline"
                  aria-hidden="true"
                ></ion-icon>
              </a>
            </div>
          </div>
        </section>

        <!-- 
        - #EVENT
      -->

        <section class="section event" id="event" aria-label="event">
          <div class="container">
            <p class="section-subtitle">Ev??nements</p>

            <h2 class="h2 section-title">Acteur du changement</h2>

            <ul class="grid-list">
              <li>
                <div class="event-card">
                  <figure class="card-banner">
                    <img
                      src="./assets/images/event-1.jpeg"
                      width="370"
                      height="250"
                      loading="lazy"
                      alt="Innovation & Technological Entrepreneurship Team"
                      class="img-cover"
                    />
                  </figure>

                  <time class="badge" datetime="2022-12-04">2021</time>

                  <div class="card-content">
                    <address class="card-address">
                      <ion-icon
                        name="location-outline"
                        aria-hidden="true"
                      ></ion-icon>

                      <span class="span">Palm Club, Casablanca, Maroc</span>
                    </address>

                    <h3 class="h3">
                      <a href="#" class="card-title"
                        >Lancement de la journ??e ??tudiante</a
                      >
                    </h3>

                    <a href="#news" class="btn-link">
                      <span class="span">Rester informer</span>

                      <ion-icon
                        name="arrow-forward-outline"
                        aria-hidden="true"
                      ></ion-icon>
                    </a>
                  </div>
                </div>
              </li>

              <li>
                <div class="event-card">
                  <figure class="card-banner">
                    <img
                      src="./assets/images/event-2.jpeg"
                      width="370"
                      height="250"
                      loading="lazy"
                      alt="Virtual Spring Part-time Jobs Fair for Student"
                      class="img-cover"
                    />
                  </figure>

                  <time class="badge" datetime="2022-10-30">2021</time>

                  <div class="card-content">
                    <address class="card-address">
                      <ion-icon
                        name="location-outline"
                        aria-hidden="true"
                      ></ion-icon>

                      <span class="span">Maroc</span>
                    </address>

                    <h3 class="h3">
                      <a href="#" class="card-title"
                        >Forum ??tudiant</a
                      >
                    </h3>

                    <a href="#" class="btn-link">
                      <span class="span">Rester informer</span>

                      <ion-icon
                        name="arrow-forward-outline"
                        aria-hidden="true"
                      ></ion-icon>
                    </a>
                  </div>
                </div>
              </li>

              <li>
                <div class="event-card">
                  <figure class="card-banner">
                    <img
                      src="./assets/images/event-3.jpg"
                      width="370"
                      height="250"
                      loading="lazy"
                      alt="Explorations of Regional Chief Executive Network"
                      class="img-cover"
                    />
                  </figure>

                  <time class="badge" datetime="2022-09-18">2021</time>

                  <div class="card-content">
                    <address class="card-address">
                      <ion-icon
                        name="location-outline"
                        aria-hidden="true"
                      ></ion-icon>

                      <span class="span">Maroc</span>
                    </address>

                    <h3 class="h3">
                      <a href="#" class="card-title"
                        >Objectif trajectoire ??tudiant</a
                      >
                    </h3>

                    <a href="#" class="btn-link">
                      <span class="span">Rester informer</span>

                      <ion-icon
                        name="arrow-forward-outline"
                        aria-hidden="true"
                      ></ion-icon>
                    </a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </section>

        <!-- 
        - #NEWSLETTER
      -->

        <section
          class="section newsletter"
          aria-label="newsletter"
          style="background-image: url('./assets/images/newsletter-bg.jpg')"
        >
          <div class="container">
            <p class="section-subtitle">
              Recevoir des notifications sur toutes nos offres
            </p>

            <h2 class="h2 section-title">Les derni??res offres du moment</h2>

            <form
            action="./log/database.php" 
              method="POST"
              class="newsletter-form"
            >
              <div class="input-wrapper" id="news">
                <input
                  type="text"
                  name="email"
                  aria-label="email"
                  placeholder="Entrer votre adresse mail
"
                  
                  class="email-field"
                />

                <ion-icon
                  name="mail-open-outline"
                  aria-hidden="true"
                ></ion-icon>
              </div>

              <button type="submit" value="Inscrire" name="inscrire"
              class="btn btn-primary" >
                <span class="span">S'inscrire</span>

                <ion-icon
                  name="arrow-forward-outline"
                  aria-hidden="true"
                ></ion-icon>
              </button>
            </form>
          </div>
        </section>
      </article>
    </main>

    <!-- 
    - #FOOTER
  -->
  <footer class="footer">
      <div class="container">
        <div class="footer-top">
          <div class="footer-brand">
            <a href="#top" class="logo">International Hope Group</a>

            <p class="section-text">
              Gr??ce ?? son r??seau de partenaires, elle assure ?? ses clients des
              prestations de qualit?? fourni par une ??quipe aimable et d??vou??e,
              dans des d??lais tr??s courts et ?? des prix d??fiants toutes
              concurrences.
            </p>

            <ul class="social-list">
              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-linkedin"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-pinterest"></ion-icon>
                </a>
              </li>
            </ul>
          </div>

          <ul class="footer-list">
            <li>
              <p class="footer-list-title">Explorer</p>
            </li>

            <li>
              <a href="./contact.html" class="footer-link">
                <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

                <span class="span">A propos</span>
              </a>
            </li>

            <li>
              <a href="#event" class="footer-link">
                <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

                <span class="span">Ev??nement ?? venir</span>
              </a>
            </li>

            <li>
              <a href="#" class="footer-link">
                <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

                <span class="span">Nouveaut??</span>
              </a>
            </li>

            <li>
              <a href="#" class="footer-link">
                <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

                <span class="span">FAQ Question</span>
              </a>
            </li>

            <li>
              <a href="#" class="footer-link">
                <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

                <span class="span">Politique de confidentialit??</span>
              </a>
            </li>
          </ul>

          <ul class="footer-list">
            <li>
              <p class="footer-list-title">Liens rapides</p>
            </li>

            <li>
              <a href="./contact.html" class="footer-link">
                <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

                <span class="span">Contact</span>
              </a>
            </li>

            <li>
              <a href="https://calendly.com/internationalhopegroup/prise-de-rendez-vous" class="footer-link">
                <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

                <span class="span">Rendez-vous </span>
              </a>
            </li>

        

            <li>
              <a href="./service.html" class="footer-link">
                <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

                <span class="span">Services</span>
              </a>
            </li>

            <li>
              <a href="#" class="footer-link">
                <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

                <span class="span">Potique de remboursement</span>
              </a>
            </li>
          </ul>

          <ul class="footer-list">
            <li>
              <p class="footer-list-title">Contact Info</p>
            </li>

            <li class="footer-item">
              <ion-icon name="location-outline" aria-hidden="true"></ion-icon>

              <address class="footer-link">Casablanca, Maroc</address>
            </li>

            <li class="footer-item">
              <ion-icon name="call" aria-hidden="true"></ion-icon>

              <a href="tel:+13647657839" class="footer-link">num??ro 1</a>
            </li>

            <li class="footer-item">
              <ion-icon name="call" aria-hidden="true"></ion-icon>

              <a href="tel:+13647657840" class="footer-link">Num??ro 2</a>
            </li>

            <li class="footer-item">
              <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>

              <a href="mailto:contact@eduhome.com" class="footer-link"
                >support@internationalhopegroup.org</a
              >
            </li>
          </ul>
        </div>
      </div>
    </footer>


    <!-- 
    - #BACK TO TOP
  -->

    <a
      href="#top"
      class="back-top-btn"
      aria-label="Back to top"
      data-back-top-btn
    >
      <ion-icon name="arrow-up"></ion-icon>
    </a>

    <!-- 
    - custom js link
  -->
    <script src="./assets/js/script.js" defer></script>

    <!-- 
    - ionicon link
  -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>

    <!-- contact form-->

    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script>
      function sendEmail() {
        Email.send({
          Host: "smtp.gmail.com",
          Username: "lompojeanolivier@gmail.com",
          Password: "Bamboado!125",
          To: "them@website.com",
          From: document.getElementsByClassName("email-field").email_address
            .value,
          Subject: "Prendre un RDV",
          Body: "Vous avez encore un nouvel inscrit sur vore site",
        }).then((message) => alert(message));
      }
    </script>
  </body>
</html>
