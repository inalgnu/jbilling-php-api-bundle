<?php

namespace JBilling\Bundle;

use JBilling\Bundle\DependencyInjection\JBillingPHPApiExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * @author Inal DJAFAR <inal.djafar@sensiolabs.com>
 */
class JBillingPHPApiBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->registerExtension(new JBillingPHPApiExtension());
    }
}
