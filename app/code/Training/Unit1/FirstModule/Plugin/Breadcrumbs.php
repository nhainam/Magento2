<?php
namespace Unit1\FirstModule\Plugin;


class Breadcrumbs {

    public function afterAddCrumb($subject, $result) {
        return $result;
    }

}