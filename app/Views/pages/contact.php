<?php
$title = 'Contact Us';
$activeNav = 'contact';
$metaDescription = 'Get in touch with Precision Tech Pte Ltd. Contact our Fiji-based team to discuss your next software, cloud, cybersecurity or IT support project.';
include APPPATH . 'Views/partials/header.php';

$errors = session()->getFlashdata('errors') ?? [];
?>

<section class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="<?= site_url('/') ?>">Home</a> / Contact</div>
    <h1>Let&rsquo;s talk about your next project</h1>
    <p>Have a question, a project in mind, or just want to know more about what we do? Reach out &mdash; we&rsquo;d love to hear from you.</p>
  </div>
</section>

<section>
  <div class="container">
    <div class="contact-grid">

      <div class="reveal">
        <div class="contact-info-list">
          <div class="contact-info-card">
            <div class="icon-badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg></div>
            <div>
              <h4>Our Office</h4>
              <p>Veivauceva, 6 Miles, Tacirua, Fiji</p>
            </div>
          </div>
          <div class="contact-info-card">
            <div class="icon-badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.362 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"></path></svg></div>
            <div>
              <h4>Call Us</h4>
              <p>9896700 or 7829063</p>
            </div>
          </div>
          <div class="contact-info-card">
            <div class="icon-badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 6l-10 7L2 6"></path><rect x="2" y="4" width="20" height="16" rx="2"></rect></svg></div>
            <div>
              <h4>Email Us</h4>
              <p>info@precisiontechfiji.com</p>
            </div>
          </div>
          <div class="contact-info-card">
            <div class="icon-badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M12 6v6l4 2"></path></svg></div>
            <div>
              <h4>Business Hours</h4>
              <p>Monday &ndash; Friday: 8:30am &ndash; 5:00pm<br>Saturday &ndash; Sunday: Closed</p>
            </div>
          </div>
        </div>

        <h4 style="font-family:var(--ff-heading);color:var(--navy);margin-bottom:1rem;">Follow Us</h4>
        <div class="social-row">
          <a href="#" aria-label="Facebook"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></a>
          <a href="#" aria-label="LinkedIn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg></a>
          <a href="#" aria-label="Instagram"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><path d="M17.5 6.5h.01"></path></svg></a>
        </div>
      </div>

      <div class="form-card reveal">
        <h3 style="margin-bottom:.3rem;">Send Us a Message</h3>
        <p style="color:var(--ink-soft);margin-bottom:1.6rem;">Fill out the form and our team will get back to you within one business day.</p>

        <?php if (session()->getFlashdata('success')) : ?>
          <div class="alert alert-success"><?= esc(session()->getFlashdata('success')) ?></div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('error')) : ?>
          <div class="alert alert-error"><?= esc(session()->getFlashdata('error')) ?></div>
        <?php endif; ?>

        <form id="contact-form" action="<?= site_url('contact/send') ?>" method="post" novalidate>
          <?= csrf_field() ?>

          <input type="text" name="website" class="hp-field" tabindex="-1" autocomplete="off" style="position:absolute;left:-9999px;">

          <div class="form-row">
            <div class="form-group">
              <label for="name">Full Name</label>
              <input type="text" id="name" name="name" required value="<?= esc(old('name') ?? '') ?>">
              <span class="form-error"><?= esc($errors['name'] ?? '') ?></span>
            </div>
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" id="email" name="email" required value="<?= esc(old('email') ?? '') ?>">
              <span class="form-error"><?= esc($errors['email'] ?? '') ?></span>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label for="phone">Phone Number <span style="font-weight:400;color:var(--ink-faint);">(optional)</span></label>
              <input type="tel" id="phone" name="phone" value="<?= esc(old('phone') ?? '') ?>">
              <span class="form-error"><?= esc($errors['phone'] ?? '') ?></span>
            </div>
            <div class="form-group">
              <label for="subject">Subject</label>
              <input type="text" id="subject" name="subject" required value="<?= esc(old('subject') ?? '') ?>">
              <span class="form-error"><?= esc($errors['subject'] ?? '') ?></span>
            </div>
          </div>

          <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" required><?= esc(old('message') ?? '') ?></textarea>
            <span class="form-error"><?= esc($errors['message'] ?? '') ?></span>
          </div>

          <button type="submit" class="btn btn-primary btn-block">Send Message</button>
        </form>
      </div>

    </div>

    <div class="map-frame reveal">
      <iframe src="https://maps.google.com/maps?q=Veivauceva%2C%206%20Miles%2C%20Tacirua%2C%20Fiji&z=14&output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Map showing Veivauceva, 6 Miles, Tacirua, Fiji"></iframe>
    </div>
  </div>
</section>

<?php include APPPATH . 'Views/partials/footer.php'; ?>
