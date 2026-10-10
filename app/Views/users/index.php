<?= $this->include('templates/header') ?>

<section class="page-header card">
    <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: var(--space-4);">
        <div>
            <p class="eyebrow">User accounts</p>
            <h1>Staff directory</h1>
        </div>
        <div>
            <a href="/users/new" class="primary-button">+ New User</a>
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
                    <th>Avatar</th>
                    <th>Username</th>
                    <th>Full Name</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td>
                            <?php if (!empty($user['avatar'])): ?>
                                <img src="<?= base_url('uploads/avatars/' . $user['avatar']) ?>" alt="Avatar" width="40" height="40" style="border-radius: 50%; object-fit: cover;">
                            <?php else: ?>
                                <div style="width: 40px; height: 40px; border-radius: 50%; background: var(--surface-strong); display: flex; align-items: center; justify-content: center; font-weight: bold; color: var(--muted);">
                                    <?= substr($user['full_name'], 0, 1) ?>
                                </div>
                            <?php endif; ?>
                        </td>
                        <td><?= esc($user['username']) ?></td>
                        <td><?= esc($user['full_name']) ?></td>
                        <td><span class="role-badge"><?= esc($user['role'] ?? 'User') ?></span></td>
                        <td>
                            <a href="/users/edit/<?= esc($user['id']) ?>" class="secondary-button" style="min-height: auto; padding: 0.4rem 0.8rem; font-size: 0.85rem;">Edit</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>

<?= $this->include('templates/footer') ?>
