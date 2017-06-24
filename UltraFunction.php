<?php

class Weather {
    const API_URL_CURRENT = "http://api.openweathermap.org/data/2.5/weather?lat=37.873139&lon=127.156804&units=metric&APPID=c814c2bb45d078cf0561d25c91eb6c39";
    const API_URL_FORECAST = "http://api.openweathermap.org/data/2.5/forecast/daily?lat=37.873139&lon=127.156804&cnt=5&units=metric&APPID=c814c2bb45d078cf0561d25c91eb6c39";
    public static function get_current_weather() {
        $c = curl_init(self::API_URL_CURRENT);
        $options = array( CURLOPT_HEADER => false, CURLOPT_RETURNTRANSFER => true );
        curl_setopt_array($c, $options);
        $data = curl_exec($c); curl_close($c);
        if (isset($data) && $data) {
            $data_obj = json_decode($data);
            $result = array( 'current_temp' => $data_obj->main->temp, 'temp_min' => $data_obj->main->temp_min, 'temp_max' => $data_obj->main->temp_max, 'desc' => $data_obj->weather[0]->main, 'icon' => "http://openweathermap.org/img/w/{$data_obj->weather[0]->icon}.png", 'status' => 'ok' );
            return $result;
        }
    }
    public static function get_weather_forecast() {
        $c = curl_init(self::API_URL_FORECAST);
        $options = array( CURLOPT_HEADER => false, CURLOPT_RETURNTRANSFER => true );
        curl_setopt_array($c, $options); $data = curl_exec($c);
        curl_close($c);
        return json_decode($data);
    }
}

class Currency {

    function get_currency($from_currency, $to_currency) {
        $url = 'http://download.finance.yahoo.com/d/quotes.csv?s='.$from_currency.$to_currency.'=X&f=sl1d1t1c1ohgv&e=.csv';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $currency_csv = curl_exec($ch);
        curl_close ($ch);

        $csv_data = explode(',', $currency_csv);
        $currency_value = -1;
        if(sizeof($csv_data) == 9 && isset($csv_data[1]))
        {
            $currency_value = (float)$csv_data[1];
            $currency_value = number_format($currency_value,2, '.', '');

            // FIXME: Do Something
        }
        unset($csv_data); unset($currency_csv);
        return $currency_value;
    }
}
class News
{
    function show_news()
    {

        $client_id = "tj3eIW98jENMxSEgr0HV";
        $client_secret = "0_FJ0EvETR";
        $encText = urlencode("IT정보");
        $url = "https://openapi.naver.com/v1/search/news.xml?sort=sim&display=3&query=" . $encText;
        $is_post = false;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, $is_post);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $headers = array();
        $headers[] = "X-Naver-Client-Id: " . $client_id;
        $headers[] = "X-Naver-Client-Secret: " . $client_secret;
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
//  echo "status_code:".$status_code." ";
        curl_close($ch);
        $xml = simplexml_load_string($response);
//echo print_r($xml);
        $count = $xml->channel->display;

        for ($i = 0; $i < $count; $i++) {
            $title = $xml->channel->item[$i]->title;
            $link = $xml->channel->item[$i]->link;
            $description = $xml->channel->item[$i]->description;
            $bloggername = $xml->channel->item[$i]->bloggername;

            echo "<a href='$link'" . $title . "</a><br>";

        }

    }
}

?>