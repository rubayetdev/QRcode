<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Table Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS for Table Example */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .table th,
        .table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .table th {
            background-color: #f0f0f0;
            font-weight: bold;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f9f9f9;
        }

        .table-striped tbody tr:hover {
            background-color: #e0e0e0;
        }

        /* Responsive table */
        @media (max-width: 767px) {
            .table-responsive {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                -ms-overflow-style: -ms-autohiding-scrollbar;
            }
        }

    </style>
</head>
<body>
<div class="container">
    <h1>Sample Table</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>IP Address</th>
            <th>Visit Count</th>
            <th>First Visit</th>
            <th>Return Time</th>
        </tr>
        </thead>
        <tbody>
        @foreach($visit as $vis)
        <tr>
            <td>{{$vis->ip_address}}</td>
            <td>{{$vis->visit_count}}</td>
            <td>{{$vis->created_at}}</td>
            <td>{{$vis->updated_at}}</td>
        </tr>
        @endforeach
        </tbody>
        {{ $visit->links() }}
    </table>
</div>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
