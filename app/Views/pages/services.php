<?php
$title = 'Services';
$activeNav = 'services';
$metaDescription = 'Explore Precision Tech\'s IT services: software development, IT consulting, cloud solutions, cybersecurity, network infrastructure and managed IT support in Fiji.';
include APPPATH . 'Views/partials/header.php';
?>

<section class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="<?= site_url('/') ?>">Home</a> / Services</div>
    <h1>IT solutions built around your business</h1>
    <p>From custom software to cloud, security, networking and ongoing support &mdash; explore how we can help your business run better.</p>
  </div>
</section>

<section>
  <div class="container">

    <div id="software-development" class="service-detail reveal">
      <div class="service-copy">
        <div class="icon-badge lg"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg></div>
        <h3>Software Development</h3>
        <p>We design and build custom web, mobile and enterprise applications tailored to your workflows &mdash; not the other way around. Whether you need a customer-facing platform, an internal business system or a mobile app, our team engineers solutions that are reliable, scalable and easy to maintain.</p>
        <div class="service-tags">
          <span>Web Applications</span>
          <span>Mobile Apps</span>
          <span>Enterprise Systems</span>
          <span>API Integration</span>
        </div>
      </div>
      <div class="service-visual">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="14" rx="2"></rect><path d="M8 21h8M12 18v3"></path><path d="M8 9l-2 2 2 2M16 9l2 2-2 2M13 8l-2 6"></path></svg>
      </div>
    </div>

    <div id="it-consulting" class="service-detail reverse reveal">
      <div class="service-copy">
        <div class="icon-badge lg"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></div>
        <h3>IT Consulting &amp; Strategy</h3>
        <p>Not sure where to start? We provide independent, practical advice on your technology roadmap &mdash; helping you invest in the right systems at the right time, avoid costly mistakes, and align IT decisions with your business goals.</p>
        <div class="service-tags">
          <span>Technology Roadmaps</span>
          <span>Digital Transformation</span>
          <span>Systems Audit</span>
          <span>Vendor Advisory</span>
        </div>
      </div>
      <div class="service-visual">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"></path><path d="M7 15l4-4 3 3 5-6"></path></svg>
      </div>
    </div>

    <div id="cloud-solutions" class="service-detail reveal">
      <div class="service-copy">
        <div class="icon-badge lg"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17.5 19a4.5 4.5 0 0 0 0-9 6 6 0 0 0-11.6-1.5A4 4 0 0 0 6.5 16"></path></svg></div>
        <h3>Cloud Solutions</h3>
        <p>We help businesses move to the cloud with confidence &mdash; from migration planning to ongoing management. Reduce infrastructure costs, improve reliability, and give your team secure access to the systems they need from anywhere.</p>
        <div class="service-tags">
          <span>Cloud Migration</span>
          <span>Hosting &amp; Storage</span>
          <span>Backup &amp; Recovery</span>
          <span>Cloud Management</span>
        </div>
      </div>
      <div class="service-visual">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M17.5 19a4.5 4.5 0 0 0 0-9 6 6 0 0 0-11.6-1.5A4 4 0 0 0 6.5 16"></path><path d="M12 12v6M9.5 15.5L12 18l2.5-2.5" stroke-width="1.2"></path></svg>
      </div>
    </div>

    <div id="cybersecurity" class="service-detail reverse reveal">
      <div class="service-copy">
        <div class="icon-badge lg"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg></div>
        <h3>Cybersecurity</h3>
        <p>Protect your business from evolving digital threats with proactive security measures &mdash; including risk assessments, network protection, staff awareness training and incident response planning, so you can operate with confidence.</p>
        <div class="service-tags">
          <span>Security Audits</span>
          <span>Threat Protection</span>
          <span>Data Protection</span>
          <span>Staff Training</span>
        </div>
      </div>
      <div class="service-visual">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="M9 12l2 2 4-4" stroke-width="1.2"></path></svg>
      </div>
    </div>

    <div id="network-infrastructure" class="service-detail reveal">
      <div class="service-copy">
        <div class="icon-badge lg"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"></rect><path d="M8 21h8M12 17v4"></path></svg></div>
        <h3>Network &amp; Infrastructure</h3>
        <p>We design, install and maintain the network and server infrastructure your business relies on every day &mdash; built for performance, resilience and room to grow as your business does.</p>
        <div class="service-tags">
          <span>Network Design</span>
          <span>Server Infrastructure</span>
          <span>Wi-Fi &amp; Connectivity</span>
          <span>Infrastructure Upgrades</span>
        </div>
      </div>
      <div class="service-visual">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="5" r="2"></circle><circle cx="5" cy="19" r="2"></circle><circle cx="19" cy="19" r="2"></circle><path d="M12 7v5M12 12l-6 5M12 12l6 5" stroke-width="1.2"></path></svg>
      </div>
    </div>

    <div id="managed-it" class="service-detail reverse reveal">
      <div class="service-copy">
        <div class="icon-badge lg"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 18v-6a9 9 0 0 1 18 0v6"></path><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"></path></svg></div>
        <h3>Managed IT Support</h3>
        <p>Ongoing monitoring, maintenance and helpdesk support that keeps your systems running smoothly &mdash; so your team can focus on the business, not the technology behind it.</p>
        <div class="service-tags">
          <span>Helpdesk Support</span>
          <span>System Monitoring</span>
          <span>Maintenance</span>
          <span>IT Asset Management</span>
        </div>
      </div>
      <div class="service-visual">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M3 18v-6a9 9 0 0 1 18 0v6"></path><circle cx="7.5" cy="17.5" r="2.5"></circle><circle cx="16.5" cy="17.5" r="2.5"></circle></svg>
      </div>
    </div>

  </div>
</section>

<section class="section-alt">
  <div class="container">
    <div class="cta-banner reveal">
      <div class="cta-text">
        <h2>Not sure which service fits your business?</h2>
        <p>Tell us what you&rsquo;re trying to achieve and we&rsquo;ll recommend the right approach &mdash; no obligation.</p>
      </div>
      <div class="cta-actions">
        <a href="<?= site_url('contact') ?>" class="btn btn-light">Talk to Our Team</a>
      </div>
    </div>
  </div>
</section>

<?php include APPPATH . 'Views/partials/footer.php'; ?>
