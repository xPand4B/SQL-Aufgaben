<?php
/**
 * Handles View output
 * 
 * @author Eric Heinzl <xpand.4beatz@gmail.com>
 */

namespace App\View;

use Jenssegers\Blade\Blade;

class ViewLoader
{
    /**
     * Include view, depending on call inside specific controller
     * 
     * @param string  $view [View Name]
     * @param array $data [Optional: Data to parse inside view]
     * 
     * @return View
     */
    public static function render(string $view, array $data = []): void
    {
        $Blade = new Blade(
            '../resources/views',
            '../storage/views'
        );

        echo $Blade->render($view, $data);
    }
}