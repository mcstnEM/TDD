<?php
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\TestDox;
use App\User;

class UserTest extends TestCase {
    protected User $user;

    public function setUp(): void 
    {
        $this->user = new User('Jeremi', 'Duffay');
    }

    #[TestDox('test the hello function')]
    public function testHello(): void
    {

        $result = $this->user->hello('François');

        # On test si $reslut est bien le resultat attendu
        $this->assertSame('Hello François, I am Jeremi', $result);
    }

    public function testGetName() {
        $result = $this->user->getName();
        $this->assertSame('Jeremi', $result);
    }
}