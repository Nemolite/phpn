<?php

class Router {

    private $pages = [];

    /**
     * @param array $pages
     */
    public function setRouters($url, $path)
    {
       $this->pages[$url] = $path;
    }

    /**
     * @return array
     */
    public function getRouters($url)
    {

        if(isset($this->pages[$url])) {
            $page = VIEW_DIR . $this->pages[$url];
        } else {
            $page = null;
        }

        if (file_exists($page)){
            require $page;
        } else {
            require VIEW_DIR ."404.php";
            die();
        }
    }

}