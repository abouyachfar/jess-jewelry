<?php
/* Smarty version 3.1.33, created on 2021-10-07 00:58:39
  from '/var/www/prestashop/admin065acgx5b/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_615e382fbe2b14_36626754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd81eccb5e14f2ca481eb784dbc0b8bd81bc1c569' => 
    array (
      0 => '/var/www/prestashop/admin065acgx5b/themes/default/template/content.tpl',
      1 => 1545054348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615e382fbe2b14_36626754 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
