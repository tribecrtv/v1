<div class="hidden lg:grid place-items-center bg-white p-6">
    <div class="flex items-center space-x-8 tracking-tight font-bold">
        <a href="/"> <span class="{{ Request::is('/') ? 'border-b-2' : '' }} border-black pb-1">
                Home </span></a>
        <!--<a href="#"> <span class="hover:border-b-2 border-black pb-1">Our Story</span> </a>-->
        <a href="/online"> <span class="{{ Request::is('online') ? 'border-b-2' : '' }} border-black pb-1">
                Online </span>
        </a>
        <!--<a href="#"> <span class="hover:border-b-2 border-black pb-1">Gatherings</span> </a>-->
        <a href="https://medium.com/thetribestories" target="blank">
            <span class="hover:border-b-2 border-black pb-1">Blog</span>
        </a>
        <a href="/give"> <span class="{{ Request::is('give') ? 'border-b-2' : '' }} border-black pb-1">Give</span>
        </a>
    </div>
</div>
