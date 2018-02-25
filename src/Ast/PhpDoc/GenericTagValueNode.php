<?php declare(strict_types = 1);

namespace PHPStan\PhpDocParser\Ast\PhpDoc;

use PHPStan\PhpDocParser\Ast\Type\TypeNode;


class GenericTagValueNode implements PhpDocTagValueNode
{

	/** @var string 'in', 'out' or '' */
	public $varianceType;

	/** @var string */
	public $name;

	/** @var string 'extends', 'implements' or '' */
	public $constraintType;

	/** @var null|TypeNode */
	public $constraint;

	/** @var string (may be empty) */
	public $description;


	public function __construct(string $varianceType, string $name, string $constraintType, ?TypeNode $constraint, string $description)
	{
		$this->varianceType = $varianceType;
		$this->name = $name;
		$this->constraintType = $constraintType;
		$this->constraint = $constraint;
		$this->description = $description;
	}


	public function __toString(): string
	{
		$constraint = $this->constraint ? "{$this->constraintType} {$this->constraint}" : '';
		return trim("{$this->varianceType} {$this->name}{$constraint} {$this->description}");
	}

}
