<?php

namespace app\controller\index;

use nova\framework\http\Response;
use nova\framework\route\Controller;

class Main extends Controller
{
    function  index() : Response
    {
        return Response::asText("Hello World");
    }
}