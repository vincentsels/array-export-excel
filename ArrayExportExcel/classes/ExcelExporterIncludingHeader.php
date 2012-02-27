<?php
	/**
	 * Class ExcelExporterIncludingHeader
	 *
	 * Extends ExcelExporter with header support.
	 */
class ExcelExporterIncludingHeader extends ExcelExporter
{
	/**
	 * Add a worksheet and include a header row.
	 * In case $p_header is supplied, use these values as header row.
	 * In case no $p_header is supplied, use the keys of the array as header.
	 *
	 * @param string $p_title Title of worksheet
	 * @param array $p_data 2-dimensional array of data
	 * @param array $p_header optionally specify an array of values to use as header row
	 */
	public function addWorksheetWithHeader( $p_title, $p_data, $p_header = null )
	{
		if ( is_null( $p_header ) ) {
			if ( is_array( $p_data ) && count( $p_data ) > 0 && count( $p_data[0] ) > 0 ) {
				$p_header = array();
				foreach ( $p_data[0] as $key => $value ) {
					$p_header[] = $key;
				}
			}
		}

		if ( !is_null( $p_header ) ) {
			array_unshift( $p_data, $p_header );
		}

		parent::addWorkSheet( $p_title, $p_data );
	}
}