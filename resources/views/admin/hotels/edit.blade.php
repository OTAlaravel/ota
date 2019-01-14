@extends('admin.layouts.master')
@section('th_head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('backend/froala/css/froala_editor.css')}}">
<link rel="stylesheet" href="{{ asset('backend/froala/css/froala_style.css')}}">
<link rel="stylesheet" href="{{ asset('backend/froala/css/plugins/code_view.css')}}">
<link rel="stylesheet" href="{{ asset('backend/froala/css/plugins/colors.css')}}">
<link rel="stylesheet" href="{{ asset('backend/froala/css/plugins/emoticons.css')}}">
<link rel="stylesheet" href="{{ asset('backend/froala/css/plugins/image_manager.css')}}">
<link rel="stylesheet" href="{{ asset('backend/froala/css/plugins/image.css')}}">
<link rel="stylesheet" href="{{ asset('backend/froala/css/plugins/line_breaker.css')}}">
<link rel="stylesheet" href="{{ asset('backend/froala/css/plugins/table.css')}}">
<link rel="stylesheet" href="{{ asset('backend/froala/css/plugins/char_counter.css')}}">
<link rel="stylesheet" href="{{ asset('backend/froala/css/plugins/video.css')}}">
<link rel="stylesheet" href="{{ asset('backend/froala/css/plugins/fullscreen.css')}}">
<link rel="stylesheet" href="{{ asset('backend/froala/css/plugins/file.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css')}}">
@endsection
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h3 class="card-title">Edit Hotel
              <div class="float-right">
                <select id="sitelang" name="sitelang" class="browser-default btn-round custom-select">
                  <?php @langOption(); ?>
                </select>
                <a href="{{ route('admin.hotels')}}" class="btn-sm btn-success btn-round ">
                  <i class="material-icons">library_books</i> List</a>
                </div>
              </h3>
            </div>
            <div class="card-body">
              @include('admin.layouts.messages')
              <?php 
              $lang = @\Session::get('language');
              ?>
              <form id="EditHotels" method="post" action="{{ route('admin.hotels.update', ['lang' => $lang, 'id' => $hotels->id]) }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" id="lang_code" name="locale" value="en">
                <div class="row">
                  <div class="col-sm-12">
                    <h3>Hotel Details</h3>
                  </div>
                </div>
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
                <div class="col-md-12">
                 <h3>Hotel Rooms</h3>
                 <p>Coming soon...</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-success btn-rounded btn-sm waves-effect waves-light"> Published </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('th_foot')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js" ></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/froala_editor.min.js') }}" ></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/align.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/code_beautifier.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/code_view.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/colors.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/draggable.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/emoticons.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/font_size.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/font_family.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/image.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/file.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/image_manager.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/line_breaker.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/link.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/lists.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/paragraph_format.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/paragraph_style.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/video.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/table.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/url.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/entities.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/char_counter.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/inline_style.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/save.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('backend/froala/js/plugins/fullscreen.min.js') }}"></script>
<script>
  $(function(){
    $('.editor').froalaEditor({
      enter: $.FroalaEditor.ENTER_P,
      initOnClick: false
    })
  });
</script>
<script src="{{ asset('backend/assets/js/posts.js') }}"></script>
@endsection