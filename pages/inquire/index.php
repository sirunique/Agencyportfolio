<!-- Header -->
<?php
include('./components/header.php');
include('./pages/inquire/inquire_css.php');
?>

<!-- Include Bootstrap CSS only for this page -->
<!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->

<!-- Include jQuery and Bootstrap JS only for this page -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

<!-- Page Content -->
<div class="section contact row contact--1">
    <img class='grid-img' src="images/IMG-20240906-WA0012.jpg" alt="images">

    <form class="element-align">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </form>
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

    <img class='grid-img section_2-img img5' src="images/IMG-20240906-WA0012.jpg" alt="images">
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