create table if not exists `tb_sinhvien`(
 `sv_id` int(11) not null auto_increment,
 `sv_name` varchar(255) collate utf8_unicode_ci DEFAULT NULL,
 `sv_sex` VARCHAR(5) COLLATE utf8_unicode_ci DEFAULT NULL,
 `sv_birthday` VARCHAR(255) COLLATE  utf8_unicode_ci DEFAULT null,
 PRIMARY KEY (`sv_id`)
)engine=InnoDB DEFAULT charset=utf8 COLLATE=utf8_unicode_ci auto_increment=6;

 
INSERT INTO `tb_sinhvien` (`sv_id`, `sv_name`, `sv_sex`, `sv_birthday`) VALUES
(1, 'Nguyễn Văn Cường', 'Nam', '20-11-2015'),
(2, 'Đặng Hoàng Chương', 'Nam', '10-12-2014'),
(3, 'Nguyễn Phú Cường', 'Nam', '30-01-1990'),
(4, 'Nguyễn Thị Thập', 'Nữ', '20-11-2011');
