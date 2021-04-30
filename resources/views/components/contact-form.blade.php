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
                <form class="rd-mailform rd-mailform_style-1 text-center" data-form-output="form-output-global"
                      data-form-type="contact" method="post" action="https://travelstogreenland.com/en"
                      novalidate="novalidate">
                    <input type="hidden" name="_token" value="djkicvAPmH4aibKC9B5pcH2ybn1aaCeKb4xZ7KaR">
                    <div class="form-wrap form-wrap_icon">
                        <span class="novi-icon form-icon linear-icon-man"></span>
                        <input class="form-input form-control-has-validation" id="contact-name" type="text"
                               name="name" data-constraints="@Required" heap-ignore="true"><span
                                class="form-validation"></span>
                        <label class="form-label rd-input-label" for="contact-name">
                            Your name
                        </label>
                    </div>
                    <div class="form-wrap form-wrap_icon">
                        <span class="novi-icon form-icon linear-icon-envelope"></span>
                        <input class="form-input form-control-has-validation" id="contact-email" type="email"
                               name="email" data-constraints="@Email  @Required" heap-ignore="true"><span
                                class="form-validation"></span>
                        <label class="form-label rd-input-label" for="contact-email">
                            Your e-mail
                        </label>
                    </div>
                    <div class="form-wrap form-wrap_icon">
                        <span class="novi-icon form-icon linear-icon-telephone"></span>
                        <input class="form-input form-control-has-validation" id="contact-phone" type="text"
                               name="phone" data-constraints="@Numeric" heap-ignore="true"><span
                                class="form-validation"></span>
                        <label class="form-label rd-input-label" for="contact-phone">
                            Your phone
                        </label>
                    </div>
                    <div class="form-wrap form-wrap_icon">
                        <span class="novi-icon form-icon linear-icon-feather"></span>
                        <textarea class="form-input form-control-has-validation" id="contact-message" name="message"
                                  data-constraints="@Required" heap-ignore="true"></textarea><span
                                class="form-validation"></span>
                        <label class="form-label rd-input-label" for="contact-message">
                            Your message
                        </label>
                    </div>
                    <script>
                        window.addEventListener('load', () => {
                            setTimeout(() => {
                                document.querySelectorAll('input[data-purpose="honey_javascript"]')
                                    .forEach(input => {
                                        if (input.value.length > 0) {
                                            return;
                                        }

                                        input.value = "eyJpdiI6IlpVSDVERjJzM0JISndjQnI4bU9JM0E9PSIsInZhbHVlIjoiR1VyM0M0UGgxb1daRHVTbTVKNEZldz09IiwibWFjIjoiOTA0NzRjNmJmNjc2MmZiZmExOTlkY2MyNGJiYjZiOGY5OWI5ODA4YzkwYzNkZjFhMTFhNzJmYWI4MGU1ZmQwMSJ9";
                                        input.dispatchEvent(new Event('change'));
                                    });
                            }, 3000)
                        });
                    </script>
                    <div style="display:  none ;">
                        <input wire:model.lazy.defer="honeyInputs.honey_present" name="honey_present" value="">
                        <input wire:model.lazy.defer="honeyInputs.honey_time" name="honey_time"
                               value="eyJpdiI6IlRXaCtMUmlZVGZ3bHNTOUJRT3dXTWc9PSIsInZhbHVlIjoidjVtYVdmNVROU01jNzFKNEg5R3VGQmhwZytvc1ZzU2MwWUN3T1QyUktIST0iLCJtYWMiOiIyMDE3NDhhYjVkZWMyZTYwOWQwZGJlYjAwOTBlNTc5MDA1OGQ4OTBmNTk4ZDJjMDFjMjM0YTI5ZjVhNTliOTUxIn0=">
                        <input wire:model.lazy.defer="honeyInputs.honey_javascript" data-purpose="honey_javascript"
                               name="honey_javascript" value="">

                    </div>

                    <button class="button button-primary" type="submit">
                        Send
                    </button>
                </form>
            </div>
        </div>

    </div>
</section>