<?php

namespace Captcha\Bundle\CaptchaBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('captcha');
        //UserInputID: 'captchaCode', ImageWidth: 250, ImageHeight: 50
        $rootNode
            ->children()
                ->arrayNode('captchaConfig')
                    ->useAttributeAsKey('name')
                    ->variablePrototype()

                    ->end()
                ->end()
                ->booleanNode('addLayoutStylesheetInclude')->defaultTrue()->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
