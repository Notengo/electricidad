<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<html>
    <head>
        <title>Login - Sistema</title>
        <link href="../bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <br>
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <label class="label label-primary">Usuario</label>
                    <input type="text" name="userame" id="username" class="form-control">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <label class="label label-primary">Contrase&ntilde;a</label>
                    <input type="text" name="pass" id="pass" class="form-control">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-5"></div>
                <div class="col-lg-2">
                    <input type="submit" name="acceso" id="acceso" class="btn btn-primary btn-group form-control" value='Acceder'>
                </div>
            </div>
        </div>
    </body>
</html>