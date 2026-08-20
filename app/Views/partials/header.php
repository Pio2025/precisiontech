<?php
/**
 * Expects (optionally): $title, $metaDescription, $activeNav
 */
$activeNav = $activeNav ?? '';
$pageTitle = isset($title) ? $title . ' | Precision Tech Pte Ltd' : 'Precision Tech Pte Ltd | IT Solutions & Innovation, Fiji';
$metaDescription = $metaDescription ?? 'Precision Tech Pte Ltd is a Fiji-based IT solutions and innovation company delivering software development, cloud, cybersecurity, networking and managed IT services.';
?><!doctype html>
<html lang="en" class="no-js">
<head>
  <script>document.documentElement.className = document.documentElement.className.replace('no-js', 'js');</script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= esc($pageTitle) ?></title>
  <meta name="description" content="<?= esc($metaDescription) ?>">
  <meta name="theme-color" content="#262262">

  <link rel="icon" type="image/x-icon" href="<?= base_url('assets/img/favicon/favicon.ico') ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/img/favicon/favicon-32x32.png') ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/img/favicon/favicon-16x16.png') ?>">
  <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/img/favicon/apple-touch-icon.png') ?>">
  <link rel="manifest" href="<?= base_url('assets/img/favicon/site.webmanifest') ?>">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Sora:wght@500;600;700;800&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>

<header class="site-header">
  <div class="container nav">
    <a href="<?= site_url('/') ?>" class="brand" aria-label="Precision Tech Pte Ltd — Home">
      <img src="<?= base_url('assets/img/logo/logo-small.png') ?>" alt="Precision Tech Pte Ltd">
    </a>

    <nav class="nav-links" aria-label="Primary">
      <a href="<?= site_url('/') ?>" class="<?= $activeNav === 'home' ? 'active' : '' ?>">Home</a>
      <a href="<?= site_url('about') ?>" class="<?= $activeNav === 'about' ? 'active' : '' ?>">About</a>
      <a href="<?= site_url('services') ?>" class="<?= $activeNav === 'services' ? 'active' : '' ?>">Services</a>
      <a href="<?= site_url('solutions') ?>" class="<?= $activeNav === 'solutions' ? 'active' : '' ?>">Solutions</a>
      <a href="<?= site_url('contact') ?>" class="<?= $activeNav === 'contact' ? 'active' : '' ?>">Contact</a>
    </nav>

    <div class="nav-actions">
      <a href="<?= site_url('contact') ?>" class="btn btn-primary">Get a Quote</a>
      <button class="nav-toggle" aria-label="Toggle navigation menu">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
</header>
<div class="nav-overlay"></div>
