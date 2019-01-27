<?php
declare(strict_types=1);

namespace MrFeathers\LibSkeleton;

class PrintRPrinter implements PrinterInterface
{
    public function print(string $value): void
    {
        print_r($value);
    }
}
