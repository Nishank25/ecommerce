@extends('layouts.master')
@extends('layouts.slide-bar')
@section('content')
    <!-- begin #content -->
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
            <li class="breadcrumb-item active"><a href="{{route('category_manage')}}">Managed Tables</a></li>
            <li class="breadcrumb-item active">Category Create</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">Category Create</h1>
        <!-- end page-header -->

        <!-- begin panel -->
        <div class="panel panel-inverse">
            <!-- begin panel-body -->
            <div class="panel-body">
                <form action="{{route('category_edit')}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="categ_id" value="{{$category['id']}}">
                    <div class="row" style="padding: 2%">
                        <div class="col-2">
                            <label class="control-label">Category Name</label>
                        </div>
                        <div class="col-4">
                            <input type="text" id="category_name" name="name" value="{{$category['name']}}" class="form-control" required>
                        </div>
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="row" style="padding: 2%">
                        <div class="col-2">
                            <label class="control-label">Is it sub category</label>
                        </div>
                        <div class="col-4">
                            @if($category['category_id'] == null)
                            <input type="checkbox" id="sub_category" >
                                @else
                            <input type="checkbox" id="sub_category" checked>
                            @endif
                        </div>
                    </div>
                    <div class="row " id="root_category" style="padding: 2%">
                        <div class="col-2">
                            <label class="control-label">Please select root category</label>
                        </div>
                        <div class="col-4">
                            <select class="form-control" id="select_root_category" name="root_category">
                                <option value="">-- Select Root Category --</option>
                                @foreach($rootCategory as $item)
                                    <option value="{{$item['id']}}" @if($category['category_id'] == $item['id']) selected @endif>{{$item['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="pull-right">
                        <button type="submit" class="btn btn-green">Update</button>
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
            folderDetails();
            $('#sub_category').trigger('change');
        });
    </script>
    <script>
        function folderDetails()
        {
            $.ajax({
                url: "/categories/category_listing",
                success: function(response)
                {
                    $("#listing").html(response);
                    TableManageDefault.init();
                }
            });
        }
        $(document).on('change','#sub_category',function(){
            if(this.checked) {
                $('#select_root_category').attr("required",true);
                $('#root_category').show();
            } else {
                $('#select_root_category').attr('required',false);
                $('#root_category').hide();
            }
        });
    </script>
@endsection