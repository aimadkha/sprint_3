<?php

class Core {
    protected $currentController = 'page';
    protected $currentmethods = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->getUrl();
        if(file_exists('../app/controllers/'.ucwords($url[0]).'.php'))
        {
            $this->currentController = ucwords($url[0]) ;
        }
    }

    public function getUrl(){
        if (isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }

}
?>