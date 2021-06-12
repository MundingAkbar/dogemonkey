<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/dogemonkey.png">
    <link rel="stylesheet" href="style.css?v=2.1">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
    <script src="https://cdn.jsdelivr.net/npm/animejs@3.2.1/lib/anime.min.js" integrity="sha256-XL2inqUJaslATFnHdJOi9GfQ60on8Wx1C2H8DYiN1xY=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/faf20bb39b.js" crossorigin="anonymous"></script>
    <title>dogemonkey</title>
</head>
<body>
    <div class="container">
        <div id="heading">
            <h2 id="title"><a href="#">Official Website of DogeMonkey</a></h2>
            <div class="social_media">
                <a href=""><i class="fab fa-facebook"></i></a>
                <a href="https://www.twitter.com/DogeMonkeyD"><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/channel/UCb-9Q77xsCxmFaGrJElTmrw"><i class="fab fa-youtube"></i></a>
                <a href="https://www.reddit.com/r/DogeMonkey/"><i class="fab fa-reddit-alien"></i></a>
                <a href="t.me/DogeMonkeyOfficial"><i class="fab fa-telegram-plane"></i></a>
            </div>
        </div>
        <section id="content">
            <div id="description"  data-aos="fade-in">
                <h2 id="title"><span><img src="img/dog.svg"></span>DogeMonkey<span><img src="img/monkey.svg"></span></h2>
                <p>$DM is community-driven, open source, fair-launched<br>
                    cryptocurrency. With this cutest meme and charity token launched on June 10, 2021<br>
                    and built on Binance Smart Chain, DogeMonkey offers three(3) greate features:</p>
                    <div id="feature">
                        <h5 class="features">REFLECTION</h5>
                        <h5 class="features">LIQUIDITY ACQUISITION</h5>
                        <h5 class="features">LIQUIDITY BURNING</h5>
                    </div>
                 <div id="transactions">
                    <button id="btn_buy"><a href="https://exchange.pancakeswap.finance/#/swap?outputCurrency=0xc748673057861a797275cd8a068abb95a902e8de">BUY ON PANCAKE SWAP</a></button>
                    <div id="address">
                        <input type="text" value="0xBaccFC00B0B9eF74040075CAe95B2D26c50ac00B" id="copy_add">
                        <button id='btn_copy'>Copy Address</button>
                    </div>
                 </div> 
                 <div id="links">
                        <a href="#">CHARTS</a>
                        <a href="#">CHECK CONTRACT ON BSC SCAN</a>
                 </div>
            </div>
            <img id="logo" src="img/dogemonkey.png" alt="dogemonkey">
        </section>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 120, 
        });

        function myFunction() {
        /* Get the text field */
        var copyText = document.getElementById("copy_add");

        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */

        /* Copy the text inside the text field */
        document.execCommand("copy");

        /* Alert the copied text */
        alert("Copied the text: " + copyText.value);
        }

        var btn_copy = document.getElementById("btn_copy");
        btn_copy.addEventListener("click",myFunction)
    </script>
</body>
</html>