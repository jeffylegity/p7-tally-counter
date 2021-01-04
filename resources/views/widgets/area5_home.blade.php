@if (getLatestArea5() == '[]')
<div class="col-xl-12">
   <div class="alert alert-danger" style="background-color:#034ea2;color:white;text-align:center;">
      <h1>P7 Machining - Area 5</h1>
   </div>
</div>
<div class="col-xl-12">
   <div class="alert alert-danger" style="background-color:#ff5b5b;color:white;">
      Data not generated, Please contact your planner
   </div>
</div>
<div class="col-lg-12" style="display:flex;align-items:center;justify-content:center;">
   <a class="btn btn-danger" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="mdi mdi-arrow-left-bold"></i> Logout</a>
   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
   </form>&ensp;&ensp;&ensp;
   <button class="btn btn-success" onClick="window.location.reload();">
   <i class="mdi mdi-refresh"></i>
      Refresh Page
   </button>
</div>
@else
   <div class="row">
      <div class="col-xl-12">
         @foreach ($slicing_data as $data)
            @if ($data->shift == 'F')
            <div class="alert alert-danger" style="background-color:#ff5b5b;color:white;text-align:center;">
               <h1>(Area 4 - {{$data->shift}} Shift / {{Carbon\Carbon::parse($data->date_generated)->format('M d, Y')}})</h1>
            </div>
            @else
            <div class="alert alert-danger" style="background-color:#034ea2;color:white;text-align:center;">
               <h1>(Area 4 - {{$data->shift}} Shift / {{Carbon\Carbon::parse($data->date_generated)->format('M d, Y')}})</h1>
            </div>
            @endif
         <div class="card-box" style="margin-top:-20px;">
            <form>
               <div class="form-group">
                  <hr style="border:1px solid black;">
                  <div class="row">
                     <div class="col-lg-2">  
                        <h3><b>Actual</b></h3>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl144_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl144_actual','machine_no'=>'SL-144','type'=>'actual','area'=>'2','model'=>getSlModelArea5(1)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl144_actual','machine_no'=>'SL-144','type'=>'actual','area'=>'2','model'=>getSlModelArea5(1)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-144</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl148_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl148_actual','machine_no'=>'SL-148','type'=>'actual','area'=>'2','model'=>getSlModelArea5(2)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl148_actual','machine_no'=>'SL-148','type'=>'actual','area'=>'2','model'=>getSlModelArea5(2)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-148</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl145_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl145_actual','machine_no'=>'SL-145','type'=>'actual','area'=>'2','model'=>getSlModelArea5(3)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl145_actual','machine_no'=>'SL-145','type'=>'actual','area'=>'2','model'=>getSlModelArea5(3)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-145</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl149_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl149_actual','machine_no'=>'SL-149','type'=>'actual','area'=>'2','model'=>getSlModelArea5(4)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl149_actual','machine_no'=>'SL-149','type'=>'actual','area'=>'2','model'=>getSlModelArea5(4)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-149</b></h5>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl146_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl146_actual','machine_no'=>'SL-146','type'=>'actual','area'=>'2','model'=>getSlModelArea5(5)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl146_actual','machine_no'=>'SL-146','type'=>'actual','area'=>'2','model'=>getSlModelArea5(5)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-146</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl150_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl150_actual','machine_no'=>'SL-150','type'=>'actual','area'=>'2','model'=>getSlModelArea5(6)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl150_actual','machine_no'=>'SL-150','type'=>'actual','area'=>'2','model'=>getSlModelArea5(6)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-150</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl147_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl147_actual','machine_no'=>'SL-147','type'=>'actual','area'=>'2','model'=>getSlModelArea5(7)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl147_actual','machine_no'=>'SL-147','type'=>'actual','area'=>'2','model'=>getSlModelArea5(7)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-147</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl151_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl151_actual','machine_no'=>'SL-151','type'=>'actual','area'=>'2','model'=>getSlModelArea5(8)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl151_actual','machine_no'=>'SL-151','type'=>'actual','area'=>'2','model'=>getSlModelArea5(8)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-151</b></h5>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl152_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl152_actual','machine_no'=>'SL-152','type'=>'actual','area'=>'2','model'=>getSlModelArea5(9)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl152_actual','machine_no'=>'SL-152','type'=>'actual','area'=>'2','model'=>getSlModelArea5(9)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-152</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-2"></div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl153_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl153_actual','machine_no'=>'SL-153','type'=>'actual','area'=>'2','model'=>getSlModelArea5(10)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl153_actual','machine_no'=>'SL-153','type'=>'actual','area'=>'2','model'=>getSlModelArea5(10)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-153</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl154_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl154_actual','machine_no'=>'SL-154','type'=>'actual','area'=>'2','model'=>getSlModelArea5(11)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl154_actual','machine_no'=>'SL-154','type'=>'actual','area'=>'2','model'=>getSlModelArea5(11)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-154</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl155_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl155_actual','machine_no'=>'SL-155','type'=>'actual','area'=>'2','model'=>getSlModelArea5(12)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl155_actual','machine_no'=>'SL-155','type'=>'actual','area'=>'2','model'=>getSlModelArea5(12)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-155</b></h5>
                        </center>
                     </div> 
                  </div><br>
                  <hr style="border: 1px solid black;">
                  <div class="row">
                     <div class="col-lg-2">
                        <h3><b>Testblock</b></h3>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl144_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl144_test_block','machine_no'=>'SL-144','type'=>'test_block','area'=>'2','model'=>getSlModelArea5(1)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl144_test_block','machine_no'=>'SL-144','type'=>'test_block','area'=>'2','model'=>getSlModelArea5(1)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-144</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl148_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl148_test_block','machine_no'=>'SL-148','type'=>'test_block','area'=>'2','model'=>getSlModelArea5(2)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl148_test_block','machine_no'=>'SL-148','type'=>'test_block','area'=>'2','model'=>getSlModelArea5(2)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-148</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl145_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl145_test_block','machine_no'=>'SL-145','type'=>'test_block','area'=>'2','model'=>getSlModelArea5(3)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl145_test_block','machine_no'=>'SL-145','type'=>'test_block','area'=>'2','model'=>getSlModelArea5(3)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-145</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl149_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl149_test_block','machine_no'=>'SL-149','type'=>'test_block','area'=>'2','model'=>getSlModelArea5(4)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl149_test_block','machine_no'=>'SL-149','type'=>'test_block','area'=>'2','model'=>getSlModelArea5(4)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-149</b></h5>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl146_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl146_test_block','machine_no'=>'SL-146','type'=>'test_block','area'=>'2','model'=>getSlModelArea5(5)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl146_test_block','machine_no'=>'SL-146','type'=>'test_block','area'=>'2','model'=>getSlModelArea5(5)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-146</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl150_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl150_test_block','machine_no'=>'SL-150','type'=>'test_block','area'=>'2','model'=>getSlModelArea5(6)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl150_test_block','machine_no'=>'SL-150','type'=>'test_block','area'=>'2','model'=>getSlModelArea5(6)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-150</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl147_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl147_test_block','machine_no'=>'SL-147','type'=>'test_block','area'=>'2','model'=>getSlModelArea5(7)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl147_test_block','machine_no'=>'SL-147','type'=>'test_block','area'=>'2','model'=>getSlModelArea5(7)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-147</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl151_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl151_test_block','machine_no'=>'SL-151','type'=>'test_block','area'=>'2','model'=>getSlModelArea5(8)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl151_test_block','machine_no'=>'SL-151','type'=>'test_block','area'=>'2','model'=>getSlModelArea5(8)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-151</b></h5>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl152_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl152_test_block','machine_no'=>'SL-152','type'=>'test_block','area'=>'2','model'=>getSlModelArea5(9)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl152_test_block','machine_no'=>'SL-152','type'=>'test_block','area'=>'2','model'=>getSlModelArea5(9)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-152</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-2"></div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl153_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl153_test_block','machine_no'=>'SL-153','type'=>'test_block','area'=>'2','model'=>getSlModelArea5(10)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl153_test_block','machine_no'=>'SL-153','type'=>'test_block','area'=>'2','model'=>getSlModelArea5(10)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-153</b></h5>
                        </center><br>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl154_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl154_test_block','machine_no'=>'SL-154','type'=>'test_block','area'=>'2','model'=>getSlModelArea5(11)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl154_test_block','machine_no'=>'SL-154','type'=>'test_block','area'=>'2','model'=>getSlModelArea5(11)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-154</b></h5>
                        </center><br>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl155_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl155_test_block','machine_no'=>'SL-155','type'=>'test_block','area'=>'2','model'=>getSlModelArea5(12)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl155_test_block','machine_no'=>'SL-155','type'=>'test_block','area'=>'2','model'=>getSlModelArea5(12)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-155</b></h5>
                        </center><br>
                     </div> 
                     <div class="col-lg-12" style="display:flex;align-items:center;justify-content:center;">
                        <a class="btn btn-danger" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="mdi mdi-arrow-left-bold"></i> Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                           @csrf
                        </form>&ensp;&ensp;&ensp;
                        <button class="btn btn-success" onClick="window.location.reload();">
                           <i class="mdi mdi-refresh"></i>
                           Refresh Page
                        </button>
                     </div>
                  </div><br><br>
               </div>
            </form>
         </div>
      </div>
      @endforeach
   </div>
@endif