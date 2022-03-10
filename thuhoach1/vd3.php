<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        .book {
            padding: 20px 35px;
            background: #f1f1f1;
            margin-top:  5px;
        }
    </style>
    <script type="text/javascript" nonce="cb0ab9f8b1434dadb3b3d34a031" src="//local.adguard.org?ts=1645499249442&amp;type=content-script&amp;dmn=zalo-file-doc5.zdn.vn&amp;pth=%2F4a7f6ac080476f193656%2F8205487294833822098&amp;app=chrome.exe&amp;css=3&amp;js=1&amp;rel=1&amp;rji=1&amp;sbe=1&amp;stealth=1&amp;uag="></script>
    <script type="text/javascript" nonce="cb0ab9f8b1434dadb3b3d34a031" src="//local.adguard.org?ts=1645499249442&amp;name=Adguard%20Assistant%20Beta&amp;name=Popup%20Blocker%20by%20AdGuard%20%28Beta%29&amp;name=AdGuard%20Extra%20Beta&amp;name=Web%20of%20Trust%20Beta&amp;type=user-script"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        
        const api = 'https://6214bf8a89fad53b1f1d9106.mockapi.io/book/books';

        const removeBook = (id) => {
            $.ajax({
                url: api + '/' + id,
                type: 'DELETE',
                dataType: 'json',
                success: function(dataReturn) {
                    document.getElementById(id).style.display = 'none';
                }
            });
        }

        function F1() {
            //load, get, post
            $.ajax({
                url: api,
                type:'GET',
                dataType: 'json',
                success: function(dataReturn) {
                    console.log(dataReturn);
                    $.each(dataReturn, function(k, v) {
                        var s = `<div class="book" id="${v.id}" onClick="removeBook(${v.id})"> ${v.id} - ${v.name}<br> </div>`;
                        $('#result1').append(s);

                    });
                }

            });
        }
    </script>
</head>

<body>
    keyword <input type="text" id='kw'>
    <input type="button" value="Search" onclick="F1()">
    <div id=result1></div>
    <hr>

</body>

</html>