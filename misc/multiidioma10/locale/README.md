TRANSLATIONS
============

##How to translate PHP and Javascript files:

  1) Initialization. Get translations ids: "messages.pot"
    $ ./init.sh

  2) Add a new language (only one time). For example translation to català: "ca_ES.po"
    $ ./addlang.sh ca_ES

  3) Update translation file with new translations ids: "messages.pot" --> "ca_ES.po"
    $ ./prepare.sh

  4) Translate "ca_ES.po" with program Poedit

  5) Compile translation: "ca_ES.po" --> "ca_ES/LC_MESSAGES/messages.mo"
    $ ./compile.sh


##How to translate dates & times:

  - Add translation in "pi-calendar.js.php"
  - Add translation in "date.js.php"

##How to translate backend alerts:

  - Use database translation tool of backend
    Commands: import & export

