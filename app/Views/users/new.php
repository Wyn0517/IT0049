<?= $this->include('templates/header') ?>

<section class="page-header card">
    <div>
        <p class="eyebrow">User accounts</p>
        <h1>New User</h1>
    </div>
</section>

<section class="content-card card">

    <?= form_open('/users/create', ['novalidate' => 'novalidate']) ?>
        <div class="form-group">
            <label for="username">Username *</label>
            <input type="text" name="username" id="username" class="form-control" value="<?= old('username') ?>">
            <?php if (isset($validation) && $validation->hasError('username')): ?>
                <small style="color: #b91c1c; display: block; margin-top: 5px; font-weight: 500;"><?= $validation->getError('username') ?></small>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label for="full_name">Full Name *</label>
            <input type="text" name="full_name" id="full_name" class="form-control" value="<?= old('full_name') ?>">
            <?php if (isset($validation) && $validation->hasError('full_name')): ?>
                <small style="color: #b91c1c; display: block; margin-top: 5px; font-weight: 500;"><?= $validation->getError('full_name') ?></small>
            <?php endif; ?>
        </div>
        <div class="form-actions">
            <button type="submit" class="primary-button">Save User</button>
            <a href="/users" class="secondary-button">Cancel</a>
        </div>
    <?= form_close() ?>
</section>

<?= $this->include('templates/footer') ?>
