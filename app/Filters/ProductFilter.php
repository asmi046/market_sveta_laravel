<?php

namespace App\Filters;

class ProductFilter extends QueryFilter {
    public function osvtype($osvtype = []) {
        if (!empty($osvtype))
        {
            // $all_qusl = [];
            // foreach ($osvtype as $ot)
            //     $all_qusl[] = ["name", "LIKE", "%".$ot."%"];

            // $this->builder->orWhere($all_qusl);

            $i =0;
             foreach ($osvtype as $ot)
              {
                if ($i == 0)
                    $this->builder->where("name", "LIKE", "%".$ot."%");
                else
                    $this->builder->orWhere("name", "LIKE", "%".$ot."%");

                $i++;
              }
        }


    }

    public function style($style = []) {
        if (!empty($style))
            $this->builder->whereIn("style", $style);
    }

    public function form($form = []) {
        if (!empty($form))
            $this->builder->whereIn("form", $form);
    }

    public function brand($brand = []) {
        if (!empty($brand))
            $this->builder->whereIn("brand", $brand);
    }

    public function state($state = []) {
        if (!empty($state))
            $this->builder->whereIn("state", $state);
    }

    public function arm_color($arm_color = []) {
        if (!empty($arm_color))
            $this->builder->whereIn("arm_color", $arm_color);
    }

    public function plaf_color($plaf_color = []) {
        if (!empty($plaf_color))
            $this->builder->whereIn("plaf_color", $plaf_color);
    }

    public function arm_material($arm_material = []) {
        if (!empty($arm_material))
            $this->builder->whereIn("arm_material", $arm_material);
    }

    public function mesto($mesto = []) {
        if (!empty($mesto))
            $this->builder->whereIn("mesto", $mesto);
    }

    public function minprice($minprice) {
        if (!empty($minprice))
            $this->builder->where("price", '>', $minprice);
    }

    public function maxprice($maxprice) {
        if (!empty($maxprice))
            $this->builder->where("price", '<', $maxprice);
    }

    public function insales($insales = "off") {
        if ($insales === 'on')
            $this->builder->where("price_old", '>', 0);
    }
}
