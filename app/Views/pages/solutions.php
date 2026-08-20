<?php
$title = 'Solutions';
$activeNav = 'solutions';
$metaDescription = 'Explore Precision Tech\'s in-house solutions: Navuli Fiji school management system, VTalanoa video conferencing, VSaumi payment gateway, and more innovative platforms built in Fiji.';
include APPPATH . 'Views/partials/header.php';
?>

<section class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="<?= site_url('/') ?>">Home</a> / Solutions</div>
    <h1>Products we&rsquo;re building</h1>
    <p>Beyond client projects, Precision Tech invests in its own innovative platforms &mdash; built in Fiji, for Fiji and the region. Here&rsquo;s what we&rsquo;re working on.</p>
  </div>
</section>

<section>
  <div class="container">
    <div class="solution-grid">

      <div class="solution-card reveal">
        <div class="solution-top">
          <div class="solution-mark">NF</div>
          <span class="solution-status is-live">Live</span>
        </div>
        <h3>Navuli Fiji</h3>
        <div class="solution-tagline">Smart School Management Information System</div>
        <p>A smart, innovative school management information system built to help Fiji&rsquo;s schools manage students, staff and day-to-day operations digitally &mdash; replacing manual, paper-based processes with a connected online platform.</p>
        <div class="solution-tags">
          <span>Education</span>
          <span>School MIS</span>
          <span>Fiji-built</span>
        </div>
        <a href="https://navulifiji.com" target="_blank" rel="noopener" class="btn btn-outline">
          Visit navulifiji.com
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="16" height="16"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
        </a>
      </div>

      <div class="solution-card reveal">
        <div class="solution-top">
          <div class="solution-mark">VT</div>
          <span class="solution-status is-live">Live</span>
        </div>
        <h3>VTalanoa</h3>
        <div class="solution-tagline">Video Conferencing Solution</div>
        <p>A video conferencing platform that brings people together for meetings, classes and community &ldquo;talanoa&rdquo; sessions &mdash; built with reliable, easy-to-use video calling designed for our region&rsquo;s needs.</p>
        <div class="solution-tags">
          <span>Video Conferencing</span>
          <span>Collaboration</span>
          <span>Fiji-built</span>
        </div>
        <a href="https://vtalanoa.com" target="_blank" rel="noopener" class="btn btn-outline">
          Visit vtalanoa.com
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="16" height="16"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
        </a>
      </div>

      <div class="solution-card reveal">
        <div class="solution-top">
          <div class="solution-mark">VS</div>
          <span class="solution-status is-live">Live</span>
        </div>
        <h3>VSaumi</h3>
        <div class="solution-tagline">Payment Gateway</div>
        <p>A payment gateway built to unify Fiji&rsquo;s top digital wallets and bank payment gateways behind a single API &mdash; giving developers one straightforward integration to accept local digital payments in their own systems.</p>
        <div class="solution-tags">
          <span>Payments</span>
          <span>API for Developers</span>
          <span>Digital Wallets</span>
        </div>
        <a href="https://vsaumi.com" target="_blank" rel="noopener" class="btn btn-outline">
          Visit vsaumi.com
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="16" height="16"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
        </a>
      </div>

      <div class="solution-card reveal">
        <div class="solution-top">
          <div class="solution-mark">SM</div>
          <span class="solution-status is-progress">In Development</span>
        </div>
        <h3>Shipping Management Information System</h3>
        <div class="solution-tagline">Logistics &amp; Shipping MIS</div>
        <p>An end-to-end shipping and logistics management system currently in development &mdash; designed to help shipping operators track cargo, manage bookings and streamline operations digitally.</p>
        <div class="solution-tags">
          <span>Logistics</span>
          <span>Shipping</span>
          <span>In Development</span>
        </div>
        <a href="<?= site_url('contact') ?>" class="btn btn-outline">
          Get in Touch
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="16" height="16"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
        </a>
      </div>

    </div>
  </div>
</section>

<section class="section-alt">
  <div class="container">
    <div class="cta-banner reveal">
      <div class="cta-text">
        <h2>And there&rsquo;s more in the pipeline</h2>
        <p>These are just some of the innovative projects we&rsquo;re building. Got an idea, or want to learn more about any of our platforms? We&rsquo;d love to talk.</p>
      </div>
      <div class="cta-actions">
        <a href="<?= site_url('contact') ?>" class="btn btn-light">Talk to Our Team</a>
      </div>
    </div>
  </div>
</section>

<?php include APPPATH . 'Views/partials/footer.php'; ?>
