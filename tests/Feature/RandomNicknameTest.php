<?php

namespace Ash\Tests\Feature;

use Ash\RandomNickname;
use Ash\Tests\TestCase;

/**
 * @internal
 * @coversNothing
 */
final class RandomNicknameTest extends TestCase
{

    public function testGenerate()
    {
        $nickname = RandomNickname::generate();
        var_dump($nickname);
        $this->assertNotNull($nickname);
    }
}
