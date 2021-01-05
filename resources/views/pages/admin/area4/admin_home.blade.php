@extends('layouts.slicing-admin-layout')
@section('content')
    <div class="content-page">
      <div class="content">
        <div class="container-fluid">
            @if (getLatestArea4() == '[]')
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
                           {{-- <a href="{{route('admin.save_record.area4',$data->id)}}" class="btn btn-danger"><i class="mdi mdi-content-save"></i> Save Record</a> --}}
                           <a href="{{route('cache.clear')}}" class="btn" style="background-color:#034ea2;color:white;"><i class="mdi mdi-broom"></i> Clear Cache</a>
                        </div>
                        <div class="form-group">
                           <form action="{{route('admin.update_plan.area4')}}" method="POST">
                              @csrf
                              <input type="hidden" name="data_id" value="{{$data->id}}">
                              <hr style="border:1px solid black;">
                              <div class="row">
                                 <div class="col-lg-2">
                                    <h3><b>Plan</b></h3>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea4(1)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl56_target" value="{{$data->sl56_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-56</b></h4>
                                    </center>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea4(2)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl136_target" value="{{$data->sl136_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-136</b></h4>
                                    </center>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea4(3)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl63_target" value="{{$data->sl63_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-63</b></h4>
                                    </center>
                                 </div>  
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea4(4)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl135_target" value="{{$data->sl135_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-135</b></h4>
                                    </center>
                                 </div> 
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea4(5)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl116_target" value="{{$data->sl116_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-116</b></h4>
                                    </center>
                                 </div> 
                              </div>
                              <div class="row">
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea4(6)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl134_target" value="{{$data->sl134_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-134</b></h4>
                                    </center>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea4(7)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl120_target" value="{{$data->sl120_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-120</b></h4>
                                    </center>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea4(8)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl133_target" value="{{$data->sl133_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-133</b></h4>
                                    </center>
                                 </div>  
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea4(9)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl119_target" value="{{$data->sl119_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-119</b></h4>
                                    </center>
                                 </div> 
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea4(10)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl132_target" value="{{$data->sl132_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-132</b></h4>
                                    </center>
                                 </div> 
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea4(11)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl131_target" value="{{$data->sl131_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-131</b></h4>
                                    </center>
                                 </div> 
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea4(12)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl137_target" value="{{$data->sl137_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-137</b></h4>
                                    </center>
                                 </div> 
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea4(13)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl138_target" value="{{$data->sl138_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-138</b></h4>
                                    </center>
                                 </div> 
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea4(14)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:250%;font-weight:bold;color:#212529;" name="sl192_target" value="{{$data->sl192_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-192</b></h4>
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
                                                (Area 4 - {{$data->shift}} Shift / {{Carbon\Carbon::parse($data->date_generated)->format('M d, Y')}})
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
                                                (Area 4 - {{$data->shift}} Shift / {{Carbon\Carbon::parse($data->date_generated)->format('M d, Y')}})
                                             </b>
                                          </h4>
                                       </center>
                                    </div>
                                 </div>
                              @endif
                                 {{AsyncWidget::SlicingAdminDataArea4()}}
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

