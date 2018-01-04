<?php
/**
 * Class ConsoleLog
 *
 * @filesource   ConsoleLog.php
 * @created      04.01.2018
 * @package      chillerlan\Logger\Output
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2018 Smiley
 * @license      MIT
 */

namespace chillerlan\Logger\Output;

/**
 */
class ConsoleLog extends LogOutputAbstract{

	public function log(string $level, string $message, array $context = null){
		echo $this->message($level, $message, $context);
	}

	public function close():LogOutputInterface{
		echo  $this->message('-', 'fin');

		return $this;
	}

	protected function message(string $level, string $message, array $context = null){
		return sprintf($this->options->consoleFormat, date($this->options->consoleDateFormat), $level, $message).PHP_EOL;
	}
}