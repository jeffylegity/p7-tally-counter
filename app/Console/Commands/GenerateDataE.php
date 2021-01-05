<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class GenerateDataE extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:dataE';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate Tally Counter Data for E-shift';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
            //area 1 data structure
            DB::table('slicing_data_area1')        ->orderBy('id','desc')->limit(1)->update(['data_stored'=>1]);
            DB::table('slicing_actual_area1')      ->orderBy('id','desc')->limit(1)->update(['data_stored'=>1]);
            DB::table('slicing_test_block_area1')  ->orderBy('id','desc')->limit(1)->update(['data_stored'=>1]);
      
            $area1_target = array(
      
               'sl88_target'      => 0,
               'sl90_target'      => 0,
               'sl89_target'      => 0,
               'sl93_target'      => 0,
               'sl91_target'      => 0,
               'sl94_target'      => 0,
               'sl92_target'      => 0,
               'sl95_target'      => 0,
               'sl97_target'      => 0,
               'sl98_target'      => 0,
               'sl102_target'     => 0,
               'sl105_target'     => 0,
               'sl103_target'     => 0,
               'sl104_target'     => 0,
               'sl106_target'     => 0,
               'sl107_target'     => 0,
      
               'date_generated'   =>now(),
               'shift'            =>'E',
               'data_stored'      =>0
            );
      
            DB::table('slicing_data_area1')->insert($area1_target);
      
            $area1_actual = array(
      
               'sl88_actual'      => 0,
               'sl90_actual'      => 0,
               'sl89_actual'      => 0,
               'sl93_actual'      => 0,
               'sl91_actual'      => 0,
               'sl94_actual'      => 0,
               'sl92_actual'      => 0,
               'sl95_actual'      => 0,
               'sl97_actual'      => 0,
               'sl98_actual'      => 0,
               'sl102_actual'     => 0,
               'sl105_actual'     => 0,
               'sl103_actual'     => 0,
               'sl104_actual'     => 0,
               'sl106_actual'     => 0,
               'sl107_actual'     => 0,
      
               'date_generated'   =>now(),
               'shift'            =>'E',
               'data_stored'      =>0
            );
            
            DB::table('slicing_actual_area1')->insert($area1_actual);
      
            $area1_test_block = array(
      
               'sl88_test_block'  => 0,
               'sl90_test_block'  => 0,
               'sl89_test_block'  => 0,
               'sl93_test_block'  => 0,
               'sl91_test_block'  => 0,
               'sl94_test_block'  => 0,
               'sl92_test_block'  => 0,
               'sl95_test_block'  => 0,
               'sl97_test_block'  => 0,
               'sl98_test_block'  => 0,
               'sl102_test_block' => 0,
               'sl105_test_block' => 0,
               'sl103_test_block' => 0,
               'sl104_test_block' => 0,
               'sl106_test_block' => 0,
               'sl107_test_block' => 0,
      
               'date_generated'   =>now(),
               'shift'            =>'E',
               'data_stored'      =>0
            );
      
            DB::table('slicing_test_block_area1')->insert($area1_test_block);

            //area 2 data structure
            DB::table('slicing_data_area2')        ->orderBy('id','desc')->limit(1)->update(['data_stored'=>1]);
            DB::table('slicing_actual_area2')      ->orderBy('id','desc')->limit(1)->update(['data_stored'=>1]);
            DB::table('slicing_test_block_area2')  ->orderBy('id','desc')->limit(1)->update(['data_stored'=>1]);
      
            $area2_target = array(
      
               'sl52_target'      => 0,
               'sl55_target'      => 0,
               'sl53_target'      => 0,
               'sl60_target'      => 0,
               'sl114_target'      => 0,
               'sl113_target'      => 0,
               'sl117_target'      => 0,
               'sl122_target'      => 0,
               'sl123_target'      => 0,
               'sl121_target'      => 0,
               'sl141_target'     => 0,
               'sl139_target'     => 0,
               'sl142_target'     => 0,
               'sl140_target'     => 0,
               'sl187_target'     => 0,
      
               'date_generated'   =>now(),
               'shift'            =>'E',
               'data_stored'      =>0
            );
      
            DB::table('slicing_data_area2')->insert($area2_target);
      
            $area2_actual = array(
      
               'sl52_actual'      => 0,
               'sl55_actual'      => 0,
               'sl53_actual'      => 0,
               'sl60_actual'      => 0,
               'sl114_actual'      => 0,
               'sl113_actual'      => 0,
               'sl117_actual'      => 0,
               'sl122_actual'      => 0,
               'sl123_actual'      => 0,
               'sl121_actual'      => 0,
               'sl141_actual'     => 0,
               'sl139_actual'     => 0,
               'sl142_actual'     => 0,
               'sl140_actual'     => 0,
               'sl187_actual'     => 0,
      
               'date_generated'   =>now(),
               'shift'            =>'E',
               'data_stored'      =>0
            );
            
            DB::table('slicing_actual_area2')->insert($area2_actual);
      
            $area2_test_block = array(
      
               'sl52_test_block'  => 0,
               'sl55_test_block'  => 0,
               'sl53_test_block'  => 0,
               'sl60_test_block'  => 0,
               'sl114_test_block'  => 0,
               'sl113_test_block'  => 0,
               'sl117_test_block'  => 0,
               'sl122_test_block'  => 0,
               'sl123_test_block'  => 0,
               'sl121_test_block'  => 0,
               'sl141_test_block' => 0,
               'sl139_test_block' => 0,
               'sl142_test_block' => 0,
               'sl140_test_block' => 0,
               'sl187_test_block' => 0,
      
               'date_generated'   =>now(),
               'shift'            =>'E',
               'data_stored'      =>0
            );
      
            DB::table('slicing_test_block_area2')->insert($area2_test_block);

            //area 3 data structure
            DB::table('slicing_data_area3')        ->orderBy('id','desc')->limit(1)->update(['data_stored'=>1]);
            DB::table('slicing_actual_area3')      ->orderBy('id','desc')->limit(1)->update(['data_stored'=>1]);
            DB::table('slicing_test_block_area3')  ->orderBy('id','desc')->limit(1)->update(['data_stored'=>1]);
      
            $area3_target = array(
      
               'sl96_target'      => 0,
               'sl101_target'      => 0,
               'sl84_target'      => 0,
               'sl100_target'      => 0,
               'sl64_target'      => 0,
               'sl59_target'      => 0,
               'sl57_target'      => 0,
               'sl58_target'      => 0,
               'sl99_target'      => 0,
               'sl111_target'      => 0,
               'sl109_target'     => 0,
               'sl112_target'     => 0,
               'sl110_target'     => 0,
               'sl143_target'     => 0,
               'sl108_target'     => 0,
      
               'date_generated'   =>now(),
               'shift'            =>'E',
               'data_stored'      =>0
            );
      
            DB::table('slicing_data_area3')->insert($area3_target);
      
            $area3_actual = array(
      
               'sl96_actual'      => 0,
               'sl101_actual'      => 0,
               'sl84_actual'      => 0,
               'sl100_actual'      => 0,
               'sl64_actual'      => 0,
               'sl59_actual'      => 0,
               'sl57_actual'      => 0,
               'sl58_actual'      => 0,
               'sl99_actual'      => 0,
               'sl111_actual'      => 0,
               'sl109_actual'     => 0,
               'sl112_actual'     => 0,
               'sl110_actual'     => 0,
               'sl143_actual'     => 0,
               'sl108_actual'     => 0,
      
               'date_generated'   =>now(),
               'shift'            =>'E',
               'data_stored'      =>0
            );
            
            DB::table('slicing_actual_area3')->insert($area3_actual);
      
            $area3_test_block = array(
      
               'sl96_test_block'  => 0,
               'sl101_test_block'  => 0,
               'sl84_test_block'  => 0,
               'sl100_test_block'  => 0,
               'sl64_test_block'  => 0,
               'sl59_test_block'  => 0,
               'sl57_test_block'  => 0,
               'sl58_test_block'  => 0,
               'sl99_test_block'  => 0,
               'sl111_test_block'  => 0,
               'sl109_test_block' => 0,
               'sl112_test_block' => 0,
               'sl110_test_block' => 0,
               'sl143_test_block' => 0,
               'sl108_test_block' => 0,
      
               'date_generated'   =>now(),
               'shift'            =>'E',
               'data_stored'      =>0
            );
      
            DB::table('slicing_test_block_area3')->insert($area3_test_block);

            //area 4 data structure
            DB::table('slicing_data_area4')        ->orderBy('id','desc')->limit(1)->update(['data_stored'=>1]);
            DB::table('slicing_actual_area4')      ->orderBy('id','desc')->limit(1)->update(['data_stored'=>1]);
            DB::table('slicing_test_block_area4')  ->orderBy('id','desc')->limit(1)->update(['data_stored'=>1]);
      
            $area4_target = array(
      
               'sl56_target'      => 0,
               'sl136_target'      => 0,
               'sl63_target'      => 0,
               'sl135_target'      => 0,
               'sl116_target'      => 0,
               'sl134_target'      => 0,
               'sl120_target'      => 0,
               'sl133_target'      => 0,
               'sl119_target'      => 0,
               'sl132_target'      => 0,
               'sl131_target'     => 0,
               'sl137_target'     => 0,
               'sl138_target'     => 0,
               'sl192_target'     => 0,
      
               'date_generated'   =>now(),
               'shift'            =>'E',
               'data_stored'      =>0
            );
      
            DB::table('slicing_data_area4')->insert($area4_target);
      
            $area4_actual = array(
      
               'sl56_actual'      => 0,
               'sl136_actual'      => 0,
               'sl63_actual'      => 0,
               'sl135_actual'      => 0,
               'sl116_actual'      => 0,
               'sl134_actual'      => 0,
               'sl120_actual'      => 0,
               'sl133_actual'      => 0,
               'sl119_actual'      => 0,
               'sl132_actual'      => 0,
               'sl131_actual'     => 0,
               'sl137_actual'     => 0,
               'sl138_actual'     => 0,
               'sl192_actual'     => 0,
      
               'date_generated'   =>now(),
               'shift'            =>'E',
               'data_stored'      =>0
            );
            
            DB::table('slicing_actual_area4')->insert($area4_actual);
      
            $area4_test_block = array(
      
               'sl56_test_block'  => 0,
               'sl136_test_block'  => 0,
               'sl63_test_block'  => 0,
               'sl135_test_block'  => 0,
               'sl116_test_block'  => 0,
               'sl134_test_block'  => 0,
               'sl120_test_block'  => 0,
               'sl133_test_block'  => 0,
               'sl119_test_block'  => 0,
               'sl132_test_block'  => 0,
               'sl131_test_block' => 0,
               'sl137_test_block' => 0,
               'sl138_test_block' => 0,
               'sl192_test_block' => 0,
      
               'date_generated'   =>now(),
               'shift'            =>'E',
               'data_stored'      =>0
            );
      
            DB::table('slicing_test_block_area4')->insert($area4_test_block);
            
            //area 5 data structure
            DB::table('slicing_data_area5')        ->orderBy('id','desc')->limit(1)->update(['data_stored'=>1]);
            DB::table('slicing_actual_area5')      ->orderBy('id','desc')->limit(1)->update(['data_stored'=>1]);
            DB::table('slicing_test_block_area5')  ->orderBy('id','desc')->limit(1)->update(['data_stored'=>1]);
      
            $area5_target = array(
      
               'sl144_target'      => 0,
               'sl148_target'      => 0,
               'sl145_target'      => 0,
               'sl149_target'      => 0,
               'sl146_target'      => 0,
               'sl150_target'      => 0,
               'sl147_target'      => 0,
               'sl151_target'      => 0,
               'sl152_target'      => 0,
               'sl153_target'      => 0,
               'sl154_target'     => 0,
               'sl155_target'     => 0,
      
               'date_generated'   =>now(),
               'shift'            =>'E',
               'data_stored'      =>0
            );
      
            DB::table('slicing_data_area5')->insert($area5_target);
      
            $area5_actual = array(
      
               'sl144_actual'      => 0,
               'sl148_actual'      => 0,
               'sl145_actual'      => 0,
               'sl149_actual'      => 0,
               'sl146_actual'      => 0,
               'sl150_actual'      => 0,
               'sl147_actual'      => 0,
               'sl151_actual'      => 0,
               'sl152_actual'      => 0,
               'sl153_actual'      => 0,
               'sl154_actual'     => 0,
               'sl155_actual'     => 0,
      
               'date_generated'   =>now(),
               'shift'            =>'E',
               'data_stored'      =>0
            );
            
            DB::table('slicing_actual_area5')->insert($area5_actual);
      
            $area5_test_block = array(
      
               'sl144_test_block'  => 0,
               'sl148_test_block'  => 0,
               'sl145_test_block'  => 0,
               'sl149_test_block'  => 0,
               'sl146_test_block'  => 0,
               'sl150_test_block'  => 0,
               'sl147_test_block'  => 0,
               'sl151_test_block'  => 0,
               'sl152_test_block'  => 0,
               'sl153_test_block'  => 0,
               'sl154_test_block' => 0,
               'sl155_test_block' => 0,
      
               'date_generated'   =>now(),
               'shift'            =>'E',
               'data_stored'      =>0
            );
      
            DB::table('slicing_test_block_area5')->insert($area5_test_block);
    }
}
