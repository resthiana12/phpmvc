<?php

class App{

    public function __construct()
    {
        $url = $this->parse_url();
        var_dump($url);
    }

    public function parse_url()//method yg digunalan untuk memparsing url
    {
        //jika ada urlnya maka
        if(isset($_GET['url'])){//ambil url tersebut
            $url = rtrim($_GET['url'], '/'); //hilangkan tanda slash diakhir
            $url = filter_var($url, FILTER_SANITIZE_URL);//bersihkan url dari karakter2 aneh
            $url = explode('/', $url); //pecah string-stringnya berdasarkan tanda slash yang berdasar url
            return $url;
        }
    }

}