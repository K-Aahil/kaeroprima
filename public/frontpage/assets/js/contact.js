$(document).ready(function() {
    $("#contact-save").validate({
        rules: {
            name : {
                required: true,
                minlength: 3
            },
            email: {
                // required: true,
                email: true
            },
            phone: {
                required: true,
                number: true
            },
            alamat: {
                required: true,
                minlength: 10
            },
            kota: {
                required: true,
                
            },
        },
        messages : {
            name: {
                minlength: "Nama harus minimal 3 karakter",
                required: "Nama harus diisi"
            },
            alamat: {
                required: "Alamat harus diisi",
                minlength: "Alamat harus minimal 10 karakter"
            },
            email: {
                // required: "Email harus diisi",
                email: "Email harus dalam format: example@domain.com"
            },
            kota: {
                required: "Kota harus diisi",
                
            },
            phone: {
                required: "Nomor Telepon harus diisi",
                number: "Silakan masukkan nomor telepon anda"
            }
        },
        errorPlacement: function (error, element) {
            if (element.attr("name") == "kota") {
                error.insertAfter("#error-kota");
            } else {
                error.insertAfter(element);
            }
        }
    });
});
