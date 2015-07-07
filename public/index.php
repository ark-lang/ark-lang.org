<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ark-lang.org</title>

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            
            ga('create', 'UA-64503427-1', 'auto');
            ga('send', 'pageview');
        </script>

        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.5/styles/default.min.css">
    </head>

    <body>

        <div class="container">
            <?php include 'include/header.php'; ?>

            <div class="row">
                <div class="col-hex">
                    <h2>Why?</h2>
                    <p>
                        Our goal is to write a systems programming language
                        that adopts many modern concepts and advancements in the field
                        of compilers and language design over the past <span id="c_age"></span>
                        years.
                    </p>
                    <p>
                        Languages such as C and C++ strive for backwards compatibility
                        when adopting new features, including compatibility for flaws
                        in the languages design. 
                    </p>
                    <p>
                        We want to create a modern language that lacks many of the flaws of C
                        and C++ while still being suitable for low-level programming. It also
                        needs to be simple and intuitive enough to be easy to learn, write, read
                        and debug.
                    </p>
                </div>

                <div class="col-hex">
                    <h2>Example</h2>
                    <p>
                        Here's a small program written in Ark.
                    </p>
                    <pre><code class="ark">[c] func printf(fmt: str, ...);

func main(): int {
    mut i := 0;

    for i &lt; 5 {
        C::printf("i: %d\n", i);
        i = i + 1;
    }

    return 0;
}</code></pre>
                </div>
            </div>
        </div>

        <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.5/highlight.min.js"></script>
        <script src="ark.min.js"></script>
        <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
        <script>

        /**
            moved this here since html comments get stripped out
            since are web host is too hardcore for that kinda shit

            Hi, thanks 4 checking out the src
            pls come contribute to ark, thx
    
            luv u 
            - feliks
        
            p.s check out these cool posters
            
            http://i.imgur.com/8BtYae4.png
            http://i.imgur.com/QFoRwMc.png
            http://i.imgur.com/V0TNEwI.png
            http://i.imgur.com/MkA2lia.png
        */

        // gotta have the space for a little hack for n for aeio jah feeel????
        var words = [ " fast", " simple", " modern", "n expressive" ];
        var words_index = 0;

        // gotta love those hot gimmicks yo

        // this is so we can set the default word without that
        // onload shit, also does a fancy transition
        function setWord(word) {
            $('#lang_desc').fadeOut(function() {
                $(this).text(word)
            }).fadeIn();
        }

        // set the default word to the first in the array of magical words
        setWord(words[0]);

        // will loop through each word every 10 seconds.
        function getWord() {
            if (words_index >= words.length - 1) words_index = 0;
            else words_index++; 

            console.log(words_index);

            var the_chosen_one = words[words_index];
            setWord(the_chosen_one);
        }
        setInterval(getWord, 10000);

        hljs.initHighlightingOnLoad();

        // so we can get the exact date since fuck it
        function _calculateAge(birthday) { // birthday is a date
            var ageDifMs = Date.now() - birthday.getTime();
            var ageDate = new Date(ageDifMs); // miliseconds from epoch
            return Math.abs(ageDate.getUTCFullYear() - 1970);
        }

        $('#c_age').text(_calculateAge(new Date(1972, 1, 1)));
        </script>
    </body>

</html>