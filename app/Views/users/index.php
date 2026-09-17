<?= $this->include('templates/header') ?>

<section class="page-header card">
    <div>
        <p class="eyebrow">User accounts</p>
        <h1>Staff directory</h1>
    </div>
</section>

<section class="table-card card">
    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Full Name</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= esc($user['username']) ?></td>
                        <td><?= esc($user['full_name']) ?></td>
                        <td><span class="role-badge"><?= esc($user['role']) ?></span></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>

<?= $this->include('templates/footer') ?>
