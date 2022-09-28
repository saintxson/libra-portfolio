<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
            <a href="{{route('admin.book.index')}}" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                    Книги
                    <span class="badge badge-info right">{{$books->count()}}</span>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.genre.index')}}" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                    Жанры
                    <span class="badge badge-info right">{{$genres->count()}}</span>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('admin.author.index')}}" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                    Авторы
                    <span class="badge badge-info right">{{$authors->count()}}</span>
                </p>
            </a>
        </li>
    </ul>
</nav>
