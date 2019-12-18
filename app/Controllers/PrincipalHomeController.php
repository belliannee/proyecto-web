<?php


class PrincipalHomeController
{
    function __construct()
    {

    }

    function index()
    {
        require_once('Views/PrincipalHome/index.html');
    }
    function acerca()
    {
        require_once('Views/PrincipalHome/acerca.php');
    }
    function contacto()
    {
        require_once('Views/PrincipalHome/contacto.html');
    }
    function form(){
        require_once('Views/Forms/formbasic.php');
    }
    function login(){
        require_once('Views/Login/index.php');
    }
    function exito()
    {
        require_once('Views/Forms/exito.php');
    }
}