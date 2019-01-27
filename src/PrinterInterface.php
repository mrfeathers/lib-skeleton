<?php
declare(strict_types=1);

namespace MrFeathers\LibSkeleton;

interface PrinterInterface
{
    public function print(string $value): void;
}
