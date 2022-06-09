<?php
/* Smarty version 3.1.33, created on 2021-10-07 00:59:35
  from '/var/www/prestashop/themes/classic-child/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_615e3867af3eb2_39788757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a1ee2f6f711ce79ed573a11c1317eee85d9b291' => 
    array (
      0 => '/var/www/prestashop/themes/classic-child/templates/page.tpl',
      1 => 1627749737,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615e3867af3eb2_39788757 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71270968615e3867aee879_80221058', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_437409150615e3867aef618_05191713 extends Smarty_Internal_Block
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
class Block_2103328782615e3867aeeec0_80006739 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_437409150615e3867aef618_05191713', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_1430567575615e3867af12e5_32051413 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1476508784615e3867af1af2_32109790 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_795264209615e3867af0d55_21193463 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1430567575615e3867af12e5_32051413', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1476508784615e3867af1af2_32109790', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_1377044194615e3867af2e79_66404576 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_897633015615e3867af28d8_53633749 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1377044194615e3867af2e79_66404576', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_71270968615e3867aee879_80221058 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_71270968615e3867aee879_80221058',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_2103328782615e3867aeeec0_80006739',
  ),
  'page_title' => 
  array (
    0 => 'Block_437409150615e3867aef618_05191713',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_795264209615e3867af0d55_21193463',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1430567575615e3867af12e5_32051413',
  ),
  'page_content' => 
  array (
    0 => 'Block_1476508784615e3867af1af2_32109790',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_897633015615e3867af28d8_53633749',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1377044194615e3867af2e79_66404576',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2103328782615e3867aeeec0_80006739', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_795264209615e3867af0d55_21193463', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_897633015615e3867af28d8_53633749', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
