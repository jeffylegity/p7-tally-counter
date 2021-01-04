<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class SlicingAdminDataArea5 extends AbstractWidget
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

        return view('widgets.slicing_admin_data_area5', [
            'config'    => $this->config,
            'record'    =>getLatestArea5(),
        ]);
    }

    public function container()
    {
      return[
         'element'   => 'div',
         'attributes'=> 'class="col-lg-12"'
     ];
    }
}
