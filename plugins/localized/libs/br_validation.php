<?php
/**
 * Brazillian Localized Validation class. Handles localized validation for Brazil
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright	 Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link		  http://cakephp.org
 * @package	   localized
 * @subpackage	localized.libs
 * @since		 Localized Plugin v 0.1
 * @license	   MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * BrValidation
 *
 * @package	   localized
 * @subpackage	localized.libs
 */
class BrValidation {

/**
 * Checks phone numbers for Brazil
 *
 * @param string $check The value to check.
 * @return boolean
 * @access public
 */
	function phone($check) {
		return (bool)preg_match('/^(\+?\d{1,3}? ?)?(\(0?\d{2}\) ?)?\d{4}[-. ]?\d{4}$/', $check);
	}

/**
 * Checks zipcodes (CEP) for Brazil
 *
 * @param string $check The value to check.
 * @return boolean
 * @access public
 */
	function postal($check) {
		return (bool)preg_match('/^[0-9]{5}-?[0-9]{3}$/', $check);
	}

/**
 * Checks SSN for Brazil
 *
 * @param string $check The value to check.
 * @return boolean
 * @access public
 */
	function ssn($check) {
		return BrValidation::cpf($check) || BrValidation::cnpj($check);
	}

/**
 * Checks CPF for Brazil
 *
 * @param string $check The value to check.
 * @return boolean
 * @access public
 */
	function cpf($check) {
		$check = trim($check);

		// sometimes the user submits a masked CNPJ
		if (preg_match('/^\d\d\d.\d\d\d.\d\d\d\-\d\d/', $check)) {
			$check = str_replace(array('-', '.', '/'), '', $check);
		} else if (!ctype_digit($check)) {
			return false;
		}
		
		// sometimes the user submits eleven numbers equal.
		switch($check){
			case '00000000000':
			case '11111111111':
			case '22222222222':
			case '33333333333':
			case '44444444444':
			case '55555555555': 
			case '66666666666':
			case '77777777777':
			case '88888888888':
			case '99999999999':
				return false;
			break;
		}

		if (!ctype_digit($check)) {
			return false;
		}

		if (strlen($check) != 11) {
			return false;
		}
		$dv = substr($check, -2);
		for ($pos = 9; $pos <= 10; $pos++) {
			$sum = 0;
			$position = $pos + 1;
			for ($i = 0; $i <= $pos - 1; $i++, $position--) {
				$sum += $check[$i] * $position;
			}
			$div = $sum % 11;
			if ($div < 2) {
				$check[$pos] = 0;
			} else {
				$check[$pos] = 11 - $div;
			}
		}
		$dvRight = $check[9] * 10 + $check[10];

		return ($dvRight == $dv);
	}

/**
 * Checks CNPJ for Brazil
 *
 * @param string $check The value to check.
 * @return boolean
 * @access public
 */
	function cnpj($check) {
		$check = trim($check);
		// sometimes the user submits a masked CNPJ
		if (preg_match('/^\d\d.\d\d\d.\d\d\d\/\d\d\d\d\-\d\d/', $check)) {
		  $check = str_replace(array('-', '.', '/'), '', $check);
		} else if (!ctype_digit($check)) {
			return false;
		}
		
		// sometimes the user submits eleven numbers equal
		switch($check){
			case '00000000000000':
			case '11111111111111':
			case '22222222222222':
			case '33333333333333':
			case '44444444444444':
			case '55555555555555':
			case '66666666666666':
			case '77777777777777':
			case '88888888888888':
			case '99999999999999':
				return false;
			break;				
		}

		if (strlen($check) != 14) {
			return false;
		}
		$first_sum = ($check[0] * 5) + ($check[1] * 4) + ($check[2] * 3) + ($check[3] * 2) +
			($check[4] * 9) + ($check[5] * 8) + ($check[6] * 7) + ($check[7] * 6) +
			($check[8] * 5) + ($check[9] * 4) + ($check[10] * 3) + ($check[11] * 2);

		$first_verification_digit = ($first_sum % 11) < 2 ? 0 : 11 - ($first_sum % 11);

		$second_sum = ($check[0] * 6) + ($check[1] * 5) + ($check[2] * 4)+($check[3] * 3) +
			($check[4] * 2) + ($check[5] * 9) + ($check[6] * 8) + ($check[7] * 7) +
			($check[8] * 6) + ($check[9] * 5) + ($check[10] * 4) + ($check[11] * 3) +
			($check[12] * 2);

		$second_verification_digit = ($second_sum % 11) < 2 ? 0 : 11 - ($second_sum % 11);

		return ($check[12] == $first_verification_digit) && ($check[13] == $second_verification_digit);
	}
}
