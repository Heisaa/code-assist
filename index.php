<?php
include_once "header.php";
?>
<div class="hero-bg">
    <div class="wrapper hero-wrapper">
        <section class="hero-text">
            <h2>Learn how to code with a personal tutor</h2>
            <p>
                Book a lesson with one of our tutor who specialize in the subject you need help in.
                Get a fuller understanding and learn to code faster than you thought was possible.
            </p>
        </section>
    </div>
    <div id="log-reg-button-container" class="wrapper">
        <a href="login.php" class="button" id="login-link-button">Log In</a>
        <a href="signup.php" class="button" id="signup-link-button">Sign Up</a>
    </div>
    <div id="html-code"></div>
</div>

<main>
    <div class="wrapper main-wrapper main-landing-structure">
        <section class="main-text" id="main-text-1">
            <h2>Learning to code is hard</h2>
            <p>
                Finding it difficult to learn how to code is normal. Everyone who tries it out deals with hard problems and 
                a feeling of not knowing what you are doing. Our lesson can give you guidance to mitigate these problems.
            </p>
        </section>
        <img src="assets/cpu.png" alt="" class="img-responsive" id="img-cpu">
        <img src="assets/world_wide_web.png" alt="" class="img-responsive" id="img-www">
        <section class="main-text" id="main-text-2">
            <h2>Get help and coaching suited for your needs</h2>
            <p>
                We offer lessons about different areas of programming. We do this to be able to give valuble help to as many
                studens as possible. When you book a lesson choose your subject and we will tailor the tutoring session after 
                your personal needs.
            </p>
        </section>
        <section class="main-text" id="main-text-3">
            <h2>Learn tricks and tips used by experienced programmers</h2>
            <p>
                Our tutor have many years of experience and knows the in and outs of each of the subjects. You will not only learn
                how to code, but also learn how to do it in the best way bossible. Best practice, programming patterns and reusability.
            </p>
        </section>
        <img src="assets/computer_display.png" alt="" class="img-responsive" id="img-comdip">
    </div>
</main>

<?php
include_once "footer.php";
?>
</div>

<!-- Scripts -->
<script src="js/showHTML.js"></script>
<script src="js/notransitions.js"></script>
</body>

</html>