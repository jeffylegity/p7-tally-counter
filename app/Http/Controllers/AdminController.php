<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
//area 1
//---------------------------------------------------------------------------------------------------------------------------------------------------
   // public function generateSlicingRecordArea1(){
   //    $data = array(
   //       'sl166_actual'        =>0,
   //       'sl166_target'        =>0,
   //       'sl166_test_block'    =>0,

   //       'sl167_actual'        =>0,
   //       'sl167_target'        =>0,
   //       'sl167_test_block'    =>0,

   //       'sl168_actual'        =>0,
   //       'sl168_target'        =>0,
   //       'sl168_test_block'    =>0,

   //       'sl169_actual'        =>0,
   //       'sl169_target'        =>0,
   //       'sl169_test_block'    =>0,

   //       'sl170_actual'        =>0,
   //       'sl170_target'        =>0,
   //       'sl170_test_block'    =>0,

   //       'date_generated'    =>now(),
   //       'shift'             =>getShift(),
   //       'data_stored'       =>0
   //    );

   //    $generate_record = DB::table('slicing_data_area1')
   //       ->insert($data);
         
   //    if (!$generate_record) {
   //       toastr()->error('Error, Please Contact MIS');
   //       return redirect()->route('admin.home');
   //    } else {
   //       toastr()->success('Record Generated');
   //       return redirect()->route('admin.home');
   //    }
   // }

   public function saveDataArea1($data_id){
   $save_record = DB::table('slicing_data_area1')->select('*')
      ->where(['id'=>$data_id])
      ->update(['data_stored'=>1]);

      if (!$save_record) {
         toastr()->error('Record not saved, Please contact MIS');
         return redirect()->back();
      } else {
         toastr()->success('Record Saved');
         return redirect()->back();
      }

   }

   public function showRecordsArea1(){
      
   $records = DB::table('slicing_data_area1')
      ->orderBy('date_generated','desc')->get();

   return view('pages.admin.area1.admin_records')
      ->with([
         'records'       => $records,
      ]);
   }

   public function showLogsArea1($input_id){
   $logs = DB::table('slicing_logs_area1')->select('*')
      ->where(['data_id'=>$input_id])
      ->orderBy('created_at','desc')->get();
      return view('pages.admin.area1.admin_logs')
      ->with([
         'logs' => $logs,
      ]);
   }

   public function showModelsArea1(){
   $models = DB::table('slicing_model_area1')->select('*')
      ->get();
      return view('pages.admin.area1.admin_models')
      ->with([
         'models' => $models,
         'model_list'   => getModels()
      ]);
   }

   public function updateModelNameArea1(Request $request){
   $update_model_name = DB::table('slicing_model_area1')->select('*')
      ->where(['id'=>$request->input('id')])
      ->update(['model_name'=>$request->input('model_name')]);

      if (!$update_model_name) {
         toastr()->error('Model name not updated, Please Contact MIS');
         return redirect()->route('admin.models.area1');
      } else {
         toastr()->success('Model name updated');
         return redirect()->back();
      }
   }

   public function updatePlanArea1(Request $request){
   $update_plan = DB::table('slicing_data_area1')->select('*')
   ->where(['id'=>$request->input('data_id')])
   ->update([
      'sl88_target'=>$request->input('sl88_target'),
      'sl90_target'=>$request->input('sl90_target'),
      'sl89_target'=>$request->input('sl89_target'),
      'sl93_target'=>$request->input('sl93_target'),
      'sl91_target'=>$request->input('sl91_target'),
      'sl94_target'=>$request->input('sl94_target'),
      'sl92_target'=>$request->input('sl92_target'),
      'sl95_target'=>$request->input('sl95_target'),
      'sl97_target'=>$request->input('sl97_target'),
      'sl98_target'=>$request->input('sl98_target'),
      'sl102_target'=>$request->input('sl102_target'),
      'sl105_target'=>$request->input('sl105_target'),
      'sl103_target'=>$request->input('sl103_target'),
      'sl104_target'=>$request->input('sl104_target'),
      'sl106_target'=>$request->input('sl106_target'),
      'sl107_target'=>$request->input('sl107_target'),

      ]);

      if (!$update_plan) {
         toastr()->error('Plan not updated, Please Contact MIS');
         return redirect()->back();
      } else {
         toastr()->success('Plan updated');
         return redirect()->back();
      }
   }

//area 2
//---------------------------------------------------------------------------------------------------------------------------------------------------
   // public function generateSlicingRecordArea2(){
   //    $data = array(
   //       'sl52_actual'        =>0,
   //       'sl52_target'        =>0,
   //       'sl52_test_block'    =>0,

   //       'sl55_actual'        =>0,
   //       'sl55_target'        =>0,
   //       'sl55_test_block'    =>0,

   //       'sl53_actual'        =>0,
   //       'sl53_target'        =>0,
   //       'sl53_test_block'    =>0,

   //       'sl60_actual'        =>0,
   //       'sl60_target'        =>0,
   //       'sl60_test_block'    =>0,

   //       'sl114_actual'        =>0,
   //       'sl114_target'        =>0,
   //       'sl114_test_block'    =>0,

   //       'sl113_actual'        =>0,
   //       'sl113_target'        =>0,
   //       'sl113_test_block'    =>0,

   //       'sl117_actual'        =>0,
   //       'sl117_target'        =>0,
   //       'sl117_test_block'    =>0,

   //       'sl122_actual'        =>0,
   //       'sl122_target'        =>0,
   //       'sl122_test_block'    =>0,

   //       'sl123_actual'        =>0,
   //       'sl123_target'        =>0,
   //       'sl123_test_block'    =>0,

   //       'sl121_actual'        =>0,
   //       'sl121_target'        =>0,
   //       'sl121_test_block'    =>0,

   //       'sl141_actual'        =>0,
   //       'sl141_target'        =>0,
   //       'sl141_test_block'    =>0,

   //       'sl139_actual'        =>0,
   //       'sl139_target'        =>0,
   //       'sl139_test_block'    =>0,

   //       'sl142_actual'        =>0,
   //       'sl142_target'        =>0,
   //       'sl142_test_block'    =>0,

   //       'sl140_actual'        =>0,
   //       'sl140_target'        =>0,
   //       'sl140_test_block'    =>0,

   //       'sl187_actual'        =>0,
   //       'sl187_target'        =>0,
   //       'sl187_test_block'    =>0,
         
   //       'date_generated'    =>now(),
   //       'shift'             =>getShift(),
   //       'data_stored'       =>0
   //    );

   //    $generate_record = DB::table('slicing_data_area2')
   //       ->insert($data);
         
   //    if (!$generate_record) {
   //       return redirect()->route('admin.area2');
   //    } else {
   //       return redirect()->route('admin.area2');
   //    }
   // }

   public function saveDataArea2($data_id){
   $save_record = DB::table('slicing_data_area2')->select('*')
      ->where(['id'=>$data_id])
      ->update(['data_stored'=>1]);

      if (!$save_record) {
         return redirect()->back();
      } else {
         return redirect()->back();
      }

   }

   public function showRecordsArea2(){
   $records = DB::table('slicing_data_area2')
      ->orderBy('date_generated','desc')->get();
      return view('pages.admin.area2.admin_records')
      ->with([
         'records' => $records,
      ]);
   }

   public function showLogsArea2($input_id){
   $logs = DB::table('slicing_logs_area2')->select('*')
      ->where(['data_id'=>$input_id])
      ->orderBy('created_at','desc')->get();
      return view('pages.admin.area2.admin_logs')
      ->with([
         'logs' => $logs,
      ]);
   }

   public function showModelsArea2(){
   $models = DB::table('slicing_model_area2')->select('*')
      ->get();
      return view('pages.admin.area2.admin_models')
      ->with([
         'models'       => $models,
         'model_list'   => getModels()
      ]);
   }

   public function updateModelNameArea2(Request $request){
   $update_model_name = DB::table('slicing_model_area2')->select('*')
      ->where(['id'=>$request->input('id')])
      ->update(['model_name'=>$request->input('model_name')]);

      if (!$update_model_name) {
         toastr()->error('Model name not updated, Please Contact MIS');
         return redirect()->route('admin.models.area2');
      } else {
         toastr()->success('Model name updated');
         return redirect()->back();
      }
   }

   public function updatePlanArea2(Request $request){
   $update_plan = DB::table('slicing_data_area2')->select('*')
      ->where(['id'=>$request->input('data_id')])
      ->update([
         'sl52_target'=>$request->input('sl52_target'),
         'sl55_target'=>$request->input('sl55_target'),
         'sl53_target'=>$request->input('sl53_target'),
         'sl60_target'=>$request->input('sl60_target'),
         'sl114_target'=>$request->input('sl114_target'),
         'sl113_target'=>$request->input('sl113_target'),
         'sl117_target'=>$request->input('sl117_target'),
         'sl122_target'=>$request->input('sl122_target'),
         'sl123_target'=>$request->input('sl123_target'),
         'sl121_target'=>$request->input('sl121_target'),
         'sl141_target'=>$request->input('sl141_target'),
         'sl139_target'=>$request->input('sl139_target'),
         'sl142_target'=>$request->input('sl142_target'),
         'sl140_target'=>$request->input('sl140_target'),
         'sl187_target'=>$request->input('sl187_target'),
      ]);

      if (!$update_plan) {
         return redirect()->back();
      } else {
         return redirect()->back();
      }
   }

//area 3
//---------------------------------------------------------------------------------------------------------------------------------------------------
   // public function generateSlicingRecordArea3(){
   //    $data = array(
   //       'sl182_actual'        =>0,
   //       'sl182_target'        =>0,
   //       'sl182_test_block'    =>0,

   //       'sl183_actual'        =>0,
   //       'sl183_target'        =>0,
   //       'sl183_test_block'    =>0,

   //       'sl185_actual'        =>0,
   //       'sl185_target'        =>0,
   //       'sl185_test_block'    =>0,

   //       'sl186_actual'        =>0,
   //       'sl186_target'        =>0,
   //       'sl186_test_block'    =>0,

   //       'lap20_actual'        =>0,
   //       'lap20_target'        =>0,
   //       'lap20_test_block'    =>0,

   //       'lap23_actual'        =>0,
   //       'lap23_target'        =>0,
   //       'lap23_test_block'    =>0,

   //       'lap27_actual'        =>0,
   //       'lap27_target'        =>0,
   //       'lap27_test_block'    =>0,

   //       'bc8_actual'        =>0,
   //       'bc8_target'        =>0,
   //       'bc8_test_block'    =>0,

   //       'bc9_actual'        =>0,
   //       'bc9_target'        =>0,
   //       'bc9_test_block'    =>0,

   //       'bc12_actual'        =>0,
   //       'bc12_target'        =>0,
   //       'bc12_test_block'    =>0,
         
   //       'date_generated'    =>now(),
   //       'shift'             =>getShift(),
   //       'data_stored'       =>0
   //    );

   //    $generate_record = DB::table('slicing_data_area3')
   //       ->insert($data);
         
   //    if (!$generate_record) {
   //       return redirect()->route('admin.area3');
   //    } else {
   //       return redirect()->route('admin.area3');
   //    }
   // }

   public function saveDataArea3($data_id){
   $save_record = DB::table('slicing_data_area3')->select('*')
      ->where(['id'=>$data_id])
      ->update(['data_stored'=>1]);

      if (!$save_record) {
         return redirect()->back();
      } else {
         return redirect()->back();
      }

   }

   public function showRecordsArea3(){
   $records = DB::table('slicing_data_area3')
      ->orderBy('date_generated','desc')->get();
      return view('pages.admin.area3.admin_records')
      ->with([
         'records' => $records,
      ]);
   }

   public function showLogsArea3($input_id){
   $logs = DB::table('slicing_logs_area3')->select('*')
      ->where(['data_id'=>$input_id])
      ->orderBy('created_at','desc')->get();
      return view('pages.admin.area3.admin_logs')
      ->with([
         'logs' => $logs,
      ]);
   }

   public function showModelsArea3(){
   $models = DB::table('slicing_model_area3')->select('*')
      ->get();
      return view('pages.admin.area3.admin_models')
      ->with([
         'models'       => $models,
         'model_list'   => getModels()
      ]);
   }

   public function updateModelNameArea3(Request $request){
   $update_model_name = DB::table('slicing_model_area3')->select('*')
      ->where(['id'=>$request->input('id')])
      ->update(['model_name'=>$request->input('model_name')]);

      if (!$update_model_name) {
         toastr()->error('Model name not updated, Please Contact MIS');
         return redirect()->route('admin.models.area3');
      } else {
         toastr()->success('Model name updated');
         return redirect()->back();
      }
   }

   public function updatePlanArea3(Request $request){
   $update_plan = DB::table('slicing_data_area3')->select('*')
      ->where(['id'=>$request->input('data_id')])
      ->update([
         'sl96_target'=>$request->input('sl96_target'),
         'sl101_target'=>$request->input('sl101_target'),
         'sl84_target'=>$request->input('sl84_target'),
         'sl100_target'=>$request->input('sl100_target'),
         'sl64_target'=>$request->input('sl64_target'),
         'sl59_target'=>$request->input('sl59_target'),
         'sl57_target'=>$request->input('sl57_target'),
         'sl58_target'=>$request->input('sl58_target'),
         'sl99_target'=>$request->input('sl99_target'),
         'sl111_target'=>$request->input('sl111_target'),
         'sl109_target'=>$request->input('sl109_target'),
         'sl112_target'=>$request->input('sl112_target'),
         'sl110_target'=>$request->input('sl110_target'),
         'sl143_target'=>$request->input('sl143_target'),
         'sl108_target'=>$request->input('sl108_target'),

      ]);

      if (!$update_plan) {
         return redirect()->back();
      } else {
         return redirect()->back();
      }
   }

//area 4
//---------------------------------------------------------------------------------------------------------------------------------------------------
   // public function generateSlicingRecordArea4(){
   //    $data = array(
   //       'sl193_actual'        =>0,
   //       'sl193_target'        =>0,
   //       'sl193_test_block'    =>0,

   //       'sl194_actual'        =>0,
   //       'sl194_target'        =>0,
   //       'sl194_test_block'    =>0,

   //       'sl195_actual'        =>0,
   //       'sl195_target'        =>0,
   //       'sl195_test_block'    =>0,

   //       'sl196_actual'        =>0,
   //       'sl196_target'        =>0,
   //       'sl196_test_block'    =>0,

   //       'sl197_actual'        =>0,
   //       'sl197_target'        =>0,
   //       'sl197_test_block'    =>0,

   //       'sl198_actual'        =>0,
   //       'sl198_target'        =>0,
   //       'sl198_test_block'    =>0,

   //       'sl199_actual'        =>0,
   //       'sl199_target'        =>0,
   //       'sl199_test_block'    =>0,

   //       'sl200_actual'        =>0,
   //       'sl200_target'        =>0,
   //       'sl200_test_block'    =>0,

   //       'bc7_actual'        =>0,
   //       'bc7_target'        =>0,
   //       'bc7_test_block'    =>0,

   //       'csl1_actual'        =>0,
   //       'csl1_target'        =>0,
   //       'csl1_test_block'    =>0,
         
   //       'date_generated'    =>now(),
   //       'shift'             =>getShift(),
   //       'data_stored'       =>0
   //    );

   //    $generate_record = DB::table('slicing_data_area4')
   //       ->insert($data);
         
   //    if (!$generate_record) {
   //       return redirect()->route('admin.area4');
   //    } else {
   //       return redirect()->route('admin.area4');
   //    }
   // }

   public function saveDataArea4($data_id){
   $save_record = DB::table('slicing_data_area4')->select('*')
      ->where(['id'=>$data_id])
      ->update(['data_stored'=>1]);

      if (!$save_record) {
         return redirect()->back();
      } else {
         return redirect()->back();
      }

   }

   public function showRecordsArea4(){
   $records = DB::table('slicing_data_area4')
      ->orderBy('date_generated','desc')->get();
      return view('pages.admin.area4.admin_records')
      ->with([
         'records' => $records,
      ]);
   }

   public function showLogsArea4($input_id){
   $logs = DB::table('slicing_logs_area4')->select('*')
      ->where(['data_id'=>$input_id])
      ->orderBy('created_at','desc')->get();
      return view('pages.admin.area4.admin_logs')
      ->with([
         'logs' => $logs,
      ]);
   }

   public function showModelsArea4(){
   $models = DB::table('slicing_model_area4')->select('*')
      ->get();
      return view('pages.admin.area4.admin_models')
      ->with([
         'models'       => $models,
         'model_list'   => getModels()
      ]);
   }

   public function updateModelNameArea4(Request $request){
   $update_model_name = DB::table('slicing_model_area4')->select('*')
      ->where(['id'=>$request->input('id')])
      ->update(['model_name'=>$request->input('model_name')]);

      if (!$update_model_name) {
         toastr()->error('Model name not updated, Please Contact MIS');
         return redirect()->route('admin.models.area4');
      } else {
         toastr()->success('Model name updated');
         return redirect()->back();
      }
   }

   public function updatePlanArea4(Request $request){
   $update_plan = DB::table('slicing_data_area4')->select('*')
      ->where(['id'=>$request->input('data_id')])
      ->update([
         'sl56_target'=>$request->input('sl56_target'),
         'sl136_target'=>$request->input('sl136_target'),
         'sl63_target'=>$request->input('sl63_target'),
         'sl135_target'=>$request->input('sl135_target'),
         'sl116_target'=>$request->input('sl116_target'),
         'sl134_target'=>$request->input('sl134_target'),
         'sl120_target'=>$request->input('sl120_target'),
         'sl133_target'=>$request->input('sl133_target'),
         'sl119_target'=>$request->input('sl119_target'),
         'sl132_target'=>$request->input('sl132_target'),
         'sl131_target'=>$request->input('sl131target'),
         'sl137_target'=>$request->input('sl137_target'),
         'sl138_target'=>$request->input('sl138_target'),
         'sl192_target'=>$request->input('sl192_target'),

      ]);

      if (!$update_plan) {
         return redirect()->back();
      } else {
         return redirect()->back();
      }
   }

//area 5
//---------------------------------------------------------------------------------------------------------------------------------------------------
public function saveDataArea5($data_id){
   $save_record = DB::table('slicing_data_area5')->select('*')
      ->where(['id'=>$data_id])
      ->update(['data_stored'=>1]);

      if (!$save_record) {
         return redirect()->back();
      } else {
         return redirect()->back();
      }

   }

   public function showRecordsArea5(){
   $records = DB::table('slicing_data_area5')
      ->orderBy('date_generated','desc')->get();
      return view('pages.admin.area5.admin_records')
      ->with([
         'records' => $records,
      ]);
   }

   public function showLogsArea5($input_id){
   $logs = DB::table('slicing_logs_area5')->select('*')
      ->where(['data_id'=>$input_id])
      ->orderBy('created_at','desc')->get();
      return view('pages.admin.area5.admin_logs')
      ->with([
         'logs' => $logs,
      ]);
   }

   public function showModelsArea5(){
   $models = DB::table('slicing_model_area5')->select('*')
      ->get();
      return view('pages.admin.area5.admin_models')
      ->with([
         'models'       => $models,
         'model_list'   => getModels()
      ]);
   }

   public function updateModelNameArea5(Request $request){
   $update_model_name = DB::table('slicing_model_area5')->select('*')
      ->where(['id'=>$request->input('id')])
      ->update(['model_name'=>$request->input('model_name')]);

      if (!$update_model_name) {
         toastr()->error('Model name not updated, Please Contact MIS');
         return redirect()->route('admin.models.area5');
      } else {
         toastr()->success('Model name updated');
         return redirect()->back();
      }
   }

   public function updatePlanArea5(Request $request){
   $update_plan = DB::table('slicing_data_area5')->select('*')
      ->where(['id'=>$request->input('data_id')])
      ->update([
         'sl144_target'=>$request->input('sl144_target'),
         'sl148_target'=>$request->input('sl148_target'),
         'sl145_target'=>$request->input('sl145_target'),
         'sl149_target'=>$request->input('sl149_target'),
         'sl146_target'=>$request->input('sl146_target'),
         'sl150_target'=>$request->input('sl150_target'),
         'sl147_target'=>$request->input('sl147_target'),
         'sl151_target'=>$request->input('sl151_target'),
         'sl152_target'=>$request->input('sl152_target'),
         'sl153_target'=>$request->input('sl153_target'),
         'sl154_target'=>$request->input('sl154_target'),
         'sl155_target'=>$request->input('sl155_target'),
         'sl138_target'=>$request->input('sl138_target'),
         'sl192_target'=>$request->input('sl192_target'),

      ]);

      if (!$update_plan) {
         return redirect()->back();
      } else {
         return redirect()->back();
      }
   }
}
