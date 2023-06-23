<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tours</title>
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
        <!-- thêm tour -->
        <form action="{{route('addTour')}}" method="POST" id="adding" style="background-color: #89e52c;">
        @csrf
            <label for="destination">Nhập destination:</label><br>
            <input type="text" name="destination"><br>
            @error('destination')
                <p class="text-danger">{{$message}}</p>
            @enderror
            <label for="description">Nhập description:</label><br>
            <input type="text" name="description"><br>
            @error('description')
                <p class="text-danger">{{$message}}</p>
            @enderror
            <label for="price">Nhập price:</label><br>
            <input type="text" name="price"><br>
            @error('price')
                <p class="text-danger">{{$message}}</p>
            @enderror
            <label for="image">Hình ảnh:</label>
            <input type="file" name="image"><br>
            @error('image')
                <p class="text-danger">{{$message}}</p>
            @enderror
            <label for="start_date">Ngày khởi hành:</label>
            <input type="date" name="start_date"><br>
            @error('start_date')
                <p class="text-danger">{{$message}}</p>
            @enderror
            <label for="back_date">Ngày trở về:</label>
            <input type="date" name="back_date"><br>
            @error('back_date')
                <p class="text-danger">{{$message}}</p>
            @enderror
            <input type="submit" value="Thêm">
        </form>

        <form action="{{route('deleteTour')}}" id="deleting" method="POST" class="hidden" style="background-color: #e52c53;">
        @csrf
            <label for="tour_id">ID của tour cần xóa:</label><br>
            <input type="number" name="tour_id"><br>
            <input type="submit" value="Xóa">
        </form>

        <form action="{{route('updateTour')}}" id="editing" method="POST" class="hidden" style="background-color: #e0e51b;">
        @csrf
            <label for="tour_id">ID của tour cần sửa:</label><br>
            <input type="number" name="tour_id"><br>
            @error('tour_id')
                <p class="text-danger">{{$message}}</p>
            @enderror
            <label for="destination">Nhập destination:</label><br>
            <input type="text" name="destination"><br>
            @error('destination')
                <p class="text-danger">{{$message}}</p>
            @enderror
            <label for="description">Nhập description:</label><br>
            <input type="text" name="description"><br>
            @error('description')
                <p class="text-danger">{{$message}}</p>
            @enderror
            <label for="price">Nhập price:</label><br>
            <input type="text" name="price"><br>
            @error('price')
                <p class="text-danger">{{$message}}</p>
            @enderror
            <label for="image">Hình ảnh:</label>
            <input type="file" name="image"><br>
            @error('image')
                <p class="text-danger">{{$message}}</p>
            @enderror
            <label for="start_date">Ngày khởi hành:</label>
            <input type="date" name="start_date"><br>
            @error('start_date')
                <p class="text-danger">{{$message}}</p>
            @enderror
            <label for="back_date">Ngày trở về:</label>
            <input type="date" name="back_date"><br>
            @error('back_date')
                <p class="text-danger">{{$message}}</p>
            @enderror
            <input type="submit" value="Sửa">
        </form>

        <div>
            <table>
                <thead>
                    <h3>
                        Danh sách các Tour có trong Database
                    </h3>
                </thead>
                <tbody>
                    <tr>
                        <th>id</th>
                        <th>Destination</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Start date</th>
                        <th>Back date</th>
                        <th>Price</th>
                    </tr>
                    @foreach($tours as $tour)
                    <tr>
                        <td>{{ $tour->id }}</td>
                        <td>{{ $tour->destination }}</td>
                        <td>{{ $tour->description }}</td>
                        <td>
                            <img src="/front/images/tour_images/{{ $tour->image }}" 
                            style="
                            width:100px;
                            height:100px;
                            ">
                        </td>
                        <td>{{ $tour->start }}</td>
                        <td>{{ $tour->back }}</td>
                        <td>{{ $tour->price }}</td>
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