<?php

/**
 * @see       https://github.com/mezzio/mezzio-twigrenderer for the canonical source repository
 * @copyright https://github.com/mezzio/mezzio-twigrenderer/blob/master/COPYRIGHT.md
 * @license   https://github.com/mezzio/mezzio-twigrenderer/blob/master/LICENSE.md New BSD License
 */

declare(strict_types = 1);

namespace SolcreMezzio\Smarty\Exception;

use DomainException;
use Psr\Container\ContainerExceptionInterface;

class InvalidConfigException extends DomainException implements
    ContainerExceptionInterface,
    ExceptionInterface
{
}
