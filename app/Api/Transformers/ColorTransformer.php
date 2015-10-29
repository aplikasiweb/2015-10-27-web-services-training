<?php

namespace Api\Transformers;

use App\Color;
use League\Fractal\TransformerAbstract;

class ColorTransformer extends TransformerAbstract
{
	public function transform(Color $color)
	{
		return [
			'id' 	=> (int) $color->id,
			'name'  => $color->name,
            'code'  => $color->code,
			'is_active'	=> (bool) $color->is_active
		];
	}
}