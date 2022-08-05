<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 2.1.6-dev (doctrine2-annotation) on 2016-09-21 09:47:00.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace LarpManager\Entities;

use LarpManager\Entities\BaseItem;

/**
 * LarpManager\Entities\Item
 *
 * @Entity(repositoryClass="LarpManager\Repository\ItemRepository")
 */
class Item extends BaseItem
{
	public function __construct()
	{
		$this->setDateCreation(new \Datetime('NOW'));
		$this->setDateUpdate(new \Datetime('NOW'));
		$this->setQuantite(1);
		parent::__construct();
	}

	public function getIdentite()
	{
		return $this->getNumero().' - '.$this->getLabel();
	}

	public function getIdentiteReverse()
	{
		return $this->getLabel().' ('.$this->getNumero().')';
	}
}