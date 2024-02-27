<?php

use PHPUnit\Framework\TestCase;
use App\MessageGenerator;

class MessageGeneratorTest extends TestCase {
    protected MessageGenerator $generator;

    public function setUp(): void 
    {
        $this->generator = new MessageGenerator;
    }

    public function testGenerateMessage() {
        $message = $this->generator->generateMessage();
        $this->assertContains($message, $this->generator->getMessages());
    }

    public function testGetMessages() {
        $this->assertIsArray($this->generator->getMessages());
    }

    public function testAddAndRemoveMessage() {
        
        $newMessage = 'Nouveau message';

        // Teste l'ajout d'un nouveau message
        $this->generator->addMessage($newMessage);
        $this->assertContains($newMessage, $this->generator->getMessages());

        // Teste la suppression du message ajouté
        $this->generator->removeMessage($newMessage);
        $this->assertNotContains($newMessage, $this->generator->getMessages());
    }
}