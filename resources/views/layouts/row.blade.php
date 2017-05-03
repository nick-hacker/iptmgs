<!-- /.row -->
<div class="row">
    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <!-- <i class="fa fa-bar-chart-o fa-fw"></i> --> 
                Registration form
                <div class="pull-right">
                    <!-- <div class="btn-group">
                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                            Actions
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li><a href="#">Action</a>
                            </li>
                            <li><a href="#">Another action</a>
                            </li>
                            <li><a href="#">Something else here</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a>
                            </li>
                        </ul>
                    </div> -->
                </div>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <form role="form" action="" class="">
                    
                    <div class="form-group">
                        <label>Username</label>
                        <input class="form-control" name="username" placeholder="Enter text">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" name="password" placeholder="Enter text">
                    </div>
                    <div class="form-group">
                        <label>Text area</label>
                        <textarea class="form-control" name="description" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary  btn-lg">Primary</button>
                    </div>
                </form>
            </div>
            <!-- /.panel-body -->

        </div>
        <!-- /.panel -->
        
    </div>
    <!-- /.col-lg-8 -->

    @include('layouts.notificationpan')
    <!-- /.col-lg-4 -->
</div>