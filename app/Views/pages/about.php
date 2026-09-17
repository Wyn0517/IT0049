<?= $this->include('templates/header') ?>

<section class="page-header card">
    <p class="eyebrow">About</p>
    <h1>About this POS laboratory</h1>
</section>

<section class="content-card card">
    <p>
        This is the first version of a basic Point-of-Sale (POS) system built with CodeIgniter 4. It demonstrates routing, controllers, views, and temporary static PHP arrays for customer and user records.
    </p>
    <p>
        The application has four pages: Home, About, Customer Accounts, and User Accounts. In this version, customer and user data are stored in static PHP arrays rather than a database.
    </p>
    <p>
        No database is being used in this project. The goal is to show basic CodeIgniter MVC concepts in a simple, beginner-friendly way.
    </p>
</section>

<?= $this->include('templates/footer') ?>
