<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    


<a href="/" style="display:inline-block; margin-bottom: 20px;">Back to listings</a>

<h1>{{ $listing->title }}</h1>

<p>
    <strong>Company:</strong> {{ $listing->company }}
</p>

<p>
    <strong>Location:</strong> {{ $listing->location }}
</p>

<hr>

<h3>Job Description</h3>
<p>
    {{ $listing->description }}
</p>




















</body>
</html>