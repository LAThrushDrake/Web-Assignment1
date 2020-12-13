<!DOCTYPE html>

<html>
    <head>
        <title>Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" href="css/healthfirst.css" rel="stylesheet"/> 
    </head>
   <?php
    session_start();
    if (isset($_SESSION['name'])) {
        header("location:http://localhost/PhpAssignment2/home.php");
    }
    ?>
    <body class="body1">
        <div class="menu">
            <span class="mainspn">Health First  </span>
            <div class="dropdown">
                <button class="dropbtn">Gallery</button>
                <div class="dropdown_content">
                    <a href="Events.html">Events</a>
                    <a href="bbb.html">Best Body Builders</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Schedule</button>
                <div class="dropdown_content">
                    <a href="ds.html">Daily Schedule</a>
                    <a href="hd.html">Holidays</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">What We Do</button>
                <div class="dropdown_content">
                    <a href="areo.html">Aerobics</a>
                    <a href="bb.html">Body Building</a>
                    <a href="yg.html">Yoga</a>
                </div>
            </div>
            <a href="contactus.html"><button class="dropbtn">Contact Us</button></a>
            <a href="schedule.php"><input type="button" value="Check Weekly Schedule"/></a>
        </div>
        <br/>

        <div>

            <div class="descri">
                <br/>
                <p>You wake up in the morning. A little groggy, look up at the ceiling and all you can think about is what to eat for breakfast. You get up, walk past the mirror and instantly start to feel down about how you look. Thinking “Why cant i just change? Why is this so hard? Everyone else seems to find it so easy…”!</p>

                <p>You visit the toilet. Sit down and your stomach hits your thighs. You sigh and hold you head in your hands wondering when will this ever shift.</p>

                <p>You make your way to the kitchen. The cupboards are all full, yet everything seems so empty. Food choices are so confusing… “I’ll eat porridge, as all the olympians eat that and they all look great. However, its carbs! Someone on the internet said that carbs are bad first thing in the morning. I’ll eat an apple instead. But wait… someone at work said that the sugars in an apple are bad for you! I’ll just have a coffee – it’ll be fine. No sugar or milk though, as thats all bad for me…. isnt it?”.</p>

                <p>So you drink your coffee and for a moment you feel ok. The nice caffeine rush. The sun rise is breaking and its going to be a nice day. You turn to get washed and notice your shadow on the wall… wow, even my shadow is fat! Is this how people see me?</p>

                <span style="font-size: 18px"><b> we can change you into someone you dreamed of </b></span>
            </div>
            
            <div style="background-image: url(Resources/home.jpg);height: 550px;width: 300px;margin-left: 50px;"></div>

            
        </div>
    </body>
</html>