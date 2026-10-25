<?php

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\FeatureTestTrait;

/**
 * @internal
 */
final class HomeRouteTest extends CIUnitTestCase
{
    use FeatureTestTrait;

    public function testHomeReturnsOkAndRendersView(): void
    {
        $result = $this->get('home');

        $result->assertOK();
        $result->assertSee('View Renderer');
        $result->assertSee('app/Views/home.php');
    }

    public function testHomePassesDataToView(): void
    {
        $result = $this->get('home');

        $result->assertSee('Bienvenido');
    }
}
