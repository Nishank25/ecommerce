@extends('layouts.master')
@extends('layouts.slide-bar')
@section('content')
    <!-- begin #content -->
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('create_product')}}">Product Create</a></li>
            <li class="breadcrumb-item active">Manage Tables</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">Product Manage</h1>
        <!-- end page-header -->

        <!-- begin panel -->
        <div class="panel panel-inverse">
            <!-- begin panel-body -->
            <div class="panel-body">
                <table id='data-table-default' class='table table-striped table-bordered'>
                    <thead><tr>
                        <th>Sr. No</th>
                        <th>Product Name</th>
                        <th>Category Name</th>
                        <th>Product Base price</th>
                        <th>Product Discounted price</th>
                        <th>Created At</th>
                    </tr></thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
            <!-- end panel-body -->
        </div>
        <!-- end panel -->
    </div>
    <!-- end #content -->
    <!-- begin scroll to top btn -->
    <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
    <!-- end scroll to top btn -->
@endsection
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
        $('#data-table-default').DataTable( {
            "processing": true,
            "serverSide": true,
            "ajax": "/product/peroduct_listing",
            "columns": [
                { "data": "id" , "name" : ""},
                { "data": "name" , "name" : "name"},
                { "data": "category_type" , "name" : "category_type"},
                { "data": "created_at" , "name" : "created_at"}
            ]
        } );
    </script>
@endsection