<li class="{{ request()->routeIs('home') ? 'current' : '' }}"><a href="{{ route('home') }}">Home</a></li>
<li class="{{ request()->routeIs('pricing') ? 'current' : '' }}"><a href="{{ route('pricing') }}">Packages</a></li>
<li class="{{ request()->routeIs('services', 'servicesTwo', 'serviceDetails') ? 'current' : '' }}"><a href="{{ route('services') }}">What's Included</a></li>
<li class="{{ request()->routeIs('projectGrid', 'projectList', 'projectDetails') ? 'current' : '' }}"><a href="{{ route('projectGrid') }}">Our Work</a></li>
<li class="{{ request()->routeIs('faqs') ? 'current' : '' }}"><a href="{{ route('faqs') }}">FAQs</a></li>
<li class="{{ request()->routeIs('contact') ? 'current' : '' }}"><a href="{{ route('contact') }}">Contact</a></li>
