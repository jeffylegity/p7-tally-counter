@if (getLatestArea1() == '[]')
<div class="col-xl-12">
   <div class="alert alert-danger" style="background-color:#034ea2;color:white;text-align:center;">
      <h1>P8 1st Machining - Area 1</h1>
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
               <h1>(Area 1 - {{$data->shift}} Shift / {{Carbon\Carbon::parse($data->date_generated)->format('M d, Y')}})</h1>
            </div>
            @else
            <div class="alert alert-danger" style="background-color:#034ea2;color:white;text-align:center;">
               <h1>(Area 1 - {{$data->shift}} Shift / {{Carbon\Carbon::parse($data->date_generated)->format('M d, Y')}})</h1>
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
                        <center>
                           <h4><b>{{getSlModelArea1(1)}}</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl88_target}}</b></h2>
                        </center>
                        <center>
                           <h4><b>SL-88</b></h4>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h4><b>{{getSlModelArea1(2)}}</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl90_target}}</b></h2>
                        </center>
                        <center>
                           <h4><b>SL-90</b></h4>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h4><b>{{getSlModelArea1(3)}}</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl89_target}}</b></h2>
                        </center>
                        <center>
                           <h4><b>SL-89</b></h4>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h4><b>{{getSlModelArea1(4)}}</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl93_target}}</b></h2>
                        </center>
                        <center>
                           <h4><b>SL-93</b></h4>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h4><b>{{getSlModelArea1(5)}}</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl91_target}}</b></h2>
                        </center>
                        <center>
                           <h4><b>SL-91</b></h4>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h4><b>{{getSlModelArea1(6)}}</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl94_target}}</b></h2>
                        </center>
                        <center>
                           <h4><b>SL-94</b></h4>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h4><b>{{getSlModelArea1(7)}}</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl92_target}}</b></h2>
                        </center>
                        <center>
                           <h4><b>SL-92</b></h4>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h4><b>{{getSlModelArea1(8)}}</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl95_target}}</b></h2>
                        </center>
                        <center>
                           <h4><b>SL-95</b></h4>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h4><b>{{getSlModelArea1(9)}}</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl97_target}}</b></h2>
                        </center>
                        <center>
                           <h4><b>SL-97</b></h4>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h4><b>{{getSlModelArea1(10)}}</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl98_target}}</b></h2>
                        </center>
                        <center>
                           <h4><b>SL-98</b></h4>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h4><b>{{getSlModelArea1(11)}}</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl102_target}}</b></h2>
                        </center>
                        <center>
                           <h4><b>SL-102</b></h4>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h4><b>{{getSlModelArea1(12)}}</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl105_target}}</b></h2>
                        </center>
                        <center>
                           <h4><b>SL-105</b></h4>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h4><b>{{getSlModelArea1(13)}}</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl103_target}}</b></h2>
                        </center>
                        <center>
                           <h4><b>SL-103</b></h4>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h4><b>{{getSlModelArea1(14)}}</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl104_target}}</b></h2>
                        </center>
                        <center>
                           <h4><b>SL-104</b></h4>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h4><b>{{getSlModelArea1(15)}}</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl106_target}}</b></h2>
                        </center>
                        <center>
                           <h4><b>SL-106</b></h4>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h4><b>{{getSlModelArea1(16)}}</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl107_target}}</b></h2>
                        </center>
                        <center>
                           <h4><b>SL-107</b></h4>
                        </center>
                     </div>    
                  </div><br> --}}
                  {{-- <hr style="border:1px solid black;"> --}}
                  <hr style="border:1px solid black;">
                  <div class="row">
                     <div class="col-lg-2">  
                        <h3><b>Actual</b></h3>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h4><b>{{getSlModelArea1(1)}}</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl88_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl88_actual','machine_no'=>'SL-88','type'=>'actual','area'=>'1','model'=>getSlModelArea1(1)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl88_actual','machine_no'=>'SL-88','type'=>'actual','area'=>'1','model'=>getSlModelArea1(1)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h4><b>SL-88</b></h4>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h4><b>{{getSlModelArea1(2)}}</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl90_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl90_actual','machine_no'=>'SL-90','type'=>'actual','area'=>'1','model'=>getSlModelArea1(2)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl90_actual','machine_no'=>'SL-90','type'=>'actual','area'=>'1','model'=>getSlModelArea1(2)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h4><b>SL-90</b></h4>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h4><b>{{getSlModelArea1(3)}}</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl89_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl89_actual','machine_no'=>'SL-89','type'=>'actual','area'=>'1','model'=>getSlModelArea1(3)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl89_actual','machine_no'=>'SL-89','type'=>'actual','area'=>'1','model'=>getSlModelArea1(3)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h4><b>SL-89</b></h4>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h4><b>{{getSlModelArea1(4)}}</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl93_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl93_actual','machine_no'=>'SL-93','type'=>'actual','area'=>'1','model'=>getSlModelArea1(4)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl93_actual','machine_no'=>'SL-93','type'=>'actual','area'=>'1','model'=>getSlModelArea1(4)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h4><b>SL-93</b></h4>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h4><b>{{getSlModelArea1(5)}}</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl91_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl91_actual','machine_no'=>'SL-91','type'=>'actual','area'=>'1','model'=>getSlModelArea1(5)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl91_actual','machine_no'=>'SL-91','type'=>'actual','area'=>'1','model'=>getSlModelArea1(5)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h4><b>SL-91</b></h4>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h4><b>{{getSlModelArea1(6)}}</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl94_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl94_actual','machine_no'=>'SL-94','type'=>'actual','area'=>'1','model'=>getSlModelArea1(1)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl94_actual','machine_no'=>'SL-94','type'=>'actual','area'=>'1','model'=>getSlModelArea1(1)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h4><b>SL-94</b></h4>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h4><b>{{getSlModelArea1(7)}}</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl92_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl92_actual','machine_no'=>'SL-92','type'=>'actual','area'=>'1','model'=>getSlModelArea1(1)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl92_actual','machine_no'=>'SL-92','type'=>'actual','area'=>'1','model'=>getSlModelArea1(1)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h4><b>SL-92</b></h4>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h4><b>{{getSlModelArea1(8)}}</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl95_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl95_actual','machine_no'=>'SL-95','type'=>'actual','area'=>'1','model'=>getSlModelArea1(1)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl95_actual','machine_no'=>'SL-95','type'=>'actual','area'=>'1','model'=>getSlModelArea1(1)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h4><b>SL-95</b></h4>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h4><b>{{getSlModelArea1(9)}}</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl97_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl97_actual','machine_no'=>'SL-97','type'=>'actual','area'=>'1','model'=>getSlModelArea1(1)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl97_actual','machine_no'=>'SL-97','type'=>'actual','area'=>'1','model'=>getSlModelArea1(1)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h4><b>SL-97</b></h4>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h4><b>{{getSlModelArea1(10)}}</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl98_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl98_actual','machine_no'=>'SL-98','type'=>'actual','area'=>'1','model'=>getSlModelArea1(1)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl98_actual','machine_no'=>'SL-98','type'=>'actual','area'=>'1','model'=>getSlModelArea1(1)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h4><b>SL-98</b></h4>
                        </center>
                     </div>
                     <div class="col-lg-2"></div>
                     <div class="col-lg-1">
                        <center>
                           <h4><b>{{getSlModelArea1(11)}}</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl102_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl102_actual','machine_no'=>'SL-102','type'=>'actual','area'=>'1','model'=>getSlModelArea1(1)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl102_actual','machine_no'=>'SL-102','type'=>'actual','area'=>'1','model'=>getSlModelArea1(1)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h4><b>SL-102</b></h4>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h4><b>{{getSlModelArea1(12)}}</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl105_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl105_actual','machine_no'=>'SL-105','type'=>'actual','area'=>'1','model'=>getSlModelArea1(1)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl105_actual','machine_no'=>'SL-105','type'=>'actual','area'=>'1','model'=>getSlModelArea1(1)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h4><b>SL-105</b></h4>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h4><b>{{getSlModelArea1(13)}}</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl103_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl103_actual','machine_no'=>'SL-103','type'=>'actual','area'=>'1','model'=>getSlModelArea1(1)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl103_actual','machine_no'=>'SL-103','type'=>'actual','area'=>'1','model'=>getSlModelArea1(1)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h4><b>SL-103</b></h4>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h4><b>{{getSlModelArea1(14)}}</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl104_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl104_actual','machine_no'=>'SL-104','type'=>'actual','area'=>'1','model'=>getSlModelArea1(1)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl104_actual','machine_no'=>'SL-104','type'=>'actual','area'=>'1','model'=>getSlModelArea1(1)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h4><b>SL-104</b></h4>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h4><b>{{getSlModelArea1(15)}}</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl106_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl106_actual','machine_no'=>'SL-106','type'=>'actual','area'=>'1','model'=>getSlModelArea1(1)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl106_actual','machine_no'=>'SL-106','type'=>'actual','area'=>'1','model'=>getSlModelArea1(1)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h4><b>SL-106</b></h4>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h4><b>{{getSlModelArea1(16)}}</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl107_actual}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_actual',['col_selector'=>'sl107_actual','machine_no'=>'SL-107','type'=>'actual','area'=>'1','model'=>getSlModelArea1(1)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_actual',['col_selector'=>'sl107_actual','machine_no'=>'SL-107','type'=>'actual','area'=>'1','model'=>getSlModelArea1(1)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                           <h4><b>SL-107</b></h4>
                        </center>
                     </div> 
                  </div><br>
                  <hr style="border:1px solid black;">
                  <div class="row">
                     <div class="col-lg-2">  
                        <h3><b>Testblock</b></h3>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h4><b>SL-88</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl88_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_test_block',['col_selector'=>'sl88_test_block','machine_no'=>'SL-88','type'=>'test block','area'=>'1','model'=>getSlModelArea1(1)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_test_block',['col_selector'=>'sl88_test_block','machine_no'=>'SL-88','type'=>'test block','area'=>'1','model'=>getSlModelArea1(1)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h4><b>SL-90</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl90_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_test_block',['col_selector'=>'sl90_test_block','machine_no'=>'SL-90','type'=>'test block','area'=>'1','model'=>getSlModelArea1(2)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_test_block',['col_selector'=>'sl90_test_block','machine_no'=>'SL-90','type'=>'test block','area'=>'1','model'=>getSlModelArea1(2)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                        </center>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h4><b>SL-89</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl89_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_test_block',['col_selector'=>'sl89_test_block','machine_no'=>'SL-89','type'=>'test block','area'=>'1','model'=>getSlModelArea1(3)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_test_block',['col_selector'=>'sl89_test_block','machine_no'=>'SL-89','type'=>'test block','area'=>'1','model'=>getSlModelArea1(3)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                        </center>
                     </div>  
                     <div class="col-lg-1">
                        <center>
                           <h4><b>SL-93</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl93_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_test_block',['col_selector'=>'sl93_test_block','machine_no'=>'SL-93','type'=>'test block','area'=>'1','model'=>getSlModelArea1(4)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_test_block',['col_selector'=>'sl93_test_block','machine_no'=>'SL-93','type'=>'test block','area'=>'1','model'=>getSlModelArea1(4)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                        </center>
                     </div> 
                     <div class="col-lg-1">
                        <center>
                           <h4><b>SL-91</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl91_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_test_block',['col_selector'=>'sl91_test_block','machine_no'=>'SL-91','type'=>'test block','area'=>'1','model'=>getSlModelArea1(5)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_test_block',['col_selector'=>'sl91_test_block','machine_no'=>'SL-91','type'=>'test block','area'=>'1','model'=>getSlModelArea1(5)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                        </center>
                        <br><br>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h4><b>SL-94</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl94_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_test_block',['col_selector'=>'sl94_test_block','machine_no'=>'SL-94','type'=>'test block','area'=>'1','model'=>getSlModelArea1(5)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_test_block',['col_selector'=>'sl94_test_block','machine_no'=>'SL-94','type'=>'test block','area'=>'1','model'=>getSlModelArea1(5)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                        </center>
                        <br><br>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h4><b>SL-92</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl92_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_test_block',['col_selector'=>'sl92_test_block','machine_no'=>'SL-92','type'=>'test block','area'=>'1','model'=>getSlModelArea1(5)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_test_block',['col_selector'=>'sl92_test_block','machine_no'=>'SL-92','type'=>'test block','area'=>'1','model'=>getSlModelArea1(5)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                        </center>
                        <br><br>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h4><b>SL-95</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl95_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_test_block',['col_selector'=>'sl95_test_block','machine_no'=>'SL-95','type'=>'test block','area'=>'1','model'=>getSlModelArea1(5)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_test_block',['col_selector'=>'sl95_test_block','machine_no'=>'SL-95','type'=>'test block','area'=>'1','model'=>getSlModelArea1(5)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                        </center>
                        <br><br>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h4><b>SL-97</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl97_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_test_block',['col_selector'=>'sl97_test_block','machine_no'=>'SL-97','type'=>'test block','area'=>'1','model'=>getSlModelArea1(5)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_test_block',['col_selector'=>'sl97_test_block','machine_no'=>'SL-97','type'=>'test block','area'=>'1','model'=>getSlModelArea1(5)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                        </center>
                        <br><br>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h4><b>SL-98</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl98_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_test_block',['col_selector'=>'sl98_test_block','machine_no'=>'SL-98','type'=>'test block','area'=>'1','model'=>getSlModelArea1(5)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_test_block',['col_selector'=>'sl98_test_block','machine_no'=>'SL-98','type'=>'test block','area'=>'1','model'=>getSlModelArea1(5)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                        </center>
                        <br><br>
                     </div>
                     <div class="col-lg-2"></div>
                     <div class="col-lg-1">
                        <center>
                           <h4><b>SL-102</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl102_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_test_block',['col_selector'=>'sl102_test_block','machine_no'=>'SL-102','type'=>'test block','area'=>'1','model'=>getSlModelArea1(5)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_test_block',['col_selector'=>'sl102_test_block','machine_no'=>'SL-102','type'=>'test block','area'=>'1','model'=>getSlModelArea1(5)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                        </center>
                        <br><br>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h4><b>SL-105</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl105_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_test_block',['col_selector'=>'sl105_test_block','machine_no'=>'SL-105','type'=>'test block','area'=>'1','model'=>getSlModelArea1(5)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_test_block',['col_selector'=>'sl105_test_block','machine_no'=>'SL-105','type'=>'test block','area'=>'1','model'=>getSlModelArea1(5)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                        </center>
                        <br><br>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h4><b>SL-103</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl103_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_test_block',['col_selector'=>'sl103_test_block','machine_no'=>'SL-103','type'=>'test block','area'=>'1','model'=>getSlModelArea1(5)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_test_block',['col_selector'=>'sl103_test_block','machine_no'=>'SL-103','type'=>'test block','area'=>'1','model'=>getSlModelArea1(5)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                        </center>
                        <br><br>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h4><b>SL-104</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl104_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_test_block',['col_selector'=>'sl104_test_block','machine_no'=>'SL-104','type'=>'test block','area'=>'1','model'=>getSlModelArea1(5)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_test_block',['col_selector'=>'sl104_test_block','machine_no'=>'SL-104','type'=>'test block','area'=>'1','model'=>getSlModelArea1(5)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                        </center>
                        <br><br>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h4><b>SL-106</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl106_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_test_block',['col_selector'=>'sl106_test_block','machine_no'=>'SL-106','type'=>'test block','area'=>'1','model'=>getSlModelArea1(5)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_test_block',['col_selector'=>'sl106_test_block','machine_no'=>'SL-106','type'=>'test block','area'=>'1','model'=>getSlModelArea1(5)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                        </center>
                        <br><br>
                     </div>
                     <div class="col-lg-1">
                        <center>
                           <h4><b>SL-107</b></h4>
                           <h2 style="font-size:400%"><b>{{$data->sl107_test_block}}</b></h2>
                        </center>
                        <center>
                           <a href="{{route('dec_test_block',['col_selector'=>'sl107_test_block','machine_no'=>'SL-107','type'=>'test block','area'=>'1','model'=>getSlModelArea1(5)])}}" class="btn btn-danger btn-sm">
                              <i class="mdi mdi-minus"></i>
                           </a>
                           <a href="{{route('inc_test_block',['col_selector'=>'sl107_test_block','machine_no'=>'SL-107','type'=>'test block','area'=>'1','model'=>getSlModelArea1(5)])}}" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-plus"></i>
                           </a>
                        </center>
                        <br><br>
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
                  </div><br>
               </div>
            </form>
         </div>
      </div>
      @endforeach
   </div>
@endif