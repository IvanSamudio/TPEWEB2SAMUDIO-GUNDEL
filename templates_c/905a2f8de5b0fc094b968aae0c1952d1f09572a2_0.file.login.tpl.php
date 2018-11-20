<?php
/* Smarty version 3.1.33, created on 2018-10-26 20:54:46
  from 'C:\xampp\htdocs\Proyecto\TPEWEB2SAMUDIO-ORSINI\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd362f6dc0da9_64288208',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '905a2f8de5b0fc094b968aae0c1952d1f09572a2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto\\TPEWEB2SAMUDIO-ORSINI\\templates\\login.tpl',
      1 => 1540308239,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbarVisitante.tpl' => 1,
    'file:sideRegistro.tpl' => 1,
    'file:footerMain.tpl' => 1,
  ),
),false)) {
function content_5bd362f6dc0da9_64288208 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
  <div class="contenedor">
    <header class="head">
      <?php $_smarty_tpl->_subTemplateRender("file:navbarVisitante.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </header>

    <section class="main">
    <?php $_smarty_tpl->_subTemplateRender("file:sideRegistro.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </section>

    <aside class="side">

    </aside>

    <footer class="footer">
      <?php $_smarty_tpl->_subTemplateRender("file:footerMain.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </footer>
  </div>
  <!-- //<?php echo '<script'; ?>
 src="js/main.js" charset="utf-8"><?php echo '</script'; ?>
> -->
</body>
<?php }
}
