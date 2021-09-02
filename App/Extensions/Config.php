<?php

namespace App\Extensions;

use Groundwork\Exceptions\EnvConfigurationException;
use Groundwork\Extensions\Extension;

/**
 * This class allows the user to validate .env file configuration
 */
class Config implements Extension
{

    /**
     * @param \Groundwork\Config\Config $object
     *
     * @throws EnvConfigurationException
     */
    public function build($object) : void
    {
        // Add any .env file configuration checks here.
        // example: `$object::required('key')->notEmpty()->boolean();`

    }
}