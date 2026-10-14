<?php
declare(strict_types=1);
namespace App\Model;
final class Ticket {
    public function __construct(
        private string $id,
        private string $title,
        private string $priority
    ) {    
    }
    public function getId(): string {
        return $this->id;
    }
    public function getTitle(): string {
        return $this->title;
    }
    public function getPriority(): string {
        return $this->priority;
    }
    public function isUrgent (){
        return $this->priority === 'urgent';
    }
}