    <div class="col-lg-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-fw"></i> Posts archives
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <ol class="styles-none">
                
                    @foreach($archives as $archive)
                        <li>
                            <a href="/?month={{$archive['month']}}&&year={{$archive['year']}}">
                            {{ $archive['month'].' '.$archive['year'],' '.$archive['day'] }}
                            </a>
                        </li>   
                    @endforeach                   
                </ol>
            </div>
            <!-- /.lipanel-body -->
        </div>      
    </div>