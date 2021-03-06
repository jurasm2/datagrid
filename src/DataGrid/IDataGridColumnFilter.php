<?php
namespace DataGrid;

/**
 * Defines method that must be implemented to allow a component act like a data grid column's filter.
 *
 * @author     Roman Sklenář
 * @copyright  Copyright (c) 2009 Roman Sklenář
 * @package    Nette\Extras\DataGrid
 * @version    $Id: IDataGridColumnFilter.php 5 2009-05-02 21:38:31Z RSklenar@seznam.cz $
 */
interface IDataGridColumnFilter
{
	/**
	 * Returns filter's form element.
	 * @return FormControl
	 */
	function getFormControl();
	
	
	/**
	 * Gets filter's value, if was filtered.
	 * @return string
	 */
	public function getValue();

}