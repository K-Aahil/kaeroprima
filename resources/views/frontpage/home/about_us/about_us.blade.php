<!-- bergabung -->
<div class="bergabung">
    <div class="container">
        <div class="connect">
            <div class="mt-5 col-sm-12 col-md-7 col-lg-7 mb-5 mt-5">
                <p data-aos="fade" class="judul_bergabung mt-5">Let’s Connect With Us</p>
                <p data-aos="fade"class="text_bergabung mt-4">We are collaborating our systems and machines
                    with stunning partner.</br>
                    Send your email and we will reach out to you soon.</p>
            </div>
            <div data-aos="fade" class="fm-mail mt-auto mb-5 ms-auto">
                <form class="sendemail form-input-contact" id="form-contact" action="{{ route('sendEmail') }}"
                    method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <input class="form-control-lg ffield" type="text" name="email" id="email"
                            placeholder="*Email">
                        <div class="error-text text-danger" style="display:none;"></div>
                    </div>
                    <button type="submit" id="submit_button"
                        class="btnsend btn-primary align-items-center">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#form-contact').on('submit', function(event) {
                event.preventDefault();

                var another = this;
                $(another).validate({
                    rules: {
                        email: {
                            required: true,
                            email: true
                        }
                    },
                    messages: {
                        email: {
                            required: 'Please enter your email address',
                            email: 'Please enter a valid email address'
                        }
                    },
                    errorPlacement: function(error, element) {
                        error.appendTo(element.next('.error-text'));
                    },
                    highlight: function(element, errorClass, validClass) {
                        $(element).addClass(errorClass).removeClass(validClass);
                        $(element).next('.error-text').show();
                    },
                    unhighlight: function(element, errorClass, validClass) {
                        $(element).removeClass(errorClass).addClass(validClass);
                        $(element).next('.error-text').hide();
                    },
                    submitHandler: function(form) {
                        $.ajax({
                            url: $(another).attr('action'),
                            type: $(another).attr('method'),
                            data: $(another).serialize(),
                            success: function(response) {
                                if (response.success) {
                                    Swal.fire({
                                        title: 'Success!',
                                        text: 'Form submitted successfully.',
                                        icon: 'success',
                                        confirmButtonColor: '#2c61b7',
                                        confirmButtonText: 'OK'
                                    });
                                    $("#email").val('');
                                } else {
                                    Swal.fire('Error!', 'An error occurred.',
                                        'error');
                                }
                            },
                            error: function() {
                                Swal.fire('Error!', 'An error occurred.', 'error');
                            }
                        });
                    }
                });
            });
        });
    </script>
@endpush
<!-- endbergabung -->
