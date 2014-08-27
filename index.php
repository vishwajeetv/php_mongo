<?php

?>
<html>
<head>
    <title>Learning MongoDB</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
</html>
<!--<form method="POST">-->
<!--    <p>-->
<!--        Title:<input type="text" name="title"/>-->
<!--    </p>-->
<!--    <p>-->
<!--        Blog:<textarea name="blogPost"></textarea>-->
<!--    </p>-->
<!--    <button type="submit">Submit</button>-->
<!---->
<!--</form>-->
<div class="container">
    <div class="jumbotron">
        <h1 class="text-center">Mongo Blogger</h1>
    </div>

    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">

            <form action="postBlog.php" method="POST" role="form">

                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control input-lg" name="title" placeholder="Title">
                </div>

                <div class="form-group">
                    <label>Blog Post</label>
                    <textarea class="form-control input-lg" name="blogPost" placeholder="Blog Post"></textarea>
                </div>

                <button type="submit" class="btn btn-lg btn-primary" name="submit">Submit</button>
            </form>

        </div>
        <div class="col-lg-4"></div>
    </div>
</div>
</div>