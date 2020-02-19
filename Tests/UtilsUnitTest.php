<?php

class UtilsUnitTest extends \PHPUnit\Framework\TestCase
{

    /**
     * Datapdovider for the test testGetCallableDescription
     *
     * @return array testing data
     */
    public function getCallableDescriptionDataProvider(): array
    {
        return [
            [
                'string-processor',
                'string-processor'
            ],
            [
                [
                    $this,
                    'getCallableDescriptionDataProvider'
                ],
                'UtilsUnitTest::getCallableDescriptionDataProvider'
            ],
            [
                [
                    'class-name',
                    'static-method-name'
                ],
                'class-name::static-method-name'
            ]
        ];
    }

    /**
     * Testing getCallableDescription method
     *
     * @param mixed $callable
     * @param string $result
     * @dataProvider getCallableDescriptionDataProvider
     */
    public function testGetCallableDescription($callable, string $result): void
    {
        // test body and assertions
        $this->assertEquals($result, \Mezon\Router\Utils::getCallableDescription($callable));
    }
}
