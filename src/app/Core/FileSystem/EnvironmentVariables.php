<?php
/**
 * @author Eric Heinzl <eric.heinzl@gmail.com>
 * @package xPand4B/SQL-Aufgaben
 * 
 * @copyright 2019 Eric Heinzl
 */

namespace App\Core\FileSystem;

use Dotenv\Dotenv;
use Dotenv\Exception\InvalidFileException;
use Dotenv\Exception\InvalidPathException;
use Dotenv\Exception\ValidationException;

class EnvironmentVariables
{
    /**
     * Load the environment variables.
     *
     * @package https://github.com/vlucas/phpdotenv
     * 
     * @return void
     */
    public static function load()
    {
        try{
            $dotenv = Dotenv::create(
                config('filesystem.environment_path'),
                config('filesystem.environment_file')
            );
            $dotenv->load();

            $dotenv->required('APP_NAME')->notEmpty();

            $dotenv->required('DB_HOST')->notEmpty();
            $dotenv->required('DB_USERNAME')->notEmpty();
            $dotenv->required('DB_PASSWORD');

        }catch(ValidationException $e){
            error([$e->getMessage()]);
            die(1);

        }catch(InvalidPathException $e){
            error([$e->getMessage()]);
            die(1);

        }catch(InvalidFileException $e){
            error([$e->getMessage()]);
            die(1);
        }
    }
}
