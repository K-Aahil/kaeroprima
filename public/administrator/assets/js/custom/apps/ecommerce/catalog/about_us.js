const form = document.getElementById('form');

var validator = FormValidation.formValidation(
    form,
    {
        fields: {
            'description': {
                validators: {
                    callback: {
                        message: 'Description 1 is required',
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
            'side_description': {
                validators: {
                    callback: {
                        message: 'Description 2 is required',
                        callback: function(input) {
                            const value = CKEDITOR.instances.side_description.getData();

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
            'goal_description': {
                validators: {
                    callback: {
                        message: 'Our goal description is required',
                        callback: function(input) {
                            const value = CKEDITOR.instances.goal_description.getData();

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
const submitButton = document.getElementById('about_us_submit');
submitButton.addEventListener('click', function (e) {
    e.preventDefault();

    if (validator) {
        validator.validate().then(function (status) {
            console.log('validated!');
            console.log(status);

            if (status == 'Valid') {
                submitButton.setAttribute('data-kt-indicator', 'on');

                submitButton.disabled = true;

                setTimeout(function () {
                    submitButton.removeAttribute('data-kt-indicator');

                    submitButton.disabled = false;

                    form.submit();
                }, 2000);
            }
        });
    }
});