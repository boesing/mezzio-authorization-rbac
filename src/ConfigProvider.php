<?php

/**
 * @see       https://github.com/mezzio/mezzio-authorization-rbac for the canonical source repository
 * @copyright https://github.com/mezzio/mezzio-authorization-rbac/blob/master/COPYRIGHT.md
 * @license   https://github.com/mezzio/mezzio-authorization-rbac/blob/master/LICENSE.md New BSD License
 */

namespace Mezzio\Authorization\Rbac;

class ConfigProvider
{
    public function __invoke() : array
    {
        return [
            'dependencies' => $this->getDependencies(),
        ];
    }

    public function getDependencies() : array
    {
        return [
            LaminasRbac::class => LaminasRbacFactory::class,
        ];
    }
}
