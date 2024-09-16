<div>
  <form action="{{ route('image.upload') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <input type="file" name="uploaded-image-file" id="image-input" accept="image/*">
      <button type="button" id="upload-button">Upload Image</button>
  </form>
</div>

<script>
  document.getElementById('image-input').addEventListener('change', function() {
      this.form.submit();
  });

  document.getElementById('upload-button').addEventListener('click', function() {
      document.getElementById('image-input').click();
  });

</script>

<style>
    button {
        background-color: #3490dc;
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 0.45rem;
        cursor: pointer;
    }
    button:hover {
        background-color: #2779bd;
    }
    button:active {
        background-color: #1c64a2;
    }
    input[type="file"] {
        display: none;
    }
</style>
