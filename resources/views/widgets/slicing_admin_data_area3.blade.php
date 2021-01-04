<div class="form-group">
   <div class="row">
      <div class="col-lg-12">
         <div class="card">
            <div class="table-responsive">
               <table class="table table-striped table-bordered" cellspacing="0" width="100%" border="3">
                  <thead>
                     <tr style="text-align:center;">
                     <th style="background-color:#00929e;color:white;"><h4 style="font-size:200%;"><b>M/C#</b></h4></th>
                     <th style="background-color:#00929e;color:white;">
                        <h4 style="font-size:200%;">
                           <a href="{{route('admin.models.area3')}}" class="btn btn-success">
                              <b>
                                 <i class="mdi mdi-pencil"></i>
                                 Model
                              </b>
                           </a>
                        </h4>
                     </th>
                     <th style="background-color:#00929e;color:white;"><h4 style="font-size:200%;"><b>Plan</b></h4></th>
                     <th style="background-color:#00929e;color:white;"><h4 style="font-size:200%;"><b>Actual   </b></h4></th>
                     <th style="background-color:#00929e;color:white;"><h4 style="font-size:200%;"><b>Testblock</b></h4></th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($record as $data)
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-96</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea3(1) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea3(1)}}
                                 @endif
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl96_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl96_actual) >= intval($data->sl96_target))
                              <b>
                                 {{$data->sl96_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl96_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl96_test_block}}
                              </b>
                           </h4>
                        </td>
                     </tr>   
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-101</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea3(2) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea3(2)}}
                                 @endif
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl101_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl101_actual) >= intval($data->sl101_target))
                              <b>
                                 {{$data->sl101_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl101_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl101_test_block}}
                              </b>
                           </h4>
                        </td>
                     </tr> 
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-84</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea3(3) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea3(3)}}
                                 @endif
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl84_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl84_actual) >= intval($data->sl84_target))
                              <b>
                                 {{$data->sl84_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl84_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl84_test_block}}
                              </b>
                           </h4>
                        </td>
                     </tr>
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-100</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea3(4) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea3(4)}}
                                 @endif
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl100_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl100_actual) >= intval($data->sl100_target))
                              <b>
                                 {{$data->sl100_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl100_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl100_test_block}}
                              </b>
                           </h4>
                        </td>
                     </tr> 
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-64</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea3(5) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea3(5)}}
                                    
                                 @endif
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl64_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl64_actual) >= intval($data->sl64_target))
                              <b>
                                 {{$data->sl64_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl64_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl64_test_block}}
                              </b>
                           </h4>
                        </td>
                     </tr> 
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-59</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea3(6) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea3(6)}}
                                 @endif
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl59_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl59_actual) >= intval($data->sl59_target))
                              <b>
                                 {{$data->sl59_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl59_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl59_test_block}}
                              </b>
                           </h4>
                        </td>
                     </tr>   
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-57</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea3(7) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea3(7)}}
                                 @endif
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl57_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl57_actual) >= intval($data->sl57_target))
                              <b>
                                 {{$data->sl57_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl57_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl57_test_block}}
                              </b>
                           </h4>
                        </td>
                     </tr> 
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-58</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea3(8) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea3(8)}}
                                 @endif
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl58_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl58_actual) >= intval($data->sl58_target))
                              <b>
                                 {{$data->sl58_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl58_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl58_test_block}}
                              </b>
                           </h4>
                        </td>
                     </tr>
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-99</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea3(9) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea3(9)}}
                                 @endif
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl99_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl99_actual) >= intval($data->sl99_target))
                              <b>
                                 {{$data->sl99_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl99_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl99_test_block}}
                              </b>
                           </h4>
                        </td>
                     </tr> 
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-111</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea3(10) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea3(10)}}
                                    
                                 @endif
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl111_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl111_actual) >= intval($data->sl111_target))
                              <b>
                                 {{$data->sl111_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl111_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl111_test_block}}
                              </b>
                           </h4>
                        </td>
                     </tr> 
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-109</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea3(11) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea3(11)}}
                                    
                                 @endif
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl109_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl109_actual) >= intval($data->sl109_target))
                              <b>
                                 {{$data->sl109_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl109_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl109_test_block}}
                              </b>
                           </h4>
                        </td>
                     </tr> 
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-112</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea3(12) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea3(12)}}
                                    
                                 @endif
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl112_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl112_actual) >= intval($data->sl112_target))
                              <b>
                                 {{$data->sl112_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl112_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl112_test_block}}
                              </b>
                           </h4>
                        </td>
                     </tr> 
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-110</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea3(13) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea3(13)}}
                                    
                                 @endif
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl110_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl110_actual) >= intval($data->sl110_target))
                              <b>
                                 {{$data->sl110_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl110_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl110_test_block}}
                              </b>
                           </h4>
                        </td>
                     </tr> 
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-143</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea3(14) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea3(14)}}
                                    
                                 @endif
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl143_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl143_actual) >= intval($data->sl143_target))
                              <b>
                                 {{$data->sl143_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl143_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl143_test_block}}
                              </b>
                           </h4>
                        </td>
                     </tr> 
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-108</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea3(15) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea3(15)}}
                                    
                                 @endif
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl108_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl108_actual) >= intval($data->sl108_target))
                              <b>
                                 {{$data->sl108_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl108_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl108_test_block}}
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
