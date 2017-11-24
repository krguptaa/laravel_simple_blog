<?php $__env->startSection('content'); ?>
<div class="container">
 <div class="row">
    <div class="col-md-12 ">
    <div class="panel panel-default">
        <div class="panel-heading">
         Post Lists
          <a href="<?php echo e(url('posts/create')); ?>" class="pull-right">New Post</a>
        </div>
         <div class="panel-body">
           <div class="row">
            <div class="col-sm-12 ">
<table class="table table-bordered" id="poststable">
    <thead>
        <tr>
            <th>Ttile</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Action</th>
        </tr>
        
    </thead>
</table>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
                  


<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
$(document).ready(function(){

$('#poststable').DataTable({
processing: true,
serverSide: true,
 dom: 'Bflrtip',
 buttons: [
                'csv', 'excel', 'pdf', 'print', 'reset', 'reload'
            ],  
ajax: '<?php echo route('posts.ajaxlist'); ?>',
columns: [
{ data: 'title', name: 'title' },
{ data: 'created_at', name: 'created_at' },
{ data: 'updated_at', name: 'updated_at' },
{ data: 'action', name: 'action' },

]
});
});
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>