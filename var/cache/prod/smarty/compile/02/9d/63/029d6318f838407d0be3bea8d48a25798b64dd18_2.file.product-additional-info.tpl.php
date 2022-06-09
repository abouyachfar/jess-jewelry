<?php
/* Smarty version 3.1.33, created on 2021-10-23 15:16:56
  from '/var/www/prestashop/themes/classic-child/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61741958c53c84_12615935',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '029d6318f838407d0be3bea8d48a25798b64dd18' => 
    array (
      0 => '/var/www/prestashop/themes/classic-child/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1627749737,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61741958c53c84_12615935 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
