<?php

/**
 * LarpManager - A Live Action Role Playing Manager
 * Copyright (C) 2016 Kevin Polez
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace LarpManager\Services\Converter;

use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * LarpManager\Services\Converter\PersonnageLigneeConverter
 */
class PersonnageLigneeConverter
{
	/**
	 * 
	 * @var EntityManager
	 */
    private $em;

    /**
     * Constructeur
     * 
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    /**
     * Fourni la lignée d'un personnage à partir de son identifiant
     * 
     * @param unknown $id
     * @throws NotFoundHttpException
     * @return LarpManager\Entities\PersonnageLignee
     */
    public function convert($id)
    {
    	$personnageLignee = $this->em->find('\LarpManager\Entities\PersonnageLignee',(int) $id);
    	
        if (null === $personnageLignee) {
            throw new NotFoundHttpException(sprintf('La lignée %d n\'existe pas', $id));
        }

        return $personnageLignee;
    }
}