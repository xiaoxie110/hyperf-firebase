<?php

declare(strict_types=1);
/**
 * This file is part of hyperf-firebase.
 *
 * @link     https://github.com/fcorz/hyperf-firebase
 * @document https://github.com/fcorz/hyperf-firebase/blob/main/README.md
 * @contact  fengchenorz@gmail.com
 * @license  https://github.com/fcorz/hyperf-firebase/blob/main/LICENSE
 */

namespace Fcorz\Hyperf\Firebase;

use Psr\Container\ContainerInterface;

class ApplicationProxy extends Application
{
    protected string $name = 'default';

    public function __construct(ContainerInterface $container)
    {
        parent::__construct($container, $this->name);
    }
}
