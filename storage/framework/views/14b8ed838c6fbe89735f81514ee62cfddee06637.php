<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading">Creat a new post</div>
                <div class="panel-body">
                    <div class="col-sm-8 blog-main">
                        <form class="form-horizontal" method="POST" action="store">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group<?php echo e($errors->has('title') ? ' has-error' : ''); ?>">
                                <label for="title" class="col-md-4 control-label">Title</label>
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title" value="<?php echo e(old('title')); ?>" autofocus>
                                    <?php if($errors->has('title')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('title')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group<?php echo e($errors->has('body') ? ' has-error' : ''); ?>">
                                <label for="body" class="col-md-4 control-label">Body</label>
                                <div class="col-md-6">
                                    <textarea id="body" name="body" class="form-control">
                                    </textarea>
                                    
                                    <?php if($errors->has('body')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('body')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                    Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
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