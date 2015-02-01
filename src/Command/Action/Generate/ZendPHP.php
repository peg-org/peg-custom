<?php
/**
 * @author Jefferson González
 * @license MIT
 * @link http://github.com/peg-org/peg-custom Source code.
 */

namespace Peg\Custom\Command\Action\Generate;

use Peg\Custom\Application;

/**
 * Implements a zendphp engine generator action using \Peg\Lib\Generator\ZendPHP.
 * @see \Peg\Lib\Generator\ZendPHP
 */
class ZendPHP extends \Peg\Custom\Command\Action\Generate\Base
{
    
    /**
     * Initialize this action to be for engine zendphp.
     */
    public function __construct()
    {
        parent::__construct("zendphp");
    }

    /**
     * Initializes the generator process.
     */
    public function Start()
    {   
        $generator = new \Peg\Lib\Generator\ZendPHP(
            "templates", 
            ".", 
            Application::GetDefinitions()
        );
        
        $generator->Start();
    }

}