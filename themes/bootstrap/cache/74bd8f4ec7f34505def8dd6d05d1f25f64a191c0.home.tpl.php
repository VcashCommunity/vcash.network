<?php
/* Smarty version 3.1.33, created on 2018-11-17 15:32:43
  from '/var/www/vcash.network/themes/bootstrap/template/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf0349b7312c9_60894503',
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
  'cache_lifetime' => 604800,
),true)) {
function content_5bf0349b7312c9_60894503 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/vcash.network/includes/plugins/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Home - vCash.network</title>
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="stylesheet" href="/assets/bootstrap/themes/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
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
              
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['peers']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                  <tr>
                    <td data-order="<?php echo $_smarty_tpl->tpl_vars['row']->value['ip'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['ip'];?>
</td>
                    <td data-order="<?php echo $_smarty_tpl->tpl_vars['row']->value['port'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['port'];?>
</td>
                    <td data-order="<?php echo $_smarty_tpl->tpl_vars['row']->value['lastsend'];?>
"><time class="timeago" datetime="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['lastsend'],"%Y-%m-%dT%H:%M:%SZ");?>
" data-toggle="tooltip" title="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['lastsend'],"%Y-%m-%d %H:%M:%S");?>
 (UTC)"></time></td>
                    <td data-order="<?php echo $_smarty_tpl->tpl_vars['row']->value['lastrecv'];?>
"><time class="timeago" datetime="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['lastrecv'],"%Y-%m-%dT%H:%M:%SZ");?>
" data-toggle="tooltip" title="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['lastrecv'],"%Y-%m-%d %H:%M:%S");?>
 (UTC)"></time></td>
                    <td data-order="<?php echo $_smarty_tpl->tpl_vars['row']->value['conntime'];?>
"><time class="timeago" datetime="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['conntime'],"%Y-%m-%dT%H:%M:%SZ");?>
" data-toggle="tooltip" title="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['conntime'],"%Y-%m-%d %H:%M:%S");?>
 (UTC)"></time></td>
                    <td data-order="<?php echo $_smarty_tpl->tpl_vars['row']->value['subver'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['subver'];?>
</td>
                    <td data-order="<?php echo $_smarty_tpl->tpl_vars['row']->value['startingheight'];?>
"><?php echo number_format($_smarty_tpl->tpl_vars['row']->value['startingheight']);?>
</td>
                  </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <script type="text/javascript" src="/assets/bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/assets/bootstrap/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="/assets/bootstrap/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="/assets/bootstrap/js/jquery.timeago.min.js"></script>
    <script type="text/javascript">
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
    </script>
  </body>
</html>
<?php }
}
