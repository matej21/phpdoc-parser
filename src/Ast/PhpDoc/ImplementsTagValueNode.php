<?php declare(strict_types = 1);

namespace PHPStan\PhpDocParser\Ast\PhpDoc;

use PHPStan\PhpDocParser\Ast\Type\GenericTypeNode;


class ImplementsTagValueNode implements PhpDocTagValueNode
{

	/** @var GenericTypeNode */
	public $type;


	public function __construct(GenericTypeNode $type)
	{
		$this->type = $type;
	}


	public function __toString(): string
	{
		return (string) $this->type;
	}

}
