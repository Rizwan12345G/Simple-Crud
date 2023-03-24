<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body>


    <h1>MEMBERS DATA</h1>
    <table border="1">
        <tr>
            <td>id</td>
            <td>name</td>
            <td>address</td>
            <td>email</td>
            <td>pucture</td>
            <td>operations</td>

        </tr>
        @foreach ($members as $member)
            <tr>
                <td>{{ $member['id'] }}</td>
                <td>{{ $member['name'] }}</td>
                <td>{{ $member['address'] }}</td>
                <td>{{ $member['email'] }}</td>
                <td><img src="{{ asset('public/upload/' . $member->picture) }}" width="33px" height="33px"
                        alt=""></td>
                <td><a href={{ 'delete/' . $member['id'] }}><i class="fa fa-close"></i></a>
                    <a href={{ 'edit/' . $member['id'] }}> <i class="fa fa-edit"></i></a>
                </td>

            </tr>
        @endforeach

    </table>
    <div>
        {{ $members->links() }}
    </div>
    <style>
        .w-5 {
            display: none;
        }

        .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .modal img {
            max-width: 90%;
            max-height: 90%;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('.table-image').on('click', function() {
                var src = $(this).attr('src');
                var modal = $('<div class="modal"></div>');
                var img = $('<img src="' + src + '">');
                modal.append(img);
                $('body').append(modal);
            });

            $('body').on('click', '.modal', function() {
                $(this).remove();
            });
        });
    </script>
</body>

</html>
