<?php
/* Smarty version 3.1.33, created on 2021-07-31 17:36:45
  from '/var/www/prestashop/themes/classic-child/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_61057c1d2ac697_71039537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a1ee2f6f711ce79ed573a11c1317eee85d9b291' => 
    array (
      0 => '/var/www/prestashop/themes/classic-child/templates/page.tpl',
      1 => 1626290431,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61057c1d2ac697_71039537 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174569360661057c1d2a7a70_85821202', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_191406933561057c1d2a85e3_93229567 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_26285841361057c1d2a8018_62830423 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191406933561057c1d2a85e3_93229567', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_68406780661057c1d2aa000_70152517 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_168335780861057c1d2aa645_75101987 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_105463852461057c1d2a9bb6_20900687 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_68406780661057c1d2aa000_70152517', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168335780861057c1d2aa645_75101987', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_7921593861057c1d2aba96_54117502 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_98262187061057c1d2ab437_17639634 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7921593861057c1d2aba96_54117502', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_174569360661057c1d2a7a70_85821202 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_174569360661057c1d2a7a70_85821202',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_26285841361057c1d2a8018_62830423',
  ),
  'page_title' => 
  array (
    0 => 'Block_191406933561057c1d2a85e3_93229567',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_105463852461057c1d2a9bb6_20900687',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_68406780661057c1d2aa000_70152517',
  ),
  'page_content' => 
  array (
    0 => 'Block_168335780861057c1d2aa645_75101987',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_98262187061057c1d2ab437_17639634',
  ),
  'page_footer' => 
  array (
    0 => 'Block_7921593861057c1d2aba96_54117502',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26285841361057c1d2a8018_62830423', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105463852461057c1d2a9bb6_20900687', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98262187061057c1d2ab437_17639634', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
