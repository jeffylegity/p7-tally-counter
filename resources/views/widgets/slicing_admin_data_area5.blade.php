<div class="form-group">
    <div class="row">
       <div class="col-lg-12">
          <div class="card">
             <div class="table-responsive">
                <table class="table table-striped table-bordered" cellspacing="0" width="149%" border="3">
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
                         <td><h4 style="font-size:200%"><b>SL-144</b></h4></td>
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
                                  {{$data->sl144_target}}
                               </b>
                            </h4>
                         </td>
                         <td>
                            <h4 style="font-size:500%">
                               @if (intval($data->sl144_actual) >= intval($data->sl144_target))
                               <b>
                                  {{$data->sl144_actual}}
                               </b>
                               @else
                               <b style="color:#ff5b5b;">
                                  {{$data->sl144_actual}}
                               </b>
                               @endif
                            </h4>
                         </td>
                         <td>
                            <h4 style="font-size:500%">
                               <b>
                                  {{$data->sl144_test_block}}
                               </b>
                            </h4>
                         </td>
                      </tr>   
                      <tr style="text-align:center;">
                         <td><h4 style="font-size:200%"><b>SL-148</b></h4></td>
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
                                  {{$data->sl148_target}}
                               </b>
                            </h4>
                         </td>
                         <td>
                            <h4 style="font-size:500%">
                               @if (intval($data->sl148_actual) >= intval($data->sl148_target))
                               <b>
                                  {{$data->sl148_actual}}
                               </b>
                               @else
                               <b style="color:#ff5b5b;">
                                  {{$data->sl148_actual}}
                               </b>
                               @endif
                            </h4>
                         </td>
                         <td>
                            <h4 style="font-size:500%">
                               <b>
                                  {{$data->sl148_test_block}}
                               </b>
                            </h4>
                         </td>
                      </tr> 
                      <tr style="text-align:center;">
                         <td><h4 style="font-size:200%"><b>SL-145</b></h4></td>
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
                                  {{$data->sl145_target}}
                               </b>
                            </h4>
                         </td>
                         <td>
                            <h4 style="font-size:500%">
                               @if (intval($data->sl145_actual) >= intval($data->sl145_target))
                               <b>
                                  {{$data->sl145_actual}}
                               </b>
                               @else
                               <b style="color:#ff5b5b;">
                                  {{$data->sl145_actual}}
                               </b>
                               @endif
                            </h4>
                         </td>
                         <td>
                            <h4 style="font-size:500%">
                               <b>
                                  {{$data->sl145_test_block}}
                               </b>
                            </h4>
                         </td>
                      </tr>
                      <tr style="text-align:center;">
                         <td><h4 style="font-size:200%"><b>SL-149</b></h4></td>
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
                                  {{$data->sl149_target}}
                               </b>
                            </h4>
                         </td>
                         <td>
                            <h4 style="font-size:500%">
                               @if (intval($data->sl149_actual) >= intval($data->sl149_target))
                               <b>
                                  {{$data->sl149_actual}}
                               </b>
                               @else
                               <b style="color:#ff5b5b;">
                                  {{$data->sl149_actual}}
                               </b>
                               @endif
                            </h4>
                         </td>
                         <td>
                            <h4 style="font-size:500%">
                               <b>
                                  {{$data->sl149_test_block}}
                               </b>
                            </h4>
                         </td>
                      </tr> 
                      <tr style="text-align:center;">
                         <td><h4 style="font-size:200%"><b>SL-146</b></h4></td>
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
                                  {{$data->sl146_target}}
                               </b>
                            </h4>
                         </td>
                         <td>
                            <h4 style="font-size:500%">
                               @if (intval($data->sl146_actual) >= intval($data->sl146_target))
                               <b>
                                  {{$data->sl146_actual}}
                               </b>
                               @else
                               <b style="color:#ff5b5b;">
                                  {{$data->sl146_actual}}
                               </b>
                               @endif
                            </h4>
                         </td>
                         <td>
                            <h4 style="font-size:500%">
                               <b>
                                  {{$data->sl146_test_block}}
                               </b>
                            </h4>
                         </td>
                      </tr> 
                      <tr style="text-align:center;">
                         <td><h4 style="font-size:200%"><b>SL-150</b></h4></td>
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
                                  {{$data->sl150_target}}
                               </b>
                            </h4>
                         </td>
                         <td>
                            <h4 style="font-size:500%">
                               @if (intval($data->sl150_actual) >= intval($data->sl150_target))
                               <b>
                                  {{$data->sl150_actual}}
                               </b>
                               @else
                               <b style="color:#ff5b5b;">
                                  {{$data->sl150_actual}}
                               </b>
                               @endif
                            </h4>
                         </td>
                         <td>
                            <h4 style="font-size:500%">
                               <b>
                                  {{$data->sl150_test_block}}
                               </b>
                            </h4>
                         </td>
                      </tr>   
                      <tr style="text-align:center;">
                         <td><h4 style="font-size:200%"><b>SL-147</b></h4></td>
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
                                  {{$data->sl147_target}}
                               </b>
                            </h4>
                         </td>
                         <td>
                            <h4 style="font-size:500%">
                               @if (intval($data->sl147_actual) >= intval($data->sl147_target))
                               <b>
                                  {{$data->sl147_actual}}
                               </b>
                               @else
                               <b style="color:#ff5b5b;">
                                  {{$data->sl147_actual}}
                               </b>
                               @endif
                            </h4>
                         </td>
                         <td>
                            <h4 style="font-size:500%">
                               <b>
                                  {{$data->sl147_test_block}}
                               </b>
                            </h4>
                         </td>
                      </tr> 
                      <tr style="text-align:center;">
                         <td><h4 style="font-size:200%"><b>SL-151</b></h4></td>
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
                                  {{$data->sl151_target}}
                               </b>
                            </h4>
                         </td>
                         <td>
                            <h4 style="font-size:500%">
                               @if (intval($data->sl151_actual) >= intval($data->sl151_target))
                               <b>
                                  {{$data->sl151_actual}}
                               </b>
                               @else
                               <b style="color:#ff5b5b;">
                                  {{$data->sl151_actual}}
                               </b>
                               @endif
                            </h4>
                         </td>
                         <td>
                            <h4 style="font-size:500%">
                               <b>
                                  {{$data->sl151_test_block}}
                               </b>
                            </h4>
                         </td>
                      </tr>
                      <tr style="text-align:center;">
                         <td><h4 style="font-size:200%"><b>SL-152</b></h4></td>
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
                                  {{$data->sl152_target}}
                               </b>
                            </h4>
                         </td>
                         <td>
                            <h4 style="font-size:500%">
                               @if (intval($data->sl152_actual) >= intval($data->sl152_target))
                               <b>
                                  {{$data->sl152_actual}}
                               </b>
                               @else
                               <b style="color:#ff5b5b;">
                                  {{$data->sl152_actual}}
                               </b>
                               @endif
                            </h4>
                         </td>
                         <td>
                            <h4 style="font-size:500%">
                               <b>
                                  {{$data->sl152_test_block}}
                               </b>
                            </h4>
                         </td>
                      </tr> 
                      <tr style="text-align:center;">
                         <td><h4 style="font-size:200%"><b>SL-153</b></h4></td>
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
                                  {{$data->sl153_target}}
                               </b>
                            </h4>
                         </td>
                         <td>
                            <h4 style="font-size:500%">
                               @if (intval($data->sl153_actual) >= intval($data->sl153_target))
                               <b>
                                  {{$data->sl153_actual}}
                               </b>
                               @else
                               <b style="color:#ff5b5b;">
                                  {{$data->sl153_actual}}
                               </b>
                               @endif
                            </h4>
                         </td>
                         <td>
                            <h4 style="font-size:500%">
                               <b>
                                  {{$data->sl153_test_block}}
                               </b>
                            </h4>
                         </td>
                      </tr> 
                      <tr style="text-align:center;">
                         <td><h4 style="font-size:200%"><b>SL-154</b></h4></td>
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
                                  {{$data->sl154_target}}
                               </b>
                            </h4>
                         </td>
                         <td>
                            <h4 style="font-size:500%">
                               @if (intval($data->sl154_actual) >= intval($data->sl154_target))
                               <b>
                                  {{$data->sl154_actual}}
                               </b>
                               @else
                               <b style="color:#ff5b5b;">
                                  {{$data->sl154_actual}}
                               </b>
                               @endif
                            </h4>
                         </td>
                         <td>
                            <h4 style="font-size:500%">
                               <b>
                                  {{$data->sl154_test_block}}
                               </b>
                            </h4>
                         </td>
                      </tr> 
                      <tr style="text-align:center;">
                         <td><h4 style="font-size:200%"><b>SL-155</b></h4></td>
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
                                  {{$data->sl155_target}}
                               </b>
                            </h4>
                         </td>
                         <td>
                            <h4 style="font-size:500%">
                               @if (intval($data->sl155_actual) >= intval($data->sl155_target))
                               <b>
                                  {{$data->sl155_actual}}
                               </b>
                               @else
                               <b style="color:#ff5b5b;">
                                  {{$data->sl155_actual}}
                               </b>
                               @endif
                            </h4>
                         </td>
                         <td>
                            <h4 style="font-size:500%">
                               <b>
                                  {{$data->sl155_test_block}}
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
 