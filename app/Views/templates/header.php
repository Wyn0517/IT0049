<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'POS Lite') ?> | POS Lite</title>
    <meta name="description" content="A clean point-of-sale interface for customers and staff records.">
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
</head>
<body>
    <div class="page-shell">
        <header class="topbar">
            <div class="brand-wrap">
                <a href="<?= site_url('/') ?>" class="brand" aria-label="POS Lite home">
                    <span class="brand-mark">P</span>
                    <span class="brand-text">POS Lite</span>
                </a>
            </div>

            <nav class="main-nav" aria-label="Main navigation">
                <a href="<?= site_url('/') ?>" class="nav-link <?= ($current ?? '') === 'home' ? 'active' : '' ?>">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 10.5 12 3l9 7.5M5 9.5V20h14V9.5"/></svg>
                    <span>Home</span>
                </a>
                <a href="<?= site_url('/about') ?>" class="nav-link <?= ($current ?? '') === 'about' ? 'active' : '' ?>">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 10.5v5"/><path d="M12 7.5h.01"/></svg>
                    <span>About</span>
                </a>
                <a href="<?= site_url('/customers') ?>" class="nav-link <?= ($current ?? '') === 'customers' ? 'active' : '' ?>">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M16 19v-1a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v1"/><circle cx="10" cy="7" r="3"/><path d="M22 19v-1a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    <span>Customers</span>
                </a>
                <a href="<?= site_url('/users') ?>" class="nav-link <?= ($current ?? '') === 'users' ? 'active' : '' ?>">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 21v-2a4 4 0 0 0-3-3.87"/><path d="M4 21v-2a4 4 0 0 1 3-3.87"/><circle cx="12" cy="7" r="4"/><path d="M16 21v-2a4 4 0 0 0-2.5-3.67"/><path d="M8 21v-2a4 4 0 0 1 2.5-3.67"/></svg>
                    <span>Users</span>
                </a>
            </nav>
        </header>

        <main class="main-content">
