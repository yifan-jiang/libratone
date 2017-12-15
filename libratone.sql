SET NAMES UTF8;
DROP DATABASE IF EXISTS libratone;
CREATE DATABASE libratone CHARSET=UTF8;
USE	libratone;

CREATE TABLE banner(
	bid INT PRIMARY KEY AUTO_INCREMENT,
	img VARCHAR(128),
	fid INT
);
INSERT INTO banner VALUES
(NULL,'images/1501700286766389572.jpg',3),
(NULL,'images/1496790220399814134.jpg',2),
(NULL,'images/1487644656322912080.jpg',1),
(NULL,'images/1487644569588142518.jpg',4),
(NULL,'images/1487644529191866955.jpg',5);

CREATE TABLE earphones(
	familyId INT,
	fname VARCHAR(32),
	img VARCHAR(128),
	subImg VARCHAR(128),
	detailId INT,
	word VARCHAR(128)
);
INSERT INTO earphones VALUES
(1,'Q系列耳机','images/Z.jpg','images/chaikanxiangqing.png',1,'来自北欧的LIBRATONE Q系列耳机，为您带来北欧的清澈天籁，采用创新的CityMix可调节降噪技术，让你自由调节整个城市的声音，简洁优雅的北欧设计风格开启耳机的随身风尚。'),
(1,'Q系列耳机','images/9k.jpg','images/chaikanxiangqing.png',1,'来自北欧的LIBRATONE Q系列耳机，为您带来北欧的清澈天籁，采用创新的CityMix可调节降噪技术，让你自由调节整个城市的声音，简洁优雅的北欧设计风格开启耳机的随身风尚。'),
(1,'Q系列耳机','images/youxian.jpg','images/chaikanxiangqing.png',1,'来自北欧的LIBRATONE Q系列耳机，为您带来北欧的清澈天籁，采用创新的CityMix可调节降噪技术，让你自由调节整个城市的声音，简洁优雅的北欧设计风格开启耳机的随身风尚。'),
(1,'Q系列耳机','images/ruer.jpg','images/chaikanxiangqing.png',1,'来自北欧的LIBRATONE Q系列耳机，为您带来北欧的清澈天籁，采用创新的CityMix可调节降噪技术，让你自由调节整个城市的声音，简洁优雅的北欧设计风格开启耳机的随身风尚。'),
(2,'移动家用系列','images/jiayong1.jpg','images/chaikanxiangqing.png',2,'来自北欧的无线音响Libratone 移动家用系列，采用FullRoom环音技术，为您提供360°均匀声场；SoundSpace Link让您快速组合多个音响同步播放，轻松创建属于自己的声音空间；内置的5个在线频道，尽享10000+流媒体内容。'),
(2,'移动家用系列','images/jiayong2.jpg','images/chaikanxiangqing.png',2,'来自北欧的无线音响Libratone 移动家用系列，采用FullRoom环音技术，为您提供360°均匀声场；SoundSpace Link让您快速组合多个音响同步播放，轻松创建属于自己的声音空间；内置的5个在线频道，尽享10000+流媒体内容。'),
(2,'移动家用系列','images/jiayong3.jpg','images/chaikanxiangqing.png',2,'来自北欧的无线音响Libratone 移动家用系列，采用FullRoom环音技术，为您提供360°均匀声场；SoundSpace Link让您快速组合多个音响同步播放，轻松创建属于自己的声音空间；内置的5个在线频道，尽享10000+流媒体内容。'),
(2,'移动家用系列','images/jiayong4.jpg','images/chaikanxiangqing.png',2,'来自北欧的无线音响Libratone 移动家用系列，采用FullRoom环音技术，为您提供360°均匀声场；SoundSpace Link让您快速组合多个音响同步播放，轻松创建属于自己的声音空间；内置的5个在线频道，尽享10000+流媒体内容。'),
(2,'移动家用系列','images/jiayong5.jpg','images/chaikanxiangqing.png',2,'来自北欧的无线音响Libratone 移动家用系列，采用FullRoom环音技术，为您提供360°均匀声场；SoundSpace Link让您快速组合多个音响同步播放，轻松创建属于自己的声音空间；内置的5个在线频道，尽享10000+流媒体内容。'),
(3,'GO系列','images/go1.jpg','images/chaikanxiangqing.png',3,'来自北欧的Libratone GO系列便携蓝牙音箱，拥有可自由更换的丰富配件，带来前所未有的户外适配性。北欧设计尽致展现自由生活美学。更有Libratone家族自有FullRoom专利技术，让您在户外也能享受360°自由聆听'),
(3,'GO系列','images/go2.jpg','images/chaikanxiangqing.png',3,'来自北欧的Libratone GO系列便携蓝牙音箱，拥有可自由更换的丰富配件，带来前所未有的户外适配性。北欧设计尽致展现自由生活美学。更有Libratone家族自有FullRoom专利技术，让您在户外也能享受360°自由聆听'),
(4,'经典系列','images/jingdian1.jpg','images/chaikanxiangqing.png',4,'Libratone经典系列产品，秉持丹麦设计哲学，简洁优雅，均使用意大利进口羊毛外套，并可随意换装更色。采用FullRoom环音技术，形成360°均匀声场。ZIPP ClASSIC、LOOP、LIVE、LOUNGE、DIVA五个系列以不同声学配备满足各种使用需求，带来惊艳的音质表现，并提供友好的交互操作体验。'),
(4,'经典系列','images/jingdian2.jpg','images/chaikanxiangqing.png',4,'Libratone经典系列产品，秉持丹麦设计哲学，简洁优雅，均使用意大利进口羊毛外套，并可随意换装更色。采用FullRoom环音技术，形成360°均匀声场。ZIPP ClASSIC、LOOP、LIVE、LOUNGE、DIVA五个系列以不同声学配备满足各种使用需求，带来惊艳的音质表现，并提供友好的交互操作体验。'),
(4,'经典系列','images/jingdian3.jpg','images/chaikanxiangqing.png',4,'Libratone经典系列产品，秉持丹麦设计哲学，简洁优雅，均使用意大利进口羊毛外套，并可随意换装更色。采用FullRoom环音技术，形成360°均匀声场。ZIPP ClASSIC、LOOP、LIVE、LOUNGE、DIVA五个系列以不同声学配备满足各种使用需求，带来惊艳的音质表现，并提供友好的交互操作体验。'),
(4,'经典系列','images/jingdian4.jpg','images/chaikanxiangqing.png',4,'Libratone经典系列产品，秉持丹麦设计哲学，简洁优雅，均使用意大利进口羊毛外套，并可随意换装更色。采用FullRoom环音技术，形成360°均匀声场。ZIPP ClASSIC、LOOP、LIVE、LOUNGE、DIVA五个系列以不同声学配备满足各种使用需求，带来惊艳的音质表现，并提供友好的交互操作体验。'),
(4,'经典系列','images/jingdian5.jpg','images/chaikanxiangqing.png',4,'Libratone经典系列产品，秉持丹麦设计哲学，简洁优雅，均使用意大利进口羊毛外套，并可随意换装更色。采用FullRoom环音技术，形成360°均匀声场。ZIPP ClASSIC、LOOP、LIVE、LOUNGE、DIVA五个系列以不同声学配备满足各种使用需求，带来惊艳的音质表现，并提供友好的交互操作体验。'),
(4,'经典系列','images/jingdian6.jpg','images/chaikanxiangqing.png',4,'Libratone经典系列产品，秉持丹麦设计哲学，简洁优雅，均使用意大利进口羊毛外套，并可随意换装更色。采用FullRoom环音技术，形成360°均匀声场。ZIPP ClASSIC、LOOP、LIVE、LOUNGE、DIVA五个系列以不同声学配备满足各种使用需求，带来惊艳的音质表现，并提供友好的交互操作体验。'),
(4,'经典系列','images/jingdian7.jpg','images/chaikanxiangqing.png',4,'Libratone经典系列产品，秉持丹麦设计哲学，简洁优雅，均使用意大利进口羊毛外套，并可随意换装更色。采用FullRoom环音技术，形成360°均匀声场。ZIPP ClASSIC、LOOP、LIVE、LOUNGE、DIVA五个系列以不同声学配备满足各种使用需求，带来惊艳的音质表现，并提供友好的交互操作体验。'),
(5,'配件周边','images/peijian1.jpg','images/chaikanxiangqing.png',5,'钻石纹网布外套专为新品Zipp及ZippMini定制的时尚外套，采用钻石网纹布，以通透的材质和独特的菱形网眼设计，让纯净美妙的音质可以自由从中穿透。多色可选，契合了现下各种差异化装饰风格和潮流，并可让您根据季节时令以及个性偏好随心更换。意大利进口羊毛毡外套Libratone 进口羊毛毡外套均来自意大利顶级面料生产商Bigagli，羊毛则产自素以纺织闻名的意大利托斯卡纳小镇Prato。羊毛从羊身上剪下后，需经过染色、挑选、清洗和梳理等一系列工序,并在此之后，完成精细筛选和混色工艺。梳理后的羊毛纤厚度仅为最终织物的二十分之一，这些极薄的羊毛纤维层经机械压合后，形成厚实强韧的纤维层，最终形成的羊毛织物就像一个完美的声学滤波器，使得干净、无损和近乎完美平衡的音质从中传递出来。'),
(5,'配件周边','images/peijian2.jpg','images/chaikanxiangqing.png',5,'钻石纹网布外套专为新品Zipp及ZippMini定制的时尚外套，采用钻石网纹布，以通透的材质和独特的菱形网眼设计，让纯净美妙的音质可以自由从中穿透。多色可选，契合了现下各种差异化装饰风格和潮流，并可让您根据季节时令以及个性偏好随心更换。意大利进口羊毛毡外套Libratone 进口羊毛毡外套均来自意大利顶级面料生产商Bigagli，羊毛则产自素以纺织闻名的意大利托斯卡纳小镇Prato。羊毛从羊身上剪下后，需经过染色、挑选、清洗和梳理等一系列工序,并在此之后，完成精细筛选和混色工艺。梳理后的羊毛纤厚度仅为最终织物的二十分之一，这些极薄的羊毛纤维层经机械压合后，形成厚实强韧的纤维层，最终形成的羊毛织物就像一个完美的声学滤波器，使得干净、无损和近乎完美平衡的音质从中传递出来。'),
(5,'配件周边','images/peijian3.jpg','images/chaikanxiangqing.png',5,'钻石纹网布外套专为新品Zipp及ZippMini定制的时尚外套，采用钻石网纹布，以通透的材质和独特的菱形网眼设计，让纯净美妙的音质可以自由从中穿透。多色可选，契合了现下各种差异化装饰风格和潮流，并可让您根据季节时令以及个性偏好随心更换。意大利进口羊毛毡外套Libratone 进口羊毛毡外套均来自意大利顶级面料生产商Bigagli，羊毛则产自素以纺织闻名的意大利托斯卡纳小镇Prato。羊毛从羊身上剪下后，需经过染色、挑选、清洗和梳理等一系列工序,并在此之后，完成精细筛选和混色工艺。梳理后的羊毛纤厚度仅为最终织物的二十分之一，这些极薄的羊毛纤维层经机械压合后，形成厚实强韧的纤维层，最终形成的羊毛织物就像一个完美的声学滤波器，使得干净、无损和近乎完美平衡的音质从中传递出来。'),
(5,'配件周边','images/peijian4.jpg','images/chaikanxiangqing.png',5,'钻石纹网布外套专为新品Zipp及ZippMini定制的时尚外套，采用钻石网纹布，以通透的材质和独特的菱形网眼设计，让纯净美妙的音质可以自由从中穿透。多色可选，契合了现下各种差异化装饰风格和潮流，并可让您根据季节时令以及个性偏好随心更换。意大利进口羊毛毡外套Libratone 进口羊毛毡外套均来自意大利顶级面料生产商Bigagli，羊毛则产自素以纺织闻名的意大利托斯卡纳小镇Prato。羊毛从羊身上剪下后，需经过染色、挑选、清洗和梳理等一系列工序,并在此之后，完成精细筛选和混色工艺。梳理后的羊毛纤厚度仅为最终织物的二十分之一，这些极薄的羊毛纤维层经机械压合后，形成厚实强韧的纤维层，最终形成的羊毛织物就像一个完美的声学滤波器，使得干净、无损和近乎完美平衡的音质从中传递出来。'),
(5,'配件周边','images/peijian5.jpg','images/chaikanxiangqing.png',5,'钻石纹网布外套专为新品Zipp及ZippMini定制的时尚外套，采用钻石网纹布，以通透的材质和独特的菱形网眼设计，让纯净美妙的音质可以自由从中穿透。多色可选，契合了现下各种差异化装饰风格和潮流，并可让您根据季节时令以及个性偏好随心更换。意大利进口羊毛毡外套Libratone 进口羊毛毡外套均来自意大利顶级面料生产商Bigagli，羊毛则产自素以纺织闻名的意大利托斯卡纳小镇Prato。羊毛从羊身上剪下后，需经过染色、挑选、清洗和梳理等一系列工序,并在此之后，完成精细筛选和混色工艺。梳理后的羊毛纤厚度仅为最终织物的二十分之一，这些极薄的羊毛纤维层经机械压合后，形成厚实强韧的纤维层，最终形成的羊毛织物就像一个完美的声学滤波器，使得干净、无损和近乎完美平衡的音质从中传递出来。'),
(5,'配件周边','images/peijian6.jpg','images/chaikanxiangqing.png',5,'钻石纹网布外套专为新品Zipp及ZippMini定制的时尚外套，采用钻石网纹布，以通透的材质和独特的菱形网眼设计，让纯净美妙的音质可以自由从中穿透。多色可选，契合了现下各种差异化装饰风格和潮流，并可让您根据季节时令以及个性偏好随心更换。意大利进口羊毛毡外套Libratone 进口羊毛毡外套均来自意大利顶级面料生产商Bigagli，羊毛则产自素以纺织闻名的意大利托斯卡纳小镇Prato。羊毛从羊身上剪下后，需经过染色、挑选、清洗和梳理等一系列工序,并在此之后，完成精细筛选和混色工艺。梳理后的羊毛纤厚度仅为最终织物的二十分之一，这些极薄的羊毛纤维层经机械压合后，形成厚实强韧的纤维层，最终形成的羊毛织物就像一个完美的声学滤波器，使得干净、无损和近乎完美平衡的音质从中传递出来。');

CREATE TABLE phoneDetail(
	did INT,
	img VARCHAR(128),
	block VARCHAR(32),
	title VARCHAR(64)
);
INSERT INTO phoneDetail VALUES
(1,'images/q11.jpg','外观','贴耳式头戴蓝牙耳机'),
(1,'images/q12.jpg','外观','贴耳式头戴蓝牙耳机'),
(1,'images/q13.jpg','外观','贴耳式头戴蓝牙耳机'),
(1,'images/q14.jpg','外观','贴耳式头戴蓝牙耳机'),
(1,'images/q15.jpg','外观','贴耳式头戴蓝牙耳机'),
(1,'images/q16.jpg','外观','贴耳式头戴蓝牙耳机'),
(1,'images/q17.jpg','外观','贴耳式头戴蓝牙耳机'),
(1,'images/on-ear-pro4级.jpg','声学','贴耳式头戴蓝牙耳机'),
(1,'images/1281鑰虫満_03.jpg','声学','贴耳式头戴蓝牙耳机'),
(1,'images/asdasdsa.jpg','声学','贴耳式头戴蓝牙耳机'),
(1,'images/danmai.jpg','声学','贴耳式头戴蓝牙耳机'),
(1,'images/1281.jpg','声学','贴耳式头戴蓝牙耳机'),
(1,'images/caokong.jpg','声学','贴耳式头戴蓝牙耳机'),
(1,'images/1281耳机_07.jpg','操控','贴耳式头戴蓝牙耳机'),
(1,'images/ioioi.jpg','操控','贴耳式头戴蓝牙耳机'),
(1,'images/jianjie.jpg','操控','贴耳式头戴蓝牙耳机'),
(1,'images/12811515.jpg','操控','贴耳式头戴蓝牙耳机'),
(2,'images/22_G_1467251498522.jpg','外观','购买ZIPP黑金版'),
(2,'images/1281黑金_01.jpg','外观','购买ZIPP黑金版'),
(2,'images/家用音响本该如此主KV.jpg','外观','购买ZIPP黑金版'),
(2,'images/1281黑金_014.jpg','外观','购买ZIPP黑金版'),
(2,'images/1281黑金_015.jpg','外观','购买ZIPP黑金版'),
(2,'images/1281黑金_016.jpg','外观','购买ZIPP黑金版'),
(2,'images/1281黑金_017.jpg','外观','购买ZIPP黑金版'),
(2,'images/1281黑金_04.jpg','声学','购买ZIPP黑金版'),
(2,'images/1281黑金_05.jpg','声学','购买ZIPP黑金版'),
(2,'images/1281黑金_07.jpg','声学','购买ZIPP黑金版'),
(2,'images/1281黑金_07.jpg','声学','购买ZIPP黑金版'),
(2,'images/1281黑金_06.jpg','操控','购买ZIPP黑金版'),
(2,'images/1281黑金_08.jpg','操控','购买ZIPP黑金版'),
(2,'images/1281黑金_09.jpg','操控','购买ZIPP黑金版'),
(2,'images/1281黑金_010.jpg','操控','购买ZIPP黑金版'),
(2,'images/1281黑金_011.jpg','操控','购买ZIPP黑金版'),
(2,'images/paspap.jpg','操控','购买ZIPP黑金版'),
(2,'images/概览页产品对比-拷贝_01.jpg','对比','购买ZIPP黑金版'),
(2,'images/概览页产品对比-拷贝_02.jpg','对比','购买ZIPP黑金版'),
(2,'images/asdasdsad.jpg','对比','购买ZIPP黑金版'),
(3,'images/25_G_1467255727728.jpg','外观','LIBRATONE TOO'),
(3,'images/2.jpg','外观','LIBRATONE TOO'),
(3,'images/3.jpg','外观','LIBRATONE TOO'),
(3,'images/4.jpg','外观','LIBRATONE TOO'),
(3,'images/5.jpg','外观','LIBRATONE TOO'),
(3,'images/asdasdqweqw.jpg','外观','LIBRATONE TOO'),
(3,'images/on-ear-pro4级.jpg','声学','LIBRATONE TOO'),
(3,'images/1281鑰虫満_03.jpg','声学','LIBRATONE TOO'),
(3,'images/asdasdsa.jpg','声学','LIBRATONE TOO'),
(3,'images/danmai.jpg','声学','LIBRATONE TOO'),
(3,'images/1281.jpg','声学','LIBRATONE TOO'),
(3,'images/caokong.jpg','声学','LIBRATONE TOO'),
(3,'images/1281黑金_06.jpg','操控','LIBRATONE TOO'),
(3,'images/1281黑金_08.jpg','操控','LIBRATONE TOO'),
(3,'images/1281黑金_09.jpg','操控','LIBRATONE TOO'),
(3,'images/1281黑金_010.jpg','操控','LIBRATONE TOO'),
(3,'images/1281黑金_011.jpg','操控','LIBRATONE TOO'),
(3,'images/paspap.jpg','操控','LIBRATONE TOO'),
(3,'images/概览页产品对比-拷贝_01.jpg','对比','LIBRATONE TOO'),
(3,'images/概览页产品对比-拷贝_02.jpg','对比','LIBRATONE TOO'),
(3,'images/asdasdsad.jpg','对比','LIBRATONE TOO'),
(4,'images/1281classic_01.jpg','外观','购买LIBRATONE ZIPP CLASSIC'),
(4,'images/1281classic_07.jpg','外观','购买LIBRATONE ZIPP CLASSIC'),
(4,'images/1281classic_08.jpg','外观','购买LIBRATONE ZIPP CLASSIC'),
(4,'images/1281classic_08.jpg','外观','购买LIBRATONE ZIPP CLASSIC'),
(4,'images/1281classic_09.jpg','外观','购买LIBRATONE ZIPP CLASSIC'),
(4,'images/1281classic_10.jpg','外观','购买LIBRATONE ZIPP CLASSIC'),
(4,'images/hjkjhgj.jpg','外观','购买LIBRATONE ZIPP CLASSIC'),
(4,'images/1281classic_02.jpg','声学','购买LIBRATONE ZIPP CLASSIC'),
(4,'images/1281classic_03.jpg','声学','购买LIBRATONE ZIPP CLASSIC'),
(4,'images/1281classic_04.jpg','声学','购买LIBRATONE ZIPP CLASSIC'),
(4,'images/1281classic_05.jpg','声学','购买LIBRATONE ZIPP CLASSIC'),
(4,'images/1281classic_06.jpg','声学','购买LIBRATONE ZIPP CLASSIC'),
(4,'images/dfgjndfjig.jpg','声学','购买LIBRATONE ZIPP CLASSIC'),
(4,'images/1281classic_012.jpg','操控','购买LIBRATONE ZIPP CLASSIC'),
(4,'images/1281classic_013.jpg','操控','购买LIBRATONE ZIPP CLASSIC'),
(4,'images/1281classic_011.jpg','操控','购买LIBRATONE ZIPP CLASSIC'),
(4,'images/1281classic_016.jpg','操控','购买LIBRATONE ZIPP CLASSIC'),
(4,'images/asdasdaytutyjhn.jpg','操控','购买LIBRATONE ZIPP CLASSIC'),
(5,'images/waizipp_01.jpg','外观','购买ZIPP外套'),
(5,'images/waizipp_02.jpg','外观','购买ZIPP外套'),
(5,'images/waizipp_03.jpg','外观','购买ZIPP外套'),
(5,'images/waizipp_04.jpg','外观','购买ZIPP外套'),
(5,'images/waizipp_05.jpg','外观','购买ZIPP外套'),
(5,'images/waizipp_07.jpg','外观','购买ZIPP外套'),
(5,'images/waizipp_08.jpg','外观','购买ZIPP外套'),
(5,'images/waizipp_09.jpg','外观','购买ZIPP外套'),
(5,'images/waizipp_10.jpg','外观','购买ZIPP外套');


CREATE TABLE libratone_index_carousel(
	cid INT PRIMARY KEY AUTO_INCREMENT,
	img VARCHAR(128),
	subimg VARCHAR(128),
	fid INT,
	son VARCHAR(32)
);
INSERT INTO libratone_index_carousel VALUES
(NULL,'images/1473391834894004765.jpg','images/blocka.jpg',1,'a'),
(NULL,'images/blockb1.jpg','images/blockb2.jpg',2,'b'),
(NULL,'images/blockc1.jpg','images/blockc2.jpg',null,'c'),
(NULL,'images/blockd1.jpg','images/blockd2.jpg',null,'d'),
(NULL,'images/blocke1.jpg','images/blocke2.jpg',1,'e'),
(NULL,'images/blockf1.jpg','images/blockf2.jpg',2,'f'),
(NULL,'images/blockg1.jpg','images/blockg2.jpg',null,'g'),
(NULL,'images/blockh1.jpg','images/blockh2.jpg',3,'h'),
(NULL,'images/blocki1.jpg','images/blocki2.jpg',4,'i');


CREATE TABLE mp4(
	mid INT PRIMARY KEY AUTO_INCREMENT,
	title VARCHAR(64),
	mp4 VARCHAR(128)
);
INSERT INTO mp4 VALUES
(null,'无线音响Libratone Zipp Mini',"mp4/gongneng.mp4");


CREATE TABLE news(
	nid INT PRIMARY KEY AUTO_INCREMENT,
	class VARCHAR(32),
	title VARCHAR(64),
	img VARCHAR(128),
	subtitle VARCHAR(666),
	come VARCHAR(32)
);
INSERT INTO news VALUES
(null,'评测','小鸟蓝牙音箱体验：这个“暖水袋”音质不错','images/1473203766791676648.jpg','与我们平日里见到的有棱有角的蓝牙音箱不同，小鸟的这款音箱Libratone ONE不但在身材方面更魁梧，而且在配色的选用上也更为鲜艳。','来源:腾讯数码'),
(null,'评测','Libratone One蓝牙音箱体验：来自丹麦的好声音','images/1473203747375939790.jpg','蓝牙音箱我体验过不少，上至一千多的Bose，下至99元的小米小钢炮。不受电源与传统线材的限制，连手机或者连平板电脑，更加自由的享受音乐，这便是蓝牙音箱最吸引人的地方。
    最近我体验了一款Libratone One蓝牙音箱，这是一个来自丹麦的，以自由聆听作为品牌目标的品牌，因为LOGO可爱的小鸟形象，你也可以叫它小鸟。','来源:凤凰科技'),
(null,'评测','精致实用 小鸟音响Libratone ONE试用','images/1473203729497678540.jpg','在去年一年主打WiFi音响产品之后，在今年这个品牌则为我们带来了两款蓝牙音箱，其中一款名为Libratone ONE的产品也就是今天要评测的这款产品了，作为一款户外便携式音箱，它的定位属于行业内的中高端水平，并且在外观设计上继承了小鸟一直以来的风格--简约中不失格调。
除了外观的设计和声音的表现之外，Libratone ONE分为标准版和百变版，百变版还有一些格外实用的小配件，让这款产品兼具了实用性和可玩性。用户不论在室外、室内、还是出去郊游都有更好的实用体验，那究竟这款产品如何？不妨一起来看看评测吧。','来源:中关村在线'),
(null,'评测','音乐随心听 Libratone One蓝牙音箱简评','images/1473203699625746442.jpg','所有的无线音箱被制造出来的初衷，都是为了让大家在听音乐这点上越发的不受电源与传统线材的限制，能够更加自由的听想听的音乐。而成立于以独一无二的设计力而闻名的丹麦，以更加自由的聆听作为品牌目标的Libratone小鸟音响也在以一条更加直观、自然的道路去做到这一点，其漂亮简约的设计理念与独家的360度环音技术，让它旗下的蓝牙音箱可以完美的融为居家生活的一部分而存在着。　　
而针对室外与可能的差旅聆听需求，Libratone又 于2016年5月11日在CES Asia展会上发布了全新的GO系列蓝牙音箱One与Too两款产品，其中更加具有Libratone自家设计特色的One在继承了360度环音技术与一 贯的极简设计风格的同时，百变的可换外挂配件系统也使得这款蓝牙音箱的使用场景多到了“不可想象”的程度。','来源:IT168'),
(null,'评测','360°聆听 libratone too蓝牙音箱体验','images/1473205848230587935.jpg','Libratone，一家来自于丹麦的知名音响品牌，这是一家来自于丹麦的知名音响品牌，专注于研发和生产无线音响产品。旗下的无线音响产品都有一个非常醒目的夜莺标志，它源自丹麦童话大王安徒生的童话故事—《夜莺》。','来源:中关村在线'),
(null,'评测','畅享音乐 小鸟音响Libratone TOO评测','images/1473207679524745101.jpg','　　Libratone成立于2009年，是一家专注于生产无线音乐设备的丹麦品牌，Libratone于2014年正式进军中国市场，产品定位高端，目前已经有很多朋友熟悉了这个品牌，由于品牌logo是夜莺，所以它还有一个非常形象的中文名字“小鸟音响”!','来源:安卓中文网'),
(null,'评测','陪你「勇闯天涯」，Libratone TOO 蓝牙音箱体验','images/1473212617059402590.jpg','蓝牙音箱这个产品在我们的数字生活中扮演的角色还是比较重要的，假如你跟我一样憎恨桌面上杂乱不堪的各种线材，同时又不能忍受笔电自带的音效，那么一款蓝 牙音箱就必不可少了。另外一方面，如果你的蓝牙音箱防水性能不错，那么你可以洗澡的时候把它放在卫生间，每天都开一场“个人”演唱会。

最近有一款刚好符合以上要求的产品到了我手上，它是来自丹麦品牌 LIBRATONE 旗下，刚刚推出不久的 Libratone TOO。这款产品属于 LIBRATONE GO 系列，看名字尾巴们大概也知道，这是个主打户外的便携系列。','来源:数字尾巴'),
(null,'评测','北欧味儿的智能 无线音响Libratone Zipp Mini','images/1450315686102518899.jpg','“音乐”在寒冷的北欧一直是人们日常生活不可分割的一部分，在寒冷的冬季，足不出户的在家享受质感的音乐是当地人对生活的一种态度。而近些年智能硬件概念的不断火热，音响与智能硬件也碰撞出了精彩的火花。我们今天要说的产品就是一款来自丹麦的无线智能音响新锐品牌Libratone，其在近期推出的Libratone Zipp Mini，也叫做小鸟音响，其售价为1280元。','来源:速途网'),
(null,'评测','Libratone Zipp & Zipp Mini 无线音响评测','images/1450315745685757611.jpg',' 跟老 Zipp 相比，这次的两款新品支持的连线方式要多了不少。你既可以利用 AirPlay、DLNA、QPlay、Spotify Connect 将设备内的音乐通过 Wi-Fi 串流到音响上播放，也能蓝牙直连（前代不可以，而且这次还支持 apt-X），或是插上 U 盘直接读取其中的内容。','来源:瘾科技 engadget'),
(null,'评测','无线音响新锐-Libratone ZIPP评测','images/1450315771024878486.jpg','在无线音响这个市场并不缺少大牌，传统的3B（B&W、B&O和BOSE），以及Sonos都 是各有所长，而Libratone作为后起之秀，尤其在品牌知名度不及其竞品的当下，如何才能崭露头角？或许这篇评测能给大家一些答案。','来源:新浪数码'),
(null,'评测','高颜值无线音响：Libratone ZIPP mini试玩','images/1450315932303158744.jpg',' 现在进入了无线时代，什么电子产品都希望无线的才清爽，音响也不例外，在各个众筹平台上蓝牙音箱为代表的无线音响设备也是各家厂商你方唱罢我登场，作为喜爱音乐的我也买过好几个蓝牙音箱了，但是这两天拿到了来自丹麦的高颜值无线音响Libratone ZIPP mini，还是迫不及待的要跟大家安利一下，分享一下这个音箱的试用感受。','来源:搜狐科技/酷玩'),
(null,'评测','BOSE ST10对比Libratone Zipp Mini','images/1450641766259554772.jpg','随着无线技术的不断发展，人们对于无线产品已经从最开始的尝鲜，逐步发展成一种基本的需求，无线音箱也越来越受到人们的欢迎，目前主流的无线音箱不仅能够通过无线方式进行控制，还能通过WiFi连接播放在线音频，可以说让音乐的体验更加得心应手，今天我们将对两款最新发布的千元级无线音箱进行简单对比，让消费者对这两款音箱有更为清晰的认识，从而选择一款更适合自己的无线音箱。','来源:泡泡网/HIFI音箱频道'),
(null,'评测','ZIPP MINI无线音响体验：玩转多彩音乐','images/1450642058855856772.jpg','来自北欧的高端时尚音响品牌Libratone 在今年十月发布了旗下最新的两款无线音频新品，分别是ZIPP和ZIPP MINI无线音响，这款形似胶囊的无线音箱，在外观上采用独树一帜的“外衣”设计，并且可以自由更换颜色，在功能上也能实现一键呼应、多机连接、蓝牙通话等实用功能，那么如何玩转这款ZIPP MINI无线音响呢？今天为大家带来我们的最新体验。','来源:泡泡网/HIFI音箱频道'),
(null,'评测','无线智能音响Libratone Zipp Mini评测','images/1450656293584881346.jpg','“音乐”是享受生活的一部分，“智能”又是各大主流硬件厂商的必争之地，这两者的结合体智能音响就是我们今天要说的产品，它的名字叫Libratone Zipp Mini，是一款可以让你的生活自由舒适又不缺乏科技感的产品。','来源:IT168数码频道'),
(null,'评测','小而强大 Libratone ZIPP MINI评测','images/1450656512123435375.jpg','新款ZIPP除去依旧出众的音质外，在功能与易用性上相比以往的WiFi音箱也有巨大的进步，新颖的触控面板操作，简单易用的APP，可以脱离手机独立使用的网络电台资源，方便的SoundSpace Link拓展，都是Libratone ZIPP的亮点所在。','来源:IMP3/数码配件'),
(null,'评测','ZIPP评测：穿起了毛衣，这个来自丹麦的音响想做','images/1473186692986303601.jpg','Libratone ZIPP内置了 5 个网络电台，可以通过 app 设置成不同的频道，它还能对听音环境进行修正，获得更佳听觉体验。','来源:极客公园/极客之选'),
(null,'评测','强大易用 新款Libratone ZIPP首测','images/1450657094145492199.jpg','更强、更轻、更人性化，Libratone无线音响用产品传递“音，为自由”理念，让小鸟音响可以自由而婉转的放歌。','来源:IMP3/数码配件'),
(null,'新闻','【新品上市】Libratone便携蓝牙音箱 ONE, TOO…GO！无处不音乐！','images/sadsadsad873jhu.jpg','2016年5月11日上海CES Asia 2016展会，Libratone正式推出GO系列便携蓝牙音箱——Libratone ONE和Libratone TOO，引领“无处不音乐”新潮流！','2016年5月11日'),
(null,'新闻','解放声音，传递自由，Libratone Zipp系列无线音响全新发布','images/1450662875626976794.jpg','2015年10月22日，来自丹麦的无线音响品牌Libratone新品发布会在北京798悦·美术馆举行。','2015年10月22日'),
(null,'新闻','全新LIBRATONE APP正式上线，8大功能集于一身，便捷操控您的音响','images/1450662652232016317.jpg','全新Libratone APP 2015年11月4日起正式上线，赶快通过APP Store或扫描官网下载地址二维码免费下载并开启您的可移动音响操控音响之旅吧。','2015年11月4日'),
(null,'视频','北欧味儿的智能 无线音响Libratone Zipp Mini','images/asdsad23423gt.jpg','','');


CREATE TABLE news_detail(
	newsid INT ,
	img VARCHAR(128),
	word VARCHAR(666)

);

INSERT INTO news_detail VALUES
(1,'images/136469588.jpg','腾讯数码讯（马炯慧）相比起耳机这种比较个人或者说私密型的音频产品来讲，外放型音箱则更适合与家人、朋友拿来进行音乐上的分享。外放型音箱如今也演变出了多种产品形式，而通过蓝牙作为传输形式的外放音箱，凭借其轻巧的设计以及便携的操作等特点已经成了不少消费者的首选。
 
在 选购品牌方面，像JBL、SONY、BOSE或者是漫步者等“老大哥”级别的咱们今儿就不说啦，今天给大家带来的是一款很“善变”、很好玩的蓝牙音箱产品 Libratone ONE，它有一个非常好听的中文名字“小鸟”。那么，这只“小鸟”歌唱得到底好听不好听，咱们马上体验起来。
 
造型多变适应多种使用场景'),
(1,'images/136469617.jpg','与我们平日里见到的有棱有角的蓝牙音箱不同，小鸟的这款音箱Libratone ONE不但在身材方面更圆润，而且在配色的选用上也更为鲜艳，相信对年轻一族的消费群体来说更容易接受。音箱正反两面用网纹布进行包裹，具备一定的防滑 性。它的最大特色还在于其造型的上的多变，通过搭配使用一些专属配件就可以让它适用于多种使用场景'),
(1,'images/136469641(1).jpg','图中所展示的这个硅胶提手就是其中的一个配件，配合这个提手的使用，小鸟蓝牙音箱在外出使用时就能方便地手提携带；如果放在家里使用，除了放置在桌面上，当然你还可以在洗澡时把它直接挂在浴室的把手上来一场独家演唱会。'),
(1,'images/136469656.jpg','既然说它是多变，那么它就一定是有可以进行随意拆卸、组装的地方，而这个地方是围绕在音箱四周的边框。只需稍稍用力，我们就可以把这个边框拆卸下来再加装其他配件，即可适应多种使用场景了。'),
(1,'images/136469686.jpg','除了刚才已经展示过的形态，它还可以直接固定在自行车的横梁上。约上三、五个骑友带着小鸟音箱，放着音乐、骑者车去郊游，绝对拉风。'),
(1,'images/136469689.jpg','Libratone ONE蓝牙音箱的背面下方设计有电源按键，而micro USB充电接口和3.5mm音频接口则被巧妙地做成了隐藏式。在满电的初始状态下，官方称它可以连续播放12小时。当然，这个数据很明显是一个理论估值。 实际使用状况下，考虑外放音量的大小，它基本可以坚持10小时的播放时间。
 
另外在连接状态下，如果一段时间内Libratone ONE没有进行音频内容播放，它就会自行关机。从零电量状态到充满电的时间大约需要花费3个半小时，充电时间我个人感觉稍微有点长。
 
一只“小鸟”和一个APP'),
(1,'images/136469724.jpg','之所以把Libratone的中文名称唤作“小鸟”，多是因为它的产品Logo是一只亮闪闪的夜莺，而小鸟这个名字听起来更容易让大众所接受、熟记，很是形象。'),
(1,'images/136469936.jpg','作为一款蓝牙音箱，音质方面的表现永远是核心议题。Libratone ONE内置两个2.7英寸被动辐射体，并配备高音、低音单元各一个，这样的配置可以使其在高中低音频的表现更加均衡。另外，还加入了 360°FullRoom声学技术，在模拟外放扬声效果方面能够更加真实。
 
从实际的外放效果来讲，我个人对Libratone ONE的音质表现还比较满意。低频表现上Libratone ONE的下潜比较深，听起来声音浑厚；但是高频方面还有些不够清脆；在人声方面足够凸出，声音足够舒适、温暖的人声。平常用来外放各类流行音乐我个人感觉 没什么太大问题。
 
但你要是想用来听一些大型交响乐、轻音乐以及品味一些风格细腻的音乐，恐怕它有些难以胜任。作为一款便携式蓝牙音箱，它本身并不适合那些音乐发烧友拿来进行更高阶的音乐欣赏，如果用专业音箱设备的标准来衡量它似乎也不公平。
 
对了，Libratone ONE还能支持两台蓝牙音箱连接一部手机，组成左右双声道，同步进行音乐播放，相信会在音效方面的表现更出色。
 
多变造型、方便携带加上不错的音质表现，Libratone ONE的确给我留下了不错的印象，但在一些操控体验上还需要有所改进。1399元的国内售价，完全有实力PK一下类似价位的JBL、BOSE、漫步者等竞品。
 
另外，Libratone ONE还提供了价格更实惠的标准版，售价1199元。它们两者直接的差别也仅仅在于音箱外型上的可变与不可变，如果你绝得没必要为花哨的外观买单，大可选择Libratone ONE的标准版。毕竟，音质才是最为核心的。'),
(2,'images/凤凰科技2.jpg','懒得录数据库了   那就这样吧......................................................................'),
(3,'images/中关村在线2.jpg','懒得录数据库了   那就这样吧......................................................................'),
(4,'images/IT168 1.jpg','懒得录数据库了   那就这样吧......................................................................'),
(5,'images/中关村在线.jpg','懒得录数据库了   那就这样吧......................................................................'),
(6,'images/安卓中文网.jpg','懒得录数据库了   那就这样吧......................................................................'),
(7,'images/数字尾巴.jpg','懒得录数据库了   那就这样吧......................................................................'),
(8,'images/news_100 (1).jpg','懒得录数据库了   那就这样吧......................................................................'),
(9,'images/news_93 (1).jpg','懒得录数据库了   那就这样吧......................................................................'),
(10,'images/news_90 (1).jpg','懒得录数据库了   那就这样吧......................................................................'),
(11,'images/news_77 (1).jpg','懒得录数据库了   那就这样吧......................................................................'),
(12,'images/news_68 (1).jpg','懒得录数据库了   那就这样吧......................................................................'),
(13,'images/news_55 (1).jpg','懒得录数据库了   那就这样吧......................................................................'),
(14,'images/news_41 (1).jpg','懒得录数据库了   那就这样吧......................................................................'),
(15,'images/news_35 (1).jpg','懒得录数据库了   那就这样吧......................................................................'),
(16,'images/news_22 (1).jpg','懒得录数据库了   那就这样吧......................................................................'),
(17,'images/news_30 (1).jpg','懒得录数据库了   那就这样吧......................................................................'),
(18,'images/563979611976182036.jpg','懒得录数据库了   那就这样吧......................................................................'),
(19,'images/news_05.jpg','懒得录数据库了   那就这样吧......................................................................'),
(20,'images/news_13.jpg','懒得录数据库了   那就这样吧......................................................................'),
(21,'images/中关村在线2.jpg','懒得录数据库了   那就这样吧......................................................................');


CREATE TABLE stores(
	sid INT PRIMARY KEY AUTO_INCREMENT,
	city VARCHAR(32),
	store VARCHAR(64),
	address VARCHAR(128)
);
INSERT INTO stores VALUES
(null,'北京','Libratone小鸟音响（三里屯店）','北京市朝阳区南三里屯路1号通盈中心1层1-16 （电话: 010-59724076）'),
(null,'北京','Libratone小鸟音响（五彩城店）','北京市海淀区清河中街华润五彩城东区B158b（电话: 18301180085）'),
(null,'北京','英龙华辰 DRAGONSTAR','北京市西城区复兴门内大街101号百盛购物中心一层'),
(null,'北京','达宝恩','北京西城区北三环中路25号大中电器一楼达宝恩智能店铺'),
(null,'北京','英龙华辰 DRAGONSTAR','北京市东城区崇文门新世界百货甲5号二期青春馆一层苹果专卖店'),
(null,'北京','游极','北京市海淀区成府路45号中关村智造大街B座'),
(null,'北京','达宝恩','北京市西三环中路11号大中电器1层'),
(null,'北京','英龙华辰 DRAGONSTAR','北京市海淀区远大路1号金源燕莎MALL东区4019苹果专卖店'),
(null,'北京','英龙华辰 DRAGONSTAR','北京市海淀区农大南路1号院上地华联商厦1层F1-26、27'),
(null,'北京','英龙华辰 DRAGONSTAR','北京市海淀区北三环西路38号双安商场四层苹果专卖店'),
(null,'北京','英龙华辰 DRAGONSTAR','北京市通州区新华西街58号1号楼1058号商铺'),
(null,'北京','英龙华辰 DRAGONSTAR','北京市顺义区空港街道安泰大街6号院9号楼104'),
(null,'北京','英龙华辰 DRAGONSTAR','北京市昌平区回龙观镇北清路1号107内'),
(null,'北京','达宝恩','北京市朝阳区湖景东路9号新奥天虹购物中心B2层'),
(null,'北京','沃富林','北京市丰台区西三环丰益桥丰管路16号A2-1011'),
(null,'北京','bluedge翼蓝机场店','北京顺义区首都国际机场T3航站楼C31登机口翼蓝数码店'),
(null,'北京','DC SPACE','北京海淀区远大路1号世纪金源4层4024-4025'),
(null,'北京','天域联达','北京市海淀区中关村东路18号财智国际大厦B座1508'),
(null,'北京','酷乐潮玩','北京市大兴区西红门欣宁街15号荟聚购物中心2层酷乐潮玩'),
(null,'北京','天域联达','北京市海淀区中关村鼎好电子大厦B座4889'),
(null,'北京','英龙华辰 DRAGONSTAR','北京市建国门外大街1号国贸商城三期地下二层3B212'),
(null,'上海','店铺太多不录数据了,电话:88888888888',null),
(null,'上海','店铺太多不录数据了,电话:88888888888',null),
(null,'重庆','店铺太多不录数据了,电话:88888888888',null),
(null,'河北','店铺太多不录数据了,电话:88888888888',null),
(null,'河南','店铺太多不录数据了,电话:88888888888',null),
(null,'山东','店铺太多不录数据了,电话:88888888888',null),
(null,'江苏','店铺太多不录数据了,电话:88888888888',null),
(null,'浙江','店铺太多不录数据了,电话:88888888888',null),
(null,'安徽','店铺太多不录数据了,电话:88888888888',null),
(null,'江西','店铺太多不录数据了,电话:88888888888',null),
(null,'广东','店铺太多不录数据了,电话:88888888888',null),
(null,'广西','店铺太多不录数据了,电话:88888888888',null),
(null,'福建','店铺太多不录数据了,电话:88888888888',null),
(null,'四川','店铺太多不录数据了,电话:88888888888',null),
(null,'云南','店铺太多不录数据了,电话:88888888888',null),
(null,'贵州','店铺太多不录数据了,电话:88888888888',null),
(null,'辽宁','店铺太多不录数据了,电话:88888888888',null),
(null,'陕西','店铺太多不录数据了,电话:88888888888',null),
(null,'甘肃','店铺太多不录数据了,电话:88888888888',null),
(null,'新疆','店铺太多不录数据了,电话:88888888888',null),
(null,'海南','店铺太多不录数据了,电话:88888888888',null),
(null,'内蒙古','店铺太多不录数据了,电话:88888888888',null),
(null,'吉林','店铺太多不录数据了,电话:88888888888',null),
(null,'山西','店铺太多不录数据了,电话:88888888888',null),
(null,'黑龙江','店铺太多不录数据了,电话:88888888888',null),
(null,'湖北','店铺太多不录数据了,电话:88888888888',null),
(null,'湖南','店铺太多不录数据了,电话:88888888888',null),
(null,'天津','店铺太多不录数据了,电话:88888888888',null);


CREATE TABLE buy(
	bid INT PRIMARY KEY AUTO_INCREMENT,
	img VARCHAR(128),
	subimg VARCHAR(128),
	useid INT
);
INSERT INTO buy VALUES
(null,'images/a56sd56a1sd56.jpg','images/qwezxcasd.png',1),
(null,'images/6a5s1d256sad.jpg','images/qwezxcasd.png',2),
(null,'images/jhkfg.jpg','images/qwezxcasd.png',3),
(null,'images/guide_e.jpg','',4),
(null,'images/guide_d.jpg','',5);



CREATE TABLE usedetail(
	uid INT PRIMARY KEY AUTO_INCREMENT,
	buyid INT,
	title VARCHAR(64)
);
INSERT INTO usedetail VALUES
(null,1,'ZIPP&ZIPP MINI 连接方式'),
(null,2,'ZIPP CLASSIC & LOOP 连接方式'),
(null,3,'LIVE & LOUNGE 连接方式'),
(null,4,'APP下载'),
(null,5,'LIBRATONE APP下载及使用指南');
