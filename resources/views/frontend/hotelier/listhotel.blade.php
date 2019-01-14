@extends('frontend.layouts.app')
@section('content')
<!--Banner sec-->



<section class="profile dashboard hometop_gap">
 @include('frontend.layouts.hotelier_sidenav')

 <div class="dashboard_content">

  <h1>Our Holets</h1>
  <div class="row">
    <div class="col-sm-12">
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th scope="col">Hotel Name</th>
            <th scope="col">Region</th>
            <th scope="col">Country</th>
            <th scope="col">State</th>
            <th scope="col">Town</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($hotels as $hotel)
         
          <tr>
            <td>{{ $hotel->hotels_name }}</td>
            <td>{{ $hotel->region->regions_name }}</td>
            <td>{{ $hotel->country->countries_name }}</td>
            <td>{{ $hotel->state->states_name }}</td>
            <td>{{ $hotel->town }}</td>
            <td>{{ $hotel->email_id }}</td>
            <td>
              <a href="" class="btn btn-warning"><i class="fa fa-eye"></i> View</a>
              <a href="" class="btn btn-success"><i class="fa fa-home"></i> Rooms</a>
              <a href="{{ route('user.hotels.edit', ['id' => $hotel->id]) }}" class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>
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
