<?php
/**
 * Front Page template
 */
get_header(); ?>

<!-- Hero -->
<section class="hero">
  <div class="container hero__inner">
    <h1 class="hero__title">Tech that actually moves your business forward.</h1>
    <p class="hero__desc">
      Serving Northwestern Ontario, we help small businesses and organizations get the most
      out of technology — from choosing the right tools to setting them up and training staff,
      we make tech work for you.
    </p>
    <div class="hero__actions">
      <a class="btn btn--primary" href="#start">Get Started</a>
      <a class="btn btn--ghost" href="#work">See Our Work</a>
    </div>
  </div>
</section>

<main class="container section">
  <section class="services services--media" aria-labelledby="services-title">

    <header class="services__header">
      <h1 id="services-title">What we do</h1>
      <p class="services__intro text-muted">
        Practical tech help for small businesses and organizations in Northwestern Ontario.
      </p>
    </header>

    <div class="media-list">
      <!-- Tech Consulting & Advisory -->
      <div class="media-row">
        <span class="marker" aria-hidden="true">
          <!-- Light bulb -->
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
               stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" width="24" height="24">
            <path d="M9.5 18h5M10 21h4M7 9a5 5 0 1 1 10 0c0 2.24-1.24 3.63-2.34 4.62-.59.53-1.05 1.43-1.22 2.38h-2.88c-.17-.95-.63-1.85-1.22-2.38C8.24 12.63 7 11.24 7 9Z"/>
          </svg>
        </span>
        <div class="media-content">
          <h2>Tech Consulting &amp; Advisory</h2>
          <ul>
            <li>Software recommendations</li>
            <li>Tech stack &amp; tool selection</li>
            <li>Fractional tech support</li>
          </ul>
        </div>
      </div>

      <!-- Setup & Implementation -->
      <div class="media-row">
        <span class="marker" aria-hidden="true">
          <!-- Wrench & screwdriver -->
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
               stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" width="24" height="24">
            <path d="M21 21l-6-6m-3.5-1A5.5 5.5 0 1 1 16 7.5l-2.5 2.5m-7 7L3 21l3-3m5-10 3-3 2 2-3 3"/>
          </svg>
        </span>
        <div class="media-content">
          <h2>Setup &amp; Implementation</h2>
          <ul>
            <li>CRMs &amp; ERPs</li>
            <li>Hardware &amp; POS</li>
            <li>Websites</li>
            <li>Integrations</li>
          </ul>
        </div>
      </div>

      <!-- Training & Support -->
      <div class="media-row">
        <span class="marker" aria-hidden="true">
          <!-- Academic cap -->
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
               stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" width="24" height="24">
            <path d="m3 7 9-4 9 4-9 4-9-4Z"/>
            <path d="M7 10v5a9 9 0 0 0 10 0v-5"/>
          </svg>
        </span>
        <div class="media-content">
          <h2>Training &amp; Support</h2>
          <ul>
            <li>Team training</li>
            <li>1-on-1 coaching</li>
            <li>Process documentation</li>
            <li>Facilitation</li>
          </ul>
        </div>
      </div>

      <!-- Custom Solutions -->
      <div class="media-row">
        <span class="marker" aria-hidden="true">
          <!-- Code + brackets -->
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
               stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" width="24" height="24">
            <path d="M9 8 5 12l4 4M15 8l4 4-4 4M8 3H6a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h2M16 3h2a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3h-2"/>
          </svg>
        </span>
        <div class="media-content">
          <h2>Custom Solutions</h2>
          <ul>
            <li>Scripts &amp; automations</li>
            <li>Dashboards</li>
            <li>Internal apps</li>
            <li>Data cleanup</li>
          </ul>
        </div>
      </div>

      <!-- Tech Project Management -->
      <div class="media-row">
        <span class="marker" aria-hidden="true">
          <!-- Clipboard check -->
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
               stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" width="24" height="24">
            <path d="M9 5h6M9 3h6a2 2 0 0 1 2 2v0h1a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h1v0a2 2 0 0 1 2-2Z"/>
            <path d="m9 13 2 2 4-4"/>
          </svg>
        </span>
        <div class="media-content">
          <h2>Tech Project Management</h2>
          <ul>
            <li>Small projects</li>
            <li>Large implementations</li>
            <li>Project support</li>
          </ul>
        </div>
      </div>
    </div>

  </section>

</main>
  <section class="form-wrapper">
    <section class="form-container">
    <h2>Contact Us</h2>
        <p class="form-intro">Questions? Send us a quick note:</p>
      <?php echo do_shortcode('[wpforms id="6"]'); ?>
    </section>
  </section>

<?php get_footer(); ?>
