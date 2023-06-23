<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  \Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('blogs')->insert([
            [
                'id' => 1,
                'title' => 'Kinh nghiệm du lịch Ladakh bằng xe máy của travel blogger Tuân Cuồng Chân',
                'description' => 'Bài viết này chia sẻ trên kinh nghiệm, và trải nghiệm của bản thân. Đặc biệt đến từ 1 thằng chưa bao giờ chạy tay côn và phân khối lớn. Các bạn chỉ nên tham khảo và tổng hợp thêm nhiều người khác và điều đặc biệt hãy chuẩn bị thật kỹ những cái có thể chuẩn bị. Sau đó qua thực tế ở Ladakh mới quyết định được: thuê xe gì và chạy cung nào, chạy ra làm sao. Vì trước khi đi mình cũng search thông tin rồi đi pm từng người để hỏi. Cuối cùng lúc mình qua thì lại đi 1 hướng chả liên quan gì với ban đầu mình suy nghĩ.',
		    'image' =>'blog1.jpg',
		     'date_post' => '08/11/2022'
            ],
           [
                'id' => 2,
                'title' => 'Kinh nghiệm đi du lịch Ấn Độ lần đầu sao cho an toàn nhiều trải nghiệm',
                'description' => 'Ấn Độ là một quốc gia mình muốn tới từ rất lâu, đặc biệt sau chuyến đi ở Bhutan vs Nepal càng thôi thúc mình muốn đi. Đặc biệt là vùng đất Ladakh một nơi rất thích hợp để chạy xe máy dưới dãy núi Himalaya. Cuối cùng thì mong ước đó cũng đã trở thành hiện thực với gần 1 tuần chạy xe máy ở Ladakh và 3 ngày ở New Delhi. Xin tổng hợp lại thành 1 bài kinh nghiệm của bạn thân lần đầu đi Ấn cho các bạn xem nhé.',
		    'image' =>'blog2.jpg',
		     'date_post' => '30/10/2022'
            ],
           [
                'id' => 3,
                'title' => 'Mũi Nghê Đà Nẵng cực đông của thành phố đáng sống',
                'description' => 'Mũi Nghê được xe là cực đông của Đà Nẵng, nơi đón ánh nắng mặt trời đầu tiên của thành phố đáng sống nhất Việt Nam. Từng chỉ là địa điểm dành cho dân câu nhưng giờ lại thành 1 điểm hot.',
		    'image' =>'blog3.jpg',
		     'date_post' => '28/10/2022'
            ],
           [
                'id' => 4,
                'title' => 'Top 30 khách sạn Phú Quốc dưới 1 triệu',
                'description' => 'Thiên đường biển đảo Phú Quốc luôn chào đón du khách tứ phương đến để thưởng thức vẻ đẹp của biển cả, nắng gió của đất trời và sự hoang dã của thiên nhiên. Bạn đã và đang lên kế hoạch cho chuyến đi sắp tới chưa? Top 30 khách sạn Phú Quốc dưới 1 triệu sẽ là cẩm nang hay ho dành cho bạn.',
		    'image' =>'blog4.jpg',
		     'date_post' => '04/12/2021'
            ],
           [
                'id' => 5,
                'title' => 'Khám phá top 30 homestay ở Phú Quốc',
                'description' => 'Thiên đường biển đảo Phú Quốc luôn là điểm đến lý tưởng cho những giây phút nghỉ ngơi. Bên cạnh những điểm du lịch tuyệt vời, thiên nhiên hữu tình thì nơi dừng chân đóng vai trò vô cùng quan trọng. Ngoài các khách sạn, resort cao cấp thì homestay là mô hình được ưa chuộng nhất. Cùng điểm qua top 30 homestay ở Phú Quốc cho chuyến đi hấp dẫn sắp tới nhé.',
		    'image' =>'blog5.jpg',
		     'date_post' => '03/12/2021'
            ],
           [
                'id' => 6,
                'title' => 'Top 10 bãi biển đẹp nhất Phú Quốc',
                'description' => 'Phú Quốc được ví như một thiên đường biển đảo đẹp nhất Việt Nam. Ngoài việc sở hữu vẻ đẹp của thiên nhiên, không khí của đất trời, Phú Quốc còn được mẹ thiên nhiên ưu ái trao tặng những bãi biển cực đẹp với làn nước trong veo, xanh ngát. Lưu lại top 10 bãi biển đẹp nhất Phú Quốc bên dưới để vi vu cùng gia đình, bạn bè.',
		    'image' =>'blog6.jpg',
		     'date_post' => '28/11/2021'
            ],
           [
                'id' => 7,
                'title' => 'Bộ ảnh những câu nói hay về du lịch',
                'description' => 'Nếu bạn cần những mẫu câu tham khảo để viết status hay khi đăng ảnh du lịch và những status này deep deep xíu để câu like thì có thể xem những câu nói huyền thoại bên dưới nhé. Đây chỉ là bộ ảnh vui mà mình muốn sưu tầm những câu nói rồi ghép vào những bức hình mình đã từng đi.',
		    'image' =>'blog7.jpg',
		     'date_post' => '04/09/2015'
            ],
           [
                'id' => 8,
                'title' => 'Đến Huế uống bia “của Huế” – Phần 1',
                'description' => 'Đối với người dân Việt Nam thì Huế không còn quá xa lạ với những địa danh nổi tiếng như cầu Trường Tiền, chợ Đông ba, chùa Thiên Mụ, Lăng Tự Đức, Thành Nội. Đối với những ai yêu thiên nhiên cũng có thể đến tham qua Phá Tam Giang, Đầm Lập An hay xa hơi 1 xíu là Vịnh Lăng Cô.',
		    'image' =>'blog8.jpg',
		     'date_post' => '08/07/2017'
            ],
           [
                'id' => 9,
                'title' => 'Blog full lịch trình 24h du lich Ninh Bình',
                'description' => 'Tớ là Tuân, có xu hướng đẹp trai dần lên, thích long nhong vs viết lách chém gió, là người hay cười, hay hát nhưng không phải khùng. Tất cả bài viết trên blog Cuồng Chân đều do tớ hoặc người khác đi rồi chia sẻ lại, với tính chất tham khảo. Các bạn nên tìm hiểu từ nhiều nơi để có chuyến đi tốt đẹp.',
		    'image' =>'blog9.jpg',
		     'date_post' => '24/01/2021'
            ],

        ]);

        DB::table('tours')->insert([
            [
                'id' => 1,
                'destination' => 'Nha Trang',
                'description' => 'Tọa lạc dọc theo bờ biển, Regalia Nha Trang cung cấp chỗ nghỉ hiện đại và trang nhã với Wi-Fi miễn phí trong toàn bộ khuôn viên.',
                'image' => 'nha-trang.jpg',
                'start_date' => '2022/1/1',
                'back_date' => '2022/1/10',
                'price' => 20000000
            ],
            [
                'id' => 2,
                'destination' => 'Vũng Tàu',
                'description' => 'Địa điểm du lịch miền Nam Vũng Tàu có bờ biển trải dài, cảnh quan đẹp, cùng nhiều địa danh chứa đựng giá trị văn hóa, lịch sử to lớn, trở thành điểm đến yêu thích của khách du lịch tứ phương. Đến với thành phố biển này, bạn không chỉ được tắm mát, tham gia nhiều hoạt động thể thao trên biển thú vị, mà còn được chiêm ngưỡng cảnh quan đẹp của bãi Trước, bãi Sau, Côn Đảo,...',
                'image' => 'vung-tau.jpg',
                'start_date' => '2022/2/1',
                'back_date' => '2022/2/10',
                'price' => 20000000
            ],
		    [
                'id' => 3,
                'destination' => 'Phú Quốc',
                'description' => 'Phú Quốc là điểm nghỉ dưỡng, tham quan, và khám phá sinh thái tuyệt vời. Mũi Ông Đội, Đá Chào là thế giới san hô và cá biển sặc sỡ. Bãi Sao cát trắng mịn, dáng cong, nước xanh ngọc bích. Đặc sản danh tiếng cả nước là tiêu sọ, nước mắm, rượu sim, ngọc trai. Phú Quốc thực sự là một viên ngọc quý trên bản đồ Việt Nam.',
                'image' => 'phu-quoc.jpg',
                'start_date' => '2022/3/1',
                'back_date' => '2022/3/10',
                'price' => 10000000
            ],
		    [
                'id' => 4,
                'destination' => 'Huế',
                'description' => 'Tour city Huế đem lại nhiều trải nghiệm thú vị. Tìm hiểu về lịch sử dưới 13 triều đại phong kiến. tại Đại Nội Huế. các lăng mộ của Minh Mạng – Khải Định . Các làng nghề truyền thống. như làng nón. làng hương và thưởng thức ẩm thực. mang đậm phong cách cung đình Huế.',
                'image' => 'hue.jpg',
                'start_date' => '2022/4/1',
                'back_date' => '2022/4/10',
                'price' => 15000000
            ],
		    [
                'id' => 5,
                'destination' => 'Đà Nẵng',
                'description' => 'Được mệnh danh là "thành phố đáng đến" với dòng sông Hàn thơ mộng với cây cầu Rồng biểu tượng của Thành phố biển du lịch Đà Nẵng - nơi mà quý khách có thể cảm nhận được sự pha trộn giữa khí hậu miền Bắc, miền Nam.Ngoài ra Đà Nẵng còn sở hữu nhiều danh lam thắng cảnh làm say lòng người như: Bà Nà Hills, Bán Đảo Sơn Trà, Ngũ Hành Sơn, Đà Nẵng, phố cổ Hội An…. Tour du lịch Đà Nẵng sẽ đưa quý khách khám phá bãi biển được Forbes lựa chọn là bãi biển quyến rũ nhất hành tinh với bờ biển dài,làn nước trong xanh, không khí mát mẻ …',
                'image' => 'da-nang.jpg',
                'start_date' => '2022/5/1',
                'back_date' => '2022/5/10',
                'price' => 17000000
            ],
		    [
                'id' => 6,
                'destination' => 'Hội An',
                'description' => 'Hội An là một trong những điểm đến hàng đầu của miền Trung với nhiều thắng cảnh đẹp cùng nền ẩm thực độc đáo. Du lịch Hội An, du khách có dịp chiêm ngưỡng những di sản kiến trúc độc đáo có từ hàng trăm năm trước như các ngôi nhà cổ, bảo tàng, chùa chiền,...',
                'image' => 'hoi-an.jpg',
                'start_date' => '2022/6/1',
                'back_date' => '2022/6/10',
                'price' => 18000000
            ],
		    [
                'id' => 7,
                'destination' => 'Hạ Long',
                'description' => 'Du lịch Hạ Long - 1 trong 7 kỳ quan thiên nhiên thế giới, du khách sẽ được khám phá nhiều hang động độc đáo, các hòn đảo tuyệt đẹp như đảo Mắt Rồng, Ngọc Vừng, hòn Con Cóc,... Cùng với cảnh đẹp, nơi đây còn có nhiều món đặc sản thơm ngon như chả mực, sá sùng, hàu nướng, chả rươi, sam biển,...',
                'image' => 'ha-long.jpg',
                'start_date' => '2022/7/1',
                'back_date' => '2022/7/10',
                'price' => 25000000
            ],
		    [
                'id' => 8,
                'destination' => 'Thành phố Hồ Chí Minh',
                'description' => 'Thành phố Hồ Chí Minh - thành phố năng động bậc nhất nước ta, nơi hội tụ, giao lưu văn hóa, ẩm thực của các vùng miền trên khắp cả nước là điểm đến hấp dẫn mà bạn nên đặt chân đến một lần trong đời. Nơi đây với nhiều địa điểm tham quan, khu du lịch, điểm vui chơi hấp dẫn đang chờ đón bạn. ',
                'image' => 'thanh-pho-ho-chi-minh.jpg',
                'start_date' => '2022/8/1',
                'back_date' => '2022/8/10',
                'price' => 35000000
            ],
		    [
                'id' => 9,
                'destination' => 'Quảng Bình',
                'description' => 'Nằm ở vùng duyên hải miền Trung, Quảng Bình là địa đến thú vị với bãi biển hoang sơ, hang động độc đáo, núi sông hùng vĩ cùng nhiều món đặc sản thơm ngon. Du lịch Quảng Bình, du khách sẽ được khám phá quần thể hang động Phong Nha - Kẻ Bàng, một trong những di sản thiên nhiên thế giới.',
                'image' => 'quang-binh.jpg',
                'start_date' => '2022/9/1',
                'back_date' => '2022/9/10',
                'price' => 15000000
            ],
		    [
                'id' => 10,
                'destination' => 'Thanh Hóa',
                'description' => 'Thanh Hóa được xem là điểm nối của 2 miền Bắc - Trung bộ nước ta. Nơi đây có vô vàn điểm du lịch Thanh Hóa hấp dẫn như biển Sầm Sơn, Hải Tiến, Pù Luông, thành nhà Hồ, khu di tích Lam Kinh, thác Voi, khu du lịch Bến En, đảo Hòn Mê,... ',
                'image' => 'thanh-hoa.jpg',
                'start_date' => '2022/10/1',
                'back_date' => '2022/10/10',
                'price' => 17000000
            ],
		    [
                'id' => 11,
                'destination' => 'Cần Thơ',
                'description' => 'Cần Thơ là một trong những điểm du lịch miền Tây Nam Bộ hấp dẫn hàng đầu. Các địa điểm du lịch Cần Thơ nổi tiếng phải kể đến như  bến Ninh Kiều, chợ Đêm, đảo ngọt Cù Lao, nhà cổ Bình Thủy,...',
                'image' => 'can-tho.jpg',
                'start_date' => '2022/11/1',
                'back_date' => '2022/11/10',
                'price' => 21000000
            ],
		    [
                'id' => 12,
                'destination' => 'Hà Nội',
                'description' => 'Thủ đô Hà Nội ngàn năm văn hiến là một trong những nơi mà bất kỳ người Việt Nam nào cũng muốn được đặt chân đến một lần trong đời. Du lịch Thủ đô, du khách sẽ được ghé thăm những điểm tham quan nổi tiếng như Quảng trường Ba Đình, Văn Miếu Quốc Tử Giám, chùa Trấn Quốc,... hay chiêm ngưỡng cảnh đẹp Hồ Tây, Hồ Gươm, Hoàng thành Thăng Long,... Bên cạnh đó, du khách còn được nếm thử nhiều món ngon đặc sắc như cốm làng Vòng, bún chả, phở, nem chua rán,...',
                'image' => 'ha-noi.jpg',
                'start_date' => '2022/12/1',
                'back_date' => '2022/12/10',
                'price' => 230000000
            ],
        ]);

        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Admin UIT',
                'email' => 'admin@gmail.com',
                'level' => 1,
                'password' => '123456789',
                'phone_number' => '0123456789'
            ]
            ]);
            
    }
}
