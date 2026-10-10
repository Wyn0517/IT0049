<?= $this->include('templates/header') ?>

<section class="page-header card">
    <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: var(--space-4);">
        <div>
            <p class="eyebrow">Customer accounts</p>
            <h1>Customer records</h1>
        </div>
        <div>
            <a href="/customers/new" class="primary-button">+ New Customer</a>
        </div>
    </div>
</section>

<?php if (session()->getFlashdata('success')): ?>
    <div class="alert-success" style="margin-bottom: var(--space-4); padding: var(--space-4); background: var(--success-soft); color: var(--success); border-radius: var(--radius-md);">
        <?= session()->getFlashdata('success') ?>
    </div>
<?php endif; ?>

<section class="table-card card">
    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customers as $customer): ?>
                    <tr>
                        <td><?= esc($customer['full_name']) ?></td>
                        <td>
                            <a href="mailto:<?= esc($customer['email']) ?>" class="inline-link"><?= esc($customer['email']) ?></a>
                        </td>
                        <td><?= esc($customer['phone']) ?></td>
                        <td>
                            <a href="/customers/edit/<?= esc($customer['id']) ?>" class="secondary-button" style="min-height: auto; padding: 0.4rem 0.8rem; font-size: 0.85rem;">Edit</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>

<?= $this->include('templates/footer') ?>
