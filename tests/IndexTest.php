<?php

use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    /* public function test_index_shows_good_hello()
    {
        $_GET['name'] = "alexon";
        ob_start();
        include "index.php";
        $resultat = ob_get_clean();

        $this->assertEquals("Hello alexon", $resultat);
    } */

    public function test_homepage_says_hello()
    {
        $controller =  new \Twitter\Controller\HelloController();
        $response = $controller->hello();
    }
}
