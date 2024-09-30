<!-- Header -->
<?php
include('./components/header.php');
include('./pages/inquire/inquire_css.php');
?>



<!-- Page Content -->
<div class="section contact row contact--1">
    <img class='grid-img' src="images/IMG-20240906-WA0012.jpg" alt="images">

    <div class="text element-align">
        <h1>Get in Touch</h1>
        <p>Ready to visualize your brand's highest self? We'd love to hear from you! Please fill out the form below and let's connect.</p>
        <span>For collaboration requests and additional questions,
            please contact me via email:</span>
        <a class="inquire" href="#">hello@polafijalkocreative.com</a>

        <form>
            <label for="name">Your full name*</label>
            <input type="text" id="name" name="name" placeholder="Your full name" required>

            <label for="email">E-mail*</label>
            <input type="email" id="email" name="email" placeholder="Your email" required>

            <label for="project">Tell us a bit about your project</label>
            <textarea id="project" name="project" placeholder="Describe your project"></textarea>

            <label for="services">What services are you interested in?</label>
            <input type="text" id="services" name="services" placeholder="Your services" required>

            <label for="budget">Budget (NGN/USD)*</label>
            <input type="number" id="email" name="email" placeholder="Your email" required>

            <label for="location">Where are you based?</label>
            <input type="text" id="location" name="location" placeholder="Your location">

            <label for="instagram">Instagram Handle / Website</label>
            <input type='url' id="instagram" name="instagram" placeholder="Your Instagram or Website">

            <label for="deadline">What is your deadline / ideal launch date for this project?</label>
            <input type="date" id="deadline" name="deadline" placeholder="Your deadline">

            <label for="hear-about">How did you hear about us?</label>
            <textarea id="hear-about" name="hear-about" placeholder="Let us know"></textarea>

            <button type="submit">SEND</button>
        </form>
    </div>
</div>

<section class="section contact row contact--2">
    <div class="element-align">
        <h1>SERVICES</h1>
        <p>Crafted with care, our services are tailored to cater to the requirements of both new and established businesses through a subscription plan. To guarantee each project gets the necessary focus, we only accept a limited number of clients per month. Our services are committed to capturing the essence of your business and establishing a connection with your target audience.</p>

        <ul style="display: flex; flex-direction: column; gap: 0.8rem;">
            <li>Branding</li>
            <li>Digital marketing</li>
            <li>Advert</li>
            <li>Project management</li>
            <li>Product design/ management</li>
        </ul>

        <a class="inquire" href="#">See the details.</a>
    </div>

    <img class='text-img' src="images/IMG-20240906-WA0012.jpg" alt="images">
</section>

<section class="section contact row contact--3">
    <img class='grid-img' src="images/IMG-20240906-WA0012.jpg" alt="images">
    <img class='grid-img' src="images/IMG-20240906-WA0012.jpg" alt="images">
    <img class='grid-img' src="images/IMG-20240906-WA0012.jpg" alt="images">
    <img class='grid-img' src="images/IMG-20240906-WA0012.jpg" alt="images">
    <img class='grid-img' src="images/IMG-20240906-WA0012.jpg" alt="images">
    <img class='grid-img' src="images/IMG-20240906-WA0012.jpg" alt="images">
</section>

<!-- Footer -->
<?php include('./components/footer.php'); ?>