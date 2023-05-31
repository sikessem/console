<?php

namespace Sikessem\Console\Tests\Unit;

use Sikessem\Console\Application;
use Sikessem\Console\Tests\ApplicationTester;
use Symfony\Component\Console\Application as BaseApplication;
use Symfony\Component\Console\Tester\ApplicationTester as BaseApplicationTester;

beforeEach(function () {
    $this->app = new Application('Sikessem');
});

it('should be an instance of '.BaseApplication::class, function () {
    expect($this->app)->toBeInstanceOf(BaseApplication::class);
});

test('tester should be an instance of '.BaseApplicationTester::class, function () {
    expect(new ApplicationTester($this->app))->toBeInstanceOf(BaseApplicationTester::class);
});
