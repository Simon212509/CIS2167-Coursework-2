<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
</head>
<body>
    <h1>Results</h1>
    @foreach($answers as $question => $answer)
        <p>Question {{ $question }}: You answered: {{ $answer }}</p>
    @endforeach
</body>
</html>
