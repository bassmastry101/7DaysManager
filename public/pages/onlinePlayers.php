<!DOCTYPE html>
<html>
<!--
                Y.                      _
                YiL                   .```.
                Yii;                .; .;;`.
                YY;ii._           .;`.;;;; :
                iiYYYYYYiiiii;;;;i` ;;::;;;;
            _.;YYYYYYiiiiiiYYYii  .;;.   ;;;
         .YYYYYYYYYYiiYYYYYYYYYYYYii;`  ;;;;
       .YYYYYYY$$YYiiYY$$$$iiiYYYYYY;.ii;`..
      :YYY$!.  TYiiYY$$$$$YYYYYYYiiYYYYiYYii.
      Y$MM$:   :YYYYYY$!"``"4YYYYYiiiYYYYiiYY.
   `. :MM$$b.,dYY$$Yii" :'   :YYYYllYiiYYYiYY
_.._ :`4MM$!YYYYYYYYYii,.__.diii$$YYYYYYYYYYY
.,._ $b`P`     "4$$$$$iiiiiiii$$$$YY$$$$$$YiY;
   `,.`$:       :$$$$$$$$$YYYYY$$$$$$$$$YYiiYYL
    "`;$$.    .;PPb$`.,.``T$$YY$$$$YYYYYYiiiYYU:
    ;$P$;;: ;;;;i$y$"!Y$$$b;$$$Y$YY$$YYYiiiYYiYY
    $Fi$$ .. ``:iii.`-":YYYYY$$YY$$$$$YYYiiYiYYY
    :Y$$rb ````  `_..;;i;YYY$YY$$$$$$$YYYYYYYiYY:
     :$$$$$i;;iiiiidYYYYYYYYYY$$$$$$YYYYYYYiiYYYY.
      `$$$$$$$YYYYYYYYYYYYY$$$$$$YYYYYYYYiiiYYYYYY
      .i!$$$$$$YYYYYYYYY$$$$$$YYY$$YYiiiiiiYYYYYYY
     :YYiii$$$$$$$YYYYYYY$$$$YY$$$$YYiiiiiYYYYYYi'

        Much code -- WOW
		Jesse B.
-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <?php
    $pageTitle='Online Players';
    $pageParent='Players';
    include_once($_SERVER[ "DOCUMENT_ROOT"] . "/lib/header.php");
  ?>
</head>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">
  <?php
    include_once($_SERVER[ "DOCUMENT_ROOT"] . "/lib/sidebar.php");
  ?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Online Players
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Players</li>
        <li class="active">Online Players</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th class="text-left">Player ID</th>
                    <th class="text-left">Player Name</th>
                    <th class="text-left">Level</th>
                    <th class="text-left">Health</th>
                    <th class="text-left">Zombies Killed</th>
                    <th class="text-left">Players Killed</th>
                    <th class="text-left">Deaths</th>
                    <th class="text-left">Position</th>
                    <th class="text-left">Steam ID</th>
                    <th class="text-left">IP</th>
                    <th class="text-left">Ping</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $onlinePlayers = mysql_query("SELECT * FROM players where onlineStatus = '1' order by id asc");
                    if (!$onlinePlayers) {
                      die('Invalid query: ' . mysql_error());
                    }
                    while($row = mysql_fetch_array($onlinePlayers)) {
                      echo '<tr>';
                      echo '<td class="text-left">' . $row['playerid'] . '</td>';
                      echo '<td class="text-left">' . $row['playerName'] . '</td>';
                      echo '<td class="text-left">' . $row['level'] . '</td>';
                      echo '<td class="text-left">' . $row['health'] . '</td>';
                      echo '<td class="text-left">' . $row['zombiesKilled'] . '</td>';
                      echo '<td class="text-left">' . $row['playersKilled'] . '</td>';
                      echo '<td class="text-left">' . $row['deaths'] . '</td>';
                      echo '<td class="text-left">' . $row['currentPosition'] . '</td>';
                      echo '<td class="text-left"><a href="http://steamidfinder.com/lookup/' . $row['steamid'] . ' "target="_blank">' . $row['steamid'] . '</a></td>';
                      echo '<td class="text-left"><a href="https://tools.keycdn.com/geo?host=' . $row['ip'] . ' "target="_blank">' . $row['ip'] . '</a></td>';
                      echo '<td class="text-left">' . $row['ping'] . '</td>';
                      echo '</tr>';
                    }
                    ?>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
    include_once($_SERVER[ "DOCUMENT_ROOT"] . "/lib/footer.php");
  ?>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>
</body>
</html>
