<!doctype html>
    <html style="overflow-x: hidden;">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta names="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="shortcut icon" href="<?= base_url() ?>/favicon.ico" type="image/x-icon">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link rel="stylesheet" href="<?= base_url() ?>/assets/css/animation.css">
            <link rel="stylesheet" href="<?= base_url() ?>/assets/css/illustration.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
            <title>L&A - Production</title>
        </head>
        <body>
            <?php $uri = service('uri'); ?>
            <nav class="navbar navbar-expand-sm navbar-light bg-white p-0" style="z-index: 20;"><!-- barre de navigation -->
                <div class="container">
                    <a class="navbar-brand" href="<?= base_url() ?>/"><img src="<?= base_url() ?>/assets/images/logo-nav.png" alt="..."  width="80"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                        <div class="navbar-nav"><!-- liens page home.php -->
                            <?php if($uri->getSegment(1)==''): ?>
                                <a class="nav-link" href="#presentation">Le Studio</a>
                                <a class="nav-link" href="#services">Les Services</a>
                                <a class="nav-link" href="#contact">Contact</a>
                                <a class="nav-link" href="#faq">FAQ</a>
                            <?php endif; ?>
                            <?php if($uri->getSegment(1)=='apropos'): ?>
                                <a class="nav-link" href="#equipe">L'équipe</a>
                                <a class="nav-link" href="#site">Le site</a>
                            <?php endif; ?>
                        </div>
                        <div class="navbar-nav">
                            <?php if($uri->getSegment(1)==''): ?>
                                <a class="nav-link" href="<?= base_url() ?>/apropos">A propos</a>
                            <?php endif; ?>
                            <?php if($uri->getSegment(1)=='apropos'): ?>
                                <a class="nav-link" href="<?= base_url() ?>/">Retour au site</a>
                            <?php endif; ?>
                            
                        </div>
                    </div>
                </div>
            </nav>
            <a href="#top" class="remonter shadow bg-warning text-center p-1 border border-warning border-3"><img src="<?= base_url() ?>/assets/images/icons/up-arrow.png" class="img-fluid"></a>