@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row">
    <div class="col-md-12 ">
    <div class="panel panel-default">
        <div class="panel-heading">
         Post Lists
          <a href="{{url('posts/create')}}" class="pull-right">New Post</a>
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
                  


@endsection

@push('scripts')
<script>
$(document).ready(function(){

$('#poststable').DataTable({
processing: true,
serverSide: true,
 dom: 'Bflrtip',
 buttons: [
                'csv', 'excel', 'pdf', 'print', 'reset', 'reload'
            ],  
ajax: '{!! route('posts.ajaxlist') !!}',
columns: [
{ data: 'title', name: 'title' },
{ data: 'created_at', name: 'created_at' },
{ data: 'updated_at', name: 'updated_at' },
{ data: 'action', name: 'action' },

]
});
});
</script>
@endpush