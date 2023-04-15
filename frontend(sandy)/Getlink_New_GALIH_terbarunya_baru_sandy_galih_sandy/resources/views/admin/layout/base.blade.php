<!DOCTYPE html>
<html lang="en">

@include("admin.layout.head")


<body>
    <div class="adContent">

        @include("admin.layout.aside")

        <div class="adIs">
            @include("admin.layout.navbar")

            @yield('admin_konten')
            {{-- @include('admin.layout.footer') --}}
        </div>
    </div>

    @include("admin.layout.script")

</body>

</html>
