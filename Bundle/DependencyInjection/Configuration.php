<?php

namespace JBilling\Bundle\DependencyInjection;

use Symfony\Component\Config\Definition\ConfigurationInterface;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;

/**
 * @author Inal DJAFAR <inal.djafar@sensiolabs.com>
 */
class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();

        $treeBuilder
            ->root('jbilling_api', 'array')
                ->children()
                    ->scalarNode('url')->cannotBeEmpty()->end()
                    ->scalarNode('username')->cannotBeEmpty()->end()
                    ->scalarNode('password')->cannotBeEmpty()->end()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
