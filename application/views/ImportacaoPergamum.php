<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<?php
include_once ('principal/topo.php');
?>
<html
    ng-app="treeGridTest">
    <!-- for local development -->
    <!-- <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet"
          href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <style>
        .margin{
            margin-left: -10px;
        }
        .tamanhobotao{
            width: 50px;
            height: 20px;
            margin: 20px;
            padding: 20px;
            font-size: 18px;
            line-height:0;
            margin-top: 35px;
            margin-left: 300px;
        }
    </style>
    <main>
        <div class="container">
            <div class="row-fluid">
                <?php include_once ('principal/menu.php') ?>
                <div id="content" class="span9">
                    <div class="text-center span2">
                        <input type="submit" value="Importar Pergamum"  id="botao_submit" class="btn btn-primary tamanhobotao">
                    </div>
                </div>
            </div>
        </div> 
    </main>
    <script src="http://code.angularjs.org/1.2.12/angular.js"></script>
    <script src="src/tree-grid-directive.js"></script>
    <script src="treeGridTest.js"></script>
</html>
<?php
include_once ('principal/rodape.php');
?>

