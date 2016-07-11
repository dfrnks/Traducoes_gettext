<?php

# http://www.onlamp.com/pub/a/php/2002/06/13/php.html

# xgettext -n *.php
# Mapear

# Traduzir

# msgfmt messages.po
# Compilar

//putenv('LANGUAGE='. 'en_US');
putenv('LANGUAGE='. 'pt_BR');
setlocale(LC_ALL, "C.UTF-8");
bindtextdomain('messages', __DIR__ . '/i18n');
bind_textdomain_codeset('messages', 'UTF-8');
textdomain('messages');

echo _("string_teste");
