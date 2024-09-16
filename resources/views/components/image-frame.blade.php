<div id="image-frame">
    @if(session('uploaded-image-path'))
        <img src="{{ asset(session('uploaded-image-path')) }}" alt="Uploaded Image" style="max-width: 300px; max-height: 300px;">
    @else
        <img src="{{ asset('images/default.jpeg') }}" alt="Default Image" style="max-width: 300px; max-height: 300px;">
    @endif
</div>

<style>
  #image-frame {
    display: flex;
    justify-content: center;
    align-items: center;
  }
  img {
    max-width: 75%;
    max-height: 75%;
  }
</style>
