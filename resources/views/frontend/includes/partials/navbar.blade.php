<li class="{{ request()->routeIs('home') ? 'current' : '' }}"><a href="{{ route('home') }}">Home</a></li>
<li class="{{ request()->routeIs('about') ? 'current' : '' }}"><a href="{{ route('about') }}">About</a></li>
<li class="dropdown {{ request()->routeIs('services', 'servicesTwo', 'serviceDetails') ? 'current' : '' }}"><a
        href="{{ route('servicesTwo') }}">Services</a>
    <ul>
        <li class="{{ request()->routeIs('servicesTwo') ? 'current-menu-item' : '' }}"><a
                href="{{ route('servicesTwo') }}">Our Services</a></li>
        <li class="{{ request()->routeIs('services') ? 'current-menu-item' : '' }}"><a
                href="{{ route('services') }}">Services Overview</a></li>
        <li class="{{ request()->routeIs('serviceDetails') ? 'current-menu-item' : '' }}"><a
                href="{{ route('serviceDetails') }}">Web Design</a></li>
    </ul>
</li>
<li class="dropdown {{ request()->routeIs('projectGrid', 'projectList', 'projectDetails') ? 'current' : '' }}"><a
        href="{{ route('projectGrid') }}">Projects</a>
    <ul>
        <li class="{{ request()->routeIs('projectGrid') ? 'current-menu-item' : '' }}"><a
                href="{{ route('projectGrid') }}">Our Projects</a></li>
        <li class="{{ request()->routeIs('projectList') ? 'current-menu-item' : '' }}"><a
                href="{{ route('projectList') }}">Project List</a></li>
        <li class="{{ request()->routeIs('projectDetails') ? 'current-menu-item' : '' }}"><a
                href="{{ route('projectDetails') }}">Case Study</a></li>
    </ul>
</li>
<li class="{{ request()->routeIs('team', 'teamDetails') ? 'current' : '' }}"><a href="{{ route('team') }}">Team</a></li>
<li class="{{ request()->routeIs('pricing') ? 'current' : '' }}"><a href="{{ route('pricing') }}">Pricing</a></li>
<li class="{{ request()->routeIs('faqs') ? 'current' : '' }}"><a href="{{ route('faqs') }}">FAQs</a></li>
<li class="{{ request()->routeIs('contact') ? 'current' : '' }}"><a href="{{ route('contact') }}">Contact Us</a></li>
<li class="dropdown {{ request()->routeIs('blog', 'blogStandard', 'blogDetails') ? 'current' : '' }}"><a
        href="{{ route('blog') }}">Blog</a>
    <ul>
        <li class="{{ request()->routeIs('blog') ? 'current-menu-item' : '' }}"><a href="{{ route('blog') }}">Blog</a>
        </li>
        <li class="{{ request()->routeIs('blogStandard') ? 'current-menu-item' : '' }}"><a
                href="{{ route('blogStandard') }}">Blog Archive</a></li>
        <li class="{{ request()->routeIs('blogDetails') ? 'current-menu-item' : '' }}"><a
                href="{{ route('blogDetails') }}">Latest Article</a></li>
    </ul>
</li>