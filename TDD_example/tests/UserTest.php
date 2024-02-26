<?php
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\TestDox;
use App\User;

class UserTest extends TestCase {

    #[TestDox('test the hello function')]
    public function testHello(): void
    {
        $user = new User('Jeremi', 'Duffay');

        $result = $user->hello('François');

        # On test si $reslut est bien le resultat attendu
        $this->assertSame('Hello François, I am Jeremi', $result);
    }
}