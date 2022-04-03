<?php

class Router {

    private $pages = [];

    /**
     * @param array $pages
     */
    public function setPages($url, $path)
    {
        $this->pages[$url] = $path;
    }

    /**
     * @return array
     */
    public function getPages($url)
    {
        $path = $this->pages[$url];
        $page = VIEW_DIR . $path;

        if (file_exists($page)){
            require $page;
        } else {
            require VIEW_DIR ."404.php";
            die();
        }
    }
}