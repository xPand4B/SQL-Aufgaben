<?php
/**
 * @author Eric Heinzl <eric.heinzl@gmail.com>
 * @package xPand4B/SQL-Aufgaben
 * 
 * @copyright 2019 Eric Heinzl
 */

use App\Core\Config\Config;
use App\Core\FileSystem\JSON;
use App\View\ViewLoader;

if(! function_exists('app_path')){
    /**
     * Get the application source path.
     * 
     * @param string $folder
     * 
     * @return string
     */
    function app_path(string $folder = null): string
    {
        return realpath(__DIR__.'/../../' . $folder);
    }
}

if(! function_exists('config')){
    /**
     * Get config data.
     * 
     * @method string App\Core\Config\Config::GetConfig($argument)
     * 
     * @param string $argument
     * 
     * @return mixed
     */
    function config(string $argument = null)
    {
        if(is_null($argument)){
            return;
        }

        return Config::GetConfig($argument);
    }
}

if(! function_exists('error')){
    /**
     * Displays error message(s).
     *
     * @param array $messages
     * 
     * @return void
     */
    function error(array $errors = null, string $message = null): void
    {
        if(is_null($message)){
            echo 'Something went wrong.';
        }

        echo $message;
        
        if(! is_null($errors)){
            echo '<ul class="text-danger">';
            foreach($errors as $error){
                echo '<li>'.$error.'</li>';
            }
            echo '</ul>';
        }
        die(1);
    }
}

if(! function_exists('public_path')){
    /**
     * Get the public application path.
     * 
     * @method string app_path(string $folder)
     *
     * @return string
     */
    function public_path(): string
    {
        return app_path('/public');
    }
}

if(! function_exists('resource_path')){
    /**
     * Get the resource path.
     * 
     * @method string app_path(string $folder)
     * 
     * @param string $resourceName
     *
     * @return string
     */
    function resource_path(string $resourceName = null): string
    {
        return app_path('/resources/' . $resourceName);
    }
}

if(! function_exists('root_path')){
    /**
     * Get the application root directory.
     * 
     * @return string
     */
    function root_path(string $directory = null): string
    {
        return app_path('../' . $directory);
    }
}

if(! function_exists('script')){
    /**
     * Returns a script include.
     *
     * @method string url(string $name)
     * 
     * @return void
     */
    function script(string $script = null): void
    {
        if(is_null($script)){
            return;
        }

        echo '<script type="text/javascript" src="' . url('js/'. $script) . '"></script>';
    }
}

if(! function_exists('storage_path')){
    /**
     * Get the storage path.
     * 
     * @method string app_path(string $folder)
     * 
     * @param string $storageName
     *
     * @return string
     */
    function storage_path(string $storageName = null): string
    {
        return app_path('/storage/' . $storageName);
    }
}

if(! function_exists('style')){
    /**
     * Returns a stylesheet include.
     * 
     * @method string url(string $name)
     * 
     * @param string $stylesheet
     * 
     * @return string
     */
    function style(?string $stylesheet): void
    {
        if(is_null($stylesheet)){
            return;
        }
        
        echo '<link media="all" type="text/css" rel="stylesheet" href="' . url('css/' . $stylesheet) . '">';
    }
}

if(! function_exists('url')){
    /**
     * Get the current url.
     * 
     * @param string $name
     * 
     * @return string
     */
    function url(string $name = null): string
    {
        if(! is_null($name) && !empty($name)){
            if($name[0] == '/'){
                $name = ltrim($name, '/');
            }
        }

        return $_SERVER['BASE'].$name;
    }
}

if(! function_exists('view')){
    /**
     * Include view, depending on call inside specific controller.
     * 
     * @method mixed App\Core\View\ViewLoader::Render(string $view, array $data)
     * 
     * @param string $view [View Name]
     * @param array  $data [Optional: Data to parse inside view]
     * 
     * @return void
     */
    function view(string $view = null, array $data = []): void
    {
        if(is_null($view) || empty($view)){
            error(
                ["One of your views is empty."],
                'Some settings are messed up.'
            );  
        }

        ViewLoader::Render($view, $data);
    }
}
