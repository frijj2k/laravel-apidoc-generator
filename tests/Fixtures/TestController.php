<?php

namespace Frijj2k\ApiDoc\Tests\Fixtures;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TestController extends Controller
{

    public function dummy()
    {
        return '';
    }

    /**
     * Example title.
     * This will be the long description.
     * It can also be multiple lines long.
     */
    public function parseMethodDescription()
    {
        return '';
    }

    public function parseFormRequestRules(TestRequest $request)
    {
        return '';
    }

    public function addRouteBindingsToRequestClass(DynamicRequest $request)
    {
        return '';
    }

    public function checkCustomHeaders(Request $request)
    {
        return $request->headers->all();
    }

    public function fetchRouteResponse()
    {
        $fixture = new \stdClass();
        $fixture->id = 1;
        $fixture->name = 'banana';
        $fixture->color = 'red';
        $fixture->weight = 300;
        $fixture->delicious = 1;

        return [
            'id' => (int) $fixture->id,
            'name' => ucfirst($fixture->name),
            'color' => ucfirst($fixture->color),
            'weight' => $fixture->weight . ' grams',
            'delicious' => (bool) $fixture->delicious,
        ];
    }

    public function dependencyInjection(DependencyInjection $dependency, TestRequest $request)
    {
        return '';
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function skip()
    {

    }
}
