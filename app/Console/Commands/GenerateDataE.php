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
      DB::table('slicing_data_area1')->orderBy('id','desc')->limit(1)->update(['data_stored'=>1]);
      $area1 = array(
         'sl166_actual'        =>0,
         'sl166_target'        =>0,
         'sl166_test_block'    =>0,

         'sl167_actual'        =>0,
         'sl167_target'        =>0,
         'sl167_test_block'    =>0,

         'sl168_actual'        =>0,
         'sl168_target'        =>0,
         'sl168_test_block'    =>0,

         'sl169_actual'        =>0,
         'sl169_target'        =>0,
         'sl169_test_block'    =>0,

         'sl170_actual'        =>0,
         'sl170_target'        =>0,
         'sl170_test_block'    =>0,

         'date_generated'    =>now(),
         'shift'             =>'E',
         'data_stored'       =>0
      );
      DB::table('slicing_data_area1')->insert($area1);

    //area 2 data structure
      DB::table('slicing_data_area2')->orderBy('id','desc')->limit(1)->update(['data_stored'=>1]);
      $area2 = array(
         'sl156_actual'        =>0,
         'sl156_target'        =>0,
         'sl156_test_block'    =>0,

         'sl161_actual'        =>0,
         'sl161_target'        =>0,
         'sl161_test_block'    =>0,

         'sl162_actual'        =>0,
         'sl162_target'        =>0,
         'sl162_test_block'    =>0,

         'sl163_actual'        =>0,
         'sl163_target'        =>0,
         'sl163_test_block'    =>0,

         'sl164_actual'        =>0,
         'sl164_target'        =>0,
         'sl164_test_block'    =>0,

         'sl171_actual'        =>0,
         'sl171_target'        =>0,
         'sl171_test_block'    =>0,

         'sl172_actual'        =>0,
         'sl172_target'        =>0,
         'sl172_test_block'    =>0,

         'sl179_actual'        =>0,
         'sl179_target'        =>0,
         'sl179_test_block'    =>0,

         'sl180_actual'        =>0,
         'sl180_target'        =>0,
         'sl180_test_block'    =>0,

         'sl181_actual'        =>0,
         'sl181_target'        =>0,
         'sl181_test_block'    =>0,
         
         'date_generated'    =>now(),
         'shift'             =>'E',
         'data_stored'       =>0
      );
      DB::table('slicing_data_area2')->insert($area2);

      //area 3 data structure
      DB::table('slicing_data_area3')->orderBy('id','desc')->limit(1)->update(['data_stored'=>1]);
      $area3 = array(
         'sl182_actual'        =>0,
         'sl182_target'        =>0,
         'sl182_test_block'    =>0,

         'sl183_actual'        =>0,
         'sl183_target'        =>0,
         'sl183_test_block'    =>0,

         'sl185_actual'        =>0,
         'sl185_target'        =>0,
         'sl185_test_block'    =>0,

         'sl186_actual'        =>0,
         'sl186_target'        =>0,
         'sl186_test_block'    =>0,

         'lap20_actual'        =>0,
         'lap20_target'        =>0,
         'lap20_test_block'    =>0,

         'lap23_actual'        =>0,
         'lap23_target'        =>0,
         'lap23_test_block'    =>0,

         'lap27_actual'        =>0,
         'lap27_target'        =>0,
         'lap27_test_block'    =>0,

         'bc8_actual'        =>0,
         'bc8_target'        =>0,
         'bc8_test_block'    =>0,

         'bc9_actual'        =>0,
         'bc9_target'        =>0,
         'bc9_test_block'    =>0,

         'bc12_actual'        =>0,
         'bc12_target'        =>0,
         'bc12_test_block'    =>0,
         
         'date_generated'    =>now(),
         'shift'             =>'E',
         'data_stored'       =>0
      );
      DB::table('slicing_data_area3')->insert($area3);

      //area 4 data structure
      DB::table('slicing_data_area4')->orderBy('id','desc')->limit(1)->update(['data_stored'=>1]);
      $area4 = array(
         'sl193_actual'        =>0,
         'sl193_target'        =>0,
         'sl193_test_block'    =>0,

         'sl194_actual'        =>0,
         'sl194_target'        =>0,
         'sl194_test_block'    =>0,

         'sl195_actual'        =>0,
         'sl195_target'        =>0,
         'sl195_test_block'    =>0,

         'sl196_actual'        =>0,
         'sl196_target'        =>0,
         'sl196_test_block'    =>0,

         'sl197_actual'        =>0,
         'sl197_target'        =>0,
         'sl197_test_block'    =>0,

         'sl198_actual'        =>0,
         'sl198_target'        =>0,
         'sl198_test_block'    =>0,

         'sl199_actual'        =>0,
         'sl199_target'        =>0,
         'sl199_test_block'    =>0,

         'sl200_actual'        =>0,
         'sl200_target'        =>0,
         'sl200_test_block'    =>0,

         'bc7_actual'        =>0,
         'bc7_target'        =>0,
         'bc7_test_block'    =>0,

         'csl1_actual'        =>0,
         'csl1_target'        =>0,
         'csl1_test_block'    =>0,
         
         'date_generated'    =>now(),
         'shift'             =>'E',
         'data_stored'       =>0
      );
      DB::table('slicing_data_area4')->insert($area4);
    }
}
