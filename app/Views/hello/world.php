<?= $this->extend('layout'); ?>
<?= $this->Section('content'); ?>

<h1>Hello World!</h1>
<h3>
    <?= session()->get('username'); ?>
</h3>

<?= $this->endSection(); ?>