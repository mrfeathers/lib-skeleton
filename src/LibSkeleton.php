<?php
declare(strict_types=1);

namespace MrFeathers\LibSkeleton;

use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerAwareTrait;

class LibSkeleton implements LoggerAwareInterface
{
    use LoggerAwareTrait;
    
    /** @var PrinterInterface  */
    private $printer;
    
    public function __construct(PrinterInterface $printer)
    {
        $this->printer = $printer;
    }
    
    public function hello(string $name): void
    {
        $this->logger && $this->logger->info("Got name '{$name}' for printing hello");
        $this->printer->print("Hello, {$name}!");
    }
}
