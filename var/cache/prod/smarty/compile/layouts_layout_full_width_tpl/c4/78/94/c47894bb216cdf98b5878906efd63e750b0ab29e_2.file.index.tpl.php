<?php
/* Smarty version 3.1.33, created on 2021-10-07 00:59:35
  from '/var/www/prestashop/themes/classic-child/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_615e3867ae9809_47627621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c47894bb216cdf98b5878906efd63e750b0ab29e' => 
    array (
      0 => '/var/www/prestashop/themes/classic-child/templates/index.tpl',
      1 => 1627749737,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615e3867ae9809_47627621 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1364099700615e3867ae6723_14816946', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_363752944615e3867ae6d89_57407061 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_1196932111615e3867ae81e0_26833132 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_797496688615e3867ae7bf2_52223730 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1196932111615e3867ae81e0_26833132', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1364099700615e3867ae6723_14816946 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1364099700615e3867ae6723_14816946',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_363752944615e3867ae6d89_57407061',
  ),
  'page_content' => 
  array (
    0 => 'Block_797496688615e3867ae7bf2_52223730',
  ),
  'hook_home' => 
  array (
    0 => 'Block_1196932111615e3867ae81e0_26833132',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_363752944615e3867ae6d89_57407061', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_797496688615e3867ae7bf2_52223730', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
