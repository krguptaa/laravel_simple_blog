<div class="sidebar-module">
  <h4>Archives</h4>
  <ol class="list-unstyled">

  <?php $__currentLoopData = $archived; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $archive): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      
       <li><a href="/posts/?month=<?php echo e($archive['month']); ?>&year=<?php echo e($archive['year']); ?>"><?php echo e($archive['month']); ?>&nbsp;<?php echo e($archive['year']); ?>&nbsp; (<?php echo e($archive['published']); ?>)</a></li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </ol>
</div>