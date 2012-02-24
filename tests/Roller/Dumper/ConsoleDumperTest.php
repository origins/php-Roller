<?php

class ConsoleDumperTest extends PHPUnit_Framework_TestCase
{
	function test()
	{
		$routes = new Roller\RouteSet;
		$routes->add( '/blog/:year/:month' , function() { return 'Yes'; },array( 'year' => '\d' ));
		$routes->compile();

		$dumper = new Roller\Dumper\ConsoleDumper;
		$dumper->dump( $routes );
	}
}

