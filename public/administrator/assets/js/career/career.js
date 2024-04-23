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
            path: {
                validators: {
                    notEmpty: {
                        message: 'Level is required'
                    }
                }
            },
            title: {
                validators: {
                    notEmpty: {
                        message: 'Title is required'
                    },
                    remote: {
                        message: 'Title is already exist',
                        method: 'GET',
                        url: '/admin/career/isExist',
                        data: function () {
                            return {
                                id: $("input[name=id]").val(),
                                title: $("input[name=title]").val(),
                            };
                        },
                    }
                }
            },
            location: {
                validators: {
                    notEmpty: {
                        message: 'Location is required'
                    }
                }
            },
            // description: {
            //     validators: {
            //         notEmpty: {
            //             message: 'Description is required'
            //         }
            //     }
            // },
            // name_an: {
            //     validators: {
            //         callback: {
            //             message: 'Category name is required',
            //             callback: function (input) {
            //                 const selectedCheckbox = form.querySelector('[name="same_as_default"]:checked');
            //                 const same_as_default = selectedCheckbox ? selectedCheckbox.value : '';

            //                 return (same_as_default !== '')
            //                     // The field is valid if user picks
            //                     // a given framework from the list
            //                     ? true
            //                     // Otherwise, the field value is required
            //                     : (input.value !== '');
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
const submitButton = document.getElementById('career_submit');
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

