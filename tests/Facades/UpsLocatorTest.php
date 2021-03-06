<?php

namespace Ptondereau\Tests\LaravelUpsApi\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use Ptondereau\LaravelUpsApi\Facades\UpsLocator;
use Ptondereau\Tests\LaravelUpsApi\TestCase;
use Ups\Locator;

/**
 * This is the UpsLocatorTest facade test class.
 *
 * @author Pierre Tondereau <pierre.tondereau@gmail.com>
 */
class UpsLocatorTest extends TestCase
{
    use FacadeTrait;

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'ups.locator';
    }

    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return UpsLocator::class;
    }

    /**
     * Get the facade root.
     *
     * @return string
     */
    protected function getFacadeRoot()
    {
        return Locator::class;
    }
}
