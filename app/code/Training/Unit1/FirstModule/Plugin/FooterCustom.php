<?php
namespace Unit1\FirstModule\Plugin;


class FooterCustom {

    public function afterGetCopyright($subject, $result) {
        return "Customized copyright!";
    }

}