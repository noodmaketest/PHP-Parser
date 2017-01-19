<?php

namespace PhpParser\Node\Stmt;

use PhpParser\Node;

class ElseIf_ extends Node\Stmt
{
    /** @var Node\Expr Condition */
    public $cond;
    /** @var Node\Stmt[] Statements */
    public $stmts;

    /**
     * Constructs an elseif node.
     *
     * @param Node\Expr   $cond       Condition
     * @param Node\Stmt[] $stmts      Statements
     * @param array       $attributes Additional attributes
     */
    public function __construct(Node\Expr $cond, array $stmts = array(), array $attributes = array()) {
        parent::__construct($attributes);
        $this->cond = $cond;
        $this->stmts = $stmts;
    }

    public function getSubNodeNames() {
        return array('cond', 'stmts');
    }
}
