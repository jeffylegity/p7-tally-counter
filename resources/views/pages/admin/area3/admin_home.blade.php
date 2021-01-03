@extends('layouts.slicing-admin-layout')
@section('content')
    <div class="content-page">
      <div class="content">
        <div class="container-fluid">
            @if (getLatestArea3() == '[]')
               <div class="col-xl-12">
                  <div class="alert alert-danger" style="background-color:#ff5b5b;color:white;">
                     Data not yet generated
                  </div>
               </div>
            @else
               @foreach ($slicing_data as $data)
                  <div class="row">
                  @if ($data->data_stored == 0)
                  <div class="col-xl-12">
                     <div class="card-box">
                        <div>
                           {{-- <a href="{{route('admin.save_record.area3',$data->id)}}" class="btn btn-danger"><i class="mdi mdi-content-save"></i> Save Record</a> --}}
                           <a href="{{route('cache.clear')}}" class="btn" style="background-color:#034ea2;color:white;"><i class="mdi mdi-broom"></i> Clear Cache</a>
                        </div>
                        <div class="form-group">
                           <form action="{{route('admin.update_plan.area3')}}" method="POST">
                              @csrf
                              <input type="hidden" name="data_id" value="{{$data->id}}">
                              <div class="row">
                                 <div class="col-lg-2">
                                    <h3><b>Plan</b></h3>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea3(1)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl96_target" value="{{$data->sl96_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-96</b></h4>
                                    </center>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea3(2)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl101_target" value="{{$data->sl101_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-101</b></h4>
                                    </center>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea3(3)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl84_target" value="{{$data->sl84_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-84</b></h4>
                                    </center>
                                 </div>  
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea3(4)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl100_target" value="{{$data->sl100_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-100</b></h4>
                                    </center>
                                 </div> 
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea3(5)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl64_target" value="{{$data->sl64_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-64</b></h4>
                                    </center>
                                 </div> 
                              </div>
                              <div class="row">
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea3(6)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl59_target" value="{{$data->sl59_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-59</b></h4>
                                    </center>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea3(7)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl57_target" value="{{$data->sl57_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-57</b></h4>
                                    </center>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea3(8)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl58_target" value="{{$data->sl58_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-58</b></h4>
                                    </center>
                                 </div>  
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea3(9)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl99_target" value="{{$data->sl99_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-99</b></h4>
                                    </center>
                                 </div> 
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea3(10)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl111_target" value="{{$data->sl111_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-111</b></h4>
                                    </center>
                                 </div> 
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea3(11)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl109_target" value="{{$data->sl109_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-109</b></h4>
                                    </center>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea3(12)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl112_target" value="{{$data->sl112_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-112</b></h4>
                                    </center>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea3(13)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl110_target" value="{{$data->sl110_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-110</b></h4>
                                    </center>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea3(14)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl143_target" value="{{$data->sl143_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-143</b></h4>
                                    </center>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea3(15)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl108_target" value="{{$data->sl108_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-108</b></h4>
                                    </center>
                                 </div>
                                 <div class="col-lg-12" style="display:flex;align-items:center;justify-content:center;">
                                    <button type="submit" class="btn btn-success"><i class="mdi mdi-pencil"></i> Update</button>
                                 </div>
                              </div>
                           </form><br>
                           <div class="row">
                              @if ($data->shift == 'F')
                                 <div class="col-lg-12">
                                    <div class="card-header" style="background-color:#ff5b5b;color:white;">
                                       <center>
                                          <h4 style="font-size:200%">
                                             <b>
                                                (Area 2 - {{$data->shift}} Shift / {{Carbon\Carbon::parse($data->date_generated)->format('M d, Y')}})
                                             </b>
                                          </h4>
                                       </center>
                                    </div>
                                 </div>
                              @else
                                 <div class="col-lg-12">
                                    <div class="card-header" style="background-color:#034ea2;color:white;">
                                       <center>
                                          <h4 style="font-size:200%">
                                             <b>
                                                (Area 2 - {{$data->shift}} Shift / {{Carbon\Carbon::parse($data->date_generated)->format('M d, Y')}})
                                             </b>
                                          </h4>
                                       </center>
                                    </div>
                                 </div>
                              @endif
                                 {{AsyncWidget::SlicingAdminDataArea3()}}
                              <br>
                           </div>
                        </div>
                     </div>
                  </div>
                  @else
                  <div class="col-xl-12">
                     <div class="alert alert-danger" style="background-color:#dc3545;color:white;">
                        Data not yet generated
                     </div>
                  </div>
                  @endif
                  </div>
               @endforeach
            @endif
      </div>
   </div>
@endsection

