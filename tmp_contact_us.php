<?php // Template Name: Contact US        
?>
<?php get_header();

?>
<section class="contact_us_sec">
    <div class="container">
        <div class="row">
            <!-- start contact form -->
            <div class="col-lg-12">

                <div class="contact-form-box margin-30px-top">
                    <form method="post" id="contact-form" action="<?php echo admin_url('admin-post.php?action=contact_infrastructure_form') ?>" class="mailform off2 rd-mailform">
                        <input type="hidden" name="form_type" value="infrastructure">
                        <div class="row">
                            <div class="col-md-12 mfInput">
                                </span><span class="mfPlaceHolder">Your Name:</span>
                                <input type="text" name="your_name" />
                            </div>
                            <div class="col-md-6 mfInput">
                                <span class="mfPlaceHolder">Telephone:</span>
                                <input type="text" name="your_phone" />
                                </span>
                            </div>
                            <div class="col-md-6 mfInput">
                                <span class="mfPlaceHolder">Email:</span>
                                <input type="text" name="your_email" />

                            </div>
                            <div class="col-md-12 mfInput">
                                <span class="mfPlaceHolder">Message:</span>
                                <textarea name="your_message" rows="5"></textarea>

                            </div>
                            <div class="mfControls col-md-12">
                                <button type="submit" class="butn theme mfProgress" name="submit">
                                    <span class="cnt">Sumbit </span>
                                    <span class="msg"></span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end contact form  -->
        </div>
    </div>
</section>

<?php get_footer(); ?>