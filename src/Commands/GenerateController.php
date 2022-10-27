<?php


namespace App\Services\Generavel\Commands;


use Illuminate\Console\GeneratorCommand;

class GenerateController extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generavel:controller {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate Laravel controller.';

    /**
     * @var string
     */
    protected $type = 'GeneravelController';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return 'vendor/thomzee/generavel/src/Commands/Stubs/controller.stub';
    }

    /**
     * @param string $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Http\Controllers\Api';
    }

    protected function replaceController($stub, $name)
    {
        $name = preg_replace('/Controller$/', '', $name);
        $replace = [
            '{{ name }}' => $name,
        ];
        return str_replace(
            array_keys($replace), array_values($replace), $stub
        );
    }

    protected function buildClass($name)
    {
        $stub = parent::buildClass($name);
        $clazz = $this->argument('name');
        return $this->replaceController($stub, $clazz);
    }
}
