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
<title>Footer</title>
<meta charset="utf-8">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="robots" content="index, follow" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="" />
<meta name="title" content="Footer" />
<meta name="description" content="Footer" />
<meta name="generator" content="Dolibarr 19.0.1 (https://www.dolibarr.org)" />
<meta name="dolibarr:pageid" content="9" />
<link rel="canonical" href="/en/footer.php" />
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
<body id="bodywebsite" class="bodywebsite bodywebpage-footer">
<!-- At least 2 div required to avoid ckeditor to insert a p -->
<div class="dolcontenteditable" contenteditable="true">      

    <footer class="page-foot bg-cape-cod context-dark">
        <section id="sectionfooter" contenteditable="true" class="section-40">
          <div class="container">
            <div class="row justify-content-sm-center">
              <div class="col-sm-9 col-md-12 col-xl-12">
                <div class="row row-50">
                  
                  <div class="col-md-6 col-lg-4 col-xl-4">
                    <h4 class="text-small-16 text-uppercase footer-title">Product and Services</h4>
                    <div class="row" style="padding-right: 20px">
                      <div class="col-6">
                        <ul class="list-marked-variant-2">
                          <li><span class="fa fa-chevron-right marginrightonly"></span><a href="product-p.php">Product P</a></li>
                          <li><span class="fa fa-chevron-right marginrightonly"></span><a href="service-s.php">Service S</a></li>
                        </ul>
                      </div>
                      <div class="col-6">
                        <ul class="list-marked-variant-2">
                          <li><span class="fa fa-chevron-right marginrightonly"></span><a href="pricing.php">Prices</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4 col-xl-4">
                    <h4 class="text-small-16 text-uppercase footer-title">Quick links</h4>
                    <div class="row" style="padding-right: 20px">
                      <div class="col-6">
                        <ul class="list-marked-variant-2">
                          <li><span class="fa fa-chevron-right marginrightonly"></span><a href="home.php">Home</a></li>
                          <li><span class="fa fa-chevron-right marginrightonly"></span><a href="blog.php">Blog</a></li>
                          <li><span class="fa fa-chevron-right marginrightonly"></span><a href="search.php">Search</a></li>
                        </ul>
                      </div>
                      <div class="col-6">
                        <ul class="list-marked-variant-2">
                          <li><span class="fa fa-chevron-right marginrightonly"></span><a href="contact.php">Contacts</a></li>
                          <li><span class="fa fa-chevron-right marginrightonly"></span><a href="privacy-policies.php">Privacy policies</a></li>
                        </ul>
                        <?php // echo $website->componentSelectLang('auto', $weblangs, 'margin-top-10'); ?>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-md-6 col-lg-4 col-xl-4">
                    <h4 class="text-small-16 text-uppercase footer-title">Contact us</h4>
                    <address class="contact-info text-left">
                      <div class="unit unit-horizontal unit-spacing-md align-items-center">
                        <div class="unit-left"><span class="icon text-white fa fa-phone"></span></div>
                        <div class="unit-body"><a class="link-white" href="callto:<?php echo $mysoc->phone; ?>"><?php echo $mysoc->phone; ?></a></div>
                      </div>
                      <div class="unit unit-horizontal unit-spacing-md align-items-center">
                        <div class="unit-left"><span class="icon text-white fa fa-envelope-o"></span></div>
                        <div class="unit-body"><a class="link-white" href="mailto:<?php echo $mysoc->email; ?>"><?php echo $mysoc->email; ?></a></div>
                      </div>
                      <div class="unit unit-horizontal unit-spacing-md">
                        <div class="unit-left"><span class="icon text-white fa fa-address-card-o"></span></div>
                        <div class="unit-body"><span class="link-white"><?php echo $mysoc->getFullAddress(1, '<br>', 1); ?></span></div>
                      </div>
                    </address>
                    <div class="group-sm group-middle">
                      <p class="font-italic text-white">Follow Us:</p>
                      <ul class="list-inline">
                          <?php foreach($mysoc->socialnetworks as $key => $value) {
                            print '<li><a class="icon icon-xxs-smallest" href="'.(preg_match('/^http/', $value) ? $value : 'https://www.'.$key.'.com/'.$value).'"><span class="fab fa-'.$key.'" style="margin-left: 5px; font-size: 1.6em"></span></a></li>';
                          } ?>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section id="sectionfooterdolibarr" contenteditable="true" class="footerdolibarr">
            <div class="center">
            Website generated and powered by <a href="https://www.dolibarr.org" target="CRM and ERP for freelances, association and companies">Dolibarr ERP & CRM</a>
            </div>
        </section>
        
      </footer>
      
      <!--<a href="#" id="ui-to-top" class="ui-to-top"><span class="fa fa-angle-up" style="color: #fff; font-size: 1.9em;"></span></a>-->

</div>


<script src="/document.php?modulepart=medias&file=js/site1/script.js"></script>

</body>
</html>
<?php // BEGIN PHP
$tmp = ob_get_contents(); ob_end_clean(); dolWebsiteOutput($tmp, "html", 9); dolWebsiteIncrementCounter(2, "other", 9);
// END PHP ?>
