<?php
/* Smarty version 3.1.39, created on 2022-01-31 06:42:48
  from '/home/netitcom/public_html/presta17/themes/classic/templates/catalog/_partials/product-flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f7cb38780434_15181910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f453a124855c13ae28b209b7999dbea5fb9a0f9b' => 
    array (
      0 => '/home/netitcom/public_html/presta17/themes/classic/templates/catalog/_partials/product-flags.tpl',
      1 => 1643090956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f7cb38780434_15181910 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '70138293661f7cb38778e98_88898225';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57398794861f7cb3877d7d6_16159982', 'product_flags');
?>

<?php }
/* {block 'product_flags'} */
class Block_57398794861f7cb3877d7d6_16159982 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_57398794861f7cb3877d7d6_16159982',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="product-flags js-product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
            <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}
}
/* {/block 'product_flags'} */
}
