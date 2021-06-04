    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header d-flex align-items-center">
                <a class="navbar-brand" href="{{route('admin.dashboard')}}">
                    <img src="{{ asset('admin') }}/assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
                </a>
                <div class="ml-auto">
                    <!-- Sidenav toggler -->
                    <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin"
                        data-target="#sidenav-main">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.dashboard')}}">
                                <i class="ni ni-shop text-primary"></i>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                        </li>


                            <li class="nav-item">
                                <a class="nav-link" href="#navbar-examples" data-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="navbar-examples">
                                    <i class="ni ni-bag-17 text-orange"></i>
                                    <span class="nav-link-text"> Services</span>
                                </a>
                                <div class="collapse" id="navbar-examples">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ url('service/create') }}" class="nav-link">Create Services </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('service/') }}" class="nav-link">All Service</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>



                            <li class="nav-item">
                                <a class="nav-link" href="#navbar-examples1" data-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="navbar-examples">
                                    <i class="ni ni-bag-17 text-orange"></i>
                                    <span class="nav-link-text"> category</span>
                                </a>
                                <div class="collapse" id="navbar-examples1">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ url('category') }}" class="nav-link">Category </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>



                            <li class="nav-item">
                                <a class="nav-link" href="#navbar-components" data-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="navbar-components">
                                    <i class="ni ni-app text-info"></i>
                                    <span class="nav-link-text">Portfolio</span>
                                </a>
                                <div class="collapse" id="navbar-components">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ url('category/') }}" class="nav-link">Portfolio Categories</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('portfolio/') }}" class="nav-link">Portfolios</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>



                            <li class="nav-item">
                                <a class="nav-link" href="#navbar-forms" data-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="navbar-forms">
                                    <i class="ni ni-single-02 text-pink"></i>
                                    <span class="nav-link-text">Testimonial</span>
                                </a>
                                <div class="collapse" id="navbar-forms">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ url('testimonial/') }}" class="nav-link">Testimonial List</a>
                                        </li>

                                    </ul>
                                </div>
                            </li>



                            <li class="nav-item">
                                <a class="nav-link" href="#navbar-forms1" data-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="navbar-forms">
                                    <i class="ni ni-single-02 text-pink"></i>
                                    <span class="nav-link-text">Blog</span>
                                </a>
                                <div class="collapse" id="navbar-forms1">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ url('blog/') }}" class="nav-link">Blog List</a>
                                        </li>

                                    </ul>
                                </div>
                            </li>




                            <li class="nav-item">
                                <a class="nav-link" href="#navbar-tables1" data-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="navbar-tables">
                                    <i class="ni ni-archive-2 text-default"></i>
                                    <span class="nav-link-text">Slider</span>
                                </a>
                                <div class="collapse" id="navbar-tables1">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ url('slider/') }}" class="nav-link">Slider List</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#navbar-tables2" data-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="navbar-tables">
                                    <i class="ni ni-archive-2 text-default"></i>
                                    <span class="nav-link-text">Contact</span>
                                </a>
                                <div class="collapse" id="navbar-tables2">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ url('contact-list') }}" class="nav-link">Contact List</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" href="#navbar-tables" data-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="navbar-tables">
                                    <i class="ni ni-archive-2 text-default"></i>
                                    <span class="nav-link-text">Freelancer's</span>
                                </a>
                                <div class="collapse" id="navbar-tables">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ url('freelancer') }}" class="nav-link">Freelancer List</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#navbar-tables3" data-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="navbar-tables">
                                    <i class="ni ni-archive-2 text-default"></i>
                                    <span class="nav-link-text">Quote</span>
                                </a>
                                <div class="collapse" id="navbar-tables3">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ url('quote/all') }}" class="nav-link">Quote List</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#navbar-tables4" data-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="navbar-tables">
                                    <i class="ni ni-archive-2 text-default"></i>
                                    <span class="nav-link-text">Client</span>
                                </a>
                                <div class="collapse" id="navbar-tables4">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ url('client/') }}" class="nav-link">Slider List</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>


                        <li class="nav-item">
                            <a class="nav-link" href="#navbar-tablesa" data-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="navbar-tables">
                                <i class="ni ni-archive-2 text-default"></i>
                                <span class="nav-link-text">About</span>
                            </a>
                            <div class="collapse" id="navbar-tablesa">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ url('about/') }}" class="nav-link">About List</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!--ecomerece part start -->
                            <li class="nav-item">
                                <a class="nav-link" href="#navbar-tablesc" data-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="navbar-tables">
                                    <i class="ni ni-archive-2 text-default"></i>
                                    <span class="nav-link-text">Product Category</span>
                                </a>
                                <div class="collapse" id="navbar-tablesc">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ url('productcategory/') }}" class="nav-link">Product Category List</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#navbar-tablescp" data-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="navbar-tables">
                                    <i class="ni ni-archive-2 text-default"></i>
                                    <span class="nav-link-text">Product</span>
                                </a>
                                <div class="collapse" id="navbar-tablescp">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ url('product/') }}" class="nav-link">Product List</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#navbar-tablesco" data-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="navbar-tables">
                                    <i class="ni ni-archive-2 text-default"></i>
                                    <span class="nav-link-text">Order</span>
                                </a>
                                <div class="collapse" id="navbar-tablesco">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ url('order/index') }}" class="nav-link">Order List</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>


                            {{-- <li class="nav-item">
                                <a class="nav-link" href="#navbar-tables5" data-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="navbar-tables">
                                    <i class="ni ni-archive-2 text-default"></i>
                                    <span class="nav-link-text">Expenses</span>
                                </a>
                                <div class="collapse" id="navbar-tables5">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ url('expenses/') }}" class="nav-link">Expenses List</a>
                                        </li>
                                    </ul>
                                </div>
                            </li> --}}

                            {{-- <li class="nav-item">
                                <a class="nav-link" href="#navbar-tables6" data-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="navbar-tables">
                                    <i class="ni ni-archive-2 text-default"></i>
                                    <span class="nav-link-text">Role</span>
                                </a>
                                <div class="collapse" id="navbar-tables6">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ url('role/') }}" class="nav-link">Role Create List</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#navbar-tables7" data-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="navbar-tables">
                                    <i class="ni ni-archive-2 text-default"></i>
                                    <span class="nav-link-text">Permission</span>
                                </a>
                                <div class="collapse" id="navbar-tables7">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ url('permission/') }}" class="nav-link">Permission Create List</a>
                                        </li>
                                    </ul>
                                </div>
                            </li> --}}

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('employee') }}">
                                    <i class="ni ni-circle-08 text-red"></i>
                                    <span class="nav-link-text">Manage Staffs</span>
                                </a>
                            </li>





                        <li class="nav-item">
                            <a class="nav-link" href="#navbar-maps" data-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="navbar-maps">
                                <i class="ni ni-world text-primary"></i>
                                <span class="nav-link-text">Web Settings</span>
                            </a>
                            <div class="collapse" id="navbar-maps">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="#navbar-multilevel" class="nav-link" data-toggle="collapse"
                                            role="button" aria-expanded="true" aria-controls="navbar-multilevel">General
                                            Settings</a>
                                        <div class="collapse show" id="navbar-multilevel" style="">
                                            <ul class="nav nav-sm flex-column">

                                                <li class="nav-item">
                                                    <a href="{{ url('admin/settings') }}" class="nav-link ">Profile</a>
                                                </li>
                                                {{-- <li class="nav-item">
                                                    <a href="{{ url('role') }}" class="nav-link ">Role</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{ url('permission') }}" class="nav-link ">Permission</a>
                                                </li> --}}
                                                <li class="nav-item">
                                                    <a href="{{ url('navbar/create') }}" class="nav-link ">Create
                                                        Footer & Header</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{ url('navbar/index') }}" class="nav-link ">List
                                                        Footer & Header</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{ url('topheader/') }}" class="nav-link ">Social Info</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#navbar-multilevel" class="nav-link" data-toggle="collapse"
                                            role="button" aria-expanded="true" aria-controls="navbar-multilevel">Home
                                            Slider</a>
                                        <div class="collapse show" id="navbar-multilevel" style="">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="{{ url('slider') }}" class="nav-link ">Slider</a>
                                                </li>
                                                {{-- <li class="nav-item">
                                                    <a href="{{ url('navbar/create') }}" class="nav-link ">Featured
                                                        Links</a>
                                                </li> --}}

                                            </ul>
                                        </div>
                                    </li>

                                    <!-- ecommerce part start -->

                                </ul>
                            </div>
                        </li>

                    </ul>

                </div>
            </div>
        </div>
    </nav>
