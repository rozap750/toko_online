<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">TOKO ONLINE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php
        $session = session();
        if ($session->get('isLoggedIn')) : ?>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Barang
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="<?= site_url('barang/index') ?>" class="dropdown-item">List Barang</a>
                        <a href="<?= site_url('barang/create') ?>" class="dropdown-item">Tambah Barang</a>
                    </div>
                </li>
            </ul>
        <?php endif; ?>
        <div class="my-2 mylg-0">
            <ul class="navbar-nav mr-auto">
                <?php if ($session->get('isLoggedIn')) : ?>
                    <li class="nav-item">
                        <a href="<?= site_url('auth/logout'); ?>" class="btn btn-dark">Logout</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a href="<?= site_url('auth/login'); ?>" class="btn btn-dark">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= site_url('auth/register'); ?>" class="btn btn-dark">Register</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>