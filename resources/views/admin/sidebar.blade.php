<!-- ============================================================== -->
<!-- left sidebar -->
<!-- ============================================================== -->
<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                <li class="nav-divider">
                    
                <p><img src="http://127.0.0.1:8000/assets/images/user3.png" alt="" class="user-avatar-md rounded-circle">&nbsp;{{Auth::user()->name}}</p>
                    </li>
                

                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin" aria-expanded="false"><i class="fas fa-home"></i>Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/category" aria-expanded="false"><i class="fas fa-list-ul"></i>Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/cars" aria-expanded="false"><i class="far fa-edit"></i></i>Cars</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/comment" aria-expanded="false"><i class=" far fa-comments"></i>Comments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=" {{route('admin.faq.index')}} " aria-expanded="false"><i class="fas fa-question"></i>FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=" {{route('admin.message.index')}} " aria-expanded="false"><i class="far fa-envelope"></i>Messages</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/user" aria-expanded="false"><i class="fas fa-users"></i>Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/social" aria-expanded="false"><i class=" fas fa-comment"></i>Social Media</a>
                    </li>
                    <li class="nav-divider">Labels</li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/setting" aria-expanded="false"><i class="fas fa-cogs"></i>Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/brand" aria-expanded="false"><i class="fas fa-cogs"></i>Brand</a>
                    </li>
                    
                    



                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- ============================================================== -->
<!-- end left sidebar -->
<!-- ============================================================== -->