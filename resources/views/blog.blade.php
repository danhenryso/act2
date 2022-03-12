<h1>Enter Blog</h1>

<form action="blogs" method="GET">
    @csrf
    <input type="text" name="blog" placeholder="enter blog name"> <br>
    <input type="text" name="blogtext" placeholder="enter blog here"> <br>
    <button type="submit">Comit</button>
</form>