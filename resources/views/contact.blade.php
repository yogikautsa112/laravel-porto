@extends('master')
@section('contact')
<div id="contact">
    <div class="container">
        <div class="row">
            <div class="contact-left">
                <h1 class="sub-title">Contact Me</h1>
                <p><i class="fa-solid fa-paper-plane"></i>yogikautsa@gmail.com</p>
                <p><i class="fa-solid fa-phone"></i>+6281319614673</p>
                <div class="social-icon">
                    <a href="https://www.instagram.com/alndta_/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://wa.me/+6281319614673" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="https://www.linkedin.com/in/yogi-kautsa-81118b290/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>
            <div class="contact-right">
                <form action="https://formspree.io/f/xvojndel" method="post" id="form-id">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <textarea name="Message" rows="6" placeholder="Your Message"></textarea>
                    <button type="submit" class="btn btn2">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection