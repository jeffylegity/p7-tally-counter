@extends('layouts.slicing-admin-layout')
@section('content')
    <div class="content-page">
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-12">
               <div class="card-box">
                  <h4 class="header-title mt-0 m-b-30">Input Logs
                  </h4>
                  <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                      <thead>
                        <tr style="text-align:center;">
                          <th>Input ID</th>
                          <th>Machine No.</th>
                          <th>Action Taken</th>
                          <th>View</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($logs as $log)
                             <tr style="text-align:center">
                                <td>000{{$log->data_id}}</td>
                                <td>{{$log->machine_no}}</td>
                                <td>{{$log->action}}</td>
                                <td>{{Carbon\Carbon::parse($log->created_at)->format('M d Y - H:i:A')}}</td>
                             </tr>                            
                          @endforeach
                      </tbody>
                    </table>
                  </div>
               </div>
            </div>
          </div>
      </div> 
   </div>
@endsection