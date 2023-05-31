<?php

use Sikessem\Console\Application;
use Symfony\Component\Console\Application as BaseApplication;

it('should be an instance of the Symfony console application', function () {
    expect(new Application)->toBeInstanceOf(BaseApplication::class);
});
