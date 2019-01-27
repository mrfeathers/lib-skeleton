##TutuRu LibSkeleton
It's a demo library for TutuRu Library Skeleton.

##Usage

LibSkeleton can print greetings using a printer class. You can use some of the available printers from this lib
or create your own (just implement `PrinterInterface`).

```php
$printer = new EchoPrinter();

$libSkeleton = new LibSkeleton($printer);
$libSkeleton->hello('Alexander');

```

###Available Printers
- `EchoPrinter` - uses `echo`
- `PrintRPrinter` - uses `print_r`

##Logging

LibSkeleton implements `LoggerAwareInterface`, set `Psr\LoggerInterface` logger to LibSkeleton object.
```php
$printer = new EchoPrinter();

$libSkeleton = new LibSkeleton($printer);
$logger = new NullLogger();
$libSkeleton->setLogger($logger);
```

##Maintainers
???