<?php

use App\Service\CoronaVirusService;

/**
 * Class StatsByCountryController
 */
class CheckpointsController
{
    private $covid = null;

    public function __construct()
    {
        $this->covid = new CoronaVirusService;
    }



    /**
     * @param $country
     * @return void
     */
    public function index()
    {
        $cases_philippines = $this->covid->DataCasesPhilippines("philippines");
        $country_stats     = $this->covid->DataStatsByCountry("philippines");
        $checkpoints       = $this->covid->DataCheckPoints();
        $css = '<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/fh-3.1.6/sc-2.0.1/sp-1.0.1/datatables.min.css"/>';
        $js =  '<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/fh-3.1.6/sc-2.0.1/sp-1.0.1/datatables.min.js"></script>' .
               '<script>$("#cases").DataTable();</script>';

        return render('frontend/checkpoints/index', compact('country_stats', 'checkpoints','cases_philippines','js', 'css'));
    }
}
