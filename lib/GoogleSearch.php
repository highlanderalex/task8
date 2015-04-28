<?php
class GoogleSearch
{
    private $query;

    public function __construct($search)
    {
        $search = str_replace(' ', '+', $search);
        $timeout = 3;
        $userAgent = $_SERVER['HTTP_USER_AGENT'];
        $url = 'http://www.google.com.ua/search?hl=en&tbo=d&site=&source=hp&q=' . $search;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);             
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); 
        $this->query = curl_exec($ch);
        //curl_exec($ch);
        curl_close($ch);
    }        

        private function parseRezult()
        {
            $html = new DomDocument();  
            @$html->loadHTML($this->query);
            $div = $html->getElementById('res');
            $this->query = $html->saveHTML($div);

        }

        public function getSearch()
        {
            $this->parseRezult();
            return $this->query;
        }

    }
