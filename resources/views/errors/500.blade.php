<!DOCTYPE html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<html>
<head>
    <div class="col-md-12">
        <h1>The Page You Have Requested Is Not Available. (500 - Internal Server Error)</h1>
    </div>
</head>

<body>

<div class="col-md-12">
    <h6>Click on one of the buttons to go back or to the home page.</h6>
</div>

<br>

<script>
    function goBack()
    {
        window.history.back()
    }
</script>

<table class="table is-fullwidth">
    <tr>
        <th style="width: 10%"></th>
        <th style="width: 10%"></th>
    </tr>

    <button onclick="goBack()">back to a previous page</button>

    <form method="get" style="margin-right: 16px" action="/">
        <button type="submit">Go to the Home page</button>
    </form>

</table>

<div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
        <label>Try Searching for your page here:</label>
        <input placeholder="Search..."></input>
        <button>Go</button>
    </div>
    <div class="col-md-2">
    </div>
</div>

</body>

</html>
