<?php

namespace tbreeding\mvc\routing;

function getControllerFromUrl() {
    //look for the parameter page in the URL address
    //if it finds it, it will return it's value
    //if it does not find it, it will return the string 'index'
    return isset($_GET['page']) ? $_GET['page'] : 'list';    
}