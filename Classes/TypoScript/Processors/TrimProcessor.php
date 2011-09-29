<?php
namespace TYPO3\TYPO3\TypoScript\Processors;

/*                                                                        *
 * This script belongs to the FLOW3 package "TYPO3".                      *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU General Public License, either version 3 of the   *
 * License, or (at your option) any later version.                        *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

/**
 * Processor that trims the current subject (Removes whitespaces arround the value).
 *
 */
class TrimProcessor implements \TYPO3\TypoScript\ProcessorInterface {

	/**
	 * Trims the current subject (Removes whitespaces arround the value).
	 *
	 * @param string $subject The string to be processed
	 * @return string The processed string
	 * @author Andreas Förthner <andreas.foerthner@netlogix.de>
	 * @author Bastian Waidelich <bastian@typo3.org>
	 */
	public function process($subject) {
		return trim((string)$subject);
	}
}
?>
