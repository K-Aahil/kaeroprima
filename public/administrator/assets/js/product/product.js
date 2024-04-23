// Define form element
const form = document.getElementById('form_add');

// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
var validator = FormValidation.formValidation(
    form,
    {
        fields: {
            category: {
                validators: {
                    notEmpty: {
                        message: 'Category is required'
                    }
                }
            },
            code: {
                validators: {
                    notEmpty: {
                        message: 'Code is required'
                    }
                }
            },
            name: {
                validators: {
                    notEmpty: {
                        message: 'Name is required'
                    }
                }
            },
            interest_rate: {
                validators: {
                    notEmpty: {
                        message: 'Interest Rate is required'
                    }
                }
            },
            description: {
                validators: {
                    callback: {
                        message: 'Description is required',
                        callback: function(input) {
                            const value = CKEDITOR.instances.description.getData();

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
            name_an: {
                validators: {
                    callback: {
                        message: 'Name (an) is required',
                        callback: function(input) {
                            const selectedCheckbox = form.querySelector('[name="same_as_default"]:checked');
                            const same_as_default = selectedCheckbox ? selectedCheckbox.value : '';

                            return (same_as_default !== '')
                                    // The field is valid if user picks
                                    // a given framework from the list
                                    ? true
                                    // Otherwise, the field value is required
                                    : (input.value !== '');
                        }
                    }
                }
            },
            description_an: {
                validators: {
                    callback: {
                        message: 'Description (an) is required',
                        callback: function(input) {
                            const selectedCheckbox = form.querySelector('[name="same_as_default"]:checked');
                            const same_as_default = selectedCheckbox ? selectedCheckbox.value : '';
                            const value = CKEDITOR.instances. description_an.getData();

                            return (same_as_default !== '')
                                    // The field is valid if user picks
                                    // a given framework from the list
                                    ? true
                                    // Otherwise, the field value is required
                                    : (value !== '');
                        }
                    }
                }
            },        
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
const submitButton = document.getElementById('product_submit');
submitButton.addEventListener('click', function (e) {
    // Prevent default button action
    e.preventDefault();

    // Validate form before submit
    if (validator) {
        validator.validate().then(function (status) {

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

