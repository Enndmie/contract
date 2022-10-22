<?php

declare(strict_types=1);

namespace Hey\Contract;

use Psr\Container\ContainerInterface as PsrContainerInterface;

interface ContainerInterface extends PsrContainerInterface
{
    public function make(string $name, array $parameters = []);

    public function set(string $name, $entry): void;

    public function unbind(string $name): void;

    public function define(string $name, $definition): void;
}