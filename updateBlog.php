<?php


$mongo = new Mongo();

$database = $mongo->learningmongo;

$blog  = $database->blog;

if(isset($_POST['title']))
{
    $inputTitle = $_POST['title'];
    $inputBlogPost = $_POST['blogPost'];
    $blog->update( array(
            "title" => $inputTitle
        ),
        array(
        "title" => $inputTitle,
        "post" => $inputBlogPost
    ));
}



$blogs = $blog->find();

?>
<html>
<head>
    <title>Learning MongoDB</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<div class="container">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">

            <?php
            if($blogs->count() > 0)
            {
                foreach($blogs as $blogArticle)
                {
                    ?>

                    <div class="news">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h2 class="panel-title"><?php echo $blogArticle['title'];?></h2>
                            </div>
                            <div class="panel-body">
                                <?php echo $blogArticle['post'];?>

                            </div>


                            </form>

                        </div>
                    </div>
                <?php
                }
            }
            ?>

        </div>
        <div class="col-lg-3"></div>
    </div>

</div>
</html>