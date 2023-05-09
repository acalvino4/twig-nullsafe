<?php

namespace acalvino4\nullsafe;

use acalvino4\nullsafe\node\expression\Nullsafe;
use Twig\ExpressionParser;
use Twig\Extension\AbstractExtension;

/**
 * Twig extension
 */
class Extension extends AbstractExtension
{
    /**
     * @inheritDoc
     */
    public function getOperators(): array
    {
        return [
            // Unary operators
            [],
            // Binary operators
            [
                '?.' => [
                    'precedence' => 100,
                    'class' => Nullsafe::class,
                    'associativity' => ExpressionParser::OPERATOR_RIGHT,
                ],
            ],
        ];
    }
}
