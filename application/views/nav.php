<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <style>
        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 30px;
            margin: 4px 2px;
            cursor: pointer;
}
        hr.new1{
            display: block; height: 6px; border-radius : 10px; width: 450px;background-color:#037691;
        }
        body {
            background-color: #fff;
             }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2596be; height : 106px">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-middle">
                <div class="d-inline-block align-text-middle">
                    LEARNING<br>BASIC SMART FACTORY
                </div>
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav align-items-center ms-auto mb-2 mb-lg-0">
                <li class="nav-item px-3">
                    <a class="nav-link active" aria-current="page" href=<?php echo base_url()?>>HOME</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="https://learn.thairobotics.org/courses/การสั่งงานระบบสาธิตการ/">ONLINE<br>CONTENTS</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href=<?php echo base_url("Product")?>>PRODUCT<br>CUSTOMIZATION</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href=<?php echo base_url("About/aboutus")?>>ABOUT US</a>
                </li>
                <?php if (!isset($_SESSION['username'])):?>
                    <li class="nav-item px-3">
                        <a class="nav-link" href=<?php echo base_url("Auth/login")?>>
                            <button type="button" class="btn btn-outline-primary">LOGIN</button>
                        </a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href=<?php echo base_url("Auth/register")?>>
                            <button type="button" class="btn btn-outline-primary">Register</button>
                        </a>
                    </li>
                <?php else:?>
                    <li class="nav-item px-3">
                        <?php echo "welcome! ".$_SESSION['username'];?>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href=<?php echo base_url("Auth/logout")?>>
                            <button type="button" class="btn btn-outline-primary">Logout</button>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
            </div>
        </div>
    </nav>

    
