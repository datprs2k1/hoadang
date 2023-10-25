<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET FOREIGN_KEY_CHECKS = 0");

        $data = [
            [
                "question" => "Võ lâm truyền kỳ ra mắt hệ thống bang hội thời gian nào?",
                "answer" => "21-01-2008"
            ],
            [
                "question" => "Mật Tịch nào giúp ta tăng điểm tiềm năng?",
                "answer" => "Tẩy Tủy Kinh"
            ],
            [
                "question" => "Tử Thủy Tinh có chức năng gì?",
                "answer" => "Nâng Cấp Trang Bị"
            ],
            [
                "question" => "Ngựa Hoa Lư[Cấp 9] được bán ở thành nào?",
                "answer" => "Dương Châu"
            ],
            [
                "question" => "Khi rút 10 điểm phúc duyên ở thần bí thương nhân ta mất mấy điểm?",
                "answer" => "12"
            ],
            [
                "question" => "Ngựa nào sau đây có \"Tốc độ di chuyễn 40%\"?",
                "answer" => "Ngọc Hoa Thông"
            ],
            [
                "question" => "Sau khi online mấy giờ thì người chơi mới nhận được điểm phúc duyên?",
                "answer" => "2 giờ"
            ],
            [
                "question" => "Một ngày có thể đánh mấy trận Tống-Kim?",
                "answer" => "7"
            ],
            [
                "question" => "Dã Tẩu có tối đa bao nhiêu nhiệm vụ?",
                "answer" => "12"
            ],
            [
                "question" => "Sinh nhật võ lâm vào ngày, tháng nào?",
                "answer" => "15-6"
            ],
            [
                "question" => "Có bao nhiêu trường phái chuyên về kiếm trong võ lâm?",
                "answer" => "3"
            ],
            [
                "question" => "Nhiệm vụ Boss Sát thủ \"Liên Hình Thái\" nằm ở map nào?",
                "answer" => "Trường Bạch Nam"
            ],
            [
                "question" => "Muốn hợp thành sát thủ giản tốn bao nhiêu sát thủ lệnh?",
                "answer" => "5"
            ],
            [
                "question" => "Trong phiên bản Phong Hỏa Liên Thành, 1 ngày bạn có thể đi mấy lần \"thử luyện sát thủ\"?",
                "answer" => "2"
            ],
            [
                "question" => "Từ Đại Lý bạn có thể đi vào nơi tín sứ nào?",
                "answer" => "Cả 3 nơi"
            ],
            [
                "question" => "Tam Hoa Tán có tác dụng gì?",
                "answer" => "giải độc"
            ],
            [
                "question" => "Thừa Tiên Mật có tác dụng gì?",
                "answer" => "tăng sinh lực và nội lực"
            ],
            [
                "question" => "Có bao nhiêu loại dược hoàn PK?",
                "answer" => "10"
            ],
            [
                "question" => "Long Môn Trấn lưu rương ở thành nào?",
                "answer" => "Biện Kinh"
            ],
            [
                "question" => "Đi xa phu từ Vĩnh Lạc Trấn lên Phượng Tường tốn nhiêu lượng?",
                "answer" => "100"
            ],
            [
                "question" => "Người chơi trên đẳng cấp 25 nhận sư phụ thì được goi là?",
                "answer" => "trực hệ đệ tử"
            ],
            [
                "question" => "Quỷ Đầu Đao là vũ khí cấp mấy?",
                "answer" => "3"
            ],
            [
                "question" => "Vương Thiết Tượng là thợ rèn thành nào?",
                "answer" => "Biện Kinh"
            ],
            [
                "question" => "Muốn đổi Tín Sứ Lệnh Bài Bạc Tốn nhiêu điểm tín sứ?",
                "answer" => "450"
            ],
            [
                "question" => "Quế Hoa Tửu có hiệu lực trong bao lâu?",
                "answer" => "1800s"
            ],
            [
                "question" => "Trận Tống Kim thứ tư trong ngày bắt đầu lúc mấy giờ?",
                "answer" => "17h30"
            ],
            [
                "question" => "Võ lâm truyền kỳ có tổng cộng bao nhiêu thôn trấn?",
                "answer" => "10"
            ],
            [
                "question" => "Sinh nhật võ lâm truyền kỳ vào tháng mấy?",
                "answer" => "6"
            ],
            [
                "question" => "Võ lâm truyền kỳ có tổng cộng bao nhiêu Dã Tẩu?",
                "answer" => "15"
            ],
            [
                "question" => "Bạn cần gặp ai để kết bái kim lan?",
                "answer" => "Tĩnh đốc thiền sư"
            ],
            [
                "question" => "Thiếu Lâm Tự tọa lạc ở ngọn núi nào?",
                "answer" => "Thiếu thất"
            ],
            [
                "question" => "Bang hội nào đoạt hạng 4 ở giải THDNB lần 1?",
                "answer" => "PhúHộ (Thiên Sơn)"
            ],
            [
                "question" => "Bang hội nào đoạt hạng 4 ở giải THDNB lần 2?",
                "answer" => "PhúHộ (Thiên Sơn)"
            ],
            [
                "question" => "Bang hội nào đoạt hạng 2 ở giải THDNB lần 1?",
                "answer" => "HồngHưng (Kim Sơn)"
            ],
            [
                "question" => "Bang hội nào đoạt hạng 1 ở giải THDNB lần 2?",
                "answer" => "*** (Khánh Sơn)"
            ],
            [
                "question" => "Trong võ lâm truyền kỳ bang hội nào được lập ra đầu tiên?",
                "answer" => "Phá Thiên (Tung Sơn)"
            ],
            [
                "question" => "Võ lâm truyền kỳ có tối đa bao nhiêu kênh tán gẫu ?",
                "answer" => "8"
            ],
            [
                "question" => "Bang hội nào đoạt hạng 1 ở giải THDNB lần 1?",
                "answer" => "TrgGiang-TrườngGiang"
            ],
            [
                "question" => "Bang hội nào đoạt hạng 2 ở giải THDNB lần 2?",
                "answer" => "TamHoàng-Hành Sơn"
            ],
            [
                "question" => "Điểm danh vọng có bao nhiêu đẳng cấp?",
                "answer" => "8"
            ],
            [
                "question" => "Võ lâm truyền kỳ có bao nhiêu NPC Long Ngũ?",
                "answer" => "8"
            ],
            [
                "question" => "Võ lâm truyền kỳ hiện tại có bao nhiêu phương thức liên đấu?",
                "answer" => "6"
            ],
            [
                "question" => "Tăng một điểm sinh khí của hệ Kim được bao nhiêu sinh lực?",
                "answer" => "8"
            ],
            [
                "question" => "Tăng một điểm sinh khí của hệ Mộc được bao nhiêu sinh lực?",
                "answer" => "5"
            ],
            [
                "question" => "Tăng một điểm sinh khí của hệ Hỏa được bao nhiêu sinh lực?",
                "answer" => "7"
            ],
            [
                "question" => "Tăng một điểm sinh khí của hệ thủy được bao nhiêu sinh lực?",
                "answer" => "6"
            ],
            [
                "question" => "Tăng một điểm sinh khí của hệ thổ được bao nhiêu sinh lực?",
                "answer" => "3"
            ],
            [
                "question" => "Ăn Thiên Sơn Tuyết Liên sẽ được khoảng bao nhiêu điểm kinh nghiệm?",
                "answer" => "1,4 tỷ-1,5 tỷ"
            ],
            [
                "question" => "Để có được 2 cặp sư đồ thì 4 người cần ít nhất bao nhiêu Sư Đồ Thiếp?",
                "answer" => "1"
            ],
            [
                "question" => "Tổng số boss tiểu HK cộng với tổng số môn phái toàn nữ giới bằng bao nhiêu?",
                "answer" => "5"
            ],
            [
                "question" => "Nhân vật chưa từng gặp Phạn Tăng, cần bao nhiêu viên THBT và Thủy Tinh để lên đảo tẩy tủy?",
                "answer" => "Tất cả câu trả lời trên đều sai"
            ],
            [
                "question" => "Có bao nhiêu phái có thể cầm đao?",
                "answer" => "10"
            ],
            [
                "question" => "Phiên bản Sơn Hà Xã Tắc ra mắt trong thời gian nào?",
                "answer" => "30-3-2006"
            ],
            [
                "question" => "Có bao nhiêu phái bắt buộc phải xuống ngựa mới xài được chiêu 90?",
                "answer" => "5"
            ],
            [
                "question" => "Những vật phẩm nào sau đây không sử dụng được trên Mạc Bắc Thảo Nguyên?",
                "answer" => "Tâm Tâm Tương ánh Phù"
            ],
            [
                "question" => "Kiến Tính Phong Sơn động lưu rương ở đâu để trở lại địa điểm cũ được?",
                "answer" => "Tất cả câu trả lời trên đều sai"
            ],
            [
                "question" => "Từ Tương Dương đi xa phu qua Biện Kinh, rồi tiếp tục đi xa phu qua Lâm An tốn bao nhiêu?",
                "answer" => "700 lượng"
            ],
            [
                "question" => "Món nào được yêu cầu trong nhiệm vụ giao khoáng?",
                "answer" => "Lượng Ngân Khoáng"
            ],
            [
                "question" => "Đường Nghê Giáp bán shop được bao nhiêu lượng?",
                "answer" => "6250 lượng"
            ],
            [
                "question" => "Phái nào phải đi thuyền mới qua được?",
                "answer" => "Thiên Vương Bang"
            ],
            [
                "question" => "Hỏa Đường đường chủ của Thiên Nhẫn Giáo là ai?",
                "answer" => "Ngột Ngạo"
            ],
            [
                "question" => "NPC của phái nào có đứa con bị thất lạc trên Võ Đang?",
                "answer" => "Ngũ Độc"
            ],
            [
                "question" => "Ai là người mà thập đại môn phái đều kính phục?",
                "answer" => "Độc Hồ Kiếm"
            ],
            [
                "question" => "Ai là người ngông cuồng nhất?",
                "answer" => "Tuyền Cơ Tử"
            ],
            [
                "question" => "2 nhân vật lần đầu tiên kết hôn sẽ nhận được?",
                "answer" => "Nhẫn"
            ],
            [
                "question" => "Mang 1 bộ Thiên Hoàng không max được bao nhiêu may mắn?",
                "answer" => "Tất cả câu trả lời trên đều sai"
            ],
            [
                "question" => "PK9 ra tù tốn bao nhiêu lượng?",
                "answer" => "81 vạn"
            ],
            [
                "question" => "Những nơi nào sau đây bán các loại vật phẩm mà tất cả đều sử dụng được trên Vi Sơn Đảo?",
                "answer" => "Hiệu thuốc"
            ],
            [
                "question" => "Từ 15h đến hết ngày có bao nhiêu trận Tống Kim?",
                "answer" => "5"
            ],
            [
                "question" => "Hoàn thành nhiệm vụ phụ tuyến trong khoảng cấp bao nhiêu sẽ được phần thưởng Kim Phong Trạc Liên Quang?",
                "answer" => "20-30"
            ],
            [
                "question" => "Trong Tống Kim, nhân vật khi chết có bị mất tiền và điểm kinh nghiệm hay không?",
                "answer" => "Không"
            ],
            [
                "question" => "Để đi Phong Lăng Độ người chơi cần những vật phẩm gì?",
                "answer" => "Lệnh bài Phong Lăng Độ"
            ],
            [
                "question" => "Để đi Vi Sơn Đảo nhân vật cần những vật phẩm gì?",
                "answer" => "Tất cả câu trả lời trên đều sai"
            ],
            [
                "question" => "Có bao nhiêu thành bán ngựa Túc Sương?",
                "answer" => "2"
            ],
            [
                "question" => "Trong Tống Kim, khi bạn được phong là Hiệu úy bạn sẽ được tặng những gì?",
                "answer" => "Sinh lực tăng 20%"
            ],
            [
                "question" => "Trong Tống Kim, khi bạn được phong là Thống Lĩnh bạn sẽ được tặng những gì?",
                "answer" => "Tất cả đều đúng"
            ],
            [
                "question" => "Trong Tống Kim, khi bạn được phong là Phó Tướng bạn sẽ được tặng những gì?",
                "answer" => "Tất cả đều đúng"
            ],
            [
                "question" => "Kết thúc một trận Tống Kim bên thắng được bao nhiêu điểm thưởng?",
                "answer" => "1200 điểm và 3 điểm danh vọng"
            ],
            [
                "question" => "Kết thúc một trận Tống Kim bên thua được bao nhiêu điểm thưởng?",
                "answer" => "600 điểm"
            ],
            [
                "question" => "Phái nào có tốc độ đánh nhanh nhất?",
                "answer" => "Đường Môn"
            ],
            [
                "question" => "Phái nào có tốc độ đánh chậm nhất?",
                "answer" => "Thiên Vương"
            ],
            [
                "question" => "Trong một ngày nhân vật có thể làm tối đa bao nhiêu nhiệm vụ Dã Tẩu?",
                "answer" => "40"
            ],
            [
                "question" => "Dã Tẩu có tối đa bao nhiêu nhiệm vụ?",
                "answer" => "8000"
            ],
            [
                "question" => "Chủ Tiền Trang ở các thành thị bán vật phẩm gì (trừ Lâm An)?",
                "answer" => "Bao lì xì"
            ],
            [
                "question" => "Chủ Dược Điếm tại các thành thị bán bao nhiêu loại thuốc?",
                "answer" => "17"
            ],
            [
                "question" => "Có bao nhiêu thành dùng để ngồi tù giảm PK?",
                "answer" => "2"
            ],
            [
                "question" => "Một bộ Kim Phong gồm bao nhiêu món?",
                "answer" => "9"
            ],
            [
                "question" => "Để đi Đảo Tẩy Tủy nhân vật cần những vật phẩm gì?",
                "answer" => "Tất cả đều đúng"
            ],
            [
                "question" => "Có bao nhiêu NPC Thần Bí Thương Nhân tại Thất đại thành thị?",
                "answer" => "3"
            ],
            [
                "question" => "Chức năng NPC Công Bình Tử dùng để làm gì?",
                "answer" => "Lôi Đài"
            ],
            [
                "question" => "Có thể đổi điểm tích lũy liên đấu lấy vật phẩm tại NPC nào?",
                "answer" => "Sứ giả liên đấu (Nam)"
            ],
            [
                "question" => "Có mấy môn phái không có tốc độ xuất chiêu trong trấn phái?",
                "answer" => " 4"
            ],
            [
                "question" => "Người bán chiến mã ở Nam Nhạc trấn tên là?",
                "answer" => "Thẩm Câu"
            ],
            [
                "question" => "Huyền Giác Đại sư khi bị đánh bại có thể rơi ra vật phẩm?",
                "answer" => "Tất cả đều đúng"
            ],
            [
                "question" => "Hà Linh Phiêu khi bị đánh bại có thể rơi ra vật phẩm?",
                "answer" => "Vô Ma tẩy tượng ngọc khấu"
            ],
            [
                "question" => "Liễu Thanh Thanh khi bị đánh bại có thể rơi ra vật phẩm?",
                "answer" => "Tất cả đều đúng"
            ],
            [
                "question" => "Đoạn Mộc Duệ khi bị đánh bại có thể rơi ra vật phẩm?",
                "answer" => "Ma Sát Quỉ cốc u minh thương"
            ],
            [
                "question" => "Thanh Tuyệt Sư Thái khi bị đánh bại có thể rơi ra vật phẩm?",
                "answer" => "Tất cả đều đúng"
            ],
            [
                "question" => "Diệu Như là môn đệ của phái nào?",
                "answer" => "Nga My"
            ],
            [
                "question" => "Đạo Thanh Chân Nhân khi bị đánh bại có thể rơi ra vật phẩm?",
                "answer" => "Cập phong tam thanh phù"
            ],
            [
                "question" => "Trương Tông Chính là môn đệ của?",
                "answer" => "Võ Đang"
            ],
            [
                "question" => "Gia Luật Tị Ly khi bị đánh bại có thể rơi ra vật phẩm?",
                "answer" => "Ma hoàng án xuất hổ hạng khuyên"
            ],
            [
                "question" => "Yên Hiểu Trái  khi bị đánh bại có thể rơi ra vật phẩm?",
                "answer" => "Tê hoàng phụng nghi đao"
            ],
            [
                "question" => "Chưởng môn Nga My là?",
                "answer" => "Thanh Tuyệt sư thái"
            ],
            [
                "question" => "Chưởng môn Võ Đang là?",
                "answer" => "Đạo Nhất chân nhân"
            ],
            [
                "question" => "Môn chủ Đường môn là?",
                "answer" => "Đường cừu"
            ],
            [
                "question" => "Bang chủ Thiên vương bang là?",
                "answer" => "Dương Anh"
            ],
            [
                "question" => "Chưởng môn Côn Lôn là?",
                "answer" => "Tuyền Cơ Tử"
            ],
            [
                "question" => "Giáo chủ Ngũ độc là?",
                "answer" => "Hắc Diện Lang Quân"
            ],
            [
                "question" => "Phương trượng Thiếu Lâm?",
                "answer" => "Huyền Từ Đại sư"
            ],
            [
                "question" => "Chưởng môn Thúy Yên là?",
                "answer" => "Doãn Hàm Yên"
            ],
            [
                "question" => "Bang chủ Cái bang là?",
                "answer" => "Hà Nhân Ngã"
            ],
            [
                "question" => "Giáo chủ Thiên nhẫn là?",
                "answer" => "Hoàng Nhan Hồng Liệt"
            ],
            [
                "question" => "Gián điệp Kim quốc ở Tương Dương là?",
                "answer" => "Lưu Uẩn cổ"
            ],
            [
                "question" => "Máy chủ nào đoạt hạng 1 ở giải THDNB lần 5",
                "answer" => "ChâuGiang"
            ],
            [
                "question" => "Dùng bao nhiêu điểm tích lũy trong nhiệm vụ tín sứ để đổi lấy Hồng ảnh Tụ Chiêu?",
                "answer" => "50000"
            ],
            [
                "question" => "Dùng bao nhiêu điểm tích lũy trong nhiệm vụ tín sứ để đổi lấy Hồng ảnh Mục Túc Tương Vong?",
                "answer" => "70000"
            ],
            [
                "question" => "Dùng bao nhiêu điểm tích lũy trong nhiệm vụ tín sứ để đổi lấy Hồng ảnh Kiếm Qua Tây Phương?",
                "answer" => "70000"
            ],
            [
                "question" => "Dùng bao nhiêu điểm tích lũy trong nhiệm vụ tín sứ để đổi lấy Hồng ảnh Trầm Viên Vãn Túy?",
                "answer" => "100000"
            ],
            [
                "question" => "Trong tín sứ, khi bạn có danh hiệu là Tín Sứ-Mộc thì thì bạn có thể mua được Tín Sứ lệnh bài nào?",
                "answer" => "Tín sứ lệnh bài - Mộc"
            ],
            [
                "question" => "Mỗi tín sứ yêu bài được sự dụng bao nhiêu lần?",
                "answer" => "5"
            ],
            [
                "question" => "Ngự Tứ tín sứ lệnh bài Vàng khi sử dụng phục hồi bao nhiêu điểm âm trong phần kháng ngũ hành?",
                "answer" => "30"
            ],
            [
                "question" => "Trong hệ thống ngũ hành tương sinh, thì hệ Mộc tạo ra hệ gì ?",
                "answer" => "Hỏa"
            ],
            [
                "question" => "Trong hệ thống ngũ hành tương sinh, thì hệ Hỏa tạo ra hệ gì ?",
                "answer" => "Thổ"
            ],
            [
                "question" => "Trong hệ thống ngũ hành tương sinh, thì hệ Thổ tạo ra hệ gì ?",
                "answer" => "Kim"
            ],
            [
                "question" => "Trong hệ thống ngũ hành tương sinh, thì hệ Kim tạo ra hệ gì ?",
                "answer" => "Thủy"
            ],
            [
                "question" => "Trong hệ thống ngũ hành tương sinh, thì hệ Thủy tạo ra hệ gì ?",
                "answer" => "Mộc"
            ],
            [
                "question" => "Trong phần trang bị, thì trang bị vũ khí có thể kích được trang bị nào trên người ?",
                "answer" => "Giày - nhẫn trên"
            ],
            [
                "question" => "Trong phần trang bị, thì nhẫn dưới được trang bị nào kích thuộc tính ẩn?",
                "answer" => "Ngọc bội - bao tay"
            ],
            [
                "question" => "Trong hệ thống ngũ hành, thì hệ nào không có nhân vật Nam?",
                "answer" => "Thủy"
            ],
            [
                "question" => "Trong hệ thống ngũ hành, thì hệ nào không có nhân vật Nữ?",
                "answer" => "Không có hệ nào"
            ],
            [
                "question" => "Bạn cấp từ 90-120, muốn tham gia thi liên đấu thì phải tới NPC Sứ Giả Liên Đấu thành nào để báo danh?",
                "answer" => "Biện Kinh"
            ],
            [
                "question" => "Bạn từ cấp 120 trở lên, muốn tham gia thi liên đấu thì phải tới NPC Sứ Giả Liên Đấu thành nào để báo danh?",
                "answer" => "Thành Đô"
            ],
            [
                "question" => "Ngồi tù bao lâu thì sẽ giảm được 1 PK?",
                "answer" => "2h"
            ],
            [
                "question" => "Theo giới hạn 5 giờ chơI trong võ lâm, thì 3 giờ đầu tiên người chơi được hưởng bao nhiêu % điểm kinh nghiệm khi đánh quái?",
                "answer" => "100%"
            ],
            [
                "question" => "Theo cách gọi của nhiều người thì \"cụ đồ Chiểu\" được hiểu là ai?",
                "answer" => " Nguyễn Đình Chiểu"
            ],
            [
                "question" => "Con người đặt chân lên mặt trăng lần đầu tiên vào năm nào?",
                "answer" => "1969"
            ],
            [
                "question" => "Khổng Tử, người thầy của mọi thời đại sống vào thế kỷ nào trước công nguyên?",
                "answer" => "6"
            ],
            [
                "question" => "Nước ta có bao nhiêu dân tộc?",
                "answer" => "54"
            ],
            [
                "question" => "Liên Hiệp Quốc được thành lập vào năm nào?",
                "answer" => "1945"
            ],
            [
                "question" => "Có bao nhiêu nước tham gia thành lập Liên Hiệp Quốc?",
                "answer" => "51"
            ],
            [
                "question" => "Điện thoại được phát minh vào năm nào?",
                "answer" => "1876"
            ],
            [
                "question" => "Pasteur phát minh ra vắc xin ngừa bệnh dại vào năm nào?",
                "answer" => "1888"
            ],
            [
                "question" => "Họ đầu tiên ở nước ta là gì?",
                "answer" => "Hồng Bàng"
            ],
            [
                "question" => "Cuộc đấu tranh đòi nhà cầm quyền Pháp thả cụ Phan Bội Châu diễn ra vào năm nào?",
                "answer" => "1919"
            ],
            [
                "question" => "Vua Quang Trung băng hà vào năm nào?",
                "answer" => "1799"
            ],
            [
                "question" => "Ai là người dời đô từ Hoa Lư về Thăng Long năm 1010?",
                "answer" => "Lý Thái Tổ"
            ],
            [
                "question" => "Kỳ quan nào không nằm trong 7 kỳ quan Thế Giới cổ đại?",
                "answer" => "Vạn Lý Trường Thành"
            ],
            [
                "question" => "Cân được phát minh đầu tiên bởi cư dân của nước nào?",
                "answer" => "Ai cập"
            ],
            [
                "question" => "Văn Miếu, trường đại học đầu tiên của Việt Nam, được xây dựng dưới triều đại nào?",
                "answer" => "Nhà Lý"
            ],
            [
                "question" => "Việt Nam trở thành thành viên của Liên Hợp Quốc năm nào?",
                "answer" => "1977"
            ],
            [
                "question" => "Đất nước nào là quê hương của ông già Noel?",
                "answer" => "Phần Lan"
            ],
            [
                "question" => "Thủ đô nước nào lâu đời nhất Đông Nam á?",
                "answer" => "Hà Nội - Việt Nam"
            ],
            [
                "question" => "Huấn luyện viên Alex Feguson của Mu có tước hiệu gì?",
                "answer" => "Hiệp sĩ"
            ],
            [
                "question" => "Việt Nam vô địch AFF cup năm nào?",
                "answer" => "2008"
            ],
            [
                "question" => "Biểu tượng Nữ thần tự do là của nước nào?",
                "answer" => "Mỹ"
            ],
            [
                "question" => "Nước nào có hình chiếc ủng?",
                "answer" => "Italia"
            ],
            [
                "question" => "Ngày thành lập đảng cộng sản Việt Nam?",
                "answer" => "Ngày 3 tháng 2"
            ],
            [
                "question" => "Đơn vị tiền tệ của Italia?",
                "answer" => "Euro"
            ],
            [
                "question" => "Đỉnh núi nào cao nhất thế giới?",
                "answer" => "Everest"
            ],
            [
                "question" => "Sao Kim Venus tượng trưng cho vị thần nào?",
                "answer" => "Tình yêu"
            ],
            [
                "question" => "Ngôi sao 5 cánh trên quốc kì các quốc gia tượng trưng cho cái gì ?",
                "answer" => "5 châu lục"
            ],
            [
                "question" => "Hình tròn màu đỏ trên lá cờ của Nhật Bản tượng trưng cho cái gì?",
                "answer" => "Mặt trời"
            ],
            [
                "question" => "Rừng nào có biên giới tự nhiên trải dài đến 9 quốc gia?",
                "answer" => "Amazon"
            ],
            [
                "question" => "Loài cây nào biểu tượng cho sức mạnh của Châu Phi?",
                "answer" => "Bao báp"
            ],
            [
                "question" => "Con sông nào lớn nhất Châu á?",
                "answer" => "Mê Kông"
            ],
            [
                "question" => "Đội tuyển bóng đá nam Brazil vô địch thế giới mấy lần?",
                "answer" => "5"
            ],
            [
                "question" => "Nước Mỹ có bao nhiêu bang?",
                "answer" => "50"
            ],
            [
                "question" => "DTH là dịch vụ gì?",
                "answer" => "Truyền hình số vệ tinh"
            ],
            [
                "question" => "Âm thanh không truyền đi được trong môi trường nào?",
                "answer" => "Chân không"
            ],
            [
                "question" => "Người ta thường nói ngang như...?",
                "answer" => "Cua"
            ],
            [
                "question" => "Điền vào câu sau=>\"Lơ ngơ như ... đội nón\" ?",
                "answer" => "Bò"
            ],
            [
                "question" => "ở bắc cực có bao nhiu loài chim cánh cụt?",
                "answer" => "0"
            ],
            [
                "question" => "Dụng cụ đo thân nhiệt là gì?",
                "answer" => "Nhiệt kế"
            ],
            [
                "question" => "Tỉnh nào sau đây ở miền bắc nước ta?",
                "answer" => "Hải Dương"
            ],
            [
                "question" => "Báo nào chuyên về công nghệ thông tin?",
                "answer" => "Echip"
            ],
            [
                "question" => "\"Dictionary\" trong tiếng Anh nghĩa là gì?",
                "answer" => "Từ điển"
            ],
            [
                "question" => "Quốc gia nào có liên hoan film Cannes?",
                "answer" => "Pháp"
            ],
            [
                "question" => "Website đổi mật khẩu của VNG là gì?",
                "answer" => "id.zing.vn"
            ],
            [
                "question" => "Môn thể thao nào mà 6 game sẽ kết thúc 1 set?",
                "answer" => "Tennis"
            ],
            [
                "question" => "Quốc gia nào đông dân nhất thế giới?",
                "answer" => "Trung Quốc"
            ],
            [
                "question" => "Quốc gia nào tặng nước Mĩ tượng \"Nữ thần tự do\"?",
                "answer" => "Pháp"
            ],
            [
                "question" => "Một bộ cờ vua có bao nhiu loại quân?",
                "answer" => "6"
            ],
            [
                "question" => "Vào mùa nào thì trái đất gần mặt trời nhất?",
                "answer" => "Hạ"
            ],
            [
                "question" => "Cái gì lớn nhất dưới đây?",
                "answer" => "Lục Địa"
            ],
            [
                "question" => "Vòng chung kết WorldCup 1994 quốc gia nào đạt hạng ba ?",
                "answer" => "Thụy Điển"
            ],
            [
                "question" => "Sea Game 25 sẽ tổ chức ở quốc gia nào ?",
                "answer" => "Lào"
            ],
            [
                "question" => "Kết thúc Sea Game 24 đoàn Việt Nam đạt bao nhiêu HCV?",
                "answer" => "64"
            ],
            [
                "question" => "Thế vận hội Olympic 2012 diễn ra tại quốc gia nào?",
                "answer" => "Anh"
            ],
            [
                "question" => "Trần Hiếu Ngân là VĐV môn thể thao nào?",
                "answer" => "Taekwondo"
            ],
            [
                "question" => "Nguyễn Tiến Minh là VĐV môn thể thao nào?",
                "answer" => "Cầu lông"
            ],
            [
                "question" => "Vòng chung kết Euro 2004 đội nào đạt danh hiệu vô địch?",
                "answer" => "Hy Lạp"
            ],
            [
                "question" => "Lê Công Vinh đạt bao nhiêu danh hiệu Quả Bóng Vàng VN?",
                "answer" => "3"
            ],
            [
                "question" => "Vòng chung kết Euro 2008 đội nào đạt danh hiệu vô địch?",
                "answer" => "Tây Ban Nha"
            ],
            [
                "question" => "CLB bóng đá nào đạt danh hiệu vô địch cup C1 Châu Âu nhiều nhất?",
                "answer" => "Real Madrid"
            ],
            [
                "question" => "Cầu Mỹ Thuận được bắc qua con sông nào của Việt Nam?",
                "answer" => "Sông Tiền"
            ],
            [
                "question" => "Đội tuyển bóng đá nam Thái Lan bao nhiêu lần vô địch các kỳ Sea Game?",
                "answer" => "8"
            ],
            [
                "question" => "Thủ đô Canađa tên gì?",
                "answer" => "Ottawa"
            ],
            [
                "question" => "Ai đạt danh hiệu quả bóng vàng Việt Nam năm 2009?",
                "answer" => "Dương Hồng Sơn"
            ],
            [
                "question" => "Giếng nước lớn nhất Việt Nam nằm ở đâu?",
                "answer" => "Ninh Bình"
            ],
            [
                "question" => "Tên của anh hùng Nguyễn Huệ lúc nhỏ là?",
                "answer" => "Hồ Thơm"
            ],
            [
                "question" => "Đời vua nào có chức Lạc Hầu?",
                "answer" => "Hùng Vương"
            ],
            [
                "question" => "Truyền thuyết về Tứ Bất Tử của Việt Nam gồm=>Tản Viên (Sơn Tinh - Thủy Tinh), Chử Đồng Tử, Liễu Hạnh. Người còn lại là ai?",
                "answer" => "Thánh Gióng"
            ],
            [
                "question" => "Vạn Thắng Vương là biệt hiệu của vị tướng quân nào ?",
                "answer" => "Đinh Bộ Lĩnh"
            ],
            [
                "question" => "Nhà Đinh đúc tiền lần đầu tiên trong lịch sử nước Việt, đồng tiền đó mang tên gì ?",
                "answer" => "Thái Bình Hưng Bảo"
            ],
            [
                "question" => "Bánh Khoái là đặc sản của miền nào?",
                "answer" => "Miền Bắc"
            ],
            [
                "question" => "Giò Heo Giả Cầy thường được người miền nào ưa chuộng?",
                "answer" => "Miền Nam"
            ],
            [
                "question" => "Bún Suông, một món ăn đặc sắc có tôm giã nhuyễn, thịt cua có xuất xứ từ miền nào?",
                "answer" => "Miền Nam"
            ],
            [
                "question" => "Cà pháo, mắm tôm thường được người dân miền nào ưa chuộng?",
                "answer" => "Miền Bắc"
            ],
            [
                "question" => "Trong các món ăn dân dã, Gỏi Sứa là món ăn \"độc đáo\" để thiết đãi bằng hữu của người dân nơi nào sau đây?",
                "answer" => "Tuy Hòa"
            ],
            [
                "question" => " Ba Khía, một đặc sản của vùng Biển miền Nam, nổi tiếng nhất là ở đâu?",
                "answer" => "Rạch Gốc"
            ],
            [
                "question" => "Chả Rươi có nguồn gốc xuất xứ từ miền nào?",
                "answer" => "Miền Bắc"
            ],
            [
                "question" => "Bún Thang là đặc sản của nơi nào?",
                "answer" => "Hà Nội"
            ],
            [
                "question" => "Cơm hến là đặc sản của nơi nào?",
                "answer" => "Huế"
            ],
            [
                "question" => "Bún mực Vạn Ninh là đặc sản nơi nào?",
                "answer" => "Nha Trang"
            ],
            [
                "question" => "Món Mì Quảng là đặc sản của nơi nào?",
                "answer" => "Quảng Nam"
            ],
            [
                "question" => "Bánh tổ là một trong bốn loại bánh truyền thống của người dân nơi nào?",
                "answer" => "Quảng Nam"
            ],
            [
                "question" => "Bún Bò là đặc sản của miền nào?",
                "answer" => "Miền Trung"
            ],
            [
                "question" => "Chợ nổi là đặc trưng của nơi nào?",
                "answer" => "Miền Nam"
            ],
            [
                "question" => "Hàng năm nhằm vào tháng 3 khách thập phương về Nam Định để tham dự lễ hội nào?",
                "answer" => "Phủ Dầy"
            ],
            [
                "question" => "ở Cao Bằng, hằng năm vào ngày 22 tháng 3 có lễ hội về Mẹ Trăng và mười hai nàng tiên - con của Mẹ Trăng. Đó là lễ hội gì?",
                "answer" => " Nàng Hai"
            ],
            [
                "question" => "Hải Thượng Lãn Ông là tên hiệu của bậc danh nhân nào?",
                "answer" => "Lê Hữu Trác"
            ],
            [
                "question" => "Họ em cùng với họ người, Tên em cùng loài ở chốn bùn sâu. Là vật gì?",
                "answer" => "Đinh ốc"
            ],
            [
                "question" => "Bốn bên bốn bức tường cao, Lính đánh ào ào, tướng vẫn nằm yên. Là vật dụng gì?",
                "answer" => "Cái mùng"
            ],
            [
                "question" => "Mòn lưng kẻ xát người chà, Cánh đâu mà bảo ta bay lên trời? Là cái gì?",
                "answer" => "Cái bay"
            ],
            [
                "question" => "Không tay không chân không mắt không mũi, Miệng ướt rần rần, bò đi lủi nhủi. Là con gì?",
                "answer" => "Con giun"
            ],
            [
                "question" => "Vừa bằng hạt lạc, trong nạc ngoài xương. Là con gì?",
                "answer" => "Con ốc"
            ],
            [
                "question" => "Năm ông cầm hai cây sào, Lùa đàn trâu trắng thẳng vào trong hang. Dùng để chỉ việc gì?",
                "answer" => "Ăn cơm"
            ],
            [
                "question" => "Bằng một bước mà bước không qua. Là cái gì?",
                "answer" => "Cái bóng"
            ],
            [
                "question" => "Con cua tám cẳng 2 càng, Bò qua bò lại hỏi bò mấy chân?",
                "answer" => "4 chân"
            ],
            [
                "question" => "Bắc thang lên hát phường chèo, Hỏi thang một nấc mà leo nỗi gì? Là chữ gì?",
                "answer" => "Chữ H"
            ],
            [
                "question" => "Xây thành đắp luỹ trên non, Hái hoa nuốt nhuỵ nuôi con tháng ngày? Là con gì?",
                "answer" => "Con ong"
            ],
            [
                "question" => "Mồm bò nhưng không phải mồm bò mà là mồm bò. Là con gì?",
                "answer" => "Con ốc sên"
            ],
            [
                "question" => "Trong lễ hội đua thuyền truyền thống nước ta, loại thuyền nào thường được nhân dân sử dụng?",
                "answer" => "Thuyền rồng"
            ],
            [
                "question" => "Tục mừng nhà mới ở Việt Nam gọi là gì?",
                "answer" => "Tân gia"
            ],
            [
                "question" => "ở các gia đình có cha mẹ già đến bảy tám mươi tuổi, nhà phúc lộc dồi dào, đông con cái, thì làm lễ mừng thọ cha mẹ. Lễ đó gọi là gì?",
                "answer" => "Thượng thọ"
            ],
            [
                "question" => "Dù ai đi ngược về xuôi, Nhớ ngày giỗ tổ mùng mười tháng ba. 2 câu thơ đó nói về ngày hội gì ở nước ta.?",
                "answer" => "Giỗ tổ Hùng Vương"
            ],
            [
                "question" => "Làng gốm Bát Tràng, làng gốm nổi tiếng của nước ta thuộc huyện nào của Hà Nội?",
                "answer" => "Gia Lâm"
            ],
            [
                "question" => "Cơm lam là món ẩm thực đặc sắc của các dân tộc nơi nào ở nước ta?",
                "answer" => "Tây Bắc Bộ"
            ],
            [
                "question" => "Nữ sinh Đồng Khánh xứ Huế nổi tiếng bởi tà áo dài thướt tha có màu sắc?",
                "answer" => "Tím"
            ],
            [
                "question" => "Trong tà áo dài truyền thống của phụ nữ Việt Nam, hàng nút được kết tại đâu?",
                "answer" => "Bên phải từ cổ xuống eo"
            ],
            [
                "question" => "Nhà sử học đầu tiên của Việt Nam là?",
                "answer" => "Lê Văn Hưu"
            ],
            [
                "question" => "Cuốn \"Đại Việt Sử Ký Toàn Thư\" do ai soạn thảo?",
                "answer" => "Ngô Sĩ Liên"
            ],
            [
                "question" => "Thời nhà Trần, ai được phong tặng là \"Lưỡng Quốc Trạng Nguyên\" ?",
                "answer" => "Mạc Đĩnh Chi"
            ],
            [
                "question" => "Trạng nguyên trẻ nhất trong lịch sử Việt Nam là ai?",
                "answer" => "Nguyễn Hiền"
            ],
            [
                "question" => "Ai được dân gian phong tặng danh hiệu Trạng Lường ?",
                "answer" => "Lương Thế Vinh"
            ],
            [
                "question" => "Ai được dân gian phong tặng danh hiệu Trạng Bùng ?",
                "answer" => "Phùng Khắc Khoan"
            ],
            [
                "question" => "Ai lãnh đạo nghĩa quân Lam Sơn khởi nghĩa dành thắng lợi?",
                "answer" => "Lê Lợi"
            ],
            [
                "question" => "Ai thảo áng văn bất hủ \"Bình Ngô Đại Cáo\"?",
                "answer" => "Nguyễn Trãi"
            ],
            [
                "question" => "Bạch Vân Cư Sĩ là tên hiệu của nhà thơ nào?",
                "answer" => "Nguyễn Bỉnh Khiêm"
            ],
            [
                "question" => "Lá cờ thêu 6 chữ vàng \"Phá Cường Địch, Báo Hoàng Ân\" gắn với tên tuổi của vị anh hùng thiếu niên nào?",
                "answer" => "Trần Quốc Toản"
            ],
            [
                "question" => "Tiền giấy đầu tiên được sửu dụng gắn với triều đại của vị vua nào?",
                "answer" => "Hồ Quý Ly"
            ],
            [
                "question" => "Vị tổ nghề in của nước ta là?",
                "answer" => "Lương Nhữ Học"
            ],
            [
                "question" => "Nhân vật kiệt xuất của thế kỷ XV được UNESCO phong là danh nhân văn hóa thế giới?",
                "answer" => "Nguyễn Trãi"
            ],
            [
                "question" => "Thà rằng ăn nửa quả hồng, Còn hơn ăn cả chùm ...chát lè.",
                "answer" => "Sung"
            ],
            [
                "question" => "Nói chín thì nên làm mười, Nói mười làm ... kẻ cười người chê.",
                "answer" => "Chín"
            ],
            [
                "question" => "Thế gian chẳng ít thì nhiều, Không ... ai dễ đặt điều cho ai .",
                "answer" => "Dưng"
            ],
            [
                "question" => "Tháng ... heo mây, Chuồn chuồn bay thì bão.",
                "answer" => "Bảy"
            ],
            [
                "question" => "Bao giờ cho đến tháng ... , Hoa gạo rụng xuống, bà già cất chăn .",
                "answer" => "Ba"
            ],
            [
                "question" => "ở đời muôn sự cửa trùng, Hơn nhau hai tiếng anh ... mà thôi.",
                "answer" => "Hùng"
            ],
            [
                "question" => "Nước giữa dòng chê trong, chê đục, Vũng ...đầm hì hục khen ngon",
                "answer" => "Trâu"
            ],
            [
                "question" => "Cái bống đi chợ cầu Canh, Cái tôm đi trước, củ ... đi sau. Con cua lật đật theo hầu, Cái chày rơi xuống vỡ đầu con cua.",
                "answer" => "Hành"
            ],
            [
                "question" => "Nực cười châu chấu đá ..., Tưởng rằng chấu nát, ai dè ... nghiêng.",
                "answer" => "Xe"
            ],
            [
                "question" => "Trên trời có đám mây xanh, ở giữa mây trắng chung quanh mây vàng. Ước gì anh lấy được nàng, Thì anh mua gạch ... về xây.",
                "answer" => "Bát Tràng"
            ],
            [
                "question" => "Rủ nhau xuống bể mò cua, Đem về nấu quả ... chua trên rừng.",
                "answer" => "Mơ"
            ],
            [
                "question" => "Trèo lên cây bưởi hái hoa, Bước xuống vườn cà hái ... tầm xuân.",
                "answer" => "Nụ"
            ],
            [
                "question" => "Đường vô xứ ... quanh quanh, Non xanh nước biếc như tranh họa đồ.",
                "answer" => "Nghệ"
            ],
            [
                "question" => "... ơi thương lấy bí cùng, Tuy rằng khác giống nhưng chung một giàn.",
                "answer" => "Bầu"
            ],
            [
                "question" => "Khôn cho người bái, Dại cho người thương. Dở dở ... ..., Tổ cho người ghét.",
                "answer" => "ương ương"
            ],
            [
                "question" => "Đêm khuya thiếp mới hỏi chàng=> ... xanh ăn với trầu vàng xứng chăng?",
                "answer" => " Cau"
            ],
            [
                "question" => "Chim ... ăn trái nhãn lồng, Thia thia quen chậu, vợ chồng quen hơi.",
                "answer" => "Quyên"
            ],
            [
                "question" => "Vợ chồng là nghĩa tao khang, Xuống khe bắt ốc lên ngàn hái ...",
                "answer" => " Rau"
            ],
            [
                "question" => "Lênh đênh một chiếc thuyền tình, Mười ... bến nước biết gửi mình vào đâu ?",
                "answer" => " Hai"
            ],
            [
                "question" => "Con gì ở cạnh bờ ao? Chặt đuôi chặt đầu bay vút lên cao. Là con gì?",
                "answer" => "Con Cóc"
            ],
            [
                "question" => "Hai cô nằm nghỉ hai phòng, Ngày thì mở cửa ra trông, Đêm thì đóng cửa lấp trong ra ngoài. Là bộ phận nào trên cơ thể?",
                "answer" => "Đôi mắt"
            ],
            [
                "question" => "Trên hang đá, dưới hang đá, Giữa có con cá thờn bơn. Là bộ phận nào trên cơ thể?",
                "answer" => "Miệng"
            ],
            [
                "question" => "Tròn tròn như là cái tô, Vục miệng vào hồ đầu ướt đuôi khô.Là cái gì?",
                "answer" => "Cái gáo dừa"
            ],
            [
                "question" => "Chân em đo đỏ, mình em vàng vàng, Khắp xóm cùng làng, ai cũng kính dâng? Là cây gì?",
                "answer" => "Cây nhang"
            ],
            [
                "question" => "Một vũng nước vàng, con rắn bò ngang, cái đầu đỏ chót? Là cái gì?",
                "answer" => "Cây đèn dầu"
            ],
            [
                "question" => "Anh ngồi đâu, em cũng ngồi chầu, Anh yêu em, anh mớm quết trầu cho em. Là cái gì?",
                "answer" => "Cái cối - Cái chầy"
            ],
            [
                "question" => "Ba chục cùng ở một lồng, Một chục có mồng, hai chục thì không. Là cái gì?",
                "answer" => "Một tháng 30 ngày"
            ],
            [
                "question" => "Hoa gì hẹn đến ngày sau, Hoa gì lại mọc trên đầu hùng kê? Là cặp hoa nào?",
                "answer" => "Hoa Mai - Hoa Mào gà"
            ],
            [
                "question" => "Hoa gì nghe tiếng mà ghê, Hoa gì sắc trắng cận kề ơn trên. Là cặp hoa nào?",
                "answer" => "Hoa Súng - Hoa Huệ"
            ],
            [
                "question" => "Hoa gì thơm ngát về đêm, Hoa gì sống cạnh bùn phèn không dơ? Là cặp hoa nào?",
                "answer" => "Hoa Quỳnh - Hoa Sen"
            ],
            [
                "question" => "Hoa gì nhiều tuổi để thờ, Hoa gì báo hiệu đến giờ thu sang? Là cặp hoa nào?",
                "answer" => "Hoa Vạn thọ - Hoa Cúc"
            ],
            [
                "question" => "Hoa gì sớm nở tối tàn, Hoa gì được sánh vào hàng tôn vương? Là cặp hoa nào?",
                "answer" => "Hoa Phù Dung - Hoa Mẫu Đơn"
            ],
            [
                "question" => "Hoa gì e thẹn bên đường, Hoa gì hè đến thì thường tốt tươi? Là cặp hoa nào?",
                "answer" => "Hoa Mắc Cỡ - Hoa Phượng"
            ],
            [
                "question" => "Hoa gì theo ánh mặt trời, Hoa gì xinh đẹp đồng thời lắm gai? Là cặp hoa nào?",
                "answer" => "Hoa Hướng Dương - Hoa Hồng"
            ],
            [
                "question" => "Hoa gì muôn dặm đường dài, Hoa gì thơm ngát sánh tài môi em? Là cặp hoa gì?",
                "answer" => "Hoa Thiên Lý - Hoa Hàm Tiếu"
            ],
            [
                "question" => "Không sơn mà đỏ, Không gõ mà kêu? Là cái gì trong tự nhiên?",
                "answer" => "Mặt trời - Tiếng Sấm"
            ],
            [
                "question" => "Không cánh mà bay mới lạ đời, Khi thì vượt bể, lúc qua khơi? Là hiện tượng nào trong tự nhiên?",
                "answer" => "Gió"
            ],
            [
                "question" => "Bán Kính Trái Đất bằng bao nhiêu?",
                "answer" => "6400 Km"
            ],
            [
                "question" => "Nơi nào ở Việt Nam núi lửa từng hoạt động?",
                "answer" => "Gia Lai"
            ],
            [
                "question" => "Cái nào ngăn cản sự thoát hơi nước của lá cây?",
                "answer" => "Chất Cutin"
            ],
            [
                "question" => "Trụ sở của Liên Hiệp Quốc đặt tại đâu?",
                "answer" => "Mỹ"
            ],
            [
                "question" => "Việt Nam & Mỹ chính thức lập lại quan hệ bình thường vào năm nào?",
                "answer" => "1995"
            ],
            [
                "question" => "Nhân vật nổi tiếng nào chưa từng đến Việt Nam?",
                "answer" => "Mohamet Ali"
            ],
            [
                "question" => "0 giờ là mấy giờ?",
                "answer" => "12 giờ tối"
            ],
            [
                "question" => "Năm Nhuần có bao nhiêu ngày?",
                "answer" => "366"
            ],
            [
                "question" => "Nước chiếm bao nhiêu diện tích Trái đất?",
                "answer" => "3 phần 4"
            ],
            [
                "question" => "Loài động vật nào lớn nhất trên trái đất?",
                "answer" => "Cá Voi"
            ],
            [
                "question" => "Khí cầu bay được nhờ gì?",
                "answer" => "Khí nóng"
            ],
            [
                "question" => "Dơi xác định phương hướng nhờ cơ quan cảm giác nào?",
                "answer" => "Thính Giác"
            ],
            [
                "question" => "Dựa vào số khoanh trong thân cây có thể xác định được điều gi?",
                "answer" => "Tuổi"
            ],
            [
                "question" => "Hãy điền vào câu=>\"Tây nguyên ... mùa mưa nắng\"?",
                "answer" => "Một"
            ],
            [
                "question" => "Chuồn chuồn bay thấp báo hiệu điều gì?",
                "answer" => "Trời sắp mưa"
            ],
            [
                "question" => "Thiết bị dùng để đo điện trong mạng điện Gia đình?",
                "answer" => "Công tơ Điện"
            ],
            [
                "question" => "Âm tiết được phát ra nhờ bộ phận gì trong cơ thể con ngươi?",
                "answer" => "Thanh Quản"
            ],
            [
                "question" => "Hiện tượng bí ẩn về \"người ngoài Hành tinh\" viết tắt là gì?",
                "answer" => "UFO"
            ],
            [
                "question" => "Ai được phong làm \"Lưỡng Quốc Trạng Nguyên\"?",
                "answer" => "Mạc Đĩnh Chi"
            ],
            [
                "question" => "Kathy Kathy là ca khúc do Ca sỹ nào thể hiện đầu tiên?",
                "answer" => "Lam Trường"
            ],
            [
                "question" => "VCK WorldCup được tổ chức mấy năm một lần",
                "answer" => "4 năm"
            ],
            [
                "question" => "Chỉ số thông minh được dựa trên dơn vị khoa học nào?",
                "answer" => "Chỉ số IQ"
            ],
            [
                "question" => "ảo Thuật gia nổi tiếng nhất nước Mỹ?",
                "answer" => "David Cooperfil"
            ],
            [
                "question" => "Tên của Giám Đốc Trung Tâm An ninh mạng Việt Nam?",
                "answer" => "Nguyễn Tử Quảng"
            ],
            [
                "question" => "Ngày thành lập Quân đội Nhân dân Việt Nam?",
                "answer" => "22-12"
            ],
            [
                "question" => "Ngày thành lập Đảng Cộng Sản Việt Nam?",
                "answer" => "3-2"
            ],
            [
                "question" => "ở Bắc cực có khoảng bao nhiêu loài chim Cánh cụt?",
                "answer" => "Một loài"
            ],
            [
                "question" => "Loài động vật nào thông minh nhất trên Trái đất?",
                "answer" => "Cả 3 ý đều sai"
            ],
            [
                "question" => "Ai là người phát minh ra Điện thoại đầu tiên?",
                "answer" => "William Bells"
            ],
            [
                "question" => "Viết tắt của tổ chức các nước xuất khẩu dầu mỏ lớn nhất Thế giới?",
                "answer" => "OPEC"
            ],
            [
                "question" => "Đồng Tiền nào có tỉ giá hối đoái lớn nhất so với VNĐ?",
                "answer" => "Bảng"
            ],
            [
                "question" => "1 trong những Căn bệnh chưa có thuốc Đặc trị hiện nay?",
                "answer" => "AIDS"
            ],
            [
                "question" => "Tác giả của bộ truyện tranh nổi tiếng Thám tử lừng danh CONAN?",
                "answer" => "Gosho Aoyama"
            ],
            [
                "question" => "Dictionary trong Tiếng Anh nghĩa là gì?",
                "answer" => "Từ Điển"
            ],
            [
                "question" => "Dụng cụ đo thân nhiệt?",
                "answer" => "Nhiệt kế"
            ],
            [
                "question" => "Eva được sinh ra từ bộ phận nào của Adam?",
                "answer" => "Xương sườn"
            ],
            [
                "question" => "San hô là sinh vật loại nào?",
                "answer" => "Cả 2 đều đúng"
            ],
            [
                "question" => "Rồng Komodo sống ở đâu?",
                "answer" => "Indonexia"
            ],
            [
                "question" => "Tắt đèn là tác phẩm của nhà văn nào?",
                "answer" => "Ngô Tất tố"
            ],
            [
                "question" => "Lực hút ở mặt Trăng nhỏ gấp bao nhiêu lần Trái đất?",
                "answer" => "6 lần"
            ],
            [
                "question" => "Loài Cá nào sống không sống ở biển?",
                "answer" => "Basa"
            ],
            [
                "question" => "Quốc Gia có diện tích lớn thứ 2 trên thế giới?",
                "answer" => "Canada"
            ],
            [
                "question" => "Thành nhà Hồ là di tích ở tỉnh nào nước ta?",
                "answer" => "Thanh Hoa"
            ],
            [
                "question" => "Tobicom là dược phẩm dùng để trị bệnh gì?",
                "answer" => "Đau mắt"
            ],
            [
                "question" => "Mặt trời phát ra tia gì trong các tia sau?",
                "answer" => "Cả 2 đều đúng"
            ],
            [
                "question" => "Tên 1 chuyên mục của tuần báo Mực Tím?",
                "answer" => "Vườn hoang"
            ],
            [
                "question" => "Đại dương nào lớn nhất?",
                "answer" => "Thái Bình Dương"
            ],
            [
                "question" => "PC là có nghĩa gì trong tin học?",
                "answer" => "Máy tính cá nhân"
            ],
            [
                "question" => "Loài vật nào không có hàm răng trên?",
                "answer" => "Trâu"
            ],
            [
                "question" => "Vào mùa nào thì Trái đất gần mặt trời nhất?",
                "answer" => "Hạ"
            ],
            [
                "question" => "Cầu thủ được mệnh danh là \"Người ngoài Hành tinh\"",
                "answer" => "Ronaldo"
            ],
            [
                "question" => "Cầu thủ được ví là có chân phải khéo như bàn tay",
                "answer" => "Zidane"
            ],
            [
                "question" => "Loài vật không nằm trong 12 con giáp (Việt Nam)?",
                "answer" => "Thỏ"
            ],
            [
                "question" => "Ngọn núi nổi tiếng Nhật Bản?",
                "answer" => "Phú Sĩ"
            ],
            [
                "question" => "Nhãn hiệu Bánh đậu xanh nổi tiếng?",
                "answer" => "Rồng vàng"
            ],
            [
                "question" => "Tên gọi khác của hoa Trinh Nữ?",
                "answer" => "Mắc cở"
            ],
            [
                "question" => "Bức tranh nổi tiếng của Leonard de Vinci?",
                "answer" => "Lagiocongder"
            ],
            [
                "question" => "Thuý Kiều có mấy người em?",
                "answer" => "2 người"
            ],
            [
                "question" => "Danh hài giành giải nhất GALA Cười 2003?",
                "answer" => "Xuân Bắc"
            ],
            [
                "question" => "Tên của con quỷ chuyên hút máu?",
                "answer" => "Dracula"
            ],
            [
                "question" => "Loài cá duy nhất có thể nháy mắt?",
                "answer" => "Cá Mập"
            ],
            [
                "question" => "Truyện tranh vịt Donal bị cấm tại nước nào (vì các nhân vật không mặc quần)?",
                "answer" => "Hà Lan"
            ],
            [
                "question" => "Cơ bắp mạnh nhất trong cơ thể con người là?",
                "answer" => "Cơ Lưỡi"
            ],
            [
                "question" => "Người đầu tiên đặt chân lên mặt Trăng?",
                "answer" => "Neil Amtrong"
            ],
            [
                "question" => "Trọng tài nổi tiếng \"lạnh\" nhất Thế giới 2006?",
                "answer" => "Colina"
            ],
            [
                "question" => "Đạo diễn bộ phim \"Chiến tranh giữa các vì sao\"",
                "answer" => "George Lucas"
            ],
            [
                "question" => "Đội tuyển nào được mệnh danh là \"Cơn lốc màu da cam\"?",
                "answer" => "Hà Lan"
            ],
            [
                "question" => "Người đầu tiên đoạt giải Olympia?",
                "answer" => "Trần Ngọc Minh"
            ],
            [
                "question" => "Chất khí thường dùng để bơm vào bể bơi để diệt khuẩn?",
                "answer" => "Clo"
            ],
            [
                "question" => "Báo gấm chạy với vận tốc bao nhiêu?",
                "answer" => "60 dặm-1h"
            ],
            [
                "question" => "Loài vật có tốc độ di chuyển nhanh nhất Thế giới?",
                "answer" => "Chim Ưng"
            ],
            [
                "question" => "Tên của nhân vật điệp viên 007 trong phim \"Điệp Viên 007\"?",
                "answer" => "James Bond"
            ],
            [
                "question" => "Việt Nam kháng chiến chống Mỹ trong bao nhiêu năm?",
                "answer" => "21 năm"
            ],
            [
                "question" => "Người đóng thế trong các pha mạo hiểm trong phim gọi là gì?",
                "answer" => "Cascader"
            ],
            [
                "question" => "Sông Nhật Lệ thuộc địa phận tỉnh nào?",
                "answer" => "Quảng Bình"
            ],
            [
                "question" => "Jackie Chan là tên tiếng Anh của diễn viên điện ảnh nào?",
                "answer" => "Thành Long"
            ],
            [
                "question" => "Tiếng Anh và tiếng Pháp có nguồn gốc từ?",
                "answer" => "Tiếng Đức"
            ],
            [
                "question" => "Cuốn sách khoa học vật lý nổi tiếng 1987 \"Lược sử thời gian\" do nhà khoa học nào viết?",
                "answer" => "Stephen Hawking"
            ],
            [
                "question" => "Nicolas Copecnic, người phản bác \"Trái đất là trung tâm vũ trụ\" là người nước nào?",
                "answer" => "Ba Lan"
            ],
            [
                "question" => "Nhắc đến Issac Newton người ta thường nghĩ đến trái cây nào?",
                "answer" => "Táo"
            ],
            [
                "question" => "Theo quan điểm duy tâm thì Vật Chất hay ý Thức có trước?",
                "answer" => "ý thức"
            ],
            [
                "question" => "Tổ chức ASEAN thành lập vào năm nào?",
                "answer" => "1967"
            ],
            [
                "question" => "Ai là người đầu tiên phát hiện=>ánh sáng có vận tốc hữu hạn?",
                "answer" => "Christensen Roeme"
            ],
            [
                "question" => "Trong các tia sau đây, tia nào có bước sóng ngắn nhất?",
                "answer" => "Tia Gamma"
            ],
            [
                "question" => "Con gì sẽ hoá thành muỗi khi trưởng thành?",
                "answer" => "Lăng Quăng"
            ],
            [
                "question" => "Vị thần cai quản biển, sông theo thần thoại Trung Hoa gọi là gì?",
                "answer" => "Long vương"
            ],
            [
                "question" => "Quốc gia nào không thuộc bán đảo Đông Dương?",
                "answer" => "Thái Lan"
            ],
            [
                "question" => "Nhà tiên tri với những câu sấm truyền linh nghiệm?",
                "answer" => "Nostradamus"
            ],
            [
                "question" => "Tập đoàn không kinh doanh Điện Thoại Di Động?",
                "answer" => "Toyota"
            ],
            [
                "question" => "Thủ đô Nhật Bản xưa kia tên gọi là gì?",
                "answer" => "Edo"
            ],
            [
                "question" => "Bức hoạ Monalisa của Leonard de Vinci có tên gọi khác là gì?",
                "answer" => "La Giocongder"
            ],
            [
                "question" => "Ca khúc \"Tình cờ\" do nhạc sĩ nào sáng tác?",
                "answer" => "Điệp Minh Tuyền"
            ],
            [
                "question" => "Vị tướng đã phá quân Mông Cổ ở Hàm Tử Quan",
                "answer" => "Trần Nhật Duật"
            ],
            [
                "question" => "Tên một bức tranh dân gian có 12 con chuột?",
                "answer" => "Đám cưới chuột"
            ],
            [
                "question" => "Ai đã nói câu=>\"Ta thà làm ma nước Nam, còn hơn làm vương đất Bắc\"?",
                "answer" => "Trần Bình Trọng"
            ],
            [
                "question" => "Chùa một cột được xây dựng dưới thời nào?",
                "answer" => "Lý"
            ],
            [
                "question" => "Bình Ngô Đại Cáo do ai sáng tác?",
                "answer" => "Nguyễn Trãi"
            ],
            [
                "question" => "Quốc Gia nổi tiếng về trồng Hoa Hồng?",
                "answer" => "Bungary"
            ],
            [
                "question" => "Thành phố lớn nhất ở miền tây Canada là gì?",
                "answer" => "Vancouver"
            ],
            [
                "question" => "Năm 939 trên sông Bạch Đằng, Ngô Quyền đánh tan quân giặc nào?",
                "answer" => "Nam Hán"
            ],
            [
                "question" => "Ai tìm ra Penecilline?",
                "answer" => "Fleming"
            ],
            [
                "question" => "Tác giả bài hát \"Anh Ba Hưng\"?",
                "answer" => "Trần Kiết Tường"
            ],
            [
                "question" => "Bộ Địa chí đầu tiên của Sài Gòn xưa?",
                "answer" => "Gia Định Thành Đông Chí"
            ],
            [
                "question" => "Văn hào người Anh, tác giả \"Tiếng gọi nơi hoang dã\"?",
                "answer" => "Jack London"
            ],
            [
                "question" => "Senegal nằm ở vùng nào của Châu Phi?",
                "answer" => "Bắc Phi"
            ],
            [
                "question" => "Một Ca khúc nổi tiếng của Michael Jackson?",
                "answer" => "Heal the world"
            ],
            [
                "question" => "Con sông dài nhất thế giới?",
                "answer" => "Nil"
            ],
            [
                "question" => "UN là tên viết tắt của tổ chức nào?",
                "answer" => "Liên Hiệp Quốc"
            ],
            [
                "question" => "Ngày lễ tình yêu?",
                "answer" => "Ngày 14-02"
            ],
            [
                "question" => "Hoàng đế cuối cùng của Việt Nam?",
                "answer" => "Bảo Đại"
            ],
            [
                "question" => "Bức tranh Portrait of Dr.Gauchet của Van Gogh được sáng tác năm nào?",
                "answer" => "Năm 1890"
            ],
            [
                "question" => "Diễn viên chính trong bộ phim Tây Du ký của Ngô Thừa Ân?",
                "answer" => "Lục Tiểu Linh Đồng"
            ],
            [
                "question" => "Ngọn núi Sapa thuộc dãy núi nào?",
                "answer" => "Hoàng Liên Sơn"
            ],
            [
                "question" => "Ca khúc gắn liền với bộ phim \"Love Story\" do Andy Williams sáng tác?",
                "answer" => "Where do I begin"
            ],
            [
                "question" => "Khách sạn được xây dựng sớm nhất ở Sài Gòn thời Pháp thuộc, hiện nay tên gì?",
                "answer" => "Continental"
            ],
            [
                "question" => "Thầy tro Đường Tăng có bao nhiêu thành viên?",
                "answer" => "5"
            ],
            [
                "question" => "1 bảng Anh (pound) có bao nhiêu xu (penny)?",
                "answer" => "100"
            ],
            [
                "question" => "0 độ C (Celcius) tương ứng bao nhiêu độ F (Fahrenheit)?",
                "answer" => "273"
            ],
            [
                "question" => "Trường Đại học nào không phải ở Mỹ?",
                "answer" => "Cambridge"
            ],
            [
                "question" => "Dải tần số nào có tần số cao nhất trong các dải tần sau?",
                "answer" => "EHF"
            ],
            [
                "question" => "Đây không phải là ngôn ngữ lập trình?",
                "answer" => "D"
            ],
            [
                "question" => "Khái niệm nào khác nhất so với mấy khái niệm khác?",
                "answer" => "Tự nhiên"
            ],
            [
                "question" => "Đập thủy điện lớn nhất thế giới, Three Gorges, ở quốc gia nào?",
                "answer" => "Trung Quốc"
            ],
            [
                "question" => "Vận tốc của âm thanh?",
                "answer" => "1000 km-h"
            ],
            [
                "question" => "Điền vào dãy sau=>A,D,G,J,...",
                "answer" => "L"
            ],
            [
                "question" => "Tuấn cao hơn Nam, Bình thấp hơn Tuấn. Câu nào dưới đây là đúng nhất?",
                "answer" => "Chưa chắc"
            ],
            [
                "question" => "Số tiếp theo của dãy=>19, 28, 37, 46, ... là số nào?",
                "answer" => "55"
            ],
            [
                "question" => "1 tờ báo giảm giá 20%, cần phải tăng mấy% để có giá như cũ?",
                "answer" => "25%"
            ],
            [
                "question" => "Gang là hợp chất của Sắt và 1 lượng nhỏ chất gì?",
                "answer" => "Cacbon"
            ],
            [
                "question" => "Người giàu nhất Thế giới 2006-2007 là ai?",
                "answer" => "Bill Gates"
            ],
            [
                "question" => "Nhà thơ Tago là người nước nào?",
                "answer" => "An Độ"
            ],
            [
                "question" => "Nước mắm được chiết suất từ loài động vật nào?",
                "answer" => "Cá"
            ],
            [
                "question" => "Trang phục truyền thống của Nhật Bản?",
                "answer" => "Kimono"
            ],
            [
                "question" => "Loài hoa nào thường được ướp cùng Trà Xanh?",
                "answer" => "Nhài"
            ],
            [
                "question" => "Tổ sư của môn võ Thiếu Lâm ngày nay?",
                "answer" => "Đạt Ma"
            ],
            [
                "question" => "Ngôn ngữ nào được nhiều người dùng nhất trên thế giới?",
                "answer" => "Trung Quốc"
            ],
            [
                "question" => "Quốc gia có diện tích nhỏ nhất?",
                "answer" => "Vatican"
            ],
            [
                "question" => "Vị tướng muốn chinh phạt cả Châu Âu?",
                "answer" => "Napoleon"
            ],
            [
                "question" => "Copernicus nổi tiếng trong lĩnh vực nào?",
                "answer" => "Thiên văn học"
            ],
            [
                "question" => "Số tiếp theo 1, 1, 2, 3, 5, ...?",
                "answer" => "8"
            ],
            [
                "question" => "ký hiệu hóa học của Vàng là gì?",
                "answer" => "Au"
            ],
            [
                "question" => "Theo thần thoại Hy Lạp, Saturn là tên vị thần nào?",
                "answer" => "Thần nông"
            ],
            [
                "question" => "Sao Thiên Vương quay quanh mặt trời mất trong bao lâu?",
                "answer" => "84 năm"
            ],
            [
                "question" => "Bạch Đằng Giang Phú là bài thơ do ai sáng tác?",
                "answer" => "Trương Hán Siêu"
            ],
            [
                "question" => "Điền số tiếp theo trong dãy=>144, 121, 100, 81, 64, ...?",
                "answer" => "49"
            ],
            [
                "question" => "Người ta thường nói=>\"xa mặt cách ...\"?",
                "answer" => "Lòng"
            ],
            [
                "question" => "Bài kiểm tra IQ hoàn thiện đầu tiên trên thế giới do ai phát triển?",
                "answer" => "Alfred Binet"
            ],
            [
                "question" => "Chỉ số IQ của 1 đứa bé được nhận làm con nuôi có thể dự đoán được dựa vào?",
                "answer" => "Bố mẹ ruột"
            ],
            [
                "question" => "Yếu tố di truyền quyết định bao nhiêu phần trăm sự thông minh?",
                "answer" => "50%"
            ],
            [
                "question" => "Nhà máy lọc dầu Dung Quất được xây dựng ở tỉnh nào?",
                "answer" => "Quảng Ngãi"
            ],
            [
                "question" => "Bác Tôn Đức Thắng sinh vào năm nào?",
                "answer" => "1888"
            ],
            [
                "question" => "IMO là kỳ thi quốc tế tổ chức lần đầu tiên tại VN 2007, môn thi là?",
                "answer" => "Toán học"
            ],
            [
                "question" => "Cầu thủ giành được danh hiệu chiếc giày vàng châu Âu 2007?",
                "answer" => "Francesco Totti"
            ],
            [
                "question" => "Federer là vận động viên 3 lần liên tiếp nhận giải Laureus chơi môn thể thao nào?",
                "answer" => "Quần vợt"
            ],
            [
                "question" => "Cái gì có thể cắt được kim cương?",
                "answer" => "Kim cương"
            ],
            [
                "question" => "Gấu trắng và Voi biển sống ở đâu?",
                "answer" => "Bắc cực"
            ],
            [
                "question" => "Chuyến bay đầu tiên của con người vào vũ trụ tiến hành vào năm nào?",
                "answer" => "1961"
            ],
            [
                "question" => "Nguyên tố có số thứ tự là 2 trong bảng hệ thống tuần hoàn của Mendelep?",
                "answer" => "He"
            ],
            [
                "question" => "Tác giả bài thơ \"Bên kia sông Đuống\"?",
                "answer" => "Hoàng Cầm"
            ],
            [
                "question" => "Số nào không hợp quy luật trong dãy sau=>9 7 8 6 7 5 6 3?",
                "answer" => "3"
            ],
            [
                "question" => "Nhà hàng hải vĩ đại Fernando Magienlang (1480-1521) là người nước nào?",
                "answer" => "Bồ Đào Nha"
            ],
            [
                "question" => "Đại dương nào nhỏ nhất trên thế giới?",
                "answer" => "Bắc Băng Dương"
            ],
            [
                "question" => "Hổ Phách theo tiếng Hy Lạp là gì?",
                "answer" => "Electron"
            ],
            [
                "question" => "Thủ đô nào ở châu Âu nằm trên 96 hòn đảo, được nối với nhau bằng những chiếc cầu?",
                "answer" => "Amstecdam (Hà Lan)"
            ],
            [
                "question" => "Nữ thần Athena, 1 trong 12 vị thần của đỉnh Olympus, đại diện cho điều gì?",
                "answer" => "Trí tuệ"
            ],
            [
                "question" => "Danh họa mở đầu trường phái lập thể của hội họa đầu thế kỷ XX?",
                "answer" => "Picasso"
            ],
            [
                "question" => "Giải Nobel văn chương được bắt đầu trao vào năm nào?",
                "answer" => "1901"
            ],
            [
                "question" => "Ai là người sáng lập ra môn Vi sinh vật học?",
                "answer" => "Luis Pauster"
            ],
            [
                "question" => "Moocgan sử dụng loài vật nào để nghiên cứu di truyền học?",
                "answer" => "Ruồi giấm"
            ],
            [
                "question" => "Khi đến tâm trái đất, trọng lượng của một quả cân 10kg bằng bao nhiêu?",
                "answer" => "0 Kg"
            ],
            [
                "question" => "Lý Nam Đế (Lý Bí) thành lập nhà nước dân tộc độc lập ở giữa thời Bắc thuộc mang tên?",
                "answer" => "Vạn xuân"
            ],
            [
                "question" => "Công thức nổi tiếng E=mc2 là của ai?",
                "answer" => "Einstein"
            ],
            [
                "question" => "Vận động viên Marathon ngày nay cần chạy bao nhiêu dặm để đến được đích?",
                "answer" => "26"
            ],
            [
                "question" => "Hành tinh mang tên Jupiter - vị thần khỏe nhất trong thần thoại Hy Lạp có tên tiếng Việt là?",
                "answer" => "Mộc tinh"
            ],
            [
                "question" => "4 loài cá Trong bài thơ Đoàn thuyền đánh cá của Huy Cận là=>Chim,Thu, Nhụ, và...?",
                "answer" => "Cá Đé"
            ],
            [
                "question" => "Danh hiệu thủ đô văn hóa của châu Âu 1999 được trao cho thành phố nào?",
                "answer" => "Vaima"
            ],
            [
                "question" => "Chùa một cột được xây năm 1409 còn có tên gọi là gì?",
                "answer" => "Diên Hựu"
            ],
            [
                "question" => "Sao Thủy có tên của một vị thần chạy nhanh nhất trong thần thoại Hy Lạp nào?",
                "answer" => "Mercury"
            ],
            [
                "question" => "ở châu Âu, người ta đặt tên cho tháng 1 là January, đây là tên vị thần nào?",
                "answer" => "Thần chiến tranh"
            ],
            [
                "question" => "Nguyễn Khắc Hiếu (8-5-1889) là tên thật của nhà thơ nào?",
                "answer" => "Tản Đà"
            ],
            [
                "question" => "Johannes Gutenberg đã phát minh ra cái gì giúp cho thời kỳ Phục Hưng phát triển mạnh mẽ?",
                "answer" => "Máy In"
            ],
            [
                "question" => "Ngô Quyền có quan hệ gì với Dương Đình Nghệ?",
                "answer" => "Con rể"
            ],
            [
                "question" => "Loài vật nào thường được dùng để vận chuyển hàng hóa ở Thái Lan?",
                "answer" => "Voi"
            ],
            [
                "question" => "Ai tự xưng mình là Hậu Lý Nam Đế?",
                "answer" => "Lý Phật Tử"
            ],
            [
                "question" => "Đất Vị Hoàng là địa danh thuộc tỉnh nào?",
                "answer" => "Nam Định"
            ],
            [
                "question" => "Số dân Việt Nam đứng thứ mấy Đông Nam á?",
                "answer" => "2"
            ],
            [
                "question" => "Quê gốc của Lý Thường Kiệt là vùng đất nào?",
                "answer" => "Thăng Long"
            ],
            [
                "question" => "Sao Hỏa có bao nhiêu vệ tinh tự nhiên?",
                "answer" => "2"
            ],
            [
                "question" => "Bài thơ nào không nằm trong chùm thơ mùa thu của Nguyễn Khuyến?",
                "answer" => "Thu ngẫm"
            ],
            [
                "question" => "Hà Lan và Đan Mạch là 2 quốc gia có địa hình 100% là gì?",
                "answer" => "Đồng Bằng"
            ],
            [
                "question" => "Việt Nam lần đầu tiên tham dự kì thi Olympic Toán quốc tế vào năm nào?",
                "answer" => "1974"
            ],
            [
                "question" => "Vạn Thắng Vương là biệt hiệu của ai?",
                "answer" => "Đinh Bộ Lĩnh"
            ],
            [
                "question" => "Thành phần chính cấu tạo thành tế bào nấm là gì?",
                "answer" => "Kitin"
            ],
            [
                "question" => "Ai là người đầu tiên sử dụng thuật ngữ \"Phép chia vàng\"?",
                "answer" => "Leonard de Vinci"
            ],
            [
                "question" => "Tên 2 ngôi sao sáng nhất của chòm Tráng sĩ (Orion)?",
                "answer" => "Rigel - Betelgeuse"
            ],
            [
                "question" => "Bài thơ đăng báo đầu tiên của Nguyễn Bính?",
                "answer" => "Cô hái mơ"
            ],
            [
                "question" => "Tồn tại hay không tồn tại là câu nói nổi tiếng của nhân vật nào?",
                "answer" => "Hamlet"
            ],
            [
                "question" => "Người lãnh đạo phong trào Bình Xuyên trong kháng chiến chống Pháp?",
                "answer" => "Dương Văn Dương"
            ],
            [
                "question" => "Ai là thủ tướng đầu tiên của Singapore?",
                "answer" => "Lý Quang Diệu"
            ],
            [
                "question" => "Thủ đô Jakarta nằm trên hòn đảo nào của Indonesia?",
                "answer" => "Java"
            ],
            [
                "question" => "Machu Pichu là tên một di tích lịch sử ở quốc gia nào ngày nay?",
                "answer" => "Peru"
            ],
            [
                "question" => "Số lượng cửa sông Tiền và sông Hậu lần lượt là?",
                "answer" => "6,3"
            ],
            [
                "question" => "Người Việt Nam được phong hàm tướng của cả 2 quốc gia VN và Trung Quốc?",
                "answer" => "Nguyễn Sơn"
            ],
            [
                "question" => "Thành phố nào được mệnh danh là Paris của phương đông?",
                "answer" => "Thượng Hải"
            ],
            [
                "question" => "Nguyên thủ quốc gia nào đầu tiên đến thăm Việt Nam sau CMT8 thành công?",
                "answer" => "ấn Độ"
            ],
            [
                "question" => "Họ tên thật của nhân vật Thoại Ngọc Hầu?",
                "answer" => "Nguyễn Văn Thoại"
            ],
            [
                "question" => "Quê gốc của tổng đốc Hoàng Diệu?",
                "answer" => "Quảng Nam"
            ],
            [
                "question" => "Vùng công nghiệp lớn nhất nước Đức có tên là gì?",
                "answer" => "Ruhr"
            ],
            [
                "question" => "Sông nào dài thứ 3 ở châu Âu?",
                "answer" => "Rhine"
            ],
            [
                "question" => "Vào năm nào Mỹ và Liên Xô tuyên bố chấm dứt chiến tranh lạnh?",
                "answer" => "1989"
            ],
            [
                "question" => "Asuncion là thủ đô của nước nào?",
                "answer" => "Paraquay"
            ],
            [
                "question" => "Đảo nào của Indonesia không có đường Xích Đạo chạy qua?",
                "answer" => "Java"
            ],
            [
                "question" => "Đại hội anh hùng chiến sỹ thi đua toàn quân lần thứ nhất diễn ra vào năm nào?",
                "answer" => "1951"
            ],
            [
                "question" => "Vật nào không nằm trong \"An Nam tứ đại khí\" của Việt Nam?",
                "answer" => "Chùa một cột"
            ],
            [
                "question" => "Năm 79 sau CN, ngọn núi lửa nào đã phun trào và chôn vùi thành phố Pompei ở Italia?",
                "answer" => "Vesuvius"
            ],
            [
                "question" => "Liên hoan phim Cannes thường được tổ chức vào tháng nào trong năm?",
                "answer" => "Tháng 5"
            ],
            [
                "question" => "Hiệp hội WGAE và WGAW đã bình chọn bộ phim nào là có kịch bản hay nhất mọi thời đại?",
                "answer" => "Casablanca"
            ],
            [
                "question" => "Chỉ số khoa học BMI dùng để đánh giá cái gì ở con người?",
                "answer" => "Sự cân đối"
            ],
            [
                "question" => "Kết quả của phép tính=>1000 x 1000 x 1000 =?",
                "answer" => "1 Tỷ"
            ],
            [
                "question" => "Con khỉ gió là con gì?",
                "answer" => " Con Culi"
            ],
            [
                "question" => "Tỉnh nào sau đây không giáp biển?",
                "answer" => "Gia Lai"
            ],
            [
                "question" => "Điền vào câu sau=>\"Nhất Nam viết hữu, ... Nữ viết vô\"?",
                "answer" => "Thập"
            ],
            [
                "question" => "Đội tuyển Nam và đội tuyển Nữ nước nào đều từng vô địch WorldCup?",
                "answer" => "Đức"
            ],
            [
                "question" => "Tỉnh nào có nhiều quận, huyện nhất cả nước?",
                "answer" => "Thanh Hóa"
            ],
            [
                "question" => "Cầu thủ ngoài châu Âu đầu tiên đoạt Quả Bóng Vàng châu ÂU?",
                "answer" => "G.Weah"
            ],
            [
                "question" => "Một dãy nhiều sinh vật có quan hệ dinh dưỡng với nhau gọi là gì?",
                "answer" => "Chuỗi thức ăn"
            ],
            [
                "question" => "Năm 2004, bức tượng Davis của Michellangelo tròn bao nhiêu tuổi?",
                "answer" => "500"
            ],
            [
                "question" => "Sau khi tan rã, Liên xô tách thành bao nhiêu quốc gia?",
                "answer" => "15 quốc gia"
            ],
            [
                "question" => "Người nước nào phát minh ra diêm?",
                "answer" => "Thụy Điển"
            ],
            [
                "question" => "Chuyện tình của Romeo & Juliette xảy ra tại thành phố nào của Italia?",
                "answer" => "Verona"
            ],
            [
                "question" => "Vương quốc Ba Tư ngày xưa là quốc gia nào ngày nay?",
                "answer" => "Iraq"
            ],
            [
                "question" => "Người đầu tiên đặt chân đến Nam cực là người nước nào?",
                "answer" => "Na Uy"
            ],
            [
                "question" => "Thành phố có mật độ dân số cao nhất thế giới là?",
                "answer" => "Mexico city"
            ],
            [
                "question" => "Nước nào sau đây không thuộc liên hiệp Vương quốc Anh?",
                "answer" => "Cộng hòa Ireland"
            ],
            [
                "question" => "Viking là từ dùng để ám chỉ Quốc gia nào?",
                "answer" => "Na Uy"
            ],
            [
                "question" => "Quốc gia nào sau đây chưa từng phải dời thủ đô từ nơi này sang nơi khác?",
                "answer" => "Thụy Điển"
            ],
            [
                "question" => "Ngôn ngữ lập trình nào là ngôn ngữ lập trình đầu tiên?",
                "answer" => "Fortran"
            ],
            [
                "question" => "Đơn vị đo dung lượng bộ nhớ nào lớn nhất trong các đơn vị sau đây?",
                "answer" => "Tb"
            ],
            [
                "question" => "Đa số trẻ em được sinh ra tự nhiên thường vào khoảng thời gian nào trong ngày?",
                "answer" => "Nửa đêm về sáng"
            ],
            [
                "question" => "Nhà toán học Turing là người nước nào?",
                "answer" => "Tây Ban Nha"
            ],
            [
                "question" => "Liên đoàn bóng đá châu á (AFC) ra đời tại quốc gia nào?",
                "answer" => "Philipines"
            ],
            [
                "question" => "Loài nào có số lượng Nhiễm sắc thể lớn nhất trong các loài sau?",
                "answer" => "Giáp xác"
            ],
            [
                "question" => "Hoàng đế nào sống lâu nhất ở Trung Quốc",
                "answer" => "Càn Long"
            ],
            [
                "question" => "Trong các chất sau đây, chất nào có nhiệt độ sôi cao nhất?",
                "answer" => " n-Amyl axetat"
            ],
            [
                "question" => "Quốc gia nào trải dài trên nhiều vĩ tuyến nhất?",
                "answer" => "Chile"
            ],
            [
                "question" => "Bộ Nhiễm sắc thể giới tính của người bị bệnh Tơcnơ là gì?",
                "answer" => "OX"
            ],
            [
                "question" => "Con vật gì đã giúp nhà bác học Vonta phát minh ra pin?",
                "answer" => " Con muỗi"
            ],
            [
                "question" => "Kinh tuyến 0 độ và vĩ tuyến 0 độ giao nhau ở châu lục nào?",
                "answer" => "Châu Phi"
            ],
            [
                "question" => "Nước CHDCND Trung Hoa hiện nay có bao nhiêu dân tộc?",
                "answer" => "56"
            ],
            [
                "question" => "Ai đã nói=>\"Ngôn ngữ là yếu tố đầu tiên của văn học\"?",
                "answer" => "M. Gorki"
            ],
            [
                "question" => "ánh sáng mặt trời phản xạ từ Thiên vương tinh có màu gì?",
                "answer" => " Màu xanh biếc"
            ],
            [
                "question" => "Chòm sao nào có hình chữ cái W?",
                "answer" => "Thiên Hậu"
            ],
            [
                "question" => "Đơn vị đo từ thông trong hệ SI?",
                "answer" => " Wb"
            ],
            [
                "question" => "Lễ hội té nước ở Myanma diễn ra vào tháng mấy trong năm?",
                "answer" => "Tháng 4"
            ],
            [
                "question" => "Nghành công nghiệp sản xuất thủy tinh gọi là gì?",
                "answer" => "CN Silicat"
            ],
            [
                "question" => "Cây cầu treo lớn nhất thế giới Acasi Caikio nằm ở quốc gia nào?",
                "answer" => " Nhật Bản"
            ],
            [
                "question" => "Loại mưa nào sau đây được hình thành từ những trận mưa trong không khí?",
                "answer" => "Mưa tuyết"
            ],
            [
                "question" => "Chất nào có nhiệt độ nóng chảy cao nhất?",
                "answer" => "Vonfram"
            ],
            [
                "question" => "1 đơn vị thiên văn tương đương với khoảng bao nhiêu triệu Km?",
                "answer" => "1"
            ],
            [
                "question" => "Cầu thủ đeo băng đội trưởng ĐT Anh nhiều nhất hiện giờ là ai?",
                "answer" => "Billy Wright"
            ],
            [
                "question" => "Từ WorldCup năm bao nhiêu đội đương kim vô địch phải đá vòng loại?",
                "answer" => " 2006"
            ],
            [
                "question" => "Loài côn trùng nào có tốc độ bay nhanh nhất (58km-h)?",
                "answer" => "Chuồn chuồn"
            ],
            [
                "question" => "Đảo lớn nhất của Philippines, nơi có thủ đô Manila, tên là gì?",
                "answer" => "Luzon"
            ],
            [
                "question" => "Charlemange là tên thật của vị vua nào?",
                "answer" => "Karl đại dế"
            ],
            [
                "question" => "Tiểu thuyết \"Thời xa vắng\" của tác giả nào?",
                "answer" => "Lê Lựu"
            ],
            [
                "question" => "Ai là người phát hiện ra khí quyển trên sao Kim?",
                "answer" => "Lomonosov"
            ],
            [
                "question" => "Câu lạc bộ nào đoạt cúp C1 đầu tiên?",
                "answer" => " Real Madrid"
            ],
            [
                "question" => "Đội bóng nào của nước Anh đoạt nhiều danh hiệu vô địch C1 nhất?",
                "answer" => "Liverpool"
            ],
            [
                "question" => "Trong gạo lức chứa nhiều Vitamin gì nhất?",
                "answer" => "BB12"
            ],
            [
                "question" => "Loại hình âm nhạc dân gian cổ truyền Ví dặm là của vùng nào?",
                "answer" => "Nghệ Tĩnh"
            ],
            [
                "question" => "Linh Từ Quốc Mẫu là mẹ của vị vua nào nước ta?",
                "answer" => "Lý Chiêu Hoàng"
            ],
            [
                "question" => "Nguyễn Trung Trực quê ở đâu?",
                "answer" => "Kiên Giang"
            ],
            [
                "question" => "Công ty nào là nhà phát minh kỹ thuật in mực khô?",
                "answer" => "XEROX"
            ],
            [
                "question" => "Nguyên tố hóa học có nhiều thứ 2 trong vũ trụ?",
                "answer" => " He"
            ],
            [
                "question" => "Hy Lạp nằm trên bán đảo nào của châu Âu?",
                "answer" => "Balkan"
            ],
            [
                "question" => "Biệt danh Elephants là của đội bóng châu Phi nào?",
                "answer" => "Bờ biển ngà"
            ],
            [
                "question" => "Hành tinh nào có nhiệt độ trung bình cao nhất trong hệ mặt trời?",
                "answer" => "Sao Kim"
            ],
            [
                "question" => "Lễ hội Canaval là lễ hội nổi tiếng ở quốc gia nào?",
                "answer" => "Brazil"
            ],
            [
                "question" => "Luxembourg không phải là thành viên của tổ chức nào sau đây?",
                "answer" => " OPEC"
            ],
            [
                "question" => "Quốc kỳ nước nào giống hệt quốc kỳ Indonesia?",
                "answer" => "Monaco"
            ],
            [
                "question" => "Trên tờ 100USD của Mĩ có in hinh vị tổng thống nào?",
                "answer" => "Franklin"
            ],
            [
                "question" => "Nước nào sau đây không thuộc nhóm G7?",
                "answer" => "Australia"
            ],
            [
                "question" => "Điệu Flamengo xuất xứ từ vùng nào của Tây Ban Nha?",
                "answer" => "Andalucia"
            ],
            [
                "question" => "Loài hoa nào là biểu tượng của Argentina?",
                "answer" => "Gạo"
            ],
            [
                "question" => "Họa sỹ nào sau đây không phải là người Pháp?",
                "answer" => "Marc Chagall"
            ],
            [
                "question" => "Khi mới thành lập, ASEAN gồm bao nhiêu nước?",
                "answer" => "6"
            ],
            [
                "question" => "Kim Tự Tháp mặt trời còn có tên gọi khác là gì?",
                "answer" => " Teohihuacan"
            ],
            [
                "question" => "Thành phố nào sau đây là thủ phủ của tiểu bang Queensland?",
                "answer" => " Brisbane"
            ],
            [
                "question" => "Bức tượng cậu bé đứng \"tè\", biểu tượng của nước Bỉ, có tên riêng là gì?",
                "answer" => "Manneken Pis"
            ],
            [
                "question" => "Thành phố nào của Lào có dân số cao nhất?",
                "answer" => "Savannakhet"
            ],
            [
                "question" => "Hương vị chính trong các món ăn của Thái Lan là gì?",
                "answer" => "Cay"
            ],
            [
                "question" => "Đơn vị tiền tệ cũ của Hy Lạp là gì?",
                "answer" => " Drachma"
            ],
            [
                "question" => "Ngôn ngữ chính thức của Pakistan là gì?",
                "answer" => "Urdur"
            ],
            [
                "question" => "Thành phố nào của Afghanistan có nền kinh tế phát triển nhất?",
                "answer" => "Kandahar"
            ],
            [
                "question" => "Bukit Timah là ngọn núi cao nhất của Quốc gia nào?",
                "answer" => "Singapore"
            ],
            [
                "question" => "Quốc kì của George xuất hiện đầu tiên vào năm nào?",
                "answer" => "1917"
            ],
            [
                "question" => "Nước nào có nhiều lễ hội nhất trên thế giới, trung bình 3 ngày 1 lễ hội?",
                "answer" => "Colombia"
            ],
            [
                "question" => "Sử thi Đam San của dân tộc nào?",
                "answer" => "Ê đê"
            ],
            [
                "question" => "Bài thơ \"Ông đồ\" của Vũ Đình Liên lần đầu xuất hiện trên báo nào?",
                "answer" => " Tinh hoa"
            ],
            [
                "question" => "Ai là tác giả của tiểu thuyết \"Mặt trời vẫn mọc\"?",
                "answer" => " Miller Hemingway"
            ],
            [
                "question" => "Địa danh nào xuất hiện đầu tiên trong bài Tỳ Bà Hành của Bạch Cư Dị?",
                "answer" => "Bến Tầm Dương"
            ],
            [
                "question" => "3 mối quan hệ=>vua tôi, cha con, vợ chồng được gọi là gì?",
                "answer" => " Tam cương"
            ],
            [
                "question" => "Ai là người sáng tác kịch nói đầu tiên của Hà Nội với vở \"Chén thuốc độc\"?",
                "answer" => "Vũ Đình Long"
            ],
            [
                "question" => "Thời gian để mặt trời quanh quanh tâm Thiên Hà của chúng ta?",
                "answer" => "225 triệu năm"
            ],
            [
                "question" => "Một ngày trên sao Thủy dài bằng khoảng bao lâu trên Trái Đất?",
                "answer" => "6 tháng"
            ],
            [
                "question" => "Đơn vị sinh thái nào bao gồm tất cả các nhân tố vô sinh?",
                "answer" => "Hệ sinh thái"
            ],
            [
                "question" => "Napoleon Bonaparte sợ nhất con vật gì?",
                "answer" => "Con mèo"
            ],
            [
                "question" => "Môn thể thao nào đem về tấm huy chương đầu tiên cho Đoàn VN tại Seagame23?",
                "answer" => "Quần vợt"
            ],
            [
                "question" => "Ai là tác giả của \"Thủy Hử\"?",
                "answer" => "Thi Nại Am"
            ],
            [
                "question" => "Bài hát \"Tình ca\" của Hoàng Việt nhắc đến mùa nào trong năm?",
                "answer" => " Xuân"
            ],
            [
                "question" => "Cái nào không phải là 1 trong 3 đỉnh của tam giác quỷ Bermuda?",
                "answer" => "Đảo Hawaii"
            ],
            [
                "question" => "Thuật ngữ Big Bang (vụ nổ lớn) đã được nhà khoa học nào đề xuất?",
                "answer" => "F.Hoyle"
            ],
            [
                "question" => "Chùa Thiên Mụ do ai đặt tên?",
                "answer" => "Nguyễn Hoàng"
            ],
            [
                "question" => "Chất nào sau đây có khả năng cho phản ứng tráng gương?",
                "answer" => "Glucozo"
            ],
            [
                "question" => "Ca sỹ Việt Nam nào tham gia liên hoan tiếng hát châu á lần thứ 2?",
                "answer" => "Mỹ Linh"
            ],
            [
                "question" => "Ngoài Nam Phi, trên thế giới còn có nước nào có nhiều hơn 1 Thủ đô?",
                "answer" => "Yemen"
            ],
            [
                "question" => "Sau 1975, cả nước bắt đầu sử dụng chung một loại tiền từ năm nào?",
                "answer" => "1986"
            ],
            [
                "question" => "Cái gì là \"bức bình phong của kinh thành Huế\"?",
                "answer" => "Núi Ngự Bình"
            ],
            [
                "question" => "Hào khí Đông A là tinh thần của triều đại nào?",
                "answer" => " Nhà Trần"
            ],
            [
                "question" => "Tác phẩm truyện ngắn nào đã kết thúc bằng câu=>\"Tiên sư anh Tào Tháo\"?",
                "answer" => "Số Đỏ"
            ],
            [
                "question" => "Lớp màng ngoài cùng của màng não là gì?",
                "answer" => "Màng cứng"
            ],
            [
                "question" => "Nước Triều Tiên bị chia 2 miền Nam Bắc tại vĩ tuyến số bao nhiêu?",
                "answer" => "38"
            ],
            [
                "question" => "Ai là tác giả bài hát \"Trên đỉnh Phù Vân\"?",
                "answer" => "Phó Đức Phương"
            ],
            [
                "question" => "Muốn đến thăm di tích lịch sử Dinh Họ Vương, bạn phải đến địa danh nào?",
                "answer" => "Hà Giang"
            ],
            [
                "question" => "Đại hội thể thao các nước châu á có tên là gì?",
                "answer" => "Asiad"
            ],
            [
                "question" => "ở Đông Nam á hiện nay, có bao nhiêu quốc gia còn có vua trị vì?",
                "answer" => "3"
            ],
            [
                "question" => "ở Thái Bình có lễ hội gì sau đây?",
                "answer" => "Hội Chùa Keo"
            ],
            [
                "question" => "Sa mạc Gobi thuộc quốc gia nào?",
                "answer" => "Mông Cổ"
            ],
            [
                "question" => "Tháng 3 có bao nhiêu ngày?",
                "answer" => "31"
            ],
            [
                "question" => "Tên gọi của nguyên tố Clo (Cl) có nghĩa là gì?",
                "answer" => "Vàng lục"
            ],
            [
                "question" => "Bộ phim \"Cánh đồng hoang\" dựa trên tác phẩm của nhà văn nào?",
                "answer" => "Quang Sáng"
            ],
            [
                "question" => "Maradona đã đoạt chức vô địch quốc gia Italia 1987 với câu lạc bộ nào?",
                "answer" => "Napoli"
            ],
            [
                "question" => "Khu lăng mộ của vị hoàng đế Trung Quốc đầu tiên nằm ở tình nào?",
                "answer" => "Thiểm Tây"
            ],
            [
                "question" => "Ai là người đầu tiên đưa ra công thức của bài toán cơ học?",
                "answer" => " Acsimet"
            ],
            [
                "question" => "Chùa Dơi thuộc tỉnh nào của nước ta?",
                "answer" => " Sóc Trăng"
            ],
            [
                "question" => "Tờ báo đầu tiên của Cách mạng Nga là gì?",
                "answer" => "Tia Lửa"
            ],
            [
                "question" => "Đơn vị tính độ phân giải màn hình là gì?",
                "answer" => "Pixel"
            ],
            [
                "question" => "Đội tuyển nào vô địch giải bóng đá nữ Việt Nam 2006?",
                "answer" => "Hà Tây"
            ],
            [
                "question" => "Napoleon đã bị trục xuất và sống những ngày cuối đời tại hòn đảo nào?",
                "answer" => "Saint Helen"
            ],
            [
                "question" => "Đơn vị tiền tệ của Thụy Điển là gì?",
                "answer" => "Krone"
            ],
            [
                "question" => "Hóa thạch tôm ba lá tìm thấy được ở kỷ nào?",
                "answer" => " Kỷ Cambri"
            ],
            [
                "question" => "Bài thơ nào sau đây không phải là của nữ thi sĩ Hồ Xuân Hương?",
                "answer" => "Hát ru"
            ],
            [
                "question" => "Ai là người thực hiện phản ứng hạt nhân đầu tiên?",
                "answer" => "Rutherford"
            ],
            [
                "question" => "Sông Danuyp đổ ra Biển Đen tại Quốc Gia nào?",
                "answer" => "Rumania"
            ],
            [
                "question" => "Câu lạc bộ nào có nhiều cầu thủ đoạt Quả Bóng Vàng châu Âu nhất?",
                "answer" => "Juventus"
            ],
            [
                "question" => "Cơ quan năng lượng nguyên tử quốc tế viết tắt là gì?",
                "answer" => "IAEA"
            ],
            [
                "question" => "WLAN là viết tắt của hệ thống mạng nào?",
                "answer" => "Mạng không dây"
            ],
            [
                "question" => "Người châu á đầu tiên bay vào vũ trụ?",
                "answer" => "Lục Thiên Bảo"
            ],
            [
                "question" => "Giá trị cực đại của li độ trong dao động được gọi là gì?",
                "answer" => "Biên độ"
            ],
            [
                "question" => "Sông Linh Giang hay Thanh Hà là tên gọi khác của dòng sông nào?",
                "answer" => "Sông Gianh"
            ],
            [
                "question" => "Thành phố nào của Việt Nam trước đây từng có tên là Tống Bình?",
                "answer" => " Hà Nội"
            ],
            [
                "question" => "Đơn vị tồn tại của loài trong thiên nhiên là gì?",
                "answer" => " Quần thể"
            ],
            [
                "question" => "Trong 5 giác quan lưỡi thuộc giác quan nào?",
                "answer" => "Vị giác"
            ],
            [
                "question" => "Nguyên tố Cacbon có bao nhiêu electron?",
                "answer" => "6 electron"
            ],
            [
                "question" => "Tóc nâu môi trầm là tên một ca khúc gắn liền với ca sĩ trình bày nào?",
                "answer" => "Mỹ Tâm"
            ],
            [
                "question" => "Hồ nước nổi tiếng ở Hà Nội tên gì?",
                "answer" => "Hồ Hoàn Kiếm"
            ],
            [
                "question" => "Vị vua cuối cùng của triều đại Phong Kiến Việt Nam là?",
                "answer" => "Bảo Đại"
            ],
            [
                "question" => "Quần áo cỡ lớn nhất thường được ký hiếu như thế nào?",
                "answer" => "XXM"
            ],
            [
                "question" => "Loại hình văn nghệ nào mà người bình dân Nam bộ rất ưa thích?",
                "answer" => "Cải lương"
            ],
            [
                "question" => "Ngày sinh của chủ tịch Hồ Chí Minh?",
                "answer" => "19-05-1890"
            ],
            [
                "question" => "Trong các loài chim dưới đây loài nào thường hay ăn thịt?",
                "answer" => "Kên kên"
            ],
            [
                "question" => "Vật thể trong máu gồm có =>Bạch Cầu, Tiểu Cầu và?",
                "answer" => "Hồng Cầu"
            ],
            [
                "question" => "Trong các từ sau đây, từ nào không dùng để chỉ râu?",
                "answer" => "Trái xoan"
            ],
            [
                "question" => "Năm 938, Ngô Quyền đánh tan quân?",
                "answer" => "Nam hán"
            ],
            [
                "question" => "Con sông chảy qua thành phố Huế là sông gì?",
                "answer" => "Sông Hương"
            ],
            [
                "question" => "Con sông chính ở Ai Cập tên gì?",
                "answer" => "Nil"
            ],
            [
                "question" => "Ngọn núi cao nhất nước ta tên gì?",
                "answer" => "Fansipan"
            ],
            [
                "question" => "Con sông dài nhất Nam Mỹ tên gì?",
                "answer" => "Amazone"
            ],
            [
                "question" => "Trong lúc điều trị bệnh sốt xuất huyết bác sĩ thường khuyên người bệnh uống nước gì?",
                "answer" => "Nước chanh"
            ],
            [
                "question" => "Trong các loài dưới đây, con nào không thuộc loài bò sát?",
                "answer" => "ốc bươu"
            ],
            [
                "question" => "Christopher Columbus khám phá ra châu Mỹ năm nào?",
                "answer" => "1492"
            ],
            [
                "question" => "Môn thể thao nào sau đây không có vị trí thủ môn?",
                "answer" => "Bóng bầu dục"
            ],
            [
                "question" => "Vùng nào là vùng trồng dâu nuôi tằm công nghiệp lớn nhất nước ta?",
                "answer" => "Tây nguyên"
            ],
            [
                "question" => "Loại nào sau đây khi nảy mầm sẽ sinh độc tố?",
                "answer" => "Khoai tây"
            ],
            [
                "question" => "Đồng tiền đầu tiên trong lịch sử nước ta được đúc vào dười thời nào?",
                "answer" => "Nhà Đinh"
            ],
            [
                "question" => "Con gì không thuộc loài cá mà thuộc loài bò sát?",
                "answer" => "Cá sấu"
            ],
            [
                "question" => "Bảng chữ cái tiếng việt có bao nhiêu nguyên âm?",
                "answer" => "12 nguyên âm"
            ],
            [
                "question" => "Tên một vị thần tình yêu trong thần thoại Hy Lạp là?",
                "answer" => "Cupid"
            ],
            [
                "question" => "Trận Điện Biên Phủ trên không diễn ra bao nhiêu ngày đêm?",
                "answer" => "12"
            ],
            [
                "question" => "Chùa \"Một cột\" đựơc xây dựng vào thời nào?",
                "answer" => "Thời Lý"
            ],
            [
                "question" => "Bản tuyên ngôn độc lập thứ 2 do ai soạn thảo?",
                "answer" => "Nguyễn Trãi"
            ],
            [
                "question" => "Làng Bát Tràng ở miền Bắc nổi tiếng về nghề truyền thống nào?",
                "answer" => "Làm đồ gốm"
            ],
            [
                "question" => "Hồ Biểu Chánh là tác giả của tác phẩm nào dưới đây?",
                "answer" => "Ngọn cỏ gió đùa"
            ],
            [
                "question" => "Chất liệu nào sau đây được dùng để may quần áo Jeans cổ điển?",
                "answer" => "Vải Đêmim"
            ],
            [
                "question" => "Các loại bánh dưới đây có một loại không là bánh nướng?",
                "answer" => "Bánh tiêu"
            ],
            [
                "question" => "Hành tinh to nhất trong Hệ Mặt Trời là hành tinh nào?",
                "answer" => "Sao Mộc"
            ],
            [
                "question" => "Ban nhạc nổi tiếng Thế giới nào sau đây đã từng đến Việt Nam trình diễn?",
                "answer" => "Boney M"
            ],
            [
                "question" => "Nhân vật nữ nào sau đây trong văn học nước ta là nhân vật hư cấu?",
                "answer" => "Chị Dậu"
            ],
            [
                "question" => "Khi tan vỡ Liên bang Xô Viết có bao nhiêu nước thành viên?",
                "answer" => "15 nước thành viên"
            ],
            [
                "question" => "Cleopatre là nữ hoàng nước nào?",
                "answer" => "Ai cập"
            ],
            [
                "question" => "Nam diễn viên đóng vai chính trong phim Lấy vợ Sài Gòn là ai?",
                "answer" => "Nguyên Vũ"
            ],
            [
                "question" => "Điểm phạt đền trong môn bóng ném cách khung thành bao nhiêu mét?",
                "answer" => "6 mét"
            ],
            [
                "question" => "Con ếch được ngành vật lý nào sau đây sử dụng làm vật thí nghiệm đầu tiên?",
                "answer" => "Điện học"
            ],
            [
                "question" => "Loại rượu nổi tiếng của Bồ Đào Nha tên gì?",
                "answer" => "Porto"
            ],
            [
                "question" => "Khu kinh tế mở Chu Lai thuộc địa bàn của tỉnh nào nước ta?",
                "answer" => "Quảng Nam"
            ],
            [
                "question" => "Khi trời mưa trong nước mưa có chất gì làm cho sắt chóng rỉ sét?",
                "answer" => "Acid Nitric"
            ],
            [
                "question" => "Bài thơ Rắn đầu biếng học do ai sáng tác?",
                "answer" => "Lê Quý Đôn"
            ],
            [
                "question" => "Tác phẩm điêu khắc nào sau đây trở thành một trong những biểu tượng của Ai Cập?",
                "answer" => "Tượng Nhân Sư"
            ],
            [
                "question" => "Khủng long xuấy hiện vào kỷ nguyên nào?",
                "answer" => "Permain"
            ],
            [
                "question" => "Bức họa La Joncode do ai vẽ?",
                "answer" => "Leonard de Vinci"
            ],
            [
                "question" => "Ai là người khám phá ra quang tuyến X?",
                "answer" => "Rontgen"
            ],
            [
                "question" => "Khu du lịch biển Sầm Sơn thuộc địa phận tỉnh thành nào?",
                "answer" => "Thanh Hóa"
            ],
            [
                "question" => "Lục địa lớn thứ 3 châu lục là lục địa nào?",
                "answer" => "Châu Phi"
            ],
            [
                "question" => "Kỳ Thủ cờ vua nào ở Việt Nam được phong là đại kiện tướng quốc tế?",
                "answer" => "Đào Thiên Hải"
            ],
            [
                "question" => "Trong cụm từ Hán Việt \"Danh Lam Thắng Cảnh\" từ nào cú nghĩa là chùa?",
                "answer" => "Lam"
            ],
            [
                "question" => "Ai phát minh ra bóng đèn điện có dây tóc?",
                "answer" => "Thomas"
            ],
            [
                "question" => "Người thống nhất các bộ lạc Mông Cổ là ai?",
                "answer" => "Thành Cát Tư Hãn"
            ],
            [
                "question" => "Cụm di tích đền thờ các vua Hùng nằm ở Tỉnh Thành nào?",
                "answer" => "Phú Thọ"
            ],
            [
                "question" => "Điểm Bắc cực của nước Việt Nam thuộc tỉnh nào?",
                "answer" => "Hà Giang"
            ],
            [
                "question" => "ở Việt Nam, bảo thường đổ bộ vào đất liền theo hướng nào?",
                "answer" => "Đông"
            ],
            [
                "question" => "Động cơ nào phải có bộ phận đánh lửa?",
                "answer" => "Động cơ xăng"
            ],
            [
                "question" => "Tai người rất hiếm khi cử động được là do không có gì?",
                "answer" => "Cơ"
            ],
            [
                "question" => "Nước nào có diện tích lớn nhất thế giới?",
                "answer" => "Canada"
            ],
            [
                "question" => "Chất nào không được phép có trong thức ăn?",
                "answer" => "Phooc Môn"
            ],
            [
                "question" => "Ai là người theo Phan Đình Phùng đúc súng chống Pháp?",
                "answer" => "Cao Thắng"
            ],
            [
                "question" => "Đài tưởng niệm Nguyễn Văn Trỗi nằm trên đường nào?",
                "answer" => "Nam Kỳ Khởi Nghĩa"
            ],
            [
                "question" => "Giải bóng đá WorldCup đầu tiên được tổ chức vào năm nào?",
                "answer" => "1930"
            ],
            [
                "question" => "Ngày nào là ngày gia đình Việt Nam?",
                "answer" => "28-6"
            ],
            [
                "question" => "Chợ trung tâm của thành phố Nha Trang là chợ gì?",
                "answer" => "Chợ Đầm"
            ],
            [
                "question" => "Agatha nữ sĩ người Anh chuyên viết truyện về thể loại gì?",
                "answer" => "Trinh Thám"
            ],
            [
                "question" => "Quốc gia nào ở Đông Nam á không cùng múi giờ với Việt Nam (nhanh hơn 1 giờ)?",
                "answer" => "Xingapo"
            ],
            [
                "question" => "Biển nào gợi chút hình tượng về chiếc gương soi?",
                "answer" => "Địa Trung Hãi"
            ],
            [
                "question" => "Aljred Nobel - người sáng lập giải Noben là người nước nào?",
                "answer" => "Thụy Điển"
            ],
            [
                "question" => "Ngôn ngữ nào sau đây có nhiều chữ cái nhất?",
                "answer" => "Nga"
            ],
            [
                "question" => "Quần đảo FiFi nằm ở Châu nào?",
                "answer" => "Châu Đại Dương"
            ],
            [
                "question" => "Năm 2003 thành phố Xanhpêtécpua của Nga kỉ niệm bao nhiêu năm thành lập?",
                "answer" => "300 năm"
            ],
            [
                "question" => "Trong triều đại nhà Trần, viên tướng nào sau đây thành công trong nghề kinh doanh?",
                "answer" => "Trần Khánh Dư"
            ],
            [
                "question" => "ở các loài vật có vú các đốt xương cổ đều hiếm khi vượt quá con số mấy?",
                "answer" => "7"
            ],
            [
                "question" => "Đường xích đạo chạy qua bao nhiêu quốc gia?",
                "answer" => "12"
            ],
            [
                "question" => "Hãng phim đầu tiên Việt Nam thành lập có tên gì?",
                "answer" => "Asia Phim"
            ],
            [
                "question" => "Nữ diển viên xuất sắc nhất giải Oscar 2003 là ai?",
                "answer" => "Nicol Kidman"
            ],
            [
                "question" => "Ca khúc bất hủ \"Top of the world\" từng được 1 nhóm nhạc nổi tiếng trình bày đó là nhóm?",
                "answer" => "Capenter"
            ],
            [
                "question" => "Ngày 26-03-1931 có 1 tổ chức về chính trị được hình thành góp phần vào việc giải phóng dân tộc đó chính là?",
                "answer" => "Đoàn thanh niên"
            ],
            [
                "question" => "Tổ chức Việt Nam Thanh Niên Cách Mạng Đồng Chí Hội được thành lập tại đâu?",
                "answer" => "Quảng Châu"
            ],
            [
                "question" => "Tại Seagames 21 nước Việt Nam giành được bao nhiêu huy chương Vàng?",
                "answer" => "33"
            ],
            [
                "question" => "Từ năm 1989 trở lại đây nước Việt Nam giành được thành tích cao nhất tại Seagames vào năm nào?",
                "answer" => "2003"
            ],
            [
                "question" => "Nước ta chính thức lấy tên Cộng Hoà Xã Hội Chủ Nghĩa Việt Nam vào ngày tháng năm này?",
                "answer" => "25-4-1976"
            ],
            [
                "question" => "Vịnh Hạ Long được UNESCO công nhận là kỳ quan thiên nhiên của thế giới với hơn bao nhiên hòn đảo?",
                "answer" => "300 hòn đảo"
            ],
            [
                "question" => "Diện tích đất đai ở Việt Nam được xếp hạng bao nhiêu trên thế giới?",
                "answer" => "65"
            ],
            [
                "question" => "Máy vi tính vào giai đoạn đầu được dùng cho?",
                "answer" => "Quân sự"
            ],
            [
                "question" => "Ai là người phát minh ra điện thoại?",
                "answer" => "Grahambell"
            ],
            [
                "question" => "Hòn đảo nào được xem là lớn nhất thế giới?",
                "answer" => "Greenland"
            ],
            [
                "question" => "Người đầu tiên thám hiểm vòng quanh trái đất là người nước nào?",
                "answer" => "Bồ Đào Nha"
            ],
            [
                "question" => "Nước nào phát minh ra giấy đầu tiên?",
                "answer" => "Ai Cập"
            ],
            [
                "question" => "WorldCup 1986 đã được tổ chức tại Quốc gia nào?",
                "answer" => "Mêxicô"
            ],
            [
                "question" => "Quốc gia nào có số người chết vì dịch cúm gia cầm nhiều nhất thế giới?",
                "answer" => "Indonesia"
            ],
            [
                "question" => "Ai là vua phá lưới WorldCup 2006?",
                "answer" => "Klose"
            ],
            [
                "question" => "ở Châu Âu, nước nào là nước xây dựng vườn cấm quốc gia đầu tiên năm 1969?",
                "answer" => "Thụy Điển"
            ],
            [
                "question" => "Vườn cấm Quốc Gia Cúc Phương được lập ra vào năm nào?",
                "answer" => "1962"
            ],
            [
                "question" => "Cuộc cách mạng công nghiệp lần thứ 2 diễn ra ở đâu?",
                "answer" => "Anh"
            ],
            [
                "question" => "Close to you là ca khúc nổi tiếng của nhóm nhạc nào?",
                "answer" => "Carpenter"
            ],
            [
                "question" => "Trong chiến tranh thế giới lần thứ 2 nước Đức đã đánh nước nào đầu tiên để mở đầu cho cuộc xâm lược trên toàn thế giới?",
                "answer" => "Ba Lan"
            ],
            [
                "question" => "Quỹ loài vật hoang dã thế giới có tên là?",
                "answer" => "WWF"
            ],
            [
                "question" => "Nước nào phóng thành công tàu vũ trụ có người lái lên trạm không gian lần thứ 3?",
                "answer" => "Trung Quốc"
            ],
            [
                "question" => "Xà phòng là hỗn hợp của muối Natri với?",
                "answer" => "Axít béo"
            ],
            [
                "question" => "Đạo nho trở thành hệ tư tưởng chính thống của đẳng cấp thống trị vào thời nào?",
                "answer" => "Thời Lê"
            ],
            [
                "question" => "Diễn viên nữ chính trong phim \"Vĩ tuyến 17- ngày và đêm\"?",
                "answer" => "NSND Trà Giang"
            ],
            [
                "question" => "Tháp chàm chịu ảnh hưởng của kiến trúc nào?",
                "answer" => "Nam ấn"
            ],
            [
                "question" => "Bắt Vợ là tập tục cướI xin của dân tộc nào?",
                "answer" => "H-Mông"
            ],
            [
                "question" => "Quốc hiệu nhà nước ta là \"Việt Nam\" có từ thời Nguyễn ánh năm?",
                "answer" => "1804"
            ],
            [
                "question" => "Con ở miền Nam ra thăm lăng Bác, đã thấy trong sương hàng tre bát ngát là 2 câu thơ trong bài?",
                "answer" => "Viếng Lăng Bác"
            ],
            [
                "question" => "\"Gặm 1 khối căm hờn trong củi sắt, ta nằm dài trông ngày tháng dần\" qua là câu thơ được viết bởi?",
                "answer" => "Thế Lữ"
            ],
            [
                "question" => "Bản trường ca \"Đẻ đất đẻ nước\" là của dân tộc nào?",
                "answer" => "Ê-đê"
            ],
            [
                "question" => "Nối dây là tập tục của dân tộc?",
                "answer" => "Ê-đê"
            ],
            [
                "question" => "Cần Giờ thuộc địa phận tỉnh nào?",
                "answer" => "TP Hồ Chí Minh"
            ],
            [
                "question" => "Tên 1 vườn quốc gia nổi tiếng ở Đồng Nai?",
                "answer" => "Cát Tiên"
            ],
            [
                "question" => "Vị vua nào phát hành tiền giấy đầu tiên ở nước ta?",
                "answer" => "Hồ Qúy Li"
            ],
            [
                "question" => "Với nhạc nền du dương, lãng mạn, ca khúc chính trong game Final Fantasy 8 là?",
                "answer" => "Eyes on me"
            ],
            [
                "question" => "Từng vang danh 1 thời, nhóm nhạc the Bee Gees gồm mấy thành viên?",
                "answer" => "3"
            ],
            [
                "question" => "Ngày 20-11 chính thức được chọn làm ngày \"Hiến chương các nhà giáo\" tại đâu?",
                "answer" => "Vac-xa-va (Ba Lan)"
            ],
            [
                "question" => "Sau khi chuyển đi từ câu lạc bộ Fiorentina, Gabriel Batistuta giúp câu lạc bộ nào dành chức vô địch?",
                "answer" => "As-Roma"
            ],
            [
                "question" => "Giai đoạn Đại Việt tồn tại được bao nhiên thế kỷ?",
                "answer" => "5"
            ],
            [
                "question" => "Vụ nhiễm độc thủy ngân ở vịnh Minamata (Nhật) do nước thải xảy ra vào năm?",
                "answer" => "1952"
            ],
            [
                "question" => "Trong trận ý-Hàn Quốc tạI WorldCup 2002, cầu thủ nào phải nhận chiếc thẻ vàng cuối cùng?",
                "answer" => "Francessco Totti"
            ],
            [
                "question" => "Huấn luyện viên dẫn dắt ý vào kỳ WorldCup 2002 là ai?",
                "answer" => "Trappatoni"
            ],
            [
                "question" => "Trong lịch sử WorldCup ai đã phá kỷ lục của dội bom cuả Gerd Muller?",
                "answer" => "Ronaldo"
            ],
            [
                "question" => "Vua sư tử là biệt danh do các fan bóng đá giành tặng cho cầu thủ nào?",
                "answer" => "Batigol"
            ],
            [
                "question" => "Java là tên của 1 quần đảo ở đâu?",
                "answer" => "Indonesia"
            ],
            [
                "question" => "Wanney Rooney ra sân trong đội tuyển Anh vào năm bao nhiêu tuổi?",
                "answer" => "18"
            ],
            [
                "question" => "Nhà sinh vật học người Đức Ernst haaeckel đã đề xuất thuật ngữ \"Ecologhi\" vào năm nào?",
                "answer" => "1869"
            ],
            [
                "question" => "Cây lô hội (nha đam) thuộc họ nào?",
                "answer" => "Agaveceae"
            ],
            [
                "question" => "Ca khúc nào đã từng được ca sĩ nổi tiếng Lobo trình bày?",
                "answer" => "How can't I tell her"
            ],
            [
                "question" => "Arrol Carter là em trai của 1 thành viên trong nhóm nhạc nào?",
                "answer" => "Backstreet Boy"
            ],
            [
                "question" => "Tác giả của tác phẩm \"Bố già\" là ai?",
                "answer" => "Mario Puzzo"
            ],
            [
                "question" => "Trong hệ mặt trời, hành tinh nào không có mặt trăng?",
                "answer" => "Thủy tinh và Kim tinh"
            ],
            [
                "question" => "Hiện tượng khi mặt trời, trái đất và mặt trăng theo thứ tự cùng nằm trên đường thẳng",
                "answer" => "Nguyệt thực"
            ],
            [
                "question" => "Ai là người đầu tiên chứng minh trái đất có dạng hình cầu?",
                "answer" => "Aristotle"
            ],
            [
                "question" => "Hành tinh nào tự quay nhanh đến mức một ngày ở đó chỉ khoảng 10 giờ đồng hồ?",
                "answer" => "Thổ tinh và Mộc tinh"
            ],
            [
                "question" => "Hành tinh nào có chiều quay không cùng chiều với các hành tinh còn lại?",
                "answer" => "Kim tinh"
            ],
            [
                "question" => "Những hành tinh nào không có bầu khí quyển?",
                "answer" => "Thủy tinh"
            ],
            [
                "question" => "Trong các đơn vị đo chiều dài sau, đơn vị nào là lớn nhất?",
                "answer" => "Pasêc"
            ],
            [
                "question" => "Câu lạc bộ nào duy nhất chưa từng vắng mặt ở các cúp châu Âu kể từ khi giải này được khởi tranh (1955)?",
                "answer" => "Barcelona"
            ],
            [
                "question" => "Câu lạc bộ nào được liên đoàn bóng đá thế giới (FIFA) chọn là câu lạc bộ xuất sắc nhất thế kỷ 20?",
                "answer" => "Real Madrid"
            ],
            [
                "question" => "Sea Games lần đầu tiên được tổ chức vào năm nào?",
                "answer" => "1959"
            ],
            [
                "question" => "Thẻ vàng, thẻ đỏ được sử dụng lần đầu tiên tại WorldCup vào năm nào?",
                "answer" => "1970"
            ],
            [
                "question" => "Thủ môn duy nhất trong lich sử bóng đá từng giành quả bóng vàng châu Âu là người nước nào?",
                "answer" => "Nga"
            ],
            [
                "question" => "Từ Sea Games 22 trở đến nay, địa điểm thi đấu phải treo bao nhiêu lá cờ?",
                "answer" => "14"
            ],
            [
                "question" => "Logo của SEA Games 22 do ai sáng tác?",
                "answer" => "Nguyễn Trí Long"
            ],
            [
                "question" => "Di tích của sinh vật sống trong các thời đại trước để lại trong các lớp đất đá được gọi là gì?",
                "answer" => "Hóa thạch"
            ],
            [
                "question" => "Loại hạt nào sau đây có khả năng tồn tại lâu nhất?",
                "answer" => "Hạt hoa súng"
            ],
            [
                "question" => "Máu chứa bao nhiêu phần trăm nước (%)?",
                "answer" => "78"
            ],
            [
                "question" => "Cơ sở vật chất chủ yếu của sự sống là gì?",
                "answer" => "Protein và Axit Nucleic"
            ],
            [
                "question" => "Các nguyên tố nào sau đây phổ biến nhất của cơ thể sống?",
                "answer" => "C. H, O, N."
            ],
            [
                "question" => "Đặc điểm nào sau đây đã có ở vượn người?",
                "answer" => "Biểu lộ tình cảm vui buồn"
            ],
            [
                "question" => "Trong các dạng vượn người, dạng có quan hệ gần gũi với người nhất là?",
                "answer" => "Tinh tinh"
            ],
            [
                "question" => "Cột sống hình chữ S ở người liên quan đến hoạt động nào sau đây?",
                "answer" => "Đi đứng thẳng"
            ],
            [
                "question" => "Đặc điểm nào sau đây ở người gắn liền với sự phát triển của tiếng nói?",
                "answer" => "Xương hàm dưới cằm lồi rõ"
            ],
            [
                "question" => "Trong quang hợp, ánh sáng màu gì có khả năng cung cấp nhiều năng lượng nhất cho cây?",
                "answer" => "Xanh, đỏ, tím"
            ],
            [
                "question" => "Vị thần nào sau đây là thần ánh sáng, thần thi ca, thần âm nhạc, thần tiên tri trong thần thoại Hy Lạp?",
                "answer" => "Apollo"
            ],
            [
                "question" => "Khi ở một mình trên đảo hoang, động vật nào sau đây được Robinson Crusoe sử dụng nhiều nhất?",
                "answer" => "Dê"
            ],
            [
                "question" => "Ai là người đầu tiên trở thành tỷ phú đô la Mỹ nhờ viết sách?",
                "answer" => "J. K. Rowling"
            ],
            [
                "question" => "Các bài thơ \"Hành lộ nan\", \"Tĩnh dạ tư\", \"Thái liên khúc\" là những bài thơ của tác giả nào?",
                "answer" => "Lý Bạch"
            ],
            [
                "question" => "Lần đầu tiên trong lịch sử Việt Nam, tác phẩm nào đã thay thế lối kết cấu chương hồi bằng kết cấu theo quy lật tâm lý?",
                "answer" => "Tố tâm"
            ],
            [
                "question" => "Tác phẩm nào sau đây lên án chế độ nô lệ ở Mỹ vào thế kỷ 19?",
                "answer" => "Túp lều bác Tom"
            ],
            [
                "question" => "Tác phẩm \"Chí Phèo\" của Nam Cao được đổi tên mấy lần?",
                "answer" => "3"
            ],
            [
                "question" => "Truyền thuyết nào sau đây thuộc thời kỳ Âu Lạc?",
                "answer" => "An Dương Vương"
            ],
            [
                "question" => "Người hiện thân cho sức mạnh và vẻ đẹp của người Hy Lạp trong trường ca \"Illiat và Odyssey\"",
                "answer" => "Asin (Achilles)"
            ],
            [
                "question" => "Cho tới năm 2003, số môn thi đấu nhiều nhất tại SEA Games là bao nhiêu?",
                "answer" => "34"
            ],
            [
                "question" => "Lần đầu tiên SEA Games có 10 quốc gia tham dự được tổ chức tại đâu?",
                "answer" => "Thái Lan"
            ],
            [
                "question" => "Cho đến năm 2001, thứ hạng cao nhất của đoàn Việt Nam qua các kỳ SEA Games là hạng mấy?",
                "answer" => "4"
            ],
            [
                "question" => "Cho đến năm 2007, Thái Lan đã tổ chức bao nhiêu lần Đại hội SEA Games?",
                "answer" => "6"
            ],
            [
                "question" => "SEA Games 22 được tổ chức ở Việt Nam có bao nhiêu môn thi đấu?",
                "answer" => "32"
            ],
            [
                "question" => "Cầu thủ được mệnh danh là \"Chiếc chân trái ma thuật\"?",
                "answer" => "Rivaldo"
            ],
            [
                "question" => "Bóng bàn là một trong những môn thể thao phổ biến nhất trên thế giới, nó có nguồn gốc từ nước nào?",
                "answer" => "Anh"
            ],
            [
                "question" => "Nguyễn Thúy Hiền đã trở thành vận động viên Việt Nam đầu tiên giành huy chương vàng tại một giải vô định thế giới năm bao nhiêu tuổi?",
                "answer" => "14"
            ],
            [
                "question" => "Lý Tiểu Long là một diễn viên võ thuật nổi tiếng trong nền điện ảnh nước nào?",
                "answer" => "Mỹ"
            ],
            [
                "question" => "Đàn bầu xuất hiện ở Việt Nam vào khoảng thời gian nào?",
                "answer" => "Thế kỷ thứ 7"
            ],
            [
                "question" => "Giải thưởng \"Cánh diều vàng\" đã được tổ chức lần đầu tiên vào năm nào?",
                "answer" => "2002"
            ],
            [
                "question" => "Phim đầu tiên của người Việt?",
                "answer" => "Đồng tiền kẽm tậu được ngựa"
            ],
            [
                "question" => "Bối cảnh của phim \"Mùi đu đủ xanh\" là Sài Gòn thập niên 1950, bộ phim được quay ở đâu?",
                "answer" => "Paris"
            ],
            [
                "question" => "Siêu sao điện ảnh Thành Long của Trung quốc có họ là gì?",
                "answer" => "Trần"
            ],
            [
                "question" => "Điều kiển từ xa được phát minh vào năm nào?",
                "answer" => "1898"
            ],
            [
                "question" => "Máy bay trưc thăng được phát minh vào năm nào?",
                "answer" => "1936"
            ],
            [
                "question" => "Những ngày đầu thành lập, Nokia - hãng điện thoại di động lớn nhất thế giới ngày nay chuyên sản xuất mặt hàng gì?",
                "answer" => "Giấy"
            ],
            [
                "question" => "Tháp Eiffel được hoàn tất vào năm nào?",
                "answer" => "1889"
            ],
            [
                "question" => "Ông là người sáng lập ra hãng ôtô nổi tiếng, tuy nhiên ông còn là một thợ sửa đồng hồ rất giỏi.",
                "answer" => "Henry Ford"
            ],
            [
                "question" => "Tên dân gian của Venus (Sao Kim)",
                "answer" => "Sao mai hay Sao hôm"
            ],
            [
                "question" => "Quỹ đạo chuyển động của các hành tinh quanh mặt trời là đường gì?",
                "answer" => "Elip"
            ],
            [
                "question" => "Lò phản ứng hạt nhân của nước ta đầu tiên nằm ở đâu?",
                "answer" => "Đà Lạt"
            ],
            [
                "question" => "Bán kính trái đất là bao nhiêu kilomet (Km)?",
                "answer" => "6.378"
            ],
            [
                "question" => "Đậu tương, lạc, thuốc lá được trồng nhiều nhất trên loại đất nào?",
                "answer" => "Đất bạc mầu"
            ],
            [
                "question" => "Nếu bạn đang ở vĩ độ 0, kinh độ 0, bạn đang ở:",
                "answer" => "Đại Tây Dương"
            ],
            [
                "question" => "Diện tích nước ta rộng khoảng bao nhiêu Km2?",
                "answer" => "330"
            ],
            [
                "question" => "Con sông nào chảy qua 10 nước châu Âu và 3 thủ đô?",
                "answer" => "Danube (Đa Nuýp)"
            ],
            [
                "question" => "Mật độ dân số thành phố nào đông nhất trong những thành phố sau?",
                "answer" => "New York"
            ],
            [
                "question" => "Trong các nước sau, nước nào có đường biên giới với nước ta là dài nhất?",
                "answer" => "Lào"
            ],
            [
                "question" => "Hồ nước ngọt nào lớn nhất theo thể tích và sâu nhất thế giới?",
                "answer" => "Hồ Baikal"
            ],
            [
                "question" => "Thành phố thủ đô của quốc gia nào nằm ở gần cực bắc nhất?",
                "answer" => "Iceland (Ai Xơ Len)"
            ],
            [
                "question" => "Đại dương có diện tích nhỏ nhất trên thế giới?",
                "answer" => "Bắc băng dương"
            ],
            [
                "question" => "Biển nội địa có diện tích rộng nhất?",
                "answer" => "Địa trung hải"
            ],
            [
                "question" => "Tên dãy núi lớn nhất thế giới?",
                "answer" => "Himalaya"
            ],
            [
                "question" => "Thành phố được mệnh danh là thành phố hoa hồng?",
                "answer" => "Portland (Mỹ)"
            ],
            [
                "question" => "Vùng có tỷ lệ người biết chữ thấp nhất nước ta là?",
                "answer" => "Tây bắc"
            ],
            [
                "question" => "Nơi có hải cảng sầm uất nhất thế giới, bạn cho biết tên thành phố này?",
                "answer" => "Thượng Hải"
            ],
            [
                "question" => "Châu nào gần như toàn bộ các nước đều trồng lúa?",
                "answer" => "Châu Phi"
            ],
            [
                "question" => "Núi lửa hoạt động lớn nhất thế giới hiện nay nằm ở đâu?",
                "answer" => "Quần đảo Hawaii"
            ],
            [
                "question" => "Thành phố đông dân nhất Đông Nam á?",
                "answer" => "Jakarta"
            ],
            [
                "question" => "Nguồn gốc tên nước này có nghĩa là \"ngôi làng\"?",
                "answer" => "Canada"
            ],
            [
                "question" => "Hồ nào lớn nhất thế giới?",
                "answer" => "Caspi"
            ],
            [
                "question" => "Hồ nước ngọt lớn nhất Đông Nam á?",
                "answer" => "Biển hồ Campuchia"
            ],
            [
                "question" => "Nhiệt độ cao nhất thế giới được ghi nhận ở đâu?",
                "answer" => "Sa mạc Libya"
            ],
            [
                "question" => "Sa mạc nào lớn nhất thế giới?",
                "answer" => "Sa mạc Sahara"
            ],
            [
                "question" => "Nơi lòng sông Mê Kông mở rộng nhất thuộc biên giới nước nào?",
                "answer" => "Lào - Campuchia"
            ],
            [
                "question" => "Loại đá được hình thành từ xác động vật?",
                "answer" => "Đá vôi"
            ],
            [
                "question" => "Loại đất có diện tích lớn nhất Đồng bằng Sông Cửu Long?",
                "answer" => "Đất Phèn"
            ],
            [
                "question" => "Sông dài thứ ba thế giới?",
                "answer" => "Mississippi"
            ],
            [
                "question" => "Bức tranh điêu khắc bằng đá to nhất, dài nhất thế giới nằm ở đâu?",
                "answer" => "Campuchia"
            ],
            [
                "question" => "Đều đặc biệt Kimono y phục truyền thống của Nhật Bản là gì?",
                "answer" => "Chỉ có một kích cỡ"
            ],
            [
                "question" => "Lá cờ đỏ sao vàng lần đầu tiên xuất hiện vào trong thời gian nào?",
                "answer" => "Khởi nghĩa Nam Kỳ"
            ],
            [
                "question" => "Tiếng việt là ngôn ngữ phổ biến thứ mấy tại Mỹ?",
                "answer" => "7"
            ],
            [
                "question" => "Thụy Điển nổi tiếng với thể loại nhạc nào?",
                "answer" => "Pop"
            ],
            [
                "question" => "C.Mác làm Tổng biên tập cho tờ báo nào vào năm 1842?",
                "answer" => "Báo sông Ranh"
            ],
            [
                "question" => "ở Đông Nam á, Đảng Cộng sản được thành lập đầu tiên tại nước nào?",
                "answer" => "Indonesia"
            ],
            [
                "question" => "Di Hòa Viên là nơi nổi tiếng về nghệ thuật hoa viên truyền thống của Trung Quốc. Bạn cho biết lịch sử tồn tại của no (năm).",
                "answer" => "800"
            ],
            [
                "question" => "Bạn cho biết tháp Rùa được xây dựng ở thế kỷ nào?",
                "answer" => "18"
            ],
            [
                "question" => "Bạn cho biết vua Lê nào được lịch sử tôn làm anh hùng?",
                "answer" => "Lê Thái Tổ"
            ],
            [
                "question" => "Christopher Columbus được sinh ra ở đâu?",
                "answer" => "Italia"
            ],
            [
                "question" => "Khối Warszawa là một liên minh gồm bao nhiêu nước?",
                "answer" => "8"
            ],
            [
                "question" => "Bạn cho biết khoảng bao nhiêu phần trăm dân số Việt Nam sử dụng tiếng Việt (%)?",
                "answer" => "85"
            ],
            [
                "question" => "Bạn cho biết tháp CN (CN Tower) là ngọn tháp nổi tiếng thế giới của thành phố nào?",
                "answer" => "Toronto"
            ],
            [
                "question" => "Che Guevara hay El Che là một nhà hoạt động cách mạng nổi tiếng, bạn cho biết ông là người nước nào?",
                "answer" => "Argentina"
            ],
            [
                "question" => "Đồng tiền chung Châu Âu (Euro) chính thức được lưu hành vào năm nào?",
                "answer" => "2002"
            ],
            [
                "question" => "Dưới đời nhà Trần, ai là thầy giáo, nhà nho được nhiều người trọng dụng nhất?",
                "answer" => "Chu Văn An"
            ],
            [
                "question" => "Tổ chức duy trì hòa bình và an ninh thế giới, phát triển mối quan hệ giữa các dân tộc trên thế giới trên cơ sở tôn trọng độc lập.",
                "answer" => "Liên hợp quốc"
            ],
            [
                "question" => "Vị trạng nguyên nhỏ tuổi nhất trong lịch sử Việt Nam",
                "answer" => "Nguyễn Hiền"
            ],
            [
                "question" => "Có bao nhiêu vị thần trên đỉnh Olympus?",
                "answer" => "12"
            ],
            [
                "question" => "Văn Miếu, trường đại học đầu tiên của Việt Nam, được xây dựng dưới triều đại nào?",
                "answer" => "Nhà họ Lý"
            ],
            [
                "question" => "Triều đại nhà Nguyễn bắt đầu từ năm nào?",
                "answer" => "1802"
            ],
            [
                "question" => "Việt Nam trở thành thành viên của Liên Hợp Quốc vào năm nào?",
                "answer" => "1977"
            ],
            [
                "question" => "Đất nước nào là quê hương của ông già tuyết?",
                "answer" => "Phần Lan"
            ],
            [
                "question" => "Nền văn minh Babylon ngày nay thuộc đất nước nào?",
                "answer" => "Iraq"
            ],
            [
                "question" => "Thủ đô nước nào lâu đời nhất đông Nam á?",
                "answer" => "Hà Nội - Việt Nam"
            ],
            [
                "question" => "Bao nhiêu % dân Trung Quốc đã xây dựng Vạn Lý Trường Thành thời bấy giờ?",
                "answer" => "70"
            ],
            [
                "question" => "Bạn cho biết vua Lê nào có tên tuổi rực rỡ nhất trong thời kỳ trị nước?",
                "answer" => "Lê Thánh Tông"
            ],
            [
                "question" => "Bạn cho biết từ năm 2001, mức lương của tổng thống Mỹ là bao nhiêu (USD)?",
                "answer" => "400"
            ],
            [
                "question" => "Giai đoạn \"Đông Chu Liệt Quốc\" trong lịch sử Trung Hoa tính từ thời kỳ nhà nào đến thời nhà nào?",
                "answer" => "Chu - Trần"
            ],
            [
                "question" => "Hai câu thơ \"Lối xưa xe ngựa hồn thu thảo. Đền cũ lâu đài bóng tịch dương\" là của tác giả nào?",
                "answer" => "Bà Huyện Thanh Quan"
            ],
            [
                "question" => "Nhạc sĩ Trịnh Công Sơn từng đoạt giải \"Đĩa vàng\" tại Nhật với ca khúc nào?",
                "answer" => "Ngủ đi con"
            ],
            [
                "question" => "Thủ đô của Canada là?",
                "answer" => "Ottawa"
            ],
            [
                "question" => "Bức tranh \"Thiếu nữ ngồi bên hoa Huệ\" của tác giả nào?",
                "answer" => "Tô Ngọc Vân"
            ],
            [
                "question" => "Quê hương của bia Heineken ở đâu?",
                "answer" => "Ba Lan"
            ],
            [
                "question" => "Làng Yên Phụ ở Hà Nội nổi tiếng với nghề gì?",
                "answer" => "Làm hương"
            ],
            [
                "question" => "Đâu là từ đúng chính tả nhất?",
                "answer" => "Chất phác"
            ],
            [
                "question" => "Sân vận động \"Công viên các hoàng tử\" là sân nhà của câu lạc bộ nào?",
                "answer" => "Paris Saint Germain"
            ],
            [
                "question" => "Phong trào \"văn hóa phục hưng\" xuất hiện đầu tiên ở nước nào?",
                "answer" => "ý"
            ],
            [
                "question" => "Tên \"Nhập Vân Long\" là tên hiệu của nhân vật nào trong bộ tiểu thuyết nổi tiếng Thủy Hử?",
                "answer" => "Công Tôn Thắng"
            ],
            [
                "question" => "Tên tiếng Anh viết tắt của hệ thống tiền tệ Châu Âu là gì?",
                "answer" => "EMS"
            ],
            [
                "question" => "Một trong các bộ phim đoạt giải Oscar lần thứ 78?",
                "answer" => "Crask"
            ],
            [
                "question" => "Nhà hát kịch nổi tiếng thế giới cả ba mặt đều hướng ra biển thuộc đất nước nào?",
                "answer" => "úc"
            ],
            [
                "question" => "Hoa Loa Kèn thường xuất hiện vào mùa nào trong năm?",
                "answer" => "Hạ"
            ],
            [
                "question" => "Bài hát trong phim \"Vợ chồng A Phủ\" là gì?",
                "answer" => "Bài ca trên núi"
            ],
            [
                "question" => "Ai đã khắc chữ \"Nam thiên đệ nhất động\" lên cửa động Hương Tích?",
                "answer" => "Chúa Trịnh Sâm"
            ],
            [
                "question" => "Truyện Kiều của Nguễn Du tổng cộng gồm bao nhiêu câu thơ?",
                "answer" => "3254"
            ],
            [
                "question" => "Quỹ nhi đồng liên hợp quốc viết tắt là gì?",
                "answer" => "UNICEF"
            ],
            [
                "question" => "Bài hát \"Giấc mơ AiKia\" được sử dụng trong bộ phim nào?",
                "answer" => "Những cô gái chân dài"
            ],
            [
                "question" => "Trong tác phẩm Tam Quốc Chí, người được mệnh danh là \"Phụng Sồ\"?",
                "answer" => "Bàng Thống"
            ],
            [
                "question" => "Danh họa nổi tiếng \"Van Gogh\" là người nước nào?",
                "answer" => "Hà Lan"
            ],
            [
                "question" => "Giải vô địch bóng đá thế giới (WorldCup) năm 2010 được tổ chức ở đâu?",
                "answer" => "Tất cả đều sai"
            ],
            [
                "question" => "Ban nhạc huyền thoại nào thể hiện ca khúc \"Yesterday\"?",
                "answer" => "The Beatles"
            ],
            [
                "question" => "Bộ phim \"Hoàng Kim Giáp\" nói về triều đại nào của Trung Quốc?",
                "answer" => "Nhà Đường"
            ],
            [
                "question" => "Bao nhiêu năm thì nước ta tiến hành tổng điều tra dân số 1 lần?",
                "answer" => "10"
            ],
            [
                "question" => "Tác phẩm nổi tiếng \"Chuông nguyện hồn ai\" của nhà văn nào?",
                "answer" => "Ernest Miller Hemingway"
            ],
            [
                "question" => "Ngôn ngữ chính của CuBa là gì?",
                "answer" => "Tây Ban Nha"
            ],
            [
                "question" => "Him Lam là cứ điểm tiêu diệt địch thứ mấy trong chiến dịch Điện Biên?",
                "answer" => "1"
            ],
            [
                "question" => "Bài phú nổi tiếng trong lịch sử văn học Việt Nam \"Ngọc Tỉnh Liên\" là của vị Trạng Nguyên nào?",
                "answer" => "Mạc Đĩnh Chi"
            ],
            [
                "question" => "Trong lịch sử câu lạc bộ Manchester United cầu thủ ghi nhiều bàn thắng nhất là ai?",
                "answer" => "Bobby Charlton"
            ],
            [
                "question" => "Bộ phim \"Sao tháng 8\" của điện ảnh Việt Nam ra đời năm nào?",
                "answer" => "1976"
            ],
            [
                "question" => "Hoàng hậu Mari Antoanet của nước Pháp là vợ của vua nào?",
                "answer" => "Luis 16"
            ],
            [
                "question" => "Ai được mệnh danh là \"Tam Nguyên Yên Đổ\"",
                "answer" => "Nguyễn Khuyến"
            ],
            [
                "question" => "Danh hiệu hoa hậu thế giới năm 2006 thuộc về nước nào?",
                "answer" => "CH Czech"
            ],
            [
                "question" => "Trên đỉnh ngọn núi Tùng ở Thanh Hóa có lăng mộ thờ vị anh hùng dân tộc nổi tiếng nào?",
                "answer" => "Bà Triệu"
            ],
            [
                "question" => "Tên gọi khác của quả mướp đắng?",
                "answer" => "Khổ qua"
            ],
            [
                "question" => "Tác giả của bài thơ \"Nhớ con sông quê hương\"?",
                "answer" => "Tế Hanh"
            ],
            [
                "question" => "Tác giả của ca khúc \"Hương ngọc lan\"",
                "answer" => "Anh Quân"
            ],
            [
                "question" => "Thành phố nào của Italia được Shakespeares chọn làm bối cảnh diễn ra câu chuyện \"Romeo và Juliet\"?",
                "answer" => "Verona"
            ],
            [
                "question" => "Thành phố nào là trung tâm của cách mạng tháng 10 Nga?",
                "answer" => "Saint Peterburg (Leningrad )"
            ],
            [
                "question" => "Chuyến bay đầu tiên thế giới của 2 anh em nhà Smith đã nối liền 2 châu lục nào?",
                "answer" => "Châu Đại Dương - Châu Âu"
            ],
            [
                "question" => "Trong bài thơ \"Canh một\" của Lê Thánh Tông có câu=>\"Tấp tểnh trời vừa mọc Đầu tinh\". Bạn cho biết Đầu tinh là sao nằm ở phương nào?",
                "answer" => "Bắc"
            ],
            [
                "question" => "Sự tích trầu cau theo truyền thuyết đã xảy ra vào thời vua Hùng thứ bao nhiêu?",
                "answer" => "12"
            ],
            [
                "question" => "Quốc ngữ của Singapore?",
                "answer" => "Malaysia"
            ],
            [
                "question" => "Thành tích cao nhất của đội tuyển Tây Ban Nha qua các kỳ WorldCup?",
                "answer" => "Vô địch"
            ],
            [
                "question" => "Đội tuyển Tây Ban Nha đã vô địch Châu Âu lần đầu vào năm nào?",
                "answer" => "1964"
            ],
            [
                "question" => "Lần đầu tiên đội tuyển ý vô địch thế giới vào năm nào?",
                "answer" => "1934"
            ],
            [
                "question" => "Cầu thủ ghi nhiều bàn thắng nhất đội tuyển Tây Ban Nha?",
                "answer" => "Raul gonzalez"
            ],
            [
                "question" => "Đất nước nào trên thế giới có hình dạng giống quả ớt?",
                "answer" => "Chile"
            ],
            [
                "question" => "Trong thời kỳ âm nhạc cổ điển, khi mà các bản giao hưởng đều có 4 chương thì tác phảm nào lại có 5 chương?",
                "answer" => "Bản giao hưởng đồng quê - Beethoven"
            ],
            [
                "question" => "Đại hội thể thao Olympic hiện đại lần đầu tiên năm 1886 có mấy môn thể thao dành cho phụ nữ?",
                "answer" => "Không có môn nào"
            ],
            [
                "question" => "Bài hát \"Tình ca\" của Hoàng Việt nói đến mùa nào trong năm?",
                "answer" => "Mùa xuân"
            ],
            [
                "question" => "Năm 1928, nhân vật hoạt hình nào lần đầu tiên xuất hiện?",
                "answer" => "Chuột Mickey"
            ],
            [
                "question" => "World Cup lần đầu tiên có bao nhiêu đội tham dự?",
                "answer" => "13"
            ],
            [
                "question" => "Đàn độc huyền là tên gọi khác của loại đàn nào?",
                "answer" => "Đàn bầu"
            ],
            [
                "question" => "9 ngọn núi của nền âm nhạc thế giới là 9 bản giao hưởng của ai?",
                "answer" => "Beethoven"
            ],
            [
                "question" => "Bán kính vòng tròn trung tâm sân bóng đá chính thức là bao nhiêu?",
                "answer" => "9m15"
            ],
            [
                "question" => "Phim Cách mạng Việt Nam đầu tiên là phim gì?",
                "answer" => "Chung một dòng sông"
            ],
            [
                "question" => "Ban nhạc ABBA gồm bao nhiêu thành viên?",
                "answer" => "4"
            ],
            [
                "question" => "Môn võ nào được gọi là Hiệp khí đạo?",
                "answer" => " Aikido"
            ],
            [
                "question" => "Quốc gia nào giành nhiều huy chương vàng thứ 3 Olympic Athens 2004?",
                "answer" => "Nga"
            ],
            [
                "question" => "Đội tuyển bóng đá nước nào vô địch Euro năm 1976?",
                "answer" => "Không phải 3 đội trên"
            ],
            [
                "question" => "Phần 1 và 2 của bộ phim Harry Potter do ai đạo diễn?",
                "answer" => "James Cameron"
            ],
            [
                "question" => "The Rock (diễn viên nổi tiếng trong Xác ướp Ai Cập và Vua Bọ cạp) từng xuất thân là?",
                "answer" => "Võ sĩ đô vật"
            ],
            [
                "question" => "Joseph Haydn, tác giả của 104 bản giao hưởng, cha đẻ của giao hưởng cổ điển quy định một bản giao hưởng gồm bao nhiêu chương?",
                "answer" => "4"
            ],
            [
                "question" => "Trong bóng chày, đội nào được chơi trước?",
                "answer" => "Đội khách chơi trước."
            ],
            [
                "question" => "Giải thưởng điện ảnh và truyền hình BAFTA là của nước nào?",
                "answer" => "Anh"
            ],
            [
                "question" => "Bộ phim đầu tiên mà lời thoại trong phim có thể nghe được là bộ phim nào? Phim này sản xuất năm 1927",
                "answer" => "Ca sĩ nhạc Jazz"
            ],
            [
                "question" => "Thi Sách họ gì?",
                "answer" => "Đặng"
            ],
            [
                "question" => "Tên gốc của loại bánh là đặc sản của Từ Sơn, Đình Bảng, Bắc Ninh? Nó thường được gọi là gì?",
                "answer" => "Bánh phu thê - suxê"
            ],
            [
                "question" => "Hội Tao Đàn do Lê Thánh Tông thành lập có bao nhiêu người?",
                "answer" => "28"
            ],
            [
                "question" => "18-4-1288, triều đình nhà Trần đã tổ chức dâng tù binh nhà Nguyên để tỏ lòng biết ơn với dân tộc ở đâu?",
                "answer" => "Lăng vua Trần Thái Tông."
            ],
            [
                "question" => "ở Hà Nội, xác B52 có ở hồ nào?",
                "answer" => "Hồ Ngọc Hà"
            ],
            [
                "question" => "Đất nước có bảng chữ cái gồm 76 chữ cái.",
                "answer" => "Cambodia"
            ],
            [
                "question" => "Người lao động ở đất nước nào không phải đóng thuế?",
                "answer" => "Vatican"
            ],
            [
                "question" => "Vào những năm 1850-1870, nước nào có nền công nghiệp đứng đầu thế giơi và được coi là \"công xưởng của thế giới\"?",
                "answer" => "Anh"
            ],
            [
                "question" => "Hồ Chí Minh viết bản di chúc đầu tiên vào năm nào?",
                "answer" => "1965"
            ],
            [
                "question" => "Huyện Nga Sơn, Tỉnh Thanh Hóa nổi tiếng với nghề thủ công nào?",
                "answer" => "Dệt chiếu"
            ],
            [
                "question" => "Nguyễn Đình Chiểu sinh ra ở đâu?",
                "answer" => "Gia Định"
            ],
            [
                "question" => "Bác Hồ phát động Tết Trồng Cây vào năm nào?",
                "answer" => "1960"
            ],
            [
                "question" => "Ông tổ của \"Đờn ca tài tử\"?",
                "answer" => "Cao Văn Lầu"
            ],
            [
                "question" => "Nguyễn Tất Thành lấy tên là Nguyễn ái Quốc vào năm nào?",
                "answer" => "1919"
            ],
            [
                "question" => "Bản án chế độ Thực dân Pháp của Hồ Chí Minh gồm bao nhiêu chương và bao nhiêu phụ lục?",
                "answer" => "12 chương và 1 phụ lục"
            ],
            [
                "question" => "Chùa nào được Lý Nam Đế cho xây dựng sau khi lên ngôi hoàng đế năm 544?",
                "answer" => "Chùa Chấn Quốc"
            ],
            [
                "question" => "Lớp màng vôi mỏng xuất hiệu trên răng khi bạn thưỡng xuyên quên chải răng gọi là gì?",
                "answer" => "Cao răng"
            ],
            [
                "question" => "Thiên thể nào lớn đễn nỗi ngay cả ánh sáng cũng không thoát khỏi trọng lực của nó?",
                "answer" => "Hố đen"
            ],
            [
                "question" => "Dòng sông băng di chuyển chậm dần xuống dưới chân núi gọi là gì?",
                "answer" => "Băng hà"
            ],
            [
                "question" => "Danh tướng có câu nói nổi tiếng \"Ngồi yên đợi giặc không bằng đem quân ra trước để chặn mũi nhọn của giặc\" là ai?",
                "answer" => "Lý Thường Kiệt"
            ],
            [
                "question" => "Bài hát \"Bác đang cùng chúng cháu hành quân\" do ai sáng tác?",
                "answer" => "Huy Thục"
            ],
            [
                "question" => "Tiểu thuyết văn học đầu tiên của Việt Nam là tác phẩm nào?",
                "answer" => "Tố tâm"
            ],
            [
                "question" => "Năm phát minh ra Penecilin?",
                "answer" => "1928"
            ],
            [
                "question" => "Đơn vị dân cư nhỏ nhất ở vùng dân tộc khơ me Nam bộ, tương đương với làng được gọi là gì?",
                "answer" => "Sóc"
            ],
            [
                "question" => "Kim loại nào có nhiều nhất trong lớp vỏ trái đất?",
                "answer" => "Nhôm"
            ],
            [
                "question" => "Đàn Guitar thường có mấy dây?",
                "answer" => "6"
            ],
            [
                "question" => "Braxin đã từng là thuộc địa của nước nào?",
                "answer" => "Bồ Đào Nha"
            ],
            [
                "question" => "Trần Quốc Tuấn là con của ai?",
                "answer" => "Trần Liễu"
            ],
            [
                "question" => "Hồng K ông được trao trả lại cho Trung Quốc vào năm nào?",
                "answer" => "1997"
            ],
            [
                "question" => "Bộ phim \"Rừng phương Nam\" được chuyển thể từ truyện ngắn nào?",
                "answer" => "Đất rừng phương nam"
            ],
            [
                "question" => "Con ngươi của mèo thu nhỏ nhất vào lúc nào?",
                "answer" => "Khi nắng chói"
            ],
            [
                "question" => "Quốc hiệu đầu tiên của nước ta?",
                "answer" => "Văn Lang"
            ],
            [
                "question" => "Tên viết tắt của ngân hàng phát triển Châu á?",
                "answer" => "ADB"
            ],
            [
                "question" => "Đàn thập lục còn gọi là đàn gì?",
                "answer" => "Đàn tranh"
            ],
            [
                "question" => "Đây là năm đánh dấu rất nhiều sự kiện quan trọng trên thế giới=>chú cừu Dolly được nhân bản vô tính ra đời , năm mất của công nương Diana .. đó là năm nào",
                "answer" => "1997"
            ],
            [
                "question" => "Ngày thu phân là ngày nào?",
                "answer" => "23-9"
            ],
            [
                "question" => "Cầu Mỹ Thuận bắc qua con sông nào?",
                "answer" => "Sông Tiền"
            ],
            [
                "question" => "Môn thể thao nào mà tên của nó có nghĩa là Tay không?",
                "answer" => "Karate"
            ],
            [
                "question" => "Nhạc cụ gõ cổ nhất của nước ta tên là gì?",
                "answer" => "Đàn đá"
            ],
            [
                "question" => "Có bao nhiêu vị trạng nguyên dưới thời vua Gia Long?",
                "answer" => "không có trạng nguyên"
            ],
            [
                "question" => "Một sào bằng bao nhiêu thước?",
                "answer" => "15"
            ],
            [
                "question" => "Người Việt Nam đầu tiên được Unessco công nhận là danh nhân văn hoá thế giới?",
                "answer" => "Nguyễn Trãi"
            ],
            [
                "question" => "Sông MeKong bắt nguồn từ đâu?",
                "answer" => "Trung Quốc"
            ],
            [
                "question" => "Đàn Guitar có nguồn gốc từ nước nào?",
                "answer" => "Tây Ban Nha"
            ],
            [
                "question" => "Bài hát \"Lên Ngàn\" là của tác giả nào?",
                "answer" => "Hoàng Việt"
            ],
            [
                "question" => "Lá cờ nước Mỹ có bao nhiêu ngôi sao?",
                "answer" => "50"
            ],
            [
                "question" => "Tên Quốc gia vô địch bóng đá châu âu năm 1992?",
                "answer" => "Đan Mạch"
            ],
            [
                "question" => "Trước khi tan vỡ Liên bang Xô viết có bao nhiêu nước?",
                "answer" => "15"
            ],
            [
                "question" => "Nguyễn Trãi viết Bình Ngô ậi Cáo vào năm nào?",
                "answer" => "1427"
            ],
            [
                "question" => "Bà Huyện Thanh Quan tả cảnh đèo ngang vào thời gian nào trong ngày?",
                "answer" => "Chiều"
            ],
            [
                "question" => "Loại cây vẽ trên lá cờ của Liên Hợp Quốc là cây gì?",
                "answer" => "ÔLiu"
            ],
            [
                "question" => "Có bao nhiêu bộ lạc hợp thành nhà nước Văn Lang?",
                "answer" => "15"
            ],
            [
                "question" => "Beethoven viết được bao nhiêu bản nhạc giao hưởng?",
                "answer" => "9"
            ],
            [
                "question" => "Âm thanh của ve sầu cái phát ra từ đâu?",
                "answer" => "Không có âm thanh"
            ],
            [
                "question" => "Đỉnh núi cao nhất nước ta (Fansipan) thuộc tỉnh nào?",
                "answer" => "Lào Cai"
            ],
            [
                "question" => "Trong thế kỷ XX nước Tây Ban Nha tổ chức WorldCup vào năm nào?",
                "answer" => "1982"
            ],
            [
                "question" => "Say it your way là khẩu hiệu của mạng di động nào?",
                "answer" => " Viettel"
            ],
            [
                "question" => "Ao thu lạnh lẽo nước trong veo là câu thơ trong bài thơ nào?",
                "answer" => "Thu Điếu"
            ],
            [
                "question" => "Việt Nam là thành viên thư bao nhiêu của WTO?",
                "answer" => "150"
            ],
            [
                "question" => "WTO tiếp nhận đơn xin gia nhập của Việt Nam vào năm nào?",
                "answer" => "1995"
            ],
            [
                "question" => "Vịnh Hạ Long được Unessco cộng nhận là di sản thiên nhiên thế giới vào năm nào?",
                "answer" => "1994"
            ],
            [
                "question" => "Hội chùa thầy thuộc tỉnh nào?",
                "answer" => "Hà Tây (Cũ)"
            ],
            [
                "question" => "Nhạc sĩ nào có tác phẩm được dịch ra tiếng nước ngoài nhiều nhất?",
                "answer" => "Trịnh Công Sơn"
            ],
            [
                "question" => "Cảng lớn nhất Đông Nam á là cảng nào?",
                "answer" => "Singapore"
            ],
            [
                "question" => "Loài thân cỏ lớn nhất?",
                "answer" => "Tre"
            ],
            [
                "question" => "Ngày hạ chí là ngày nào?",
                "answer" => "22-6"
            ],
            [
                "question" => "Ngày thu phân là ngày nào?",
                "answer" => "23-9"
            ],
            [
                "question" => "Heraclit coi cái gì là yếu tố đầu tiên của nguồn gốc loài người?",
                "answer" => "Lửa"
            ],
            [
                "question" => "Chân đà điểu có bao nhiêu móng?",
                "answer" => "2"
            ],
            [
                "question" => "Quốc hiệu Đại Việt chính thức bắt đầu từ năm nào nào?",
                "answer" => "1054"
            ],
            [
                "question" => "Con sên có mấy cái mũi?",
                "answer" => "4"
            ],
            [
                "question" => "Sao Hôm - Sao Mai là tên gọi khác của hành tinh nào?",
                "answer" => "Sao kim"
            ],
            [
                "question" => "Quang Trung đã hẹn quân sĩ mùng mấy tết sau khi chiến thắng sẽ mở tiệc ăn mừng?",
                "answer" => "7"
            ],
            [
                "question" => "1 Mẫu bằng bao nhiêu sào?",
                "answer" => "10"
            ],
            [
                "question" => "Nguyên tử Cacbon có bao nhiêu electron?",
                "answer" => "6"
            ],
            [
                "question" => "Quê hương của cối xay gió?",
                "answer" => "Iran"
            ],
            [
                "question" => "Một người sinh ngày 29.2.1960. Đến năm 2006 người đó đã tổ chức sinh nhật bao nhiêu lần?",
                "answer" => "11"
            ],
            [
                "question" => "Bạn hãy cho biết người đầu tiên đạt giải Nobel khu vực Đông Nam á mang quốc tịch nước nào?",
                "answer" => "Việt Nam"
            ],
            [
                "question" => "Báo thanh niên được xuất bản năm nào?",
                "answer" => "1925"
            ],
            [
                "question" => "Kim loại dẫn điện tốt nhất?",
                "answer" => "Vàng"
            ],
            [
                "question" => "Sinh vật được chia thành bao nhiêu giới?",
                "answer" => "5"
            ],
            [
                "question" => "Trong truyện ngắn \"Ông lão đánh cá và con cá vàng\", ông lão đã ra biển mấy lần?",
                "answer" => "6"
            ],
            [
                "question" => "Ngôn ngữ mà Singapo đang dùng hiện nay là ngôn ngữ nào trong các ngôn ngữ sau?",
                "answer" => "Anh ngữ"
            ],
            [
                "question" => "Châm cứu là dùng cây kim đâm vào nơi nào trên cơ thể người?",
                "answer" => "Huyệt"
            ],
            [
                "question" => "Đội bóng nào đã vô địch WC 1998?",
                "answer" => "Pháp"
            ],
            [
                "question" => "Thành phố được coi là sạch nhất thế giới thuộc nước nào?",
                "answer" => "Singapore"
            ],
            [
                "question" => "Đội bóng chuyền nào đã từng 8 lần vô địch thế giới?",
                "answer" => "Brazil"
            ],
            [
                "question" => "Quốc kì của cộng hòa liên bang Đức có bao nhiêu màu?",
                "answer" => "3"
            ],
            [
                "question" => "Bài hát \"Thanh niên làm theo lời bác\" hay \"Đoàn ca\" là sáng tác của ai?",
                "answer" => "Hoàng Hòa"
            ],
            [
                "question" => "Cây ca cao có nguồn gốc từ châu lục nào?",
                "answer" => "Châu Mĩ"
            ],
            [
                "question" => "ở mắt bão không khí chuyển động như thế nào?",
                "answer" => "Không chuyển động"
            ],
            [
                "question" => "Việt Nam có bao nhiêu khu bảo tồn thiên nhiên?",
                "answer" => "61"
            ],
            [
                "question" => "Thực vật được chia làm mấy ngành?",
                "answer" => "4"
            ],
            [
                "question" => "Cộng hòa liên bang Đức có bao nhiêu bang?",
                "answer" => "16"
            ],
            [
                "question" => "Hoa hậu hoàn vũ năm 2007 thuộc về quốc gia nào?",
                "answer" => "Nhật Bản"
            ],
            [
                "question" => "Quốc gia có lượng khí thải lớn nhất thế giới?",
                "answer" => "Australia"
            ],
            [
                "question" => "Trong bóng đá từ \"tết\" có nghĩa là gì?",
                "answer" => "Đánh đầu"
            ],
            [
                "question" => "2-9-1945 Bác Hồ đọc bản Tuyên Ngôn Độc Lập tại Quảng trờng Ba Đình khai sinh ra nớc VNDCCH. Bạn cho biết đây là bản tuyên ngôn lần thức mấy của dân tộc ta?",
                "answer" => "3"
            ],
            [
                "question" => "Cụm từ nào còn thiếu trong câu thơ sau của Huy Cận=>\"Thuyền về nước lại sầu trăm ngả, ... lạc mấy dòng\"?",
                "answer" => "Củi một cành khô"
            ],
            [
                "question" => "Đội bóng nào xếp thứ ba giải ngoại hạng Anh mùa bóng 2006 - 2007?",
                "answer" => "Liverpool"
            ],
            [
                "question" => "Cung A Phòng, một công trình kiến trúc huyền thoại trong lịch sử Trung Quốc, được xây dựng trong thời nào?",
                "answer" => "Tần"
            ],
            [
                "question" => "Lời thoại \"Một lần, y được thấy ông Bá Kiến sai trói một lúc 17 người và đánh một người lồi mắt\", là hồi ức cảu nhân vật nào?",
                "answer" => "Giáo Thứ"
            ],
            [
                "question" => "Bộ phim \"Trở về\" (1994) do ai đạo diễn?",
                "answer" => "Đặng Nhật Minh"
            ],
            [
                "question" => "Một mét khối nước tương đương với bao nhiêu lít nước?",
                "answer" => "1000"
            ],
            [
                "question" => "Theo kinh nghiệm dân gian thì \"Gió đông là ...lúa chiêm\"?",
                "answer" => "Chồng"
            ],
            [
                "question" => "Trong bài thơ Côn Sơn, Nguyễn Trãi đã miêu tả tiếng suối với nhạc cụ nào?",
                "answer" => "Đàn cầm"
            ],
            [
                "question" => "Người ta cho thêm chì vào trong xăng nhằm mục đích gì?",
                "answer" => "Chống cháy nổ"
            ],
            [
                "question" => "Cầu thủ Việt Nam nào sau đây có tên trong danh sách đề cử Quả bóng vàng châu á 2008?",
                "answer" => "Như Thành"
            ],
            [
                "question" => "Ca ghép thận thành công đầu tiên ở Việt Nam được thực hiện vào năm nào?",
                "answer" => "1992"
            ],
            [
                "question" => "Điệu múa \"Tráp trầu\" là điệu múa trong đám cưới của dân tộc nào?",
                "answer" => "Khơ me Nam Bộ"
            ],
            [
                "question" => "Đàn đáy có mấy đáy?",
                "answer" => "Không có đáy"
            ],
            [
                "question" => "Câu lạc bộ bóng đá nào được bình chọn là \"câu lạc bộ vĩ đại nhất thế kỷ 20\"?",
                "answer" => "Real Madrid"
            ],
            [
                "question" => "Bài thơ \"Dương phụ hành\" do ai sáng tác?",
                "answer" => "Cao Bá Quát"
            ],
            [
                "question" => "ở loài chó, tuyến mồ hôi tập trung hầu hết ở đâu?",
                "answer" => "Lưỡi"
            ],
            [
                "question" => "Bài hát Mười chín tháng tám là sáng tác của ai?",
                "answer" => "Xuân Oanh"
            ],
            [
                "question" => "Con chim Kiwi là biểu tưởng của nước nào?",
                "answer" => "New Zealand"
            ],
            [
                "question" => "Khởi nghĩa diễn ra năm 722 do ai lãnh đạo?",
                "answer" => "Mai Hắc Đế"
            ],
            [
                "question" => "Hành tinh nóng nhất hệ mặt trời?",
                "answer" => "Sao Kim"
            ],
            [
                "question" => "Bộ tem bưu chính đầu tiên của VN in hình gì?",
                "answer" => "Chân dung Hồ Chí Minh"
            ],
            [
                "question" => "Động vật lớn nhất thế giới hiện nay?",
                "answer" => "Cá voi xanh"
            ],
            [
                "question" => "1 phân tử mêtan có bao nhiêu nguyên tử Hiđro?",
                "answer" => "4"
            ],
            [
                "question" => "Tổng thống John Kenedy bị ám sát vào năm nào?",
                "answer" => "1963"
            ],
            [
                "question" => "Việt Nam chính thức trở thành thành viên của tổ chức APEC từ năm nào?",
                "answer" => "1998"
            ],
            [
                "question" => "Giải thưởng công nghệ thông tin của Việt Nam được trao giai vào ngày 1-1 hàng năm có tên là gì?",
                "answer" => "Trí tuệ Việt Nam"
            ],
            [
                "question" => "Bài thơ \"Người đi tìm hình của nước\" của tác giả nào?",
                "answer" => "Chế Lan Viên"
            ],
            [
                "question" => "Giải thưởng Nobel trao cho các nhà khoa học trong bao nhiêu lĩnh vực?",
                "answer" => "6"
            ]
        ];

        DB::table('questions')->truncate();

        DB::table('questions')->insert($data);

        DB::statement("SET FOREIGN_KEY_CHECKS = 1");
    }
}
