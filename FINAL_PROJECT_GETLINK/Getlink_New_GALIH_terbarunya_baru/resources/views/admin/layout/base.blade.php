<!DOCTYPE html>
<html lang="en">
<meta name="csrf-token" content="{{ csrf_token() }}">

@include("admin.layout.head")


<body>
    <div class="adContent">

        @include("admin.layout.aside")

        <div class="adIs">

            @include("admin.layout.navbar")
            @yield('admin_konten')
        </div>
    </div>

    @include("admin.layout.script")

</body>

</html>
