<?php

namespace PaulhenriL\StubProjectName\Tests\Feature;

use PaulhenriL\StubProjectName\StubProjectNameServiceProvider;
use PaulhenriL\StubProjectName\Tests\TestCase;

class EngineLoadedTest extends TestCase
{
    public function test_that_the_engine_is_loaded()
    {
        $providers = $this->app->getLoadedProviders();

        $engineIsLoaded = $providers[StubProjectNameServiceProvider::class] ?? false;

        $this->assertTrue($engineIsLoaded);
    }
}
