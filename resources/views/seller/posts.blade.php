@extends('layouts.header')


@section('content')


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">


<script src="https://code.jquery.com/jquery-3.3.1.js"></script>


<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<style>
    .footer{
        position:absolute!important;
    }
    </style>


<?php
$user=Auth::user();

?>


<div class="container">

<div class="row ml-3">
 


    <table id="example1" class="table table-striped table-bordered">

<thead>

<tr>
    <th>#</th>
<th>Product Name</th>
<th>Product Price</th>
<th>Product Location</th>
<th>Product Category</th>
<th>Product Description</th>
<th>Action</th>





</tr>

</thead>
<tbody>

@foreach ($user->products as $product)
<tr>
<td>{{$product->id}}</td>
<td>{{$product->name}}</td>
<td>{{$product->price}}</td>
<td>{{$product->location}}</td>
<td>{{$product->category->name}}</td>
<td>{{$product->description}}</td>
<td><a href="{{url('delete_user_product/'.$product->id)}}">Delete</a></td>

</tr>    
@endforeach
</tbody>

    </table>

</div>
         
</div>


<script>

$(function () {
    $("#example1").DataTable();
});
</script>
@endsection

