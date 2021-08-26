<?php

namespace App\Extensions;

use Groundwork\Extensions\Extension;
use Twig\Environment;

/**
 * This class allows the user to make changes to the rendering engine.
 */
class Rendering implements Extension
{

    /**
     * @param Environment $object
     */
    public function build($object) : void
    {
        // Add any changes to the Twig rendering environment here.

    }
}