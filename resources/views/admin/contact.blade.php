<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
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
        <input type="radio" name="form_action" onclick="showAction('xoa')" value="deleting">Xóa</input>


        <!-- các form để gửi yêu cầu các lệnh trên -->
        <!-- thêm user -->
        
        @if(Session::has('thanhcong'))
                <script>alert("Xóa feedback thành công!")</script>
                @endif
        <form action="/admin/contact" id="deleting" class="hidden" style="background-color: #e52c53;" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">

            <label for="contact_id">ID của Feedback cần xóa:</label><br>
            <input type="number" name="contact_id"><br>
            <input type="submit" value="Xóa">
        </form>


        <div>
            <table>
                <thead>
                    <h3>
                        Danh sách các Feedback của khách hàng
                    </h3>
                </thead>
                <tbody>
                    <tr>
                        <th>Id</th>
                        <th>Tên khách hàng</th>
                        <th>Email</th>
                        <th>Tiêu đề</th>
                        <th>Nội dung</th>
                    </tr>
                    @foreach($contacts as $contact)
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->sender_name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->title }}</td>
                        <td>{{ $contact->content }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <x-flash-message/>

    <script>
var del = document.getElementById('deleting')
function showAction(action)
{
    
    if (action == "xoa")
    {
        del.setAttribute('class','show')

    }
    
}

    </script>
    
    <script src="https://kit.fontawesome.com/b479d3cb73.js" crossorigin="anonymous"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>