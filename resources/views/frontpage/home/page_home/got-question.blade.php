<div class="lg:flex justify-between lg:px-[8.4em] lg:py-[3.375em] w-full px-10 py-5 bg-white">
    <div class="text-kaero-gold mb-3 lg:text-[4.375em] text-[2em] font-bold">Got Questions?</div>
    <div>
        <form class="flex flex-col gap-3 max-w-sm mx-auto lg:w-[30em] lg:gap-[1.313em]" id="contact-save"
            action="{{ route('got_save') }}" method="post">
            @csrf
            @method('POST')
            <textarea name="description" id="description" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border-1 border-[#7D7D7D] focus:ring-0 focus:border-[#7D7D7D] resize-none"
                placeholder="Write your questions..."></textarea>
            <input name="email" type="email" id="email"
                class="bg-white border-1 border-[#7D7D7D] text-[#7D7D7D] text-sm rounded-lg focus:ring-0 focus:border-[#7D7D7D] block w-full"
                placeholder="youremail@mail.com">
            <button type="submit" id="submit_got"
                class="text-white bg-kaero-gold py-2 lg:py-[0.438em] font-medium rounded-lg text-sm lg:w-[6.25em] text-center">SUBMIT</button>
        </form>
    </div>
</div>

@push('scripts')
    <script src="{{ asset_frontpage('assets/js/validation/validation.js') }}"></script>
    <script>
        $(document).ready(() => {
            $('#submit_got').on('click', event => {
                event.preventDefault();

                if ($('#contact-save').valid()) {
                    Swal.fire('Sukses', 'Data Berhasil Disimpan', 'success');
                    setTimeout(function() {
                        $('#contact-save').submit();
                    });
                }
            });

            $("#contact-save").validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    description: {
                        required: true,
                    },
                },
                messages: {
                    email: {
                        required: "Email Required",
                        email: "Format Email Must: example@domain.com"
                    },
                    description: {
                        required: "Message Required",
                    },
                },
            });
        });
    </script>
@endpush
