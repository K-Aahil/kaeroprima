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
		// "subMenuFocus" : "%1$s. Menu of subelement %2$d of %3$s."
	};
	var arraydata = [];
	var add_item = '{{ route("add-our-group") }}';
	var update_item = '{{ route("update-our-group")}}';
	var generate_sort_item = '{{ route("generate-our-group") }}';
	var deleteitemmenur = '{{ route("delete-our-group") }}';
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

	// $("#nav-menu-meta").on('submit', function (event) {
	// 	event.preventDefault();
	// 	addShortList();
	// })


    $("#nav-menu-meta").validate({
        rules: {
            title: {
                required: true,
            },
            image_url: {
                required: true,
            },
        },
        messages: {
            title: {
                required: "Name Required"
            },
            image_url: {
                required: "Image Required"
            },

        },
        ignore: "",
        submitHandler: function () {
            addShortList();
        }
    });


    $('.form-edit').submit(function (e) {
        e.preventDefault();
        $('.error_message').remove();
        let item_id = $(this).data("id");
        let this_item = $('#menu-item-settings-' + item_id);
        let title = this_item.find('.edit-menu-item-title').val();

        if (title == '') {
            this_item.find('.edit-menu-item-title').after(`<div class="error_message">
                <br><span style="color: red; font-size: 0.7 rem;">Name Required</span><br>
            </div>`);
        }

        if (title == '') {
            return false;
        } else {
            updateitem(item_id)
        }

    });
</script>
