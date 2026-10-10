<?= $this->include('templates/header') ?>

<section class="page-header card">
    <div>
        <p class="eyebrow">Customer accounts</p>
        <h1>New Customer</h1>
    </div>
</section>

<section class="content-card card">

    <?= form_open('/customers/create', ['novalidate' => 'novalidate']) ?>
        <div class="form-group">
            <label for="full_name">Full Name *</label>
            <input type="text" name="full_name" id="full_name" class="form-control" value="<?= old('full_name') ?>">
            <?php if (isset($validation) && $validation->hasError('full_name')): ?>
                <small style="color: #b91c1c; display: block; margin-top: 5px; font-weight: 500;"><?= $validation->getError('full_name') ?></small>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label for="email">Email *</label>
            <input type="email" name="email" id="email" class="form-control" value="<?= old('email') ?>">
            <?php if (isset($validation) && $validation->hasError('email')): ?>
                <small style="color: #b91c1c; display: block; margin-top: 5px; font-weight: 500;"><?= $validation->getError('email') ?></small>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" value="<?= old('phone') ?>">
            <?php if (isset($validation) && $validation->hasError('phone')): ?>
                <small style="color: #b91c1c; display: block; margin-top: 5px; font-weight: 500;"><?= $validation->getError('phone') ?></small>
            <?php endif; ?>
        </div>
        <div class="form-actions">
            <button type="submit" class="primary-button">Save Customer</button>
            <a href="/customers" class="secondary-button">Cancel</a>
        </div>
    <?= form_close() ?>
</section>

<?= $this->include('templates/footer') ?>
