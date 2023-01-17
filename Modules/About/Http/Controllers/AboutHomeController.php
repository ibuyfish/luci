<?php

namespace Modules\About\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Recruit\Http\Repositories\RecruitRepository;

class AboutHomeController extends Controller
{
    private $recruitRepository;
    public function __construct(RecruitRepository $recruitRepository)
    {
        $this->recruitRepository = $recruitRepository;
    }
    public function index(){
        $datas = [
            [
                'name' => "Tâm",
                'description' => 'Với Luci, chữ Tâm được coi trọng hàng đầu. Làm việc có Tâm, tư duy ắt có TẦM. Đó là cả một quá trình rèn luyện nội lực, truyền tải vào công việc; vì Luci coi giá trị dành cho khách hàng, cộng đồng, xã hội là điều đáng quý nhất.',
            ],
            [
                'name' => "Tôn",
                'description' => 'Chúng tôi tôn trọng mọi vị trí trong công ty, không phân biệt cấp độ, quan hệ. Luci là môi trường bình đẳng cho mọi cá nhân phát triển như tiềm năng vốn có. Chúng tôi tạo điều kiện tối đa để các thành viên được là chính mình.',
            ],
            [
                'name' => "Tín",
                'description' => 'Luci bảo vệ chữ Tín như bảo vệ danh dự của chính mình. Chúng tôi luôn cố gắng chuẩn bị đầy đủ năng lực thực thi, nỗ lực hết mình để đảm bảo các yêu cầu của khách hàng, người dùng; đặc biệt là đảm bảo cam kết về chất lượng. ',
            ],
            [
                'name' => "Tinh",
                'description' => 'Bộ máy tinh gọn quy tụ những cá nhân tinh anh. Luci sử dụng chiến lược “Chiêu hiền đãi sĩ" chiêu mộ những bậc trí thức với đầy đủ phẩm chất đạo đức và trí tuệ. Chúng tôi tự tin vào năng lực của đội ngũ nhân sự tài năng, tạo nên  một bộ máy vận hành gọn ghẽ, trơn tu. ',
            ],
            [
                'name' => "Tốc",
                'description' => 'Luci lấy tốc độ để để tạo ra một bộ máy vận hành trơn tru và hiệu quả nhất: Quyết định nhanh - Triển khai nhanh - Thay đổi và ứng biên nhanh gọn. Chúng tôi đề cao sự tiên phong và khát vọng muốn dẫn đầu. Tốc độ - nhưng không cẩu thả. ',
            ]
        ];
        $recruits = $this->recruitRepository->all();
        return view('about::home.index',compact('datas','recruits'));
    }
}
