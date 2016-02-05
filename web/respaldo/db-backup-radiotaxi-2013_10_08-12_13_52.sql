DROP DATABASE IF EXISTS radiotaxi; 
            CREATE DATABASE radiotaxi;
            USE radiotaxi;
            CREATE TABLE carrera (id BIGINT AUTO_INCREMENT, id_operador BIGINT NOT NULL, id_codigo BIGINT, id_vehiculo BIGINT NOT NULL, id_sincodigo BIGINT, tiempo SMALLINT NOT NULL, detalle LONGTEXT, fecha DATE NOT NULL, hora TIME NOT NULL, estado VARCHAR(255), tiempo_atencion SMALLINT, destino BIGINT, horaat TIME, tiempo_aprox_dest MEDIUMINT, hora_dest TIME, calidad SMALLINT, INDEX id_operador_idx (id_operador), INDEX id_codigo_idx (id_codigo), INDEX id_vehiculo_idx (id_vehiculo), INDEX id_sincodigo_idx (id_sincodigo), INDEX destino_idx (destino), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = INNODB;
CREATE TABLE cliente (id BIGINT AUTO_INCREMENT, first_name VARCHAR(50) NOT NULL, last_name VARCHAR(50) NOT NULL, sexo VARCHAR(1) DEFAULT 'M' NOT NULL, direccion VARCHAR(100), telefono VARCHAR(10) NOT NULL, telefonomovil VARCHAR(10), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = INNODB;
CREATE TABLE codigo (id BIGINT AUTO_INCREMENT, id_user BIGINT, id_cliente BIGINT, numero VARCHAR(5) NOT NULL UNIQUE, barrio BIGINT, calle1 VARCHAR(50), calle2 VARCHAR(50), numcasa VARCHAR(8), observacion LONGTEXT, latitud VARCHAR(50), longitud VARCHAR(50), INDEX id_cliente_idx (id_cliente), INDEX id_user_idx (id_user), INDEX barrio_idx (barrio), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = INNODB;
CREATE TABLE persona (id BIGINT AUTO_INCREMENT, first_name VARCHAR(50) NOT NULL, last_name VARCHAR(50) NOT NULL, sexo VARCHAR(1) DEFAULT 'M' NOT NULL, direccion VARCHAR(100), telefono VARCHAR(10) NOT NULL, telefonomovil VARCHAR(10), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = INNODB;
CREATE TABLE peticion (id BIGINT AUTO_INCREMENT, first_name VARCHAR(50) NOT NULL, last_name VARCHAR(50) NOT NULL, sexo VARCHAR(1) DEFAULT 'M' NOT NULL, direccion VARCHAR(100), telefono VARCHAR(10) NOT NULL, telefonomovil VARCHAR(10), username VARCHAR(128) NOT NULL UNIQUE, algorithm VARCHAR(128) DEFAULT 'sha1' NOT NULL, salt VARCHAR(128), password VARCHAR(128), email_address VARCHAR(50) NOT NULL UNIQUE, is_active TINYINT(1) DEFAULT '1', is_super_admin TINYINT(1) DEFAULT '0', last_login DATETIME, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX is_active_idx_idx (is_active), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = INNODB;
CREATE TABLE peticion_codigo (id BIGINT AUTO_INCREMENT, id_user BIGINT, id_cliente BIGINT, numero VARCHAR(5) NOT NULL UNIQUE, barrio BIGINT, calle1 VARCHAR(50), calle2 VARCHAR(50), numcasa VARCHAR(8), observacion LONGTEXT, latitud VARCHAR(50), longitud VARCHAR(50), INDEX id_cliente_idx (id_cliente), INDEX id_user_idx (id_user), INDEX barrio_idx (barrio), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = INNODB;
CREATE TABLE propietario (id BIGINT AUTO_INCREMENT, first_name VARCHAR(50) NOT NULL, last_name VARCHAR(50) NOT NULL, sexo VARCHAR(1) DEFAULT 'M' NOT NULL, direccion VARCHAR(100), telefono VARCHAR(10) NOT NULL, telefonomovil VARCHAR(10), cedula VARCHAR(10) NOT NULL UNIQUE, licencia VARCHAR(20), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = INNODB;
CREATE TABLE reservacion (id BIGINT AUTO_INCREMENT, id_codigo BIGINT NOT NULL, lunes TINYINT(1) DEFAULT '1', martes TINYINT(1) DEFAULT '1', miercoles TINYINT(1) DEFAULT '1', jueves TINYINT(1) DEFAULT '1', viernes TINYINT(1) DEFAULT '1', sabado TINYINT(1) DEFAULT '1', domingo TINYINT(1) DEFAULT '1', horario1 TIME NOT NULL, horario2 TIME, horario3 TIME, INDEX id_codigo_idx (id_codigo), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = INNODB;
CREATE TABLE sector (id BIGINT AUTO_INCREMENT, nombre VARCHAR(50) NOT NULL, latitud VARCHAR(50) NOT NULL, longitud VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = INNODB;
CREATE TABLE sin_codigo (id BIGINT AUTO_INCREMENT, cliente VARCHAR(50) NOT NULL, telefono VARCHAR(10) NOT NULL, barrio BIGINT, calle1 VARCHAR(50) NOT NULL, calle2 VARCHAR(50), numcasa VARCHAR(8), observacion LONGTEXT, INDEX barrio_idx (barrio), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = INNODB;
CREATE TABLE solicitud_carrera (id BIGINT AUTO_INCREMENT, id_codigo BIGINT NOT NULL, id_cliente BIGINT NOT NULL, estado VARCHAR(255) DEFAULT 'nueva', tiempo SMALLINT NOT NULL, detalle LONGTEXT, fecha DATE NOT NULL, hora TIME NOT NULL, notificacion VARCHAR(2), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX id_codigo_idx (id_codigo), INDEX id_cliente_idx (id_cliente), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = INNODB;
CREATE TABLE vehiculo (id BIGINT AUTO_INCREMENT, id_propietario BIGINT NOT NULL, id_sector BIGINT, numero VARCHAR(10) NOT NULL UNIQUE, placa VARCHAR(7) NOT NULL UNIQUE, marca VARCHAR(20) NOT NULL, modelo VARCHAR(20) NOT NULL, ano VARCHAR(10) NOT NULL, INDEX id_propietario_idx (id_propietario), INDEX id_sector_idx (id_sector), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = INNODB;
CREATE TABLE sf_guard_forgot_password (id BIGINT AUTO_INCREMENT, user_id BIGINT NOT NULL, unique_key VARCHAR(255), expires_at DATETIME NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX user_id_idx (user_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_group (id BIGINT AUTO_INCREMENT, name VARCHAR(255) UNIQUE, description TEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_group_permission (group_id BIGINT, permission_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(group_id, permission_id)) ENGINE = INNODB;
CREATE TABLE sf_guard_permission (id BIGINT AUTO_INCREMENT, name VARCHAR(255) UNIQUE, description TEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_remember_key (id BIGINT AUTO_INCREMENT, user_id BIGINT, remember_key VARCHAR(32), ip_address VARCHAR(50), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX user_id_idx (user_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user (id BIGINT AUTO_INCREMENT, first_name VARCHAR(50) NOT NULL, last_name VARCHAR(50) NOT NULL, sexo VARCHAR(1) DEFAULT 'M' NOT NULL, direccion VARCHAR(100), telefono VARCHAR(10) NOT NULL, telefonomovil VARCHAR(10), username VARCHAR(128) NOT NULL UNIQUE, algorithm VARCHAR(128) DEFAULT 'sha1' NOT NULL, salt VARCHAR(128), password VARCHAR(128), email_address VARCHAR(50) NOT NULL UNIQUE, is_active TINYINT(1) DEFAULT '1', is_super_admin TINYINT(1) DEFAULT '0', last_login DATETIME, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX is_active_idx_idx (is_active), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = INNODB;
CREATE TABLE sf_guard_user_group (user_id BIGINT, group_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(user_id, group_id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user_permission (user_id BIGINT, permission_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(user_id, permission_id)) ENGINE = INNODB;
ALTER TABLE carrera ADD CONSTRAINT carrera_id_vehiculo_vehiculo_id FOREIGN KEY (id_vehiculo) REFERENCES vehiculo(id);
ALTER TABLE carrera ADD CONSTRAINT carrera_id_sincodigo_sin_codigo_id FOREIGN KEY (id_sincodigo) REFERENCES sin_codigo(id);
ALTER TABLE carrera ADD CONSTRAINT carrera_id_operador_sf_guard_user_id FOREIGN KEY (id_operador) REFERENCES sf_guard_user(id);
ALTER TABLE carrera ADD CONSTRAINT carrera_id_codigo_codigo_id FOREIGN KEY (id_codigo) REFERENCES codigo(id);
ALTER TABLE carrera ADD CONSTRAINT carrera_destino_sector_id FOREIGN KEY (destino) REFERENCES sector(id);
ALTER TABLE codigo ADD CONSTRAINT codigo_id_user_sf_guard_user_id FOREIGN KEY (id_user) REFERENCES sf_guard_user(id);
ALTER TABLE codigo ADD CONSTRAINT codigo_id_cliente_cliente_id FOREIGN KEY (id_cliente) REFERENCES cliente(id);
ALTER TABLE codigo ADD CONSTRAINT codigo_barrio_sector_id FOREIGN KEY (barrio) REFERENCES sector(id);
ALTER TABLE peticion_codigo ADD CONSTRAINT peticion_codigo_id_user_sf_guard_user_id FOREIGN KEY (id_user) REFERENCES sf_guard_user(id);
ALTER TABLE peticion_codigo ADD CONSTRAINT peticion_codigo_id_cliente_cliente_id FOREIGN KEY (id_cliente) REFERENCES cliente(id);
ALTER TABLE peticion_codigo ADD CONSTRAINT peticion_codigo_barrio_sector_id FOREIGN KEY (barrio) REFERENCES sector(id);
ALTER TABLE reservacion ADD CONSTRAINT reservacion_id_codigo_codigo_id FOREIGN KEY (id_codigo) REFERENCES codigo(id);
ALTER TABLE sin_codigo ADD CONSTRAINT sin_codigo_barrio_sector_id FOREIGN KEY (barrio) REFERENCES sector(id);
ALTER TABLE solicitud_carrera ADD CONSTRAINT solicitud_carrera_id_codigo_codigo_id FOREIGN KEY (id_codigo) REFERENCES codigo(id);
ALTER TABLE solicitud_carrera ADD CONSTRAINT solicitud_carrera_id_cliente_sf_guard_user_id FOREIGN KEY (id_cliente) REFERENCES sf_guard_user(id);
ALTER TABLE vehiculo ADD CONSTRAINT vehiculo_id_sector_sector_id FOREIGN KEY (id_sector) REFERENCES sector(id);
ALTER TABLE vehiculo ADD CONSTRAINT vehiculo_id_propietario_propietario_id FOREIGN KEY (id_propietario) REFERENCES propietario(id);
ALTER TABLE sf_guard_forgot_password ADD CONSTRAINT sf_guard_forgot_password_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_group_permission ADD CONSTRAINT sf_guard_group_permission_permission_id_sf_guard_permission_id FOREIGN KEY (permission_id) REFERENCES sf_guard_permission(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_group_permission ADD CONSTRAINT sf_guard_group_permission_group_id_sf_guard_group_id FOREIGN KEY (group_id) REFERENCES sf_guard_group(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_remember_key ADD CONSTRAINT sf_guard_remember_key_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_group ADD CONSTRAINT sf_guard_user_group_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_group ADD CONSTRAINT sf_guard_user_group_group_id_sf_guard_group_id FOREIGN KEY (group_id) REFERENCES sf_guard_group(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_permission ADD CONSTRAINT sf_guard_user_permission_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_permission ADD CONSTRAINT sf_guard_user_permission_permission_id_sf_guard_permission_id FOREIGN KEY (permission_id) REFERENCES sf_guard_permission(id) ON DELETE CASCADE;



INSERT INTO sf_guard_permission VALUES('1','administracion','Administrator permission','2013-05-06 15:27:20','2013-05-06 15:27:20');
INSERT INTO sf_guard_permission VALUES('2','operador','Administrador de carreras','2013-05-06 15:27:20','2013-05-06 15:27:20');
INSERT INTO sf_guard_permission VALUES('3','cliente','Solicitud de carreras','2013-05-06 15:27:20','2013-05-06 15:27:20');



INSERT INTO sf_guard_group VALUES('1','administrador','Administrator group','2013-05-06 15:27:20','2013-05-06 15:27:20');
INSERT INTO sf_guard_group VALUES('2','operador','Gestion de carreras','2013-05-06 15:27:20','2013-05-06 15:27:20');
INSERT INTO sf_guard_group VALUES('3','cliente','Solicitud de carreras','2013-05-06 15:27:20','2013-05-06 15:27:20');



INSERT INTO sf_guard_user
             VALUES('1','Eduardo Luis','Lima Galarza','M','Loja','994717956','995769416','desarrollador','sha1','467428d71bc646901bce5d5997b422c6','691987fb8627ac8d7c1895527b2613556afebeed','eduarditolima@gmail.com','1','1','2013-10-08 15:34:48','2013-03-07 00:09:36','2013-10-08 15:34:48');
INSERT INTO sf_guard_user
             VALUES('2','Benjamín','Carrión','M','Loja','2552411','991570000','admin','sha1','188df069ceb57f0a21ab9f40fd8b4127','39df1cddac9b0da727f461f7e52bf7a858496c06','coop.benjamin.carrion@gmail.com','1','0','2013-09-17 16:17:53','2013-04-25 12:38:10','2013-09-17 16:17:53');
INSERT INTO sf_guard_user
             VALUES('3','operador1','operador1','M','.knklbhl','9087',NULL,'operador1','sha1','fb10763411f87cfa536ff79f4631e6e3','29674ed0366232f4de78feb3da3bfc80903554a6','edu.yastamas@hotmail.com','1','0','2013-06-27 00:26:51','2013-06-27 00:22:07','2013-06-27 00:26:51');



INSERT INTO cliente VALUES('1','Walter','Vasquez','M','Dolorosa de Obrapia','0',NULL);
INSERT INTO cliente VALUES('2','Familia','Pucha Tene','M','San Vicente Alto','2574599',NULL);
INSERT INTO cliente VALUES('3','Maria del Cisne','Torres','F','COCOS','2546169',NULL);
INSERT INTO cliente VALUES('4','Andrea',' Valle','F','Clodoveo Alto','2613831',NULL);



INSERT INTO peticion VALUES('1','Adriana','siguenza','F','san rafael','988212894',NULL,'nalita','sha1',NULL,NULL,'adi.nala@hotmail.com','1','0',NULL,'2013-05-01 16:50:59','2013-05-01 16:50:59');



INSERT INTO propietario VALUES('1','VICENTE ROBERTO','AMBROSSI ROBLES','M','Labanda S.Domin./Guayaq.','0',NULL,'1102900949',NULL);
INSERT INTO propietario VALUES('2','FREDI MAURICIO','SACA SILVA ','M','Barrio La Victoria','981696570',NULL,'1104262975',NULL);
INSERT INTO propietario VALUES('3','INTER FAVIAN','ORTIZ ACHUPALLAS ','M','8 Dic. Y Manuel Cabrera','980629068',NULL,'1900228675',NULL);
INSERT INTO propietario VALUES('4','ANGEL BENIGNO','BUSTAMANTE CORDOVA ','M',NULL,'0',NULL,'1103267181',NULL);
INSERT INTO propietario VALUES('5','EDDY LEONEL','CARRION JIMENEZ ','M',NULL,'939235324',NULL,'1104461038',NULL);
INSERT INTO propietario VALUES('6','RICHARD LEONEL','GUAMAN RODRIGUEZ ','M','Menfis/Paraiso Maya/chay.','991192476',NULL,'1103631360',NULL);
INSERT INTO propietario VALUES('7','ORLANDO PEDRO','ALBITES TANTAS ','M','Amable Maria','980454893',NULL,'1104141740','756743');
INSERT INTO propietario VALUES('8','HERNAN FREDDY','CARAGUAY ZU','M','Av. Occidental y','988023300',NULL,'1102998018',NULL);
INSERT INTO propietario VALUES('9','JUAN ANTONIO','GORDILLO POMA ','M',NULL,'929299357',NULL,'1104747868',NULL);
INSERT INTO propietario VALUES('10','ALEJANDRO','SILVA CONDO ','M','Eucaliptos a100mts. De la Y','988099253',NULL,'1101498010',NULL);
INSERT INTO propietario VALUES('12','MARCO EDUARDO','CORONEL BRAVO ','M','Ciudadela  Sol de los Andes','959885693',NULL,'1103154868',NULL);



INSERT INTO sector VALUES('2','Aeropuerto Catamayo','-3.996465','-79.372444');
INSERT INTO sector VALUES('3','Alberto Zambrano','-4.009309','-79.216361');
INSERT INTO sector VALUES('4','Alonso de Mercadillo','-4.009309','-79.216361');
INSERT INTO sector VALUES('5','Balcon Lojano','-3.998371','-79.209827');
INSERT INTO sector VALUES('6','Belen','-3.978356','-79.22106');
INSERT INTO sector VALUES('7','Bellavista','-4.012552','-79.207993');
INSERT INTO sector VALUES('8','Bella Flor','-4.017699','-79.200997');
INSERT INTO sector VALUES('9','Cabo Minacho','-4.008902','-79.200675');
INSERT INTO sector VALUES('10','Capuli','-4.039832','-79.197371');
INSERT INTO sector VALUES('11','Cartodromo Municipal','-3.955409','-79.217842');
INSERT INTO sector VALUES('12','Casa Grande','-3.963329','-79.215567');
INSERT INTO sector VALUES('13','Catamayo','-3.983108','-79.349527');
INSERT INTO sector VALUES('14','Catedral','-3.996358','-79.200981');
INSERT INTO sector VALUES('15','Cazadores de los Ríos','-3.973144','-79.215792');
INSERT INTO sector VALUES('16','Cepost','-4.029344','-79.203873');
INSERT INTO sector VALUES('17','Cera','-3.909683','-79.289103');
INSERT INTO sector VALUES('18','Chinguilanchi','-3.945733','-79.205074');
INSERT INTO sector VALUES('19','Choferes de la Banda','-3.960386','-79.217477');
INSERT INTO sector VALUES('20','Ciudad Alegria','-4.030735','-79.205396');
INSERT INTO sector VALUES('21','Ciudad de Loja','-4.034716','-79.205074');
INSERT INTO sector VALUES('22','Ciudadela Zamora','-3.993693','-79.198476');
INSERT INTO sector VALUES('23','Clodoveo Jaramillo','-3.982038','-79.212853');
INSERT INTO sector VALUES('24','Clodoveo Jaramillo Alto','-3.978934','-79.211447');
INSERT INTO sector VALUES('25','Colegio Beatriz Cueva','-3.996305','-79.19692');
INSERT INTO sector VALUES('26','Colegio La Salle','-3.998777','-79.195901');
INSERT INTO sector VALUES('27','Colegio Liceo de Loja','-4.010861','-79.184679');
INSERT INTO sector VALUES('28','Colegio Militar','-3.948302','-79.218464');
INSERT INTO sector VALUES('29','Colegio Tecnico DAB','-3.988931','-79.201920');
INSERT INTO sector VALUES('30','Complejo Ferial','-3.970714','-79.201201');
INSERT INTO sector VALUES('31','Cuarto Centenario','-3.998499','-79.206555');
INSERT INTO sector VALUES('32','Daniel Alvarez','-4.016394','-79.210846');
INSERT INTO sector VALUES('33','El Bosque','-3.980797','-79.208186');
INSERT INTO sector VALUES('34','El Dorado','-3.995481','-79.211544');
INSERT INTO sector VALUES('35','El Maestro','-3.982209','-79.203175');
INSERT INTO sector VALUES('36','El Maestro II','-4.010058','-79.209602');
INSERT INTO sector VALUES('37','El Pedestal','-3.99532','-79.208272');
INSERT INTO sector VALUES('38','El Rincon','-3.9944','-79.196481');
INSERT INTO sector VALUES('39','El Tejar','-4.0005','-79.194614');
INSERT INTO sector VALUES('40','El Valle','-3.981974','-79.201502');
INSERT INTO sector VALUES('41','Electricista','-4.024512','-79.204216');
INSERT INTO sector VALUES('42','Epoca','-4.012284','-79.210482');
INSERT INTO sector VALUES('43','Estadio Reina del Cisne','-4.001464','-79.196266');
INSERT INTO sector VALUES('44','Esteban Godoy','-4.028937','-79.20884');
INSERT INTO sector VALUES('45','Hospital Isidro Ayora','-3.994946','-79.205868');
INSERT INTO sector VALUES('46','Jefatura de salud URB.','-4.008345','-79.197875');
INSERT INTO sector VALUES('47','Juan José Castillo','-4.026176','-79.215621');
INSERT INTO sector VALUES('48','Julio Ordoñez','-4.0398','-79.205343');
INSERT INTO sector VALUES('49','La Argelia','-4.03279','-79.20222');
INSERT INTO sector VALUES('50','La Estancia Norte','-3.966326','-79.204334');
INSERT INTO sector VALUES('51','La Guangora','-3.926381','-79.280305');
INSERT INTO sector VALUES('52','La Inmaculada','-3.96912','-79.205074');
INSERT INTO sector VALUES('53','La Paz','-3.964068','-79.208647');
INSERT INTO sector VALUES('54','La Pradera','-4.013033','-79.198004');
INSERT INTO sector VALUES('55','La Samana','-3.975809','-79.197521');
INSERT INTO sector VALUES('56','Las Palmas','-3.987218','-79.20089');
INSERT INTO sector VALUES('57','Las Peñas','-4.001924','-79.210954');
INSERT INTO sector VALUES('58','Las Pitas','-3.969815','-79.211555');
INSERT INTO sector VALUES('59','Las Pitas II','-3.971838','-79.212466');
INSERT INTO sector VALUES('60','La Banda','-3.954884','-79.22105');
INSERT INTO sector VALUES('61','Landangui','-4.205955','-79.225459');
INSERT INTO sector VALUES('62','Lojana de Turismo','-3.981979','-79.206013');
INSERT INTO sector VALUES('63','Los Cipres','-4.02868','-79.206705');
INSERT INTO sector VALUES('64','Los Faiques','-4.003604','-79.192843');
INSERT INTO sector VALUES('65','Los Geranios','-4.01756','-79.201974');
INSERT INTO sector VALUES('66','Los Molinos','-4.007757','-79.202499');
INSERT INTO sector VALUES('67','Los Operadores','-4.021039','-79.217069');
INSERT INTO sector VALUES('68','Los Rosales','-4.020161','-79.19986');
INSERT INTO sector VALUES('69','Malacatos','-4.219095','-79.258912');
INSERT INTO sector VALUES('70','Mercado Mayorista','-3.986651','-79.204355');
INSERT INTO sector VALUES('71','Miraflores','-4.000083','-79.208915');
INSERT INTO sector VALUES('72','Motupe','-3.945241','-79.223828');
INSERT INTO sector VALUES('73','Naranjito','-3.912295','-79.273911');
INSERT INTO sector VALUES('74','Nueva Granada','-3.973048','-79.205064');
INSERT INTO sector VALUES('75','Parque Central','-3.996637','-79.201813');
INSERT INTO sector VALUES('76','Parque Eólico Villonaco','-4.001346','-79.259405');
INSERT INTO sector VALUES('77','Parque Infantil','-4.003808','-79.199345');
INSERT INTO sector VALUES('78','Parque Jipiro','-3.971999','-79.203594');
INSERT INTO sector VALUES('79','Parque Lineal','-4.020311','-79.201362');
INSERT INTO sector VALUES('80','Parque los Molinos','-4.006954','-79.200246');
INSERT INTO sector VALUES('81','Parque Simon Bolivar','-3.994935','-79.204683');
INSERT INTO sector VALUES('82','Reinaldo Espinoza','-4.013311','-79.218099');
INSERT INTO sector VALUES('83','Peñon del Oeste','-4.005606','-79.209602');
INSERT INTO sector VALUES('84','Rodriguez With','-4.002748','-79.189507');
INSERT INTO sector VALUES('85','Salapa','-3.923084','-79.238892');
INSERT INTO sector VALUES('86','Salcedo','-4.024025','-79.202102');
INSERT INTO sector VALUES('87','Samaniego Suarez','-4.012712','-79.213427');
INSERT INTO sector VALUES('88','San Cayetano Bajo','-3.979298','-79.197553');
INSERT INTO sector VALUES('89','San José','-3.987721','-79.209344');
INSERT INTO sector VALUES('90','San José Bajo','-3.987839','-79.207413');
INSERT INTO sector VALUES('91','San Pedro','-4.006526','-79.20486');
INSERT INTO sector VALUES('92','San Rafael','-3.9839','-79.207585');
INSERT INTO sector VALUES('93','San Sebastian','-4.001624','-79.200568');
INSERT INTO sector VALUES('94','San Vicente Alto','-3.9906','-79.211265');
INSERT INTO sector VALUES('95','Santa Ana','-4.013579','-79.201427');
INSERT INTO sector VALUES('96','Santa Rosa','-3.990065','-79.199238');
INSERT INTO sector VALUES('97','Santa Teresita','-4.014403','-79.205139');
INSERT INTO sector VALUES('98','Sauces Norte','-3.938326','-79.224558');
INSERT INTO sector VALUES('99','Sol de los Andes','-4.026968','-79.212499');
INSERT INTO sector VALUES('100','Taquil','-3.887033','-79.287901');
INSERT INTO sector VALUES('101','Tebaida Alta','-4.010058','-79.206909');
INSERT INTO sector VALUES('102','Tebaida Baja','-4.009266','-79.204431');
INSERT INTO sector VALUES('103','Terminal Terrestre','-3.977607','-79.204967');
INSERT INTO sector VALUES('104','Turunuma','-3.975028','-79.208862');
INSERT INTO sector VALUES('105','Unión Lojana','-4.015249','-79.207027');
INSERT INTO sector VALUES('106','UTPL','-3.986669741152956','-79.19847842305899');
INSERT INTO sector VALUES('107','Vilcabamba','-4.261978','-79.222112');
INSERT INTO sector VALUES('108','Yaguarcuna','-4.017657','-79.199023');
INSERT INTO sector VALUES('109','Zamora Huayco','-4.006098','-79.187318');
INSERT INTO sector VALUES('110','Zarzas I','-4.019412','-79.209216');
INSERT INTO sector VALUES('111','Zarzas II','-4.026219','-79.208239');
INSERT INTO sector VALUES('112','Zoologico','-3.95832','-79.217091');
INSERT INTO sector VALUES('113','24 de Mayo','-3.997878','-79.198101');
INSERT INTO sector VALUES('114','Reciclaje','-4.028594505414532','-79.22303438186646');
INSERT INTO sector VALUES('115','Policía Nacional','-4.009879935141087','-79.2074197344482');



INSERT INTO vehiculo VALUES('1','1','6','872','LAI0123','KIA','RIO','2009');
INSERT INTO vehiculo VALUES('2','2','8','873','LCH0173','KIA','RIO','2007');
INSERT INTO vehiculo VALUES('3','3','75','874','LAG0938','HYUNDAI','ACCENT V','2004');
INSERT INTO vehiculo VALUES('4','4','113','876','LCC0405','HYUNDAI','ACCENT V','2005');
INSERT INTO vehiculo VALUES('5','5','6','877','LAA1004','HYUNDAI','GETZ ','2011');
INSERT INTO vehiculo VALUES('6','6','66','878','LAH0134','HYUNDAI','ACCENT ','2005');
INSERT INTO vehiculo VALUES('7','7','35','879','LAH0271','CHEVITAXI','CHEVITAXI ','2006');
INSERT INTO vehiculo VALUES('8','8','109','880','LAI0174','HYUNDAI ','SEDAN ','2008');
INSERT INTO vehiculo VALUES('9','9','83','881','LAI0755','HYUNDAI ','SEDAN ','2011');
INSERT INTO vehiculo VALUES('10','10','85','882','PTQ0070','HYUNDAI ','SEDAN ','2006');
INSERT INTO vehiculo VALUES('11','12','31','883','LAA1198','CHEVROLET','SEDAN ','2012');



INSERT INTO codigo VALUES('1',NULL,'1','1','6','Via principal','Interbarrial','S-N',NULL,NULL,NULL);
INSERT INTO codigo VALUES('2',NULL,'2','4','94','Francisco Arias ','Pedro Falconi',NULL,NULL,'-3.9912927012142703','-79.2106001637876');
INSERT INTO codigo VALUES('4',NULL,'4','8','24','Habana','Tucuman y Salta',NULL,NULL,'-3.9790024333539513','-79.21064358204603');
INSERT INTO codigo VALUES('8','1',NULL,'1000','83','Aucas','Paraguay','14-166','casa verde 2 pisos','-4.006326673535066','-79.20886259526014');
INSERT INTO codigo VALUES('9',NULL,'1','100','98','.',NULL,NULL,'swswsw',NULL,NULL);
INSERT INTO codigo VALUES('10','1',NULL,'2000','9','una','dos','23','mas','-4.009469223839644','-79.2023116350174');
INSERT INTO codigo VALUES('11',NULL,'3','1100','83','Aucas','Paraguay','14-166','Casa de 2 pisos, portón color verde','-4.006389104602669','-79.20887254189438');



INSERT INTO reservacion
             VALUES('1','4','1','1','1','1','1','1','1','18:48:00','00:37:00',NULL);
INSERT INTO reservacion
             VALUES('2','8','1','1','1','1','1','1','1','00:39:00',NULL,NULL);



INSERT INTO sin_codigo VALUES('1','mhgkj','8765','5',',jgvjhv','kjbvu','987','lkbjb');
INSERT INTO sin_codigo VALUES('2','edu','23546789','24','.kguyfg','jhgig','878','kgigkigi');
INSERT INTO sin_codigo VALUES('3','eduuuu','87654','26','ghjkl','kgi','987','hiohoihoih');
INSERT INTO sin_codigo VALUES('4','sds','2','7','wdwd','ddfa','234','dfeff');
INSERT INTO sin_codigo VALUES('5','lihjh','4567890','7','kjbhkjb','hklbkj','kjbk','jkjlbkjl');
INSERT INTO sin_codigo VALUES('6','trytuyiop','98765','17','kbkj','gvj','98','jhvhjv');
INSERT INTO sin_codigo VALUES('7','hgjk','987','5','dcdc','gkjgk','gkjg','gkgkj');
INSERT INTO sin_codigo VALUES('8','sdvd','345','8','efew','efef','2343','efrewf');
INSERT INTO sin_codigo VALUES('9','Eduardo','0993327405','83','Aucas','Paraguay','14-166','frete a la cancha de boley');



INSERT INTO carrera VALUES('1','1','10','2',NULL,'9',NULL,'2013-07-05','13:11:15','completada','1','8','13:12:25','2','13:14:27','4');
INSERT INTO carrera VALUES('2','1','10','7',NULL,'7',NULL,'2013-07-17','22:45:18','completada','3','7','22:49:13','1','22:49:15','5');
INSERT INTO carrera VALUES('3','1','8','8',NULL,'1',NULL,'2013-07-17','22:49:44','cancelada','-1',NULL,NULL,NULL,NULL,'-2');
INSERT INTO carrera VALUES('4','1','8','9',NULL,'9',NULL,'2013-07-17','22:57:12','cancelada','-1',NULL,NULL,NULL,NULL,'-2');
INSERT INTO carrera VALUES('5','1','8','7',NULL,'9',NULL,'2013-07-17','22:58:10','cancelada','-1',NULL,NULL,NULL,NULL,'-2');
INSERT INTO carrera VALUES('6','1','10','10',NULL,'9',NULL,'2013-07-17','23:02:09','cancelada','-1',NULL,NULL,NULL,NULL,'-2');
INSERT INTO carrera VALUES('7','1','10','10',NULL,'9',NULL,'2013-07-17','23:03:25','cancelada','-1',NULL,NULL,NULL,NULL,'-2');
INSERT INTO carrera VALUES('8','1','8','6',NULL,'0',NULL,'2013-07-17','23:05:05','cancelada','-1',NULL,NULL,NULL,NULL,'-2');
INSERT INTO carrera VALUES('9','1','8','11',NULL,'0',NULL,'2013-07-17','23:07:14','cancelada','-1',NULL,NULL,NULL,NULL,'-2');
INSERT INTO carrera VALUES('10','1','8','5',NULL,'0',NULL,'2013-07-17','23:07:28','cancelada','-1',NULL,NULL,NULL,NULL,'-2');
INSERT INTO carrera VALUES('11','1','8','10',NULL,'0',NULL,'2013-07-17','23:13:29','cancelada','-1',NULL,NULL,NULL,NULL,'-2');
INSERT INTO carrera VALUES('12','1','10','6',NULL,'0',NULL,'2013-07-17','23:15:29','cancelada','-1',NULL,NULL,NULL,NULL,'-2');
INSERT INTO carrera VALUES('13','1','8','4',NULL,'0',NULL,'2013-07-17','23:19:11','cancelada','-1',NULL,NULL,NULL,NULL,'-2');
INSERT INTO carrera VALUES('14','1','8','9',NULL,'0',NULL,'2013-07-17','23:22:45','cancelada','-1',NULL,NULL,NULL,NULL,'-2');
INSERT INTO carrera VALUES('15','1','10','6',NULL,'0',NULL,'2013-07-17','23:24:41','cancelada','-1',NULL,NULL,NULL,NULL,'-2');
INSERT INTO carrera VALUES('16','1','8','10',NULL,'0',NULL,'2013-07-17','23:26:36','cancelada','-1',NULL,NULL,NULL,NULL,'-2');
INSERT INTO carrera VALUES('17','1','8','9',NULL,'5',NULL,'2013-07-18','10:17:15','cancelada','-1',NULL,NULL,NULL,NULL,'-2');
INSERT INTO carrera VALUES('18','1','10','6',NULL,'5',NULL,'2013-07-18','10:26:24','cancelada','-1',NULL,NULL,NULL,NULL,'-2');
INSERT INTO carrera VALUES('19','1','8','11',NULL,'6',NULL,'2013-07-18','10:33:52','cancelada','-1',NULL,NULL,NULL,NULL,'-2');
INSERT INTO carrera VALUES('20','1','10','10',NULL,'6',NULL,'2013-07-18','10:39:59','cancelada','-1',NULL,NULL,NULL,NULL,'-2');
INSERT INTO carrera VALUES('21','1','10','4',NULL,'6',NULL,'2013-07-18','10:40:36','cancelada','-1',NULL,NULL,NULL,NULL,'-2');
INSERT INTO carrera VALUES('22','1','10','4',NULL,'0',NULL,'2013-07-18','10:58:48','cancelada','-1',NULL,NULL,NULL,NULL,'-2');
INSERT INTO carrera VALUES('23','1','8','6',NULL,'0',NULL,'2013-07-18','10:59:15','cancelada','-1',NULL,NULL,NULL,NULL,'-2');
INSERT INTO carrera VALUES('24','1','8','5',NULL,'0',NULL,'2013-07-18','11:00:22','cancelada','3','7','11:03:41','2','11:03:50','-2');
INSERT INTO carrera VALUES('25','1','8','5',NULL,'0',NULL,'2013-07-18','11:15:55','cancelada','-1',NULL,NULL,NULL,NULL,'-2');
INSERT INTO carrera VALUES('26','1','8','10',NULL,'0',NULL,'2013-07-18','11:27:32','cancelada','-1',NULL,NULL,NULL,NULL,'-2');
INSERT INTO carrera VALUES('27','1','8','7',NULL,'0',NULL,'2013-07-18','11:46:57','cancelada','-1',NULL,NULL,NULL,NULL,'-2');
INSERT INTO carrera VALUES('28','1','8','2',NULL,'0',NULL,'2013-07-18','11:47:12','cancelada','-1',NULL,NULL,NULL,NULL,'-2');
INSERT INTO carrera VALUES('29','1','8','6',NULL,'0',NULL,'2013-07-18','11:47:28','cancelada','-1',NULL,NULL,NULL,NULL,'-2');
INSERT INTO carrera VALUES('30','1','10','7',NULL,'0',NULL,'2013-07-18','11:49:34','cancelada','-1',NULL,NULL,NULL,NULL,'-2');
INSERT INTO carrera VALUES('31','1','8','10',NULL,'0',NULL,'2013-07-18','11:50:14','cancelada','-1',NULL,NULL,NULL,NULL,'-2');
INSERT INTO carrera VALUES('32','1','8','8',NULL,'0',NULL,'2013-07-18','20:22:42','cancelada','-1',NULL,NULL,NULL,NULL,'-2');
INSERT INTO carrera VALUES('33','1',NULL,'1','1','0',NULL,'2013-07-22','20:50:26','cancelada','-1',NULL,NULL,NULL,NULL,'-2');
INSERT INTO carrera VALUES('34','1','8','3',NULL,'0',NULL,'2013-07-22','20:51:04','completada','0','6','20:51:21','5','20:53:22','5');
INSERT INTO carrera VALUES('35','1','1','5',NULL,'5',NULL,'2013-07-22','20:55:13','completada','0','98','20:55:42','12','20:56:36','-1');
INSERT INTO carrera VALUES('36','1',NULL,'1','2','0','hoohoiho','2013-07-22','21:05:29','completada','0','92','21:05:59','4','21:06:04','-1');
INSERT INTO carrera VALUES('37','1',NULL,'7','3','5','sscs','2013-07-23','12:48:52','completada','0','35','12:49:25','5','12:52:42','-1');
INSERT INTO carrera VALUES('38','1',NULL,'2','4','1','efef','2013-07-23','13:20:25','cancelada','-1',NULL,NULL,NULL,NULL,'-2');
INSERT INTO carrera VALUES('39','1',NULL,'3','5','1',NULL,'2013-07-23','13:21:57','cancelada','-1',NULL,NULL,NULL,NULL,'-2');
INSERT INTO carrera VALUES('40','1',NULL,'1','6','1','jvhjvj','2013-07-23','13:23:44','cancelada','-1',NULL,NULL,NULL,NULL,'-2');
INSERT INTO carrera VALUES('41','1',NULL,'1','7','0',NULL,'2013-07-23','13:25:57','completada','2','6','13:28:08','8','13:28:13','-1');
INSERT INTO carrera VALUES('42','1',NULL,'3','8','1','efwf','2013-07-23','13:28:37','completada','5','75','13:34:25','6','13:47:24','-1');
INSERT INTO carrera VALUES('43','1','8','5',NULL,'11',NULL,'2013-07-27','20:19:56','completada','0','6','20:20:05','10','20:40:17','3');
INSERT INTO carrera VALUES('44','1','8','4',NULL,'6',NULL,'2013-07-27','20:20:48','completada','0','30','20:21:21','10','20:21:31','2');
INSERT INTO carrera VALUES('45','1','10','11',NULL,'9',NULL,'2013-07-27','20:21:01','completada','0','31','20:21:13','4','20:21:27','4');
INSERT INTO carrera VALUES('46','1','10','4',NULL,'4',NULL,'2013-07-27','20:21:49','completada','0','113','20:22:22','2','20:22:27','4');
INSERT INTO carrera VALUES('47','1','8','10',NULL,'4',NULL,'2013-07-27','20:22:05','completada','0','85','20:22:16','21','20:22:25','4');
INSERT INTO carrera VALUES('48','1','8','7',NULL,'5',NULL,'2013-09-17','12:50:28','cancelada','-1',NULL,NULL,NULL,NULL,'-2');
INSERT INTO carrera VALUES('49','1',NULL,'5','9','7',NULL,'2013-09-17','13:07:19','cancelada','-1',NULL,NULL,NULL,NULL,'-2');
INSERT INTO carrera VALUES('50','1','8','9',NULL,'0',NULL,'2013-09-17','17:38:33','completada','27','6','18:06:30','11','18:27:30','-1');
INSERT INTO carrera VALUES('51','1','8','9',NULL,'1',NULL,'2013-09-17','19:22:26','completada','17','83','19:40:24','0','21:40:56','-1');
INSERT INTO carrera VALUES('52','1','8','9',NULL,'0',NULL,'2013-09-17','21:41:03','cancelada','-1',NULL,NULL,NULL,NULL,'-2');



INSERT INTO solicitud_carrera VALUES('1','10','1','aprobada','9',NULL,'2013-07-05','13:11:02','0','2013-07-05 13:11:02','2013-07-05 18:11:19');
INSERT INTO solicitud_carrera VALUES('2','10','1','aprobada','7',NULL,'2013-07-17','22:45:08','0','2013-07-17 22:45:08','2013-07-18 03:45:22');
INSERT INTO solicitud_carrera VALUES('3','8','1','aprobada','1',NULL,'2013-07-17','22:49:04','0','2013-07-17 22:49:04','2013-07-18 03:49:45');
INSERT INTO solicitud_carrera VALUES('4','8','1','rechazada','9',NULL,'2013-07-17','22:57:00','0','2013-07-17 22:57:00','2013-07-18 03:57:25');
INSERT INTO solicitud_carrera VALUES('5','8','1','aprobada','9',NULL,'2013-07-17','22:58:00','0','2013-07-17 22:58:00','2013-07-18 03:58:13');
INSERT INTO solicitud_carrera VALUES('6','10','1','aprobada','9',NULL,'2013-07-17','23:01:55','0','2013-07-17 23:01:55','2013-07-18 04:03:29');
INSERT INTO solicitud_carrera VALUES('7','10','1','rechazada','0',NULL,'2013-07-17','23:03:15','0','2013-07-17 23:03:15','2013-07-18 04:03:24');
INSERT INTO solicitud_carrera VALUES('8','8','1','aprobada','0',NULL,'2013-07-17','23:04:56','0','2013-07-17 23:04:56','2013-07-18 04:05:10');
INSERT INTO solicitud_carrera VALUES('9','8','1','aprobada','0',NULL,'2013-07-17','23:06:50','0','2013-07-17 23:06:50','2013-07-18 04:07:35');
INSERT INTO solicitud_carrera VALUES('10','8','1','rechazada','0',NULL,'2013-07-17','23:13:17','0','2013-07-17 23:13:17','2013-07-18 15:17:09');
INSERT INTO solicitud_carrera VALUES('11','10','1','rechazada','0',NULL,'2013-07-17','23:15:20','0','2013-07-17 23:15:20','2013-07-18 15:17:10');
INSERT INTO solicitud_carrera VALUES('12','8','1','rechazada','0',NULL,'2013-07-17','23:19:00','0','2013-07-17 23:19:00','2013-07-18 15:17:09');
INSERT INTO solicitud_carrera VALUES('13','8','1','aprobada','0',NULL,'2013-07-17','23:22:23','0','2013-07-17 23:22:23','2013-07-18 15:17:07');
INSERT INTO solicitud_carrera VALUES('14','10','1','rechazada','0',NULL,'2013-07-17','23:24:28','0','2013-07-17 23:24:28','2013-07-18 15:17:11');
INSERT INTO solicitud_carrera VALUES('15','8','1','rechazada','0',NULL,'2013-07-17','23:26:28','0','2013-07-17 23:26:28','2013-07-18 15:17:12');
INSERT INTO solicitud_carrera VALUES('16','8','1','rechazada','5',NULL,'2013-07-18','10:16:55','0','2013-07-18 10:16:55','2013-07-18 15:26:02');
INSERT INTO solicitud_carrera VALUES('17','10','1','rechazada','5',NULL,'2013-07-18','10:26:14','0','2013-07-18 10:26:14','2013-07-18 15:33:26');
INSERT INTO solicitud_carrera VALUES('18','8','1','rechazada','6',NULL,'2013-07-18','10:33:32','0','2013-07-18 10:33:32','2013-07-18 15:39:57');
INSERT INTO solicitud_carrera VALUES('19','10','1','rechazada','6',NULL,'2013-07-18','10:39:49','0','2013-07-18 10:39:49','2013-07-18 15:40:18');
INSERT INTO solicitud_carrera VALUES('20','10','1','aprobada','6',NULL,'2013-07-18','10:40:26','0','2013-07-18 10:40:26','2013-07-18 15:40:39');
INSERT INTO solicitud_carrera VALUES('21','8','1','rechazada','0',NULL,'2013-07-18','10:41:57','0','2013-07-18 10:41:57','2013-07-18 15:42:50');
INSERT INTO solicitud_carrera VALUES('22','10','1','rechazada','0',NULL,'2013-07-18','10:42:41','0','2013-07-18 10:42:41','2013-07-19 01:21:48');
INSERT INTO solicitud_carrera VALUES('23','8','1','rechazada','0',NULL,'2013-07-18','10:43:17','0','2013-07-18 10:43:17','2013-07-19 01:21:49');
INSERT INTO solicitud_carrera VALUES('24','10','1','rechazada','0',NULL,'2013-07-18','10:47:00','0','2013-07-18 10:47:00','2013-07-19 01:21:49');
INSERT INTO solicitud_carrera VALUES('25','10','1','rechazada','0',NULL,'2013-07-18','10:54:12','0','2013-07-18 10:54:12','2013-07-19 01:21:50');
INSERT INTO solicitud_carrera VALUES('26','8','1','rechazada','0',NULL,'2013-07-18','10:56:10','0','2013-07-18 10:56:10','2013-07-19 01:21:50');
INSERT INTO solicitud_carrera VALUES('27','10','1','aprobada','0',NULL,'2013-07-18','10:58:02','0','2013-07-18 10:58:02','2013-07-19 01:21:44');
INSERT INTO solicitud_carrera VALUES('28','8','1','aprobada','0',NULL,'2013-07-18','10:59:04','0','2013-07-18 10:59:04','2013-07-19 01:21:43');
INSERT INTO solicitud_carrera VALUES('29','8','1','aprobada','0',NULL,'2013-07-18','11:00:02','0','2013-07-18 11:00:02','2013-07-19 01:21:44');
INSERT INTO solicitud_carrera VALUES('30','8','1','aprobada','0',NULL,'2013-07-18','11:15:45','0','2013-07-18 11:15:45','2013-07-19 01:21:45');
INSERT INTO solicitud_carrera VALUES('31','8','1','aprobada','0',NULL,'2013-07-18','11:27:22','0','2013-07-18 11:27:22','2013-07-19 01:21:45');
INSERT INTO solicitud_carrera VALUES('32','8','1','rechazada','0',NULL,'2013-07-18','11:28:41','0','2013-07-18 11:28:41','2013-07-19 01:21:51');
INSERT INTO solicitud_carrera VALUES('33','10','1','rechazada','0',NULL,'2013-07-18','11:34:15','0','2013-07-18 11:34:15','2013-07-19 01:21:52');
INSERT INTO solicitud_carrera VALUES('34','8','1','rechazada','0',NULL,'2013-07-18','11:35:41','0','2013-07-18 11:35:41','2013-07-19 01:21:52');
INSERT INTO solicitud_carrera VALUES('35','8','1','aprobada','0',NULL,'2013-07-18','11:39:51','0','2013-07-18 11:39:51','2013-07-19 01:21:46');
INSERT INTO solicitud_carrera VALUES('36','10','1','aprobada','0',NULL,'2013-07-18','11:48:04','0','2013-07-18 11:48:04','2013-07-19 01:21:46');
INSERT INTO solicitud_carrera VALUES('37','8','1','aprobada','0',NULL,'2013-07-18','11:50:07','0','2013-07-18 11:50:07','2013-07-19 01:21:47');
INSERT INTO solicitud_carrera VALUES('38','8','1','rechazada','0',NULL,'2013-07-18','20:21:32','0','2013-07-18 20:21:32','2013-07-19 01:21:59');
INSERT INTO solicitud_carrera VALUES('39','8','1','aprobada','0',NULL,'2013-07-18','20:22:28','0','2013-07-18 20:22:28','2013-07-19 01:22:43');
INSERT INTO solicitud_carrera VALUES('40','10','1','rechazada','0',NULL,'2013-07-18','20:22:56','0','2013-07-18 20:22:56','2013-07-19 01:23:08');
INSERT INTO solicitud_carrera VALUES('41','8','1','aprobada','0',NULL,'2013-09-17','17:14:23','0','2013-09-17 17:14:23','2013-09-18 02:40:58');
INSERT INTO solicitud_carrera VALUES('42','10','1','rechazada','0',NULL,'2013-09-17','17:44:54','0','2013-09-17 17:44:54','2013-09-18 02:40:59');
INSERT INTO solicitud_carrera VALUES('43','8','1','aprobada','1',NULL,'2013-09-17','19:21:59','0','2013-09-17 19:21:59','2013-09-18 02:40:58');
INSERT INTO solicitud_carrera VALUES('44','8','1','aprobada','0',NULL,'2013-09-17','21:40:47','0','2013-09-17 21:40:47','2013-09-18 02:41:09');






INSERT INTO sf_guard_user_group VALUES('3','2','2013-06-27 00:26:32','2013-06-27 00:26:32');



INSERT INTO sf_guard_user_permission
             VALUES('3','2','2013-06-27 00:26:32','2013-06-27 00:26:32');



INSERT INTO sf_guard_group_permission
             VALUES('1','1','2013-05-06 15:27:20','2013-05-06 15:27:20');
INSERT INTO sf_guard_group_permission
             VALUES('2','2','2013-05-06 15:27:20','2013-05-06 15:27:20');
INSERT INTO sf_guard_group_permission
             VALUES('3','3','2013-05-06 15:27:20','2013-05-06 15:27:20');









