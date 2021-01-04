<div class="form-group">
   <div class="row">
      <div class="col-lg-12">
         <div class="card">
            <div class="table-responsive">
               <table class="table table-striped table-bordered" cellspacing="0" width="135%" border="3">
                  <thead>
                     <tr style="text-align:center;">
                     <th style="background-color:#00929e;color:white;"><h4 style="font-size:200%;"><b>M/C#</b></h4></th>
                     <th style="background-color:#00929e;color:white;">
                        <h4 style="font-size:200%;">
                           <a href="{{route('admin.models.area4')}}" class="btn btn-success">
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
                        <td><h4 style="font-size:200%"><b>SL-56</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea4(1) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea4(1)}}
                                 @endif
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl56_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl56_actual) >= intval($data->sl56_target))
                              <b>
                                 {{$data->sl56_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl56_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl56_test_block}}
                              </b>
                           </h4>
                        </td>
                     </tr>   
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-136</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea4(2) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea4(2)}}
                                 @endif
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl136_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl136_actual) >= intval($data->sl136_target))
                              <b>
                                 {{$data->sl136_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl136_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl136_test_block}}
                              </b>
                           </h4>
                        </td>
                     </tr> 
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-63</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea4(3) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea4(3)}}
                                 @endif
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl63_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl63_actual) >= intval($data->sl63_target))
                              <b>
                                 {{$data->sl63_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl63_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl63_test_block}}
                              </b>
                           </h4>
                        </td>
                     </tr>
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-135</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea4(4) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea4(4)}}
                                 @endif
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl135_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl135_actual) >= intval($data->sl135_target))
                              <b>
                                 {{$data->sl135_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl135_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl135_test_block}}
                              </b>
                           </h4>
                        </td>
                     </tr> 
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-116</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea4(5) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea4(5)}}
                                    
                                 @endif
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl116_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl116_actual) >= intval($data->sl116_target))
                              <b>
                                 {{$data->sl116_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl116_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl116_test_block}}
                              </b>
                           </h4>
                        </td>
                     </tr> 
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-134</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea4(6) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea4(6)}}
                                 @endif
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl134_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl134_actual) >= intval($data->sl134_target))
                              <b>
                                 {{$data->sl134_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl134_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl134_test_block}}
                              </b>
                           </h4>
                        </td>
                     </tr>   
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-120</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea4(7) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea4(7)}}
                                 @endif
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl120_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl120_actual) >= intval($data->sl120_target))
                              <b>
                                 {{$data->sl120_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl120_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl120_test_block}}
                              </b>
                           </h4>
                        </td>
                     </tr> 
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-133</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea4(8) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea4(8)}}
                                 @endif
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl133_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl133_actual) >= intval($data->sl133_target))
                              <b>
                                 {{$data->sl133_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl133_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl133_test_block}}
                              </b>
                           </h4>
                        </td>
                     </tr>
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-119</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea4(9) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea4(9)}}
                                 @endif
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl119_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl119_actual) >= intval($data->sl119_target))
                              <b>
                                 {{$data->sl119_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl119_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl119_test_block}}
                              </b>
                           </h4>
                        </td>
                     </tr> 
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-132</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea4(10) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea4(10)}}
                                    
                                 @endif
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl132_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl132_actual) >= intval($data->sl132_target))
                              <b>
                                 {{$data->sl132_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl132_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl132_test_block}}
                              </b>
                           </h4>
                        </td>
                     </tr> 
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-131</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea4(11) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea4(11)}}
                                    
                                 @endif
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl131_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl131_actual) >= intval($data->sl131_target))
                              <b>
                                 {{$data->sl131_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl131_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl131_test_block}}
                              </b>
                           </h4>
                        </td>
                     </tr> 
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-137</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea4(12) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea4(12)}}
                                    
                                 @endif
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl137_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl137_actual) >= intval($data->sl137_target))
                              <b>
                                 {{$data->sl137_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl137_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl137_test_block}}
                              </b>
                           </h4>
                        </td>
                     </tr> 
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-138</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea4(13) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea4(13)}}
                                    
                                 @endif
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl138_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl138_actual) >= intval($data->sl138_target))
                              <b>
                                 {{$data->sl138_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl138_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl138_test_block}}
                              </b>
                           </h4>
                        </td>
                     </tr> 
                     <tr style="text-align:center;">
                        <td><h4 style="font-size:200%"><b>SL-192</b></h4></td>
                        <td>
                           <h4 style="font-size:200%">
                              <b>
                                 @if (getSlModelArea4(14) == null)
                                    N/A
                                 @else 
                                    {{getSlModelArea4(14)}}
                                    
                                 @endif
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl192_target}}
                              </b>
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              @if (intval($data->sl192_actual) >= intval($data->sl192_target))
                              <b>
                                 {{$data->sl192_actual}}
                              </b>
                              @else
                              <b style="color:#ff5b5b;">
                                 {{$data->sl192_actual}}
                              </b>
                              @endif
                           </h4>
                        </td>
                        <td>
                           <h4 style="font-size:500%">
                              <b>
                                 {{$data->sl192_test_block}}
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
