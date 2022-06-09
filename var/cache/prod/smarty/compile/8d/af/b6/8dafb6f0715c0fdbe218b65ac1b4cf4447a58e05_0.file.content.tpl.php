<?php
/* Smarty version 3.1.33, created on 2021-10-07 00:58:37
  from '/var/www/prestashop/admin065acgx5b/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_615e382da8ba22_24636743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8dafb6f0715c0fdbe218b65ac1b4cf4447a58e05' => 
    array (
      0 => '/var/www/prestashop/admin065acgx5b/themes/new-theme/template/content.tpl',
      1 => 1545054348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615e382da8ba22_24636743 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
