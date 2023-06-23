<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
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
        <form action="{{ route('addBlog') }}" method="POST" id="adding" style="background-color: #89e52c;">
        @csrf
            <label for="title">Nhập tiêu đề:</label><br>
            <input type="text" name="title"><br>
            <label for="image">Hình ảnh:</label>
            <input type="file" name="image"><br>
            <label for="description">Nhập nội dung:</label><br>
            <textarea name="description" id="blog_content" cols="50" rows="10"></textarea><br>
            <input type="submit" value="Thêm">
        </form>

        <form action="{{route('deleteBlog')}}" method="POST" id="deleting" class="hidden" style="background-color: #e52c53;">
        @csrf
            <label for="blog_id">ID của blog cần xóa:</label><br>
            <input type="number" name="blog_id"><br>
            <input type="submit" value="Xóa">
        </form>

        <form action="{{route('updateBlog')}}" id="editing" method="POST" class="hidden" style="background-color: #e0e51b;">
        @csrf
            <label for="blog_id">ID của blog cần sửa:</label><br>
            <input type="number" name="blog_id"><br>
            <label for="title">Nhập tiêu đề:</label><br>
            <input type="text" name="title"><br>
            <label for="image">Hình ảnh:</label>
            <input type="file" name="image"><br>
            <label for="content">Nhập nội dung:</label><br>
            <textarea name="content" id="blog_content" cols="50" rows="10"></textarea><br>
            <input type="submit" value="Sửa">
        </form>

        <div>
            <table>
                <thead>
                    <h3>
                        Danh sách các Blogs
                    </h3>
                </thead>
                <tbody>
                    <tr>
                        <th>id</th>
                        <th>title</th>
                        <th>desc</th>
                        <th>image</th>
                        <th>date post</th>
                    </tr>
                    @foreach($blogs as $blog)
                    <tr>
                        <td>{{ $blog->id }}</td>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->desc }}</td>
                        <td>
                            <img src="/front/images/blog_images/{{ $blog->image }}" 
                            style="
                            width:100px;
                            height:100px;
                            ">
                        </td>
                        <td>{{ $blog->date_post }}</td>
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