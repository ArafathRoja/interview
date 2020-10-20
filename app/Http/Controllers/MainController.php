<?php

namespace App\Http\Controllers;
use DB;
use App\UserDetail;
use Illuminate\Http\Request;

class MainController extends Controller
{
	public function index()
	{
		return view('layout');
	}
	public function saveData(Request $request, UserDetail $user)
	{
		$data['name'] = $request->get('name');
		$data['gender'] = $request->get('gender');
		$data['maritalStatus'] = $request->get('marital_status');
		$data['mobile'] = $request->get('mobile');
		$data['state'] = $request->get('state');
		$data['dob'] = $request->get('dob');

		$user->updateOrCreate($data);
		$result = $user->get();

		return view('user_detail', ["data" => $result]);
	}

	public function exportData()
	{
		$data = DB::table('user_details')->get();
	
		if (empty($data) === false) {
			/*$file = fopen('user-details.csv', 'w');

			fputcsv($file, array('S.No', 'Name', 'Gender', 'Marital Status', 'Mobile', 'State', 'DOB'));

			foreach ($data as $value) {
				fputcsv($file, (array) $value);
			}
			 
			fclose($file);*/

			header('Content-type: text/csv');
			header('Content-Disposition: attachment; filename="user-details.csv"');

			header('Pragma: no-cache');
			header('Expires: 0');

			$file = fopen('php://output', 'w');
 
			fputcsv($file, array('S.No', 'Name', 'Gender', 'Marital Status', 'Mobile', 'State', 'DOB'));

			foreach ($data as $value) {
				fputcsv($file, (array) $value);
			}
			exit();

			return ['success' => true, 'status' => 200,  'message' => 'File Exported !!'];
		}
		else
			return ['success' => false, 'status' => 500,  'message' => 'File Not Exported !!'];

	}
}
