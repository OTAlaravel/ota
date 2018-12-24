@extends('admin.layouts.master')

@section('th_head')

@endsection

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header card-header-warning">
                <h3 class="card-title ">Country Master
                    <div class="float-right">
                        <a href="{{ route('admin.countries.add') }}" class="btn-sm btn-success btn-round "> 
                            <i class="material-icons">create</i> New</a>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                       @include('admin.layouts.messages')
                       <table class="table" id="order-listing">
                        <thead class=" text-primary"> 
                            <th>Name</th>
                            <th>Shortname</th>
                            <th>Phonecode</th>
                            <th>Action</th>
                        </thead>
                            @foreach($countries as $country)
                            <tr>
                                <td>{{ $country->name }}</td>
                                <td>{{ $country->sortname}}</td>
                                <td>{{ $country->phonecode}}</td>
                                <td class="text-primary">
                                <a href="" title="Edit">
                                     <i class="fa fa-edit"></i>
                                 </a>
                               <form id="delete-form-{{ $country->id }}" method="post" action="" style="display: none;">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                            </form>
                            <a href="javascript:void(0);" onclick="swal({
                                title: 'Are you sure?',
                                text: 'Once deleted, you will not be able to recover this!',
                                icon: 'warning',
                                buttons: true,
                                dangerMode: true,
                            }).then((willDelete) => {if(willDelete){event.preventDefault();document.getElementById('delete-form-{{ $country->id }}').submit();}else{}});" title="Delete">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </a>
                                </td>
                            </tr>
                            @endforeach
                        <tbody>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>

@endsection
@section('th_foot')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

@endsection