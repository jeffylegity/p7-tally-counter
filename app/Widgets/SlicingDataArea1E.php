<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class SlicingDataArea1E extends AbstractWidget
{
   public $reloadTimeout = 20;
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        //

        return view('widgets.slicing_data_area1_e', [
            'config'    => $this->config,
            'record'    =>getEshiftLatestArea1(),
        ]);
    }

    public function container()
    {
      return[
         'element'   => 'div',
         'attributes'=> 'class="col-lg-6"'
     ];
    }
}
