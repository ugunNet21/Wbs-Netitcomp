<?php
/* Smarty version 3.1.39, created on 2022-01-31 06:42:49
  from '/home/netitcom/public_html/presta17/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f7cb39aa5ef0_92294664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95d16c64f9194791953c134568867e295dc001d8' => 
    array (
      0 => '/home/netitcom/public_html/presta17/themes/classic/templates/page.tpl',
      1 => 1643090956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f7cb39aa5ef0_92294664 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40090630761f7cb39a9bdb1_49856586', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_41995578161f7cb39a9ce62_26433268 extends Smarty_Internal_Block
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
class Block_15372332061f7cb39a9c617_91338755 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41995578161f7cb39a9ce62_26433268', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_178505406261f7cb39aa33f2_51457557 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_61569886361f7cb39aa3ba6_63218745 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_49497865761f7cb39aa2e50_95487233 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178505406261f7cb39aa33f2_51457557', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61569886361f7cb39aa3ba6_63218745', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_89989004761f7cb39aa4e56_05803807 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_144053246861f7cb39aa47c6_71686393 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89989004761f7cb39aa4e56_05803807', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_40090630761f7cb39a9bdb1_49856586 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_40090630761f7cb39a9bdb1_49856586',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_15372332061f7cb39a9c617_91338755',
  ),
  'page_title' => 
  array (
    0 => 'Block_41995578161f7cb39a9ce62_26433268',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_49497865761f7cb39aa2e50_95487233',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_178505406261f7cb39aa33f2_51457557',
  ),
  'page_content' => 
  array (
    0 => 'Block_61569886361f7cb39aa3ba6_63218745',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_144053246861f7cb39aa47c6_71686393',
  ),
  'page_footer' => 
  array (
    0 => 'Block_89989004761f7cb39aa4e56_05803807',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15372332061f7cb39a9c617_91338755', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49497865761f7cb39aa2e50_95487233', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144053246861f7cb39aa47c6_71686393', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
