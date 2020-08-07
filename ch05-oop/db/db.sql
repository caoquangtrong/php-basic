create table if not exists `customer`(
    `id` int(11) not null auto_increment,
    `name` varchar(200) collate utf8_unicode_ci default null,
    `phone` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
    primary key (`id`)
) engine=innoDB default CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;
