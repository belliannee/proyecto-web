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
}