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
        .mes{
            font-size: 15px;
            margin-top: 10px;
            margin-left: 100px;
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
                    <div class="mes"> 
                    <label><b>Mês</b></label>
                    <select id="mes" style="max-width:100px">
                        <option></option>
                        <option value="1">Janeiro</option>
                        <option value="2">Fevereiro</option>
                        <option value="3">Março</option>
                        <option value="4">Abril</option>
                        <option value="5">Maio</option>
                        <option value="6">Junho</option>
                        <option value="7">Julho</option>
                        <option value="8">Agosto</option>
                        <option value="9">Setembro</option>
                        <option value="10">Outubro</option>
                        <option value="11">Novembro</option>
                        <option value="12">Dezembro</option>
                    </select>
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

