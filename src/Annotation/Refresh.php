<?php
/**
 * This file is part of the BEAR.QueryRepository package
 *
 * @license http://opensource.org/licenses/bsd-license.php BSD
 */
namespace BEAR\RepositoryModule\Annotation;

/**
 * @Annotation
 * @Target("METHOD")
 */
final class Refresh
{
    /**
     * @var string
     */
    public $uri = false;
}
