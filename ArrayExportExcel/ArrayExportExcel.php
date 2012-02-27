<?php
class ArrayExportExcelPlugin extends MantisPlugin {

	function register() {
		$this->name = 'Array export to Excel';
		$this->description = 'This plugin allows to easily export PHP arrays to Excel.';

		$this->version = '0.2';
		$this->requires = array(
			'MantisCore' => '1.2.0'
		);

		$this->author = 'Vincent Sels';
		$this->contact = 'vincent_sels@hotmail.com';
		$this->url = 'https://github.com/vincentsels';
	}

	function init() {
		require_once( 'classes/ExcelExporter.php' );
		require_once( 'classes/ExcelExporterIncludingHeader.php' );
	}
}
?>
