<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->langcode contains its textual representation.
 *   $language->dir contains the language direction.
 *   It will either be 'ltr' or 'rtl'.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 */
?><!DOCTYPE html>
<!--[if lt IE <?php print $minie; ?> ]>    <html class="lt-ie<?php print $minie; ?> no-js" <?php print $html_attributes; ?>> <![endif]-->
<!--[if gte IE <?php print $minie; ?>]><!--> <html class="no-js" <?php print $html_attributes; ?> <?php print $rdf_attributes; ?>> <!--<![endif]-->
  <head>
    <?php print $head; ?>
    <title><?php print $head_title; ?></title>
    <meta name="viewport" content="width=device-width">
    <?php print $styles; ?>
    <?php print $scripts; ?>
  </head>
  <body class="<?php print $classes; ?> noise" <?php print $body_attributes;?>>
    <div class="pagewrapper noises">
    <div id="woodceiling"><div id="woodceiling-inner"><ul><li class="tel">Tel: 512-206-0101</li><li class="fax">Fax: 512-206-0212</li></ul><div class="facebook-find"><a href="https://www.facebook.com/austinperinatal" target="_blank"><img class="facebook-logo" src="/sites/all/themes/apa/images/fb-logo-small.png" /></a><a href="https://www.facebook.com/austinperinatal" target="_blank">Find us on Facebook</a></div></div></div>
    <div id="logozone" class="sensiblewidth">
      <?php
      if ($_SERVER['REQUEST_URI'] == "/") {
        echo "<h1 class='namewrapper'>";
      } else {
        echo "<div class='namewrapper'>";
      }
      ?>
      <?php
      if ($_SERVER['REQUEST_URI'] !== "/") {
        echo "<a href='/' class='apa-link'>";
      }
      ?>
      <span id="apa">Austin Perinatal Associates</span>
      <?php
      if ($_SERVER['REQUEST_URI'] !== "/") {
        echo "</a>";
      }
      ?>
      <span id="colon">:</span><span id="mfm"> <?php
      if ($_SERVER['REQUEST_URI'] !== "/services") {
        echo "<a class='serviceslink' href='/services'>";
      }
      ?>Maternal Fetal Medicine &amp; Genetic Services</a><?php
      if ($_SERVER['REQUEST_URI'] !== "/services") {
        echo "</a>";
      }?></span>
      <?php
      if ($_SERVER['REQUEST_URI'] == "/") {
        echo "</h1>";
      } else {
        echo "</div>";
      }
      ?>
      <?php
      if ($_SERVER['REQUEST_URI'] !== "/") {
        echo "<a href='/' class='apa-link'>";
      }
      ?>
      <img id="logo" src="/sites/all/themes/apa/images/austin-perinatal-heart-logo.png" />
      <?php
      if ($_SERVER['REQUEST_URI'] !== "/") {
        echo "</a>";
      }
      ?>
      <div id="ribbon">
        <div id="ribbon-inner">
          <a href="/testimonials">
            <img id="ribbonimage" src="/sites/all/themes/apa/images/ribbon.png" />
            <img id="ribbonpatient" src="/sites/all/themes/apa/images/krystle.jpg" />
            <p class="textlink">Patients speak on their APA experience</p>
          </a>
        </div>
      </div>
      <img id="menubar" src="/sites/all/themes/apa/images/woodbar.png" />
    </div>
    <?php print $page_top; ?>
    <?php print $page; ?>
    <?php print $page_bottom; ?>
  </div>
  </body>
</html>
