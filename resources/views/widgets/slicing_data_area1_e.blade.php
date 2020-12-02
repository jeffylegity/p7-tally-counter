<br>
@if (getEshiftLatestArea1() == '[]')
<div class="card-header" style="background-color:#ff5b5b;color:white;">
   <center>
      <h4 style="font-size:250%;white-space:nowrap;">
         <b>
            Data not yet generated
         </b>
      </h4>
   </center>
</div>
@else
<div class="card-header" style="background-color:#034ea2;color:white;">
   <center>
      <h4 style="font-size:200%;white-space:nowrap;">
         <b>
            @foreach($eShiftdate = getEshiftLatestArea1(); as $shift)
             (Area 1 - {{$shift->shift}} Shift / {{Carbon\Carbon::parse($shift->date_generated)->format('M d, Y')}})
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
                  <table class="table-striped" width="100%" style="height:600px;">
                    <thead>
                      <tr style="text-align:center;">
                        <th style="background-color:#00929e;color:white;"><h4 style="font-size:200%;white-space:nowrap;"><b>MACH#</b></h4></th>
                        <th style="background-color:#00929e;color:white;"><h4 style="font-size:200%;white-space:nowrap;"><b>Model</b></h4></th>
                        <th style="background-color:#00929e;color:white;"><h4 style="font-size:200%;white-space:nowrap;"><b>Plan</b></h4></th>
                        <th style="background-color:#00929e;color:white;"><h4 style="font-size:200%;white-space:nowrap;"><b>Actual   </b></h4></th>
                        <th style="background-color:#00929e;color:white;"><h4 style="font-size:200%;white-space:nowrap;"><b>Testblock</b></h4></th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($record as $data)
                        <tr style="text-align:center;">
                           <td><h4 style="font-size:200%;white-space:nowrap;"><b>SL-88</b></h4></td>
                           <td>
                              <h4 style="font-size:200%;white-space:nowrap;">
                                 <b>
                                    {{getSlModelArea1(1)}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{$data->sl88_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 @if (intval($data->sl88_actual) >= intval($data->sl88_target))
                                 <b>
                                    {{$data->sl88_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl88_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{$data->sl88_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr>   
                        <tr style="text-align:center;">
                           <td><h4 style="font-size:200%;white-space:nowrap;"><b>SL-90</b></h4></td>
                           <td>
                              <h4 style="font-size:200%;white-space:nowrap;">
                                 <b>
                                    {{getSlModelArea1(2)}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{$data->sl90_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 @if (intval($data->sl90_actual) >= intval($data->sl90_target))
                                 <b>
                                    {{$data->sl90_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl90_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{$data->sl90_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr> 
                        <tr style="text-align:center;">
                           <td><h4 style="font-size:200%;white-space:nowrap;"><b>SL-89</b></h4></td>
                           <td>
                              <h4 style="font-size:200%;white-space:nowrap;">
                                 <b>
                                    {{getSlModelArea1(3)}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{$data->sl89_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 @if (intval($data->sl89_actual) >= intval($data->sl89_target))
                                 <b>
                                    {{$data->sl89_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl89_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{$data->sl89_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr>
                        <tr style="text-align:center;">
                           <td><h4 style="font-size:200%;white-space:nowrap;"><b>SL-93</b></h4></td>
                           <td>
                              <h4 style="font-size:200%;white-space:nowrap;">
                                 <b>
                                    {{getSlModelArea1(4)}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{$data->sl93_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 @if (intval($data->sl93_actual) >= intval($data->sl93_target))
                                 <b>
                                    {{$data->sl93_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl93_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{$data->sl93_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr> 
                        <tr style="text-align:center;">
                           <td><h4 style="font-size:200%;white-space:nowrap;"><b>SL-91</b></h4></td>
                           <td>
                              <h4 style="font-size:200%;white-space:nowrap;">
                                 <b>
                                    {{getSlModelArea1(5)}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{$data->sl91_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 @if (intval($data->sl91_actual) >= intval($data->sl91_target))
                                 <b>
                                    {{$data->sl91_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl91_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{$data->sl91_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr>
                        <tr style="text-align:center;">
                           <td><h4 style="font-size:200%;white-space:nowrap;"><b>SL-94</b></h4></td>
                           <td>
                              <h4 style="font-size:200%;white-space:nowrap;">
                                 <b>
                                    {{getSlModelArea1(6)}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{$data->sl94_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 @if (intval($data->sl94_actual) >= intval($data->sl94_target))
                                 <b>
                                    {{$data->sl94_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl94_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{$data->sl94_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr>  
                        <tr style="text-align:center;">
                           <td><h4 style="font-size:200%;white-space:nowrap;"><b>SL-92</b></h4></td>
                           <td>
                              <h4 style="font-size:200%;white-space:nowrap;">
                                 <b>
                                    {{getSlModelArea1(7)}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{$data->sl92_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 @if (intval($data->sl92_actual) >= intval($data->sl92_target))
                                 <b>
                                    {{$data->sl92_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl92_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{$data->sl92_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr>  
                        <tr style="text-align:center;">
                           <td><h4 style="font-size:200%;white-space:nowrap;"><b>SL-95</b></h4></td>
                           <td>
                              <h4 style="font-size:200%;white-space:nowrap;">
                                 <b>
                                    {{getSlModelArea1(8)}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{$data->sl95_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 @if (intval($data->sl95_actual) >= intval($data->sl95_target))
                                 <b>
                                    {{$data->sl95_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl95_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{$data->sl95_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr>  
                        <tr style="text-align:center;">
                           <td><h4 style="font-size:200%;white-space:nowrap;"><b>SL-97</b></h4></td>
                           <td>
                              <h4 style="font-size:200%;white-space:nowrap;">
                                 <b>
                                    {{getSlModelArea1(9)}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{$data->sl97_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 @if (intval($data->sl97_actual) >= intval($data->sl97_target))
                                 <b>
                                    {{$data->sl97_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl97_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{$data->sl97_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr>  
                        <tr style="text-align:center;">
                           <td><h4 style="font-size:200%;white-space:nowrap;"><b>SL-98</b></h4></td>
                           <td>
                              <h4 style="font-size:200%;white-space:nowrap;">
                                 <b>
                                    {{getSlModelArea1(10)}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{$data->sl98_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 @if (intval($data->sl98_actual) >= intval($data->sl98_target))
                                 <b>
                                    {{$data->sl98_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl98_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{$data->sl98_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr>  
                        <tr style="text-align:center;">
                           <td><h4 style="font-size:200%;white-space:nowrap;"><b>SL-102</b></h4></td>
                           <td>
                              <h4 style="font-size:200%;white-space:nowrap;">
                                 <b>
                                    {{getSlModelArea1(11)}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{$data->sl102_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 @if (intval($data->sl102_actual) >= intval($data->sl102_target))
                                 <b>
                                    {{$data->sl102_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl102_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{$data->sl102_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr>  
                        <tr style="text-align:center;">
                           <td><h4 style="font-size:200%;white-space:nowrap;"><b>SL-105</b></h4></td>
                           <td>
                              <h4 style="font-size:200%;white-space:nowrap;">
                                 <b>
                                    {{getSlModelArea1(12)}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{$data->sl105_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 @if (intval($data->sl105_actual) >= intval($data->sl105_target))
                                 <b>
                                    {{$data->sl105_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl105_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{$data->sl105_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr>  
                        <tr style="text-align:center;">
                           <td><h4 style="font-size:200%;white-space:nowrap;"><b>SL-103</b></h4></td>
                           <td>
                              <h4 style="font-size:200%;white-space:nowrap;">
                                 <b>
                                    {{getSlModelArea1(13)}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{$data->sl103_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 @if (intval($data->sl103_actual) >= intval($data->sl103_target))
                                 <b>
                                    {{$data->sl103_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl103_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{$data->sl103_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr>  
                        <tr style="text-align:center;">
                           <td><h4 style="font-size:200%;white-space:nowrap;"><b>SL-104</b></h4></td>
                           <td>
                              <h4 style="font-size:200%;white-space:nowrap;">
                                 <b>
                                    {{getSlModelArea1(14)}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{$data->sl104_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 @if (intval($data->sl104_actual) >= intval($data->sl104_target))
                                 <b>
                                    {{$data->sl104_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl104_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{$data->sl104_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr>  
                        <tr style="text-align:center;">
                           <td><h4 style="font-size:200%;white-space:nowrap;"><b>SL-106</b></h4></td>
                           <td>
                              <h4 style="font-size:200%;white-space:nowrap;">
                                 <b>
                                    {{getSlModelArea1(15)}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{$data->sl106_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 @if (intval($data->sl106_actual) >= intval($data->sl106_target))
                                 <b>
                                    {{$data->sl106_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl106_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{$data->sl106_test_block}}
                                 </b>
                              </h4>
                           </td>
                        </tr>  
                        <tr style="text-align:center;">
                           <td><h4 style="font-size:200%;white-space:nowrap;"><b>SL-107</b></h4></td>
                           <td>
                              <h4 style="font-size:200%;white-space:nowrap;">
                                 <b>
                                    {{getSlModelArea1(16)}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{$data->sl107_target}}
                                 </b>
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 @if (intval($data->sl107_actual) >= intval($data->sl107_target))
                                 <b>
                                    {{$data->sl107_actual}}
                                 </b>
                                 @else
                                 <b style="color:#ff5b5b;">
                                    {{$data->sl107_actual}}
                                 </b>
                                 @endif
                              </h4>
                           </td>
                           <td>
                              <h4 style="font-size:200%">
                                 <b>
                                    {{$data->sl107_test_block}}
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