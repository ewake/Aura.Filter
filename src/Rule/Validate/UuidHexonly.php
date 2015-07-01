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
 * Validates the value is a hex-only Universally Unique Identifier (UUID).
 *
 * @package Aura.Filter
 *
 */
class UuidHexonly extends AbstractUuid
{
    /**
     *
     * Validates that the value is a hex-only UUID.
     *
     * @return bool True if valid, false if not.
     *
     */
    public function __invoke($subject, $field)
    {
        return $this->isHexOnly($subject->$field);
    }
}