<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <style type="text/css">
        body {
            width: 90%;
            margin: 20px auto;
            font-family: arial;
        }

        table {
            border-collapse: collapse;
        }

        table td {
            font-size: 12px;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }

        .country_name-cell {
            width: 200px;
        }

        .code-cell-header {
            width: 50px;
            color: red;
        }

        .code-cell {
            width: 50px;
            color: red;
        }

        .code-cell:hover {
            width: 50px;
            color: red;
            text-decoration: underline;
            cursor: pointer;
        }



        .pop96-cell {
            text-align: right;
        }

        th {
            text-align: left;
        }
    </style>



    <table>
        <thead>
            <tr>
                <th class="country_name-cell">Id</th>
                <th class="country_name-cell">Country</th>
                <th class="country_name-cell">Title</th>
                <th class="country_name-cell">Description</th>
                <th class="country_name-cell">Company</th>
                <th class="code-cell-header"> Apply_link</th>
            </tr>
        </thead>
        <?php

        foreach ($listings as $listing) {

        ?>
            <tbody>
                <tr class="firstRow">
                    <td class="country_name-cell">{{$listing->id}}</td>
                    <td class="country_name-cell">{{ $listing->location }}</td>
                    <td class="country_name-cell">{{ $listing->title }}</td>
                    <span>
                        <td class="country_name-cell">{{ $listing->content }}</td>
                    </span>
                    <td class="country_name-cell">{{ $listing->company }}</td>
                    <td class="code-cell"> {{ $listing->apply_link}} </td>
                </tr>
                <tr>

            </tbody>
        <?php
        }
        ?>

</body>

</html>