<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Single Blog
                    <a href="<?php echo e(url('posts/')); ?>" class="pull-right">Back</a>
                </div>
                <div class="panel-body">
                    
                    <div class="col-sm-8 blog-main">
                        <h1><?php echo e($post->title); ?></h1>
                        <?php echo e($post->body); ?>


                        <?php if($post->comments): ?>
                            <hr>
                        <div class="comments">
                            <ul class="list-group">
                                <?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                <li class="list-group-item">
                                    <p>
                                        <span class="pull-left">Commented by&nbsp;<strong><?php echo e($comment->user->name); ?></strong></span>
                                        <span class="pull-right"><strong>
                                            <?php echo e($comment->created_at->diffForHumans()); ?>

                                        </strong></span>
                                        <br>
                                        <p><?php echo e($comment->body); ?></p>
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                            <?php endif; ?>
                            <hr>
                            <!--
                            @$GK
                            Date : 22nd Nov 2017
                            For comment box
                            -->
                            <div class="card">
                                <div class="card-block">
                                    <form method="post" action="/posts/<?php echo e($post->id); ?>/comments">
                                        <?php echo e(csrf_field()); ?>

                                        <div class="form-group">
                                            <textarea name="body" id="body" placeholder="Your comment here." class="form-control"   >
                                            
                                            </textarea>
                                        </div>

                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit">Add Comment</button>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
                            <?php echo $__env->make('elements.rightsidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            </div><!-- /.row -->
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>