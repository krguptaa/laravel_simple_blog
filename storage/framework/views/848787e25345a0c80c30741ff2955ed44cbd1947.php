<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row">
    <div class="col-md-12 ">
      <div class="panel panel-default">
        <div class="panel-heading">
          Blog Posts
          <a href="<?php echo e(url('posts/create')); ?>" class="pull-right">New Post</a>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-sm-8 blog-main">
              <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="blog-post">
                <h2 class="blog-post-title"> <a href="<?php echo e(url('posts/show/'.$post->id)); ?>"><?php echo e($post->title); ?></a></h2>
                <p class="blog-post-meta"><?php echo e($post->created_at->toFormattedDateString()); ?> <a href="#"><?php echo e($post->user->name); ?></a></p>
                <p><?php echo e($post->body); ?></p>
                </div><!-- /.blog-post -->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                <nav>
                  <ul class="pager">
                    <li><a href="#">Previous</a></li>
                    <li><a href="#">Next</a></li>
                  </ul>
                </nav>
                </div><!-- /.blog-main -->
                 <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
                    <?php echo $__env->make('elements.rightsidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                  </div><!-- /.row -->
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>