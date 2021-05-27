<section id="contact-us" class="section novi-bg novi-bg-img section-xl bg-default text-center">
    <div class="container">
        <h3>Contact Us</h3>
        <p>
            Are you ready to buckle up for your epic travel to Greenland?
        </p>
        <p>
            Let us know - fill in your details and we will contact you.
        </p>
        <div class="row justify-content-lg-center">
            <div class="col-lg-10 col-xl-8">
                <form class="rd-mailform rd-mailform_style-1 text-center"
                      data-form-output="form-output-global"
                      data-form-type="contact" method="post" action="{{ esc_url( admin_url('admin-ajax.php') ) }}"
                    >
                    {!! $nounce !!}
                    <input type="hidden" name="action" value="{{ $methodName }}">
                    <div class="form-wrap form-wrap_icon">
                        <span class="lnr lnr-user form-icon"></span>
                        <input class="form-input form-control-has-validation" id="contact-name" type="text"
                               name="name" data-constraints="@Required" heap-ignore="true"><span
                                class="form-validation"></span>
                        <label class="form-label rd-input-label" for="contact-name">
                            Your name
                        </label>
                    </div>
                    <div class="form-wrap form-wrap_icon">
                        <span class="lnr lnr-envelope form-icon"></span>
                        <input class="form-input form-control-has-validation" id="contact-email" type="email"
                               name="email" data-constraints="@Email  @Required" heap-ignore="true"><span
                                class="form-validation"></span>
                        <label class="form-label rd-input-label" for="contact-email">
                            Your e-mail
                        </label>
                    </div>
                    <div class="form-wrap form-wrap_icon">
                        <span class="lnr form-icon lnr-phone-handset"></span>
                        <input class="form-input form-control-has-validation" id="contact-phone" type="text"
                               name="phone" data-constraints="@Numeric" heap-ignore="true"><span
                                class="form-validation"></span>
                        <label class="form-label rd-input-label" for="contact-phone">
                            Your phone
                        </label>
                    </div>
                    <div class="form-wrap form-wrap_icon">
                        <span class="lnr form-icon lnr-pencil"></span>
                        <textarea class="form-input form-control-has-validation" id="contact-message" name="message"
                                  data-constraints="@Required" heap-ignore="true"></textarea><span
                                class="form-validation"></span>
                        <label class="form-label rd-input-label" for="contact-message">
                            Your message
                        </label>
                    </div>
                    <button class="button button-primary" type="submit">
                        Send
                    </button>
                </form>
            </div>
        </div>

    </div>
</section>