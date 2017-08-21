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
        .tamanhobotao{
            width: 100px;
            height: 50px;
            margin: 20px;
            padding: 20px;
            line-height:0;
        }
        .margin{
            margin-left: -10px;
        }

        .quant{
            float: none;
            display: inline;
            font-size: 14px;
        }

        .data{
            font-size: 15px;
            margin-top: 30px;
            margin-left: 80px;
        }
        .hora{
            font-size: 15px;
            margin-top: 30px;
            margin-left: -340px;
        }
        .titulo{
            margin-left:10px;
        }
    </style>
    <main>
        <div class="container">
            <div class="row-fluid">
                <?php include_once ('principal/menu.php') ?>
                <!-- fim #navigation.span3 -->
                <div id="content" class="span4">
                    <section id="content-section">
                        <div class="data">
                            <div class="span10">
                                <b>Data</b>
                                <select id="data" style="max-width:120px">
                                    <option value="1"></option>
                                </select>
                            </div>
                        </div>
                        <div class="hora">
                            <b class="hora">Hora atual</b> 
                            <select id="horaatual" style="max-width:120px">
                                <option></option>
                                <option value="1">09:15 - 10:00</option>
                                <option value="2">10:00 - 12:00</option>
                                <option value="3">12:00 - 14:00</option>
                                <option value="4">15:00 - 15:30</option>
                                <option value="5">15:30 - 18:00</option>
                                <option value="6">18:00 - 19:00</option>
                                <option value="7">19:15 - 20:30</option>
                                <option value="8">20:30 - 21:30</option>
                            </select>
                        </div>

                        <span class="hide">Início do conteúdo da página</span>
                        <div class="row-fluid module no-margin variacao-module-02">
                            <div class="manchete-texto-lateral">
                                <div class="row-fluid">
                                    <div class="form-group span11 text-left">
                                        <div class="container">
                                            <div class="manchete-texto-lateral">
                                                <div class="row-fluid">
                                                    <div class="form-group span11 text-left">

                                                        <div class="text-center span2">
                                                            <input type="submit" value="Geral"  id="botao_submit" class="btn btn-primary tamanhobotao">
                                                            Quant.<input type="text" name="nome" value="1" id="nome" class="form-control span3 quant">
                                                        </div>
                                                        <div class="text-center span2">
                                                            <input type="submit" value="Int. MSI" id="botao_submit" class="btn btn-primary tamanhobotao">
                                                            Quant.<input type="text" name="nome" value="1" id="nome" class="form-control span3 quant">
                                                        </div>
                                                        <div class="text-center span2">
                                                            <input type="submit" value="Int. Edi" id="botao_submit" class="btn btn-primary tamanhobotao">
                                                            Quant.<input type="text" name="nome" value="1" id="nome" class="form-control span3 quant">
                                                        </div>

                                                        <div class="text-center span2">
                                                            <input type="submit" value="Int. Meca" id="botao_submit" class="btn btn-primary tamanhobotao">
                                                            Quant.<input type="text" name="nome" value="1" id="nome" class="form-control span3 quant">
                                                        </div>

                                                        <div class="text-center span2">
                                                            <input type="submit" value="Eng. Civil" id="botao_submit" class="btn btn-primary tamanhobotao">
                                                            Quant.<input type="text" name="nome" value="1" id="nome" class="form-control span3 quant">
                                                        </div>

                                                        <div class="text-center span2">
                                                            <input type="submit" value="Eng. Elet" id="botao_submit" class="btn btn-primary tamanhobotao">
                                                            Quant.<input type="text" name="nome" value="1" id="nome" class="form-control span3 quant">
                                                        </div>
                                                        <div class="text-center span2">
                                                            <input type="submit" value="ADS" id="botao_submit" class="btn btn-primary tamanhobotao  margin">
                                                            Quant.<input type="text" name="nome" value="1" id="nome" class="form-control span3 quant">
                                                        </div>
                                                        <div class="text-center span2">
                                                            <input type="submit" value="Física" id="botao_submit" class="btn btn-primary tamanhobotao">
                                                            Quant.<input type="text" name="nome" value="1" id="nome" class="form-control span3 quant">
                                                        </div>
                                                        <div class="text-center span2">
                                                            <input type="submit" value="Tec. Meca" id="botao_submit" class="btn btn-primary tamanhobotao">
                                                            Quant.<input type="text" name="nome" value="1" id="nome" class="form-control span3 quant">
                                                        </div>
                                                        <div class="text-center span2">
                                                            <input type="submit" value="Tec. Eletro" id="botao_submit" class="btn btn-primary tamanhobotao">
                                                            Quant.<input type="text" name="nome" value="1" id="nome" class="form-control span3 quant">
                                                        </div>
                                                        <div class="text-center span2">
                                                            <input type="submit" value="Tec. Edi" id="botao_submit" class="btn btn-primary tamanhobotao">
                                                            Quant.<input type="text" name="nome" value="1" id="nome" class="form-control span3 quant">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chamadas-secundarias row-fluid">
                                <div class="span4 no-margin">
                                    <a href="/index.php/component/content/article?id=299"
                                       class="img-rounded"> <img
                                            src="/images/galeria_em_artigos/dsi/rodaweb.png" width="230"
                                            height="136" alt="" />
                                    </a>
                                </div>									
                            </div>
                        </div>
                </div>
                <span class="hide">Fim do conteúdo da página</span>
                </section>
            </div>
            <!-- fim #content.span9 -->
        </div>
        <!-- fim .row-fluid -->
    </div>
    <!-- fim .container --> </main>
<script src="http://code.angularjs.org/1.2.12/angular.js"></script>
<script src="src/tree-grid-directive.js"></script>
<script src="treeGridTest.js"></script>
</html>
<?php
include_once ('principal/rodape.php');
?>

