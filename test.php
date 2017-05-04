<?php
$arr = [
	'root' => [
		'thethao' => [
			'bongda',
			'bongchay'
		],
		'amthuc' => [
			'monanhangngay' => [
				'sang',
				'chieu',
				'toi'
			]
		]
	],
	'root2'
];
// Array
// (
//     [0] => Array
//         (
//             [id] => 2
//             [name] => Tin tức
//             [parent] => 1
//         )
//     [1] => Array
//         (
//             [id] => 4
//             [name] => Hướng dẫn
//             [parent] => // Array
							// (
							//     [0] => Array
							//         (
							//             [id] => 2
							//             [name] => Tin tức
							//             [parent] => 1
							//         )
							//     [1] => Array
							//         (
							//             [id] => 4
							//             [name] => Hướng dẫn
							//             [parent] => 1
							//         )
							// )
//         )
// )
$ar2 = [
	[
	],
	[]
]
test('',$arr);
function test($prefix,$arr) {
	foreach ($arr as $v) {
		echo $prefix . $v['name'] .'<br >';
		if (is_array($v['parent'])) {
			test($prefix.'--|',$v['parent']);
		}
	}
}