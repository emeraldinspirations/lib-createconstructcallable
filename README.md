![emeraldinspirations logo](http://vps56132.vps.ovh.ca/logo.gitHub.png)
# lib-createconstructcallable
> A component of  [emeraldinspiration](https://github.com/emeraldinspirations)'s [library](https://github.com/emeraldinspirations/library).

Returns an anonymous callable function referencing the constructor of a class

PHP does not yet have a syntax for creating a callable for the constructor
of a class.  Some workarounds involve using ReflectionClass. (See:
https://stackoverflow.com/q/24129450/6699286)

This class provides an alternate option.  It creates an anonymous function that fulfills the callable need and runs the relevant constructor.

## Installing / Getting started

This project has no dependencies, so can simply be required with
[composer](https://getcomposer.org/)

```shell
composer require emeraldinspirations/lib-createconstructcallable
```

## How to use

```php
<?php

$Callable = ConstructCallableCreator::createConstructCallable(
    ExampleClass::class
);

$NewClass = $Callable($Param1, $Param2);
//Same result as new ExampleClass($Param1, $Param2)
```

## Licensing

The code in this project is licensed under [MIT license](LICENSE).
