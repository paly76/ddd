<?php
create table tags(
	id int(10) auto_increment,
	name char(20) not null default '',
	pid int(10) unsigned not null default 0,
	lebel smallint(2) unsigned not null default 0,
	sort smallint(1) unsigned not null default 0,
	created_time int(10) unsigned not null default 0,
	primary key(id)
)default charset = utf8;



create table tags_second_relation_one(
	id int(10) unsigned auto_increment,
	two_id int(10) unsigned default 0,
	one_id int(10) unsigned default 0,
	created_at int(10) unsigned default 0,
	updated_at int(10) unsigned default 0,
	primary key(id)
)default charset = utf8;

create table tags_third_relation_two(
	id int(10) unsigned auto_increatment,
	third_id int(10) unsigned default 0,
	two_id int(10) unsigned default 0,
	created_at int(10) unsigned default 0,
	updated_at int(10)  
)




