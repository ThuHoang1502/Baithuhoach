<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        var x1= '{"a":10, "b":"Nam 2022"}';
        var o1 = JSON.parse(x1);
        alert(o1.b);

        var x2 = '{"ten":"Nguyen Van A","ngaysinh":{"ngay":2, "thang":4, "nam":1999}}';
        var o2 = JSON.parse(x2);

        var x3 = '{"lop":"D18", "dssv":[{"id":1, "ten":"A", "namsinh":2000}, {"id":2, "ten":"B", "namsinh":2001}]}';
        var o3 = JSON.parse(x3);
        console.log(o3);
        
        var x3String = JSON.stringify(o3);
        alert(x3String);
    </script>
</head>
<body>
    
</body>
</html>