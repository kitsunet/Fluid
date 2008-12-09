<?php
declare(ENCODING = 'utf-8');
namespace F3::Fluid::ViewHelpers::Form;

/*                                                                        *
 * This script is part of the TYPO3 project - inspiring people to share!  *
 *                                                                        *
 * TYPO3 is free software; you can redistribute it and/or modify it under *
 * the terms of the GNU General Public License version 2 as published by  *
 * the Free Software Foundation.                                          *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General      *
 * Public License for more details.                                       *
 *                                                                        */

/**
 * @package 
 * @subpackage 
 * @version $Id:$
 */
/**
 * Enter description here...
 * @scope prototype
 */
class HiddenViewHelper extends F3::Fluid::Core::AbstractViewHelper {
	
	public function initializeArguments() {
		$this->registerArgument('name', 'string', 'Name of tag', TRUE);
		$this->registerArgument('value', 'string', 'Value-Attribute', TRUE);
	}
	public function render() {
		$out = '<input type="hidden" name="' . $this->arguments['name'] . '" value="' . $this->arguments['value'] . '" />';
		return $out;
	}
}


?>