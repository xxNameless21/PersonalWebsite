@extends('main')

@section('content')
<link rel="stylesheet" href="{{ asset('asset/css/contact.css') }}">

<div class="contact-container">
    <!-- Contact Form -->
    <div class="contact-form">
        <h2>Contact Me</h2>
       <!-- Contact Form (Left Side) -->
       <form action="https://api.web3forms.com/submit" method="POST" class="contact-form">
                <h2>Contact Me</h2>
                <input type="hidden" name="access_key" value="48a987e5-0d24-4b06-8e77-7639b1e9432a">
                
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Your message" required></textarea>
                
                <button type="submit">Send Message</button>
            </form>
    </div>

    <!-- Contact Information -->
    <div class="contact-info">
        <h2>Contact Information</h2>
        <ul>
            <li><strong>Email:</strong> rayyafawuziyyah14@gmail.com</li>
            <li><strong>Phone:</strong> +6285694513390 </li>
            <li><strong>Instagram:</strong> <a href="https://www.instagram.com/oalahrayya" target="_blank">oalahrayya</a></li>
            <li><strong>WhatsApp:</strong> <a href="https://wa.me/+6285694513390" target="_blank">+6285694513390</a></li>
            <li><strong>Twitter:</strong> <a href="https://twitter.com/rayyanyambatdlu" target="_blank">rayyanyambatdlu</a></li>
            <li><strong>Threads:</strong> <a href="https://www.threads.net/oalahrayya" target="_blank">oalahrayya</a></li>
        </ul>
    </div>
</div>

@endsection
