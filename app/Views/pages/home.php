<?php
$title = 'Home';
$activeNav = 'home';
$metaDescription = 'Precision Tech Pte Ltd delivers custom software, cloud, cybersecurity, networking and managed IT services to businesses across Fiji.';
include APPPATH . 'Views/partials/header.php';
?>

<section class="hero">
  <div class="hero-grid"></div>
  <div class="container">
    <div class="hero-copy">
      <div class="eyebrow">IT Solutions &amp; Innovation &middot; Fiji</div>
      <h1>Engineering Fiji&rsquo;s <span>digital future</span>, one solution at a time.</h1>
      <p>Precision Tech Pte Ltd partners with businesses across Fiji to design, build and secure the technology that powers growth &mdash; from custom software to cloud and cybersecurity.</p>
      <div class="hero-actions">
        <a href="<?= site_url('contact') ?>" class="btn btn-primary">Get a Free Quote</a>
        <a href="<?= site_url('services') ?>" class="btn btn-outline">Explore Services</a>
      </div>
      <div class="hero-badges">
        <div class="hero-badge">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
          Fiji-Based Team
        </div>
        <div class="hero-badge">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l3 6.5 7 1-5 5 1.2 7L12 18l-6.2 3.5L7 14.5l-5-5 7-1z"></path></svg>
          Tailored Solutions
        </div>
        <div class="hero-badge">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
          Secure by Design
        </div>
        <div class="hero-badge">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M12 6v6l4 2"></path></svg>
          Ongoing Support
        </div>
      </div>
    </div>

    <div class="hero-visual">
      <div class="hero-orb">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
          <rect x="9" y="9" width="6" height="6"></rect>
          <path d="M9 2v3M15 2v3M9 19v3M15 19v3M2 9h3M2 15h3M19 9h3M19 15h3"></path>
          <path d="M9 9L4 4M15 9l5-5M9 15l-5 5M15 15l5 5"></path>
        </svg>
      </div>
      <div class="hero-float-card card-1">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.5 19a4.5 4.5 0 0 0 0-9 6 6 0 0 0-11.6-1.5A4 4 0 0 0 6.5 16"></path></svg>
        Cloud Ready
      </div>
      <div class="hero-float-card card-2">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
        Secure &amp; Reliable
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="feature-strip">
    <div class="grid">
      <div class="feature-item reveal">
        <div class="icon-badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></div>
        <div>
          <h4>Client-First Approach</h4>
          <p>We listen first, then build solutions shaped around your business goals.</p>
        </div>
      </div>
      <div class="feature-item reveal">
        <div class="icon-badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"></path><path d="M8.5 13.5L6 21l6-3 6 3-2.5-7.5"></path></svg></div>
        <div>
          <h4>Skilled &amp; Experienced Team</h4>
          <p>A multidisciplinary team of developers, engineers and strategists.</p>
        </div>
      </div>
      <div class="feature-item reveal">
        <div class="icon-badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="4" width="16" height="16" rx="2"></rect><rect x="9" y="9" width="6" height="6"></rect><path d="M9 2v2M15 2v2M9 20v2M15 20v2M2 9h2M2 15h2M20 9h2M20 15h2"></path></svg></div>
        <div>
          <h4>Modern Technology Stack</h4>
          <p>We build on proven, future-ready platforms designed to scale.</p>
        </div>
      </div>
      <div class="feature-item reveal">
        <div class="icon-badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 18v-6a9 9 0 0 1 18 0v6"></path><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"></path></svg></div>
        <div>
          <h4>Responsive Local Support</h4>
          <p>Real people in Fiji, ready to help when you need it most.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="trusted-by">
  <div class="container">
    <div class="section-head center reveal">
      <div class="eyebrow" style="justify-content:center">Trusted By</div>
      <h2>Businesses that trust our systems</h2>
    </div>
  </div>
  <?php $clientLogoCount = 11; ?>
  <div class="logo-marquee reveal">
    <div class="logo-track">
      <?php for ($i = 1; $i <= $clientLogoCount; $i++) : ?>
        <div class="logo-item"><img src="<?= base_url("assets/img/clients/client-{$i}.png") ?>" alt="Client logo"></div>
      <?php endfor; ?>
      <?php for ($i = 1; $i <= $clientLogoCount; $i++) : ?>
        <div class="logo-item" aria-hidden="true"><img src="<?= base_url("assets/img/clients/client-{$i}.png") ?>" alt="" aria-hidden="true"></div>
      <?php endfor; ?>
    </div>
  </div>
</section>

<section id="services">
  <div class="container">
    <div class="section-head center reveal">
      <div class="eyebrow" style="justify-content:center">What We Do</div>
      <h2>End-to-end IT solutions for growing businesses</h2>
      <p>From a single application to your entire infrastructure, we help you plan, build, secure and support the technology behind your business.</p>
    </div>

    <div class="grid-3">
      <div class="card reveal">
        <div class="icon-badge lg"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg></div>
        <h3>Software Development</h3>
        <p>Custom web, mobile and enterprise applications engineered around the way your business actually works.</p>
        <a href="<?= site_url('services') ?>#software-development" class="card-link">Learn more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"></path></svg></a>
      </div>

      <div class="card reveal">
        <div class="icon-badge lg"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></div>
        <h3>IT Consulting &amp; Strategy</h3>
        <p>Independent advice and technology roadmaps that align IT investment with your business objectives.</p>
        <a href="<?= site_url('services') ?>#it-consulting" class="card-link">Learn more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"></path></svg></a>
      </div>

      <div class="card reveal">
        <div class="icon-badge lg"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.5 19a4.5 4.5 0 0 0 0-9 6 6 0 0 0-11.6-1.5A4 4 0 0 0 6.5 16"></path></svg></div>
        <h3>Cloud Solutions</h3>
        <p>Migration, hosting and management of scalable cloud infrastructure built for reliability and growth.</p>
        <a href="<?= site_url('services') ?>#cloud-solutions" class="card-link">Learn more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"></path></svg></a>
      </div>

      <div class="card reveal">
        <div class="icon-badge lg"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg></div>
        <h3>Cybersecurity</h3>
        <p>Proactive protection for your systems, data and people against evolving digital threats.</p>
        <a href="<?= site_url('services') ?>#cybersecurity" class="card-link">Learn more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"></path></svg></a>
      </div>

      <div class="card reveal">
        <div class="icon-badge lg"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"></rect><path d="M8 21h8M12 17v4"></path></svg></div>
        <h3>Network &amp; Infrastructure</h3>
        <p>Design, installation and maintenance of resilient network and server infrastructure.</p>
        <a href="<?= site_url('services') ?>#network-infrastructure" class="card-link">Learn more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"></path></svg></a>
      </div>

      <div class="card reveal">
        <div class="icon-badge lg"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 18v-6a9 9 0 0 1 18 0v6"></path><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"></path></svg></div>
        <h3>Managed IT Support</h3>
        <p>Ongoing monitoring, maintenance and helpdesk support so your systems simply keep working.</p>
        <a href="<?= site_url('services') ?>#managed-it" class="card-link">Learn more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"></path></svg></a>
      </div>
    </div>
  </div>
</section>

<section class="section-alt">
  <div class="container">
    <div class="split">
      <div class="split-visual reveal">
        <div class="about-panel">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="9"></circle>
            <path d="M12 3a9 9 0 0 0 0 18 9 9 0 0 0 0-18z"></path>
            <path d="M3 12h18M12 3c2.5 2.5 4 5.6 4 9s-1.5 6.5-4 9c-2.5-2.5-4-5.6-4-9s1.5-6.5 4-9z"></path>
          </svg>
        </div>
        <div class="stat-chip">
          <span class="num">100%</span>
          <span class="label">Focused on Fiji businesses</span>
        </div>
      </div>

      <div class="reveal">
        <div class="eyebrow">Why Precision Tech</div>
        <h2>A local technology partner, built for the way Fiji does business</h2>
        <p class="lede">We combine international best practice with genuine local understanding &mdash; so the solutions we build actually fit your business, your team and your customers.</p>
        <ul class="check-list">
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"></path></svg> Solutions designed around your business, not the other way around</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"></path></svg> Security and reliability built in from day one</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"></path></svg> Clear communication and honest, practical advice</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"></path></svg> Local support team that understands your context</li>
        </ul>
        <a href="<?= site_url('about') ?>" class="btn btn-outline">More About Us</a>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="section-head center reveal">
      <div class="eyebrow" style="justify-content:center">Our Process</div>
      <h2>How we work with you</h2>
      <p>A clear, collaborative process from first conversation to ongoing support.</p>
    </div>

    <div class="process-grid">
      <div class="process-step reveal">
        <span class="step-num">01</span>
        <h4>Discover</h4>
        <p>We learn about your business, challenges and goals.</p>
      </div>
      <div class="process-step reveal">
        <span class="step-num">02</span>
        <h4>Design</h4>
        <p>We map out a solution and technology approach.</p>
      </div>
      <div class="process-step reveal">
        <span class="step-num">03</span>
        <h4>Develop</h4>
        <p>Our team builds and tests with regular check-ins.</p>
      </div>
      <div class="process-step reveal">
        <span class="step-num">04</span>
        <h4>Deploy</h4>
        <p>We launch your solution safely and smoothly.</p>
      </div>
      <div class="process-step reveal">
        <span class="step-num">05</span>
        <h4>Support</h4>
        <p>Ongoing care so everything keeps running well.</p>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="cta-banner reveal">
      <div class="cta-text">
        <h2>Ready to modernise your business with the right technology partner?</h2>
        <p>Tell us about your project and we&rsquo;ll get back to you with practical next steps.</p>
      </div>
      <div class="cta-actions">
        <a href="<?= site_url('contact') ?>" class="btn btn-light">Start a Conversation</a>
        <a href="<?= site_url('services') ?>" class="btn btn-ghost-light">View Our Services</a>
      </div>
    </div>
  </div>
</section>

<?php include APPPATH . 'Views/partials/footer.php'; ?>
