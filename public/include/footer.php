<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.5/highlight.min.js"></script>
<script src="ark.min.js"></script>
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