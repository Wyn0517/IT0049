<?= $this->include('templates/header') ?>

<section class="page-header card">
    <div>
        <p class="eyebrow">Customer accounts</p>
        <h1>Customer records</h1>
    </div>
</section>

<section class="table-card card">
    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
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
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>

<?= $this->include('templates/footer') ?>
