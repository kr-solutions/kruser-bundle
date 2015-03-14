<?php

namespace KRSolutions\Bundle\KRUserBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;


/**
 * K&R Solutions KRUserBundle
 */
class KRSolutionsKRUserBundle extends Bundle
{

	/**
	 * Build
	 *
	 * @param ContainerBuilder $container
	 */
	public function build(ContainerBuilder $container)
	{
		parent::build($container);
	}

	/**
	 * Get the parent bundle
	 *
	 * @return string
	 */
	public function getParent()
	{
		return 'FOSUserBundle';
	}

}
