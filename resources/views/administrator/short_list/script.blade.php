<script>
    function noReload(e) {
        e.preventDefault();
    }
</script>
<script>
	var menus = {
		"oneThemeLocationNoMenus" : "",
		"moveUp" : "Move up",
		"moveDown" : "Mover down",
		"moveToTop" : "Move top",
		"moveUnder" : "Move under of %s",
		"moveOutFrom" : "Out from under  %s",
		"under" : "Under %s",
		"outFrom" : "Out from %s",
		"menuFocus" : "%1$s. Element menu %2$d of %3$d.",
		"subMenuFocus" : "%1$s. Menu of subelement %2$d of %3$s."
	};
	var arraydata = [];
	var add_item = '{{ route("add-short-item") }}';
	var update_item = '{{ route("update-short-item")}}';
	var generate_sort_item = '{{ route("generate-short-item") }}';
	var deleteitemmenur = '{{ route("delete-short-item") }}';
	var csrftoken="{{ csrf_token() }}";
	var menuwr = "{{ url()->current() }}";

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': csrftoken
		}
	});

</script>
<script type="text/javascript" src="{{asset('js/short_list/scripts.js')}}"></script>
<script type="text/javascript" src="{{asset('js/short_list/scripts2.js')}}"></script>
<script type="text/javascript" src="{{asset('js/short_list/shorting.js')}}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script>
    $(function() {
        $(document).on("change",".uploadFile", function() {
            var uploadFile = $(this);
            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

            if (/^image/.test( files[0].type)){ // only image file
                var reader = new FileReader(); // instance of the FileReader
                reader.readAsDataURL(files[0]); // read the local file

                reader.onloadend = function(){ // set image data as background of div
                    //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
                    uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url("+this.result+")");
                }
            }

        });
    });

    $(document).ready(function() {
        $("#nav-menu-meta").validate({
            rules: {
                title: {
                    required: true,
                },
                sub_title: {
                    required: true,
                    // remote: {
                    //     url: "{{ route('admin.short-list-item.isExistKode') }}",
                    //     type: "post",
                    //     data: {
                    //         _token: function() {
                    //             return $('meta[name="csrf-token"]').attr('content');
                    //         },
                    //         sub_title: function() {
                    //             return $("#custom-menu-item-sub_title").val();
                    //         }
                    //     }
                    // }
                },
                // description: {
                //     required: true,
                // },
            },
            messages: {
                title: {
                    required: "Title Required"
                },
                sub_title: {
                    required: "Code Required",
                    // remote: "Code has been used"
                },
                // description: {
                //     required: "Description Required"
                // },
            },
            ignore: "",
            submitHandler: function () {
                addShortList();
            }
        });
    });
    

    $('.form-edit').submit(function (e) {
        e.preventDefault();
        $('.error_message').remove();
        let item_id = $(this).data("id");
        let this_item = $('#menu-item-settings-' + item_id);

        let title = this_item.find('.edit-menu-item-title').val();
        let sub_title = this_item.find('.edit-menu-item-sub_title').val();
        let description = this_item.find('.edit-menu-item-description').val();

        if (title == '') {
            this_item.find('.edit-menu-item-title').after(`<div class="error_message">
                <br><span style="color: red; font-size: 0.7 rem;">Title Required</span><br>
            </div>`);
        }

        if (sub_title == '') {
            this_item.find('.edit-menu-item-sub_title').after(`<div class="error_message">
                <br><span style="color: red; font-size: 0.7 rem;">Code Required</span><br>
            </div>`);
        }

        if (description == '') {
            this_item.find('.edit-menu-item-description').after(`<div class="error_message">
                <br><span style="color: red; font-size: 0.7 rem;">Description Required</span><br>
            </div>`);
        }

        if (title == '' || sub_title == '') {
        return false;
    } else {
        // $.ajax({
        //     url: "{{ route('admin.short-list-item.isExistKode') }}",
        //     type: "post",
        //     data: {
        //         _token: $('meta[name="csrf-token"]').attr('content'),
        //         sub_title: sub_title
        //     },
        //     success: function(response) {
        //         if (response === "true") {
        //             this_item.find('.edit-menu-item-sub_title').after(`<div class="error_message">
        //                 <br><span style="color: red; font-size: 0.7 rem;">Code has been used</span><br>
        //             </div>`);
        //         } else {
        //             updateitem(item_id);
        //         }
        //     },
        //     error: function(xhr, status, error) {
        //         console.error(xhr.responseText);
        //     }
        // });
        updateitem(item_id);
    }
});
</script>
