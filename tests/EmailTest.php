<?php
declare(strict_types=1);

require_once 'src/Email.php';

use PHPUnit\Framework\TestCase;

final class EmailTest extends TestCase
{
    public function testCanBeCreatedFromValidEmailAddress(): void
    {
        $email = newEmail();
        $this->assertInstanceOf(
            Email::class,
            'user@example.com'
        );
    }
}
