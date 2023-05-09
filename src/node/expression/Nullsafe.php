<?php

namespace acalvino4\nullsafe\node\expression;

use Twig\Compiler;
use Twig\Node\Expression\Binary\AbstractBinary;
use Twig\Node\Node;

/**
 * @author    nystudio107
 * @package   EmptyCoalesce
 * @since     1.0.0
 *
 */
class Nullsafe extends AbstractBinary
{
    public function __construct(Node $left, Node $right, int $lineno)
    {
        $left->setAttribute('ignore_strict_check', true);
        parent::__construct($left, $right, $lineno);
    }

    public function compile(Compiler $compiler): void
    {
        $compiler->raw('(')
            ->subcompile($this->getNode('left'))
            ->raw(" === null)\n")
            ->indent()
            ->raw("? null\n")
            ->raw(": ")
            ->subcompile($this->getNode('left'))
            ->raw("['")
            ->raw($this->getNode('right')->getAttribute('name'))
            ->raw("']")
            ->outdent()
        ;
    }

    public function operator(Compiler $compiler): Compiler
    {
        return $compiler->raw('?.');
    }
}
