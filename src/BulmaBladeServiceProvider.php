<?php

namespace Nvade\BulmaBlade;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Illuminate\View\Compilers\BladeCompiler;
use Nvade\BulmaBlade\Components\BladeComponent;
use Nvade\BulmaBlade\Commands\PublishCommand;

class BulmaBladeServiceProvider extends ServiceProvider
{
    protected $namespace = 'nvade:bb';

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/bulma-blade-components.php', 'bulma-blade-components');

        if ($this->app->runningInConsole()) {
            $this->commands([
                PublishCommand::class,
            ]);
        }
    }

    public function boot()
    {
        $this->bootResources();
        $this->bootBladeComponents();
        $this->bootDirectives();
        $this->bootPublishing();
    }

    private function bootResources(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', $this->namespace);
    }

    private function bootBladeComponents(): void
    {
        $this->callAfterResolving(BladeCompiler::class, function (BladeCompiler $blade) {
            $prefix = config('bulma-blade-components.prefix', '');
            $assets = config('bulma-blade-components.assets', []);

            /** @var BladeComponent $component */
            foreach (config('bulma-blade-components.components', []) as $alias => $component) {
                $blade->component($component, $alias, $prefix);
                $this->registerAssets($component, $assets);
            }
        });
    }

    private function registerAssets($component, array $assets): void
    {
        foreach ($component::assets() as $asset) {
            $files = (array) ($assets[$asset] ?? []);

            collect($files)->filter(function (string $file) {
                return Str::endsWith($file, '.css');
            })->each(function (string $style) {
                BulmaBlade::addStyle($style);
            });

            collect($files)->filter(function (string $file) {
                return Str::endsWith($file, '.js');
            })->each(function (string $script) {
                BulmaBlade::addScript($script);
            });
        }
    }

    private function bootDirectives(): void
    {
        Blade::directive('bbStyles', function (string $expression) {
            return "<?php echo Nvade\\BulmaBlade\\BulmaBlade::outputStyles($expression); ?>";
        });

        Blade::directive('bbScripts', function (string $expression) {
            return "<?php echo Nvade\\BulmaBlade\\BulmaBlade::outputScripts($expression); ?>";
        });
    }

    private function bootPublishing(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/bulma-blade-components.php' => $this->app->configPath('bulma-blade-components.php'),
            ], 'bulma-blade-config');

            $this->publishes([
                __DIR__.'/../resources/views' => $this->app->resourcePath('views/vendor/bulma-blade-components'),
            ], 'bulma-blade-views');
        }
    }
}
