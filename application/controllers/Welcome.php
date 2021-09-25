<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$nama="Feri Ramdhani";
		$tempat_lahir="Bandung";
		$tanggal_lahir="03 Februari 1997";
		$tempat_tinggal="Pekanbaru";

			echo "<h1>Perkenalkan</h1>";
			echo "Nama	: $nama<br>
					Tempat Lahir	: $tempat_lahir<br>
					Tanggal Lahir	: $tanggal_lahir<br>
					Tempat Tinggal : $tempat_tinggal<br>";
			echo "<br>";
			echo "Motivasi Kuliah : ' Ingin menjadi Programmer handal,<br>
											ingin menempuh pendidikan yang lebih tinggi
											dan ingin membahagiakan orang tua '";

	}
}
