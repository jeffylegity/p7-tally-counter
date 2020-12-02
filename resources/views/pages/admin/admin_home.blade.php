@extends('layouts.slicing-admin-layout')
@section('content')
    <div class="content-page">
      <div class="content">
        <div class="container-fluid">
            @if (getLatestArea1() == '[]')
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
                           {{-- <a href="{{route('admin.save_record.area1',$data->id)}}" class="btn btn-danger"><i class="mdi mdi-content-save"></i> Save Record</a> --}}
                           <a href="{{route('cache.clear')}}" class="btn" style="background-color:#034ea2;color:white;"><i class="mdi mdi-broom"></i> Optimize</a>
                        </div>
                        <div class="form-group">
                           <hr style="border:1px solid black;">
                           <form action="{{route('admin.update_plan.area1')}}" method="POST">
                              @csrf
                              <input type="hidden" name="data_id" value="{{$data->id}}">
                              <div class="row">
                                 <div class="col-lg-2">
                                    <h3><b>Plan</b></h3>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea1(1)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:300%;font-weight:bold;color:#212529;" name="sl88_target" value="{{$data->sl88_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-88</b></h4>
                                    </center>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea1(2)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:300%;font-weight:bold;color:#212529;" name="sl90_target" value="{{$data->sl90_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-90</b></h4>
                                    </center>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea1(3)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:300%;font-weight:bold;color:#212529;" name="sl89_target" value="{{$data->sl89_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-89</b></h4>
                                    </center>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea1(4)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:300%;font-weight:bold;color:#212529;" name="sl93_target" value="{{$data->sl93_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-93</b></h4>
                                    </center>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea1(5)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:300%;font-weight:bold;color:#212529;" name="sl91_target" value="{{$data->sl91_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-91</b></h4>
                                    </center>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea1(6)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:300%;font-weight:bold;color:#212529;" name="sl94_target" value="{{$data->sl94_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-94</b></h4>
                                    </center>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea1(7)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:300%;font-weight:bold;color:#212529;" name="sl92_target" value="{{$data->sl92_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-92</b></h4>
                                    </center>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea1(8)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:300%;font-weight:bold;color:#212529;" name="sl95_target" value="{{$data->sl95_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-95</b></h4>
                                    </center>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea1(9)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:300%;font-weight:bold;color:#212529;" name="sl97_target" value="{{$data->sl97_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-97</b></h4>
                                    </center>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea1(10)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:300%;font-weight:bold;color:#212529;" name="sl98_target" value="{{$data->sl98_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-98</b></h4>
                                    </center>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea1(11)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:300%;font-weight:bold;color:#212529;" name="sl102_target" value="{{$data->sl102_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-102</b></h4>
                                    </center>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea1(12)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:300%;font-weight:bold;color:#212529;" name="sl105_target" value="{{$data->sl105_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-105</b></h4>
                                    </center>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea1(13)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:300%;font-weight:bold;color:#212529;" name="sl103_target" value="{{$data->sl103_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-103</b></h4>
                                    </center>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea1(14)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:300%;font-weight:bold;color:#212529;" name="sl104_target" value="{{$data->sl104_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-104</b></h4>
                                    </center>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea1(15)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:300%;font-weight:bold;color:#212529;" name="sl106_target" value="{{$data->sl106_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-106</b></h4>
                                    </center>
                                 </div>
                                 <div class="col-lg-2">
                                    <center>
                                       <h4><b>{{getSlModelArea1(16)}}</b></h4>
                                       <input type="text" class="form-control" style="text-align:center;font-size:300%;font-weight:bold;color:#212529;" name="sl107_target" value="{{$data->sl107_target}}">
                                    </center>
                                    <center>
                                       <h4><b>SL-107</b></h4>
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
                                                (Area 1 - {{$data->shift}} Shift / {{Carbon\Carbon::parse($data->date_generated)->format('M d, Y')}})
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
                                                (Area 1 - {{$data->shift}} Shift / {{Carbon\Carbon::parse($data->date_generated)->format('M d, Y')}})
                                             </b>
                                          </h4>
                                       </center>
                                    </div>
                                 </div>
                              @endif
                                 {{AsyncWidget::SlicingAdminDataArea1()}}
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

