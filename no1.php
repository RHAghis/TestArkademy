<?php 

function Biodata($name, $age)
{
	$nama = $name;
	$umur = $age;
	$address = 'Tulungagung';
	$hobbies = array('Play Game Online','Read an IT Books', 'Travelling');
	$is_married = false;
	$list_scholl = array(
					array(
						'name' 		=> 'MTsN Tulungagung',
						'year_in' 	=> '2009',
						'year_out' 	=> '2012',
						'major' 	=> null
					 ),
					array(
						'name' 		=> 'SMK Queen Al Falah',
						'year_in' 	=> '2012',
						'year_out' 	=> '2015',
						'major' 	=> 'Teknik Komputer dan Jaringan'
					 ),
					array(
						'name' 		=> 'Poiteknik Negeri Malang',
						'year_in' 	=> '2015',
						'year_out' 	=> '2019',
						'major' 	=> 'Teknik Informatika'
					 )
	);
	$skills = array(
					array(
						'skill_name'	=> 'Design',
						'level' 		=> 'Advance'
					),
					array(
						'skill_name'	=> 'Coding',
						'level' 		=> 'Advance'
					),
	);
	$interest_in_coding = true;
	$data = array($nama, $umur, $address, $hobbies, $is_married, $list_scholl, $skills, $interest_in_coding);
	$biodataku = json_encode($data);
	echo $biodataku;
	return $biodataku;
}

Biodata('Aghisna', '23');

 ?>