<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Surveys</title>
</head>
<body>
    <h1>Upload Survey</h1>
    <form action="/submit_survey" method="post">
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" required><br><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description" required></textarea><br><br>

        <label for="category">Category:</label><br>
        <input type="text" id="category" name="category" required><br><br>

        <label for="questions">Questions:</label><br>
        <textarea id="questions" name="questions" required></textarea><br><br>

        <label for="time_limit">Time Limit (in minutes):</label><br>
        <input type="number" id="time_limit" name="time_limit" required><br><br>

        <label for="rewards">Rewards:</label><br>
        <input type="text" id="rewards" name="rewards" required><br><br>

        <input type="submit" value="Upload Survey">
    </form>
</body>
</html>