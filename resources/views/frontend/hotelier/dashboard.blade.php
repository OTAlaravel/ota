@extends('frontend.layouts.app')
@section('content')
<!--Banner sec-->

<section class="profile dashboard hometop_gap">
    @include('frontend.layouts.hotelier_sidenav')
       <div class="dashboard_content">
        <h1>Our Dashboard</h1>
           <div class="row">
            <div class="col-md-12">
              <div class="month">      
              <ul>
                  <li class="prev">&#10094;</li>
                  <li class="next">&#10095;</li>
                  <li>August<br>
                  <span style="font-size:18px">2017</span>
                    </li>
              </ul>
            </div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days">  
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li><span class="active">10</span></li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li>31</li>
</ul>
                                
                        </div>
                        <div class="col-md-6">
                        	blog 1
                        </div>
                        <div class="col-md-6">
                    		blog 2
                        </div>
					 </div>
					  </div>
					  
					 
</section>
<div class="clearfix"></div>




@endsection
