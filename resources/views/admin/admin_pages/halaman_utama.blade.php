@extends('admin.layout.base')

@section('admin_konten')
    <div class="iframDiv">
        <div class="framTop">
            <p class="fram_p">Preview landing page</p>
        </div>
        <div class="framBot">
            <iframe id="framePreview" class="framPrew" src="{{ url('/') }}" frameborder="0" width="100%" height="100%"></iframe>
        </div>
    </div>

    <script>
        var frame = document.getElementById('framePreview');
        frame.addEventListener('load', function() {
            var iframeDocument = frame.contentDocument || frame.contentWindow.document;

            // Menonaktifkan elemen anchor
            var anchorElements = iframeDocument.querySelectorAll('a');
            if (anchorElements) {
                anchorElements.forEach(function(anchor) {
                    anchor.addEventListener('click', function(event) {
                        event.preventDefault();
                    });
                    anchor.style.pointerEvents = 'none';
                });
            }

            // Menonaktifkan elemen button
            var buttonElements = iframeDocument.querySelectorAll('button');
            if (buttonElements) {
                buttonElements.forEach(function(button) {
                    button.setAttribute('disabled', 'true');
                });
            }
        });
    </script>
@endsection
