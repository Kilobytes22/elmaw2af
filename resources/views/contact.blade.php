@include('layouts.new_app')
<div class="w3ls_address_mail_footer_grids">
    <div class="heading">
        <h2>locate us</h2>
    </div>
    <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3539.812628729253!2d153.014155!3d-27.4750921!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b915a0835840a2f%3A0xdd5e3f5c208dc0e1!2sMelbourne+St%2C+South+Brisbane+QLD+4101%2C+Australia!5e0!3m2!1sen!2sin!4v1492257477691"></iframe>
        <div class="col-md-6 contact-form">
            <h4 class="white-w3ls">Contact <span>Form</span></h4>
            <form action="#" method="post">
                <div class="styled-input agile-styled-input-top">
                    <input type="text" name="Name" required="">
                    <label>Name</label>
                    <span></span>
                </div>
                <div class="styled-input">
                    <input type="email" name="Email" required="">
                    <label>Email</label>
                    <span></span>
                </div>
                <div class="styled-input">
                    <input type="text" name="Subject" required="">
                    <label>Subject</label>
                    <span></span>
                </div>
                <div class="styled-input">
                    <textarea name="Message" required=""></textarea>
                    <label>Message</label>
                    <span></span>
                </div>
                <input type="submit" value="SEND">
            </form>
        </div>
        <div class="col-md-6 contactright">
            <h3>Contact Address</h3>
            <div class="w3ls_footer_grid_left">
                <div class="wthree_footer_grid_left">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                </div>
                <p>3481 Melrose Place, Beverly Hills, <span>New York City 90210.</span></p>
            </div>
            <div class="w3ls_footer_grid_left">
                <div class="wthree_footer_grid_left">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </div>
                <p>+(000) 123 4565 32 <span>+(010) 123 4565 35</span></p>
            </div>
            <div class="w3ls_footer_grid_left">
                <div class="wthree_footer_grid_left">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                </div>
                <p><a href="mailto:info@example.com">info@example1.com</a>
                    <span><a href="mailto:info@example.com">info@example2.com</a></span></p>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
@include('layouts.new_footer')
</body>