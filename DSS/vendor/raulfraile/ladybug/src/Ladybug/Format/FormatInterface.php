<?php

/*
 * This file is part of the Ladybug package.
 *
 * (c) Raul Fraile <raulfraile@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ladybug\Format;

/**
 * FormatInterface is the interface implemented by all format classes
 *
 * @author Raul Fraile <raulfraile@gmail.com>
 */

interface FormatInterface
{

    /**
     * Gets format name
     *
     * @return string
     */
    public function getName();

}
