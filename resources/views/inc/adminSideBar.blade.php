<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
        <ul class="nav nav-sidebar">
            <li class="active">
                <a href="#">
                    @if(Auth::user()->admin_type == "Super_Admin")
                        Admin Creation
                    @else
                        Lecturer Register
                    @endif                                         
                <span class="sr-only">(current)</span>
                </a>
            </li>
            <li>
                <a href="#">
                    @if(Auth::user()->admin_type == "Super_Admin")
                        Change Privileges
                    @else
                        Lecture Details
                    @endif
                    
                </a>
            </li>
            
        </ul>
        
        </div>
    </div>
</div>
