<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Report</title>

    <style>
        .table {
            width: 100%;
            border-collapse: collapse;
        }


        .table thead th {
            background-color: #007bff;
            color: #fff;
            text-align: left;
            padding: 10px;
        }


        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }


        .table tbody td {
            padding: 10px;
        }

        .btn {
            padding: 5px 10px;
            margin-right: 5px;
        }

        .table {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Sl No</th>
                <th>Name</th>


            </tr>
        </thead>
        <tbody>
        @php
            $sl = 1
        @endphp
            @foreach ($chapters as $chapter)
                <tr>
                    <td>{{ $sl++ }}</td>
                    <td>{{ $chapter->name }}</td>

                </tr>
            @endforeach

        </tbody>
    </table>
</body>

</html>
