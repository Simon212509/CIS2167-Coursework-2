<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionnaire</title>
</head>
<body>
    <form action="/questionaire" method="POST">
        @csrf
        <!-- Add your questions here, following a similar structure -->
        <div>
            <label>Who won the English Premier League Last Year?</label><br>
            <input type="radio" name="answers[q1]" value="1"> Man Utd<br>
            <input type="radio" name="answers[q1]" value="2"> Man City<br>
            <input type="radio" name="answers[q1]" value="3"> Arsenal<br>
            <input type="radio" name="answers[q1]" value="4"> Wolverhampton<br>
        </div>
        <!-- Repeat for other questions -->

        <button type="submit">Submit</button>
    </form>
</body>
</html>
