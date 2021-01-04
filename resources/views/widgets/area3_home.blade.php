@if (getLatestArea3() == '[]')
<div class="col-xl-12">
   <div class="alert alert-danger" style="background-color:#034ea2;color:white;text-align:center;">
      <h1>P7 Machining - Area 3</h1>
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
               <h1>(Area 3 - {{$data->shift}} Shift / {{Carbon\Carbon::parse($data->date_generated)->format('M d, Y')}})</h1>
            </div>
            @else
            <div class="alert alert-danger" style="background-color:#034ea2;color:white;text-align:center;">
               <h1>(Area 3 - {{$data->shift}} Shift / {{Carbon\Carbon::parse($data->date_generated)->format('M d, Y')}})</h1>
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
                           <h2 style="font-size:400%"><b>{{$data->sl96_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl96_actual','machine_no'=>'SL-96','type'=>'actual','area'=>'2','model'=>getSlModelArea3(1)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl96_actual','machine_no'=>'SL-96','type'=>'actual','area'=>'2','model'=>getSlModelArea3(1)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-96</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl101_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl101_actual','machine_no'=>'SL-101','type'=>'actual','area'=>'2','model'=>getSlModelArea3(2)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl101_actual','machine_no'=>'SL-101','type'=>'actual','area'=>'2','model'=>getSlModelArea3(2)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-101</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl84_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl84_actual','machine_no'=>'SL-84','type'=>'actual','area'=>'2','model'=>getSlModelArea3(3)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl84_actual','machine_no'=>'SL-84','type'=>'actual','area'=>'2','model'=>getSlModelArea3(3)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-84</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl100_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl100_actual','machine_no'=>'SL-100','type'=>'actual','area'=>'2','model'=>getSlModelArea3(4)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl100_actual','machine_no'=>'SL-100','type'=>'actual','area'=>'2','model'=>getSlModelArea3(4)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-100</b></h5>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl64_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl64_actual','machine_no'=>'SL-64','type'=>'actual','area'=>'2','model'=>getSlModelArea3(5)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl64_actual','machine_no'=>'SL-64','type'=>'actual','area'=>'2','model'=>getSlModelArea3(5)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-64</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl59_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl59_actual','machine_no'=>'SL-59','type'=>'actual','area'=>'2','model'=>getSlModelArea3(6)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl59_actual','machine_no'=>'SL-59','type'=>'actual','area'=>'2','model'=>getSlModelArea3(6)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-59</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl57_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl57_actual','machine_no'=>'SL-57','type'=>'actual','area'=>'2','model'=>getSlModelArea3(7)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl57_actual','machine_no'=>'SL-57','type'=>'actual','area'=>'2','model'=>getSlModelArea3(7)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-57</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl58_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl58_actual','machine_no'=>'SL-58','type'=>'actual','area'=>'2','model'=>getSlModelArea3(8)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl58_actual','machine_no'=>'SL-58','type'=>'actual','area'=>'2','model'=>getSlModelArea3(8)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-58</b></h5>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl99_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl99_actual','machine_no'=>'SL-99','type'=>'actual','area'=>'2','model'=>getSlModelArea3(9)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl99_actual','machine_no'=>'SL-99','type'=>'actual','area'=>'2','model'=>getSlModelArea3(9)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-99</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-2"></div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl111_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl111_actual','machine_no'=>'SL-111','type'=>'actual','area'=>'2','model'=>getSlModelArea3(10)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl111_actual','machine_no'=>'SL-111','type'=>'actual','area'=>'2','model'=>getSlModelArea3(10)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-111</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl109_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl109_actual','machine_no'=>'SL-109','type'=>'actual','area'=>'2','model'=>getSlModelArea3(11)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl109_actual','machine_no'=>'SL-109','type'=>'actual','area'=>'2','model'=>getSlModelArea3(11)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-109</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl112_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl112_actual','machine_no'=>'SL-112','type'=>'actual','area'=>'2','model'=>getSlModelArea3(12)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl112_actual','machine_no'=>'SL-112','type'=>'actual','area'=>'2','model'=>getSlModelArea3(12)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-112</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl110_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl110_actual','machine_no'=>'SL-110','type'=>'actual','area'=>'2','model'=>getSlModelArea3(13)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl110_actual','machine_no'=>'SL-110','type'=>'actual','area'=>'2','model'=>getSlModelArea3(13)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-110</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl143_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl143_actual','machine_no'=>'SL-143','type'=>'actual','area'=>'2','model'=>getSlModelArea3(14)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl143_actual','machine_no'=>'SL-143','type'=>'actual','area'=>'2','model'=>getSlModelArea3(14)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-143</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl108_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl108_actual','machine_no'=>'SL-108','type'=>'actual','area'=>'2','model'=>getSlModelArea3(15)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl108_actual','machine_no'=>'SL-108','type'=>'actual','area'=>'2','model'=>getSlModelArea3(15)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-108</b></h5>
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
                           <h2 style="font-size:400%"><b>{{$data->sl96_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl96_test_block','machine_no'=>'SL-96','type'=>'test_block','area'=>'2','model'=>getSlModelArea3(1)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl96_test_block','machine_no'=>'SL-96','type'=>'test_block','area'=>'2','model'=>getSlModelArea3(1)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-96</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl101_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl101_test_block','machine_no'=>'SL-101','type'=>'test_block','area'=>'2','model'=>getSlModelArea3(2)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl101_test_block','machine_no'=>'SL-101','type'=>'test_block','area'=>'2','model'=>getSlModelArea3(2)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-101</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl84_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl84_test_block','machine_no'=>'SL-84','type'=>'test_block','area'=>'2','model'=>getSlModelArea3(3)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl84_test_block','machine_no'=>'SL-84','type'=>'test_block','area'=>'2','model'=>getSlModelArea3(3)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-84</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl100_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl100_test_block','machine_no'=>'SL-100','type'=>'test_block','area'=>'2','model'=>getSlModelArea3(4)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl100_test_block','machine_no'=>'SL-100','type'=>'test_block','area'=>'2','model'=>getSlModelArea3(4)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-100</b></h5>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl64_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl64_test_block','machine_no'=>'SL-64','type'=>'test_block','area'=>'2','model'=>getSlModelArea3(5)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl64_test_block','machine_no'=>'SL-64','type'=>'test_block','area'=>'2','model'=>getSlModelArea3(5)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-64</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl59_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl59_test_block','machine_no'=>'SL-59','type'=>'test_block','area'=>'2','model'=>getSlModelArea3(6)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl59_test_block','machine_no'=>'SL-59','type'=>'test_block','area'=>'2','model'=>getSlModelArea3(6)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-59</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl57_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl57_test_block','machine_no'=>'SL-57','type'=>'test_block','area'=>'2','model'=>getSlModelArea3(7)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl57_test_block','machine_no'=>'SL-57','type'=>'test_block','area'=>'2','model'=>getSlModelArea3(7)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-57</b></h5>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl58_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl58_test_block','machine_no'=>'SL-58','type'=>'test_block','area'=>'2','model'=>getSlModelArea3(8)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl58_test_block','machine_no'=>'SL-58','type'=>'test_block','area'=>'2','model'=>getSlModelArea3(8)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-58</b></h5>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl99_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl99_test_block','machine_no'=>'SL-99','type'=>'test_block','area'=>'2','model'=>getSlModelArea3(9)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl99_test_block','machine_no'=>'SL-99','type'=>'test_block','area'=>'2','model'=>getSlModelArea3(9)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-99</b></h5>
                        </center>
                     </div> 
                     <div class="col-lg-2"></div>
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl111_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl111_test_block','machine_no'=>'SL-111','type'=>'test_block','area'=>'2','model'=>getSlModelArea3(10)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl111_test_block','machine_no'=>'SL-111','type'=>'test_block','area'=>'2','model'=>getSlModelArea3(10)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-111</b></h5>
                        </center><br>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl109_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl109_test_block','machine_no'=>'SL-109','type'=>'test_block','area'=>'2','model'=>getSlModelArea3(11)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl109_test_block','machine_no'=>'SL-109','type'=>'test_block','area'=>'2','model'=>getSlModelArea3(11)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-109</b></h5>
                        </center><br>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl112_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl112_test_block','machine_no'=>'SL-112','type'=>'test_block','area'=>'2','model'=>getSlModelArea3(12)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl112_test_block','machine_no'=>'SL-112','type'=>'test_block','area'=>'2','model'=>getSlModelArea3(12)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-112</b></h5>
                        </center><br>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl110_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl110_test_block','machine_no'=>'SL-110','type'=>'test_block','area'=>'2','model'=>getSlModelArea3(13)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl110_test_block','machine_no'=>'SL-110','type'=>'test_block','area'=>'2','model'=>getSlModelArea3(13)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-110</b></h5>
                        </center><br>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl143_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl143_test_block','machine_no'=>'SL-143','type'=>'test_block','area'=>'2','model'=>getSlModelArea3(14)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl143_test_block','machine_no'=>'SL-143','type'=>'test_block','area'=>'2','model'=>getSlModelArea3(14)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-143</b></h5>
                        </center><br>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h2 style="font-size:400%"><b>{{$data->sl108_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl108_test_block','machine_no'=>'SL-108','type'=>'test_block','area'=>'2','model'=>getSlModelArea3(15)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl108_test_block','machine_no'=>'SL-108','type'=>'test_block','area'=>'2','model'=>getSlModelArea3(15)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h5><b>SL-108</b></h5>
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