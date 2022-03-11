<?php
/* Smarty version 3.1.39, created on 2022-01-31 06:42:49
  from '/home/netitcom/public_html/presta17/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61f7cb39aed953_13467497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dada68057363a3ee004e8d461746fcb0fbc9cde8' => 
    array (
      0 => '/home/netitcom/public_html/presta17/themes/classic/templates/_partials/helpers.tpl',
      1 => 1643090956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61f7cb39aed953_13467497 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/home/netitcom/public_html/presta17/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/da/da/68/dada68057363a3ee004e8d461746fcb0fbc9cde8_2.file.helpers.tpl.php',
    'uid' => 'dada68057363a3ee004e8d461746fcb0fbc9cde8',
    'call_name' => 'smarty_template_function_renderLogo_144700884361f7cb39ae3bc1_47875661',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_144700884361f7cb39ae3bc1_47875661 */
if (!function_exists('smarty_template_function_renderLogo_144700884361f7cb39ae3bc1_47875661')) {
function smarty_template_function_renderLogo_144700884361f7cb39ae3bc1_47875661(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_144700884361f7cb39ae3bc1_47875661 */
}
