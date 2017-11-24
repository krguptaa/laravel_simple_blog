@extends('layouts.app')
@section('content')


<div class="container">
 <div class="row">
    <div class="col-md-12 ">
    <div class="panel panel-default">
        <div class="panel-heading">
         User Lists
          <a href="{{url('/register')}}" class="pull-right">New User</a>
        </div>
         <div class="panel-body">
           <div class="row">
            <div class="col-sm-12 ">
<table class="table table-bordered" id="userstable">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created At</th>
            <th>Updated At</th>
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
                  


@stop

@push('scripts')
<script>
$(document).ready(function(){

$('#userstable').DataTable({

processing: true,
serverSide: true,
 dom: 'Bflrtip',
 buttons: [
                'csv', 'excel', 'pdf', 'print', 'reset', 'reload'
            ],
ajax: '{!! route('get.data') !!}',
columns: [
{ data: 'id', name: 'id' },
{ data: 'name', name: 'name' },
{ data: 'email', name: 'email' },
{ data: 'created_at', name: 'created_at' },
{ data: 'updated_at', name: 'updated_at' }
]
});
});
</script>
@endpush