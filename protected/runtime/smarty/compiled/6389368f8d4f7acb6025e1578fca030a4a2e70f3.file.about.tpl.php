<?php /* Smarty version Smarty-3.1.16, created on 2014-01-15 22:19:07
         compiled from "/cinabre/team/apps/team/protected/views/about/about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62441688552d67834e1aec1-84480193%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6389368f8d4f7acb6025e1578fca030a4a2e70f3' => 
    array (
      0 => '/cinabre/team/apps/team/protected/views/about/about.tpl',
      1 => 1389794919,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62441688552d67834e1aec1-84480193',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52d67834e4af03_40594591',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d67834e4af03_40594591')) {function content_52d67834e4af03_40594591($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About</title>
    <link rel="stylesheet" href="../../../assets/css/main.css"></head>
</head>
<body>
    <?php echo $_smarty_tpl->getSubTemplate ('../header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section class="header-page">
        <div class="inner-header">
            <div class="container">
                <div class="intro animate fadeIn">
                    <h1>Our Process.</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container process page">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <section>
                    <h2>What We Do</h2>
                    <p>
                        For many entrepreneurs, there have historically been two ways to launch a tech startup. Either find a technical co-founder, or hire an agency. The first is very hard, the second is expensive and risky.
                    </p>
                    <p>
                        Differential provides a third option. We integrate with your early stage startup, building the first version of your product at a discounted rate, in exchange for equity. This ensures our long-term interests are aligned, meaning your success is important to our success.
                    </p>
                </section>
                <section>
                    <h2>Customer Validation</h2>
                    <p>
                        The first step in our process is validating that people are actually willing to pay for the problem you're solving. We teach and practice lean startup methodologies, which equates to talking to customers early and often. If there's not a problem worth paying for, then the solution isn't worth building.
                    </p>
                </section>
                <section>
                    <h2>Minimum Viable Product</h2>
                    <p>
                        Once we've validated that there's a problem, and people are willing to pay for a solution, we begin building the minimum viable product (MVP).
                    </p>
                    <p>
                        The MVP is the bare minimum product that could be used to begin acquiring customers. This allows us to begin building traction, testing assumptions, receiving feedback, and continue validating the business model as early as possible.
                    </p>
                </section>
                <section>
                    <h2>Scale &amp; Grow</h2>
                    <p>
                        If the MVP further validates the business model, we step up the growth marketing and transition to scaling the product and features.
                    </p>
                    <p>
                        This includes generating press, a/b testing landing pages, improving user flows, minimizing load times and building new features.
                    </p>
                </section>
                <section>
                    <h2>Team Transition</h2>
                    <p>
                        We generally work full-time with a startup for 3-6 months. Because our interests are aligned with equity, it's important that as our direct involvement wraps up, we have an adequate transition plan in place.
                    </p>
                    <p>
                        This includes making introductions to investors and mentors, assisting with fundraising, and recruiting and training early employees.
                    </p>
                </section>
            </div>
        </div>
    </div>
    <section class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col1">
                    <i class="icon-lightbulb"></i>
                    <p>
                        Have a company or startup idea? Get in touch with us to find out how we can help!
                    </p>
                </div>
                <div class="col-md-4 col2">
                    <a class="bttn bttnBlue bttnBig animate pulse" href="/apply">Idea Application</a>
                </div>
            </div>
        </div>
    </section>
    <?php echo $_smarty_tpl->getSubTemplate ('../footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div id="sidr-right" class="sidr right" style="">
        <div class="sidr-inner">
            <ul>
                <li class="sidr-class-active">
                    <a href="/about">关于</a>
                </li>
                <li class="">
                    <a href="/companies">公司</a>
                </li>
                <li class="">
                    <a href="/team">团队</a>
                </li>
                <li class="">
                    <a href="/jobs">职位</a>
                </li>
                <li class="">
                    <a href="/contact">联系</a>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>
<?php }} ?>
