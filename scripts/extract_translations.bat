@ECHO OFF

cd ../src/

C:\"Program Files"\gettext-iconv\bin\xgettext.exe -L PHP --from-code=UTF-8 --add-comments -o ../scripts/main.pot login.php
