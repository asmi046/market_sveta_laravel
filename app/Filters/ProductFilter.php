<?php

namespace App\Filters;

class ProductFilter extends QueryFilter {
    public function style($style = []) {
        if (!empty($style))
            $this->builder->whereIn("style", $style);
    }
}