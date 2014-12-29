<?php
namespace Aura\Filter\Rule\Validate;

class StrlenTest extends AbstractValidateTest
{
    protected $len = 4;

    protected function getArgs()
    {
        return array($this->len);
    }

    public function providerIs()
    {
        return array(
            array('abcd'),
            array('efgh'),
        );
    }

    public function providerIsNot()
    {
        return array(
            array(array()),
            array('abc'),
            array('defgh'),
        );
    }
}
