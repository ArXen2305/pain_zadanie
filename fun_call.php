<?php

if (isset($_GET['sh_cn']))
        show_class_names();
    
if (isset($_GET['sh_su']))
    show_subjects();
    
if (isset($_GET['sh_st']))
    show_students();
    
if (isset($_GET['sh_te']))
    show_teachers();

if (isset($_GET['in_cn']))
    input_class_names();

if (isset($_GET['in_su']))
    input_subjects();

if (isset($_GET['in_st']))
    input_students();

if (isset($_GET['in_te']))
    input_teachers();

if (isset($_GET['opt']))
    show_ch_buttons();
    
if (isset($_GET['ch_log']))
    change_login();

if (isset($_GET['ch_name']))
    change_name();

if (isset($_GET['ch_sname']))
    change_surname();

if (isset($_GET['ch_age']))
    change_age();

if (isset($_GET['ch_pass']))
    change_password();

?>