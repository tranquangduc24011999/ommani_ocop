<?php


$departments = [
    1 => 'Bộ Nông nghiệp và Phát triển nông thôn',
    2 => 'Bộ Công Thương',
    3 => 'Bộ Y tế',
    4 => 'Bộ Khoa học và Công nghệ',
    5 => 'Bộ Văn hóa, Thể thao và Du lịch',
    6 => 'Đoàn Thanh niên Cộng Sản Hồ Chí Minh',
    7 => 'Bộ Tài nguyên & Môi trường',
];

$workUnitDistrictLevel = [
    '1' => 'Phòng Kinh tế',
    '2' => 'Phòng Y tế',
    '3' => 'Phòng Văn hóa thông tin',
    '4' => 'Phòng Tài nguyên Môi trường',
    '5' => 'Văn phòng điều phối nông thôn mới cấp huyện',
    '6' => 'Ủy ban nhân dân cấp huyện',
    '100' => 'Đơn vị khác',
];

$workUnitProvinceLevel = [
    '11' => 'Sở Nông nghiệp và phát triển nông thôn',
    '12' => 'Sở Y tế',
    '13' => 'Sở Tài nguyên và Môi trường',
    '14' => 'Sở Công Thương',
    '15' => 'Sở Khoa học và Công nghệ',
    '16' => 'Sở Văn hóa, Thể thao và Du lịch',
    '17' => 'Văn phòng điều phối nông thôn mới cấp tỉnh',
    '18' => 'Ủy ban nhân dân cấp tỉnh',
    '100' => 'Đơn vị khác',
];

$briefStt = [
    'districtRanked' => 'Cấp huyện đã xếp hạng',
    'provinceRanked' => 'Cấp tỉnh đã xếp hạng',
    'Ranked' => 'Đã xếp hạng',
    'Submiting' => 'Đang nộp',
    'Done' => 'Hoàn thành',
    'Fail' => 'Không đạt',
    'Waitting' => 'Chờ chấm',
];

return [
    'departments' => $departments,
    'workUnitDistrictLevel' => $workUnitDistrictLevel,
    'workUnitProvinceLevel' => $workUnitProvinceLevel,
    'briefStt' => $briefStt
];
