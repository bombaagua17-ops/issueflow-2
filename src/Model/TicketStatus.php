<?php
declare(strict_types=1);
namespace App\Model;
/*
Definir con un enum las prioridades permitidas.
*/
enum TicketStatus: string
{
    case Open = 'open';
    case InProgress = 'in_progress';
    case Closed = 'closed';
    /* $this será la prioridad que se quiere comparar,
    en este caso contra el valor constante del enum
    self::Urgent */
    public function isOpen():bool {
        return $this === self::Open;
    }
}