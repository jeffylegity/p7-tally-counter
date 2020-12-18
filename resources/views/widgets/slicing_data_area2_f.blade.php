<br><br><br>
@if (getFshiftLatestArea2() == '[]')
<div class="card-header" style="background-color:#ff5b5b;color:white;">
   <center>
      <h4 style="font-size:250%">
         <b>
            Data not yet generated
         </b>
      </h4>
   </center>
</div>
@else
<div class="card-header" style="background-color:#ff5b5b;color:white;">
   <center>
      <h4 style="font-size:200%">
         <b>
            @foreach($eShiftdate = getFshiftLatestArea2(); as $shift)
             (Area 2 - F Shift / {{Carbon\Carbon::parse($shift->date_generated)->format('M d, Y')}})
            @endforeach
         </b>
      </h4>
   </center>
</div>
   <div class="form-group">
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="table-responsive">
                  <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                      <tr style="text-align:center;">
                        <th style="background-color:#00929e;color:white;"><h4 style="font-size:200%;"><b>MACH#</b></h4></th>
                        <th style="background-color:#00929e;color:white;"><h4 style="font-size:200%;"><b>Model</b></h4></th>
                        <th style="background-color:#00929e;color:white;"><h4 style="font-size:200%;"><b>Plan</b></h4></th>
                        <th style="background-color:#00929e;color:white;"><h4 style="font-size:200%;"><b>Actual   </b></h4></th>
                        <th style="background-color:#00929e;color:white;"><h4 style="font-size:200%;"><b>Testblock</b></h4></th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach ($record as $data)
                     <tr style="text-align:center;border-bottom:2px solid black;">
                        <td><h4 style="font-size:200%"><b>SL-52</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 {{getSlModelArea2(1)}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl52_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl52_actual) >= intval($data->sl52_target))
                              <b>
                                 {{$data->sl52_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl52_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl52_test_block}}
                              </b>
                           </h4>
                        </td>
                     </tr>   
                     <tr style="text-align:center;border-bottom:2px solid black;">
                        <td><h4 style="font-size:200%"><b>SL-55</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 {{getSlModelArea2(2)}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl55_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl55_actual) >= intval($data->sl55_target))
                              <b>
                                 {{$data->sl55_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl55_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl55_test_block}}
                              </b>
                           </h4>
                        </td>
                     </tr> 
                     <tr style="text-align:center;border-bottom:2px solid black;">
                        <td><h4 style="font-size:200%"><b>SL-53</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 {{getSlModelArea2(3)}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl53_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl53_actual) >= intval($data->sl53_target))
                              <b>
                                 {{$data->sl53_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl53_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl53_test_block}}
                              </b>
                           </h4>
                        </td>
                     </tr>
                     <tr style="text-align:center;border-bottom:2px solid black;">
                        <td><h4 style="font-size:200%"><b>SL-60</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 {{getSlModelArea2(4)}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl60_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl60_actual) >= intval($data->sl60_target))
                              <b>
                                 {{$data->sl60_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl60_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl60_test_block}}
                              </b>
                           </h4>
                        </td>
                     </tr> 
                     <tr style="text-align:center;border-bottom:2px solid black;">
                        <td><h4 style="font-size:200%"><b>SL-114</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 {{getSlModelArea2(5)}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl114_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl114_actual) >= intval($data->sl114_target))
                              <b>
                                 {{$data->sl114_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl114_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl114_test_block}}
                              </b>
                           </h4>
                        </td>
                     </tr>  
                     <tr style="text-align:center;border-bottom:2px solid black;">
                        <td><h4 style="font-size:200%"><b>SL-113</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 {{getSlModelArea2(6)}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl113_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl113_actual) >= intval($data->sl113_target))
                              <b>
                                 {{$data->sl113_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl113_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl113_test_block}}
                              </b>
                           </h4>
                        </td>
                     </tr>   
                     <tr style="text-align:center;border-bottom:2px solid black;">
                        <td><h4 style="font-size:200%"><b>SL-117</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 {{getSlModelArea2(7)}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl117_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl117_actual) >= intval($data->sl117_target))
                              <b>
                                 {{$data->sl117_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl117_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl117_test_block}}
                              </b>
                           </h4>
                        </td>
                     </tr> 
                     <tr style="text-align:center;border-bottom:2px solid black;">
                        <td><h4 style="font-size:200%"><b>SL-122</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 {{getSlModelArea2(8)}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl122_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl122_actual) >= intval($data->sl122_target))
                              <b>
                                 {{$data->sl122_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl122_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl122_test_block}}
                              </b>
                           </h4>
                        </td>
                     </tr>
                     <tr style="text-align:center;border-bottom:2px solid black;">
                        <td><h4 style="font-size:200%"><b>SL-123</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 {{getSlModelArea2(9)}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl123_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl123_actual) >= intval($data->sl123_target))
                              <b>
                                 {{$data->sl123_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl123_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl123_test_block}}
                              </b>
                           </h4>
                        </td>
                     </tr> 
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-121</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 {{getSlModelArea2(10)}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl121_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl121_actual) >= intval($data->sl121_target))
                              <b>
                                 {{$data->sl121_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl121_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl121_test_block}}
                              </b>
                           </h4>
                        </td>
                     </tr>  
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-141</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 {{getSlModelArea2(11)}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl141_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl141_actual) >= intval($data->sl141_target))
                              <b>
                                 {{$data->sl141_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl141_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl141_test_block}}
                              </b>
                           </h4>
                        </td>
                     </tr>  
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-139</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 {{getSlModelArea2(12)}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl139_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl139_actual) >= intval($data->sl139_target))
                              <b>
                                 {{$data->sl139_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl139_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl139_test_block}}
                              </b>
                           </h4>
                        </td>
                     </tr>  
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-142</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 {{getSlModelArea2(13)}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl142_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl142_actual) >= intval($data->sl142_target))
                              <b>
                                 {{$data->sl142_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl142_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl142_test_block}}
                              </b>
                           </h4>
                        </td>
                     </tr>  
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-140</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 {{getSlModelArea2(14)}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl140_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl140_actual) >= intval($data->sl140_target))
                              <b>
                                 {{$data->sl140_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl140_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl140_test_block}}
                              </b>
                           </h4>
                        </td>
                     </tr>  
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-187</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 {{getSlModelArea2(15)}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl187_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl187_actual) >= intval($data->sl187_target))
                              <b>
                                 {{$data->sl187_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl187_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl187_test_block}}
                              </b>
                           </h4>
                        </td>
                     </tr>  
                     @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
         </div>
      </div>
   </div>
   @endif
