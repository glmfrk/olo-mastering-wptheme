<?php echo get_header(); ?>

<!-- Main contents body markup start  -->
<main class="wrapper">
    <!-- home page content section markup here start -->
    <section class="section-fluid home-sec d-flex">
    <div class="container">
        <article class="home-content content-wrapper">
            <marquee class="hide-lg marquee-text">
                Welcome to olo mastering, a mastering & mixing studio run by
                Isabel Schröer.
            </marquee>
            <figure class="banner-image" id="homeImag">
                <img src="<?php echo get_parent_theme_file_uri('assets/images/home-image.png'); ?>" alt="studio-image" />
            </figure>
            <div class="hide-sm">


                <?php 
                    $option_value = get_option('studio_option_name', 'Gulam Faruk');

                    // Display it in the desired location in your theme
                    if ($option_value) {
                        echo '<p>' . esc_html($option_value) . '</p>';
                    }
                ?>
            </div>
            <!-- <div class="marquee">
                <div class="track">
                    <p>Welcome to olo mastering, a mastering & mixing studio run by Isabel Schröer.</p>
                </div>
            </div> -->
        </article>
        <div class="overlay-slide home-menu">
        <nav class="overlay-menu">
            <ul class="main-nav">
            <li class="sub-menu">
                <a href="./studiopage.html">
                Studio
                <svg width="8" height="13" viewBox="0 0 8 13" fill="none">
                    <path
                    d="M1 0.799805L6.65685 6.45666L1 12.1135"
                    stroke="#222226"
                    stroke-width="1.5"
                    />
                </svg>
                </a>
                <ul class="sub-item">
                <li>
                    <a href="./index.html">Home-v1</a>
                </li>
                <li>
                    <a href="./index2.html">Home-v2</a>
                </li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="./aboutpage.html">
                About
                <svg
                    width="8"
                    height="13"
                    viewBox="0 0 8 13"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    d="M1 0.799805L6.65685 6.45666L1 12.1135"
                    stroke="#222226"
                    stroke-width="1.5"
                    />
                </svg>
                </a>
                <ul class="sub-item">
                <li>
                    <a href="./index.html">Home-v1</a>
                </li>
                <li>
                    <a href="./index2.html">Home-v2</a>
                </li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="./clientpage.html">
                Clients
                <svg
                    width="8"
                    height="13"
                    viewBox="0 0 8 13"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    d="M1 0.799805L6.65685 6.45666L1 12.1135"
                    stroke="#222226"
                    stroke-width="1.5"
                    />
                </svg>
                </a>
                <ul class="sub-item">
                <li>
                    <a href="./index.html">Home-v1</a>
                </li>
                <li>
                    <a href="./index2.html">Home-v2</a>
                </li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="./examplepage.html">
                Examples
                <svg
                    width="8"
                    height="13"
                    viewBox="0 0 8 13"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    d="M1 0.799805L6.65685 6.45666L1 12.1135"
                    stroke="#222226"
                    stroke-width="1.5"
                    />
                </svg>
                </a>
                <ul class="sub-item">
                <li>
                    <a href="./index.html">Home-v1</a>
                </li>
                <li>
                    <a href="./index2.html">Home-v2</a>
                </li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="./servicepage.html">
                Services & Fees
                <svg
                    width="8"
                    height="13"
                    viewBox="0 0 8 13"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                    d="M1 0.799805L6.65685 6.45666L1 12.1135"
                    stroke="#222226"
                    stroke-width="1.5"
                    />
                </svg>
                </a>
                <ul class="sub-item">
                <li>
                    <a href="./index.html">Home-v1</a>
                </li>
                <li>
                    <a href="./index2.html">Home-v2</a>
                </li>
                </ul>
            </li>
            </ul>
        </nav>
        </div>
    </div>
    </section>
    <!-- home page content section markup here start -->
</main>
<!-- Main contents body markup done  -->

<?php echo get_footer(); ?>