<?php
    include "includes/navigation.php";
 ?>
        <!--This is the page content-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 well">
                        <a href=""><img height="300" width="100%" src="images/LOGO2.png" alt="LOGO"></a>  
                    </div>

                <!-- Main page content-->
                <div class="col-lg-8 well">
                        <h1 class="page-header">
                        Python
                        </h1>
                        <div class="col-md-12">
                            <p>
                            Python is a widely used general-purpose, high level programming language.
                             It was initially designed by Guido van Rossum in 1991 and developed by Python Software Foundation. It was mainly developed for emphasis on code readability, and its syntax 
                            allows programmers to express concepts in fewer lines of code.

                            </p>
                            <h2>Syllabus Of Python</h2>
                            <ul>
                                <li>Basic Syntax</li>
                                <li>Variable and Data Types</li>
                                <li>Operator</li>
                                <li>Conditional Statements(if, if-else, nested if-else)</li>
                                <li>Looping(for, while, nested loops)</li>
                                <li>Control Statements</li>
                                <li>String Manipulation</li>
                                <li>Dictionaries, Functions</li>
                                <li>Modules, Input-Output</li>
                                <li>Exception Handling</li>
                                <li>OOPs concepts</li>

                            </ul>
                        </div>
                        <button class="btn btn-success" onclick="location.href='users/register.php';" style="width:20%;">Register</button>
                        <button class="btn btn-primary" onclick="location.href='users/login.php';" style="float:right; width:20%;">Login</button>
        
                    
                    </div>
                     <!-- This is the sidebar section-->
                <?php include "includes/sidebar.php"; ?>

                </div>
            </div>
        <!--This is the footer-->
        <?php include "includes/footer.php";?>