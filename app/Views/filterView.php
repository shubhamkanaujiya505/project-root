<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
       <h1>{name | limit_chars(3) }</h1> 
       <p> {age}</p> 
       <p>{city|upper}</p>  
       <!-- <p>DOB: {date | date(Y-m-d)}</p> -->
       <p>DOB: {date | date(l dS F Y)}</p>
       <p>DOB: {date |date_modify(+5days) | date(l dS F Y)}</p>
       <p>Price: {price | local_currency(INR)}</p>
    </div>  
</body>
</html>