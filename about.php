<?php
include_once "header.php";
?>
<style>
    <?php include "css/about.css"; ?>
</style>
<main>
    <div class="wrapper about-wrapper">
        <div class="about-header">
            <h1>
                Do you want to accelerate your code learning experience?
            </h1>
            <h2>
                Sign up to CodeHelper and book a meeting with one of our tutors.
                We offer personal tutoring for several programming languages and technologies.
            </h2>
            <a href="signup.php" class="button" id="signup-link-button">Sign Up</a>
        </div>
        <div class="card">
            <div class="line"></div>
            <section>
                <h2>
                    Basic programming
                </h2>
                <p>
                    Learn the fundametals of programming in your preferred language, anything from C to Python
                </p>
            </section>
        </div>
        <div class="card">
            <div class="line"></div>
            <section>
                <h2>
                    Web development
                </h2>
                <p>
                    Learn HTML, CSS and Javascript.
                    We also offer tutoring frameworks like React, Vue and Angular.
                </p>
            </section>
        </div>
        <div class="card">
            <div class="line"></div>
            <section>
                <h2>
                    Object Oriented Programming
                </h2>
                <p>
                    We can help you to understand the concepts behind object oriented programming
                    and how to apply them. We have expertise in laguages like C++, Java and C#. 
                </p>
            </section>
        </div>
    </div>
</main>

<?php
include_once "footer.php";
?>
</div>
<!-- Scripts -->
<script src="js/notransitions.js"></script>
</body>

</html>