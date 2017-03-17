<?php
/**
 * Created by PhpStorm.
 * User: inhere
 * Date: 2016/12/7
 * Time: 13:23
 */

namespace inhere\console;

use inhere\console\io\Input;
use inhere\console\io\Output;

/**
 * Class Command
 * @package inhere\console
 */
abstract class Command extends AbstractCommand
{
    // command usage message
    const USAGE       = '';

    // command example message
    const EXAMPLE     = '';

    /**
     * Command constructor.
     * @param Input $input
     * @param Output $output
     */
    public function __construct(Input $input, Output $output)
    {
        $this->input  = $input;
        $this->output = $output;
    }

    abstract public function execute();

    public function help()
    {
        $this->write('No help information.');
    }

    /**
     * @param string $msg
     * @return string
     */
    protected function read($msg = '')
    {
        return $this->input->read($msg);
    }

    /**
     * @param $message
     * @param bool $nl
     * @param bool $quit
     */
    protected function write($message, $nl = true, $quit = false)
    {
        $this->output->write($message, $nl, $quit);
    }
}
