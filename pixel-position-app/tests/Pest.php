<?php
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase;

uses(TestCase::class)->in('Feature', 'Unit');

expect()->extend('toBeOne', function () {
    return $this->toBe(1);
});

function customTestHelperFunction()
{
    // Your custom helper
    return true;
}

dataset('example', [
    'success' => [true],
    'failure' => [false],
]);
