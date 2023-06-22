<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example Laravel Site - Gallery</title>
</head>
<body>
    <x-header />

    @foreach ($images as $image)
    <img src="<?php echo $image->file_path; ?>">
    @endforeach

    {{ $images->links('components.paginator') }}

</body>
</html>