<html>
<style>
    input[type=text], select {
        width: 70%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 70%;
        background-color: #89CFF0;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;

    }

    input[type=submit]:hover {
        background-color: #89CFF0;
    }

    div {
        border-radius: 5px;
        padding: 20px;
        margin: auto;
    }
    body{
        background-color: #f2f2f2;
    }
</style>
<body>
<div>
<h1>Filter Reviews</h1>
<form action="Challange.php" method="get">
    <label for="rating">Order by rating</label><br>
    <select name="rating">
        <option value="high">Highest First</option>
        <option value="low">Lowest First</option>
    </select><br>
    <label for="min_rating">Minimum rating:</label><br>
    <select name="min_rating">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select><br>
    <label for="date">Order by date:</label><br>
    <select name="date">
        <option value="old">Oldest First</option>
        <option value="new">Newest First</option>
    </select><br>
    <label for="text">Prioritize by text:</label><br>
    <select name="text">
        <option value="true">Yes</option>
        <option value="false">No</option>
    </select><br>

    <input type="submit">
</form>
</div>
</body>
</html>