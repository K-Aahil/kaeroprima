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
	var add_item = '{{ route("add-menu-item") }}';
	var update_item = '{{ route("update-menu-item")}}';
	var generate_sort_item = '{{ route("generate-menu-item") }}';
	var deleteitemmenur = '{{ route("delete-menu-item") }}';
	var csrftoken="{{ csrf_token() }}";
	var menuwr = "{{ url()->current() }}";

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': csrftoken
		}
	});

</script>
<script type="text/javascript" src="{{asset('js/menu_management/scripts.js')}}"></script>
<script type="text/javascript" src="{{asset('js/menu_management/scripts2.js')}}"></script>
<script type="text/javascript" src="{{asset('js/menu_management/shorting.js')}}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script>

    $(function() {
        $(document).on("change",".uploadFile", function() {
            var uploadFile = $(this);
            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader) return;

            if (/^image/.test( files[0].type)){
                var reader = new FileReader();
                reader.readAsDataURL(files[0]);

                reader.onloadend = function(){
                    uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url("+this.result+")");
                }
            }

        });
    });

    $("#nav-menu-meta").validate({
        rules: {
            label: {
                required: true,
            },
            link: {
                required: true,
            },
        },
        messages: {
            label: {
                required: "Label Required"
            },
            link: {
                required: "URL Required"
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

        let label = this_item.find('.edit-menu-item-label').val();
        let link = this_item.find('.edit-menu-item-link').val();

        if (label == '') {
            this_item.find('.edit-menu-item-label').after(`<div class="error_message">
                <br><span style="color: red; font-size: 0.7 rem;">Label Required</span><br>
            </div>`);
        }

        if (link == '') {
            this_item.find('.edit-menu-item-link').after(`<div class="error_message">
                <br><span style="color: red; font-size: 0.7 rem;">URL Required</span><br>
            </div>`);
        }

        if (label == '' || link == '') {
            return false;
        } else {
            updateitem(item_id)
        }

    });
</script>
