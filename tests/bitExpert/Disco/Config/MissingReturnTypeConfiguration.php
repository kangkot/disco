<?php

/*
 * This file is part of the Disco package.
 *
 * (c) bitExpert AG
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace bitExpert\Disco\Config;

use bitExpert\Disco\Annotations\Bean;
use bitExpert\Disco\Annotations\Configuration;
use bitExpert\Disco\Helper\SampleService;

/**
 * @Configuration
 */
class MissingReturnTypeConfiguration
{
    /**
     * @Bean({"singleton"=false, "lazy"=false, "scope"="request"})
     */
    public function nonSingletonNonLazyRequestBean()
    {
        return new SampleService();
    }
}
