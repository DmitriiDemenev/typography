<?php

declare(strict_types=1);

namespace Typography\tests\Rules\Characters;

use Fater\Typography\Src\Rules\Character\ReplaceDash;
use PHPUnit\Framework\TestCase;

class ReplaceDashTest extends TestCase
{
    public function providerRule(): array
    {
        return [
            [
                'sub - brand',
                'sub — brand',
            ],
            [
                'between -7 and',
                'between -7 and',
            ],
        ];
    }

    /**
     * @dataProvider providerRule
     *
     * @param string $initialText
     * @param string $expectedText
     *
     * @return void
     */
    public function testRule(string $initialText, string $expectedText): void
    {
        $rule = new ReplaceDash();
        $result = $rule->handle($initialText);

        $this->assertEquals($expectedText, $result);
    }
}
