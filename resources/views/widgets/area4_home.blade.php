@if (getLatestArea4() == '[]')
<div class="col-xl-12">
   <div class="alert alert-danger" style="background-color:#034ea2;color:white;text-align:center;">
      <h1>P7 Machining - Area 4</h1>
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
                           <h2 style="font-size:400%"><b>{{$data->sl56_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl56_actual','machine_no'=>'SL-56','type'=>'actual','area'=>'2','model'=>getSlModelArea4(1)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl56_actual','machine_no'=>'SL-56','type'=>'actual','area'=>'2','model'=>getSlModelArea4(1)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-56</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl136_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl136_actual','machine_no'=>'SL-136','type'=>'actual','area'=>'2','model'=>getSlModelArea4(2)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl136_actual','machine_no'=>'SL-136','type'=>'actual','area'=>'2','model'=>getSlModelArea4(2)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-136</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl63_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl63_actual','machine_no'=>'SL-63','type'=>'actual','area'=>'2','model'=>getSlModelArea4(3)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl63_actual','machine_no'=>'SL-63','type'=>'actual','area'=>'2','model'=>getSlModelArea4(3)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-63</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl135_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl135_actual','machine_no'=>'SL-135','type'=>'actual','area'=>'2','model'=>getSlModelArea4(4)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl135_actual','machine_no'=>'SL-135','type'=>'actual','area'=>'2','model'=>getSlModelArea4(4)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-135</b></h5>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl116_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl116_actual','machine_no'=>'SL-116','type'=>'actual','area'=>'2','model'=>getSlModelArea4(5)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl116_actual','machine_no'=>'SL-116','type'=>'actual','area'=>'2','model'=>getSlModelArea4(5)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-116</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl134_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl134_actual','machine_no'=>'SL-134','type'=>'actual','area'=>'2','model'=>getSlModelArea4(6)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl134_actual','machine_no'=>'SL-134','type'=>'actual','area'=>'2','model'=>getSlModelArea4(6)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-134</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl120_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl120_actual','machine_no'=>'SL-120','type'=>'actual','area'=>'2','model'=>getSlModelArea4(7)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl120_actual','machine_no'=>'SL-120','type'=>'actual','area'=>'2','model'=>getSlModelArea4(7)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-120</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl133_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl133_actual','machine_no'=>'SL-133','type'=>'actual','area'=>'2','model'=>getSlModelArea4(8)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl133_actual','machine_no'=>'SL-133','type'=>'actual','area'=>'2','model'=>getSlModelArea4(8)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-133</b></h5>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl119_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl119_actual','machine_no'=>'SL-119','type'=>'actual','area'=>'2','model'=>getSlModelArea4(9)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl119_actual','machine_no'=>'SL-119','type'=>'actual','area'=>'2','model'=>getSlModelArea4(9)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-119</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-2"></div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl132_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl132_actual','machine_no'=>'SL-132','type'=>'actual','area'=>'2','model'=>getSlModelArea4(10)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl132_actual','machine_no'=>'SL-132','type'=>'actual','area'=>'2','model'=>getSlModelArea4(10)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-132</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl131_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl131_actual','machine_no'=>'SL-131','type'=>'actual','area'=>'2','model'=>getSlModelArea4(11)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl131_actual','machine_no'=>'SL-131','type'=>'actual','area'=>'2','model'=>getSlModelArea4(11)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-131</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl137_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl137_actual','machine_no'=>'SL-137','type'=>'actual','area'=>'2','model'=>getSlModelArea4(12)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl137_actual','machine_no'=>'SL-137','type'=>'actual','area'=>'2','model'=>getSlModelArea4(12)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-137</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl138_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl138_actual','machine_no'=>'SL-138','type'=>'actual','area'=>'2','model'=>getSlModelArea4(13)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl138_actual','machine_no'=>'SL-138','type'=>'actual','area'=>'2','model'=>getSlModelArea4(13)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-138</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl192_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl192_actual','machine_no'=>'SL-192','type'=>'actual','area'=>'2','model'=>getSlModelArea4(14)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl192_actual','machine_no'=>'SL-192','type'=>'actual','area'=>'2','model'=>getSlModelArea4(14)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-192</b></h5>
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
                           <h2 style="font-size:400%"><b>{{$data->sl56_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl56_test_block','machine_no'=>'SL-56','type'=>'test_block','area'=>'2','model'=>getSlModelArea4(1)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl56_test_block','machine_no'=>'SL-56','type'=>'test_block','area'=>'2','model'=>getSlModelArea4(1)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-56</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl136_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl136_test_block','machine_no'=>'SL-136','type'=>'test_block','area'=>'2','model'=>getSlModelArea4(2)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl136_test_block','machine_no'=>'SL-136','type'=>'test_block','area'=>'2','model'=>getSlModelArea4(2)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-136</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl63_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl63_test_block','machine_no'=>'SL-63','type'=>'test_block','area'=>'2','model'=>getSlModelArea4(3)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl63_test_block','machine_no'=>'SL-63','type'=>'test_block','area'=>'2','model'=>getSlModelArea4(3)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-63</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl135_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl135_test_block','machine_no'=>'SL-135','type'=>'test_block','area'=>'2','model'=>getSlModelArea4(4)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl135_test_block','machine_no'=>'SL-135','type'=>'test_block','area'=>'2','model'=>getSlModelArea4(4)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-135</b></h5>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl116_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl116_test_block','machine_no'=>'SL-116','type'=>'test_block','area'=>'2','model'=>getSlModelArea4(5)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl116_test_block','machine_no'=>'SL-116','type'=>'test_block','area'=>'2','model'=>getSlModelArea4(5)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-116</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl134_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl134_test_block','machine_no'=>'SL-134','type'=>'test_block','area'=>'2','model'=>getSlModelArea4(6)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl134_test_block','machine_no'=>'SL-134','type'=>'test_block','area'=>'2','model'=>getSlModelArea4(6)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-134</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl120_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl120_test_block','machine_no'=>'SL-120','type'=>'test_block','area'=>'2','model'=>getSlModelArea4(7)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl120_test_block','machine_no'=>'SL-120','type'=>'test_block','area'=>'2','model'=>getSlModelArea4(7)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-120</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl133_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl133_test_block','machine_no'=>'SL-133','type'=>'test_block','area'=>'2','model'=>getSlModelArea4(8)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl133_test_block','machine_no'=>'SL-133','type'=>'test_block','area'=>'2','model'=>getSlModelArea4(8)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-133</b></h5>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl119_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl119_test_block','machine_no'=>'SL-119','type'=>'test_block','area'=>'2','model'=>getSlModelArea4(9)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl119_test_block','machine_no'=>'SL-119','type'=>'test_block','area'=>'2','model'=>getSlModelArea4(9)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-119</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-2"></div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl132_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl132_test_block','machine_no'=>'SL-132','type'=>'test_block','area'=>'2','model'=>getSlModelArea4(10)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl132_test_block','machine_no'=>'SL-132','type'=>'test_block','area'=>'2','model'=>getSlModelArea4(10)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-132</b></h5>
                        </center><br>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl131_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl131_test_block','machine_no'=>'SL-131','type'=>'test_block','area'=>'2','model'=>getSlModelArea4(11)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl131_test_block','machine_no'=>'SL-131','type'=>'test_block','area'=>'2','model'=>getSlModelArea4(11)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-131</b></h5>
                        </center><br>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl137_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl137_test_block','machine_no'=>'SL-137','type'=>'test_block','area'=>'2','model'=>getSlModelArea4(12)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl137_test_block','machine_no'=>'SL-137','type'=>'test_block','area'=>'2','model'=>getSlModelArea4(12)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-137</b></h5>
                        </center><br>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl138_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl138_test_block','machine_no'=>'SL-138','type'=>'test_block','area'=>'2','model'=>getSlModelArea4(13)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl138_test_block','machine_no'=>'SL-138','type'=>'test_block','area'=>'2','model'=>getSlModelArea4(13)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-138</b></h5>
                        </center><br>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl192_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl192_test_block','machine_no'=>'SL-192','type'=>'test_block','area'=>'2','model'=>getSlModelArea4(14)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl192_test_block','machine_no'=>'SL-192','type'=>'test_block','area'=>'2','model'=>getSlModelArea4(14)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-192</b></h5>
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