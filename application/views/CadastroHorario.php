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
        .ano{
            font-size: 15px;
            margin-top: 10px;
            margin-left: 100px;
        }
        .tamanhobotao{
            width: 50px;
            height: 20px;
            margin: 20px;
            padding: 20px;
            font-size: 16px;
            line-height:0;
            margin-top: 300px;
            margin-left: 300px;
        }
        label{
            padding: 5px;
            font-size: 17px;
        }
    </style>
    <main>
        <div class="container">
            <div class="row-fluid">
                <?php include_once ('principal/menu.php') ?>
                <div id="content" class="span9">
                    <div class="ano">
                        <label><b> Ano</b></label>
                        <select id="ano" style="max-width:80px">
                            <option></option>
                            <option value="1">2017</option>
                            <option value="2">2016</option>
                            <option value="3">2015</option>
                            <option value="4">2014</option>
                            <option value="5">2013</option>
                            <option value="6">2012</option>
                        </select>
                    </div>
                    <div class="text-center span2">
                        <input type="submit" value="Gravar"  id="botao_submit" class="btn btn-primary tamanhobotao">
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

