<?php

namespace WPDeveloper\BetterDocs\Dependencies\PhpParser\Node\Expr;

use WPDeveloper\BetterDocs\Dependencies\PhpParser\Node\Expr;
use WPDeveloper\BetterDocs\Dependencies\PhpParser\Node\Name;

class Instanceof_ extends Expr
{
    /** @var Expr Expression */
    public $expr;
    /** @var Name|Expr Class name */
    public $class;

    /**
     * Constructs an instanceof check node.
     *
     * @param Expr      $expr       Expression
     * @param Name|Expr $class      Class name
     * @param array     $attributes Additional attributes
     */
    public function __construct(Expr $expr, $class, array $attributes = array()) {
        parent::__construct($attributes);
        $this->expr = $expr;
        $this->class = $class;
    }

    public function getSubNodeNames() {
        return array('expr', 'class');
    }
}
