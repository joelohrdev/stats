<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class GameForm extends Form
{
    #[Validate('nullable')]
    public $opponent;

    #[Validate('nullable|unique:opponents,name')]
    public $newOpponent;

    #[Validate('nullable|date')]
    public $date;

    #[Validate('nullable|integer')]
    public $gp;

    #[Validate('nullable|integer')]
    public $pa;

    #[Validate('nullable|integer')]
    public $ab;

    #[Validate('nullable|integer')]
    public $avg;

    #[Validate('nullable|integer')]
    public $obp;

    #[Validate('nullable|integer')]
    public $ops;

    #[Validate('nullable|integer')]
    public $slg;

    #[Validate('nullable|integer')]
    public $h;

    #[Validate('nullable|integer')]
    public $singles;

    #[Validate('nullable|integer')]
    public $doubles;

    #[Validate('nullable|integer')]
    public $triples;

    #[Validate('nullable|integer')]
    public $hr;

    #[Validate('nullable|integer')]
    public $rbi;

    #[Validate('nullable|integer')]
    public $r;

    #[Validate('nullable|integer')]
    public $bb;

    #[Validate('nullable|integer')]
    public $so;

    #[Validate('nullable|integer')]
    public $kl;

    #[Validate('nullable|integer')]
    public $hbp;

    #[Validate('nullable|integer')]
    public $sac;

    #[Validate('nullable|integer')]
    public $sf;

    #[Validate('nullable|integer')]
    public $roe;

    #[Validate('nullable|integer')]
    public $fc;

    #[Validate('nullable|integer')]
    public $sb;

    #[Validate('nullable|integer')]
    public $sbp;

    #[Validate('nullable|integer')]
    public $cs;

    #[Validate('nullable|integer')]
    public $pik;
}
