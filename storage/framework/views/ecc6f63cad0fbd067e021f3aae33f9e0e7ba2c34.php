<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                <?php echo e(config('app.name', 'Everything Business')); ?>

            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

                     <ul class="nav navbar-nav">
                   	   <li><a href="/">Home</a></li>
                       <li><a href="/services">Services</a></li>
					   <li><a href="/portfolio">Portfolio</a></li>
                       <li><a href="/consultation">Consultation</a></li>
                       <li><a href="/agents">Agents</a></li>
                       <li><a href="/contactus">Contact Us</a></li>
                       <li><a href="https://everythingbusiness.secure.simplybook.me/v2/dashboard/new">Admin Login</a></li>

                     </ul>
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                <?php if(Auth::guest()): ?>
                    <li><a href="<?php echo e(route('login')); ?>"><span class="glyphicon glyphicon-log-in"></span>  &nbsp;Login</a></li>
                    <li><a href="<?php echo e(route('register')); ?>"><span class="glyphicon glyphicon-user"></span>  &nbsp;Register</a></li>
                <?php else: ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="<?php echo e(route('logout')); ?>"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                </form>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
