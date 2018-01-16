SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE IF NOT EXISTS base_centro;

USE base_centro;

DROP TABLE IF EXISTS actividades;

CREATE TABLE `actividades` (
  `id_actividad` int(5) NOT NULL AUTO_INCREMENT,
  `id_asignacion_a_g` int(5) DEFAULT NULL,
  `periodo` int(5) DEFAULT NULL,
  `act_1` varchar(50) DEFAULT NULL,
  `act_2` varchar(50) DEFAULT NULL,
  `act_3` varchar(50) DEFAULT NULL,
  `act_4` varchar(50) DEFAULT NULL,
  `act_5` varchar(50) DEFAULT NULL,
  `act_6` varchar(50) DEFAULT NULL,
  `act_7` varchar(50) DEFAULT NULL,
  `act_8` varchar(50) DEFAULT NULL,
  `act_9` varchar(50) DEFAULT NULL,
  `id_materia` int(5) DEFAULT NULL,
  `turno_a` int(5) DEFAULT NULL,
  `estado_a` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_actividad`),
  KEY `asig_a_g` (`id_asignacion_a_g`),
  KEY `materia` (`id_materia`),
  CONSTRAINT `asig_a_g` FOREIGN KEY (`id_asignacion_a_g`) REFERENCES `asignacion_a_g` (`id_asignacion`),
  CONSTRAINT `materia` FOREIGN KEY (`id_materia`) REFERENCES `materias` (`id_materia`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO actividades VALUES("1","2","1","examen1","examen2","examen3","examen4","examen5","examen6","examen7","examen8","examen9","4","1","enProceso");
INSERT INTO actividades VALUES("2","2","2","Album numeros","Album sumas","Album restas","Album multiplicaciones","Album divisiones","examen sumas","examen restas","examen multiplicaciones","examen division","4","1","procesado");
INSERT INTO actividades VALUES("3","2","3","ee","eee","eee","eee","eee","eee","eee","eee","eee","4","1","procesado");
INSERT INTO actividades VALUES("4","1","1","ww","ww","ww","ww","ww","ww","ww","ww","ww","3","1","enProceso");
INSERT INTO actividades VALUES("5","1","2","aaa","aaa","aaa","aa","aa","aaa","aaaa","aaa","aaa","3","1","esperando");
INSERT INTO actividades VALUES("6","1","3","xx","xx","xxx","xx","xxx","xxx","xxx","xx","xxx","3","1","esperando");
INSERT INTO actividades VALUES("8","2","1","cc","cc","cc","cc","cc","ccc","ccc","ccc","cccc","6","1","enProceso");



DROP TABLE IF EXISTS actividades_materia;

CREATE TABLE `actividades_materia` (
  `id_actividades_m` int(5) NOT NULL AUTO_INCREMENT,
  `id_asignacion_m` int(5) DEFAULT NULL,
  `id_grado` int(5) DEFAULT NULL,
  `periodo` int(5) DEFAULT NULL,
  `act_1` varchar(50) DEFAULT NULL,
  `act_2` varchar(50) DEFAULT NULL,
  `act_3` varchar(50) DEFAULT NULL,
  `act_4` varchar(50) DEFAULT NULL,
  `act_5` varchar(50) DEFAULT NULL,
  `act_6` varchar(50) DEFAULT NULL,
  `act_7` varchar(50) DEFAULT NULL,
  `act_8` varchar(50) DEFAULT NULL,
  `act_9` varchar(50) DEFAULT NULL,
  `turno_a` int(5) DEFAULT NULL,
  `estado_a` varchar(15) DEFAULT NULL,
  `id_materia` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_actividades_m`),
  KEY `asig_m` (`id_asignacion_m`),
  KEY `materia_a` (`id_grado`),
  CONSTRAINT `asig_m` FOREIGN KEY (`id_asignacion_m`) REFERENCES `asignacion_m` (`id_asig_m`),
  CONSTRAINT `materia_a` FOREIGN KEY (`id_grado`) REFERENCES `materias` (`id_materia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS alumno;

CREATE TABLE `alumno` (
  `id_alumno` int(5) NOT NULL AUTO_INCREMENT,
  `nie` int(10) DEFAULT NULL,
  `nom_alumno` varchar(45) DEFAULT NULL,
  `ape_alumno` varchar(45) DEFAULT NULL,
  `gen_alumno` varchar(115) DEFAULT NULL,
  `f_nac_alum` date DEFAULT NULL,
  `nac_alum` varchar(15) DEFAULT NULL,
  `dir_alum` varchar(150) DEFAULT NULL,
  `depto_alum` varchar(30) DEFAULT NULL,
  `mun_alum` varchar(30) DEFAULT NULL,
  `distancia` int(7) DEFAULT NULL,
  `tel` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_alumno`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

INSERT INTO alumno VALUES("1","1111111","Cristol","Acero","M","0000-00-00","","","","","0","");
INSERT INTO alumno VALUES("2","222222","Antonio","Granados","M","0000-00-00","","","","","0","");
INSERT INTO alumno VALUES("3","333333","David","Aguilera","M","0000-00-00","","","","","0","");
INSERT INTO alumno VALUES("4","4444444","Luna","Egena","F","0000-00-00","","","","","0","");
INSERT INTO alumno VALUES("5","555555","Lucia","Castro","F","0000-00-00","","","","","0","");
INSERT INTO alumno VALUES("6","666666","Emerita","Gallega","F","0000-00-00","","","","","0","");
INSERT INTO alumno VALUES("7","7777777","Francisca","Aguilar","F","0000-00-00","","","","","0","");
INSERT INTO alumno VALUES("8","1122222","Maria","Celestina","F","0000-00-00","","","","","0","");
INSERT INTO alumno VALUES("9","1245789","Francisco","Alarcon","M","0000-00-00","","","","","0","");
INSERT INTO alumno VALUES("10","14875221","Francisca","Velasquez","F","0000-00-00","","","","","0","");
INSERT INTO alumno VALUES("11","5879674","Sergio","Arenas","M","0000-00-00","","","","","0","");
INSERT INTO alumno VALUES("12","78945612","Rafael","Borego","M","0000-00-00","","","","","0","");
INSERT INTO alumno VALUES("13","7894555","Daniel","Caballero","M","0000-00-00","","","","","0","");
INSERT INTO alumno VALUES("14","1457896","Alberto","Sanchez","M","0000-00-00","","","","","0","");
INSERT INTO alumno VALUES("15","154545455","Juan","Guerrero","M","0000-00-00","","","","","0","");
INSERT INTO alumno VALUES("16","14542245","Gerson","Duran","M","0000-00-00","","","","","0","");
INSERT INTO alumno VALUES("17","4154554","Mayra ","Guzman","F","0000-00-00","","","","","0","");
INSERT INTO alumno VALUES("18","4155456","Marcos","Martinez","M","0000-00-00","","","","","0","");
INSERT INTO alumno VALUES("19","1455445","Saul","Reyes","M","0000-00-00","","","","","0","");
INSERT INTO alumno VALUES("20","14546556","Angelica","Cruz","F","0000-00-00","","","","","0","");
INSERT INTO alumno VALUES("21","65894456","Maribel","Portillo","F","0000-00-00","","","","","0","");
INSERT INTO alumno VALUES("22","45897788","Rafael","Cruz","M","0000-00-00","","","","","0","");



DROP TABLE IF EXISTS asignacion_a_g;

CREATE TABLE `asignacion_a_g` (
  `id_asignacion` int(5) NOT NULL AUTO_INCREMENT,
  `id_gra` int(5) DEFAULT NULL,
  `id_secci` int(5) DEFAULT NULL,
  `id_docentes` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_asignacion`),
  KEY `grados` (`id_gra`),
  KEY `secciones` (`id_secci`),
  KEY `docentes` (`id_docentes`),
  CONSTRAINT `doc` FOREIGN KEY (`id_docentes`) REFERENCES `docente` (`id_doc`),
  CONSTRAINT `grados` FOREIGN KEY (`id_gra`) REFERENCES `grado` (`id_grado`),
  CONSTRAINT `secc` FOREIGN KEY (`id_secci`) REFERENCES `seccion` (`id_seccion`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

INSERT INTO asignacion_a_g VALUES("1","1","1","6");
INSERT INTO asignacion_a_g VALUES("2","2","1","2");
INSERT INTO asignacion_a_g VALUES("3","3","1","3");
INSERT INTO asignacion_a_g VALUES("4","4","1","4");
INSERT INTO asignacion_a_g VALUES("5","5","1","1");
INSERT INTO asignacion_a_g VALUES("6","6","1","2");
INSERT INTO asignacion_a_g VALUES("7","7","1","3");
INSERT INTO asignacion_a_g VALUES("8","8","1","4");
INSERT INTO asignacion_a_g VALUES("10","9","1","5");



DROP TABLE IF EXISTS asignacion_m;

CREATE TABLE `asignacion_m` (
  `id_asig_m` int(5) NOT NULL AUTO_INCREMENT,
  `id_docente` int(5) DEFAULT NULL,
  `id_materia` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_asig_m`),
  KEY `materias` (`id_materia`),
  KEY `id_docc` (`id_docente`),
  CONSTRAINT `docentes` FOREIGN KEY (`id_docente`) REFERENCES `docente` (`id_doc`),
  CONSTRAINT `mat` FOREIGN KEY (`id_materia`) REFERENCES `materias` (`id_materia`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO asignacion_m VALUES("1","1","1");
INSERT INTO asignacion_m VALUES("2","2","2");
INSERT INTO asignacion_m VALUES("3","3","3");
INSERT INTO asignacion_m VALUES("4","5","4");
INSERT INTO asignacion_m VALUES("5","4","6");
INSERT INTO asignacion_m VALUES("6","6","5");



DROP TABLE IF EXISTS boleta1_6;

CREATE TABLE `boleta1_6` (
  `id_boleta` int(5) NOT NULL AUTO_INCREMENT,
  `asignaturas` varchar(20) DEFAULT NULL,
  `pe1` float NOT NULL,
  `pe2` float NOT NULL,
  `pe3` float NOT NULL,
  `id_inscripcion` int(5) DEFAULT NULL,
  `final` float NOT NULL,
  PRIMARY KEY (`id_boleta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS docente;

CREATE TABLE `docente` (
  `id_doc` int(5) NOT NULL AUTO_INCREMENT,
  `nom_doc` varchar(45) DEFAULT NULL,
  `ape_doc` varchar(45) DEFAULT NULL,
  `dir_doc` varchar(150) DEFAULT NULL,
  `tel_doc` varchar(10) DEFAULT NULL,
  `gen_doc` varchar(10) DEFAULT NULL,
  `f_nac_doc` date DEFAULT NULL,
  `cor_doc` varchar(100) DEFAULT NULL,
  `nip_doc` varchar(10) DEFAULT NULL,
  `nit` varchar(17) DEFAULT NULL,
  `dui_doc` varchar(10) DEFAULT NULL,
  `esp_doc` varchar(50) DEFAULT NULL,
  `foto_doc` longblob,
  PRIMARY KEY (`id_doc`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO docente VALUES("1","Reina","Gutierrez","San Vicente","789984","","0000-00-00","","","","","","");
INSERT INTO docente VALUES("2","Jorge","Paniagua","Santa Tecla","7852021","","0000-00-00","","","","","","");
INSERT INTO docente VALUES("3","Alex","Portillo","Verapaz","77504578","","","","","","","","");
INSERT INTO docente VALUES("4","Rosalba","Alfaro","San Rafael Cedros","78404125","","","","","","","","");
INSERT INTO docente VALUES("5","Milagro","Herrera","Cojutepeque","63214489","","","","","","","","");
INSERT INTO docente VALUES("6","Juana","Alvarado","Ilobasco","25253656","","","","","","","","");



DROP TABLE IF EXISTS encargado;

CREATE TABLE `encargado` (
  `id_encargado` int(5) NOT NULL AUTO_INCREMENT,
  `nom_enc` varchar(60) DEFAULT NULL,
  `ape_enc` varchar(60) DEFAULT NULL,
  `profe_enc` varchar(28) DEFAULT NULL,
  `dir_trab_enc` varchar(100) DEFAULT NULL,
  `dui_enc` varchar(11) DEFAULT NULL,
  `tel_enc` varchar(10) DEFAULT NULL,
  `id_alumno` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_encargado`),
  KEY `id_alumos` (`id_alumno`),
  CONSTRAINT `encar` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id_alumno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS grado;

CREATE TABLE `grado` (
  `id_grado` int(5) NOT NULL AUTO_INCREMENT,
  `nom_grado` varchar(10) DEFAULT NULL,
  `num_aula` varchar(5) DEFAULT NULL,
  `turno_grado` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id_grado`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

INSERT INTO grado VALUES("1","Primero","1","1");
INSERT INTO grado VALUES("2","Segundo","2","1");
INSERT INTO grado VALUES("3","Tercero","3","1");
INSERT INTO grado VALUES("4","Cuarto","4","1");
INSERT INTO grado VALUES("5","Quinto","1","11");
INSERT INTO grado VALUES("6","Sexto","2","11");
INSERT INTO grado VALUES("7","Septimo","3","0");
INSERT INTO grado VALUES("8","Octavo","4","0");
INSERT INTO grado VALUES("9","Noveno","5","0");



DROP TABLE IF EXISTS horario;

CREATE TABLE `horario` (
  `identificador` int(5) DEFAULT NULL,
  `Lunes` varchar(25) DEFAULT NULL,
  `martes` varchar(25) DEFAULT NULL,
  `miercoles` varchar(25) DEFAULT NULL,
  `jueves` varchar(25) DEFAULT NULL,
  `viernes` varchar(25) DEFAULT NULL,
  `hora` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO horario VALUES("5","Lenguaje","Sociales","Fisica","Lenguaje","Ciencia","1:00-1:45");
INSERT INTO horario VALUES("5","Lenguaje","Artistica","Fisica","Lenguaje","Ciencia","1:45-2:30");
INSERT INTO horario VALUES("5","Sociales","Artistica","Matematica","Matematica","Matematica","2:50-3:35");
INSERT INTO horario VALUES("5","Sociales","Ciencia","Ciencia","Matematica","Matematica","3:35-4:20");
INSERT INTO horario VALUES("5","Artistica","Fisica","Ciencia","Lenguaje","Sociales","4:40-5:25");
INSERT INTO horario VALUES("6","Sociales","Lenguaje","Matematica","Sociales","Lenguaje","1:00-1:45");
INSERT INTO horario VALUES("6","Sociales","Lenguaje","Matematica","Fisica","Lenguaje","1:45-2:30");
INSERT INTO horario VALUES("6","Matematica","Matematica","Artistica","Fisica","Ciencia","2:50-3:35");
INSERT INTO horario VALUES("6","Matematica","Artistica","Artistica","Ciencia","Ciencia","3:35-4:20");
INSERT INTO horario VALUES("6","Lenguaje","Ciencia","Sociales","Ciencia","Fisica","4:40-5:25");
INSERT INTO horario VALUES("7","Ciencia","Sociales","Ciencia","Sociales","Matematica","1:00-1:45");
INSERT INTO horario VALUES("7","Ciencia","Sociales","Ciencia","Ingles","Matematica","1:45-2:30");
INSERT INTO horario VALUES("7","Lenguaje","Ingles","Sociales","Ingles","Lenguaje","2:50-3:35");
INSERT INTO horario VALUES("7","Lenguaje","Matematica","Sociales","Fisica","Lenguaje","3:35-4:20");
INSERT INTO horario VALUES("7","Matematica","Matematica","Lenguaje","Fisica","Ciencia","4:40-5:25");
INSERT INTO horario VALUES("8","Matematica","Ciencia","Ingles","Ciencia","Fisica","1:00-1:45");
INSERT INTO horario VALUES("8","Matematica","Ciencia","Ingles","Ciencia","Fisica","1:45-2:30");
INSERT INTO horario VALUES("8","Sociales","Lenguaje","Lenguaje","Lenguaje","Sociales","2:50-3:35");
INSERT INTO horario VALUES("8","Sociales","Ingles","Matematica","Lenguaje","Sociales","3:35-4:20");
INSERT INTO horario VALUES("8","Ciencia","Sociales","Matematica","Matematica","Lenguaje","4:40-5:25");
INSERT INTO horario VALUES("9","Sociales","Matematica","Lenguaje","Matematica","Ingles","1:00-1:45");
INSERT INTO horario VALUES("9","Sociales","Matematica","Lenguaje","Matematica","Ingles","1:45-2:30");
INSERT INTO horario VALUES("9","Ciencia","Ciencia","Ciencia","Ciencia","Fisica","2:50-3:35");
INSERT INTO horario VALUES("9","Ciencia","Lenguaje","Lenguaje","Sociales","Fisica","3:35-4:20");
INSERT INTO horario VALUES("9","Ingles","Lenguaje","Sociales","Sociales","Matematica","4:40-5:25");



DROP TABLE IF EXISTS horarios;

CREATE TABLE `horarios` (
  `id_horario` int(5) NOT NULL AUTO_INCREMENT,
  `id_docente` int(5) DEFAULT NULL,
  `id_grado` int(5) DEFAULT NULL,
  `lunes` varchar(15) DEFAULT NULL,
  `martes` varchar(15) DEFAULT NULL,
  `miercoles` varchar(15) DEFAULT NULL,
  `jueves` varchar(15) DEFAULT NULL,
  `viernes` varchar(15) DEFAULT NULL,
  `hora` varchar(15) DEFAULT '',
  PRIMARY KEY (`id_horario`),
  KEY `docentesH` (`id_docente`),
  KEY `graH` (`id_grado`),
  CONSTRAINT `docentesH` FOREIGN KEY (`id_docente`) REFERENCES `docente` (`id_doc`),
  CONSTRAINT `graH` FOREIGN KEY (`id_grado`) REFERENCES `grado` (`id_grado`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

INSERT INTO horarios VALUES("26","2","2","Matematica","Lenguaje","Lenguaje","Matematica","Matematica","7:15-8:00 am");
INSERT INTO horarios VALUES("27","2","2","Lenguaje","Lenguaje","Lenguaje","Ciencia","Matematica","8:00-8:45 am");
INSERT INTO horarios VALUES("28","2","2","Lenguaje","Ciencia","Lenguaje","Lenguaje","Matematica","9:05-9:50 am");
INSERT INTO horarios VALUES("29","2","2","Lenguaje","Matematica","Lenguaje","Lenguaje","Artistica","9:50-10:35 am");
INSERT INTO horarios VALUES("30","2","2","Sociales","Matematica","Artistica","Lenguaje","Sociales","10:55-11:45 am");



DROP TABLE IF EXISTS inscripcion;

CREATE TABLE `inscripcion` (
  `id_inscripcion` int(5) NOT NULL AUTO_INCREMENT,
  `f_matricula` date DEFAULT NULL,
  `ult_grado` varchar(10) DEFAULT NULL,
  `nom_centro` varchar(100) DEFAULT NULL,
  `anio_cgrado` int(5) DEFAULT NULL,
  `turno` int(5) DEFAULT NULL,
  `nivel` varchar(10) DEFAULT NULL,
  `pres_docs` varchar(150) DEFAULT NULL,
  `cod_inst_ant` int(10) DEFAULT NULL,
  `cod_centro` int(10) DEFAULT NULL,
  `id_grado` int(5) DEFAULT NULL,
  `id_seccion` int(5) DEFAULT NULL,
  `id_alumno` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_inscripcion`),
  KEY `id_alumno` (`id_alumno`),
  KEY `id_grado` (`id_grado`),
  KEY `id_ins` (`cod_centro`),
  KEY `id_seccion` (`id_seccion`),
  CONSTRAINT `centro` FOREIGN KEY (`cod_centro`) REFERENCES `institucion` (`cod_centro`),
  CONSTRAINT `grado` FOREIGN KEY (`id_grado`) REFERENCES `grado` (`id_grado`),
  CONSTRAINT `inscri` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id_alumno`),
  CONSTRAINT `seccion` FOREIGN KEY (`id_seccion`) REFERENCES `seccion` (`id_seccion`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

INSERT INTO inscripcion VALUES("1","0000-00-00","","","0","0","","","0","0","1","1","1");
INSERT INTO inscripcion VALUES("2","0000-00-00","","","0","0","","","0","0","1","1","2");
INSERT INTO inscripcion VALUES("3","0000-00-00","","","0","0","","","0","0","2","1","3");
INSERT INTO inscripcion VALUES("4","0000-00-00","","","0","0","","","0","0","2","1","4");
INSERT INTO inscripcion VALUES("5","0000-00-00","","","0","0","","","0","0","3","1","5");
INSERT INTO inscripcion VALUES("6","0000-00-00","","","0","0","","","0","0","3","1","6");
INSERT INTO inscripcion VALUES("7","0000-00-00","","","0","0","","","0","0","4","1","7");
INSERT INTO inscripcion VALUES("8","0000-00-00","","","0","0","","","0","0","4","1","8");
INSERT INTO inscripcion VALUES("9","0000-00-00","","","0","0","","","0","0","5","1","9");
INSERT INTO inscripcion VALUES("10","0000-00-00","","","0","0","","","0","0","5","1","10");
INSERT INTO inscripcion VALUES("11","0000-00-00","","","0","0","","","0","0","6","1","11");
INSERT INTO inscripcion VALUES("12","0000-00-00","","","0","0","","","0","0","6","1","12");
INSERT INTO inscripcion VALUES("13","0000-00-00","","","0","0","","","0","0","7","1","13");
INSERT INTO inscripcion VALUES("14","0000-00-00","","","0","0","","","0","0","7","1","14");
INSERT INTO inscripcion VALUES("15","0000-00-00","","","0","0","","","0","0","8","1","15");
INSERT INTO inscripcion VALUES("16","0000-00-00","","","0","0","","","0","0","8","1","16");
INSERT INTO inscripcion VALUES("17","0000-00-00","","","0","0","","","0","0","9","1","17");
INSERT INTO inscripcion VALUES("18","0000-00-00","","","0","0","","","0","0","9","1","18");
INSERT INTO inscripcion VALUES("19","0000-00-00","","","0","0","","","0","0","1","1","19");
INSERT INTO inscripcion VALUES("20","0000-00-00","","","0","0","","","0","0","2","1","20");
INSERT INTO inscripcion VALUES("21","0000-00-00","","","0","0","","","0","0","3","1","21");
INSERT INTO inscripcion VALUES("22","0000-00-00","","","0","0","","","0","0","4","1","22");



DROP TABLE IF EXISTS institucion;

CREATE TABLE `institucion` (
  `cod_centro` int(5) NOT NULL AUTO_INCREMENT,
  `nombre_centro` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cod_centro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS madre;

CREATE TABLE `madre` (
  `id_madre` int(5) NOT NULL AUTO_INCREMENT,
  `nom_mad` varchar(30) DEFAULT NULL,
  `ape_mad` varchar(30) DEFAULT NULL,
  `profe_mad` varchar(30) DEFAULT NULL,
  `dir_mad` varchar(100) DEFAULT NULL,
  `dui_mad` varchar(10) DEFAULT NULL,
  `tel_mad` varchar(10) DEFAULT NULL,
  `id_alumno` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_madre`),
  KEY `id_alu` (`id_alumno`),
  CONSTRAINT `alumno` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id_alumno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS materias;

CREATE TABLE `materias` (
  `id_materia` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `turno_materia` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_materia`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO materias VALUES("1","Fisica","1");
INSERT INTO materias VALUES("2","Sociales","1");
INSERT INTO materias VALUES("3","Lenguaje","1");
INSERT INTO materias VALUES("4","Matematica","1");
INSERT INTO materias VALUES("5","Ingles","0");
INSERT INTO materias VALUES("6","Ciencia","1");
INSERT INTO materias VALUES("7","Artistica","1");



DROP TABLE IF EXISTS notas;

CREATE TABLE `notas` (
  `id_nota` int(5) NOT NULL AUTO_INCREMENT,
  `id_inscripcion` int(5) DEFAULT NULL,
  `nota_1` int(5) DEFAULT NULL,
  `nota_2` int(5) DEFAULT NULL,
  `nota_3` int(5) DEFAULT NULL,
  `porcentaje_35` int(5) DEFAULT NULL,
  `nota_4` int(5) DEFAULT NULL,
  `nota_5` int(5) DEFAULT NULL,
  `nota_6` int(5) DEFAULT NULL,
  `por_35` int(5) DEFAULT NULL,
  `nota_7` int(5) DEFAULT NULL,
  `nota_8` int(5) DEFAULT NULL,
  `nota_9` int(5) DEFAULT NULL,
  `porcentaje_30` int(5) DEFAULT NULL,
  `refuerzo` int(5) DEFAULT NULL,
  `prom_final` int(5) DEFAULT NULL,
  `periodo` int(5) DEFAULT NULL,
  `estado_n` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_nota`),
  KEY `inscripcion` (`id_inscripcion`),
  CONSTRAINT `inscripcion` FOREIGN KEY (`id_inscripcion`) REFERENCES `inscripcion` (`id_inscripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

INSERT INTO notas VALUES("1","11","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","");
INSERT INTO notas VALUES("2","12","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","");
INSERT INTO notas VALUES("3","3","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","");
INSERT INTO notas VALUES("4","4","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","");
INSERT INTO notas VALUES("5","20","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","");
INSERT INTO notas VALUES("6","11","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","");
INSERT INTO notas VALUES("7","12","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","");
INSERT INTO notas VALUES("8","11","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","");
INSERT INTO notas VALUES("9","12","0","0","0","0","0","0","0","0","0","0","0","0","0","0","0","");



DROP TABLE IF EXISTS notas_2;

CREATE TABLE `notas_2` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `id_inscripcion` int(5) DEFAULT NULL,
  `id_materia` int(5) DEFAULT NULL,
  `id_grado` int(5) DEFAULT NULL,
  `periodo` int(5) DEFAULT NULL,
  `nota1` float NOT NULL,
  `nota2` float NOT NULL,
  `nota3` float NOT NULL,
  `nota4` float NOT NULL,
  `estado_n` varchar(15) DEFAULT NULL,
  `por35` float NOT NULL,
  `notaF` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8;

INSERT INTO notas_2 VALUES("77","3","4","2","1","0","0","0","0","procesado","0","9.7");
INSERT INTO notas_2 VALUES("78","4","4","2","1","10","9","5","0","procesado","3.5","10");
INSERT INTO notas_2 VALUES("79","20","4","2","1","0","8","0","0","procesado","0","4");
INSERT INTO notas_2 VALUES("80","3","4","2","2","10","9","5","0","procesado","2.8","5");
INSERT INTO notas_2 VALUES("81","3","4","2","3","10","10","10","0","procesado","3.5","6");
INSERT INTO notas_2 VALUES("82","11","7","6","1","10","0","0","0","procesado","1.17","0");
INSERT INTO notas_2 VALUES("85","12","7","6","1","5","0","9","0","procesado","1.63","0");
INSERT INTO notas_2 VALUES("86","12","7","6","2","0","10","0","0","procesado","1.17","0");
INSERT INTO notas_2 VALUES("87","12","7","6","3","0","10","0","0","procesado","1.17","0");
INSERT INTO notas_2 VALUES("88","11","7","6","3","9","0","0","0","procesado","1.05","0");
INSERT INTO notas_2 VALUES("89","11","7","6","1","0","0","0","0","enProceso","0","0");
INSERT INTO notas_2 VALUES("90","3","4","2","1","0","0","0","0","enProceso","0","0");



DROP TABLE IF EXISTS padre;

CREATE TABLE `padre` (
  `id_padre` int(5) NOT NULL AUTO_INCREMENT,
  `nom_pad` varchar(45) DEFAULT NULL,
  `ape_pad` varchar(45) DEFAULT NULL,
  `profe_pad` varchar(25) DEFAULT NULL,
  `dui_pad` varchar(15) DEFAULT NULL,
  `tel_pad` varchar(10) DEFAULT NULL,
  `id_alumno` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_padre`),
  KEY `id_alum` (`id_alumno`),
  CONSTRAINT `padre` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id_alumno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS proceso;

CREATE TABLE `proceso` (
  `id` int(11) NOT NULL,
  `habilitar` varchar(255) DEFAULT NULL,
  `mensaje` varchar(200) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO proceso VALUES("1","desactivar","Fecha limite para procesar:","2018-01-12");



DROP TABLE IF EXISTS seccion;

CREATE TABLE `seccion` (
  `id_seccion` int(5) NOT NULL AUTO_INCREMENT,
  `nombre_seccion` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_seccion`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO seccion VALUES("1","A");



DROP TABLE IF EXISTS usuarios;

CREATE TABLE `usuarios` (
  `id_usuario` int(5) NOT NULL AUTO_INCREMENT,
  `user` varchar(30) DEFAULT NULL,
  `con` varchar(50) DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL,
  `tipo` varchar(10) DEFAULT NULL,
  `id_doc` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `id_doc` (`id_doc`),
  CONSTRAINT `usuario` FOREIGN KEY (`id_doc`) REFERENCES `docente` (`id_doc`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO usuarios VALUES("1","reina23","1111","a","ad","1");
INSERT INTO usuarios VALUES("2","jor24","2222","a","p","2");
INSERT INTO usuarios VALUES("3","ale25","3333","a","p","3");
INSERT INTO usuarios VALUES("4","ro26","4444","a","p","4");
INSERT INTO usuarios VALUES("5","mil26","5555","a","p","5");
INSERT INTO usuarios VALUES("6","ju27","6666","a","p","6");



SET FOREIGN_KEY_CHECKS=1;