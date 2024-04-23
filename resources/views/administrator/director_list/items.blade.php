<?php $currentUrl = url()->current(); ?>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href="{{asset('vendor/harimayco-menu/style.css')}}" rel="stylesheet">
<div id="hwpwrap">
	<div class="custom-wp-admin wp-admin wp-core-ui js menu-max-depth-0 nav-menus-php auto-fold admin-bar">
		<div id="wpwrap">
			<div id="wpcontent">
				<div id="wpbody">
					<div id="wpbody-content">
						<div class="wrap">
							<div id="nav-menus-frame">
								@if(request()->has('director_list_id') && !empty(request()->input("director_list_id")))
								<div id="menu-settings-column" class="metabox-holder">
									<div class="clear"></div>
									<form id="nav-menu-meta" action="" class="nav-menu-meta" method="post" enctype="multipart/form-data">
										<div id="side-sortables" class="accordion-container">
											<ul class="outer-border">
												<li class="control-section accordion-section  open add-page" id="add-page">
													<h3 class="accordion-section-title hndle" tabindex="0"> Add Item {{ $data->name }} <span class="screen-reader-text">Press return or enter to expand</span></h3>
													<div class="accordion-section-content ">
														<div class="inside">
															<div class="customlinkdiv" id="customlinkdiv">
																<p id="menu-item-title-wrap">
																	<label class="howto" for="custom-menu-item-title"> <span>Title <small style="color: red">*</small></span>&nbsp;&nbsp;&nbsp;
																		<input id="custom-menu-item-title" name="title" type="text" class="menu-item-textbox">
                                                                        <input type="hidden" name="director_list_id" id="director_list_id" value="{{ isset($id) ? $id : '' }}">
																	</label>
																</p>
                                                                {{-- <p id="menu-item-title_an-wrap">
																	<label class="howto" for="custom-menu-item-title_an"> <span>Title An</span>&nbsp;&nbsp;&nbsp;
																		<input id="custom-menu-item-title_an" name="title_an" type="text" class="menu-item-textbox">
																	</label>
																</p> --}}
                                                                <p id="menu-item-sub_title-wrap">
																	<label class="howto" for="custom-menu-item-sub_title"> <span>Name <small style="color: red">*</small></span>&nbsp;&nbsp;&nbsp;
																		<input id="custom-menu-item-sub_title" name="sub_title" type="text" class="menu-item-textbox">
																	</label>
																</p>
                                                                {{-- <p id="menu-item-sub_title_an-wrap">
																	<label class="howto" for="custom-menu-item-sub_title_an"> <span>Name An</span>&nbsp;&nbsp;&nbsp;
																		<input id="custom-menu-item-sub_title_an" name="sub_title_an" type="text" class="menu-item-textbox">
																	</label>
																</p> --}}
                                                                <p id="menu-item-description-wrap">
																	<label class="howto" for="custom-menu-item-description"> <span>Description <small style="color: red">*</small></span>&nbsp;&nbsp;&nbsp;
																	</label>
                                                                    <textarea style="height: 90px; width: 100%; border-radius: 7px;" name="description" id="custom-menu-item-description" cols="44"></textarea>
																</p>
                                                                {{-- <p id="menu-item-description_an-wrap">
																	<label class="howto" for="custom-menu-item-description_an"> <span>Description An</span>&nbsp;&nbsp;&nbsp;
																	</label>
                                                                    <textarea style="height: 90px; width: 100%; border-radius: 7px;" name="description_an" id="custom-menu-item-description_an" cols="44"></textarea>
																</p> --}}
                                                                {{-- <p id="menu-item-image-wrap">
																	<label class="howto" for="custom-menu-item-image"> <span>Gambar</span>&nbsp;&nbsp;&nbsp;
																		<input id="custom-menu-item-image" name="image" type="file" class="menu-item-textbox">
																	</label>
																</p> --}}
                                                                <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                                                    <div class="mb-3 mb-md-0 fw-bold">
                                                                        <h4 class="text-gray-900 fw-bolder">Best Resolution Image Display:</h4>
                                                                        <div class="fs-6 text-gray-700 pe-7">
                                                                            <ul class="m-0">
                                                                                <li>Portrait image</li>
                                                                                <li>260 X 260 px</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <p class="field-css-image description description-wide"id="menu-item-image-wrap">
                                                                    <br>
                                                                    <div class="imgUp">
                                                                        <div class="imagePreview mb-4" data-trigger="fileinput"
                                                                        style="width: 100%; height: 200px;"></div>
                                                                        <div>
                                                                        {{-- <div class="imagePreview" style="background-image: url('{{ $item->image_url != '' ? asset($item->image_url) : asset('frontpage/assets/images/default.jpg') }}')"></div> --}}
                                                                        <label class="btn btn-primary" style="width: 50% !important;">
                                                                            Select image
                                                                            <input type="file" class="uploadFile img" name="image" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" id="custom-menu-item-image">
                                                                        </label>
                                                                    </div>
                                                                </label>
                                                            </p>
																<p class="button-controls">
                                                                    <button style="color: #FFFF; float:right;" type="submit" name="save_menu" id="save_menu_header" class="btn btn-primary">
                                                                        <span class="indicator-label">Save</span>
                                                                        <span class="indicator-progress">Please wait...
                                                                            <span class="spinner" id="spincustomu"></span>
                                                                        </span>
                                                                    </button>
																</p>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</form>
								</div>
								@endif
								<div id="menu-management-liquid">
									<div id="menu-management">
										<div id="update-nav-menu" action="" method="post" enctype="multipart/form-data">
											<div class="menu-edit ">
												<div id="nav-menu-header">
													<div class="major-publishing-actions">
														<label class="menu-name-label howto open-label" for="menu-name">
                                                            <h5 style="margin: 5px;" class="hndle">@if(isset($indmenu)){{$indmenu->name}}@endif</h5>
															<input name="menu-name" readonly id="menu-name" type="hidden" class="menu-name regular-text menu-item-textbox" title="Enter menu name" value="@if(isset($indmenu)){{$indmenu->name}}@endif">
															<input type="hidden" id="idmenu" value="@if(isset($indmenu)){{$indmenu->id}}@endif" />
														</label>
													</div>
												</div>
												<div id="post-body">
													<div id="post-body-content">
														<ul class="menu ui-sortable" style="display: block;" id="menu-to-edit">
															@if(isset($data) && !empty($data->list_items))
															@foreach($data->list_items as $item)
                                                            <li id="menu-item-{{$item->id}}" class="menu-item menu-item-depth-{{$item->depth}} menu-item-page menu-item-edit-inactive pending" style="display: list-item;">
																<dl class="menu-item-bar">
																	<dt class="menu-item-handle" style="border-radius: 6px; background: #dee8e9;">

																		<span class="item-title">
                                                                            <span class="menu-item-title">
                                                                                <span id="menutitletemp_{{$item->id}}">{{$item->title}}</span>
                                                                                <span style="color: transparent;">|{{$item->id}}|</span>
                                                                            </span>
                                                                            <span class="is-submenu" style="@if($item->depth==0)display: none;@endif">Subelement</span>
                                                                        </span>

																		<span class="item-controls">
                                                                            <span class="item-type">Link</span>
                                                                            <span class="item-order hide-if-js">
                                                                                <a href="{{ $currentUrl }}?action=move-up-menu-item&menu-item={{$item->id}}&_wpnonce=8b3eb7ac44" class="item-move-up">
                                                                                    <abbr title="Move Up">↑</abbr>
                                                                                </a> |
                                                                                <a href="{{ $currentUrl }}?action=move-down-menu-item&menu-item={{$item->id}}&_wpnonce=8b3eb7ac44" class="item-move-down">
                                                                                    <abbr title="Move Down">↓</abbr>
                                                                                </a>
                                                                            </span>

                                                                            <a class="item-edit" onclick="noReload(event);" id="edit-{{$item->id}}" title=" " href="{{ $currentUrl }}?edit-menu-item={{$item->id}}#menu-item-settings-{{$item->id}}"> </a>

                                                                        </span>
																	</dt>
																</dl>
																<div class="menu-item-settings" data-id="{{$item->id}}" id="menu-item-settings-{{$item->id}}">

                                                                    <form id="form-edit-{{$item->id}}" data-id="{{ $item->id }}" class="form-edit" method="post" enctype="multipart/form-data">

                                                                        <input type="hidden" class="edit-menu-item-id" name="menuid_{{$item->id}}" value="{{$item->id}}" />
                                                                        <input type="hidden" class="edit-menu-item-id" name="index" value="{{$item->id}}" />

                                                                        <p class="description description-thin">
                                                                            <label for="title_{{$item->id}}"> Title <small style="color: red">*</small>
                                                                                <br>
                                                                                <input type="text" id="title_{{$item->id}}" class="widefat edit-menu-item-title" name="title_{{$item->id}}" value="{{$item->title}}">
                                                                            </label>
                                                                        </p>

                                                                         {{-- <p class="description description-thin">
                                                                            <label for="title_an_{{$item->id}}"> Title An
                                                                                <br>
                                                                                <input type="text" id="title_an_{{$item->id}}" class="widefat edit-menu-item-title_an" name="title_an_{{$item->id}}" value="{{$item->title_an}}">
                                                                            </label>
                                                                        </p> --}}

                                                                        <p class="description description-thin">
                                                                            <label for="sub_title_{{$item->id}}"> Name <small style="color: red">*</small>
                                                                                <br>
                                                                                <input type="text" id="sub_title_{{$item->id}}" class="widefat edit-menu-item-sub_title" name="sub_title_{{$item->id}}" value="{{$item->sub_title}}">
                                                                            </label>
                                                                        </p>

                                                                        {{-- <p class="description description-thin">
                                                                            <label for="sub_title_an_{{$item->id}}"> Name An
                                                                                <br>
                                                                                <input type="text" id="sub_title_an_{{$item->id}}" class="widefat edit-menu-item-sub_title_an" name="sub_title_an_{{$item->id}}" value="{{$item->sub_title_an}}">
                                                                            </label>
                                                                        </p> --}}

                                                                        <p class="field-css-url description description-wide">
                                                                            <label for="description_{{$item->id}}"> Description <small style="color: red">*</small>
                                                                                <br>
                                                                                <textarea style="height: 90px; width: 100%; border-radius: 7px;" name="description_{{$item->id}}" class="widefat code edit-menu-item-description" id="description_{{$item->id}}" cols="30" rows="10">{{$item->description}}</textarea>
                                                                            </label>
                                                                        </p>

                                                                        {{-- <p class="field-css-url description description-wide">
                                                                            <label for="description_an_{{$item->id}}"> Description An
                                                                                <br>
                                                                                <textarea style="height: 90px; width: 100%; border-radius: 7px;" name="description_an_{{$item->id}}" class="widefat code edit-menu-item-description_an" id="description_an_{{$item->id}}" cols="30" rows="10">{{$item->description_an}}</textarea>
                                                                            </label>
                                                                        </p> --}}

                                                                        {{-- <p class="field-css-image description description-wide">
                                                                                <br>
                                                                                <div class="imgUp">
                                                                                    <div class="imagePreview" style="background-image: url('{{ $item->image_url != '' ? asset($item->image_url) : asset('frontpage/assets/images/default.jpg') }}')"></div>
                                                                                    <label class="btn btn-primary" style="width: 50% !important;">
                                                                                        Ubah Gambar
                                                                                        <input type="file" class="uploadFile img" name="image_{{$item->id}}" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                                                                                    </label>
                                                                                </div>
                                                                            </label>
                                                                        </p> --}}
                                                                        <p class="field-css-image description description-wide">
                                                                            <br>
                                                                            <div class="imgUp">
                                                                                <div class="imagePreview mb-4" data-trigger="fileinput"
                                                                                style="width: 90%; height: 250px;background-image: url('{{ $item->image_url != '' ? asset($item->image_url) : asset('frontpage/assets/images/default.jpg') }}')"></div>
                                                                                <div>
                                                                                <label class="btn btn-primary" style="width: 50% !important;">
                                                                                    Change image
                                                                                    <input type="file" class="uploadFile img" name="image_{{$item->id}}" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" id="custom-menu-item-image">
                                                                                </label>
                                                                            </div>
                                                                        </label>
                                                                    </p>
                                                                        {{-- <p class="field-css-url description description-wide">
                                                                            <label for="url_{{$item->id}}"> URL Halaman Detail
                                                                                <br>
                                                                                <input type="text" id="url_{{$item->id}}" class="widefat code edit-menu-item-url" name="url_{{$item->id}}" value="{{$item->url}}">
                                                                            </label>
                                                                        </p> --}}

                                                                        <div class="menu-item-actions description-wide submitbox">
                                                                            <a class="button button-danger item-delete submitdelete deletion" onclick="noReload(event);" id="delete-{{$item->id}}" href="{{ $currentUrl }}?action=delete-menu-item&menu-item={{$item->id}}&_wpnonce=2844002501">Delete</a>
                                                                            <span class="meta-sep hide-if-no-js"> | </span>
                                                                            <button class="button button-primary updatemenu save_menu" data-id="{{ $item->id }}" id="update-{{$item->id}}">Update</button>
                                                                        </div>

                                                                    </form>

																</div>
																<ul class="menu-item-transport"></ul>
															</li>
															@endforeach
															@endif
														</ul>
														<div class="menu-settings"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
@push('script')
<script src="{{ asset_administrator('assets/plugins/custom/form-jasnyupload/fileinput.min.js') }}"></script>
@endpush
