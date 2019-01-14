@extends('frontend.layouts.app')
@section('content')
<!--Banner sec-->



<section class="profile dashboard hometop_gap">
 @include('frontend.layouts.hotelier_sidenav')

 <div class="dashboard_content">

  <h1>Edit hotel</h1>
  @include('frontend.layouts.messages')
  <form action="{{ route('user.hotels.update', ['id' => $hotels->id]) }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label class="bmd-label-floating">Name</label>
        <input type="text" id="hotels_name" name="hotels_name" class="form-control" value="{{ $hotels->hotels_name }}">
      </div>
      <div class="form-group">
        <label class="bmd-label-floating">Description</label>
        <textarea class="form-control editor" name="hotels_desc" id="hotels_desc">{{ $hotels->hotels_desc }}</textarea>
      </div>
      <div class="form-group">
        <label class="bmd-label-floating">Services for the Enthusiast</label>
        <textarea class="form-control" name="enthusiast_services" id="enthusiast_services">{{ $hotels->enthusiast_services }}</textarea>
      </div>
      <div class="form-group">
        <label class="bmd-label-floating">Distance Airport To Hotel</label>
        <input type="text" id="distance_airport" name="distance_airport" class="form-control" value="{{ $hotels->distance_airport }}">
      </div>
      <div class="form-group">
        <label class="bmd-label-floating">Transfers</label>
        <input type="text" id="transfers_mode" name="transfers_mode" class="form-control" value="{{ $hotels->transfers_mode }}">
      </div>
      <div class="form-group">
        <label class="bmd-label-floating">Amenities & Services</label>
        <textarea class="form-control" id="services_amenities" name="services_amenities">{{ $hotels->services_amenities }}</textarea>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label class="bmd-label-floating">Region</label>
        <select id="region_id" class="form-control" name="region_id">
          <?php @regionOption($hotels->region_id); ?>
        </select>
      </div>
      <div class="form-group">
        <label class="bmd-label-floating">Country</label>
        <select id="country_id" class="form-control" name="country_id">
          <?php @countryOption($hotels->country_id); ?>
        </select>
      </div>
      <div class="form-group">
        <label class="bmd-label-floating">State</label>
        <select id="state_id" class="form-control" name="state_id">
          <?php @stateOption($hotels->state_id); ?>
        </select>
      </div>
      <div class="form-group">
        <label class="bmd-label-floating">Town</label>
        <input type="text" id="town" name="town" class="form-control" value="{{ $hotels->town }}">
      </div>
      <div class="form-group">
        <label class="bmd-label-floating">Activity Season</label>
        <input type="text" id="activity_season" name="activity_season" class="form-control" value="{{ $hotels->activity_season }}">
      </div>
      <div class="form-group">
        <label class="bmd-label-floating">Email ID</label>
        <input type="text" id="email_id" name="email_id" class="form-control" value="{{ $hotels->email_id }}">
      </div>
      <div class="form-group">
        <label class="bmd-label-floating">Nearest Airport</label>
        <input type="text" id="nearest_airport" name="nearest_airport" class="form-control" value="{{ $hotels->nearest_airport }}">
      </div>
      <div class="form-group">
        <label class="bmd-label-floating">Additional Information</label>
        <textarea class="form-control" id="additional_information" name="additional_information">{{ $hotels->additional_information }}</textarea>
      </div>

    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <h3>Hotel Accommodations</h3>
      <div class="form-group">
        @foreach ($accommodations as $aData)
        <?php $checked = '';  ?>
        @foreach ($accommodation_relation as $aR)
        @if ($aData->id == $aR['accommodation_id'])
        <?php $checked .= 'checked="checked"';  ?>
        @endif
        @endforeach
        <div class="form-check form-check-inline">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="accommodation_id[]" value="{{ $aData->id }}" {{ $checked }}> {{ $aData->accommodations_name }} <span class="form-check-sign"><span class="check"></span></span>
          </label>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <h3>Hotel Species</h3>
      <div class="form-group">
        @foreach ($species as $sData)
        <?php $checked = '';  ?>
        @foreach ($species_relation as $sR)
        @if ($sData->id == $sR['species_id'])
        <?php $checked .= 'checked="checked"';  ?>
        @endif
        @endforeach
        <div class="form-check form-check-inline">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="species_id[]" value="{{ $sData->id }}" {{ $checked }}> {{ $sData->species_name }} <span class="form-check-sign"><span class="check"></span></span>
          </label>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <h3>Hotel Inspirations</h3>
      <div class="form-group">
        @foreach ($inspirations as $iData)
        <?php $checked = '';  ?>
        @foreach ($inspirations_relation as $iR)
        @if ($iData->id == $iR['inspirations_id'])
        <?php $checked .= 'checked="checked"';  ?>
        @endif
        @endforeach
        <div class="form-check form-check-inline">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="inspirations_id[]" value="{{ $iData->id }}" {{ $checked }}> {{ $iData->inspirations_name }} <span class="form-check-sign"><span class="check"></span></span>
          </label>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <h3>Hotel Experiences</h3>
      <div class="form-group">
        @foreach ($experiences as $eData)
        <?php $checked = '';  ?>
        @foreach ($experiences_relation as $eR)
        @if ($eData->id == $eR['experiences_id'])
        <?php $checked .= 'checked="checked"';  ?>
        @endif
        @endforeach
        <div class="form-check form-check-inline">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="experiences_id[]" value="{{ $eData->id }}" {{ $checked }}> {{ $eData->experiences_name }} <span class="form-check-sign"><span class="check"></span></span>
          </label>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <h3>Hotel Administrator's Contact Information</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
     <div class="form-group">
      <label class="bmd-label-floating">Hotel Contact Person Name</label>
      <input type="text" id="contact_person_name" name="contact_person_name" class="form-control" value="{{ $hotelcontact->contact_person_name }}">
    </div>
    <div class="form-group">
      <label class="bmd-label-floating">Hotel Contact Person Email</label>
      <input type="text" id="contact_person_email" name="contact_person_email" class="form-control" value="{{ $hotelcontact->contact_person_email }}">
    </div>
    <div class="form-group">
      <label class="bmd-label-floating">Hotel Contact Person Phone</label>
      <input type="text" id="contact_person_phone" name="contact_person_phone" class="form-control" value="{{ $hotelcontact->contact_person_phone }}">
    </div>

  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label class="bmd-label-floating">Hotel Website</label>
      <input type="text" id="website" name="website" class="form-control" value="{{ $hotelcontact->website }}">
    </div>
    <div class="form-group">
      <label class="bmd-label-floating">Hotel Address</label>
      <textarea id="address" name="address" class="form-control">{{ $hotelcontact->address }}</textarea>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-12">
    <input type="submit" value="Update" class="btn btn-success">
  </div>
</div>
</form>

</div>


</div>
</div>
</div>


</section>
<div class="clearfix"></div>

@endsection
