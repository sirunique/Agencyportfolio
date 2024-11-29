<!-- Header -->
<?php
include('./components/header.php');
include('./pages/contact/contact_css.php');
?>




<div class="section contact row contact--1">
    <img class='grid-img lazy-img' src="images/Contact.jpg" data-src="images/Contact.jpg" alt="image">

    <div class="element-align">
        <h1>Get Started</h1>
        <p>
            Get ready to be inspired and imagine the full potential of your brand. We are thrilled to receive your message.
        </p>

        <span> Kindly fill out the form below, and let's get in touch:</span>
        <a class="inquire" href="#">contact@deenspo24@gmail.com</a>

        <form>
            <label for="name">Full name*</label>
            <input type="text" id="name" name="name" placeholder="Your full name" required>

            <label for="email">E-mail*</label>
            <input type="email" id="email" name="email" placeholder="Your email" required>

            <label for="project">Tell us a bit about your project</label>
            <textarea id="project" name="project" placeholder="Describe your project"></textarea>

            <label for="budget">Budget (NGN/USD)*</label>
            <input type="number" id="budget" name="budget" placeholder="Your budget" required>

            <label for="location">Location?</label>
            <input type="text" id="location" name="location" placeholder="Your location">

            <label for="instagram">Instagram Handle / Website</label>
            <input type='url' id="instagram" name="instagram" placeholder="Your Instagram or Website">

            <label for="deadline">What’s your deadline/idea launch date for the project:?</label>
            <input type="date" id="deadline" name="deadline" placeholder="Your deadline">

            <label for="hear-about">How did you hear about us?</label>
            <textarea id="hear-about" name="hear-about" placeholder="Let us know"></textarea>

            <button type="submit">SEND</button>
        </form>

        <span>
            We hold our previous clients in high regard and appreciate their ongoing trust.
            Refer us to your friends and receive a 10% discount.
        </span>
    </div>
</div>

<section class="section row contact--2">
    <div class="element-align">
        <h1>SERVICES</h1>
        <p>Crafted with care, our services are tailored to cater to the requirements of both new and established businesses through a subscription plan. To guarantee each project gets the necessary focus, we only accept a limited number of clients per month. Our services are committed to capturing the essence of your business and establishing a connection with your target audience.</p>

        <ul style="display: flex; flex-direction: column; gap: 0.8rem;">
            <li>Branding</li>
            <li>Digital marketing</li>
            <li>Advert</li>
            <li>Project management</li>
            <li>Product management</li>
        </ul>

        <a class="inquire" href="#">See the details.</a>
    </div>

    <img class='img2 lazy-img' src="images/ContactImage.jpg" data-src="images/ContactImage.jpg" alt="image">
</section>

<section class="section contact row contact--3">
    <img class='grid-img lazy-img' src="images/image2-lazy-loading.jpg" data-src="images/IMG-20240906-WA0012.jpg" alt="image">
    <!-- <img class='grid-img lazy-img' src="images/image2-lazy-loading.jpg" data-src="images/IMG-20240906-WA0012.jpg" alt="image">
    <img class='grid-img lazy-img' src="images/image2-lazy-loading.jpg" data-src="images/IMG-20240906-WA0012.jpg" alt="image">
    <img class='grid-img lazy-img' src="images/image2-lazy-loading.jpg" data-src="images/IMG-20240906-WA0012.jpg" alt="image">
    <img class='grid-img lazy-img' src="images/image2-lazy-loading.jpg" data-src="images/IMG-20240906-WA0012.jpg" alt="image">
    <img class='grid-img lazy-img' src="images/image2-lazy-loading.jpg" data-src="images/IMG-20240906-WA0012.jpg" alt="image"> -->
</section>

<!-- Footer -->
<?php include('./components/footer.php'); ?>