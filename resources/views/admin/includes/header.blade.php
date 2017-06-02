@if(isset($menu))
    <div class="navbar" style="background-color:black">
        <div class="navbar-inner">
            <ul class="list-inline">
                <div class="btn-group">
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Menu
                    </button>
                    <div class="dropdown-menu">
                        @foreach($menu as $menuInfo)
                            <li><a href="/" data-jq-dropdown="#jq-dropdown-1">{{$menuInfo['name']}}</a></li>
                        @endforeach
                    </div>
                </div>
            </ul>
        </div>
    </div>
@endif







