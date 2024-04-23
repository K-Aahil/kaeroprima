@extends('administrator.layouts.main')

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Product Inquiries</h1>
                    <span class="h-20px border-gray-300 border-start mx-4"></span>
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('admin.dashboard') }}" class="text-muted text-hover-primary">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-dark">Product Inquiries</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-xxl">

        <div class="card card-flush">
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <div class="card-title">
                            <div class="d-flex align-items-center position-relative my-1">
                                <span class="svg-icon svg-icon-1 position-absolute ms-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                                    </svg>
                                </span>
                                <input type="text" id="searchdatatable" class="form-control form-control-solid form-control-sm w-250px ps-14" placeholder="Search" />
                            </div>
                        </div>
                        <div class="card-toolbar">
                            <div>
                                <a class="btn btn-sm btn-light-warning button_filter_data">
                                    <span class="svg-icon svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M21.7 18.9L18.6 15.8C17.9 16.9 16.9 17.9 15.8 18.6L18.9 21.7C19.3 22.1 19.9 22.1 20.3 21.7L21.7 20.3C22.1 19.9 22.1 19.3 21.7 18.9Z" fill="black"/><path opacity="0.3" d="M11 20C6 20 2 16 2 11C2 6 6 2 11 2C16 2 20 6 20 11C20 16 16 20 11 20ZM11 4C7.1 4 4 7.1 4 11C4 14.9 7.1 18 11 18C14.9 18 18 14.9 18 11C18 7.1 14.9 4 11 4ZM8 11C8 9.3 9.3 8 11 8C11.6 8 12 7.6 12 7C12 6.4 11.6 6 11 6C8.2 6 6 8.2 6 11C6 11.6 6.4 12 7 12C7.6 12 8 11.6 8 11Z" fill="black"/></svg>
                                </span>
                                Filter Data
                            </a>
                            &nbsp; &nbsp;
                            <a href="{{ route("admin.product-inquiries.exportExcel") }}" class="btn btn-sm btn-light-success" id="exportIndexExcel">
                                <span class="svg-icon svg-icon-muted svg-icon-2"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                                <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                                <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
                                </svg></span>
                            Export Excel
                        </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <form id="filter_data" class="collapse">
                            <div class="row">
                                <div class="col">
                                    <label class="form-label collapse">Filter By</label>
                                    <select name="category" id="filtercategory" class="form-select category collapse"
                                        data-hide-search="true">
                                        <option value="">Please Select Category</option>
                                        <option value="all">All Category</option>
                                        <option value="kredit">Kredit</option>
                                        <option value="simpanan">Simpanan</option>
                                    </select>
                                </div>
                                <div class="col pt-6">
                                    <label class="form-label collapse"> </label>
                                    <select name="product_name" id="filterproduct" class="form-select product collapse" 
                                        data-hide-search="true">
                                        <option value="">All Product</option>
                                        @foreach ($product as $row)
                                        <option value="{{ $row->product_name }}"> {{ $row->product_name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mt-5 ">
                                {{-- <button type="reset" id="reset-btn" class="btn btn-sm btn-light-danger collapse" value="Reset">
                                    <span class="svg-icon svg-icon-3">
                                        <svg height="21" viewBox="0 0 21 21" width="21" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" transform="translate(2 2)"><path d="m12.5 1.5c2.4138473 1.37729434 4 4.02194088 4 7 0 4.418278-3.581722 8-8 8s-8-3.581722-8-8 3.581722-8 8-8"/><path d="m12.5 5.5v-4h4"/></g></svg>
                                    </span>
                                    Reset
                                </button> --}}
                                &nbsp; &nbsp; 
                                <button type="submit" class="btn btn-sm btn-light-warning collapse">
                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M21.7 18.9L18.6 15.8C17.9 16.9 16.9 17.9 15.8 18.6L18.9 21.7C19.3 22.1 19.9 22.1 20.3 21.7L21.7 20.3C22.1 19.9 22.1 19.3 21.7 18.9Z" fill="black"/><path opacity="0.3" d="M11 20C6 20 2 16 2 11C2 6 6 2 11 2C16 2 20 6 20 11C20 16 16 20 11 20ZM11 4C7.1 4 4 7.1 4 11C4 14.9 7.1 18 11 18C14.9 18 18 14.9 18 11C18 7.1 14.9 4 11 4ZM8 11C8 9.3 9.3 8 11 8C11.6 8 12 7.6 12 7C12 6.4 11.6 6 11 6C8.2 6 6 8.2 6 11C6 11.6 6.4 12 7 12C7.6 12 8 11.6 8 11Z" fill="black"/></svg>
                                    </span>
                                    Search
                                </button>
                            </div>
                        </form>
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="product_inquiries-table">
                            <thead>
                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                    <th class="min-w-10px">No</th>
                                    <th class="min-w-100px">Date</th>
                                    <th class="min-w-100px">Name</th>
                                    <th class="min-w-100px">E-mail</th>
                                    <th class="min-w-100px">Phone</th>
                                    <th class="min-w-100px">Category</th>
                                    <th class="min-w-100px">Product</th>
                                    <th class="min-w-100px">Action</th>     
                                </tr>
                            </thead>
                            <tbody class="fw-bold text-gray-600">
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            
            $(".button_filter_data").click(function() {
                $(".collapse").slideToggle();
            });

            getDataBooking();
            
            $(".kt_datepicker_1").flatpickr({
                dateFormat: "d-m-Y",
            });

             $('#filter_data').submit(function(e){
                e.preventDefault();
                getDataBooking();
                setParams();
            })


            function getDataBooking(){
                if (getCategory() == "") {
                    $("#exportIndexExcel").hide();
                    $("#product_inquiries-table").DataTable().destroy();
                    $('#product_inquiries-table tbody').remove();
                    data_product_inquiries = $('#product_inquiries-table').dataTable({
                        "language": {
                            "emptyTable": "Silahkan Pilih Filter Data!!"
                        }
                    });
                    return false;
                }else{
                    $("#exportIndexExcel").show();
                    $("#product_inquiries-table").DataTable().destroy();
                    $('#product_inquiries-table tbody').remove();
                    data_product_inquiries = $('#product_inquiries-table').DataTable({
                        processing: true,
                        serverSide: true,
                        order: [[0, 'desc']],
                        ajax: {
                            url: '{{ route('admin.product-inquiries.getData') }}',
                            dataType: "JSON",
                            type: "GET",
                            data:function(d){

                                d.category = getCategory();
                                d.start_date = getStartDate();
                                d.end_date = getEndDate();
                                d.sorting_by = getSortingBy();
                                d.product_name = getProduct();
                            }
                        },
                        columns: [
                            {
                                render: function(data, type, row, meta) {
                                    return meta.row + meta.settings._iDisplayStart + 1;
                                },
                            },
                            { data: 'product_inquiries_created_at', className:'text-end',
                                mRender : function(data) {
                                return moment(data).format('DD-MM-YYYY');
                            }},
                            { data: 'name' , className:'text-end'},
                            { data: 'email', className:'text-end'},
                            { data: 'phone', className:'text-end'},
                            { data: 'product_category', className:'text-end'},
                            { data: 'product_name', className:'text-end'},
                            {
                        data: 'action', 'searchable': false

                    }     
                        ]
                    });
                }
            }
            
            
            $('#searchdatatable').keyup(function() {
                data_product_inquiries.search($(this).val()).draw();
                // console.log($(this).val());
                setParams();
            });

            $('#filterproduct').change(function() {
                // data_product_inquiries.search($("#searchdatatable").val()).draw();
                setParams();
            })

            $('#filtercategory').change(function() {
                // data_product_inquiries.search($("#searchdatatable").val()).draw();
                setParams();
            })

            // $('#filter_data').submit(function(e){
            //     e.preventDefault();
            //     data_product_inquiries.search($("#searchdatatable").val()).draw();
            //     setParams();
            // })

            function setParams(){
                linkExcel = '{{ route('admin.product-inquiries.exportExcel')}}' + '?search=start_date:'+getStartDate()+'|end_date:'+getEndDate()+'|sorting_by:'+getSortingBy()+'|filter_category:'+getCategory()+'|filter_product:'+getProduct().replace(/\s+/g, "%20")+'|txt:'+$("#searchdatatable").val();
                console.log(linkExcel);
                $("#exportIndexExcel").attr('href',linkExcel);
            }  
            function getProduct(){
                return $("#filterproduct").val();
            }          

            function getCategory(){
                return $("#filtercategory").val();
            }

            function getStartDate(){
                return $("#get_start_date").val();
            }

            function getEndDate(){
                return $("#get_end_date").val();
            }

            function getSortingBy(){
                return $("#get_sorting_by").val();
            }

            // function getProduct_inquiries(){
            //     console.log($("#get_product_inquiries").val());
            //     return $("#get_product_inquiries").val();
            // }

            $(".kt_datepicker_1").flatpickr({
                dateFormat: "d-m-Y",
            });

            $("#reset-btn" ).click(function() {
                $('#filtercategory').val('').change();
                $('#filterproduct').val('').change();
            });

            $('.category').change(function() {

                var id = $(this).val();

                if (id == "") {
                    $('.product').empty();
                    $('.product').append('<option value="">All Product</option>');
                    return false;
                }

                $.ajax({
                    "url": "{{ route('admin.product-inquiries.getProduct' )}}",
                    "dataType": "JSON",
                    "type": "POST",
                    "data": {
                        "_token": "{{ csrf_token() }}",
                        id: id
                    },
                    success: function(data) {
                        var html = '';
                        var i;
                        html = '<option value="">All Product</option>';
                        for (i = 0; i < data.length; i++) {
                            html += '<option value="' + data[i].product_name + '">' + data[i].product_name + '</option>';
                        }
                        $('.product').html(html);
                    }
                });
                return false;
            });
        });

            //Delete Confirmation
            $(document).on('click', '.delete', function(event) {
                var ix = $(this).data('ix');
                Swal.fire({
                    html: 'Are you sure delete this data?',
                    icon: "info",
                    buttonsStyling: false,
                    showCancelButton: true,
                    confirmButtonText: "Ok, got it!",
                    cancelButtonText: 'Nope, cancel it',
                    customClass: {
                        confirmButton: "btn btn-primary",
                        cancelButton: 'btn btn-danger'
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: "POST",
                            url: "{{ route('admin.product-inquiries.delete') }}",
                            data: ({
                                "_token": "{{ csrf_token() }}",
                                "_method": 'DELETE',
                                ix: ix,

                            }),
                            success: function() {
                                Swal.fire('Deleted!', 'Data has been deleted',
                                    'success');
                                    data_product_inquiries.ajax.reload(null, false);
                            }
                        });

                    }
                });
            });
    </script>
@endpush