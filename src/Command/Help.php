<?php
/**
 * @author Jefferson González
 * @license MIT
 * @link http://github.com/peg-org/peg-custom Source code.
 */

namespace Peg\Custom\Command;

use Peg\Custom\Application;

/**
 * Display overall help or for a given command.
 */
class Help extends \Peg\Custom\CommandLine\Command
{

    public function __construct()
    {
        parent::__construct("help");

        $this->description = t("Display a help message for a specific command.");

        $this->description .= "\n" . t("Example:") . " " .
            Application::GetCLIParser()->application_name . " help <command>"
        ;

        $this->RegisterAction(new Action\Help());
    }

}