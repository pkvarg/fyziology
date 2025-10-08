<?php

declare(strict_types = 1);

namespace Patrikjak\WebComponents\Tests;

use Illuminate\Foundation\Application;
use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Patrikjak\WebComponents\WebComponentsServiceProvider;
use Spatie\Snapshots\MatchesSnapshots;

abstract class TestCase extends OrchestraTestCase
{
    use MatchesSnapshots {
        assertMatchesHtmlSnapshot as baseAssertMatchesHtmlSnapshot;
    }

    public function assertMatchesHtmlSnapshot(string $actual): void
    {
        $actual = preg_replace(
            '/<meta\s+name="csrf-token"\s+content="([^"]+)"/',
            '<meta name="csrf-token" content="{CSRF-TOKEN}"',
            $actual
        );

        $actual = preg_replace('/name="_token"\s+value="[^"]*"/', 'name="_token" value="{TOKEN}"', $actual);

        $actual = preg_replace(
            '/<input[^>]*name="token"\s*["\']?[^>]*value\s*=\s*["\']?([^"\'\s>]+)["\']?>/',
            '<input name="token" value="TOKEN"> <!-- REPLACED INPUT -->',
            $actual,
        );

        $this->baseAssertMatchesHtmlSnapshot($actual);
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->app->setLocale('test');
        $this->app->setFallbackLocale('test');
    }

    /**
     * @phpcsSuppress SlevomatCodingStandard.TypeHints.ParameterTypeHint.MissingNativeTypeHint
     * @param Application $app
     * @return array<class-string>
     */
    protected function getPackageProviders($app): array
    {
        return [
            WebComponentsServiceProvider::class,
        ];
    }
}