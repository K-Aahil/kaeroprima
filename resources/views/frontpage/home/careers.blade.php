@extends('frontpage.layouts.main')

@section('content')
    <style>
        #uploadCv {
            opacity: 0;
            position: absolute;
            z-index: -1;
        }
    </style>

    <div style="background-image: url({{ asset_administrator('assets/media/menus/' . $management->image) }})" alt=""
        class="w-full h-[15em] lg:h-[21em] bg-cover lg:px-[8.4em] px-8 py-5 lg:py-[7em]">
        <p class="text-[#AD976E] text-[3em] lg:text-[4.375em] font-bold font-avenir">Careers</p>
    </div>
    <section class="lg:px-[8.4em] px-8">
        <div class="items-center md:grid md:grid-cols-2 py-0 pt-5 lg:pt-0 pb-4 lg:pb-0 lg:py-[7em] gap-16">
            <h2 class="text-[3em] lg:text-[4.375em] font-bold text-[#AD976E] font-avenir">
                Submit Your Resume
            </h2>
            <div class="mt-4 md:mt-0">
                <p class="mb-6 font-normal text-[0.875em] lg:text-[1.125em] text-black font-avenir">
                    {!! nl2br($management->description) !!}
                </p>
            </div>
        </div>
        <form class="md:grid md:grid-cols-2 gap-16" id="form_applicant" method="post" enctype="multipart/form-data"
            action="{{ route('career_save') }}">
            {{ csrf_field() }}
            <div class="lg:pr-[2.5em]">
                <div class="relative z-0 w-full mb-5 group ">
                    <input type="text" name="firstName" id="firstName"
                        style="border: none; border-bottom: 2px solid #7D7D7D"
                        class="block py-2.5 px-0 w-full text-xs lg:text-sm text-gray-900 bg-transparent border-[#7D7D7D] appearance-none focus:outline-none focus:ring-0 focus:border-[#7D7D7D] peer"
                        placeholder=" " required />
                    <label for="firstName"
                        class="peer-focus:font-medium opacity-50 absolute text-xs lg:text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                        id="label">First
                        Name *</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="lastName" id="lastName"
                        style="border: none; border-bottom: 2px solid #7D7D7D"
                        class="block py-2.5 px-0 w-full text-xs lg:text-sm text-gray-900 bg-transparent border-[#7D7D7D] appearance-none focus:outline-none focus:ring-0 focus:border-[#7D7D7D] peer"
                        placeholder=" " />
                    <label for="lastName"
                        class="peer-focus:font-medium absolute opacity-50  text-xs lg:text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                        id="label">Last
                        Name</label>
                </div>

            </div>
            <div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="email" id="email"
                        style="border: none; border-bottom: 2px solid #7D7D7D"
                        class="block py-2.5 px-0 w-full text-xs lg:text-sm text-gray-900 bg-transparent border-[#7D7D7D] appearance-none focus:outline-none focus:ring-0 focus:border-[#7D7D7D] peer"
                        placeholder=" " required />
                    <label for="email"
                        class="peer-focus:font-medium absolute opacity-50  text-xs lg:text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                        id="label">E-Mail *</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="phone" id="phone"g
                        style="border: none; border-bottom: 2px solid #7D7D7D"
                        class="block py-2.5 px-0 w-full text-xs lg:text-sm text-gray-900 bg-transparent border-[#7D7D7D] appearance-none focus:outline-none focus:ring-0 focus:border-[#7D7D7D] peer"
                        placeholder=" " required />
                    <label for="phone"
                        class="peer-focus:font-medium absolute opacity-50  text-xs lg:text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                        id="label">Phone
                        number *</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" id="position" value="{{ $job->name }}" readonly
                        style="border: none; border-bottom: 2px solid #7D7D7D"
                        class="block py-2.5 px-0 w-full text-xs lg:text-sm text-gray-900 bg-transparent border-[#7D7D7D] appearance-none focus:outline-none focus:ring-0 focus:border-[#7D7D7D] peer"
                        placeholder=" " required />
                    <input type="hidden" name="position_id" value="{{ $job->id }}">
                    <label for="position"
                        class="peer-focus:font-medium absolute opacity-50  text-xs lg:text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
                        id="label">Position</label>
                </div>
                <div class="grid grid-cols-3 lg:grid-cols-5 gap-10 lg:gap-5 lg:mt-[4em] mb-[3em] h-fit">
                    <label for="uploadCv"
                        class="text-[#AD976E] hover:cursor-pointer hover:text-white border border-[#AD976E] hover:bg-[#AD976E] focus:ring-4 focus:outline-none focus:ring-white font-bold  font-avenir lg:rounded-lg rounded-md text-xs lg:text-sm px-[1.5em] lg:py-[0.5em] py-2 flex justify-center items-center text-center mb-2 h-full">
                        Your CV
                    </label>
                    <input name="file" type="file" id="uploadCv" />
                    <button type="button" id="submit_applicant"
                        class="text-white bg-[#AD976E] hover:bg-white hover:border hover:border-[#AD976E] hover:text-[#AD976E] font-bold inline-block h-full font-avenir lg:rounded-lg rounded-md text-xs lg:text-sm px-[1.5em] lg:py-[0.5em] py-2 mb-2 ">
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset_frontpage('assets/js/validation/validation.js') }}"></script>
    <script>
        $(document).ready(() => {
            $('#submit_applicant').on('click', event => {
                event.preventDefault();

                if ($('#form_applicant').valid()) {
                    Swal.fire('Success', 'Data Berhasil Disimpan', 'success');
                    setTimeout(function() {
                        $('#form_applicant').submit();
                    });
                }
            });

            $('#submit_applicant').on('click', function(event) {
                event.preventDefault();

                var fileName = $('#uploadCv').val();
                if (fileName == "") {
                    Swal.fire('Error', 'Please upload your CV.', 'error');
                    return false;
                } else {
                    Swal.fire('Success', 'File uploaded successfully.', 'success');
                    return true;
                }
            });

            $("#form_applicant").validate({
                rules: {
                    firstName: {
                        required: true,
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    phone: {
                        required: true,
                    },
                    file: {
                        required: true,
                    },
                },
                messages: {
                    firstName: {
                        required: "Name Required",
                    },
                    email: {
                        required: "Email Required",
                        email: "Format Email Must: example@domain.com"
                    },
                    phone: {
                        required: "Phone Required",
                    },
                    file: {
                        required: ""
                    },
                },
                errorPlacement: function(error, element) {
                    if (element.attr("name") === "file") {
                        return; // Don't insert error for file input
                    }
                    var label = $("label[for='" + element.attr("id") + "']");
                    if (label.length) {
                        error.insertAfter(label);
                    } else {
                        error.insertAfter(element);
                    }
                },
            });
        });
    </script>
@endpush
