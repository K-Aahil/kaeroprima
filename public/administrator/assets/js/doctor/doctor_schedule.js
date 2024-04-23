// Define form element
const form = document.getElementById('form_add');

// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
var validator = FormValidation.formValidation(
    form,
    {
        fields: {
            service: {
                validators: {
                    notEmpty: {
                        message: 'Service is required'
                    },
                }
            },
            branch: {
                validators: {
                    notEmpty: {
                        message: 'Branch is required'
                    },
                }
            },
            doctor: {
                validators: {
                    notEmpty: {
                        message: 'Doctor is required'
                    },
                    remote: {
                        message: 'Doctors are already using Branches and Services !',
                        method: 'GET',
                        url: '/admin/doctor_schedules/isExist',
                        data: function () {
                            return {
                                id: $("#id").val(),
                                doctor: $("#doctor").val(),
                                service: $("#service").val(),
                                branch: $("#branch").val(),
                            };
                        },
                        // data: {
                        //     doctor: function () {
                        //         return $("#doctor").val();
                        //     },
                        //     service: function () {
                        //         return $("#service").val();
                        //     },
                        //     branch: function () {
                        //         return $("#branch").val();
                        //     },
                        // },
                    }
                }
            },
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
const submitButton = document.getElementById('doctor_schedule_submit');
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

