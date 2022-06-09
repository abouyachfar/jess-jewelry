<?php
/* Smarty version 3.1.33, created on 2021-10-07 00:59:35
  from '/var/www/prestashop/themes/classic-child/modules/ab_homecategories/ab_homecategories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_615e3867876d09_56781903',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4478e15c1a9466d38f0df8a83d6d3d0054adb7e' => 
    array (
      0 => '/var/www/prestashop/themes/classic-child/modules/ab_homecategories/ab_homecategories.tpl',
      1 => 1627773384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615e3867876d09_56781903 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Block ab_homecategories module-->
<div id="abhomecategories_block_home" class="row">
  <div class="block_content">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
?>
        <div class='view view-first home_categorie col-lg-3 col-md-3 col-sm-3'>
          <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['image_url'], ENT_QUOTES, 'UTF-8');?>
" alt='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['name'], ENT_QUOTES, 'UTF-8');?>
' />
          <span class="home_categorie_title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
          <div class="mask">
            <h2><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h2>
            <p>Cliquer pour découvrire plus d'article dans cette catégorie</p>
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="info" title='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['name'], ENT_QUOTES, 'UTF-8');?>
'>Read More</a>
          </div>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
</div>
<!-- /Block abhomecategories module --><?php }
}
