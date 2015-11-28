<?php
/**
 * @author Jefferson González
 * @license MIT
 * @link http://github.com/peg-org/peg-custom Source code.
 */

namespace Peg\Custom\Command\Action\Generate;

use Peg\Custom\Application;

/**
 * Implements a zendphp5 engine generator action using \Peg\Lib\Generator\ZendPHP5.
 * @see \Peg\Lib\Generator\ZendPHP5
 */
class ZendPHP5 extends \Peg\Custom\Command\Action\Generate\Base
{

    /**
     * Initialize this action to be for engine zendphp5.
     */
    public function __construct()
    {
        parent::__construct("zendphp5");
    }

    /**
     * Initializes the generator process.
     */
    public function Start()
    {
        $generator = new \Peg\Lib\Generator\ZendPHP5(
            "templates",
            ".",
            Application::GetDefinitions()
        );

        $generator->Start();
    }

}