<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Autoloader pre-system hook for CodeIgniter
 *
 * @author andy
 * @copyright (c) 2012, andy
 * @license MIT License
 * @category CI Hook
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is furnished
 * to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
 * FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS
 * OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, W
 * HETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR
 * IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 */

/**
 * Calls the spl_autoload_register function to activate the
 * autoloader.  Called by the CI pre-system hook.
 * @return void
 */
function callAutoloader()
{
    spl_autoload_register('autoloadInterfaces');
}

/**
 * Autoloads classes that are not part of CI
 * Classes must be in the
 * @param string $className  Name of class being loaded
 * @return void
 */
function autoloadInterfaces($className)
{
    //Directory where clases will be stored (relative to application folder
    $filepath = 'models/abstract/';

    //check to make sure we are dealing with an interface or abstract class
    $filename = APPPATH . $filepath . strtolower($className) . '.php';
    if (file_exists($filename)) {
        require_once  $filename;
    }

}
