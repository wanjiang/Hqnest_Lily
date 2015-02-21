<?php 
Class Home extends MY_Controller{

// 首页默认
function index()
{	

	// 加载frontpage model, 获取所需数据
	$this->load->model('Frontpage_model');
	
	// 获取数据列表
	$data['newitems'] = $this->Frontpage_model->get_itemsbytype('新品',9);
	$data['hot'] = $this->Frontpage_model->get_itemsbytype('热卖',12);
	$data['best'] = $this->Frontpage_model->get_itemsbytype('推荐',12);
	$data['book'] = $this->Frontpage_model->get_randombooks(8);
	
	// 加载页面
	$data['main_containt'] = 'home/homepage';
	$this->load->view('includes/template',$data);

}

// 跳转至英伦页面板块
function europe()
{
	$data['main_containt'] = 'home/europe';
	$this->load->view('includes/template',$data);
}

// 地址lily.hqnest.com/index.php/home/tableinfo 浏览器直接输入地址就可以查看数据库信息
function tableinfo()
{
	$tables = $this->db->list_tables();
	echo '数据库信息：<br/>';
	foreach ($tables as $table)
	{
		echo '表名：'.$table.'<br/>';
		$fields = $this->db->list_fields($table);
		foreach ($fields as $field)
		{
			echo $field.'<br/>';
		}
		echo '<br/>';
	}
}

}
?>