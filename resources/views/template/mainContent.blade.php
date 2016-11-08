<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {{$config->sectionName or ''}}
        </h1>

    </section>
    <!-- Main content -->
    <section class="content">
        <ol class="breadcrumb " style="background-color: white">
            <li>
                <a href="{{route('home')}}">Home</a>
            </li>
            <li>
                <a href="{{route($config->indexRoute)}}">{{$config->sectionName}}</a>
            </li>
            <li class="active">{{$activeBread}}</li>
        </ol>
        @include('template.messages')


        @yield('sectionContent')

        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
