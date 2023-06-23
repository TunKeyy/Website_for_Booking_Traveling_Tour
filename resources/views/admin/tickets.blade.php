<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets</title>
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
        <!-- các nút để thực hiện các lệnh thêm xóa sửa -->
        <input type="radio" name="form_action" onclick="showAction('them')" value="adding" checked>Thêm</input>
        <input type="radio" name="form_action" onclick="showAction('xoa')" value="deleting">Xóa</input>
        <input type="radio" name="form_action" onclick="showAction('sua')" value="editing">Sửa</input>


        <!-- các form để gửi yêu cầu các lệnh trên -->
        <!-- thêm user -->
        <form action="{{route('addTicket')}}" method="POST" id="adding" style="background-color: #89e52c;">
        @csrf
            <label for="tour_id">Nhập tour id:</label><br>
            <input type="text" name="tour_id"><br>
            <label for="user_id">Nhập user id:</label><br>
            <input type="text" name="user_id"><br>
            <label for="place_start">Nhập place start:</label><br>
            <input type="text" name="place_start"><br>
            <input type="submit" value="Thêm">
        </form>

        <form action="{{route('deleteTicket')}}" method="POST" id="deleting" class="hidden" style="background-color: #e52c53;">
        @csrf
            <label for="ticket_id">ID của ticket cần xóa:</label><br>
            <input type="number" name="ticket_id"><br>
            <input type="submit" value="Xóa">
        </form>

        <form action="{{route('updateTicket')}}" method="POST" id="editing" class="hidden" style="background-color: #e0e51b;">
        @csrf
            <label for="ticket_id">ID của ticket cần sửa:</label><br>
            <input type="number" name="ticket_id"><br>
            <label for="tour_id">Nhập tour id:</label><br>
            <input type="text" name="tour_id"><br>
            <label for="user_id">Nhập user id:</label><br>
            <input type="text" name="user_id"><br>
            <label for="place_start">Nhập place start:</label><br>
            <input type="text" name="place_start"><br>
            <input type="submit" value="Sửa">
        </form>

        <div>
            <table>
                <thead>
                    <h3>
                        Danh sách Tickets
                    </h3>
                </thead>
                <tbody>
                    <tr>
                        <th>id</th>
                        <th>Tour id</th>
                        <th>User id</th>
                        <th>Place start</th>
                    </tr>
                    @foreach($tickets as $ticket)
                    <tr>
                        <td>{{ $ticket->id }}</td>
                        <td>{{ $ticket->tour_id }}</td>
                        <td>{{ $ticket->user_id }}</td>
                        <td>{{ $ticket->place_start }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <x-flash-message/>

    <script src="/assets/js/main.js"></script>
    
    <script src="https://kit.fontawesome.com/b479d3cb73.js" crossorigin="anonymous"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>