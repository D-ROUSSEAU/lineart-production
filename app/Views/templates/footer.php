            <nav class="navbar navbar-expand-lg navbar-light " style="background-color:#e9ecef;font-size:85%;"><!-- pied de page -->
                <?php $uri = service('uri'); ?>
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarFooter" aria-controls="navbarFooter" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-evenly" id="navbarFooter">
                        <div class="d-inline-flex align-items-center">
                            <a href="<?= base_url() ?>/"><img src="<?= base_url() ?>/assets/images/logo-nav.png" alt="..."  height="40"></a>
                            © Copyright Lineart-production.com 2021. Tous droits réservés
                        </div>
                        <div class="d-inline-flex align-items-center gap-2">
                            <a href="https://www.facebook.com/Line-Art-104796058592930/"><img src="<?= base_url() ?>/assets/images/icons/facebook.png" alt="..." height="20"></a>
                            <a href="https://www.instagram.com/lineandart44/"><img src="<?= base_url() ?>/assets/images/icons/instagram.png" alt="..." height="20"></a>
                            <a href="https://www.youtube.com/channel/UCWxvx6CCPOzeeY6qHmaCBKQ"><img src="<?= base_url() ?>/assets/images/icons/youtube.png" alt="..." height="20"></a>
                            <a href="https://www.twitch.tv/proto_xide"><img src="<?= base_url() ?>/assets/images/icons/twitch.png" alt="..." height="20"></a>
                            <a href="https://soundcloud.com/line-art-58656104"><img src="<?= base_url() ?>/assets/images/icons/soundcloud.png" alt="..." height="20"></a>
                            |
                            <?php if($uri->getSegment(1)!=='apropos'): ?>
                                <a class="link-dark" href="<?= base_url() ?>/apropos">A propos</a>
                            <?php else: ?>
                                <a class="link-dark" href="<?= base_url() ?>/">Accueil</a>
                            <?php endif; ?>
                            | <i class="bi bi-headset"></i>
                            <a href="mailto:support@lineart-production.com" class="link-dark text-decoration-none">support@lineart-production.com</a>
                        </div>
                    </div>
                </div>
            </nav>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script>
                window.onload = function(){
                    document.getElementById("popupstart").style.display='block';
                }
                function updatePrixMinShow(val) {
                    document.getElementById('prixMinShow').value=val; 
                }
                function updatePrixMaxShow(val) {
                    document.getElementById('prixMaxShow').value=val; 
                }
                function updatePrixMinRange(val) {
                    document.getElementById('prixMinRange').value=val; 
                }
                function updatePrixMaxRange(val) {
                    document.getElementById('prixMaxRange').value=val; 
                }
                function toggle(source) {
                    checkboxes = document.getElementsByClassName('form-check-input');
                    for(var i=0, n=checkboxes.length;i<n;i++) {
                        checkboxes[i].checked = source.checked;
                    }
                }
                function collapseAnim(source){
                    document.getElementById("collapseIcone"+source).classList.toggle('bi-caret-right')
                    document.getElementById("collapseIcone"+source).classList.toggle('bi-caret-down')
                }
                $(document).scroll(function()
                {
                    var y = $(this).scrollTop();
                    if (y > 100) {
                        $('.remonter').fadeIn();
                    } else {
                        $('.remonter').fadeOut();
                    }
                });
            </script>
        </body>
    </html> 