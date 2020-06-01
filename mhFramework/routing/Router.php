<?php

namespace mhFramework\routing;


class Router {

    public static function parse($url, $request) {

        $url = trim($url);
        // echo "<br>";
        // echo $url;
        // echo "<br>";

        if ($url == "/Prj0002-Php%20Custom%20MVC/") {
            $request->controller = "index";
            $request->action = "index";
            $request->params = [];
        } else {
            $explode_url = explode('/', $url);
            $explode_url = array_slice($explode_url, 2);
            $request->controller = $explode_url[0];
            $request->action = $explode_url[1];
            $request->params = array_slice($explode_url, 2);
        }

    }
}

?>