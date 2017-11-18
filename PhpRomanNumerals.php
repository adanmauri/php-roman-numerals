<?php
/**
 * @license
 * Copyright 2017 Adán Mauri Ungaro <adan.mauri@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

function deromanize(String $number)
{
	$number = str_replace(" ", "", strtoupper($number));
	$numerals = array( "M"=>1000, "CM"=>900, "D"=>500, "CD"=>400, "C"=>100, "XC"=>90, "L"=>50, "XL"=>40, "X"=>10, "IX"=>9, "V"=>5, "IV"=>4, "I"=>1 );	
	$result = 0;
	foreach ($numerals as $key=>$value) {
		while (strpos($number, $key) === 0) {
			$result += $value;
			$number = substr($number, strlen($key));
		}
	}
	return $result;
}

function romanize($number)
{
	$numerals = array( "M"=>1000, "CM"=>900, "D"=>500, "CD"=>400, "C"=>100, "XC"=>90, "L"=>50, "XL"=>40, "X"=>10, "IX"=>9, "V"=>5, "IV"=>4, "I"=>1 );	
	$result = "";
	foreach ($numerals as $key=>$value) {
		$result .= str_repeat($key, $number / $value);
		$number %= $value;
	}
	return $result;
}
?>
