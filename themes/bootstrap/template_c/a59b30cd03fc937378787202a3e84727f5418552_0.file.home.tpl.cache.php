<?php
/* Smarty version 3.1.33, created on 2018-11-17 15:32:43
  from '/var/www/vcash.network/themes/bootstrap/template/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf0349b707643_27301599',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'a59b30cd03fc937378787202a3e84727f5418552' => 
    array (
      0 => '/var/www/vcash.network/themes/bootstrap/template/home.tpl',
      1 => 1542454610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf0349b707643_27301599 (Smarty_Internal_Template $_smarty_tpl) {
echo '/*%%SmartyNocache:12709660655bf0349b3f7127_65152094%%*/<?php $_smarty_tpl->_checkPlugins(array(0=>array(\'file\'=>\'/var/www/vcash.network/includes/plugins/vendor/smarty/smarty/libs/plugins/modifier.date_format.php\',\'function\'=>\'smarty_modifier_date_format\',),));
?>/*/%%SmartyNocache:12709660655bf0349b3f7127_65152094%%*/';
$_smarty_tpl->compiled->nocache_hash = '12709660655bf0349b3f7127_65152094';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $_smarty_tpl->tpl_vars['page']->value['name'];?>
 - vCash.network</title>
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="stylesheet" href="/assets/bootstrap/themes/<?php echo '/*%%SmartyNocache:12709660655bf0349b3f7127_65152094%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme\']->value;?>
/*/%%SmartyNocache:12709660655bf0349b3f7127_65152094%%*/';?>
.min.css">
    <link rel="stylesheet" href="/assets/bootstrap/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/bootstrap/css/flag-icon.min.css">
    <link rel="stylesheet" href="/assets/bootstrap/css/dataTables.bootstrap.min.css">
    <style>
      body {
        background-color: #b60127;
      }
      h1 {
        color: white;
      }
    </style>
  </head>
  <body>

    <div class="col-md-12 text-center">
      <br>
      <img src="/assets/bootstrap/img/logoGrey.png" width="64">
      <h1>vCash [XVC] Network</h1>
      <br>
    </div>

    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">
            <i class="fa fa-list" aria-hidden="true"></i> Peers list
          </h3>
        </div>
        <div class="panel-body">
          <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="peersList">
            <thead>
              <tr>
                <th>IP</th>
                <th>Port</th>
                <th>Last send</th>
                <th>Last receive</th>
                <th>Connection time</th>
                <th>User agent</th>
                <th>Height</th>
              </tr>
            </thead>

            <tbody>
              
                <?php echo '/*%%SmartyNocache:12709660655bf0349b3f7127_65152094%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'peers\']->value, \'row\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'row\']->value) {
?>/*/%%SmartyNocache:12709660655bf0349b3f7127_65152094%%*/';?>

                  <tr>
                    <td data-order="<?php echo '/*%%SmartyNocache:12709660655bf0349b3f7127_65152094%%*/<?php echo $_smarty_tpl->tpl_vars[\'row\']->value[\'ip\'];?>
/*/%%SmartyNocache:12709660655bf0349b3f7127_65152094%%*/';?>
"><?php echo '/*%%SmartyNocache:12709660655bf0349b3f7127_65152094%%*/<?php echo $_smarty_tpl->tpl_vars[\'row\']->value[\'ip\'];?>
/*/%%SmartyNocache:12709660655bf0349b3f7127_65152094%%*/';?>
</td>
                    <td data-order="<?php echo '/*%%SmartyNocache:12709660655bf0349b3f7127_65152094%%*/<?php echo $_smarty_tpl->tpl_vars[\'row\']->value[\'port\'];?>
/*/%%SmartyNocache:12709660655bf0349b3f7127_65152094%%*/';?>
"><?php echo '/*%%SmartyNocache:12709660655bf0349b3f7127_65152094%%*/<?php echo $_smarty_tpl->tpl_vars[\'row\']->value[\'port\'];?>
/*/%%SmartyNocache:12709660655bf0349b3f7127_65152094%%*/';?>
</td>
                    <td data-order="<?php echo '/*%%SmartyNocache:12709660655bf0349b3f7127_65152094%%*/<?php echo $_smarty_tpl->tpl_vars[\'row\']->value[\'lastsend\'];?>
/*/%%SmartyNocache:12709660655bf0349b3f7127_65152094%%*/';?>
"><time class="timeago" datetime="<?php echo '/*%%SmartyNocache:12709660655bf0349b3f7127_65152094%%*/<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars[\'row\']->value[\'lastsend\'],"%Y-%m-%dT%H:%M:%SZ");?>
/*/%%SmartyNocache:12709660655bf0349b3f7127_65152094%%*/';?>
" data-toggle="tooltip" title="<?php echo '/*%%SmartyNocache:12709660655bf0349b3f7127_65152094%%*/<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars[\'row\']->value[\'lastsend\'],"%Y-%m-%d %H:%M:%S");?>
/*/%%SmartyNocache:12709660655bf0349b3f7127_65152094%%*/';?>
 (UTC)"></time></td>
                    <td data-order="<?php echo '/*%%SmartyNocache:12709660655bf0349b3f7127_65152094%%*/<?php echo $_smarty_tpl->tpl_vars[\'row\']->value[\'lastrecv\'];?>
/*/%%SmartyNocache:12709660655bf0349b3f7127_65152094%%*/';?>
"><time class="timeago" datetime="<?php echo '/*%%SmartyNocache:12709660655bf0349b3f7127_65152094%%*/<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars[\'row\']->value[\'lastrecv\'],"%Y-%m-%dT%H:%M:%SZ");?>
/*/%%SmartyNocache:12709660655bf0349b3f7127_65152094%%*/';?>
" data-toggle="tooltip" title="<?php echo '/*%%SmartyNocache:12709660655bf0349b3f7127_65152094%%*/<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars[\'row\']->value[\'lastrecv\'],"%Y-%m-%d %H:%M:%S");?>
/*/%%SmartyNocache:12709660655bf0349b3f7127_65152094%%*/';?>
 (UTC)"></time></td>
                    <td data-order="<?php echo '/*%%SmartyNocache:12709660655bf0349b3f7127_65152094%%*/<?php echo $_smarty_tpl->tpl_vars[\'row\']->value[\'conntime\'];?>
/*/%%SmartyNocache:12709660655bf0349b3f7127_65152094%%*/';?>
"><time class="timeago" datetime="<?php echo '/*%%SmartyNocache:12709660655bf0349b3f7127_65152094%%*/<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars[\'row\']->value[\'conntime\'],"%Y-%m-%dT%H:%M:%SZ");?>
/*/%%SmartyNocache:12709660655bf0349b3f7127_65152094%%*/';?>
" data-toggle="tooltip" title="<?php echo '/*%%SmartyNocache:12709660655bf0349b3f7127_65152094%%*/<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars[\'row\']->value[\'conntime\'],"%Y-%m-%d %H:%M:%S");?>
/*/%%SmartyNocache:12709660655bf0349b3f7127_65152094%%*/';?>
 (UTC)"></time></td>
                    <td data-order="<?php echo '/*%%SmartyNocache:12709660655bf0349b3f7127_65152094%%*/<?php echo $_smarty_tpl->tpl_vars[\'row\']->value[\'subver\'];?>
/*/%%SmartyNocache:12709660655bf0349b3f7127_65152094%%*/';?>
"><?php echo '/*%%SmartyNocache:12709660655bf0349b3f7127_65152094%%*/<?php echo $_smarty_tpl->tpl_vars[\'row\']->value[\'subver\'];?>
/*/%%SmartyNocache:12709660655bf0349b3f7127_65152094%%*/';?>
</td>
                    <td data-order="<?php echo '/*%%SmartyNocache:12709660655bf0349b3f7127_65152094%%*/<?php echo $_smarty_tpl->tpl_vars[\'row\']->value[\'startingheight\'];?>
/*/%%SmartyNocache:12709660655bf0349b3f7127_65152094%%*/';?>
"><?php echo '/*%%SmartyNocache:12709660655bf0349b3f7127_65152094%%*/<?php echo number_format($_smarty_tpl->tpl_vars[\'row\']->value[\'startingheight\']);?>
/*/%%SmartyNocache:12709660655bf0349b3f7127_65152094%%*/';?>
</td>
                  </tr>
                <?php echo '/*%%SmartyNocache:12709660655bf0349b3f7127_65152094%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>/*/%%SmartyNocache:12709660655bf0349b3f7127_65152094%%*/';?>

              
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <?php echo '<script'; ?>
 type="text/javascript" src="/assets/bootstrap/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/assets/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/assets/bootstrap/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/assets/bootstrap/js/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/assets/bootstrap/js/jquery.timeago.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
      $(document).ready(function(){
        $('#peersList').DataTable({
          "order": [[ 3, "desc" ]]
        });

        $('[data-toggle="tooltip"]').tooltip();
        $('time.timeago').timeago();

        $('#peersList').on('draw.dt', function() {
          $('[data-toggle="tooltip"]').tooltip();
          $('time.timeago').timeago();
        });

      });
    <?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
