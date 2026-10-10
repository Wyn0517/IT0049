<?= $this->include('templates/header') ?>

<section class="page-header card">
    <div>
        <p class="eyebrow">User accounts</p>
        <h1>Edit User</h1>
    </div>
</section>

<section class="content-card card">

    <?= form_open_multipart('/users/update/' . $user['id'], ['novalidate' => 'novalidate']) ?>
        <div class="form-group">
            <label for="username">Username *</label>
            <input type="text" name="username" id="username" class="form-control" value="<?= old('username', $user['username']) ?>">
            <?php if (isset($validation) && $validation->hasError('username')): ?>
                <small style="color: #b91c1c; display: block; margin-top: 5px; font-weight: 500;"><?= $validation->getError('username') ?></small>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label for="full_name">Full Name *</label>
            <input type="text" name="full_name" id="full_name" class="form-control" value="<?= old('full_name', $user['full_name']) ?>">
            <?php if (isset($validation) && $validation->hasError('full_name')): ?>
                <small style="color: #b91c1c; display: block; margin-top: 5px; font-weight: 500;"><?= $validation->getError('full_name') ?></small>
            <?php endif; ?>
        </div>
        
        <div class="form-group">
            <label for="avatar">Profile Picture</label>
            <?php if (!empty($user['avatar'])): ?>
                <div class="avatar-preview">
                    <img src="<?= base_url('uploads/avatars/' . $user['avatar']) ?>" alt="Avatar" width="100">
                </div>
            <?php endif; ?>
            <input type="file" name="avatar" id="avatar" class="form-control" accept=".png, .jpg, .jpeg">
            <?php if (isset($validation) && $validation->hasError('avatar')): ?>
                <small style="color: #b91c1c; display: block; margin-top: 5px; font-weight: 500;"><?= $validation->getError('avatar') ?></small>
            <?php endif; ?>
            <small class="text-muted">JPG or PNG only, max 2MB.</small>
        </div>

        <div class="form-actions">
            <button type="submit" class="primary-button">Update User</button>
            <a href="/users" class="secondary-button">Cancel</a>
        </div>
    <?= form_close() ?>
</section>

<?= $this->include('templates/footer') ?>
