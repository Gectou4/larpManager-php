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

namespace LarpManager\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;

/**
 * LarpManager\Form\UserRestrictionForm
 *
 * @author kevin
 *
 */
class UserRestrictionForm extends AbstractType
{
	/**
	 * Construction du formulaire
	 * 
	 * @param FormBuilderInterface $builder
	 * @param array $options
	 */
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->add('restrictions','entity', array(
					'required' => false,
					'label' => 'Choisissez vos restrictions alimentaires dans la liste ci-dessus',
					'multiple' => true,
					'expanded' => true,
					'class' => 'LarpManager\Entities\Restriction',
					'property' => 'label',
					'placeholder' => 'Aucune',
					'empty_data'  => null,
				))
				->add('new_restriction','text', array(
					'required' => false,
					'label' => 'Si votre restriction alimentaire n\'apparait pas dans la liste, indiquez la içi',
					'mapped' => false,
				));;
	}
	
	/**
	 * Définition de l'entité concerné
	 * 
	 * @param OptionsResolver $resolver
	 */
	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
				'data_class' => 'LarpManager\Entities\User',
		));
	}
	
	/**
	 * Nom du formulaire
	 */
	public function getName()
	{
		return 'userRestriction';
	}
}