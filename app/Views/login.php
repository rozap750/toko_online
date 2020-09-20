<?= $this->extend('layout'); ?>

<?= $this->section('content'); ?>
<?php
$username = [
    'name'  => 'username',
    'id'    => 'username',
    'value' => null,
    'class' => 'form-control'
];
$password = [
    'name'  => 'password',
    'id'    => 'password',
    'class' => 'form-control'
];
?>
<h1>View Login</h1>
<?= form_open('Auth/login') ?>
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
<div class="text-right">
    <?= form_submit('submit', 'Submit', ['class' => 'btn btn-primary']) ?>
</div>
<?= form_close() ?>
<?= $this->endSection(); ?>