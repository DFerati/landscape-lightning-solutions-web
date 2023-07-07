<!-- resources/views/emails/lighting_project_inquiry.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Lighting Project Inquiry</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.5;
            background-color: #1f2937;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .card {
            border: 1px solid #718096;
            background-color: #2d3748;
            border-radius: 0.5rem;
            padding: 1rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        }

        h1 {
            color: #fff;
            text-align: center;
        }

        p {
            margin: 10px 0;
            color: #fff;
        }

        strong {
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>New Lighting Project Inquiry</h1>

    <div class="card">
        <p><strong>Name:</strong> {{ $data['name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
        <p><strong>City:</strong> {{ $data['city'] }}</p>
        <p><strong>State:</strong> {{ $data['state'] }}</p>
        <p><strong>Zip Code:</strong> {{ $data['zip'] }}</p>
        <p><strong>Type of Lighting:</strong> {{ $data['type'] }}</p>
        <p><strong>Description:</strong> {{ $data['description'] }}</p>
    </div>
</div>
</body>
</html>
