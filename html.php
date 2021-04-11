<html>
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
</html>