<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>

<?php if ($page['header']): ?>
  <header id="header" role="banner">
    <?php print render($page['header']); ?>
  </header>
<?php endif; ?>

<?php if ($page['main_prefix']): ?>
  <?php print render($page['main_prefix']); ?>
<?php endif; ?>

<?php if ($page['content']): ?>
<main id="main" role="main">
<div class="main-inner">
  <div class="columnwrapper video clearfix">
    <div class="two column first">
      <iframe class="shadow" src="//player.vimeo.com/video/77589992" width="455" height="256" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
    <div class="two column second">
      <iframe class="shadow" src="//player.vimeo.com/video/77589993" width="455" height="256" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="columnwrapper text clearfix">
    <div class="one column">
      <h2>Who We Are / What We Do</h2>
      <p>Austin Perinatal Associates is the only independent medical practice in central Texas that solely specializes in the fetal diagnostic imaging and maternal complications of pregnancy.</p>
      <p>Dr. David L. Berry founded Austin Perinatal Associates in 1997. Since that time, Dr. Berry and his team of highly-trained clinical and administrative staff have provided the highest quality, passionate, individualized care that is now available to you. Such care is what you and your pregnancy deserve.</p>
      <p>Austin Perinatal provides advanced targeted fetal imaging through diagnostic ultrasound evaluations and expert, integrated management of any medical or genetic diseases that may complicate your pregnancy. Dr. Berry's life passion is to hold the hands of his patients through the most difficult day of their life, providing personalized care and guidance through the unexpected challenges that a pregnancy may bring. He also celebrates the joy of a successful pregnancy outcome.</p>
      <p>Whether you have a complex medical history, multiple gestation, genetic risk factors or pre-existing medical conditions, all of your concerns will be addressed at Austin Perinatal Associates, customizing a care plan to fit your individual needs.</p>
      <p><a class="services-link" href="/services">Our Services »</a></p>
    </div>
  </div>
  <div class="columnwrapper video clearfix">
    <div class="one column">
      <iframe class="shadow" src="//player.vimeo.com/video/77593175" width="938" height="528" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="columnwrapper text clearfix">
    <div class="one column">
      <h2>Accessible, Available Specialty Care</h2>
      <p>We are specialists who work with your doctor to provide the quality care you deserve.</p>
      <p>Dr. Berry is Board Certified in Ob/GYN and in Maternal-Fetal Medicine. He has provided consultative services for patients from all areas of central Texas. Women have sought out his services from California and Alaska, to New York and Florida. Patients have even flown in from Thailand and the United Arab Emirates for consultation and special surgical procedures.</p>
      <p>Dr. Berry is an active consultant providing maternal-fetal medicine services at all Austin-area hospitals.</p>
      <h2>Treating Patients Like Family</h2>
      <p>We pride ourselves in treating patients like they are our own family members. While taking into account your personal history, beliefs and desires, Dr. Berry will never recommend a plan of care that he would not recommend for his own daughters.</p>
      <p><strong>Don't take our word for it, listen to our patients:</strong></p>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="columnwrapper testimonials clearfix">
    <div class="two column first">
      <iframe class="shadow" src="//player.vimeo.com/video/77362503" width="455" height="256" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      <p><em>"My pregnancies being as difficult as they were and as life changing for my entire family as they were, I would not have had more children if I hadn't met Dr. Berry and had the care that he gave me."</em></p>
    </div>
    <div class="two column second">
     <iframe class="shadow" src="//player.vimeo.com/video/77362508" width="455" height="256" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      <p><em>"I was about to cancel my trip. Truly. And he's like, 'You need to go. There's no reason why you shouldn't go.' I mean, that's his style. I'll take care of the medical stuff. You take care of your life."</em></p>
      <p class="more"><a href="/testimonials">More video testimonials &#187;</a></p>
    </div>
  </div>
  <div class="columnwrapper text aftertext clearfix">
    <div class="one column">
      <h2>The Choice Is Yours</h2>
      <p>While many of our patients are referred to us by friends and family, most are referred to us by other Ob physicians or midwives. We appreciate the trust placed in us by your primary obstetrician to treat their high-risk and complicated pregnancy patients. Occasionally, your doctor may have different MFM referral patterns. Remember, the choice is yours to make.</p>
      <p><strong>We want to be your partner in a successful pregnancy outcome.</strong></p>
      <p><a href="/contact">Contact Austin Perinatal Associates today!</a></p>
    </div>
  </div>
  <div class="clearfix"></div>

<div class="columnwrapper text trio clearfix">
    <div class="three column first">
      <a href="/dr-david-berry">
        <div>
          <img class="shadow" src="/sites/all/themes/apa/images/portrait-dr-david-berry.jpg" />
        </div>
      </a>
      <h2>Dr. David L. Berry</h2>
      <p>A 4th generation physician and Austinite since 1978, Dr. Berry is board certified by the American Board of Obstetrics and Gynecology both in OB/GYN and maternal-fetal medicine.</p>
      <p><a href="/dr-david-berry">Read more about Dr. Berry &#187;</a></p>
    </div>
    <div class="three column second">
      <a href="/staff">
        <div>
          <img class="shadow" src="/sites/all/themes/apa/images/austin-perinatal-staff.jpg" />
        </div>
      </a>
      <h2>The APA Staff</h2>
      <p>Courteous, friendly, and experienced, the Austin Perinatal Associates staff is second to none. We staff genetic counselors, sonographers, nurse practitioners, and more.</p>
      <p><a href="/staff">Meet the APA staff &#187;</a></p>
    </div>
    <div class="three column third">
      <a href="/testimonials">
        <div>
          <img class="shadow" src="/sites/all/themes/apa/images/david-berry-greeting-patients.jpg" />
        </div>
      </a>
      <h2>You Are Family</h2>
      <p>It is our job to be here for you, just like family. Our patients often visit with their offspring, just like family. Personalized care really does mean exactly that. See what our patients have to say!</p>
      <p><a href="/testimonials">Video testimonials &#187;</a></p>
    </div>
  </div>
  <div class="clearfix"></div>
</div>
</main>
<?php endif; ?>


<?php if ($page['main_suffix']): ?>
  <?php print render($page['main_suffix']); ?>
<?php endif; ?>


<?php if ($page['footer']): ?>
  <footer id="footer" role="contentinfo">
    <?php print render($page['footer']); ?>
  </footer>
<?php endif; ?>