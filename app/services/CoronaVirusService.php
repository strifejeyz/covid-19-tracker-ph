<?php namespace App\Service;

class CoronaVirusService
{
    private $KEY  = '65c498a503msh1e8bad6a712aa9ap101bb4jsn9d51004dfc12';
    private $HOST = 'covid-19-data.p.rapidapi.com';
    public  $API  = [
        'stats_by_country'   => "https://covid-19-data.p.rapidapi.com/country?format=undefined&name=",
        'world_curr_stats'   => "https://covid-19-data.p.rapidapi.com/totals?format=undefined",
        'cases_by_country'   => "https://coronavirus-monitor.p.rapidapi.com/coronavirus/cases_by_country.php",
        'history_by_country' => "https://coronavirus-monitor.p.rapidapi.com/coronavirus/cases_by_particular_country.php?country=",
        'cases_philippines'  => "https://coronavirus-ph-api.herokuapp.com/cases",
        'manila_checkpoints' => "https://coronavirus-ph-api.herokuapp.com/mm-checkpoints",
    ];




    /**
     * Contains only stats for a specific country
     * like number of deaths/recoveries and such
     *
     * @param $country
     * @return mixed
     */
    public function DataStatsByCountry ($country) {
        $data = (json_decode($this->fetch("GET", $this->API['stats_by_country'] . $country)));
        $data = $data[0];

        $data->total_cases = $data->confirmed;
        $data->total_deaths = $data->deaths;
        $data->total_recovered = $data->recovered;
        return ($data);
    }




    /**
     * Contains pretty much all the specifics
     * like full table data and such
     *
     * @param $country
     * @return mixed
     */
    public function DataHistoryByCountry ($country) {
        $data = (json_decode($this->fetch("GET",
            $this->API['history_by_country'] . $country)
        ));

        return ($data);
    }


    /**
     * Contains pretty much all the specifics
     * like full table data and such
     *
     * @return mixed
     */
    public function DataCheckPoints () {
        $data = (json_decode($this->fetch("GET",
            $this->API['manila_checkpoints'])
        ));

        return ($data);
    }




    /**
     * Contains pretty much all the specifics
     * like full table data and such
     *
     * @return mixed
     */
    public function DataCasesPhilippines () {
        $data = (json_decode($this->fetch("GET",
            $this->API['cases_philippines'])
        ));

        return ($data);
    }




    /**
     * Returns World Stats
     * it doesnt include anything but
     * global stats like deaths/recoveries
     * and such.
     *
     * @return resource
     **/
    public function DataWorldStats () {
        $data = (json_decode($this->fetch("GET",
            $this->API['world_curr_stats'])
        ));
        $data = $data[0];
        $data->total_cases = $data->confirmed;
        $data->total_deaths = $data->deaths;
        $data->total_recovered = $data->recovered;

        return ($data);
    }




    /**
     * Fetches data from the API this will
     * be stored to a JSON file inside /storage/rest
     * to prevent the big chunk of data requested
     *
     * @param $method
     * @param $API
     *
     * @return bool|false|string
     */
    public function fetch($method, $API)
    {
        $filename  = storage_path() . 'rest/' . md5($API) . ".json";
        $timestamp = storage_path() . 'rest/timestamps/' . md5($API);
        $curl      = curl_init();

        if (file_exists($filename) &&
            (time() - file_get_contents($timestamp)) < 3600) {
            return file_get_contents($filename);
        } else {
            curl_setopt_array($curl, [
                    CURLOPT_URL => $API,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_ENCODING       => "",
                    CURLOPT_MAXREDIRS      => 10,
                    CURLOPT_TIMEOUT        => 30,
                    CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST  => $method,
                    CURLOPT_HTTPHEADER     => [
                        "x-rapidapi-host: {$this->HOST}",
                        "x-rapidapi-key: {$this->KEY}"
                    ]
                ]
            );

            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);

//
//            dump($response);

            if ($err) {
                return "cURL Error #:" . $err;
            } else {
                if (file_exists($filename)) {
                    unlink($filename);
                }
                if (file_exists($timestamp)) {
                    unlink($timestamp);
                }

                file_put_contents($filename , $response);
                file_put_contents($timestamp, time());

                return $response;
            }
        }

    }


    /**
     * A Cron job recreates the JSON files
     * every 5 Seconds to an Hour to refresh its
     * content instead of data always being pulled
     * from the server which takes time.
     * @param $method
     * @param $API
     *
     * @return bool|false|string
     */
    public function cronJob($method, $API)
    {
        $filename  = storage_path() . 'rest/' . md5($API) . ".json";
        $timestamp = storage_path() . 'rest/timestamps/' . md5($API);
        $curl      = curl_init();

        curl_setopt_array($curl, [
                CURLOPT_URL => $API,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_ENCODING       => "",
                CURLOPT_MAXREDIRS      => 10,
                CURLOPT_TIMEOUT        => 30,
                CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST  => $method,
                CURLOPT_HTTPHEADER     => [
                    "x-rapidapi-host: {$this->HOST}",
                    "x-rapidapi-key: {$this->KEY}"
                ]
            ]
        );

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            if (file_exists($filename)) {
                unlink($filename);
            }
            if (file_exists($timestamp)) {
                unlink($timestamp);
            }

            file_put_contents($filename , $response);
            file_put_contents($timestamp, time());
        }

    }
}