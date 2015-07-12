<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ark-lang.org &middot; reference</title>

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            
            ga('create', 'UA-64503427-1', 'auto');
            ga('send', 'pageview');
        </script>

        <link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href="//fonts.googleapis.com/css?family=Fira+Mono" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css" type="text/css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.5/styles/default.min.css">
    </head>

    <body>
        <div class="slab"></div>

        <div class="container">
            <?php include 'include/header.php'; ?>

            <div class="row">
                <div class="notice-block">
                    <p class="italic">
                        Note, this documentation is for the nightly build! It is pulled
                        from the GitHub every 5 minutes. This means that the documentation
                        can change at <b>any</b> given time, therefore the documentation
                        can be outdated, or have errors. <a href="//github.com/ark-lang/ark-docs">You can help us fix that!</a>
                    </p>
                </div>

                <div class="col-duo markdown">
                    <?php 

                        // pls work
                        $reference_contents = file_get_contents("../ark-docs/STYLEGUIDE.md");
                        echo $parsedown->text($reference_contents);

                    ?>
                </div>
            </div>
        </div>

        <?php include 'include/footer.php'; ?>
    </body>

</html>
