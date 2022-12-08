<?php
    require_once("header.php");

	session_start();
	
	if (!isset($_SESSION['logedin']))
	{
		header('Location: index.php');
	}

    $user_name = $_SESSION['user'];
    
    echo ' 
        <section class="hero is-primary is-fullheight">
            <div class="hero-body">
                <div class="container">
                    <div class="field">
                        <a>Witaj '.$_SESSION['user'].'</a>
                    </div>
                    <div class="field">
                        <a href="logout.php" class="button is-black">Wyloguj się!</a></p>
                        <form action="?"><a href="?opt" class="button mt-3 is-light"> Ustawienia konta </a></form>
                    </div>
                    <br><br><br>
                    <div class="field">
                        <div class="columns">
                            <div class="column is-6">
                            <h1 class="title">Wypisz: </h1> 
                                <form action="?"><a href="?sh_cn" class="button is-info"> Klasy </a></form>
                                <form action="?"><a href="?sh_su" class="button is-info mt-2"> Przedmioty </a></form>
                                <form action="?"><a href="?sh_st" class="button is-info mt-2"> Uczniowie </a></form>
                                <form action="?"><a href="?sh_te" class="button is-info mt-2"> Nauczyciele </a></form>
                            </div>
                            <div class="column is-6">
                            <h1 class="title">Wpisz: </h1>
                                <form action="?"><a href="?in_cn" class="button is-danger"> Klasy </a></form>
                                <form action="?"><a href="?in_su" class="button is-danger mt-2"> Przedmioty </a></form>
                                <form action="?"><a href="?in_st" class="button is-danger mt-2"> Uczniowie </a></form>
                                <form action="?"><a href="?in_te" class="button is-danger mt-2"> Nauczyciele </a></form>
                            </div>
                        </div>
                    </div>
    ';

    require_once('fun.php');

    require_once('fun_call.php');
?>