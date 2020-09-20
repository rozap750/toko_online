<?= $this->extend('layout'); ?>

<?= $this->section('content'); ?>
<?php
$errors = session()->getFlashdata('errors');
if ($errors) : ?>
    <div class="alert alert-danger">
        Woops ada kesalahan:
        <ul>
            <?php foreach ($errors as $error) : ?>
                <li><?= $error; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
<h1>View Register</h1>
<?= form_open('Auth/register') ?>
<div class="form-group">
    <?= form_label("Username", "username") ?>
    <?php
    $username = [
        'name'  => 'username',
        'id'    => 'username',
        'value' => null,
        'class' => 'form-control'
    ]
    ?>
    <?= form_input($username) ?>
</div>
<div class="form-group">
    <?= form_label("Password", "password") ?>
    <?php
    $password = [
        'name'  => 'password',
        'id'    => 'password',
        'class' => 'form-control'
    ]
    ?>
    <?= form_password($password) ?>
</div>
<div class="form-group">
    <?= form_label("Repeat Password", "repeatPassword") ?>
    <?php
    $repeatPassword = [
        'name'  => 'repeatPassword',
        'id'    => 'repeatPassword',
        'class' => 'form-control'
    ]
    ?>
    <?= form_password($repeatPassword) ?>
</div>
<div class="text-right">
    <?= form_submit('submit', 'Submit', ['class' => 'btn btn-primary']) ?>
</div>
<?= form_close(); ?>
<?= $this->endSection(); ?>