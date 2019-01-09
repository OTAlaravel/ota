@extends('frontend.layouts.app')
@section('content')
<!--/////////////////////////////////////////-->
<section class="country_search">
  <div class="container">
    <div class="row clearfix">
      <div class="col-md-12">
        <div class="tabcard">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Accommodation</a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Experience</a></li>
            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Inspirations</a></li>
            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Target Species</a></li>
          </ul>
          
          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
              <div class="row clearfix">
                <div class="col-md-6">
                  <div class="table_content table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Region</th>
                          <th>Country</th>
                          <th>State</th>
                          <th>Town</th>
                          <th>Hotel</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Region1</td>
                          <td>Country1</td>
                          <td>State1</td>
                          <td>Town1</td>
                          <td><ul class="name">
                              <li>Hotel-1</li>
                              <li>Hotel-2</li>
                            </ul></td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>Town2</td>
                          <td><ul class="name">
                              <li>Hotel-1</li>
                              <li>Hotel-2</li>
                            </ul></td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td>State2</td>
                          <td>Town1</td>
                          <td><ul class="name">
                              <li>Hotel-1</li>
                              <li>Hotel-2</li>
                            </ul></td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td>State3</td>
                          <td><ul class="name">
                              <li>Town1</li>
                              <li>Town2</li>
                              <li>Town3</li>
                            </ul></td>
                          <td><ul class="name">
                              <li>Hotel-1</li>
                              <li>Hotel-2</li>
                              <li>Hotel-3</li>
                            </ul></td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>Country2</td>
                          <td>State1</td>
                          <td>Town1</td>
                          <td><ul class="name">
                              <li>Hotel-1</li>
                              <li>Hotel-2</li>
                              <li>Hotel-3</li>
                            </ul></td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>Town2</td>
                          <td>Hotel-1</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td>State2</td>
                          <td>Town1</td>
                          <td><ul class="name">
                              <li>Hotel-1</li>
                              <li>Hotel-2</li>
                            </ul></td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>Town2</td>
                          <td><ul class="name">
                              <li>Hotel-1</li>
                              <li>Hotel-2</li>
                              <li>Hotel-3</li>
                            </ul></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="col-md-6">
                    <div class="hotel_map">
                        <img src="images/hotel-map.jpg" alt="">
                    </div>
                </div>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="profile">Experience content here...</div>
            <div role="tabpanel" class="tab-pane" id="messages">Inspirations content here...</div>
            <div role="tabpanel" class="tab-pane" id="settings">Target Species content here...</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/////////////////////////////////////////-->

@endsection
