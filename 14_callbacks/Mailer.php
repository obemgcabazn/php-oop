<?php

namespace callbacks;

class Mailer {
    public function doMailer( Product $p ) {
        echo "Отправлено сообщение {$p->name}";
    }
}