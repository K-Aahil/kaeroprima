// Define form element
const form = document.getElementById('form_add');

// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
var validator = FormValidation.formValidation(
    form,
    {
        fields: {
            site_name: {
                validators: {
                    notEmpty: {
                        message: 'Site Name is required'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'E-Mail is required'
                    }
                }
            },
            address: {
                validators: {
                    callback: {
                        message: 'Address is required',
                        callback: function(input) {
                            const value = CKEDITOR.instances.address.getData();

                            return (value !== '')
                                    // The field is valid if user picks
                                    // a given framework from the list
                                    ? true
                                    // Otherwise, the field value is required
                                    : false;
                        }
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'Phone is required'
                    }
                }
            },
            whatsapp: {
                validators: {
                    notEmpty: {
                        message: 'Whatsapp is required'
                    }
                }
            },
            // office_hours: {
            //     validators: {
            //         callback: {
            //             message: 'Office Hours is required',
            //             callback: function(input) {
            //                 const value = CKEDITOR.instances.office_hours.getData();

            //                 return (value !== '')
            //                         // The field is valid if user picks
            //                         // a given framework from the list
            //                         ? true
            //                         // Otherwise, the field value is required
            //                         : false;
            //             }
            //         }
            //     }
            // },
        },
        plugins: {
            trigger: new FormValidation.plugins.Trigger(),
            bootstrap: new FormValidation.plugins.Bootstrap5({
                rowSelector: '.fv-row',
                eleInvalidClass: '',
                eleValidClass: ''
            })
        }
    }
);

// Submit button handler
const submitButton = document.getElementById('kt_ecommerce_add_category_submit');
submitButton.addEventListener('click', function (e) {
    // Prevent default button action
    e.preventDefault();

    // Validate form before submit
    if (validator) {
        validator.validate().then(function (status) {
            console.log('validated!');

            if (status == 'Valid') {
                // Show loading indication
                submitButton.setAttribute('data-kt-indicator', 'on');

                // Disable button to avoid multiple click
                submitButton.disabled = true;

                // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                setTimeout(function () {
                    // Remove loading indication
                    submitButton.removeAttribute('data-kt-indicator');

                    // Enable button
                    submitButton.disabled = false;

                    form.submit(); // Submit form
                }, 2000);
            }
        });
    }
});

