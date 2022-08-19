<?php

namespace App\Filters;

class ProductFilter extends QueryFilter {
    public function style($style) {
        $this->builder->where("style", $style);
    }
}