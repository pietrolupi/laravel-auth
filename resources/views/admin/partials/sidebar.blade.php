<aside class="bg-dark">
    <nav>
        <ul>
            <li><a class="{{Route::currentRouteName() === 'admin.home' ? 'active' : ''}}" href="{{route('admin.home')}}">Dashboard</a></li>
            <li><a class="{{Route::currentRouteName() === 'admin.projects.index' ? 'active' : ''}}" href="{{route('admin.projects.index')}}">Elenco Progetti</a></li>
            <li><a class="{{Route::currentRouteName() === 'admin.technologies.index' ? 'active' : ''}}" href="{{route('admin.technologies.index')}}">Elenco Tecnologie</a></li>
            <li><a class="{{Route::currentRouteName() === 'admin.types.index' ? 'active' : ''}}" href="{{route('admin.types.index')}}">Elenco tipologie</a></li>
        </ul>

    </nav>
</aside>
