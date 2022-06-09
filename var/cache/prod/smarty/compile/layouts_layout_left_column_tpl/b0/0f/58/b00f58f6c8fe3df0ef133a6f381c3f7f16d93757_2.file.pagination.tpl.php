<?php
/* Smarty version 3.1.33, created on 2021-10-07 00:58:39
  from '/var/www/prestashop/themes/classic-child/templates/_partials/pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_615e382fedc7b4_17469504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b00f58f6c8fe3df0ef133a6f381c3f7f16d93757' => 
    array (
      0 => '/var/www/prestashop/themes/classic-child/templates/_partials/pagination.tpl',
      1 => 1627749737,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615e382fedc7b4_17469504 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<nav class="pagination">
  <div class="col-md-4">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_650142512615e382fecd854_23707502', 'pagination_summary');
?>

  </div>

  <div class="col-md-6 offset-md-2 pr-0">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_604616876615e382fed0a67_77320029', 'pagination_page_list');
?>

  </div>

</nav>
<?php }
/* {block 'pagination_summary'} */
class Block_650142512615e382fecd854_23707502 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination_summary' => 
  array (
    0 => 'Block_650142512615e382fecd854_23707502',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Showing %from%-%to% of %total% item(s)','d'=>'Shop.Theme.Catalog','sprintf'=>array('%from%'=>$_smarty_tpl->tpl_vars['pagination']->value['items_shown_from'],'%to%'=>$_smarty_tpl->tpl_vars['pagination']->value['items_shown_to'],'%total%'=>$_smarty_tpl->tpl_vars['pagination']->value['total_items'])),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'pagination_summary'} */
/* {block 'pagination_page_list'} */
class Block_604616876615e382fed0a67_77320029 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination_page_list' => 
  array (
    0 => 'Block_604616876615e382fed0a67_77320029',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     <?php if ($_smarty_tpl->tpl_vars['pagination']->value['should_be_displayed']) {?>
        <ul class="page-list clearfix text-sm-center">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagination']->value['pages'], 'page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
?>


            <li <?php if ($_smarty_tpl->tpl_vars['page']->value['current']) {?> class="current" <?php }?>>
              <?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'spacer') {?>
                <span class="spacer">&hellip;</span>
              <?php } else { ?>
                <a
                  rel="<?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>prev<?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>next<?php } else { ?>nofollow<?php }?>"
                  href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
                  class="<?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>previous <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>next <?php }
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('disabled'=>!$_smarty_tpl->tpl_vars['page']->value['clickable'],'js-search-link'=>true) )), ENT_QUOTES, 'UTF-8');?>
"
                >
                  <?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>
                    <i class="material-icons">&#xE314;</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Previous','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

                  <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
<i class="material-icons">&#xE315;</i>
                  <?php } else { ?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>

                  <?php }?>
                </a>
              <?php }?>
            </li>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
      <?php }?>
    <?php
}
}
/* {/block 'pagination_page_list'} */
}
