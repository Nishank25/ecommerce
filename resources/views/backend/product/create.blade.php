@extends('layouts.master')
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
@extends('layouts.slide-bar')
@section('content')
    <!-- begin #content -->
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
            <li class="breadcrumb-item active"><a href="{{route('product_manage')}}">Manage Tables</a></li>
            <li class="breadcrumb-item active">Product Create</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">Product Create</h1>
        <!-- end page-header -->

        <!-- begin panel -->
        <div class="panel panel-inverse">
            <!-- begin panel-body -->
            <div class="panel-body">
                <form action="{{route('product_create')}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="row" style="padding: 2%">
                        <div class="col-2">
                            <label class="control-label">Product Name</label>
                        </div>
                        <div class="col-4">
                            <input type="text" id="category_name" name="name" value="" class="form-control" required>
                        </div>
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="row " id="root_category" style="padding: 2%">
                        <div class="col-2">
                            <label class="control-label">Please select category</label>
                        </div>
                        <div class="col-4">
                            <select class="form-control" id="select_category" name="category" required>
                                <option value="">-- Please Select Category --</option>
                                @foreach($subCategory as $item)
                                    <option value="{{$item['id']}}">{{$item['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="row" style="padding: 2%">
                        <div class="col-2">
                            <label class="control-label">Description</label>
                        </div>
                        <div class="col-4">
                            <textarea class="form-control" name="description" required></textarea>
                        </div>
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="row" style="padding: 2%">
                        <div class="col-2">
                            <label class="control-label">No. of Stock</label>
                        </div>
                        <div class="col-4">
                            <input type="text" class="form-control" name="stock" id="stock" required>
                        </div>
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="row" style="padding: 2%">
                        <div class="col-2">
                            <label class="control-label">Manufacture</label>
                        </div>
                        <div class="col-4">
                            <input type="text" class="form-control" name="manufacture" id="manufacture" required>
                        </div>
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="row" style="padding: 2%">
                        <div class="col-2">
                            <label class="control-label">Dimensions</label>
                        </div>
                        <div class="col-4">
                            <input type="text" class="form-control" name="dimensions" id="dimensions" required>
                        </div>
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="row" style="padding: 2%">
                        <div class="col-2">
                            <label class="control-label">Capacity</label>
                        </div>
                        <div class="col-4">
                            <input type="text" class="form-control" name="capacity" id="capacity" required>
                        </div>
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="row" style="padding: 2%">
                        <div class="col-2">
                            <label class="control-label">Unit Type</label>
                        </div>
                        <div class="col-4">
                            <input type="text" class="form-control" name="unit_type" id="unit_type" required>
                        </div>
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="row" style="padding: 2%">
                        <div class="col-2">
                            <label class="control-label">Unit Value</label>
                        </div>
                        <div class="col-4">
                            <input type="text" class="form-control" name="unit_value" id="unit_value" required>
                        </div>
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="row" style="padding: 2%">
                        <div class="col-2">
                            <label class="control-label">Product Details</label>
                        </div>
                        <div class="col-4">
                            <textarea type="text" class="form-control" name="product_description" id="product_description" required></textarea>
                        </div>
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="row" style="padding: 2%">
                        <div class="col-2">
                            <label class="control-label">Base Price</label>
                        </div>
                        <div class="col-4">
                            <input type="text" class="form-control" name="base_price" id="base_price" required>
                        </div>
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="row" style="padding: 2%">
                        <div class="col-2">
                            <label class="control-label">Discounted Price</label>
                        </div>
                        <div class="col-4">
                            <input type="text" class="form-control" name="discounted_price" id="discounted_price">
                        </div>
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="row" style="padding: 2%">
                        <div class="col-2">
                            <label class="control-label">Upload Images</label>
                        </div>
                        <div class="col-4">
                            <input type="file" class="form-control" name="image[]" id="image" multiple>
                        </div>
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="pull-right">
                        <button type="submit" class="btn btn-green">Submit</button>
                    </div>
                </form>
            </div>
            <!-- end panel-body -->
        </div>
        <!-- end panel -->
    </div>
    <!-- end #content -->
    <!-- begin scroll to top btn -->
    <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
    <!-- end scroll to top btn -->
@stop
@section('javascript_files')
    <!--[if lt IE 9]>
    <script src="/assets/crossbrowserjs/html5shiv.js"></script>
    <script src="/assets/crossbrowserjs/respond.min.js"></script>
    <script src="/assets/crossbrowserjs/excanvas.min.js"></script>
    <![endif]-->
    <script src="/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="/assets/plugins/js-cookie/js.cookie.js"></script>
    <script src="/assets/js/theme/default.min.js"></script>
    <script src="/assets/js/apps.min.js"></script>
    <!-- ================== END BASE JS ================== -->

    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="/assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
    <script src="/assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
    <script src="/assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
    <script src="/assets/js/demo/table-manage-default.demo.min.js"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->
@endsection
@section('javascripts')
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
@endsection