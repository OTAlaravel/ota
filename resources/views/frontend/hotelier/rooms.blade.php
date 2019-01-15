@extends('frontend.layouts.app')
@section('content')
<!--Banner sec-->


<section class="profile dashboard hometop_gap">
 @include('frontend.layouts.hotelier_sidenav')

 <div class="dashboard_content">

  <h1>Our Rooms</h1>
  <div class="row">
    <div class="col-sm-12">
      <a href="{{ route('user.hotels.rooms.add', ['id' => $id]) }}" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Add Room</a>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th scope="col">Room Type</th>
            <th scope="col">Adult Capacity</th>
            <th scope="col">Child Capacity</th>
            <th scope="col">Regular Price</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($rooms as $room)
         <tr>
           <td>{{ $room->type }}</td>
           <td>{{ $room->adult_capacity }}</td>
           <td>{{ $room->child_capacity }}</td>
           <td>{{ $room->regular_price }}</td>
           <td>
             <a href="" class="btn btn-info"><i class="fa fa-edit" aria-hidden="true"></i> Edit</a>
           </td>
         </tr>
         @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
</div>
</div>


</section>
<div class="clearfix"></div>

@endsection
