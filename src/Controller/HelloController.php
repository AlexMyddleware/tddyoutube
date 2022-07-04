<?php

namespace Twitter\Controller;

use Twitter\Http\Response;

class HelloController
{
    public function hello(): Response
    {
        return new Response();
    }
}
