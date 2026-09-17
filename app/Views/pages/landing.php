<?= $this->include('templates/header') ?>

<section class="hero card">
    <div class="hero-copy">
        <p class="eyebrow">POS Lite</p>
        <h1>A basic Point-of-Sale system built with CodeIgniter 4.</h1>
        <p class="lede">
            This version demonstrates the basic structure of a POS interface and the MVC flow used in the laboratory exercise.
        </p>
        <div class="hero-actions">
            <a href="<?= site_url('/customers') ?>" class="primary-button">Customer Accounts</a>
            <a href="<?= site_url('/users') ?>" class="secondary-button">User Accounts</a>
        </div>
    </div>

    <div class="hero-panel" aria-label="POS overview panel">
        <div class="info-card static-panel">
            <div class="card-icon">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M16 19v-1a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v1"/><circle cx="10" cy="7" r="3"/><path d="M22 19v-1a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
            </div>
            <h2>Explore the system</h2>
            <p>Review the sample customer and staff records included in this basic POS lab.</p>
        </div>
    </div>
</section>

<section class="features-grid">
    <article class="info-card card">
        <div class="card-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M16 19v-1a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v1"/><circle cx="10" cy="7" r="3"/><path d="M22 19v-1a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
        </div>
        <h2>Customer Accounts</h2>
        <p>View the sample customer records and contact details used in this version.</p>
        <a href="<?= site_url('/customers') ?>">View customers</a>
    </article>

    <article class="info-card card">
        <div class="card-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 21v-2a4 4 0 0 0-3-3.87"/><path d="M4 21v-2a4 4 0 0 1 3-3.87"/><circle cx="12" cy="7" r="4"/><path d="M16 21v-2a4 4 0 0 0-2.5-3.67"/><path d="M8 21v-2a4 4 0 0 1 2.5-3.67"/></svg>
        </div>
        <h2>User Accounts</h2>
        <p>View the sample staff and user records included in the current MVC example.</p>
        <a href="<?= site_url('/users') ?>">View users</a>
    </article>
</section>

<?= $this->include('templates/footer') ?>
