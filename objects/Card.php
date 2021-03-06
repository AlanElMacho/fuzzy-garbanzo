<?php

namespace trello;

class Card extends TrelloSupport
{
    /** @var string */ public $id;
    /** @var string */ public $name;
    /** @var string */ public $idBoard;
    /** @var string */ public $idList;
    /** @var int */ public $pos;
    /** @var bool */ public $closed;
    /** @var string */ public $due;
    /** @var bool */ public $dueComplete;
    
    public function __construct() {
        parent::__construct($this);
    }

    public function SetCard($JSONobject) {
        $o = $JSONobject;

        $this->id = $o["id"];
        $this->name = $o["name"];
        $this->idBoard = $o["idBoard"];
        $this->idList = $o["idList"];
        $this->pos = $o["pos"];
        $this->closed = $o["closed"];
        $this->due = $o["due"];
        $this->dueComplete = $o["dueComplete"];
    }
}