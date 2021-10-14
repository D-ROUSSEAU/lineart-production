            <?php if(isset($validation)): ?>
                <div class="alert alert-warning alert-dismissible fade show container shadow" role="alert" style="position: absolute; z-index: 1000;top: 10px;left: 50%;transform: translate(-50%, 0);">
                    <h4><i class="bi bi-exclamation-triangle pr-2"></i> Attention !</h4>
                    <p class="text-decoration-none"><?= $validation->listErrors() ?></p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <?php if(session()->get('success')): ?>
                <div class="alert alert-success alert-dismissible fade show container shadow" role="alert" style="position: absolute; z-index: 1000;top: 10px;left: 50%;transform: translate(-50%, 0);">
                    <h4><i class="bi bi-check-circle"></i> Bravo !</h4>
                    <p class="text-decoration-none"><?= session()->get('success') ?></p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>          
            <?php if(session()->get('error')): ?>
                <div class="alert alert-warning alert-dismissible fade show container shadow" role="alert" style="position: absolute; z-index: 1000;top: 10px;left: 50%;transform: translate(-50%, 0);">
                    <h4><i class="bi bi-exclamation-triangle pr-2"></i> Attention !</h4>
                    <p class="text-decoration-none"><?= session()->get('error') ?></p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>