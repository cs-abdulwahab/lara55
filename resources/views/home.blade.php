@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>


@stop

@section('content')

    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">CPU Traffic</span>
                    <span class="info-box-number">90<small>%</small></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Likes</span>
                    <span class="info-box-number">41,410</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Sales</span>
                    <span class="info-box-number">760</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">New Members</span>
                    <span class="info-box-number">2,000</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>


    <div class="row">

        <div class="col-lg-6">

            <div class="box box-success">
                <div class="box-header">
                    <h3 class="box-title">iCheck ++ Checkbox &amp; Radio Inputs</h3>
                </div>
                <div class="box-body">
                    <!-- Minimal style -->

                    <!-- checkbox -->
                    <div class="form-group" id="example-3">
                        <label>
                            <input type="checkbox" name="chkgroup" value="1" class="minimal" v-model="checkedNames">
                        </label>
                        <label>
                            <input type="checkbox" name="chkgroup" value="2" class="minimal" v-model="checkedNames">
                        </label>
                        <label>
                            <input type="checkbox" name="chkgroup" value="3" class="minimal" v-model="checkedNames">
                        </label>
                        <label>
                            <input type="checkbox" name="chkgroup" value="4" class="minimal" v-model="checkedNames">

                        </label>
                        Minimal Skin CheckBox
                    </div>

                </div>


                @section ('js')
                    <script type="text/javascript">




                    </script>
                @stop


            </div>

        </div>

@stop