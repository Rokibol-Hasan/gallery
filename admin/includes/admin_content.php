<?php include "header.php"; ?>
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin
                <small>
                    Subheading
                </small>
            </h1>
            <?php


            $user = new User();

            $user->username = "exampleUserName";
            $user->password = "examplePassword";
            $user->first_name = "exampleFirstName";
            $user->last_name = "exampleLastName";

            $user->create();


            ?>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Blank Page
                </li>
            </ol>
        </div>
    </div>
</div>