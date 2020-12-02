<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class GenerateDataF extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:dataF';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate Tally Counter Data for F-shift';

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
         'shift'            =>'F',
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
         'shift'            =>'F',
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
         'shift'            =>'F',
         'data_stored'      =>0
      );

      DB::table('slicing_test_block_area1')->insert($area1_test_block);
      
   }  
    }
