<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- All CSS -->
    <link rel="stylesheet" href="<?php echo get_parent_theme_file_uri('assets/css/custom.css'); ?>" />

    <?php wp_title( '|', true, 'right' ); ?>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <!-- Header section markup strat -->
    <header class="header-part">
      <nav class="navigation-wrapper">
        <div class="header-logo">
          <a href="./index.html"
            ><img src="./assets/images/logo.png" alt="logo-image"
          /></a>
        </div>

        <div class="navbar-content">
          <div class="primary-menu">
            <ul class="menu">
              <li class="nav-item">
                <a href="./studiopage.html" class="nav-link">studio</a>
              </li>
              <li class="nav-item">
                <a href="./aboutpage.html" class="nav-link">about</a>
              </li>
              <li class="nav-item">
                <a href="./clientpage.html" class="nav-link">clients</a>
              </li>
              <li class="nav-item">
                <a href="./examplepage.html" class="nav-link">examples</a>
              </li>
              <li class="nav-item">
                <a href="./servicepage.html" class="nav-link"
                  >services & fees</a
                >
              </li>
            </ul>
          </div>
          <a
            href="mailto:hello@olomasterin.com"
            class="contact-btn"
            id="contact"
            >contact</a
          >
          <div id="menu-bar" class="menu-bar">
            <svg
              class="bar"
              width="12"
              height="10"
              viewBox="0 0 12 10"
              fill="none"
            >
              <line
                x1="0.75"
                y1="1.25"
                x2="11.25"
                y2="1.25"
                stroke="#222226"
                stroke-width="1.5"
                stroke-linecap="round"
              />
              <line
                x1="0.75"
                y1="5.25"
                x2="8.25"
                y2="5.25"
                stroke="#222226"
                stroke-width="1.5"
                stroke-linecap="round"
              />
              <line
                x1="0.75"
                y1="9.25"
                x2="10.25"
                y2="9.25"
                stroke="#222226"
                stroke-width="1.5"
                stroke-linecap="round"
              />
            </svg>

            <svg
              class="time"
              width="10"
              height="10"
              viewBox="0 0 10 10"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M9.06579 1.78033C9.35868 1.48744 9.35868 1.01256 9.06579 0.71967C8.7729 0.426777 8.29802 0.426777 8.00513 0.71967L4.99993 3.72487L1.9948 0.719741C1.7019 0.426848 1.22703 0.426848 0.934138 0.719741C0.641245 1.01263 0.641245 1.48751 0.934138 1.7804L3.93927 4.78553L0.58051 8.14429C0.287616 8.43718 0.287616 8.91206 0.58051 9.20495C0.873403 9.49784 1.34828 9.49784 1.64117 9.20495L4.99993 5.84619L8.35876 9.20502C8.65165 9.49791 9.12653 9.49791 9.41942 9.20502C9.71231 8.91213 9.71231 8.43725 9.41942 8.14436L6.06059 4.78553L9.06579 1.78033Z"
                fill="#222226"
              />
            </svg>
          </div>
        </div>
      </nav>
    </header>
    <!-- header part markup done here -->
