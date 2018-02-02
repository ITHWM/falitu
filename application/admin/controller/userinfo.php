<?php
/**
*
*/
class api
{

	public function userinfo($id)
	{
		if (!empty($id)) {
			$userinfo = UserModel::get($id);

			if (!empty($userinfo)) {
				$All_data['code'] = '200';
				$All_data['msg'] = '牛逼l';
				$All_data['data'] = $userinfo;
			} else {
				$All_data['code'] = '500';
				$All_data['msg'] = '数据丢了';
			}

			return json($All_data);
		}
	}
}