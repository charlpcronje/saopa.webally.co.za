{{-- resources/views/application.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application</title>
    <style>
        /* Reset margins and paddings */
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden; /* Hide overflow to prevent scrollbars if the image is tall */
        }

        /* Container for the image with top alignment */
        .image-container {
            display: flex;
            justify-content: center; /* Center horizontally */
            border-left: 1px solid #CCCCCC;
            border-right: 1px solid #CCCCCC;
            margin-top: 0; /* No margin at the top */
        }

        /* Responsive image styling */
        img {
            display: block; /* Remove default inline properties */
            max-width: 100%; /* Limit the image width to the viewport width */
            height: auto; /* Maintain aspect ratio */
            border-left:1px solid #CCC;
            border-right:1px solid #CCC;
        }
    </style>
</head>
<body>
    <div class="image-container">
        <img src="{{ asset('images/application.jpg') }}" alt="Application Image" style="width: 1217px;">
    </div>
</body>
</html>
