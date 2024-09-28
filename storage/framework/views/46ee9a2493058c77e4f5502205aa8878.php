<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo e($user->name); ?></title> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12 my-3 pt-3 shadow">
                    <img src="<?php echo e($user->image->url); ?>" class="float-start rounded-circle me-2" alt="<?php echo e($user->name); ?>">
                    <h1><?php echo e($user->name); ?></h1>
                    <h3><?php echo e($user->email); ?></h3>
                    <p>
                        <strong>Instagram:</strong> <a href="https://instagram.com/<?php echo e($user->profile->instagram); ?>" target="_blank"><?php echo e($user->profile->instagram); ?></a><br>
                        <strong>GitHub:</strong> <a href="https://github.com/<?php echo e($user->profile->github); ?>" target="_blank"><?php echo e($user->profile->github); ?></a><br>
                        <strong>Web:</strong> <a href="<?php echo e($user->profile->web); ?>" target="_blank"><?php echo e($user->profile->web); ?></a>
                    </p>
                    
                    <p>
                        <strong>País:</strong> <?php echo e($user->profile->location->country); ?><br>
                        <strong>Nivel:</strong> 
                        <?php if($user->level): ?> 
                            <a href=""><?php echo e($user->level->name); ?></a>
                        <?php else: ?>
                            ___
                        <?php endif; ?>
                    </p>
                    
                    <hr>
                    <p>
                        <strong>Grupos:</strong>
                        <?php $__empty_1 = true; $__currentLoopData = $user->groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <span class="badge bg-primary"><?php echo e($group->name); ?></span>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <em>No pertenece a ningún grupo</em>
                        <?php endif; ?>
                    </p>
                    
                    <hr>

                    <h3>Posts</h3>

                    <div class="row">
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-6 mb-3">
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="<?php echo e($post->image->url); ?>" class="card-img" alt="<?php echo e($post->name); ?>">
                                    </div>
                                    <div class="col-md-8">
                                        <h5 class="card-title"><?php echo e($post->name); ?></h5>
                                        <h6 class="card-subtitle text-muted">
                                            <?php echo e($post->category->name); ?> | 
                                            <?php echo e($post->comments_count); ?> | 
                                            <?php echo e(Str::plural('comentario', $post->comments_count)); ?>

                                        </h6>
                                        <p class="card-text small">
                                            <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <!-- Agregué el símbolo $ en el foreach -->
                                            <span class="badge bg-light">
                                                #<?php echo e($tag->name); ?>

                                            </span>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <h3>Videos</h3>

                    <div class="row">
                        <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-6 mb-3">
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="<?php echo e($post->image->url); ?>" class="card-img" alt="<?php echo e($video->name); ?>">
                                    </div>
                                    <div class="col-md-8">
                                        <h5 class="card-title"><?php echo e($video->name); ?></h5>
                                        <h6 class="card-subtitle text-muted">
                                            <?php echo e($video->category->name); ?> | 
                                            <?php echo e($video->comments_count); ?> | 
                                            <?php echo e(Str::plural('comentario', $post->comments_count)); ?>

                                        </h6>
                                        <p class="card-text small">
                                            <?php $__currentLoopData = $video->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <!-- Agregué el símbolo $ en el foreach -->
                                            <span class="badge bg-light">
                                                #<?php echo e($tag->name); ?>

                                            </span>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\curso_laravel3\resources\views/profile.blade.php ENDPATH**/ ?>