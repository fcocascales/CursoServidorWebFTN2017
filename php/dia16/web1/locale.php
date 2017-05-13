<?php
/*
  Obtiene el idioma de traducción actual según
  los siguientes criterios de más a menos prioritario:

    1) Parámetro lang en el GET o POST
    2) Parámetro lang en SESSION
    3) Idiomas preferidos en el navegador web
    4) Idioma predeterminado

  See scripts:
    locale/init.sh
    locale/addlang.sh
    locale/prepare.sh
    locale/compile.sh

  See translations editors:
    - http://poedit.net/
    - https://github.com/pacifists/simplepo
    - https://localise.biz/

*/

class Locale {

  private static $default = "es";
  private static $languages = array(
    'en'=> "en_US.utf8", // Inglés de Estados Unidos
    'es'=> "es_ES.utf8", // Español de España
    'ca'=> "ca_ES.utf8", // Catalán de España
    //'fr'=> "fr_FR.utf8", // Francés de Francia
  );

  public static function set($path=".") {
    $locale = self::getLocale();
    putenv("LC_ALL=$locale");
    setlocale(LC_ALL, $locale);
    $domain = "messages";
    bindtextdomain($domain, "$path/locale");
    bind_textdomain_codeset($domain, 'utf8');
    textdomain($domain);
  }

  public static function getLocale() {
    return self::$languages[self::getLang()];
  }

  public static function getLang() {
    $lang = self::get_lang();
    self::save_lang($lang);
    return $lang;
  }

  private static function get_lang() {
    if (($lang = self::get_request_lang()) !== false) return $lang;
    if (($lang = self::get_session_lang()) !== false) return $lang;
    else if (($lang = self::get_navigator_lang()) !== false) return $lang;
    else return self::$default;
  }

  private static function save_lang($lang) {
    if (session_status() == PHP_SESSION_NONE) {
      session_start();
    }
    $_SESSION['user_lang'] = $lang;
  }

  private static function get_request_lang($defaultLang=false) {
    if (isset($_REQUEST['lang'])) {
      $lang = $_REQUEST['lang'];
      if (self::is_available($lang)) return $lang;
    }
    return $defaultLang;
  }

  private static function get_session_lang($defaultLang=false) {
    if (session_status() == PHP_SESSION_NONE) {
      session_start();
    }
    if (isset($_SESSION['user_lang'])) {
      $lang = $_SESSION['user_lang'];
      if (self::is_available($lang)) return $lang;
    }
    return $defaultLang;
  }

  //
  //  Firefox Català   ca,es-es;q=0.8,es;q=0.6,en-us;q=0.4,en;q=0.2
  //  Firefox Español  es-es,es;q=0.8,ca;q=0.6,en-us;q=0.4,en;q=0.2
  //  Firefox English  en,en-us;q=0.8,ca;q=0.6,es-es;q=0.4,es;q=0.2
  //
  //  Chrome Català    ca,es;q=0.8,en;q=0.6,en-US;q=0.4
  //  Chrome Español   es,ca;q=0.8,en;q=0.6,en-US;q=0.4
  //  Chrome English   en-US,en;q=0.8,ca;q=0.6,es;q=0.4
  //
  private static function get_navigator_lang($defaultLang=false) {
    $token = strtok($_SERVER['HTTP_ACCEPT_LANGUAGE'], ",;");
    while ($token !== false) {
      $lang = substr($token, 0, 2);
      if (self::is_available($lang)) return $lang;
      $token = strtok(",;");
    }
    return $defaultLang;
  }

  private static function is_available($lang) {
    return array_key_exists($lang, self::$languages);
  }

}
