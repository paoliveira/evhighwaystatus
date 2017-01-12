<?php

namespace App\Transformers;

abstract class Transformer
{
	public function transformCollection(array $items)
	{
		return array_map([$this,'transform'], $items);
	}

	abstract function transform($item);
}