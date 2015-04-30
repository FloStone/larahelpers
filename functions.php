<?php

if ( ! function_exists('days_in_month'))
{
	/**
	 * Calculate the number of days in month
	 *
	 * @param int $month
	 * @param int $year
	 * @return void
	 */
	function days_in_month($month, $year)
	{
		return $month == 2 ? ($year % 4 ? 28 : ($year % 100 ? 29 : ($year % 400 ? 28 : 29))) : (($month - 1) % 7 % 2 ? 30 : 31);
	}
}