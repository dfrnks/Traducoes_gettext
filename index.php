<?php

# http://www.onlamp.com/pub/a/php/2002/06/13/php.html

# xgettext -n *.php
# Mapear

# Traduzir

# msgfmt messages.po
# Compilar

// I18N support information here
$language = 'pt_BR';
putenv("LANG=$language");
setlocale(LC_ALL, $language);

// Set the text domain as 'messages'
$domain = 'messages';
bindtextdomain($domain, "i18n");
textdomain($domain);

echo _("string_teste");
