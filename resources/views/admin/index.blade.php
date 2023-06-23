<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/css/main.css">
</head>
<body>
    <nav class="dashboard_nav">
        <ul>
        <li>
                <a href="{{route('adminView')}}" style="padding:10px 30px;">Dashboard</a>
            </li>
            <li>
                <a href="{{route('adminUser')}}"> Users</a>
               
            </li>
            <li>
                <a href="{{route('adminTicket')}}">Tickets</a>
                
            </li>
            <li>
                <a href="{{route('adminTour')}}">Tours</a>
                
            </li>
            <li>
                <a href="{{route('adminBlog')}}">Blogs</a>
                
            </li>
            <li>
                <a href="{{route('adminContact')}}">Feedback</a>
                
            </li>
            <li>
                <a href="{{route('logout')}}">Logout</a>
            </li>
        </ul>
    </nav>
    <div class="content">
        <p>User: {{ $user_count }}</p>
        <p>Tickets: {{ $ticket_count }}</p>
        <p>Tours: {{ $tour_count }}</p>
        <p>Blogs: {{ $blog_count }}</p>
        <h3>Số lượng vé đã được đặt ở mỗi tour</h3>
        <table>
            <tr>
                <th>id</th>
                <th>Destination</th>
                <th>Số lượng vé được đặt</th>
            </tr>
            @foreach($tour_tickets as $tour_ticket)
            <tr>
                <td>{{ $tour_ticket->id }}</td>
                <td>{{ $tour_ticket->destination }}</td>
                <td class="text-center">{{ $tour_ticket->sl_ticket }}</td>
            </tr>
            @endforeach
        </table>
    </div>
    <x-flash-message/>
    
    <script src="https://kit.fontawesome.com/b479d3cb73.js" crossorigin="anonymous"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>