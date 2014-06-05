<?php /* Smarty version Smarty-3.1.16, created on 2014-01-15 22:14:43
         compiled from "/cinabre/team/apps/team/protected/views/contact/contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101397102452d67a07bf3540-71574549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '672404e12e64e83abe6d4863a66d13cb7b37b0ad' => 
    array (
      0 => '/cinabre/team/apps/team/protected/views/contact/contact.tpl',
      1 => 1389795189,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101397102452d67a07bf3540-71574549',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52d67a07c29d02_67489287',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d67a07c29d02_67489287')) {function content_52d67a07c29d02_67489287($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>contact</title>
    <link rel="stylesheet" href="../../../assets/css/main.css"></head>
</head>
<body>
    <?php echo $_smarty_tpl->getSubTemplate ('../header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section class="header-page">
        <div class="inner-header">
            <div class="container">
                <div class="intro animate fadeIn">
                    <h1>Get In Touch.</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="contact-buttons">
                        <a class="bttn bttnBlue animate pulse" href="mailto:team@differential.io">
                            <i class="icon-envelope-alt"></i>
                            Email Us
                        </a>
                        <a class="bttn bttnGrey animate pulse" href="/apply">
                            <i class="icon-lightbulb"></i>
                            Idea Application
                        </a>
                        <a class="bttn bttnOrange animate pulse" href="/join">
                            <i class="icon-group"></i>
                            Join Our Team
                        </a>
                        <a class="bttn bttnGreen animate pulse" href="mailto:team@differential.io?subject=Let's get coffee">
                            <i class="icon-coffee"></i>
                            Get Coffee
                        </a>
                    </div>
                </div>
                <div class="col-md-9">
                    <h2>We're easy to talk to.</h2>
                    <p>
                        Interested in working with us, joining our team, partnering with us, or just want to connect? Get in touch! We're always interested in meeting and working with new people in the startup industry.
                    </p>
                    <div class="contact-info" itemscope="" itemtype="http://schema.org/PostalAddress">
                        <h2 itemprop="name">Differential</h2>
                        <p>
                            We work at Cintrifuse
                            <br>
                            <span itemprop="streetAddress">299 E. Sixth Street</span>
                            <br>
                            <span itemprop="addressLocality">Cincinnati</span>
                            ,
                            <span itemprop="addressRegion">Ohio</span>
                            <span itemprop="postalCode">45202</span>
                            <br></p>
                        <ul class="social">
                            <li>
                                <a href="http://twitter.com/bedifferential" target="_blank">
                                    <i class="icon-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://facebook.com/ThinkDifferential" target="_blank">
                                    <i class="icon-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/BeDifferential" target="_blank">
                                    <i class="icon-github"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/105977469267199216227/" target="_blank">
                                    <i class="icon-google-plus"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ('../footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div id="sidr-right" class="sidr right" style="">
        <div class="sidr-inner">
            <ul>
                <li class="">
                    <a href="/about">About</a>
                </li>
                <li class="">
                    <a href="/companies">Companies</a>
                </li>
                <li class="">
                    <a href="/team">Team</a>
                </li>
                <li class="">
                    <a href="/connect">Jobs</a>
                </li>
                <li class="sidr-class-active">
                    <a href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>
<?php }} ?>
