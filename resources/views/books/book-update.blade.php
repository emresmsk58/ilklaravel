<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Form Page</title>
    <style>
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
        }

        .panel-heading {
            font-size: 24px;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .panel-body {
            margin-bottom: 10px;
        }

        table {
            width: 50%;
            border-collapse: collapse;
            margin-bottom: 20px;
            left: 100px;
        }

        table, th, td {
            border: 1px solid #ddd;
            left: 10px;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        input[type="text"], input[type="number"], input[type="date"] {
            width: 50%;
            padding: 10px;
            margin: 5px 0 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="panel panel-default">
    <div class="panel-heading">UPDATE BOOK</div>
    <div class="panel-body">
        <form action="{{route('books.book-update',$book->id)}}" method="POST">
            @csrf
            @method('PUT')
            <table>
                <tr>
                    <td>Title</td>
                    <td><input type="text" name="title" value="{{$book->title}}" required/></td>
                </tr>
                <tr>
                    <td>Number of Pages</td>
                    <td><input type="number" name="number_of_pages" value="{{$book->number_of_pages}}" required/>
                    </td>
                </tr>
                <tr>
                    <td>Release Date</td>
                    <td><input type="date" name="release_date" value="{{$book->release_date}}" required/></td>
                </tr>
                <tr>
                    <td>
                        <button type="submit">Update</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
</div>
@if (\Session::has('message'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('message') !!}</li>
        </ul>
    </div>
@endif
</body>
</html>