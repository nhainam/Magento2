<?php

namespace Unit1\FirstModule\Plugin;


class ProductPlugin {

    public function afterGetPrice($subject, $result) {
        return "12";
    }

}