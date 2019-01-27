<?php
declare(strict_types=1);

namespace MrFeathers\LibSkeleton;

class EchoPrinter implements PrinterInterface
{
    public function print(string $value): void
    {
        echo $value;
    }
}
