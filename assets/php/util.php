<?php
  /**
   * Util is a static class contain help functions for the website
   * @method static String urlToName($url) returns a human readable version of the url
   */
  class Util
  {
    // Don't allow object instantiation
    private function __construct() {}
    private function __destruct() {}
    private function __clone() {}

    public static function urlToName($url='')
    {
      $name = preg_replace("/[-]+/", " ", $url);
      $name = ucwords($name);
      return $name;
    }
  }
?>
