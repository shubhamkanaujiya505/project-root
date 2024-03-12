<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COdeignitor</title>
</head>

<body>
    <h4>{name}</h4>
    <h4>{age}</h4>
    <h4>{city}</h4>
    <h1>Subjet List</h1>
    {subjects_list}
   <h4> {subject}</h4>
    {abbr}
    {/subjects_list}

    {if ($status)}
    <p>this is else condition</p>
    {endif}
    

</body>

</html>