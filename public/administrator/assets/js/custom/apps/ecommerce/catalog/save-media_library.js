const form_edit = document.getElementById('form');

var validator_edit = FormValidation.formValidation(
    form_edit,
    {
        fields: {
            'judul': {
                validators: {
                    notEmpty: {
                        message: 'Judul is required'
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
const editButton = document.getElementById('media_library_submit');
editButton.addEventListener('click', function (e) {
   
    e.preventDefault();

    if (validator_edit) {
        validator_edit.validate().then(function (status) {
            console.log('validated!');

            if (status == 'Valid') {
                editButton.setAttribute('data-kt-indicator', 'on');

                editButton.disabled = true;

                setTimeout(function () {
                    editButton.removeAttribute('data-kt-indicator');

                    editButton.disabled = false;

                    form.submit();
                }, 2000);
            }
        });
    }
});