<?php
use App\Service\CoronaVirusService;

/**
 * Default controller
 * Class HomeController
 */
class SelfCheckController
{
    public function __construct()
    {
        $this->covid = new CoronaVirusService;
    }

    /**
     * @return View
     */
    public function index()
    {
        $country_stats = $this->covid->DataStatsByCountry("philippines");
        $world_stats = $this->covid->DataWorldStats();

        return View::render('frontend/self-check/index', compact('country_stats','world_stats'));
    }
}
