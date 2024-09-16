<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Image Editor</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://cdn.tailwindcss.com'></script>
</head>
<body>
    <h1 class='text-2xl font-bold text-center'>Image Editor</h1>
    <div id="container">
        <div>
            <x-image-frame />
            <x-input-button />
        </div>
        <div>
            
            <x-slider-edit label="Rotate" name="rotate" min="-180" max="180" step="1" value="0" />
        </div>
    </div>
</body>
</html>

<style>
    #container {
        display: flex;
        justify-content: space-around;
        margin-top: 20px;
    }
</style>