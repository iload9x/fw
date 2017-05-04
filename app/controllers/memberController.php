<?php /**
* 
*/
class memberController extends InitController
{
	
	function __construct()
	{
		$this->memberModel = new userModel();
		$this->validate = new ValidateLib();
	}

	public function manager($req, $res) {
		$pagination = new PaginationLib();
		$data['seo']['title'] = $data['name'] = "Quản lý thành viên";
		$data['globals'] = $req->globals;
		$data['validate']['errors'] = isset($req->errors) ? $req->errors : null;
		$data['validate']['success'] = isset($req->success) ? $req->success : null;
		$memberPage = (Input::get('memberPage')) ? Input::get('memberPage') : 1;
		$sobaihienthi = 10;
		$data['dsMember'] = $this->memberModel->select('id, username, nickname, level, time_reg, avatar, status')->limit(($memberPage - 1) * $sobaihienthi, $sobaihienthi)->order_by('id','DESC')->get()->toArray();
		foreach ($data['dsMember'] as $k => $v) {
			//$data['dsMember'][$k]['time_reg'] = Dtime::makeTime('Y-m-d', strtotime($data['dsMember'][$k]['time_reg']));
			$data['dsMember'][$k]['levelName'] = $this->memberModel->getLevelName($data['dsMember'][$k]['level']);
		}
		$data['count_all_member']	= $this->memberModel->select()->get()->countAll();
		//=================PAGINATION====================
	    $pagination->next_tag_html = '<button name="memberPage" value="{$id}" class="pagination-btn btn btn-default"><i class="fa fa-chevron-right"></i></button>';
	    $pagination->next_tag_disabled_html = '<button disabled name="memberPage" value="{$id}" class="btn btn-default"><i class="fa fa-chevron-right"></i></button>';
	    $pagination->prev_tag_html = '<button name="memberPage" value="{$id}" class="pagination-btn btn btn-default"><i class="fa fa-chevron-left"></i></button>';
	    $pagination->prev_tag_disabled_html = '<button disabled name="memberPage" value="{$id}" class="btn btn-default"><i class="fa fa-chevron-left"></i></button>';
	    $pagination->num_tag_html = '<button name="memberPage" value="{$id}" class="pagination-btn btn btn-default">{$id}</button>';
	    $pagination->cur_tag_html = '<button disabled name="memberPage" value="{$id}" class=" btn btn-default active">{$id}</button>';
		$data['pagination'] = $pagination->html($data['count_all_member'],$memberPage,$sobaihienthi);
		//=================/PAGINATION====================
		return $res->render("admin-flat/member/manager", "admin-flat/layout/admin.layout", $data);

	}

	public function edit($req, $res) {
		if (!Input::get('id') or !$this->memberModel->find(Input::get('id'))) {
			return $res->redirect('admin/member')->with(array('errors' => array("Thành viên không hợp lệ!")));
		}
		$id = Input::get('id');
		$data['infoMember']['id'] = $this->memberModel->id;
		$data['infoMember']['username'] = $this->memberModel->username;
		$data['infoMember']['nickname'] = $this->memberModel->nickname;
		$data['infoMember']['password'] = $this->memberModel->password;
		$data['infoMember']['email'] = $this->memberModel->email;
		$data['infoMember']['time_reg'] = $this->memberModel->time_reg;
		$data['infoMember']['status'] = $this->memberModel->status;
		$data['infoMember']['level'] = $this->memberModel->level;
		$data['name'] = $data['seo']['title'] = "Chỉnh sửa thành viên";
		$data['csrf_token'] = $req->csrfToken;
		$data['globals'] = $req->globals;
		$data['validate']['errors'] = isset($req->errors) ? $req->errors : null;
		$data['validate']['success'] = isset($req->success) ? $req->success : null;
		//=============================
		$data['levelNameList'] = $this->memberModel->levelNameList();
		return $res->render("admin-flat/member/edit", "admin-flat/layout/admin.layout", $data);

	}

	public function editPost($req, $res) {
		if ($req->csrf) {
			$this->validate->checkBody('nickname','Nickname được bỏ trống!')->notEmpty();
			$this->validate->checkBody('password','Mật khẩu không được bỏ trống!')->notEmpty();
			$this->validate->checkBody('email','Email không được bỏ trống!')->notEmpty();
			$this->validate->checkBody('level','Chức vụ không hợp lệ!')->notNumeric();
			if (!Input::post('id') || !is_numeric(Input::post('id'))) {
				return $res->redirect('admin/member')->with(array('errors' => array("Thành viên không hợp lệ!")));
			} else if(!$this->memberModel->find(Input::post('id'))) {
				return $res->redirect('admin/member')->with(array('errors' => array("Thành viên không không tồn tại!")));
			}
			if ($this->validate->errors) {
				return $res->redirect('admin/member/edit?id=' . Input::post('id'))->with(array('errors' => $this->validate->errors));
			} else {
				$this->memberModel->id = Input::post('id');
				$this->memberModel->nickname = Input::post('nickname');
				$this->memberModel->password = Input::post('password');
				$this->memberModel->email = Input::post('email');
				$this->memberModel->password2 = Input::post('password2');
				$this->memberModel->level = Input::post('level');
				$this->memberModel->status = Input::post('status');
				$this->memberModel->save();
				return $res->redirect('admin/member/edit?id=' . Input::post('id'))->with(array('success' => "Cập nhật thành công!"));
			}
		} else {
			die('Sai Token!');
		}
	}
}