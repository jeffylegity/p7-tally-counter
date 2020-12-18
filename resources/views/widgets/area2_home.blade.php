@if (getLatestArea2() == '[]')
<div class="col-xl-12">
   <div class="alert alert-danger" style="background-color:#034ea2;color:white;text-align:center;">
      <h1>P8 1st Machining - Area 2</h1>
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
               <h1>(Area 2 - {{$data->shift}} Shift / {{Carbon\Carbon::parse($data->date_generated)->format('M d, Y')}})</h1>
            </div>
            @else
            <div class="alert alert-danger" style="background-color:#034ea2;color:white;text-align:center;">
               <h1>(Area 2 - {{$data->shift}} Shift / {{Carbon\Carbon::parse($data->date_generated)->format('M d, Y')}})</h1>
            </div>
            @endif
         <div class="card-box" style="margin-top:-20px;">
            <form>
               <div class="form-group">
                  {{-- <div class="row">
                     <div class="col-lg-1">
                        <h3><b>Plan</b></h3>
                     </div>
                     <div class="col-lg-1">
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h5 style="font-size:120%;white-space:nowrap"><b>{{getSlModelArea2(1)}}</b></h5>
                           <hr style="border:1px solid black;">
                           <h2 style="font-size:400%"><b>{{$data->sl52_target}}</b></h2>
                        </center>
                        <center>
                           <h5><b>SL-52</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h5 style="font-size:120%;white-space:nowrap"><b>{{getSlModelArea2(2)}}</b></h5>
                           <hr style="border:1px solid black;">
                           <h2 style="font-size:400%"><b>{{$data->sl55_target}}</b></h2>
                        </center>
                        <center>
                           <h5><b>SL-55</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h5 style="font-size:120%;white-space:nowrap"><b>{{getSlModelArea2(3)}}</b></h5>
                           <hr style="border:1px solid black;">
                           <h2 style="font-size:400%"><b>{{$data->sl53_target}}</b></h2>
                        </center>
                        <center>
                           <h5><b>SL-53</b></h5>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h5 style="font-size:120%;white-space:nowrap"><b>{{getSlModelArea2(4)}}</b></h5>
                           <hr style="border:1px solid black;">
                           <h2 style="font-size:400%"><b>{{$data->sl60_target}}</b></h2>
                        </center>
                        <center>
                           <h5><b>SL-60</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h5 style="font-size:120%;white-space:nowrap"><b>{{getSlModelArea2(5)}}</b></h5>
                           <hr style="border:1px solid black;">
                           <h2 style="font-size:400%"><b>{{$data->sl114_target}}</b></h2>
                        </center>
                        <center>
                           <h5><b>SL-114</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h5 style="font-size:120%;white-space:nowrap"><b>{{getSlModelArea2(6)}}</b></h5>
                           <hr style="border:1px solid black;">
                           <h2 style="font-size:400%"><b>{{$data->sl113_target}}</b></h2>
                        </center>
                        <center>
                           <h5><b>SL-113</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h5 style="font-size:120%;white-space:nowrap"><b>{{getSlModelArea2(7)}}</b></h5>
                           <hr style="border:1px solid black;">
                           <h2 style="font-size:400%"><b>{{$data->sl117_target}}</b></h2>
                        </center>
                        <center>
                           <h5><b>SL-117</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h5 style="font-size:120%;white-space:nowrap"><b>{{getSlModelArea2(8)}}</b></h5>
                           <hr style="border:1px solid black;">
                           <h2 style="font-size:400%"><b>{{$data->sl122_target}}</b></h2>
                        </center>
                        <center>
                           <h5><b>SL-122</b></h5>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h5 style="font-size:120%;white-space:nowrap"><b>{{getSlModelArea2(9)}}</b></h5>
                           <hr style="border:1px solid black;">
                           <h2 style="font-size:400%"><b>{{$data->sl123_target}}</b></h2>
                        </center>
                        <center>
                           <h5><b>SL-123</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h5 style="font-size:120%;white-space:nowrap"><b>{{getSlModelArea2(10)}}</b></h5>
                           <hr style="border:1px solid black;">
                           <h2 style="font-size:400%"><b>{{$data->sl121_target}}</b></h2>
                        </center>
                        <center>
                           <h5><b>SL-121</b></h5>
                        </center>
                     </div>    
                  </div><br> --}}
                  <hr style="border:1px solid black;">
                  <div class="row">
                     <div class="col-lg-2">  
                        <h3><b>Actual</b></h3>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl52_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl52_actual','machine_no'=>'SL-52','type'=>'actual','area'=>'2','model'=>getSlModelArea2(1)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl52_actual','machine_no'=>'SL-52','type'=>'actual','area'=>'2','model'=>getSlModelArea2(1)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-52</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl55_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl55_actual','machine_no'=>'SL-55','type'=>'actual','area'=>'2','model'=>getSlModelArea2(2)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl55_actual','machine_no'=>'SL-55','type'=>'actual','area'=>'2','model'=>getSlModelArea2(2)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-55</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl53_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl53_actual','machine_no'=>'SL-53','type'=>'actual','area'=>'2','model'=>getSlModelArea2(3)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl53_actual','machine_no'=>'SL-53','type'=>'actual','area'=>'2','model'=>getSlModelArea2(3)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-53</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl60_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl60_actual','machine_no'=>'SL-60','type'=>'actual','area'=>'2','model'=>getSlModelArea2(4)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl60_actual','machine_no'=>'SL-60','type'=>'actual','area'=>'2','model'=>getSlModelArea2(4)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-60</b></h5>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl114_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl114_actual','machine_no'=>'SL-114','type'=>'actual','area'=>'2','model'=>getSlModelArea2(5)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl114_actual','machine_no'=>'SL-114','type'=>'actual','area'=>'2','model'=>getSlModelArea2(5)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-114</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl113_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl113_actual','machine_no'=>'SL-113','type'=>'actual','area'=>'2','model'=>getSlModelArea2(6)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl113_actual','machine_no'=>'SL-113','type'=>'actual','area'=>'2','model'=>getSlModelArea2(6)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-113</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl117_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl117_actual','machine_no'=>'SL-117','type'=>'actual','area'=>'2','model'=>getSlModelArea2(7)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl117_actual','machine_no'=>'SL-117','type'=>'actual','area'=>'2','model'=>getSlModelArea2(7)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-117</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl122_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl122_actual','machine_no'=>'SL-122','type'=>'actual','area'=>'2','model'=>getSlModelArea2(8)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl122_actual','machine_no'=>'SL-122','type'=>'actual','area'=>'2','model'=>getSlModelArea2(8)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-122</b></h5>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl123_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl123_actual','machine_no'=>'SL-123','type'=>'actual','area'=>'2','model'=>getSlModelArea2(9)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl123_actual','machine_no'=>'SL-123','type'=>'actual','area'=>'2','model'=>getSlModelArea2(9)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-123</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-2"></div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl121_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl121_actual','machine_no'=>'SL-121','type'=>'actual','area'=>'2','model'=>getSlModelArea2(10)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl121_actual','machine_no'=>'SL-121','type'=>'actual','area'=>'2','model'=>getSlModelArea2(10)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-121</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl141_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl141_actual','machine_no'=>'SL-141','type'=>'actual','area'=>'2','model'=>getSlModelArea2(11)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl141_actual','machine_no'=>'SL-141','type'=>'actual','area'=>'2','model'=>getSlModelArea2(11)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-141</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl139_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl139_actual','machine_no'=>'SL-139','type'=>'actual','area'=>'2','model'=>getSlModelArea2(12)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl139_actual','machine_no'=>'SL-139','type'=>'actual','area'=>'2','model'=>getSlModelArea2(12)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-139</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl142_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl142_actual','machine_no'=>'SL-142','type'=>'actual','area'=>'2','model'=>getSlModelArea2(13)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl142_actual','machine_no'=>'SL-142','type'=>'actual','area'=>'2','model'=>getSlModelArea2(13)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-142</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl140_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl140_actual','machine_no'=>'SL-140','type'=>'actual','area'=>'2','model'=>getSlModelArea2(14)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl140_actual','machine_no'=>'SL-140','type'=>'actual','area'=>'2','model'=>getSlModelArea2(14)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-140</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl187_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl187_actual','machine_no'=>'SL-187','type'=>'actual','area'=>'2','model'=>getSlModelArea2(15)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl187_actual','machine_no'=>'SL-187','type'=>'actual','area'=>'2','model'=>getSlModelArea2(15)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-187</b></h5>
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
                           <h2 style="font-size:400%"><b>{{$data->sl52_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl52_test_block','machine_no'=>'SL-52','type'=>'test_block','area'=>'2','model'=>getSlModelArea2(1)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl52_test_block','machine_no'=>'SL-52','type'=>'test_block','area'=>'2','model'=>getSlModelArea2(1)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-52</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl55_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl55_test_block','machine_no'=>'SL-55','type'=>'test_block','area'=>'2','model'=>getSlModelArea2(2)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl55_test_block','machine_no'=>'SL-55','type'=>'test_block','area'=>'2','model'=>getSlModelArea2(2)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-55</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl53_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl53_test_block','machine_no'=>'SL-53','type'=>'test_block','area'=>'2','model'=>getSlModelArea2(3)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl53_test_block','machine_no'=>'SL-53','type'=>'test_block','area'=>'2','model'=>getSlModelArea2(3)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-53</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl60_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl60_test_block','machine_no'=>'SL-60','type'=>'test_block','area'=>'2','model'=>getSlModelArea2(4)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl60_test_block','machine_no'=>'SL-60','type'=>'test_block','area'=>'2','model'=>getSlModelArea2(4)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-60</b></h5>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl114_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl114_test_block','machine_no'=>'SL-114','type'=>'test_block','area'=>'2','model'=>getSlModelArea2(5)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl114_test_block','machine_no'=>'SL-114','type'=>'test_block','area'=>'2','model'=>getSlModelArea2(5)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-114</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl113_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl113_test_block','machine_no'=>'SL-113','type'=>'test_block','area'=>'2','model'=>getSlModelArea2(6)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl113_test_block','machine_no'=>'SL-113','type'=>'test_block','area'=>'2','model'=>getSlModelArea2(6)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-113</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl117_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl117_test_block','machine_no'=>'SL-117','type'=>'test_block','area'=>'2','model'=>getSlModelArea2(7)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl117_test_block','machine_no'=>'SL-117','type'=>'test_block','area'=>'2','model'=>getSlModelArea2(7)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-117</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl122_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl122_test_block','machine_no'=>'SL-122','type'=>'test_block','area'=>'2','model'=>getSlModelArea2(8)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl122_test_block','machine_no'=>'SL-122','type'=>'test_block','area'=>'2','model'=>getSlModelArea2(8)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-122</b></h5>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl123_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl123_test_block','machine_no'=>'SL-123','type'=>'test_block','area'=>'2','model'=>getSlModelArea2(9)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl123_test_block','machine_no'=>'SL-123','type'=>'test_block','area'=>'2','model'=>getSlModelArea2(9)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-123</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-2"></div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl121_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl121_test_block','machine_no'=>'SL-121','type'=>'test_block','area'=>'2','model'=>getSlModelArea2(10)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl121_test_block','machine_no'=>'SL-121','type'=>'test_block','area'=>'2','model'=>getSlModelArea2(10)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-121</b></h5>
                        </center><br>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl141_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl141_test_block','machine_no'=>'SL-141','type'=>'test_block','area'=>'2','model'=>getSlModelArea2(10)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl141_test_block','machine_no'=>'SL-141','type'=>'test_block','area'=>'2','model'=>getSlModelArea2(10)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-141</b></h5>
                        </center><br>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl139_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl139_test_block','machine_no'=>'SL-139','type'=>'test_block','area'=>'2','model'=>getSlModelArea2(10)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl139_test_block','machine_no'=>'SL-139','type'=>'test_block','area'=>'2','model'=>getSlModelArea2(10)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-139</b></h5>
                        </center><br>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl142_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl142_test_block','machine_no'=>'SL-142','type'=>'test_block','area'=>'2','model'=>getSlModelArea2(10)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl142_test_block','machine_no'=>'SL-142','type'=>'test_block','area'=>'2','model'=>getSlModelArea2(10)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-142</b></h5>
                        </center><br>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl140_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl140_test_block','machine_no'=>'SL-140','type'=>'test_block','area'=>'2','model'=>getSlModelArea2(10)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl140_test_block','machine_no'=>'SL-140','type'=>'test_block','area'=>'2','model'=>getSlModelArea2(10)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-140</b></h5>
                        </center><br>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl187_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl187_test_block','machine_no'=>'SL-187','type'=>'test_block','area'=>'2','model'=>getSlModelArea2(10)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl187_test_block','machine_no'=>'SL-187','type'=>'test_block','area'=>'2','model'=>getSlModelArea2(10)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-187</b></h5>
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