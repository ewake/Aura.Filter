<?php
/**
 *
 * This file is part of Aura for PHP.
 *
 * @license http://opensource.org/licenses/bsd-license.php BSD
 *
 */
namespace Aura\Filter\Rule\Validate;

use Aura\Filter\Rule\AbstractUuid;

/**
 *
 * Validates that the value is a canonical human-readable Universally Unique
 * Identifier (UUID).
 *
 * @package Aura.Filter
 *
 */
class Uuid extends AbstractUuid
{
    /**
     *
     * Validates that the value is a canonical human-readable UUID.
     *
     * @return bool True if valid, false if not.
     *
     */
    public function __invoke($subject, $field)
    {
        return $this->isCanonical($subject->$field);
    }
}