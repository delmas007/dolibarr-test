<?php // BEGIN PHP
$websitekey=basename(__DIR__); if (empty($websitepagefile)) $websitepagefile=__FILE__;
if (! defined('USEDOLIBARRSERVER') && ! defined('USEDOLIBARREDITOR')) {
	$pathdepth = count(explode('/', $_SERVER['SCRIPT_NAME'])) - 2;
	require_once ($pathdepth ? str_repeat('../', $pathdepth) : './').'master.inc.php';
} // Not already loaded
require_once DOL_DOCUMENT_ROOT.'/core/lib/website.lib.php';
require_once DOL_DOCUMENT_ROOT.'/core/website.inc.php';
ob_start();
// END PHP ?>
<html lang="en">
<head>
<title>Search Page</title>
<meta charset="utf-8">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="robots" content="index, follow" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="" />
<meta name="title" content="Search Page" />
<meta name="description" content="Search Page" />
<meta name="generator" content="Dolibarr 19.0.1 (https://www.dolibarr.org)" />
<meta name="dolibarr:pageid" content="17" />
<link rel="canonical" href="/en/search.php" />
<?php if ($website->use_manifest) { print '<link rel="manifest" href="/manifest.json.php" />'."\n"; } ?>
<!-- Include link to CSS file -->
<link rel="stylesheet" href="/styles.css.php?website=<?php echo $websitekey; ?>" type="text/css" />
<!-- Include link to JS file -->
<script nonce="d1cefbc4" async src="/javascript.js.php?website=<?php echo $websitekey; ?>"></script>
<!-- Include HTML header from common file -->
<?php if (file_exists(DOL_DATA_ROOT."/website/".$websitekey."/htmlheader.html")) include DOL_DATA_ROOT."/website/".$websitekey."/htmlheader.html"; ?>
<!-- Include HTML header from page header block -->

</head>
<!-- File generated by Dolibarr website module editor -->
<body id="bodywebsite" class="bodywebsite bodywebpage-search">
<div class="page">

    <?php includeContainer('header'); ?>

      <section id="sectionimage" contenteditable="true">
        <div class="">
          <div class="swiper-wrapper text-center" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
            <div class="swiper-slide swiper-slide-active" style="height: 200px; background-image: url('medias/image/site1/background_sunset.webp'); background-size: cover;">
              <div class="swiper-slide-caption">
                <div class="container">
                  <div class="row justify-content-sm-center">
                    <div class="col-md-11 col-lg-10">
                      <div class="text-white text-uppercase jumbotron-custom border-modern fadeInUp animated" data-caption-animate="fadeInUp" data-caption-delay="0s">Search</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </section>

<br><br><br>

<center>
     
    <div style="width: 60%">
    <form class="rd-search" action="search.php" method="POST">
        <input type="hidden" name="token" value="<?php echo newToken(); ?>" />
        <div class="form-wrap">
                  <input class="form-input" id="rd-search-form-input" type="text" name="s" autocomplete="off" placeholder="Search..." value="<?php echo dol_escape_htmltag(GETPOST('s', 'alphanohtml')); ?>">
                  <div class="rd-search-results-live cleared" id="rd-search-results-live"></div>
        </div>
        <button class="rd-search-submit buttonwithnoborder" type="submit"><span class="icon icon-xs icon-dusty-gray fa fa-search"></span></button>
    </form>
    </div>
    <br>
                      
     <?php
     $weblangs->load("main");
     
     if (function_exists('getPagesFromSearchCriterias'))
     {
         if (GETPOSTISSET('s'))
         {
             $listofpages = getPagesFromSearchCriterias('page', 'meta', GETPOST('s', 'alphanohtml'));
             if ($listofpages['code'] == 'OK')
             {
                 foreach($listofpages['list'] as $websitepagefound)
                 {
                    print '<div class="rowsearchresult"><a href="'.$websitepagefound->ref.'.php">'.$websitepagefound->title.'</a> - '.$websitepagefound->description.'</div>';
                 }
             }
             else
             {
                 // If error, show message
                 print $listofpages['message'];
             }
         }
     }
     else
     {
         print $weblangs->trans("FeatureNotYetAvailable");
     }
     ?>
                      
<br><br><br><br><br><br>
</center>

    <?php includeContainer('footer'); ?>

</div>

</body>
</html>
<?php // BEGIN PHP
$tmp = ob_get_contents(); ob_end_clean(); dolWebsiteOutput($tmp, "html", 17); dolWebsiteIncrementCounter(2, "page", 17);
// END PHP ?>
