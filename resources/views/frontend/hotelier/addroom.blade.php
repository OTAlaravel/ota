@extends('frontend.layouts.app')
@section('content')
<!--Banner sec-->


<section class="profile dashboard hometop_gap">
 @include('frontend.layouts.hotelier_sidenav')

 <div class="dashboard_content">

  <h1>Add New Room</h1>
  @include('frontend.layouts.messages')
  <form action="{{ route('user.hotels.rooms.doadd', ['id' => $id]) }}" method="POST" id="RoomAdd">
    {{ csrf_field() }}
  <div class="row">
    <div class="col-sm-12">
      <div class="form-group">
          <label>Room Type</label>
          <input type="text" id="type" name="type" class="form-control" placeholder="Room Type">
        </div>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
          <label>Adult Capacity</label>
          <input type="number" id="adult_capacity" name="adult_capacity" class="form-control" placeholder="Adult Capacity">
        </div>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
          <label>Child Capacity</label>
          <input type="number" id="child_capacity" name="child_capacity" class="form-control" placeholder="Child Capacity">
        </div>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
          <label>Regular Price</label>
          <input type="text" id="regular_price" name="regular_price" class="form-control" placeholder="Regular Price">
        </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-5">
      <div class="form-group">
          <input type="text" name="date[]" class="form-control datepicker" placeholder="Date">
    </div>
    </div>
    <div class="col-sm-5">
        <div class="form-group">
          <input type="text" name="price[]" class="form-control" placeholder="Price">
        </div>
    </div>
    <div class="col-sm-2">
      <a href="javascript:void(0);" class="btn btn-success add_row" title="Add"><i class="fa fa-plus"></i></a> 
    </div>
  </div>
  <span id="custom_fields"></span>
  <div class="row">
    <div class="col-sm-12">
      <div class="form-group">
          <button type="button" class="btn btn-primary btn-lg submit" id="load" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Please Wait ">Submit</button>
        </div>
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
@section('script')
<script type="text/javascript">
 $('form#RoomAdd .submit').on('click', function() {
  var $this = $(this);
  $this.button('loading');
  $( "#RoomAdd" ).submit();
  setTimeout(function() {
   $this.button('reset');
 }, 30000);
});
 $('.add_row').on('click', function(){
  $('#custom_fields').append('<div class="row"><div class="col-sm-5"><div class="form-group"><input type="text" name="date[]" class="form-control datepicker" placeholder="Date"></div></div><div class="col-sm-5"><div class="form-group"><input type="text" name="price[]" class="form-control" placeholder="Price"></div></div><div class="col-sm-2"><a href="javascript:void(0);" class="btn btn-danger remove_row" title="Remove"><i class="fa fa-trash"></i></a></div></div>').find('.datepicker').datepicker({startDate:new Date() });
 });
 $('#custom_fields').on('click', '.remove_row', function(){
   $(this).parent().parent().remove();
 });
 $('.datepicker').datepicker({
  startDate:new Date()
 });
</script>
@endsection