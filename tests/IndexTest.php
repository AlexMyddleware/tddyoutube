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
        // given, situation initiale
        $_GET['name'] = 'alexon';

        // when, elem perturbateur
        $controller =  new \Twitter\Controller\HelloController();
        $response = $controller->hello();

        // then, alors
        $this->assertEquals("Hello alexon", $response->getContent());
    }
}
