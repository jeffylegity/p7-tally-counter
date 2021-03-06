<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class SlicingDataArea4E extends AbstractWidget
{
   public $reloadTimeout = 10;
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

        return view('widgets.slicing_data_area4_e', [
            'config'    => $this->config,
            'record'    =>getEshiftLatestArea4(),
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
